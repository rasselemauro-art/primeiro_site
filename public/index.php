<?php
require_once __DIR__ . '/../vendor/autoload.php';
$router = new Bramus\Router\Router();
$router ->get(pattern: '', fn: function(): void{
    echo "olá,sou uma página inicial";
});

$router ->get(pattern: '/login', fn: function(): void{
    echo 'olá sou uma página inicial';
});

