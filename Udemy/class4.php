<?php
class User {

    public $username;

    //Static, because it doesn't change
    public static $minPassLenght = 5;

    //Static, because it doesn't change
    public static function validatePassword($password) {
        // :: scope resolution operator
        if (strlen($password) >= self::$minPassLenght) {
            return true;
        } else {
            return false;
        }
    }

}
/*
$password = 'password';
if (User::validatePassword($password)) {
    echo 'Password is valid';
} else {
    echo 'Password is NOT valid';
}
*/

echo User::$minPassLenght;
?>
