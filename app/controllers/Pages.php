<?php

class Pages extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view("index");
    }

    public function about($id)
    {
        echo "<h1>Welcome to About Page {$id}</h1>";
    }
}
