<?php
if (isset($_GET["q"])) {
    switch ($_GET["q"]) {
        case 'homepage':
            include_once 'pages/homepage.php';
            break;
    }
} else {
    include_once 'pages/homepage.php';
}
