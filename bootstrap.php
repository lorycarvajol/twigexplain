
<?php

// Load our autoloader
require_once __DIR__.'/vendor/autoload.php';

// Specify our Twig templates location
$loader = new Twig_Loader_Filesystem(__DIR__.'/templates');
         $twig = new \Twig\Environment($loader, [
    'cache' => '/templates/cache',
    
]);

 // Instantiate our Twig
$twig = new Twig_Environment($loader);