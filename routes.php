<?php

$router->get('/Demo/index', 'controllers/index.php');
$router->get('/Demo/about', 'controllers/about.php');
$router->get('/Demo/notes', 'controllers/notes/index.php');

$router->get('/Demo/note', 'controllers/notes/show.php');
$router->get('/Demo/note/create', 'controllers/notes/create.php');
$router->delete('/Demo/note', 'controllers/notes/destroy.php');

$router->get('/Demo/note/edit', 'controllers/notes/edit.php');
$router->patch('/Demo/note', 'controllers/notes/update.php');

//common restful conventions: make a post request to the notes resource
$router->post('/Demo/notes', 'controllers/notes/store.php'); 

$router->get('/Demo/register', 'controllers/registration/create.php');
$router->post('/Demo/register', 'controllers/registration/store.php');

?>