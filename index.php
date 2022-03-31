<?php

use App\Controller\Pages\HomeController;

require __DIR__ . '/vendor/autoload.php';

$homeController = new HomeController();
echo $homeController->getHome();
