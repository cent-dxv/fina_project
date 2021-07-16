<?php

class App
{
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        // echo "app: hellow we are app <br>";


        $url = $this->parseurl();
     
        
        if( isset($_GET['url']) && file_exists( '../app/controllers/' . $url[0]  . '.php')){
            $this->controller = $url[0];
            unset($url[0]);
            
        }
        // print_r($url);
        // echo $this->controller;
        require_once '../app/controllers/' . $this->controller . ".php"; 
    //  $this->controller;
    }

    function parseurl()
    {
        if (isset($_GET['url'])) {
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/')), FILTER_SANITIZE_URL);
        }
    }
}
