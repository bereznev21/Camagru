<?php
class User extends Model
{
    private $user_id;
    private $user_name;
    private $user_email;
    private $user_password;

    function login($user_name, $user_password) {
        //$this->user_name =
        //$this->user_password =

        if ($user) {
            setcookie("id", $this->user_id, time()+36000);
            setcookie("user", $this->user_name, time()+36000);
            setcookie("password", $this->user_password, time()+36000);
            return true;
        } else {
            return false;
        }
    }

    public function logout() {
        setcookie("user", "");
        setcookie("password", "");
        setcookie("id", "");
        return true;
    }

    function changeUserPassword($old_password, $new_password) {
        if ($this->user_password == password_cash($old_password)) {
            $this->user_password = $new_password;
            return true;
        }
        return false;
    }

    function changeUserEmail($new_email) {
        $this->user_email = $new_email;
    }

    function getUserName() {
        return $this->user_name;
    }

    function getUserEmail() {
        return $this->user_email;
    }

}
