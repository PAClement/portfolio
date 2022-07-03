<?php

/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

// require('../model/frontmodel.php');

function accueilGo()
{

    $title = 'Portfolio - Clément';

    $var = file_get_contents('../public/assets/modals.json');
    $json = json_decode($var);

    require('../view/accueil.php');
}
