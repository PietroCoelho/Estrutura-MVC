<?php

namespace App\Utility;

class View
{

    /**
     * Método responsável por retornar o conteúdo renderizado de uma view
     * @param string $view
     * @return string  
     */
    public static function getContentView($view)
    {
        $file = __DIR__ . '/../../resource/view/' . $view . '.html';
        return file_exists($file) ? file_get_contents($file) : '';
    }

    /**
     * Método responsável por retornar o conteúdo renderizado de uma view
     * @param string $view
     * @return string  conteúdo renderizado
     */
    public static function render($view, $params=[])
    {
        $contentView = self::getContentView($view);
        $key = array_keys($params);
        $key = array_map(function ($item) {
            return '{{' . $item . '}}';
        }, $key);

        return str_replace($key, array_values($params), $contentView);
    }
}
