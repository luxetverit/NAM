<?php

class Home extends MY_View
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $view_data = array();

        $this->setContent('home');
        $this->writeView();
    }
}