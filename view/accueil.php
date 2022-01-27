<?php ob_start();

include 'includes/_personalinfo.php';

include 'includes/_project.php';

$contain = ob_get_clean();

require('template.php');
