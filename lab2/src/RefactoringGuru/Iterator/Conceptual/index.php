<?php

namespace RefactoringGuru\Iterator\Conceptual;

/**
 * Паттерн Итератор
 *
 * Назначение: Даёт возможность последовательно обходить элементы составных
 * объектов, не раскрывая их внутреннего представления.
 */

use Iterator;
use IteratorAggregate;
use Traversable;

/**
 * Конкретные Итераторы реализуют различные алгоритмы обхода. Эти классы
 * постоянно хранят текущее положение обхода.
 */
class AlphabeticalOrderIterator implements Iterator
{
    /**
     * @var WordsCollection
     */
    private $collection;

    /**
     * @var int Хранит текущее положение обхода. У итератора может быть
     * множество других полей для хранения состояния итерации, особенно когда он
     * должен работать с определённым типом коллекции.
     */
    private int $position = 0;

    /**
     * @var bool Эта переменная указывает направление обхода.
     */
    private bool $reverse = false;

    public function __construct(WordsCollection $collection, bool $reverse = false)
    {
        $this->collection = $collection;
        $this->reverse = $reverse;
    }

    public function rewind(): void
    {
        $this->position = $this->reverse 
            ? count($this->collection->getItems()) - 1 
            : 0;
    }

    public function current(): mixed
    {
        return $this->collection->getItems()[$this->position];
    }

    public function key(): int
    {
        return $this->position;
    }

    public function next(): void
    {
        $this->position = $this->position + ($this->reverse ? -1 : 1);
    }

    public function valid(): bool
    {
        return isset($this->collection->getItems()[$this->position]);
    }
}

/**
 * Конкретные Коллекции предоставляют один или несколько методов для
 * получения новых экземпляров итератора, совместимых с классом коллекции.
 */
class WordsCollection implements IteratorAggregate
{
    private array $items = [];

    public function getItems(): array
    {
        return $this->items;
    }

    public function addItem(mixed $item): void
    {
        $this->items[] = $item;
    }

    public function getIterator(): Traversable
    {
        return new AlphabeticalOrderIterator($this);
    }

    public function getReverseIterator(): Traversable
    {
        return new AlphabeticalOrderIterator($this, true);
    }
}

/**
 * Клиентский код может знать или не знать о Конкретном Итераторе или
 * классах Коллекций, в зависимости от уровня косвенности, который вы хотите
 * сохранить в своей программе.
 */
$collection = new WordsCollection();
$collection->addItem("Первый");
$collection->addItem("Второй");
$collection->addItem("Третий");

echo "Прямой обход:<br>";
foreach ($collection->getIterator() as $item) {
    echo $item . "<br>";
}

echo "\nОбратный обход:<br>";
foreach ($collection->getReverseIterator() as $item) {
    echo $item . "<br>";
}