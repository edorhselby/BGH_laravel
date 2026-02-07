<?php

namespace app\Http\Controllers;

class loginController{
    public function login(){
        $name = $_POST['name'];
        $pwd = $_POST['password'];
        
        if(empty($name) || empty($pwd)){
            return "Fill all inputs";
        }else{
            
        }
    }
}