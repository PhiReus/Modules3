<?php
class HinhChuNhat {
    public $height;
    public $width;

    public function __construct($height,$width){
        $this->height = $height;
        $this->width = $width;
    }
    
    public function getwidth(){
        return $this->width;
    }
    public function setwidth($width){
        $this->width = $width;
    }
    public function getHeight(){
        return $this->height;
    }
    public function setHeight($height){
        $this->height = $height;
    }
    public function getArea(){
        return $this->width * $this->height; 
    }

    //khai bao pthuc tinh chu vi
    public function getPerimeter() {
        return(($this->width + $this->height) * 2);
    }
    
}
$hcn = new HinhChuNhat(20,30);
echo "Diện tích của hình chử nhật là : ". $hcn->getArea()."<br>";
echo '<br>';
echo "Chu vi của hình chử nhật là : ". $hcn ->getPerimeter()."<br>";

