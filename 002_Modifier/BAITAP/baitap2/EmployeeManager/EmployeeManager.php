<?php

namespace EmployeeManager;
use Employee\Employee;

class EmployeeManager
{
    private static $employees = [];
    
    public static function saveEmployees($employees)
{
    // Chuyển đối tượng nhân viên thành mảng dữ liệu
    $employeeData = [];
    foreach ($employees as $employee) {
        $employeeData[] = $employee->toArray();
    }

    // Ghi mảng dữ liệu vào file
    $file = fopen('employees.json', 'w');
    fwrite($file, json_encode($employeeData));
    fclose($file);
}

    public static function addEmployee(Employee $employee)
    {
        self::$employees[] = $employee;
    }

    public static function removeEmployee($index)
    {
        unset(self::$employees[$index]);
    }

    public static function getEmployees()
    {
        return self::$employees;
    }

    public static function getEmployee($index)
    {
        return self::$employees[$index];
    }

    public static function updateEmployee($index, Employee $employee)
    {
        self::$employees[$index] = $employee;
    }
    public static function deleteEmployee($id)
{
    $employees = self::getEmployees();
    foreach ($employees as $key => $employee) {
        if ($employee->getId() == $id) {
            unset($employees[$key]);
            self::saveEmployees($employees);
            return;
        }
    }
}

}

?>
