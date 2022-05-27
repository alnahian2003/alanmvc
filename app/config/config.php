<?php
// Database Parameters
{
    define("DB_HOST", "localhost");
    define("DB_USERNAME", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "alanmvc");

    // $db = [
    //     "db_host" => "localhost",
    //     "db_username" => "root",
    //     "db_password" => "",
    //     "db_name" => "alanmvc_db",
    // ];

    // /* Plugins or Extensions like Intellisense, Intellifense will indicate constants above as errors. But they're not. */
    // // Assign key => value as constants 
    // foreach ($db as $key => $value) {
    //     define(strtoupper($key), $value);
    // }
}

// App Root
define("APP_ROOT", dirname(dirname(__FILE__)));

// URL Root
define("URL_ROOT", "http://localhost/alanmvc");

// Site Name
define("SITE_NAME", "Alan MVC"); // We can keep this name for now. This can be changed later for production purpose.
