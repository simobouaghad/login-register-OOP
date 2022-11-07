<?php

    if(isset($_POST['submit'])) {


        //
        $username = $_POST['username'];
        $password = $_POST['password'];

        //
        include '../classes/dbh-classes.php';
        include '../classes/login-class.php';
        include '../classes/login-contr.php';

        $login = new LoginContr($username, $password);
        $login->loginAdmin();


    }


?>