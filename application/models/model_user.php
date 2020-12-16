<?php
class Model_User extends Model
{
    private $id;
    private $name;
    private $surname;
    private $hash_pass;

    function __construct() {

    }

    function get_user() {
        return ["name" => $this->name,
                "surname" => $this->surname,
                "hash_pass" => $this->hash_pass,
        ];
    }
}
