<?php
include "Queue.php";
include "Stack.php";

$queue = new MyQueue("Nếu chúng ta là ta chúng nếu");
$mystack = new MyStack("Nếu chúng ta là ta chúng nếu");

echo $queue->toString()."<br>";
echo $mystack->toString()."<br>";

if($queue->document == $mystack->document){
    echo "Hai chuổi của MyStack và Queue đối xứng";
}else{
    echo "Hai chuổi của MyStack và Queue không đối xứng";
}
?>