<?php
    if(isset($_POST["submit"])){
        echo "works";
        //go to dashboard
        $username = $_POST["username"];
        $pwd = $_POST["pwd"];
        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        loginUser($username, $pwd);
    }else{
        header("location: /badersleben/admin/login.php");
        exit();
    };