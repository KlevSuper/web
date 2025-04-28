<?php
namespace Project\Controllers;

use Core\Controller;

class UserController extends Controller
{
private $users = [
    1 => ['id' => 1, 'name' => 'user1', 'email' => 'user1@example.com', 'role' => 'admin', 'age' => 25, 'salary' => 1000],
    2 => ['id' => 2, 'name' => 'user2', 'email' => 'user2@example.com', 'role' => 'moderator', 'age' => 30, 'salary' => 1500],
    3 => ['id' => 3, 'name' => 'user3', 'email' => 'user3@example.com', 'role' => 'user', 'age' => 22, 'salary' => 800],
    4 => ['id' => 4, 'name' => 'user4', 'email' => 'user4@example.com', 'role' => 'user', 'age' => 35, 'salary' => 2000],
    5 => ['id' => 5, 'name' => 'user5', 'email' => 'user5@example.com', 'role' => 'manager', 'age' => 28, 'salary' => 1800],
];

    public function all()
    {
        $this->title = 'Список всех пользователей';
        
        return $this->render('user/all', [
            'users' => $this->users
        ]);
    }

    public function first($params)
    {
        $n = (int)($params['n'] ?? 1);
        $firstUsers = array_slice($this->users, 0, $n, true);
        
        $this->title = 'Первые ' . $n . ' пользователей';
        
        return $this->render('user/first', [
            'users' => $firstUsers,
            'count' => $n
        ]);
    }

    public function show($params)
    {
        $id = $params['id'] ?? null;
        
        if (!isset($this->users[$id])) {
            return $this->render404();
        }
        
        $user = $this->users[$id];
        $this->title = 'Пользователь: ' . $user['name'];
        
        return $this->render('user/show', [
            'user' => $user
        ]);
    }
    public function info($params)
    {
        $id = $params['id'] ?? null;
        $key = $params['key'] ?? null;
        
        if (!isset($this->users[$id]) || !in_array($key, ['name', 'age', 'salary'])) {
            return $this->render404();
        }
        
        $user = $this->users[$id];
        $this->title = 'Информация о пользователе';
        
        return $this->render('user/info', [
            'value' => $user[$key],
            'key' => $key,
            'user' => $user
        ]);
    }
}