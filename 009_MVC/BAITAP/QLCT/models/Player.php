<?php
// Ket noi voi database
class Player
{
    // lay ta ca du lieu
    public static function all()
    {
        global $conn;

        if (isset($_GET["s"]) || isset($_GET["s1"])) {
            $s = isset($_GET["s"]) ? $_GET["s"] : "";
            $s1 = isset($_GET["s1"]) ? $_GET["s1"] : "";
            $conditions = [];
        
            if (!empty(trim($s))) {
                $conditions[] = "(players.name LIKE '%$s%' OR players.country LIKE '%$s%' OR players.id LIKE '%$s%')";
            }
        
            if (!empty(trim($s1))) {
                $conditions[] = "players.id LIKE '%$s1%'";
            }
        
            $conditionsString = implode(" OR ", $conditions);
        
            $sql = "SELECT players.*, teams.name AS team_name
                FROM players
                JOIN teams ON players.team_id = teams.id";
        
            if (!empty($conditionsString)) {
                $sql .= " WHERE $conditionsString";
            }
        
            $sql .= " ORDER BY players.id DESC";
        } else {
            $sql = "SELECT players.*, teams.name AS team_name
                FROM players
                JOIN teams ON players.team_id = teams.id
                ORDER BY players.id DESC";
        }
        
        

        $playersPerPage = 4;
        $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $start_index = ($current_page - 1) * $playersPerPage;

        $sql_count = "SELECT COUNT(*) AS total_records FROM players";
        $stmt_count = $conn->query($sql_count);
        $total_records = $stmt_count->fetch(PDO::FETCH_ASSOC)['total_records'];

        $sql .= " LIMIT $start_index, $playersPerPage";
        $stmt = $conn->query($sql);
        $players = $stmt->fetchAll(PDO::FETCH_OBJ);

        $data = [
            'players' => $players,
            'total_records' => $total_records,
            'current_page' => $current_page,
            'players_per_page' => $playersPerPage
        ];

        // Trả về cho Model
        return $data;
    }


    // lay chi tiet 1 du lieu
    public static function find($id)
    {
        global $conn;
        $sql = "SELECT players.*, teams.name AS team_name
        FROM players
        JOIN teams ON players.team_id = teams.id
        WHERE players.id = $id";

        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $row = $stmt->fetch();
        return $row;
    }

    // Them moi du lieu
    public static function store($data)
    {

        global $conn;
        $name = $data['name'];
        $date = $data['date'];
        $country = $data['country'];
        // $image = $data['image'];
        $team_id  = $data['team_id'];

        if (isset($_FILES['image'])) {
            if (!$_FILES['image']['error']) {
                move_uploaded_file($_FILES['image']['tmp_name'], ROOT_DIR . '/public/uploads/' . $_FILES['image']['name']);
                $image = '/public/uploads/' . $_FILES['image']['name'];
            }
        }

        $sql = "INSERT INTO `players` 
            ( `name`, `date`, `country`,`image`,`team_id`) 
            VALUES 
            ('$name','$date','$country','$image','$team_id')";
        //Thuc hien truy van
        $conn->exec($sql);
        return true;
    }

    // Cap nhat du lieu
    public static function update($id, $data)
    {
        global $conn;
        $name = $data['name'];
        $date = $data['date'];
        $country = $data['country'];
        $team_id = $data['team_id'];

        // Kiểm tra xem đã tải lên ảnh mới hay chưa
        if (isset($_FILES['image']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
            // Đường dẫn thư mục tải lên
            $uploadDir = ROOT_DIR . '/public/uploads/';

            // Xóa ảnh cũ nếu có
            $sql = "SELECT `image` FROM `players` WHERE `id` = $id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $oldImage = $stmt->fetchColumn();

            if ($oldImage && file_exists($uploadDir . $oldImage)) {
                unlink($uploadDir . $oldImage);
            }

            // Di chuyển ảnh mới vào thư mục đích
            $newImage = $uploadDir . $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], $newImage);
            $image = '/public/uploads/' . $_FILES['image']['name'];
        } else {
            // Không có ảnh mới được tải lên, giữ nguyên ảnh cũ
            $sql = "SELECT `image` FROM `players` WHERE `id` = $id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $image = $stmt->fetchColumn();
        }

        $sql = "UPDATE `players` SET `name` = :name, `date` = :date, `image` = :image, `country` = :country, `team_id` = :team_id WHERE `id` = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':country', $country);
        $stmt->bindParam(':team_id', $team_id);
        $stmt->bindParam(':id', $id);

        $stmt->execute();
        return true;
    }


    //Xoa du lieu
    public static function delete($id)
    {
        global $conn;
        $sql = "DELETE FROM `players` WHERE `id` = $id";
        // Thuc thi SQL
        $conn->exec($sql);
        return true;
    }
}
