<?php

class Sessionmodel extends CI_Model
{
    private $db = null;
    private $user_table = 'dbkwontom.user';
    private $sh24_sessions_table= '';


    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('default', true);

        $this->sh24_sessions_table = 'dbkwontom.sh24_sessions';
    }


    public function checkUserInfo($userid, $password)
    {
        $this->db->where('user_id', $userid AND 'password', $password);

        $data = $this->db->get($this->sh24_sessions_table, 'userid' AND 'email');

        if ($data->num_rows() > 0) {
            $user_exist = true;
        } else {
            $user_exist = false;
        }

        return $user_exist;
    }
}