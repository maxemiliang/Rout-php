<?php

/*

Rout is a minimal php router which is just a little project to test me!

*/

class Rout
{

    private $requestUri; // this is the request URI
    public $db;
    public $isProcessed = false; // if the route has been processed

    /**
     * add a db connection if wanted
     *
     * @param optional PDOobject
     */

    public function __construct()
    {

        if (func_num_args() > 0) {

            $args = func_get_args();

            $this->db = $args[0];

        }

    }


    /**
     * Add a get route
     *
     * @param string $route
     * @param function $callable
     */

    public function get($route, $callable)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {



        }

    }



    /**
     * Add a post request
     *
     * @param string $route
     * @param function $callable
     */

    public function post($route, $callable)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {



        }

    }

    /**
     * Add a delete request
     *
     * @param string $route
     * @param function $callable
     */

    public function delete($route, $callable)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {



        }

    }

    /**
     * Add a put request.
     *
     * @param string $route
     * @param function $callable
     */

    public function put($route, $callable)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'PUT') {



        }

    }

}