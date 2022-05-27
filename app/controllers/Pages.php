<?php

class Pages extends Controller
{
    public function __construct()
    {
        $this->postModel = $this->model("Post"); // testing purpose
    }

    public function index()
    {
        $data = [
            "title" => "Welcome, Home!",
        ];
        $this->view("pages/index", $data);
    }

    public function about()
    {
        $data = [
            "title" => "Learn About Us",
        ];
        $this->view("pages/about", $data);
    }
}
