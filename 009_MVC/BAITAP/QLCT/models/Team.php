<?php
// Ket noi voi database
class Team
{
    // lay ta ca du lieu
    public static function all()
    {
        global $conn;
        if ((isset($_GET["a"]) && !empty(trim($_GET["a"]))) || (isset($_GET["a1"]) && !empty(trim($_GET["a1"])))) {
            $s = isset($_GET["a"]) ? $_GET["a"] : "";
            $s1 = isset($_GET["a1"]) ? $_GET["a1"] : "";
            $conditions = [];

            if (!empty(trim($s))) {
                $conditions[] = "(teams.name LIKE '%$s%' OR teams.country LIKE '%$s%')";
            }

            if (!empty(trim($s1))) {
                $conditions[] = "(teams.id LIKE '%$s1%')";
            }

            $conditionsString = implode(" OR ", $conditions);

            $sql = "SELECT * FROM `teams`";

            if (!empty($conditionsString)) {
                $sql .= " WHERE $conditionsString";
            }

            $sql .= " ORDER BY id DESC";
        } else {
            $sql = "SELECT * FROM `teams` ORDER BY id DESC";
        }

        $teamsPerPage = 4;
        $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $start_index = ($current_page - 1) * $teamsPerPage;

        $sql_count = "SELECT COUNT(*) AS total_records FROM teams";
        $stmt_count = $conn->query($sql_count);
        $total_records = $stmt_count->fetch(PDO::FETCH_ASSOC)['total_records'];

        $sql .= " LIMIT $start_index, $teamsPerPage";
        $stmt = $conn->query($sql);
        $teams = $stmt->fetchAll(PDO::FETCH_OBJ);
        // var_dump($teams);
        $data = [
            'teams' => $teams,
            'total_records' => $total_records,
            'current_page' => $current_page,
            'teams_per_page' => $teamsPerPage
        ];

        // Tra ve cho Model
        return $data;
    }
    public static function create()
    {
        global $conn;
        $sql = "SELECT * FROM `teams`";
        $stmt = $conn->query($sql);
        $row = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $row;
    }
    // lay chi tiet 1 du lieu
    public static function find($id)
    {
        global $conn;
        $sql = "SELECT * FROM `teams` WHERE id = $id";
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
        $country = $data['country'];
        // $image = $data['image'];


        if (isset($_FILES['image'])) {
            if (!$_FILES['image']['error']) {
                move_uploaded_file($_FILES['image']['tmp_name'], ROOT_DIR . '/public/uploads/team' . $_FILES['image']['name']);
                $image = '/public/uploads/team' . $_FILES['image']['name'];
            }
        }
        $sql = "INSERT INTO `teams` 
        ( `name`,`country`,`image`) 
        VALUES 
        ('$name','$country','$image')";
        //Thuc hien truy van
        $conn->exec($sql);
        return true;
    }

    // Cap nhat du lieu
    public static function update($id, $data)
    {
        global $conn;
        $name = $data['name'];
        $country = $data['country'];

        // Kiểm tra xem đã tải lên ảnh mới hay chưa
        if (isset($_FILES['image']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
            // Đường dẫn thư mục tải lên
            $uploadDir = ROOT_DIR . '/public/uploads/team/';

            // Xóa ảnh cũ nếu có
            $sql = "SELECT `image` FROM `teams` WHERE `id` = $id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $oldImage = $stmt->fetchColumn();

            if ($oldImage && file_exists($uploadDir . $oldImage)) {
                unlink($uploadDir . $oldImage);
            }

            // Di chuyển ảnh mới vào thư mục đích
            $newImage = $uploadDir . $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], $newImage);
            $image = '/public/uploads/team/' . $_FILES['image']['name'];
        } else {
            // Không có ảnh mới được tải lên, giữ nguyên ảnh cũ
            $sql = "SELECT `image` FROM `teams` WHERE `id` = $id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $image = $stmt->fetchColumn();
        }

        $sql = "UPDATE `teams` SET `name` = :name, `image` = :image, `country` = :country WHERE `id` = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':country', $country);
        $stmt->bindParam(':id', $id);

        $stmt->execute();
        return true;
    }



    //Xoa du lieu
    public static function delete($id)
    {
        global $conn;
        $sql = "DELETE FROM `teams` WHERE `id` = $id";
        // Thuc thi SQL
        $conn->exec($sql);
        return true;
    }
}
