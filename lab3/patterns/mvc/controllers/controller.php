<?php
namespace patterns\mvc\controllers;

use patterns\mvc\views\MarkdownView;
use MVC\Models\Users;

class Controller
{
    private Users $users;
    private MarkdownView $view;

    public function __construct(string $filename)
    {
        $this->users = new Users();
        $this->view = new MarkdownView();
    }

    public function render(): string
    {
        $userData = [];
        foreach ($this->users->collection as $user) {  
            $userData[] = [
                'firstName' => $user->firstName,
                'lastName' => $user->lastName,
                'email' => $user->email
            ];
        }
        return $this->view->render($userData);
    }
}