<?php
defined('BASEPATH') or exit('No direct script access allowed');

// use chriskacerguis\RestServer\RestController;

class display extends CI_Controller
{
    public function index()
    {
        $this->load->view('index');
    }
}
