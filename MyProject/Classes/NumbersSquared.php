<?php
namespace MyProject\Classes;

class NumbersSquared implements \Iterator {
    private $start;
    private $end;
    private $current;

    public function __construct(int $start, int $end) {
        $this->start = $start;
        $this->end = $end;
    }

    #[\ReturnTypeWillChange]
    public function rewind() {
        $this->current = $this->start;
    }

    #[\ReturnTypeWillChange]
    public function valid() {
        return $this->current <= $this->end;
    }

    #[\ReturnTypeWillChange]
    public function next() {
        $this->current++;
    }

    #[\ReturnTypeWillChange]
    public function key() {
        return $this->current;
    }

    #[\ReturnTypeWillChange]
    public function current() {
        return $this->current ** 2;
    }
}