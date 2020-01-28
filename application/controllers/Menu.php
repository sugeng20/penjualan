<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('username')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda Harus Login Dahulu!</div>');
            redirect('/');
        }
        
    }


    public function index()
    {
        $data['title'] = 'Menu';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('menu/menu');
        $this->load->view('templates/footer');
    }
}