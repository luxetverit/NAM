<?php

class Membership_ajax extends MY_Controller
{
    private $rt = array('code' => 'SUCCESS', 'msg' => '회원 등록에 성공 했습니다.', 'data' => array());

    public function __construct()
    {
        parent::__construct();
    }

    public function checkIdExist()
    {
        $userid = $this->input->post('user_id');

        $this->load->model('usermodel');

        $data = $this->usermodel->checkIdExist($userid);

        if ($data === false) {
            $this->rt['code'] = "SUCCESS";
            $this->rt['msg'] = "사용 가능한 아이디 입니다.";
        } else {
            $this->rt['code'] = "ERROR";
            $this->rt['msg'] = "중복된 아이디 입니다.";
        }
        echo json_encode($this->rt);
    }

    public function memberJoinOk()
    {
        $this->load->model('usermodel');

        $insert = array(
            'user_id' => $this->input->post('user_id'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
            'name' => $this->input->post('name'),
            'tel' => $this->input->post('tel'),
        );
            $data = $this->usermodel->insertUserInfo($insert);

        if ($data === false) {
            $this->rt['code'] = 'ERROR';
            $this->rt['msg'] = '회원 가입에 실패했습니다.';
        }
        echo json_encode($this->rt);
    }
}