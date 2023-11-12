<?php

class MRegistrasi extends CI_Model
{
    protected $table = 'member';
    protected $allowedFields = ['nama', 'email', 'password'];

    public function saveData($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
}
