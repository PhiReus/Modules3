<?php


class Application
{
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Application();
            echo  '<h3>Hello , tao chỉ được tạo một lần</h3>';
        }
        return self::$instance;
    }
}

$app1 = Application::getInstance();
$app2 = Application::getInstance();
// $app3 = new Application();