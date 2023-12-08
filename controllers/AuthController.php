<?php
#namespace controllers;
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
    }
}