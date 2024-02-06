<?php

namespace App\View;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class BaseView
{
    protected $twig;

    public function __construct() {
        // Initialiser le chargeur de fichier Twig
        $loader = new FilesystemLoader(__DIR__ . '/templates');

        // Créer l'environnement Twig
        $this->twig = new Environment($loader, [
            'cache' => __DIR__ . '/cache',
            'debug' => true, // Mettez cette option à false en production
        ]);
    }

    public function render($template, $variables = []) {
        echo $this->twig->render($template, $variables);
    }
}