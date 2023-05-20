<?php
    // Ket noi voi database
    class Customer {
        // lay ta ca du lieu
        public static function all(){
            global $conn;
            $sql = "SELECT * FROM `products`";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $rows = $stmt->fetchAll(); 
            // Tra ve cho Model
            return $rows;
        }

        // lay chi tiet 1 du lieu
        public static function find($id){
            global $conn;
            $sql = "SELECT * FROM `products` WHERE id = $id";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $row = $stmt->fetch();
            return $row;
        }

        // Them moi du lieu
        public static function store($data){
            global $conn;
            $product_name = $data['product_name'];
            $price = $data['price'];
            $product_description = $data['product_description'];
            $producer = $data['producer'];

            $sql = "INSERT INTO `products` 
            ( `product_name`,`price`, `product_description`, `producer`) 
            VALUES 
            ('$product_name','$price','$product_description','$producer')";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;
        }
        
        // Cap nhat du lieu
        public static function update( $id, $data ){
            global $conn;
            $product_name = $data['product_name'];
            $price = $data['price'];
            $product_description = $data['product_description'];
            $producer = $data['producer'];

            $sql = "UPDATE `products` SET `product_name` = '$product_name', `price` = '$price', `product_description` = '$product_description', `producer` = '$producer' WHERE `id` = $id";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;

        }

        //Xoa du lieu
        public static function delete($id){
            global $conn;
            $sql = "DELETE FROM `products` WHERE `id` = $id";
            // Thuc thi SQL
            $conn->exec($sql);
            return true;
        }
    }