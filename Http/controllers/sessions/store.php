<?php

use Core\Validator;
use Core\Database;
use Core\App;
use Core\Session;
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

Session::flash('errors', $form->errors());
Session::flash('old', [
    'email' => $_POST['email']
]);

return redirect('/Demo/login');