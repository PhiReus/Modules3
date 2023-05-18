<?php
class Stack
{
    private $stack;

    public function __construct()
    {
        $this->stack = [];
    }

    public function push($element)
    {
        array_push($this->stack, $element);
    }

    public function pop()
    {
        return array_pop($this->stack);
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }
}

function decimalToBinary($decimal)
{
    $stack = new Stack();

    while ($decimal > 0) {
        $remainder = $decimal % 2;
        $stack->push($remainder);
        $decimal = (int)($decimal / 2);
    }

    $binaryString = '';

    while (!$stack->isEmpty()) {
        $binaryString .= $stack->pop();
    }

    return $binaryString;
}

// Ví dụ chuyển đổi số 17 thành nhị phân
$decimalNumber = 17;
$binaryNumber = decimalToBinary($decimalNumber);

echo "Số thập phân: " . $decimalNumber . "<br>";
echo "Số nhị phân: " . $binaryNumber;
