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
        // $url = $this->getUrl() ?: [$this->currentController]; // alternative fix. remove $url && if it's active

        $url = $this->getUrl();
        // print_r($url);

        // look in controllers for first value
        $controllersPath = "../app/controllers/";

        if ($url && file_exists($controllersPath . ucfirst($url[0]) . ".php")) {
            // If exists, set as controller
            $this->currentController = ucfirst($url[0]);
            // Unset 0 Index of the url array
            unset($url[0]);
        }

        // Require the controller
        require_once $controllersPath . $this->currentController . ".php";

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
