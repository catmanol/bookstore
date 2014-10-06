<?php

namespace BookStore\Application;

class Application
{
    private $config;
    
    public function __construct($config)
    {
        $this->config = $config;
    }
    
    public function openPage($page)
    {
        include_once (APPLICATION_PATH . '/pages/' . $page);
    }
}
