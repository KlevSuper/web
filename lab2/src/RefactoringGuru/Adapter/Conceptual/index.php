<?php

namespace RefactoringGuru\Adapter\Conceptual;

/**
 * EN: Adapter Design Pattern
 *
 * Intent: Provides a unified interface that allows objects with incompatible
 * interfaces to collaborate.
 *
 * RU: Паттерн Адаптер
 *
 * Назначение: Позволяет объектам с несовместимыми интерфейсами работать вместе.
 */

/**
 * EN: The Target defines the domain-specific interface used by the client code.
 *
 * RU: Целевой класс объявляет интерфейс, с которым может работать клиентский
 * код.
 */
class Target
{
    public function request(): string
    {
        return "Целевой класс: Стандартное поведение целевого объекта.";
    }
}

/**
 * EN: The Adaptee contains some useful behavior, but its interface is
 * incompatible with the existing client code. The Adaptee needs some adaptation
 * before the client code can use it.
 *
 * RU: Адаптируемый класс содержит некоторое полезное поведение, но его
 * интерфейс несовместим с существующим клиентским кодом. Адаптируемый класс
 * нуждается в некоторой доработке, прежде чем клиентский код сможет его
 * использовать.
 */
class Adaptee
{
    public function specificRequest(): string
    {
        return ".аретпада еинедевоп еоньлаицепС";
    }
}

/**
 * EN: The Adapter makes the Adaptee's interface compatible with the Target's
 * interface.
 *
 * RU: Адаптер делает интерфейс Адаптируемого класса совместимым с целевым
 * интерфейсом.
 */
class Adapter extends Target
{
    private $adaptee;

    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function request(): string
    {
        return "Адаптер: (ПЕРЕВЕДЕНО) " . $this->mb_strrev($this->adaptee->specificRequest());
    }

    private function mb_strrev(string $string): string
    {
        $chars = mb_str_split($string);
        return implode('', array_reverse($chars));
    }
}

/**
 * EN: The client code supports all classes that follow the Target interface.
 *
 * RU: Клиентский код поддерживает все классы, использующие целевой интерфейс.
 */
function clientCode(Target $target)
{
    echo $target->request() . "<br>"; // Добавлен <br> для переноса строки
}

echo "Клиент: Я могу работать напрямую с целевыми объектами:<br>";
$target = new Target();
clientCode($target);
echo "<br>";

$adaptee = new Adaptee();
echo "Клиент: У класса Adaptee странный интерфейс. Я не понимаю его:<br>";
echo "Adaptee: " . $adaptee->specificRequest() . "<br>";
echo "<br>";

echo "Клиент: Но я могу работать с ним через Адаптер:<br>";
$adapter = new Adapter($adaptee);
clientCode($adapter);