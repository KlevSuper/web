<?php
namespace Project\Controllers;
use Core\Controller;
use Project\Models\Products;

class ProductsController extends Controller
{
public function one($params)
{
    $product = (new Products)->getById($params['id']);
    
    if (!$product) {
        return $this->render404(); // Или redirect на страницу с ошибкой
    }
    
    $this->title = $product['name'];
    return $this->render('products/one', [
        'product' => $product, // Важно передать переменную
        'h1' => $this->title
    ]);
}
    
    public function all()
    {
        $this->title = 'Каталог товаров';
        $products = (new Products)->getAll();
        
        return $this->render('products/all', [
            'products' => $products,
            'h1' => $this->title
        ]);
    }
}