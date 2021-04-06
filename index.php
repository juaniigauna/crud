<?php
require_once 'config/db-connection.php';

$routeUri = isset($_GET['route']) && !empty($_GET['route']) ? $_GET['route'] : 'home';

switch ($routeUri) {
    case 'add-tasks':
        include "routes/add-tasks.php";
        break;
    case 'home': 
        include "routes/home.php";
        break;
}

include 'views/container.php';