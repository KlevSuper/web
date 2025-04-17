<?php

namespace RefactoringGuru\Prototype\Conceptual;

/**
 * Паттерн Прототип
 *
 * Назначение: Позволяет копировать объекты, не вдаваясь в подробности их
 * реализации.
 */

/**
 * Пример класса, имеющего возможность клонирования. Мы посмотрим как
 * происходит клонирование значений полей разных типов.
 */
class Prototype
{
    public $primitive;
    public $component;
    public $circularReference;

    /**
     * PHP имеет встроенную поддержку клонирования. Вы можете «клонировать»
     * объект без определения каких-либо специальных методов, при условии, что
     * его поля имеют примитивные типы. Поля, содержащие объекты, сохраняют свои
     * ссылки в клонированном объекте. Поэтому в некоторых случаях вам может
     * понадобиться клонировать также и вложенные объекты. Это можно сделать
     * специальным методом __clone().
     */
    public function __clone()
    {
        $this->component = clone $this->component;

        // Клонирование объекта, который имеет вложенный объект с обратной
        // ссылкой, требует специального подхода. После завершения клонирования
        // вложенный объект должен указывать на клонированный объект, а не на
        // исходный объект.
        $this->circularReference = clone $this->circularReference;
        $this->circularReference->prototype = $this;
    }
}

class ComponentWithBackReference
{
    public $prototype;

    /**
     * Обратите внимание, что конструктор не будет выполнен во время
     * клонирования. Если у вас сложная логика внутри конструктора, вам может
     * потребоваться выполнить ее также и в методе __clone().
     */
    public function __construct(Prototype $prototype)
    {
        $this->prototype = $prototype;
    }
}

/**
 * Клиентский код.
 */
function clientCode()
{
    $p1 = new Prototype();
    $p1->primitive = 245;
    $p1->component = new \DateTime();
    $p1->circularReference = new ComponentWithBackReference($p1);

    $p2 = clone $p1;
    if ($p1->primitive === $p2->primitive) {
        echo "Значения примитивных полей были скопированы. Ура!<br>";
    } else {
        echo "Значения примитивных полей не были скопированы. Бууу!<br>";
    }
    if ($p1->component === $p2->component) {
        echo "Простой компонент не был клонирован. Бууу!<br>";
    } else {
        echo "Простой компонент был клонирован. Ура!<br>";
    }

    if ($p1->circularReference === $p2->circularReference) {
        echo "Компонент с обратной ссылкой не был клонирован. Бууу!<br>";
    } else {
        echo "Компонент с обратной ссылкой был клонирован. Ура!<br>";
    }

    if ($p1->circularReference->prototype === $p2->circularReference->prototype) {
        echo "Компонент с обратной ссылкой связан с исходным объектом. Бууу!<br>";
    } else {
        echo "Компонент с обратной ссылкой связан с клоном. Ура!<br>";
    }
}

clientCode();