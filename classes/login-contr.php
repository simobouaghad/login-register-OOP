<?php
    class loginContr extends Login {

    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function loginAdmin() {
        $this->getUser($this->username, $this->password);
    }

}

?>