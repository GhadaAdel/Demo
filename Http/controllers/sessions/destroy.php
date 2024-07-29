<?php

use Http\forms\Authenticator;

(new Authenticator())->logout();

header('location: /Demo/index');
exit();