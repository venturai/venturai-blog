<?php
    require_once(__DIR__ . "/controller/login-verfiy.php");
    require_once(__DIR__ . "/view/header.php");
    if(authenticateUser()) {
        require_once(__DIR__ . "/view/navagation.php");
    }
    require_once(__DIR__ . "/controller/create-db.php");
    require_once(__DIR__ . "/view/footer.php");
    require_once(__DIR__ . "/contoller/read-posts.php")
?>

