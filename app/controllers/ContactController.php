<?php

class Contact extends Controller
{
    public function index()
    {
        echo 'contact/index';
    }

    public function bedrijf($id, $manager)
    {
        var_dump([$id, $manager]);
    }
}