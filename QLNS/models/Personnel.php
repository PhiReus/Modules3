<?php
// Ket noi voi database
class Personnel
{
    public static function paginate()
    {
        global $conn;
        $sql = "SELECT * FROM `personnels`";
        if (isset($_GET["s"])) {
            $s = isset($_GET["s"]) ? $_GET["s"] : "";
            $conditions = [];

            if (!empty(trim($s))) {
                $conditions[] = "(personnels.ten LIKE '%$s%' OR personnels.vi_tri LIKE '%$s%' OR personnels.vi_tri LIKE '%$s%' OR personnels.chi_nhanh LIKE '%$s%' OR personnels.ngay_lam_viec LIKE '%$s%')";
            }

            $conditionsString = implode(" OR ", $conditions);

            $sql = "SELECT * FROM `personnels`";

            if (!empty($conditionsString)) {
                $sql .= " WHERE $conditionsString";
            }

            $sql .= " ORDER BY personnels.id DESC";
        } else {
            $s = "";
            $sql = "SELECT * FROM `personnels`";
        }
        // BẮT ĐẦU Phân trang
        $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $limit = 3;
        // Tổng số phần tử
        $sql_count = $sql;
        $stmt = $conn->query($sql_count);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $total_records = $stmt->fetchAll();
        $total_records = count($total_records);
        $total_pages = ceil($total_records / $limit);
        // KẾT THÚC Phân trang
        // start = (current_page - 1) * limit
        $start = ($current_page - 1) * $limit;
        $sql .= " LIMIT $start, $limit";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll();
        $return = [
            'rows' => $rows,
            'total_pages' => $total_pages,
        ];
        // Trả về cho Model
        return $return;
    }

    // lay ta ca du lieu
    public static function all()
    {
        global $conn;
        $sql = "SELECT * FROM `personnels`";


        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll();
        // Tra ve cho Model
        return $rows;
    }

    // lay chi tiet 1 du lieu
    public static function find($id)
    {
        global $conn;
        $sql = "SELECT * FROM `personnels` WHERE id = $id";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $row = $stmt->fetch();
        return $row;
    }
    public static function create()
    {
        global $conn;
        $sql = "SELECT * FROM `personnels`";
        $stmt = $conn->query($sql);
        $row = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $row;
    }

    // Them moi du lieu
    public static function store($data)
    {
        global $conn;
        $ten = $data['ten'];
        $vi_tri = $data['vi_tri'];
        $chi_nhanh = $data['chi_nhanh'];
        $tuoi = $data['tuoi'];
        $ngay_lam_viec = $data['ngay_lam_viec'];
        $luong = $data['luong'];

        $sql = "INSERT INTO `personnels` 
            ( `ten`, `vi_tri`, `chi_nhanh`,`tuoi`,`ngay_lam_viec`,`luong`) 
            VALUES 
            ('$ten','$vi_tri','$chi_nhanh','$tuoi','$ngay_lam_viec','$luong')";
        //Thuc hien truy van
        $conn->exec($sql);
        return true;
    }

    // Cap nhat du lieu
    public static function update($id, $data)
    {
        global $conn;
        $ten = $data['ten'];
        $vi_tri = $data['vi_tri'];
        $chi_nhanh = $data['chi_nhanh'];
        $tuoi = $data['tuoi'];
        $ngay_lam_viec = $data['ngay_lam_viec'];
        $luong = $data['luong'];

        $sql = "UPDATE `personnels` SET `ten` = :ten, `vi_tri` = :vi_tri, `chi_nhanh` = :chi_nhanh,`tuoi` = :tuoi,`ngay_lam_viec` = :ngay_lam_viec,`luong` = :luong WHERE `id` = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':ten', $ten);
        $stmt->bindParam(':vi_tri', $vi_tri);
        $stmt->bindParam(':chi_nhanh', $chi_nhanh);
        $stmt->bindParam(':tuoi', $tuoi);
        $stmt->bindParam(':ngay_lam_viec', $ngay_lam_viec);
        $stmt->bindParam(':luong', $luong);
        $stmt->bindParam(':id', $id);

        $stmt->execute();
        return true;
    }

    //Xoa du lieu
    public static function delete($id)
    {
        global $conn;
        $sql = "DELETE FROM `personnels` WHERE `id` = $id";
        // Thuc thi SQL
        $conn->exec($sql);
        return true;
    }
}
