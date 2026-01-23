<?php

namespace App\Http\Controllers;

class signupController
{

    public function validation()
    {
        $username = $_POST['username'];
        $pwd = $_POST['password'];
        $email = $_POST['email'];
        if (empty($username) || empty($pwd) || empty($email)) {
            return 'Fill in all inputs';
        }else{
            return "Signup Successful";
        }
    }

    public function insert()
    {
        
    }
}
