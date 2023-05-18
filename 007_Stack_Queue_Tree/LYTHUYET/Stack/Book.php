<?php

class Book implements Stack {
    public $stack;
    public $limit;
    public function __construct($limit){
        $this->stack = [];
        $this->limit = $limit;
    }
    public function push($item){
        if(count($this->stack) > $this->limit){
            throw new Exception("Đã đầy");
        }else{
            array_push($this->stack,$item);
        }
    }
    public function pop(){
        if($this->isEmpty()) {
            throw new Exception("Không có phần tử để xóa");
        }else{
            return array_pop($this->stack);
        }
    }
    public function top(){
        return end($this->stack);
    }
    public function isEmpty(){
        return empty($this->stack);
    }
    public function getStack(){
        return $this->stack;
    }
}
?>