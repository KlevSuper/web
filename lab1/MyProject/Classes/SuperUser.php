<?php
namespace MyProject\Classes;

class SuperUser extends User implements SuperUserInterface {
    public $role;
    private static $count = 0;

    public function __construct($name, $login, $password, $role) {
        parent::__construct($name, $login, $password);
        $this->role = $role;
        self::$count++;
    }

    public function showInfo() {
        echo "Имя: {$this->name}, Логин: {$this->login}, Роль: {$this->role}<br>";
    }

    public function getInfo() {
        return [
            'name' => $this->name,
            'login' => $this->login,
            'role' => $this->role
        ];
    }

    public static function getCount() {
        return self::$count;
    }
}