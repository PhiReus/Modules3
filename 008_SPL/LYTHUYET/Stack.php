<?php
$q = new SplStack();

$q->push("phi");
$q->push("hieu");
$q->push("long");
$q->push("khuong");

//đưa con trỏ về vị trí ban đầu
$q->rewind();
$q->rewind();
while ($q->valid()) {
    echo $q->current();
    $q->next();
}

//lấy phần tử đầu tiên của stack
echo $q->current(); //khuong

//dịch chuyển con trỏ lên
$q->next();
echo $q->current();
