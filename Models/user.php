<?php
require_once 'db.php';
class User extends Db {

    public $table;

    public function __construct()
    {
        $this->table = 'users';
    }

}

$user1 = new User();
var_dump($user1);