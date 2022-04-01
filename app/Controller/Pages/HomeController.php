<?php

namespace App\Controller\Pages;

use App\Core\Controller;
use App\Model\Entity\Organization;
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
        $organization= new Organization();
        $content = $view->render('pages/home'
        , ['name' => $organization->name
        , 'description' => $organization->description
    ]);
        return parent::getPage('conceito de MVC', $content);
    }
}
