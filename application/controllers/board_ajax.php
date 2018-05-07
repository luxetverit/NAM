<?php

class Board_ajax extends MY_Controller
{
    private $rt = array('code' => 'SUCCESS', 'msg' => '', 'data' => array());

    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
    }
    public function getPageData()
    {
        $this->load->model('boardmodel');
    }

    public function getWriteOk()
    {
        $this->load->model('boardmodel');

        $insert = array(
            'subject' => $this->input->post('subject'),
            'content' => $this->input->post('content'),
            'user_id' => $this->session->userdata('user_id')
        );
        $insert_rs = $this->boardmodel->insertBoardInfo($insert);

        if ($insert_rs === false) {
            $this->rt['code'] = 'ERROR';
            $this->rt['msg'] = '게시물 등록에 실패 했습니다.';
        }
            $this->rt['code'] = 'SUCCESS';
            $this->rt['msg'] = '게시글이 등록되었습니다.';

            echo json_encode($this->rt);
    }

    public function getModifyOk()
    {
        $board_id = $this->input->post('board_id');

        $this->load->model('boardmodel');

        $update = array(
            'subject' => $this->input->post('subject'),
            'content' => $this->input->post('content'),
        );

        $update_rs = $this->boardmodel->modifyBoardInfo($update, $board_id);

        if($update_rs === false) {
            $this->rt['code'] = 'ERROR';
            $this->rt['msg'] = '게시물 수정에 실패했습니다.';
        }
            $this->rt['code'] = 'SUCCESS';
            $this->rt['msg'] = '게시글이 수정되었습니다.';
            echo json_encode($this->rt);

    }

    public function getDeleteOk()
    {
        $board_id = $this->input->post('board_id');

        $this->load->model('boardmodel');

        if(@$this->session->userdata('is_login') != true) {
            $this->rt['code'] = 'ERROR';
            $this->rt['msg'] = '로그인이 필요한 항목입니다..';
        }
            $write_id = $this->boardmodel->authorityCheck($board_id);

            $s_user_id = $this->session->userdata('user_id');
            $w_user_id = $write_id['user_id'];

            if ($s_user_id != $w_user_id) {
                $this->rt['code'] = 'ERROR';
                $this->rt['msg'] = '본인 게시글만 삭제할 수 있습니다.';
            }
                $delete_rs = $this->boardmodel->delBoardContent($board_id);

                if ($delete_rs === false) {
                    $this->rt['code'] = 'ERROR';
                    $this->rt['msg'] = '게시글 삭제에 실패했습니다.';
                }
                    $this->rt['code'] = 'SUCCESS';
                    $this->rt['msg'] = '게시글이 삭제되었습니다.';

                    echo json_encode($this->rt);
    }

}
