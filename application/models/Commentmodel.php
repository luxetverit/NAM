<?php

class Commentmodel extends CI_Model
{
    private $db = null;
    private $user_table = 'dbkwontom.user';
    private $njw_board_comment_table = '';

    public function __construct()
    {
        parent::__construct();

        $this->db = $this->load->database('default', true);

        $this->njw_board_comment_table = 'dbkwontom.njw_board_comment';
    }


    public function insertCommentInfo($insert)
    {
        return $this->db->insert($this->njw_board_comment_table, $insert);

    }

    public function getCommentInfo($board_id)
    {

        $row = array();

        $this->db->where('board_pid', $board_id);
        $rs = $this->db->get($this->njw_board_comment_table);

        if ($rs && $rs->num_rows() > 0) {
            $row = $rs->row_array();
        }

        return $row;
    }


   /* public function delBoardContent($board_id)
    {
        $this->db->where('board_id', $board_id);
        $this->db->delete($this->njw_board_table);
    }*/


}
