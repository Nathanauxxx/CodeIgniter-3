<?php

class Users_model extends CI_Model{
    public function store($users)
    {
        $this->db->insert("tb_users",$users);
    }
}