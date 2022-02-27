<?php

require '../vendor/autoload.php';

use Class\User;
use Class\Login;
use Class\Exceptions\UserNotVerifiedException;
use Class\Exceptions\UserIsBanException;
use Class\Exceptions\UserException;

$user = new User('Cherif', '123456');
$login = new Login($user);

/* try {
    $login->login();
} catch(UserNotVerifiedException $e) {
    echo $e->getMessage() . ' dans le fichier ' . $e->getFile() . ' a la ligne ' . $e->getLine();
} catch(UserIsBanException $e) {
    echo $e->getMessage();
} */

try {
    $login->login();
} catch(UserException $e) {
    echo $e->getMessage() . ' dans le fichier ' . $e->getFile() . ' a la ligne ' . $e->getLine();
} finally {
    echo 'Finally';
}
