<?php
namespace MyProject\Classes;


class User extends AbstractUser {
    public $name;
    public $login;
    protected $password;  // Изменили с private на protected
    public static $count = 0;

    public function __construct($name, $login, $password) {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
        self::$count++;
    }

    public function showInfo() {
        echo "Имя: {$this->name}, Логин: {$this->login}, Пароль: [скрыт]<br>";
    }

    public function __destruct() {
        echo "<br>Пользователь {$this->login} удалён.";
    }
}