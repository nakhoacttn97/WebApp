<?php
#namespace controllers;
<<<<<<< HEAD
require_once('BaseController.php');
class AuthController extends BaseController{
    function __construct(){
        $this->layout = 'authLayout';
    }

    function login(){
        $this->title ='Login Store';
        return $this->view([], 'auth/login');
    }

    function register(){
        $this->title = 'Register Store';
        return $this->view([], 'auth/register');
=======
class AuthController extends BaseController{
    protected function __construct(){
        $this->layout = 'authLayout';
    }

    protected function login(){
        return view(null, 'auth/login');
        //return $this->view();
    }

    protected function register(){
        return view(NULL, 'auth/register');
        //return $this->view();
>>>>>>> origin/main
    }
}