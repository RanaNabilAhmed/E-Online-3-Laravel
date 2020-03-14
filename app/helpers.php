<?php

namespace App\helpers;
use App\User;


function user_count(){
    $user = User::count();
    return $user;
}

?>