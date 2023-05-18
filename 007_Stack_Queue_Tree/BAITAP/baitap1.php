<?php
class Stack
{
    public $stack;
    public $limit;
    public function __construct($limit)
    {
        $this->stack = [];
        $this->limit = $limit;
    }
    public function push($item)
    {
        // isfull = false
        // true
        //
        if ($this->isFull()) {
            echo "da day";
        }else{
            array_unshift($this->stack, $item);
        }
    }
    public function pop()
    {
        if($this->isEmpty()){
            echo "Không có phần tử để xóa";
        }else{
            array_shift($this->stack);
        }
    }
    public function top()
    {
        return current($this->stack);
    }
    public function isEmpty()
    {
        // return empty($this->stack);
        if(count($this->stack) == 0){
            return true;
        }
            return false;        
    }
    public function isFull()
    {
        if (count($this->stack) == $this->limit) {
            return true;
        }
            return false;
    }
}

$stack = new Stack(5);
$stack->push('phi1');
$stack->push('phi2');
$stack->push('phi3');
$stack->push('phi4');
$stack->push('phi5');

//lấy ptu trên cùng
echo $stack->top();

// echo $stack->pop();

//lấy ra 4 phần tử trong mãng
$result = array();

//chuyển đổi mãng thành chuổi
$result = implode('-', $stack->stack);
echo $result;

//kiểm tra stack đã đầy hay chưa
echo "<pre>";
var_dump($stack->isFull());
echo "</pre>";

//kiểm tra stack có rôngr hay không
echo "<pre>";
var_dump($stack->isEmpty());
echo "</pre>";

//in doi tuong
echo "<pre>";
print_r($stack);
echo "</pre>";