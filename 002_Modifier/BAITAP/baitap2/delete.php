<?php
require_once 'EmployeeManager/EmployeeManager.php';
use Employee\Employee;
use EmployeeManager\EmployeeManager;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    EmployeeManager::deleteEmployee($id);
}

// Chuyển về trang danh sách nhân viên
// header('Location: quan_li_nhan_su.php');

?>