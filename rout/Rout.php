<?php

/*

Rout is a minimal php router which is just a little project to test me!

*/

class Rout
{

    private $requestUri; // this is the request URI
    private $method;
    public $db;
    public $base;
    public $isProcessed = false; // if the route has been processed

    public function file_path($path)
    {
          $args = func_get_args();

          $ds = '/'; 

          $win_ds = '\\';

          $n_path = count($args) > 1 ? implode($ds, $args) : $path;
          if(strpos($n_path, $win_ds) !== false) $n_path = str_replace( $win_ds, $ds, $n_path );
          $n_path = preg_replace( "#$ds+#", $ds, $n_path);
          
          return $n_path;
    }

    /**
     * add a db connection if wanted
     *
     * @param optional PDOobject
     */

    public function __construct()
    {

        $this->base = $this->file_path(basename(__FILE__));

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