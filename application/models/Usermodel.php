<?php

class Usermodel extends CI_Model
{
    private $db = null;
    private $user_table = 'dbkwontom.user';
    private $sh24_users_table = '';


    public function __construct()
    {
        parent::__construct();

        $this->db = $this->load->database('default', true);
        $this->sh24_users_table = 'dbkwontom.sh24_users';
    }

    public function getByUserid($option)
    {
        $result = $this->db->get_where('sh24_users_table', array('user_id'=>$option['user_id']))->row();
        return $result;
    }
    public function checkIdExist($userid)
    {
        $this->db->where('user_id', $userid);
        $data = $this->db->get($this->sh24_users_table);

        if ($data->num_rows() > 0) {
            $id_exist = true;
        } else {
            $id_exist = false;
        }

        return $id_exist;
    }

    public function insertUserInfo($insert)
    {
        $data = $this->db->insert($this->sh24_users_table, $insert);
        if ($data == true) {
            return true;
        }
        return false;
    }

    public function checkUserInfo($auth_data)
    {
        $this->db->where('user_id', $auth_data['user_id']);
        $this->db->where('password', password_verify($auth_data['password'], PASSWORD_BCRYPT));

        $data = $this->db->get($this->sh24_users_table);

        if($data ->num_rows() > 0 ){
            return $data->row();
        }
        return false;
    }
}