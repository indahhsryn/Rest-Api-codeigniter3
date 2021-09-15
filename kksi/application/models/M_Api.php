<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Api extends CI_Model
{

    public function get_data()
    {
        return $this->db->get("todo")->result();
    }
    public function insert_data($input)
    {
        $data = [
            "tugas" => $input
        ];
        return $this->db->insert("todo", $data);
    }
}
