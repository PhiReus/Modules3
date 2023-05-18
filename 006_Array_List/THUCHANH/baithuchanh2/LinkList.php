<?php
class Linklist
{
    private $firstNode;
    private $lastNode;
    private $count;
    function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }
    public function insertFirst($data)
    {
        $node = new Node($data);
        $node->next = $this->firstNode;
        $this->firstNode = $node;

        if (is_null($this->lastNode)) {
            $this->lastNode = $node;
        }
        $this->count++;
    }
    public function insertLast($data)
    {
        if (!is_null($this->firstNode)) {
            $node = new Node($data);
            $this->lastNode->next = $node;
            $node->next = null;
            $this->lastNode = $node;
            $this->count++;
        } else {
            $this->insertFirst($data);
        }
    }
    public function totalNodes()
    {
        return $this->count;
    }
    public function readList()
    {
        $listData = [];
        $current = $this->firstNode;

        while (!is_null($current)) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
}
