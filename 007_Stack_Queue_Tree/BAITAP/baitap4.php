<?php
class Stack {
    public $elements;
    public $stack;
    public function __construct(){
        $this->elements = [2,5,7,6,3];
        $this->stack = [];
    }
    public function push(){
        foreach($this->elements as $element){
           array_push($this->stack,$element);
        }
        array_reverse($this->stack);
    }
    public function pop(){
        foreach($this->stack as $value){
            array_pop($this->stack);
            array_push($this->elements,$value);
        }
    }
    
}

$stack = new Stack();

$stack->push();
$stack->pop();


echo "<pre>";
print_r(array_reverse($stack->elements));
echo "</pre>";
?>