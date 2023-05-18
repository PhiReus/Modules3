<?php
class Patient{
    public $name;
    public $code;
    public function __construct($name,$code){
        $this->name = $name;
        $this->code = $code;
    }
}
class Queue{
    public $elements;
    public function __construct(){
        $this->elements = [];
    }
    public function enqueue($item){
        array_push($this->elements,$item);
    }
    public function dequeue() {
        usort($this->elements, function($a, $b) {
            return $a->code - $b->code;
        });
        return array_shift($this->elements);
    }
    public function toString() {
        $displayElements = [];
        foreach($this->elements as $element){
            $displayElements[] = "Tên bệnh nhân : " . $element->name ." ". " Mã bệnh nhân : " . $element->code."<br>"; 
        } 
        return implode(' ',$displayElements);
    }
}


$patient1 = new Patient("Hạo Đô",5);
$patient2 = new Patient("A Chuẩn",2);
$patient3 = new Patient("Thập Nhĩ",4);
$patient4 = new Patient("Trường Ca",1);
$patient5 = new Patient("Lạc Yên",1);

$queue = new Queue();


$queue->enqueue($patient1);
$queue->enqueue($patient2);
$queue->enqueue($patient3);
$queue->enqueue($patient4);
$queue->enqueue($patient5);


echo $queue->toString()."<br>";

echo "Bệnh nhân đã được khám là ".$queue->dequeue()->name."<br>"; 
echo "Bệnh nhân đã được khám là ".$queue->dequeue()->name."<br>"; 
echo "Bệnh nhân đã được khám là ".$queue->dequeue()->name."<br>"."<br>"; 

echo "Bệnh nhân chưa được khám là :"."<br>".$queue->toString()."<br>";


echo "<pre>";
print_r($queue->elements);
echo "</pre>";
 ?>