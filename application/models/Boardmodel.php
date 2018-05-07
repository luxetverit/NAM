<?php

class Boardmodel extends CI_Model
{
    private $db = null;
    private $user_table = 'dbkwontom.user';
    private $njw_board_table = '';

    public function __construct()
    {
        parent::__construct();

        $this->db = $this->load->database('default', true);

        $this->njw_board_table = 'dbkwontom.njw_board';
        $this->db->order_by("board_id", "desc");
    }

    public function getBoardList($offset, $page)
    {
        $row = array();

        $page = $page - 1;

        $this->db->limit($offset, $page);
        $rs = $this->db->get($this->njw_board_table);

        if ($rs && $rs->num_rows() > 0) {
            $row = $rs->result_array();
        }

        return $row;
    }

    public function getBoardListCount()
    {
        return $this->db->count_all_results($this->njw_board_table);
    }

    public function getBoardView($board_id)
    {
        $this->db->where('board_id', $board_id);
        $this->db->set('hits', 'hits+1', FALSE);
        $this->db->update($this->njw_board_table);

        $row = array();

        $this->db->where('board_id', $board_id);
        $rs = $this->db->get($this->njw_board_table);

        if ($rs && $rs->num_rows() > 0) {
            $row = $rs->row_array();
        }

        return $row;
    }

    public function insertBoardInfo($insert)
    {
        return $this->db->insert($this->njw_board_table, $insert);

    }

    public function modifyBoardInfo($update, $board_id)
    {
        $this->db->where('board_id', $board_id);
        $this->db->update($this->njw_board_table, $update);

    }

    public function delBoardContent($board_id)
    {
        $this->db->where('board_id', $board_id);
        $this->db->delete($this->njw_board_table);
    }

    public function authorityCheck($board_id)
    {
        $this->db->where('board_id', $board_id);
        $data = $this->db->get($this->njw_board_table);
        if ($data->num_rows() > 0) {
            $row = $data->row_array();
        } else {
            return false;
        }
        return $row;
    }
}
