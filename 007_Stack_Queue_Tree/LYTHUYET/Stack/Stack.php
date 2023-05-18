<?php
interface Stack {
    public function push($item);
    public function pop();
    public function top();
    public function isEmpty();
}
?>