<?php
$db['host'] = "localhost";
$db['user'] = "root";
$db['pass'] = "";
$db['name'] = "crud";

try {
    $connnection = new mysqli($db['host'], $db['user'], $db['pass'], $db['name']);
} catch (\Throwable $error) {
    echo "Ha ocurrido un error al conectar con la db";
}