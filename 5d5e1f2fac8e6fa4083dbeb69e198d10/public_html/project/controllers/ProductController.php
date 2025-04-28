<?php
namespace Project\Controllers;

use Core\Controller;

class ProductController extends Controller
{
    protected $title = 'Управление продуктами'; // Общий заголовок
    
    private $products;

    public function __construct()
    {
        $this->products = [
        1 => [
			'name'     => 'product1',
			'price'    => 100,
			'quantity' => 5,
			'category' => 'category1',
		],
		2 => [
			'name'     => 'product2',
			'price'    => 200,
			'quantity' => 6,
			'category' => 'category2',
		],
		3 => [
			'name'     => 'product3',
			'price'    => 300,
			'quantity' => 7,
			'category' => 'category2',
		],
		4 => [
			'name'     => 'product4',
			'price'    => 400,
			'quantity' => 8,
			'category' => 'category3',
		],
		5 => [
			'name'     => 'product5',
			'price'    => 500,
			'quantity' => 9,
			'category' => 'category3',
		],
        ];
    }

    public function all()
    {
        $this->title = "Все продукты";
        return $this->render('product/all', [
            'products' => $this->products
        ]);
    }

 public function show($params)
    {
        $id = (int)$params['n'];
        $product = $this->products[$id] ?? null;
        
        if (!$product) {
            die("Продукт не найден");
        }

        $this->title = "Продукт: " . $product['name'];
        
        return $this->render('product/show', [
            'product' => $product,
            'total' => $product['price'] * $product['quantity']
        ]);
    }
}