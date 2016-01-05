<?php

class Home extends Controller
{

    public function index($name = '')
    {
        $user = $this->user;
        $user->name = $name;

        $this->view('home/index', ['name' => $user->name]);
    }

    public function create($username = '')
    {
        $user = new User;
        $user->username = $username;
        $user->save();

        // return 'A OK';

    }
}