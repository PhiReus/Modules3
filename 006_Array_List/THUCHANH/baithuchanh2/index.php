<?php
include_once('Node.php');
include_once('LinkList.php');

$linkedList = new LinkList();

$linkedList->insertFirst(11);
$linkedList->insertFirst(22);
$linkedList->insertLast(33);
$linkedList->insertLast(44);

echo $linkedList->totalNodes();
echo "<br>";
echo implode('-', $linkedList->readList());