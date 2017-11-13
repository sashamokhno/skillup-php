<?php
/**
 * @var array $user
 */

include 'lib.php';

$user=[
    'email'=>'',

];

$errors = [];

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $user = processRequest($user);
    $errors=validateUser($user);
    if(!$errors){
        saveUser2($user);


        header('Location: /lesson10/success.html');
        exit();
    }
}

include 'form.php';