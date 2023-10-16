<?php

namespace App\Services\Impl;

use App\Services\UserService;

class UserServiceImpl implements UserService{

    private array $users = [
        "benet" => "rahasia",
    ];

    function login(string $username, string $password):bool{
    if(!isset($this->users[$username])){
        return false;
    }
    $correctpassword = $this->users[$username];
    return $password == $correctpassword;
    }
}
