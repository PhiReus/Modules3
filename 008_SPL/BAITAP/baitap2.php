<?php
$stack = new SplStack();

$a = 2;
$b = 3;
$c = 4;
$d = 5;
$symbols = "s * (s – a) * s – b) * (s – c)    ";

for($i = 0;$i < strlen($symbols);$i++){
    if($symbols[$i] == '('){
        $stack->push($symbols[$i]);
    }else if($symbols[$i] == ')'){
        if($stack->isEmpty()){
            // echo "Dấu ngoặc không khớp.";
            return false;
        }
        $left = $stack->pop();
        if($left == ')'){
            // echo "Dấu ngoặc khớp.";
            return true;
        }
    }
}
if($stack->isEmpty()){
    echo "Dấu ngoặc khớp.";
    return true;
}else{
    echo "Dấu ngoặc không khớp.";
    return false;
}

?>