<?php

require_once 'Employee/Employee.php';
require_once 'EmployeeManager/EmployeeManager.php';

use Employee\Employee;
use EmployeeManager\EmployeeManager;

// khởi tạo
$employee1 = new Employee(1,'Hạo', 'Đô', '01-01-1990', 'ChiNa', 'Ngự Lâm Quân');
$employee2 = new Employee(2,'A', 'Chuẩn', '02-02-1995', 'ChiNa', 'Dũng Sĩ Thảo Nguyên');

EmployeeManager::addEmployee($employee1);
EmployeeManager::addEmployee($employee2);

// Hiển thị danh sách nhân viên
echo '<h2>Hiển Thị Danh Sách Nhân Viên</h2>';
echo '<table border = 1>';
echo '<thead><tr><th>STT</th><th>Họ Tên</th><th>Ngày sinh</th><th>Địa chỉ</th><th>Vị trí công việc</th><th></th><th></th></tr></thead>';
echo '<tbody>';
foreach (EmployeeManager::getEmployees() as $employee):
    ?>
    <tr>
        <td><?= $employee->getId() ?></td>
        <td><?= $employee->getFullName() ?></td>
        <td><?= $employee->getDateOfBirth() ?></td>
        <td><?= $employee->getAddress() ?></td>
        <td><?= $employee->getJobTitle() ?></td>
        <td><a href="edit.php?id=' employee->getId() ">Sửa</a></td>
        <td>
            <a 
            onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" 
            href="delete.php?id=<?= $employee->getId() ?>">Xóa</a>
        </td>
    </tr>
    <?php
endforeach;
echo '</tbody>';

echo '</table>';

//Thêm một nhân sự mới

?>


