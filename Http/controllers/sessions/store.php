<?php

use Core\Validator;
use Core\Database;
use Core\App;
use Http\forms\LoginForm;
use Http\forms\Authenticator;

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();

if ($form->validate($email, $password)) {
    if ((new Authenticator)->attempt($email, $password)){
        redirect('/Demo/notes');
    }

    $form->error('email','No matching account for the email address and password.');
}

return view('sessions/create.view.php', [
    'errors' => $form->errors()
]);