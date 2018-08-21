<?php

class Auth_ajax extends MY_Controller
{
    private $rt = array('code' => '', 'msg' => '', 'data' => array());

    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
    }

    public function userlogin()
    {
        $this->load->model('usermodel');

        $auth_data = array(
            'user_id' =>$this->input->post('user_id', TRUE),
            'password' =>$this->input->post('password', TRUE)
        );
            $userinfo = $this->usermodel->checkUserInfo($auth_data);

        if ($userinfo === false) {
            $this->rt['code'] = "ERROR";
            $this->rt['msg'] = "아이디 또는 비밀번호를 확인해 주세요.";
        } else {
            $newdata = array(
                'user_id' => $userinfo->user_id,
                'email' => $userinfo->email,
                'is_login' => true
            );
            $this->session->set_userdata($newdata);
            $this->rt['code'] = "SUCCESS";
            $this->rt['msg'] = "환영합니다 회원님";

        }

        echo json_encode($this->rt);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->rt['code'] = "SUCCESS";

        echo "<script>alert('로그아웃 되었습니다.');window.location.href='/board/';</script>";
    }
}
