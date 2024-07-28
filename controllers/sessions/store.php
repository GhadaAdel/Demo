<?php

use Core\Validator;
use Core\Database;
use Core\App;

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address.';
}

if (!Validator::string($password)) {
    $errors['password'] = 'Please provide a valid password.';
}

if (!empty($errors)) {
    return view('sessions/create.view.php', [
        'errors' => $errors
    ]);
}

$db = App::resolve(Database::class);

$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

if ($user) {
    if (password_verify($password, $user['password'])){
    login([
        'email' => $email
    ]);

    header('location: /Demo/notes');
    exit();
    }
}

return view('sessions/create.view.php', [
    'errors' => [
        'email' => 'No matching account for the email address and password.'
    ]
]);