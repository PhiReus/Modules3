<?php
class Quat {
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;

    private $speed;
    private $on;
    private $radius;
    private $color;

    public function __construct()
    {
        $this->speed = self::SLOW;
        $this->on = false;
        $this->radius = 5;
        $this->color = "blue";
    }
    public function getSpeed(){
        return $this->speed;
    }
    public function setSpeed($speed){
        $this->speed = $speed;
    }
    public function isOn(){
        return $this->on;
    }
    public function setOn($on){
        $this->on = $on;
    }
    public function getRadius(){
        return $this->radius;
    }
    public function setRadius($radius){
        $this->radius = $radius;
    }
    public function getColor(){
        return $this->color;
    }
    public function setColor($color){
        $this->color = $color;
    }
    public function toString(){
        if($this->on){
            return "Tốc độ quạt : ". $this->speed. ", bán kính : ".$this->radius .", màu sắc : " .$this->color. " quạt đang chạy";
        }else{
            return "Màu sắc : ".$this->color . "quạt đang tắt ";
        }
    }
}
$quat1 = new Quat();
$quat1->setSpeed(Quat::FAST);
$quat1->setRadius(10);
$quat1->setColor("yellow");
$quat1->setOn(True);

$quat2 = new Quat();
$quat2->setSpeed(Quat::MEDIUM);
$quat2->setRadius(5);
$quat2->setColor("blue ");
$quat2->setOn(False);

echo $quat1->toString();
echo"<br>";
echo $quat2->toString();
?>