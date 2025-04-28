<?php
namespace Project\Controllers;
use Core\Controller;

class NumController extends Controller
{
    public function sum($params)
    {
        $n1 = $params['n1'] ?? 0;
        $n2 = $params['n2'] ?? 0;
        $n3 = $params['n3'] ?? 0;
        
        $sum = $n1 + $n2 + $n3;
        $this->title = "Сумма чисел";
        
        return $this->render('num/sum', [
            'n1' => $n1,
            'n2' => $n2,
            'n3' => $n3,
            'sum' => $sum
        ]);
    }
}