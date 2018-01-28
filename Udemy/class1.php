<?php
class User {

    //properties or attributes
    private $id;
    private $username;
    private $email;
    private $password;

    //methods
    public function __construct($username, $password) {
        //echo 'Constructor Called';
        $this->username = $username;
        $this->password = $password;
    }

    public function register() {
        echo 'User Registered';
    }

    public function login() {

        $this->auth_user();
    }

    public function auth_user() {
        echo $this->username . " is authenticated";
    }

    public function __destruct() {
        //echo "Destructor Called";
    }
}

$User = new User('ricardo','123456');
//$User->register();
$User->login();

?>
