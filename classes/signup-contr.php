<?php

    class SignupContr extends Signup {

        private $username;
        private $email;
        private $password;
        private $confirmPassword;

        public function __construct($username, $email, $password, $confirmPassword) {
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
            $this->confirmPassword = $confirmPassword;
        }

        public function signupAdmin() {

            

            // echo 'Empty input';
            if($this->emptyInput() == false) {
                header('Location:http://localhost/signup-login/signup.php?error=EmptyInput');
                exit();
            }

            // Invalid username
            if($this->invalidUsername() == false) {
                header('Location:http://localhost/signup-login/signup.php?error=InvalidUsername');
                exit();
            }

            // Invalid email
            if($this->invalidEmail() == false) {
                header('Location:http://localhost/signup-login/signup.php?error=InvalidEmail');
                exit();
            }

            // Password don't match
            if($this->passwordMatch() == false) {
                header('Location:http://localhost/signup-login/signup.php?error=ConfirmPassword');
                exit();
            }

            $this->setUser($this->username, $this->email, $this->password);


        }

        private function emptyInput() {
            if(empty($this->username) || empty($this->email) || empty($this->password) || empty($this->confirmPassword) ) {
                $result = false;
            }
            else {
                $result = true;
            }
            return $result;
        }


        private function invalidUsername() {
            if(!preg_match("/^[a-zA-Z0-9]*$/", $this->username)) { 
                $result = false;
            }
            else {
                $result = true;
            }
            return $result;
        }
    
        private function invalidEmail() {
            if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                $result = false;
            }
            else {
                $result = true;
            }
            return $result;
        }

        private function passwordMatch() {
            if($this->password !== $this->confirmPassword) {
                $result = false;
            }
            else {
                $result = true;
            }
            return $result;
        }
    }

?>