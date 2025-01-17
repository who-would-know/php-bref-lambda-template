<?php

//// This is the router for our Lambda function. Index.php is the entry point

// Capture the HTTP Request
$request = $_SERVER['REQUEST_URI'];
$viewDir = '/views/';
$publicDir = '/public/';

switch ($request) {
    case '':
        require __DIR__ . $viewDir . 'home.php';
        break;
    case '/':
        require __DIR__ . $viewDir . 'home.php';
        break;

    case '/users':
        require __DIR__ . $viewDir . 'users.php';
        break;

    case '/contact':
        require __DIR__ . $viewDir . 'contact.php';
        break;

        // case '/css/style.css':
        //     require __DIR__ . $publicDir . '/css' . '/style.css';
        //     break;

    default:
        http_response_code(404);
        require __DIR__ . $viewDir . '404.php';
}
