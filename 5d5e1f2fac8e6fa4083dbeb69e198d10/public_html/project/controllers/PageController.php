<?php
namespace Project\Controllers;
use Core\Controller;
use Project\Models\Page;

class PageController extends Controller
{
    public function show($params)
    {
        $page = (new Page)->getById($params['id']);
        
        if (!$page) {
            header("HTTP/1.0 404 Not Found");
            return $this->render('errors/404', [], 404);
        }
        
        $this->title = $page['title'];
        return $this->render('page/show', [
            'page' => $page
        ]);
    }
    
    public function index()
    {
        $this->title = 'Все страницы';
        $pages = (new Page)->getAll();
        
        return $this->render('page/index', [
            'pages' => $pages,
            'h1' => $this->title,
            'baseUrl' => '/'
        ]);
    }
}