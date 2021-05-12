<?php
include_once 'app/model/User.php';

class UserController
{
    public function index()
    {
        include 'public/view/user/login.php';
    }

    public function formRegister()
    {
        include 'public/view/user/register.php';
    }


    public function store()
    {
        $user = new User;

        $user->save($_POST);
        header("Location:" . URL . "user");
    }

    public function login()
    {
        $user = new User;

        $user->login($_POST);

        header("Location:" . URL . "noticia");
    }

    public function deslogar()
    {
        session_destroy();
        header("Location:" . URL . "user");
    }
}
