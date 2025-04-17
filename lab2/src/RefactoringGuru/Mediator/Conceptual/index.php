<?php

namespace RefactoringGuru\Mediator\Conceptual;

/**
 * Паттерн Посредник
 *
 * Назначение: Позволяет уменьшить связанность множества классов между собой,
 * благодаря перемещению этих связей в один класс-посредник.
 */

/**
 * Интерфейс Посредника предоставляет метод, используемый компонентами для
 * уведомления посредника о различных событиях. Посредник может реагировать на
 * эти события и передавать исполнение другим компонентам.
 */
interface Mediator
{
    public function notify(object $sender, string $event): void;
}

/**
 * Конкретные Посредники реализуют совместное поведение, координируя
 * отдельные компоненты.
 */
class ConcreteMediator implements Mediator
{
    private $component1;
    private $component2;

    public function __construct(Component1 $c1, Component2 $c2)
    {
        $this->component1 = $c1;
        $this->component1->setMediator($this);
        $this->component2 = $c2;
        $this->component2->setMediator($this);
    }

    public function notify(object $sender, string $event): void
    {
        if ($event == "A") {
            echo "Посредник реагирует на A и запускает следующие операции:<br>";
            $this->component2->doC();
        }

        if ($event == "D") {
            echo "Посредник реагирует на D и запускает следующие операции:<br>";
            $this->component1->doB();
            $this->component2->doC();
        }
    }
}

/**
 * Базовый Компонент обеспечивает базовую функциональность хранения
 * экземпляра посредника внутри объектов компонентов.
 */
class BaseComponent
{
    protected $mediator;

    public function __construct(Mediator $mediator = null)
    {
        $this->mediator = $mediator;
    }

    public function setMediator(Mediator $mediator): void
    {
        $this->mediator = $mediator;
    }
}

/**
 * Конкретные Компоненты реализуют различную функциональность. Они не
 * зависят от других компонентов. Они также не зависят от каких-либо конкретных
 * классов посредников.
 */
class Component1 extends BaseComponent
{
    public function doA(): void
    {
        echo "Компонент 1 выполняет A.<br>";
        $this->mediator->notify($this, "A");
    }

    public function doB(): void
    {
        echo "Компонент 1 выполняет B.<br>";
        $this->mediator->notify($this, "B");
    }
}

class Component2 extends BaseComponent
{
    public function doC(): void
    {
        echo "Компонент 2 выполняет C.<br>";
        $this->mediator->notify($this, "C");
    }

    public function doD(): void
    {
        echo "Компонент 2 выполняет D.<br>";
        $this->mediator->notify($this, "D");
    }
}

/**
 * Клиентский код.
 */
$c1 = new Component1();
$c2 = new Component2();
$mediator = new ConcreteMediator($c1, $c2);

echo "Клиент запускает операцию A.<br>";
$c1->doA();

echo "\nКлиент запускает операцию D.<br>";
$c2->doD();