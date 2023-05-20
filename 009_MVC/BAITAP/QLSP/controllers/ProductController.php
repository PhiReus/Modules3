<?php
require_once 'models/Product.php';
class CustomerController {
    // Hien thi danh sach records => table
    public function index(){
        $items = Customer::all();
        // Truyen data xuong view
        require_once 'views/products/index.php';
       
    }
    // Hien thi form them moi
    public function create(){
        require_once 'views/products/create.php';
    }
    // Xu ly them moi
    public function store(){
        // Goi model
        Customer::store($_POST);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=product&action=index");

    }
    // Hien thi form chinh sua
    public function edit(){
        $id = $_GET['id'];
        $r = Customer::find($id);
        // Truyen xuong view
        require_once 'views/products/edit.php';
    }
    // Xu ly chinh sua
    public function update(){
        $id = $_GET['id'];
        Customer::update( $id, $_POST );
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=product&action=index");
    }

    // Xoa
    public function destroy(){
        $id = $_GET['id'];
        Customer::delete($id);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=product&action=index");
    }
    // Xem chi tiet
    public function show(){
        $id = $_GET['id'];
        $r = Customer::find($id);

        // Truyen xuong view
        require_once 'views/products/show.php';
    }
}