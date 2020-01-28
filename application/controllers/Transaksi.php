<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

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
        $data['title'] = 'Transaksi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('transaksi/transaksi');
        $this->load->view('templates/footer');
    }

    public function riwayat()
    {
        $data['title'] = 'Riwayat';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('transaksi/riwayat');
        $this->load->view('templates/footer');
    }
}