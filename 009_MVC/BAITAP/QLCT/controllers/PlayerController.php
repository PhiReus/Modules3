<?php
require_once 'models/Player.php';
require_once 'models/Team.php';
class PlayerController {
    // Hien thi danh sach records => table
    public function index(){
        $players = Player::all();
       
        // Truyen data xuong view
        require_once 'views/players/index.php';
       
    }
    // Hien thi form them moi
    public function create(){
        $teams1 = Team::create();

        // var_dump($teams1);
        // die();
        require_once 'views/players/create.php';
    }
    // Xu ly them moi
    public function store(){

        $errors = array();
        // $data = array();
      
            // Lấy dữ liệu
            $name = isset($_POST['name']) ? $_POST['name'] : '';
            if (empty($name)){
                $errors['name'] = 'Bạn chưa nhập tên';
            }
            $date = isset($_POST['date']) ? $_POST['date'] : '';
            if (empty($date)){
                $errors['date'] = 'Bạn chưa nhập ngày sinh';
            }
            $country = isset($_POST['country']) ? $_POST['country'] : '';
            if (empty($country)){
                $errors['country'] = 'Bạn chưa nhập quốc gia';
            }
        
            // Lưu dữ liệu
            if (count($errors) == 0){
               // Goi model
                Player::store($_POST);
                // Chuyen huong ve trang danh sach
                header("Location: index.php?controller=player&action=index");
            }else{
                $teams1 = Team::create();
                require_once 'views/players/create.php';
            }
        
        

    }
    // Hien thi form chinh sua
    public function edit(){
        $id = $_GET['id'];
        $r = Player::find($id);
        $teams1 = Team::create();
         // var_dump($teams1);
        // die();
        // Truyen xuong view
        require_once 'views/players/edit.php';
    }
    // Xu ly chinh sua
    public function update(){
        $id = $_GET['id'];
        Player::update( $id, $_POST );
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=player&action=index");
    }

    // Xoa
    public function destroy(){
        $id = $_GET['id'];
        Player::delete($id);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=player&action=index");
    }
    // Xem chi tiet
    public function show(){
        $id = $_GET['id'];
        $r = Player::find($id);

        // Truyen xuong view
        require_once 'views/players/show.php';
    }
}