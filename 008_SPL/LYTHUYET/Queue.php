<?php
$q= new SplQueue();
$q->enqueue("Khương");
$q->enqueue("PHI");
$q->enqueue("hieu");
$q->enqueue("long");

//đauw con trỏ về vị trí ban đầu
$q->rewind();

echo "<br>".$q->current();//khuong
$q->next();
echo "<br>".$q->current();//phi
while ($q->valid()) {
    echo "<br>". $q->current();
    $q->next();
}
?>