<?php

namespace App\Controller\Pages;

use App\Core\Controller;
use App\Utility\View;

class HomeController extends Controller 
{


    /**
     * Metodo responsável por retornar o conteúdo para view
     * @return  string
     */
    public static function getHome()
    {
        $view = new View();
        $content = $view->render('pages/home', ['name' => 'testando', 'description' => 'testando descricao']);
        return parent::getPage('conceito de MVC', $content);
    }
}
