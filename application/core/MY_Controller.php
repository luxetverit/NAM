<?php

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
    }
}

class MY_View extends MY_Controller
{
    protected $view = array();

    public function __construct()
    {
        parent::__construct();

        $this->view['HEAD'] = '';
        $this->view['ADD_SCRIPT'] = '';
        $this->view['ADD_CSS'] = '';
        $this->view['CONTENT'] = '';
        $this->view['IS_HOME'] = 'N' ;

        $exp_uri = explode('/', $_SERVER['REQUEST_URI']);

        if ($exp_uri[1] == 'home') {
            $this->view['IS_HOME'] = 'Y';
        }
    }

    public function setContent($content)
    {
        $this->view['CONTENT'] = $this->load->view($content, $this->view, true);
    }

    public function addScript($str)
    {
        $this->view['ADD_SCRIPT'] = '';

        if (! empty($str)) {
            $arrStr = explode(', ', $str);

            //<script src="/static/plugins/custom.plugins"></script>
            foreach ($arrStr as $value) {
                $this->view['ADD_SCRIPT'] .= '<script src="/static/js/' . $value . '"></script>' . PHP_EOL;
            }
        }
    }


    public function writeView()
    {
        $this->load->view('frame', $this->view);
    }
}