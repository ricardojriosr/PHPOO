<?php
class User {
    //properties or attributes

    //methods
    public function __construct() {
        //echo 'Constructor Called';
    }

    public function register() {
        echo 'User Registered';
    }

    public function login($username, $password) {
        $this->auth_user($username, $password);
    }

    public function auth_user($username, $password) {
        echo $username . " is authenticated";
    }

    public function __destruct() {
        //echo "Destructor Called";
    }
}

$User = new User();
//$User->register();
$User->login('ricardo','123456');
?>
