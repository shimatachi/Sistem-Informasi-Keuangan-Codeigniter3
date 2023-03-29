<?php
class Template{
    protected $_ci;
    
    public function __construct(){
        $this->_ci = &get_instance();
    }
    
    public function utama($content, $data = NULL){

        $data['header'] = $this->_ci->load->view('template/header', $data, TRUE);
        $data['content'] = $this->_ci->load->view($content, $data, TRUE);
        $data['footer'] = $this->_ci->load->view('template/footer', $data, TRUE);
        
        $this->_ci->load->view('template/index', $data);
    }

    public function cek_login() {
        if($this->_ci->session->userdata('username') == '') {
        $this->_ci->session->set_flashdata('pesan','<div align="center" class="alert alert-danger" role="alert"><b>Silahkan Login Terlebih Dahulu!</b></div>');
        redirect('home');
        }
    }
}