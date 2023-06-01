<?php
require_once 'models/Team.php';
class TeamController
{
    // Hien thi danh sach records => table
    public function index()
    {
        $teams = Team::all();
       
        // Truyen data xuong view
        require_once 'views/teams/index.php';
    }
    // Hien thi form them moi
    public function create()
    {
        require_once 'views/teams/create.php';
    }
    // Xu ly them moi
    public function store()
    {   $errors = array();
        // $data = array();
            // Lấy dữ liệu
            $name = isset($_POST['name']) ? $_POST['name'] : '';
            if (empty($name)){
                $errors['name'] = 'Bạn chưa nhập tên';
            }
            $country = isset($_POST['country']) ? $_POST['country'] : '';
            if (empty($country)){
                $errors['country'] = 'Bạn chưa nhập quốc gia';
            }
            // Lưu dữ liệu
            if (count($errors) == 0){
               // Goi model
               Team::store($_POST);
                // Chuyen huong ve trang danh sach
                header("Location: index.php?controller=team&action=index");
            }else{
                $teams1 = Team::create();
                require_once 'views/teams/create.php';
            }
        
    }
    // Hien thi form chinh sua
    public function edit()
    {
        $id = $_GET['id'];
        $r = Team::find($id);
        // Truyen xuong view
        require_once 'views/teams/edit.php';
    }
    // Xu ly chinh sua
    public function update()
    {
        $id = $_GET['id'];
        Team::update($id, $_POST);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=team&action=index");
    }

    // Xoa
    public function destroy()
    {
        $id = $_GET['id'];
        Team::delete($id);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=team&action=index");
    }
    // Xem chi tiet
    public function show()
    {
        $id = $_GET['id'];
        $r = Team::find($id);

        // Truyen xuong view
        require_once 'views/teams/show.php';
    }
}
