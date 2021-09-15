<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Api');
    }
    public function index_get()
    {
        $data = $this->M_Api->get_data();
        $this->response($data, 200);
    }
    public function index_post()
    {
        $input = $this->post('tugas');
        $insert = $this->M_Api->insert_data($input);
        $this->response($insert, 200);
    }
}
