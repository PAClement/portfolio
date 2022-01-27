<?php
//throw new Exception('error message');
require('../controller/frontcontroller.php');

try {

    if (isset($_GET['action'])) {
    } else {
        accueilGo();
    }
} catch (Exception $e) {

    $errorMessage = $e->getMessage();

    //error View design error CATCH
    //require('view/errorView.php');
}
