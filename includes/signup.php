<?php

    if(isset($_POST['submit'])) {


        //
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmpassword'];

        //
        include '../classes/dbh-classes.php';
        include '../classes/signup-class.php';
        include '../classes/signup-contr.php';

        $signup = new SignupContr($username,  $email, $password, $confirmPassword);
        $signup->signupAdmin();


    }


?>