<?php

    class Signup extends Dbh {

        protected function setUser($username, $email, $password) {
            $stmt = $this->connect()->prepare('INSERT INTO user (username, email, password) VALUES (?, ?, ?);');

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            if(!$stmt->execute(array($username, $email, $hashedPassword))) {
                $stmt = null;
                header('Location:signup.php?error=stmtfailed');
                exit();
            }
            else {
                $stmt = null;
                header('Location:http://localhost/signup-login/signup.html');
            }
        }

    }


?>