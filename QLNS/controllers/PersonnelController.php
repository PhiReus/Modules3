<?php
require_once 'models/Personnel.php';
class PersonnelController
{
    public function index()
    {   $items = Personnel::all();
        $return = Personnel::paginate();
        $items = $return['rows'];
        $total_pages = $return['total_pages'];
        $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

        // Truyền dữ liệu xuống view
        require_once 'views/personnels/index.php';
    }


    // Hien thi form them moi
    public function create()
    {
        Personnel::create();
        require_once 'views/personnels/create.php';
    }
    // Xu ly them moi
    public function store()
    {
        $errors = array();
        // $data = array();

        // Lấy dữ liệu
        $ten = isset($_POST['ten']) ? $_POST['ten'] : '';
        if (empty($ten)) {
            $errors['ten'] = 'Bạn chưa nhập tên';
        }
        $vi_tri = isset($_POST['vi_tri']) ? $_POST['vi_tri'] : '';
        if (empty($vi_tri)) {
            $errors['vi_tri'] = 'Bạn chưa nhập vị trí';
        }
        $chi_nhanh = isset($_POST['chi_nhanh']) ? $_POST['chi_nhanh'] : '';
        if (empty($chi_nhanh)) {
            $errors['chi_nhanh'] = 'Bạn chưa nhập chi nhánh';
        }
        $tuoi = isset($_POST['tuoi']) ? $_POST['tuoi'] : '';
        if (empty($tuoi)) {
            $errors['tuoi'] = 'Bạn chưa nhập tuoi';
        }
        $ngay_lam_viec = isset($_POST['ngay_lam_viec']) ? $_POST['ngay_lam_viec'] : '';
        if (empty($ngay_lam_viec)) {
            $errors['ngay_lam_viec'] = 'Bạn chưa nhập ngay lam viec';
        }
        $luong = isset($_POST['luong']) ? $_POST['luong'] : '';
        if (empty($luong)) {
            $errors['luong'] = 'Bạn chưa nhập luong';
        }

        if (count($errors) == 0) {
            // Goi model
            Personnel::store($_POST);
            // Chuyen huong ve trang danh sach
            header("Location: index.php?controller=personnel&action=index");
        } else {
            require_once 'views/personnels/create.php';
        }
    }
    // Hien thi form chinh sua
    public function edit()
    {
        $id = $_GET['id'];
        $r = Personnel::find($id);
        // Truyen xuong view
        require_once 'views/personnels/edit.php';
    }
    // Xu ly chinh sua
    public function update()
    {
        $id = $_GET['id'];
        Personnel::update($id, $_POST);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=personnel&action=index");
    }

    // Xoa
    public function destroy()
    {
        $id = $_GET['id'];
        Personnel::delete($id);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=personnel&action=index");
    }
    // Xem chi tiet
    public function show()
    {
        $id = $_GET['id'];
        $r = Personnel::find($id);

        // Truyen xuong view
        require_once 'views/personnels/show.php';
    }
}
