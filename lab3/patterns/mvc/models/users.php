<?php
namespace MVC\Models;

class User
{
    public function __construct(
        public string $email,
        public string $password,
        public string $firstName,
        public string $lastName
    ) {}
}

class Users
{
    public array $collection;  // Явно указываем тип array

    public function __construct(public ?array $users = null)
    {
        $users ??= [
            new User(
                 'dmitry.koterov@gmail.com',
                 'password',
                 'Дмитрий',
                 'Котеров'),
            new User(
                 'igorsimdyanov@gmail.com',
                 'password',
                 'Игорь',
                 'Симдянов')
        ];
        $this->collection = $users;
    }
}