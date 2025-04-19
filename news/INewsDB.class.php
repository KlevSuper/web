<?php

interface INewsDB {
    public function saveNews($title, $category, $description, $source);
    public function getNews();
    public function deleteNews($id);
}

interface MyIteratorAggregate extends \IteratorAggregate {
    public function getIterator(): \Traversable;
}
?>
