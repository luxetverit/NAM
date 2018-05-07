<?php

class Aboutus extends MY_View
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $view_data = array();

        $this->setContent('about_us');
        $this->writeView();
    }

}