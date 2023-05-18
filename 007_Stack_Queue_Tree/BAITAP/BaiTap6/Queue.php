<?php
class MyQueue {
    public $document;

    public function __construct($document){
        $this->document = $document;
    }

   
    public function toString(){
        return "Văn bản của Queue là : ". $this->document;
    }
}