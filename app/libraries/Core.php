<?php

/**
 * This is the App Core Class.
 * It actually creates URL and loads our core controller
 * The URL Format will be: /controller/method/params
 */

class Core
{
    protected $currentController = "Pages"; // "Pages" is the default controller
    protected $currentMethod = "index";
    protected $params = [];

    public function __construct()
    {
        // print_r($this->getUrl());
        $url = $this->getUrl();

        // look in controllers for first value
        $controllersPath = "../app/controllers/";
        $fileName = $controllersPath . ucfirst($url[0]);

        if (file_exists($fileName)) {
            // If exists, set as controller
            $this->currentController = ucfirst($url[0]);
            // Unset 0 Index of the url array
            unset($url[0]);
        }

        // Require the controller
        require_once $controllersPath . $this->$currentController . "php";

        // Instantiate controller class
        $this->currentController = new $this->currentController;
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
