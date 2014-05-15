<?php
    // Inclusion des fonctions additionnelles

    require 'controller/functions.php';

    // Inclusion de la connexion à la base de données
    
    require 'model/connexion.class.php';

    // Inclusion automatique des classes
    function chargerClasse($classe)
    {
        require 'controller/' . $classe . '.class.php';
    }

    spl_autoload_register('chargerClasse');
?>