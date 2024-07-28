<?php

use Core\Validator;
use Core\Database;
use Core\App;
use Http\forms\LoginForm;

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();

if (! $form->validate($email, $password)) {
    return view('sessions/create.view.php', [
        'errors' => $form->errors()
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