<?php
class MyStack {
    public $document;

    public function __construct($document){
        $this->document = $document;
    }

   
    public function toString(){
        return "Văn bản của Stack là : ". $this->document;
    }
   
}