<?php

// return [
//     '/Demo/index' => 'controllers/index.php',
//     '/Demo/about' => 'controllers/about.php',
//     '/Demo/notes' => 'controllers/notes/index.php',
//     '/Demo/note' => 'controllers/notes/show.php',
//     '/Demo/note/create' => 'controllers/notes/create.php',
// ];

$router->get('/Demo/index', 'controllers/index.php');
$router->get('/Demo/about', 'controllers/about.php');
$router->get('/Demo/notes', 'controllers/notes/index.php');
$router->get('/Demo/note', 'controllers/notes/show.php');
$router->get('/Demo/note/create', 'controllers/notes/create.php');
?>