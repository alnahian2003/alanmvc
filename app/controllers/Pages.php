<?php

class Pages extends Controller
{
    public function __construct()
    {
        $this->postModel = $this->model("Post"); // testing purpose
    }

    public function index()
    {
        $posts =  $this->postModel->getPosts();

        $data = [
            "title" => "Welcome, Home!",
            "posts" => $posts,
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
