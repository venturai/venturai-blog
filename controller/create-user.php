<?php
    require_once(__DIR__ . "/../model/config.php");
    
    $email = filter_input(INPUT_POST, "email", FILTER_SANITTIZE_EMAI);
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_inut(INPUT_POST , "password", FILTER_SANITIZE_STRING);
    
    echo $email . " - " . $username . " - " . $password;

