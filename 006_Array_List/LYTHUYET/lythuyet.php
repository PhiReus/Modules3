<?php
// Khởi tạo một mảng
// $array = array('apple', 'banana', 'orange','phi');

// Truy cập phần tử thứ hai của mảng
// echo $array[1]; // Output: banana

// Khởi tạo một danh sách liên kết
class ListNode {
    public $data;
    public $next;

    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}

$node1 = new ListNode('apple');
$node2 = new ListNode('banana');
$node3 = new ListNode('orange');
$node4 = new ListNode('phi');

$node1->next = $node2;
$node2->next = $node3;
$node3->next = $node4;

// Truy cập giá trị của nút thứ hai trong danh sách liên kết
echo $node2->data; // Output: banana
echo $node4->data;

?>