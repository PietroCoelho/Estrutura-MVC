<?php

namespace App\Core;

use App\Utility\View;

class Controller
{


    public static function getHeader()
    {
        $view = new View();
        return $view::render('pages/header');
    }

    public static function getFooter()
    {
        $view = new View();
        return $view::render('pages/footer');
    }

    /**
     * Método responsável por retornar o conteúdo da view da página
     * @return  string
     */

    public static function getPage($title, $content)
    {
        $view = new View();
        return $view::render(
            'pages/template',
            ['title' => $title,
             'header' => self::getHeader(), 
             'content' => $content, 
             'footer' => self::getFooter()]
        );
    }
}
