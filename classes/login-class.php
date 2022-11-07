<?php

    class Login extends Dbh {

        protected function getUser($username, $password) {
            $req = $this->connect()->prepare('SELECT password FROM user WHERE username=:u');
            $req->execute(['u'=>$username]);
            $res = $req->fetchAll();            

            foreach($res as $e) {
                $pass = $e['password'];
            }

            if(empty($pass)) {
                echo 'ne existe pas';
            }
            elseif($pass == $password) {
                echo 'good';
            }
        }
    }

?>