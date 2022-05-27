<?php

/**
 * This is the Base Controller
 * This loads the Models and Views 
 */

class Controller
{
    // Load Model
    public function model($model)
    {
        // Require model file
        require_once "../app/models/" . $model . ".php";

        // Instantiate the model
        return new $model();
    }
}
