<?php

class Pages
{
    public function __construct()
    {
    }

    public function index()
    {
    }

    public function about($id)
    {
        echo "<h1>Welcome to About Page {$id}</h1>";
    }
}
