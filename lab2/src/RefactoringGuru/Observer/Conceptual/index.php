<?php

namespace RefactoringGuru\Observer\Conceptual;

/**
 * Паттерн Наблюдатель
 *
 * Назначение: Определяет механизм подписки, позволяющий уведомлять несколько объектов 
 * о событиях, происходящих в наблюдаемом объекте.
 *
 * Примечание: Существует много различных терминов с похожим значением, связанных с этим паттерном.
 * Запомните, что Субъект также называют Издателем, а Наблюдателя часто называют Подписчиком (и наоборот).
 * Глаголы "наблюдать", "слушать" или "отслеживать" обычно означают одно и то же.
 */

/**
 * PHP имеет несколько встроенных интерфейсов, связанных с паттерном Наблюдатель.
 *
 * Вот интерфейс Издателя:
 *
 * @link http://php.net/manual/ru/class.splsubject.php
 *
 *     interface SplSubject
 *     {
 *         // Присоединяет наблюдателя
 *         public function attach(SplObserver $observer);
 *
 *         // Отсоединяет наблюдателя
 *         public function detach(SplObserver $observer);
 *
 *         // Уведомляет всех наблюдателей
 *         public function notify();
 *     }
 *
 * И интерфейс Наблюдателя:
 *
 * @link http://php.net/manual/ru/class.splobserver.php
 *
 *     interface SplObserver
 *     {
 *         public function update(SplSubject $subject);
 *     }
 */

/**
 * Издатель владеет важным состоянием и уведомляет наблюдателей о его изменениях.
 */
class Subject implements \SplSubject
{
    /**
     * @var int Для простоты состояние Издателя, важное для подписчиков,
     * хранится в этой переменной.
     */
    public $state;

    /**
     * @var \SplObjectStorage Список подписчиков. В реальности может храниться
     * более сложным образом (с классификацией по типам событий и т.д.)
     */
    private $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    /**
     * Методы управления подпиской.
     */
    public function attach(\SplObserver $observer): void
    {
        echo "Объект: Подписан новый наблюдатель.<br>";
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer): void
    {
        $this->observers->detach($observer);
        echo "Объект: Наблюдатель отписан.<br>";
    }

    /**
     * Уведомление всех подписчиков.
     */
    public function notify(): void
    {
        echo "Субъект: Уведомление наблюдателей...<br>";
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * Обычно логика подписки - только часть функционала Издателя.
     * Издатели часто содержат важную бизнес-логику, которая запускает уведомления
     * при наступлении важных событий.
     */
    public function someBusinessLogic(): void
    {
        echo "<br>Субъект: Выполняю важную операцию.<br>";
        $this->state = rand(0, 10);

        echo "Субъект: Моё состояние изменилось на: {$this->state}<br>";
        $this->notify();
    }
}

/**
 * Конкретные Наблюдатели реагируют на изменения Издателя, к которому они прикреплены.
 */
class ConcreteObserverA implements \SplObserver
{
    public function update(\SplSubject $subject): void
    {
        if ($subject->state < 3) {
            echo "КонкретныйНаблюдательA: Реагирую на событие.<br>";
        }
    }
}

class ConcreteObserverB implements \SplObserver
{
    public function update(\SplSubject $subject): void
    {
        if ($subject->state == 0 || $subject->state >= 2) {
            echo "КонкретныйНаблюдательB: Реагирую на событие.<br>";
        }
    }
}

/**
 * Клиентский код.
 */

$subject = new Subject();

$o1 = new ConcreteObserverA();
$subject->attach($o1);

$o2 = new ConcreteObserverB();
$subject->attach($o2);

$subject->someBusinessLogic();
$subject->someBusinessLogic();

$subject->detach($o2);

$subject->someBusinessLogic();