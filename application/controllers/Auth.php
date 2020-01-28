<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index()
    {
        // Cek Session
        if($this->session->userdata('username')) {
            redirect('admin');
        }

        // Validasi Form
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        // Pengecekan
        if($this->form_validation->run() == FALSE) {
            $this->load->view('auth/login');
        }
        else {
            $this->_login();
        }
        
    }

    private function _login()
    {
        // Mengambil Inputan Form
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Mengambil dari database
        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        // Cek Validasi
        if($user) {
            if($user['password'] == $password) {
                $data = [
                    'username' => $user['username'],
                    'level' => $user['level']
                ];
                $this->session->set_userdata($data);
                redirect('admin');
            } else {
               $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Salah Password!</div>');
            redirect('/'); 
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username Tidak Terdaftar!</div>');
            redirect('/');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('id_level');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda Telah Berhasil Logout!</div>');
        redirect('/');
    }
}