<?php
namespace Wakfu;

class Autoloader
{
    static function register()
    {
        // On récupère la classe avec la constante magique "__CLASS__" et on déclenche la méthode 'autoload'
        spl_autoload_register([
            __CLASS__,
            'autoload'
        ]);
    }

    static function autoload($class)
    {
        // On récupère dans $class la totalité du namespace de la classe concernée
        // On retire le namespace
        $class = str_replace(__NAMESPACE__ . '\\', '', $class);
        
        // On remplace les \ par des /
        $class = str_replace('\\', '/', $class);

        $fichier = __DIR__ . '/' . $class . '.php';
        // On vérifie si le fichier existe
        if(file_exists($fichier)){
            require_once $fichier;
        }
    }
}