<?php
/**
 * @var array $user
 */

include 'lib.php';

$user=[
    'first_name' =>'',
    'last_name' =>'',
    'email'=>'',
    'phone'=>'',
    'confirm'=>false,
];

$errors = [];

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $user = processRequest($user);
    $errors=validateUser($user);
    if(!$errors){
        saveUser($user);


        header('Location: /lesson10/success.html');
        exit();
    }
}

include 'form.php';