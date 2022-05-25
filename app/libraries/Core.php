<?php

/**
 * This is the App Core Class.
 * It actually creates URL and loads our core controller
 * The URL Format will be: /controller/method/params
 */

class Core
{
    protected $currentController = "Pages";
    protected $currentMethod = "index";
    protected $params = [];


    public function __constructor()
    {
        print_r($this->getUrl());
    }

    // Method to get the url
    public function getUrl()
    {
        if (isset($_GET["url"])) {
            $url = rtrim($_GET["url"], "/"); // strip '/' from the end of the url
            $url = filter_var($url, FILTER_SANITIZE_URL); // sanitize the url for security purpose
            $url = explode("/", $url); // explode the url in multiple parts

            return $url;
        }
    }
}
