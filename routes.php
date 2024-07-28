<?php

$router->get('/Demo/index', 'index.php');
$router->get('/Demo/about', 'about.php');
$router->get('/Demo/notes', 'notes/index.php')->only('auth');

$router->get('/Demo/note', 'notes/show.php');
$router->get('/Demo/note/create', 'notes/create.php');
$router->delete('/Demo/note', 'notes/destroy.php');

$router->get('/Demo/note/edit', 'notes/edit.php');
$router->patch('/Demo/note', 'notes/update.php');

//common restful conventions: make a post request to the notes resource
$router->post('/Demo/notes', 'notes/store.php'); 

$router->get('/Demo/register', 'registration/create.php')->only('guest');

$router->post('/Demo/register', 'registration/store.php');

$router->get('/Demo/login', 'sessions/create.php');
$router->post('/Demo/login', 'sessions/store.php');
$router->delete('/Demo/logout', 'sessions/destroy.php')->only('auth');

?>