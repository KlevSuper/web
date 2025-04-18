<?php
namespace Factory\Models;

class Users extends Collection
{
    public function __construct(public ?array $users = null)
    {
        $users ??= [
            self::createUser('volkov@example.com', 'wolf88', 'Артем', 'Волков'),
            self::createUser('morozova@example.com', 'snow2024', 'Анна', 'Морозова'),
            self::createUser('lebedeva@example.com', 'swan123', 'Ольга', 'Лебедева'),
            self::createUser('kozlov@example.com', 'goat456', 'Сергей', 'Козлов'),
            self::createUser('zemely@example.com', 'EarthSpirit', 'Толя', 'Землетряс')
        ];
        parent::__construct($users);
    }

    public static function createUser($email, $password, $firstName, $lastName): User
    {
        return new User($email, $password, $firstName, $lastName);
    }

    public function getCollection(): array
    {
        return $this->collection;
    }
}