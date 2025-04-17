<?php
namespace MyProject\Classes;

require_once __DIR__ . '/User.php';
require_once __DIR__ . '/SuperUserInterface.php';

class SuperUser extends User implements SuperUserInterface {
    public $role;
    public static $count = 0;

    public function __construct($name, $login, $password, $role) {
    // Не вызываем parent::__construct()
    $this->name = $name;
    $this->login = $login;
    $this->password = $password;
    $this->role = $role;
    self::$count++; // Увеличиваем только счётчик SuperUser
    }

    public function showInfo() {
        echo "Имя: {$this->name}, Логин: {$this->login}, Роль: {$this->role}, Пароль: [скрыт]<br>";
    }

    public function getInfo() {
        return [
            'name' => $this->name,
            'login' => $this->login,
            'password' => $this->password,
            'role' => $this->role
        ];
    }
}