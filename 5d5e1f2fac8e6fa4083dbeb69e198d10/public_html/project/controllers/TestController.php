<?php
namespace Project\Controllers;
use Core\Controller;

class TestController extends Controller
{
    public function act1()
    {
        $this->title = 'Тест действие 1';
        return $this->render('test/act', [
            'message' => 'Это действие act1',
            'actionNumber' => 1
        ]);
    }

    public function act2()
    {
        $this->title = 'Тест действие 2';
        return $this->render('test/act', [
            'message' => 'Это действие act2',
            'actionNumber' => 2
        ]);
    }

    public function act3()
    {
        $this->title = 'Тест действие 3';
        return $this->render('test/act', [
            'message' => 'Это действие act3',
            'actionNumber' => 3
        ]);
    }
}