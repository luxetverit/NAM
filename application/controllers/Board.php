<?php

class Board extends MY_View
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->model('boardmodel');

        $this->addScript('board.js');

        $this->view['BOARD_LIST'] = $this->boardmodel->getBoardList(20,1);
        $this->view['totalData'] = $this->boardmodel->getBoardListCount();

        $this->setContent('board');
        $this->writeView();
    }
    public function board_view($idx)
    {
        $this->load->model('boardmodel');

        $this->addScript('board_delete.js');

        $this->view['BOARD_CONTENT'] = $this->boardmodel->getBoardView($idx);

        $this->setContent('boardview');
        $this->writeView();
    }

    public function write()
    {
        if($this->session->userdata('is_login') === true) {
            $this->load->model('boardmodel');

            $this->addScript('board_write.js');

            $this->setContent('boardwrite');
            $this->writeView();
        } else {
            echo "<script>alert('로그인 후 작성하세요');window.location.href='/board/memberlogin/';</script>";
        }
    }

    public function modify($idx)
    {
        if($this->session->userdata('is_login') === true) {

            $this->load->model('boardmodel');
            $write_id = $this->boardmodel->authorityCheck($idx);

            $s_user_id = $this->session->userdata('user_id');
            $w_user_id = $write_id['user_id'];

            if ($s_user_id != $w_user_id) {
                echo "<script>alert('작성자만 글을 수정할 수 있습니다.');</script>";
            } else {

                $this->load->model('boardmodel');

                $this->addScript('board_modify.js');


                $this->view['BOARD_ID'] = $idx;
                $this->view['BOARD_CONTENT'] = $this->boardmodel->getBoardView($idx);

                $this->setContent('boardmodify');
                $this->writeView();
            }
        }
    }
    public function delBoardContent($idx)
    {

        $this->load->model('boardmodel');

        $this->boardmodel->delBoardContent($idx);
    }
    public function MemberJoin()
    {

        $this->addScript('member_join.js');

        $this->setContent('memberjoin');
        $this->writeView();
    }
    public function MemberLogin()
    {
        if($this->session->userdata('is_login') === true) {
            echo "<script>alert('이미 로그인중입니다.');window.location.href='/board/'</script>";
            return false;
        }

        $this->addScript('member_login.js');

        $this->setContent('loginform');
        $this->writeView();
    }
}