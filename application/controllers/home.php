<?php

Class Home extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_data');
    }

    public function index(){
        $this->form_validation->set_rules('username','Username','required|trim');
            $this->form_validation->set_rules('password','Password','required|trim');
            if($this->form_validation->run()==false){
                $data['title'] = 'login';
                $this->load->view('login',$data);
            } else {
                $username = $this->input->POST('username');
            $password = $this->input->POST('password');
            $user = $this->db->GET_WHERE('tb_user',['username'=> $username, 'password'=> md5($password) ])->row_array();
                    if($user['username']==$username){
                        if(md5($password, $user['password'])){
                            $data =[
                                'username' =>$user['username'],
                            ];
                            $this->session->set_userdata($data);
                            redirect('home/halaman');
                        }else{
                            redirect('home');
                        }
                }else{
                    $this->session->set_flashdata('pesan','<div align="center" class="alert alert-danger" role="alert"><b>Username Atau Password Salah!</b></div>');
               redirect('home');
                }
            }
    }

    public function halaman(){
        $data['user'] =$this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Halaman Awal';
        $this->template->utama('template/homee',$data);
    }

    public function data_rekening(){
        $data['user'] =$this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
        $data['member'] = $this->m_data->tampil_rekening();
        $data['title'] = 'Data rekening';
        $this->template->utama('data/data_rekening',$data);
    }
    
    public function data1(){
        $data['user'] =$this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
        $data['member'] = $this->m_data->tampil1();
        $data['title'] = 'Data user';
        $this->template->utama('data/data_user',$data);
    }
    
    public function data2(){
        $data['user'] =$this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
        $data['kas'] = $this->m_data->tampil();
        $data['title'] = 'Data Penerimaan';
        $this->template->utama('data/data_masuk',$data);
    }

    public function data3(){
        $data['user'] =$this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
        $data['kas'] = $this->m_data->tampil2();
        $data['title'] = 'Data Penerimaan';
        $this->template->utama('data/data_paypal',$data);
    }
    
    public function hapus2($id=null){
        if (!isset($id)) show_404();
        if ($this->m_data->delete($id)) {
            redirect('home/data2');
        }
    }

    public function hapus4($id=null){
        if (!isset($id)) show_404();
        if ($this->m_data->delete1($id)) {
            redirect('home/data1');
        }
    }

    public function hapus3($id=null){
        if (!isset($id)) show_404();
        if ($this->m_data->delete2($id)) {
            redirect('home/data3');
        }
    }

    public function hapus_rekening($id=null){
        if (!isset($id)) show_404();
        if ($this->m_data->delete_rekening($id)) {
            redirect('home/data_rekening');
        }
    }

    public function chart1(){
        $data['user'] =$this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Grafik';
		$data['grafik']=$this->m_data->chart();
		$this->template->utama('grafik/chart',$data);
	}
    
    public function logout_user(){
        $this->session->unset_userdata(array('username','password'));
        $this->session->set_flashdata('pesan','<div align="center" class="alert alert-success" role="alert"><b>Anda Telah Logout. </b></div>');
        redirect('home');
    }

    public function tambah_paypal(){
        $this->form_validation->set_rules('kd_rek','Kode Rekening','required|trim');
        $this->form_validation->set_rules('uraian','Uraian','required|trim');
        $this->form_validation->set_rules('penerimaan','Penerimaan','required|trim');
        if($this->form_validation->run()==false){
            $data['user'] =$this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
            $data['title'] = 'Tambah Data Paypal';
            $this->template->utama('input/tambah_paypal',$data);
        } 
    }
    
    public function tambah(){
        $this->form_validation->set_rules('kd_rek','Kode Rekening','required|trim');
        $this->form_validation->set_rules('uraian','Uraian','required|trim');
        $this->form_validation->set_rules('penerimaan','Penerimaan','required|trim');
        if($this->form_validation->run()==false){
            $data['user'] =$this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
            $data['title'] = 'Tambah Penerimaan';
            $this->template->utama('input/tambah_kas',$data);
        } 
    }

    public function tambah2(){
        if($this->form_validation->run()==false){
            $data['user'] =$this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
            $data['title'] = 'Tambah User';
            $this->template->utama('input/tambah_user',$data);
        } 
    }

    public function tambah_rekening(){
        if($this->form_validation->run()==false){
            $data['user'] =$this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
            $data['title'] = 'Tambah Rekening';
            $this->template->utama('input/tambah_rekening',$data);
        } 
    }

    public function kurang(){
        $this->form_validation->set_rules('kd_rek','Kode Rekening','required|trim');
        $this->form_validation->set_rules('uraian','Uraian','required|trim');
        $this->form_validation->set_rules('penerimaan','Penerimaan','required|trim');
        if($this->form_validation->run()==false){
            $data['user'] =$this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
            $data['title'] = 'Tambah Penerimaan';
            $this->template->utama('input/pengeluaran',$data);
        } 
    }

    public function kurang_paypal(){
        $this->form_validation->set_rules('kd_rek','Kode Rekening','required|trim');
        $this->form_validation->set_rules('uraian','Uraian','required|trim');
        $this->form_validation->set_rules('penerimaan','Penerimaan','required|trim');
        if($this->form_validation->run()==false){
            $data['user'] =$this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
            $data['title'] = 'Tambah Penguragan Paypal';
            $this->template->utama('input/pengeluaran_paypal',$data);
        } 
    }

    public function add_paypal(){
        $kd_rek = $this->input->post('kd_rek');
        $uraian = $this->input->post('uraian');
        $penerimaan = $this->input->post('penerimaan');
        date_default_timezone_set("Asia/Jakarta");
        $tgl = date('c');
        echo $tgl;

        $data = array(
            'kdrek' => $kd_rek,
            'ket'   => $uraian,
            'tgl'   => $tgl,
            'debit' => $penerimaan
        );
        $this->m_data->save3($data,'tb_paypal');
        $this->session->set_flashdata('success', 'Data Pemasukan Paypal Berhasil disimpan');

		redirect('home/data3');
    }

    public function add_rekening(){
        $nama = $this->input->post('nama');
        $nama_rekening = $this->input->post('nama_rekening');
        $nama_bank = $this->input->post('nama_bank');
        $no_rekening = $this->input->post('no_rekening');
        $username = $this->input->post('username');


        $data = array(
            'nama' => $nama,
            'nama_rekening'   => $nama_rekening,
            'nama_bank'   => $nama_bank,
            'no_rekening'   => $no_rekening,
            'username'   => $username

        );
        $this->m_data->save_rekening($data,'tb_rekening');
        $this->session->set_flashdata('success', 'Data Rekening Berhasil disimpan');

		redirect('home/data_rekening');
    }


    public function add(){
        $kd_rek = $this->input->post('kd_rek');
        $uraian = $this->input->post('uraian');
        $penerimaan = $this->input->post('penerimaan');
        date_default_timezone_set("Asia/Jakarta");
        $tgl = date('c');
        echo $tgl;

        $data = array(
            'kdrek' => $kd_rek,
            'ket'   => $uraian,
            'tgl'   => $tgl,
            'debit' => $penerimaan
        );
        $this->m_data->save($data,'tb_kas');
        $this->session->set_flashdata('success', 'Data Pemasukan Kas Berhasil disimpan');

		redirect('home/data2');
    }

    public function add1(){
        $kd_rek = $this->input->post('kd_rek');
        $uraian = $this->input->post('uraian');
        $penerimaan = $this->input->post('penerimaan');
        $sld = $this->input->post('saldoo');
        date_default_timezone_set("Asia/Jakarta");
        $tgl = date('c');
        echo $tgl;

        $data = array(
            'kdrek' => $kd_rek,
            'ket'   => $uraian,
            'tgl'   => $tgl,
            'kredit' => $penerimaan
        );
        $this->m_data->save($data,'tb_kas');
        $this->session->set_flashdata('success', 'Data Pengeluaran Kas Berhasil disimpan');

		redirect('home/data2');
    }

    public function add2(){
        $kd_rek = $this->input->post('kd_rek');
        $uraian = $this->input->post('uraian');
        $penerimaan = $this->input->post('penerimaan');
        $sld = $this->input->post('saldoo');
        date_default_timezone_set("Asia/Jakarta");
        $tgl = date('c');
        echo $tgl;

        $data = array(
            'kdrek' => $kd_rek,
            'ket'   => $uraian,
            'tgl'   => $tgl,
            'kredit' => $penerimaan
        );
        $this->m_data->save3($data,'tb_paypal');
        $this->session->set_flashdata('success', 'Data Pengeluaran Paypal Berhasil disimpan');

		redirect('home/data3');
    }

    public function add_user(){
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $pass = $this->input->post('pass');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $no_telepon = $this->input->post('no_telepon');
        $level = $this->input->post('level');


        $data = array(
            'username' => $username,
            'password'   => $password,
            'pass'   => $pass,
            'nama_lengkap' => $nama_lengkap,
            'no_telepon' => $no_telepon,
            'level' => $level,

        );
        $this->m_data->save2($data,'tb_user');
        $this->session->set_flashdata('success', 'Berhasil disimpan');
        $data['message'] = 'Insert success';

		redirect('home/data1', $data);
    }

    public function edit1($id = NULL){
        $data["kas"] = $this->m_data->ambilid($id);
        if (!$data["kas"]) show_404();

        $data['user'] = $this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Edit Data';
        $this->session->set_flashdata('success', 'Data User Berhasil Diedit');
        $this->template->utama('input/edit_masuk',$data);
    }

    public function edit2($id = NULL){
        $data["paypal"] = $this->m_data->ambilid2($id);
        if (!$data["paypal"]) show_404();

        $data['user'] = $this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Edit Data Paypal';
        $this->session->set_flashdata('success', 'Data paypal Berhasil Diedit');
        $this->template->utama('input/edit_paypal',$data);
    }
    
    public function serch(){
        $data['user']= $this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Pencarian';
        $tgl = $this->input->post('tanggal');
        $data['cari'] = $this->m_data->cari($tgl);
        // $this->session->set_flashdata('success', 'Hasil Pencarian');
        $this->load->view('data/cari',$data);
    }

    public function ubah1(){
        $idkas = $this->input->post('idkas');
        $kd_rek = $this->input->post('kd_rek');
        $uraian = $this->input->post('uraian');
        $penerimaan = $this->input->post('penerimaan');
        $keluar = $this->input->post('keluar');

        $data = array(
            'kdrek' => $kd_rek,
            'ket'   => $uraian,
            'debit' => $penerimaan,
            'kredit'=> $keluar
        );
        $id = array('idkas' => $idkas);
        $this->m_data->ubah($data,$id);
        // $this->session->set_flashdata('success', 'Berhasil diupdate');

		redirect('home/data2');
    }

    public function ubah2(){
        $id_paypal = $this->input->post('id_paypal');
        $kd_rek = $this->input->post('kd_rek');
        $uraian = $this->input->post('uraian');
        $penerimaan = $this->input->post('penerimaan');
        $keluar = $this->input->post('keluar');

        $data = array(
            'kdrek' => $kd_rek,
            'ket'   => $uraian,
            'debit' => $penerimaan,
            'kredit'=> $keluar
        );
        $id = array('id_paypal' => $id_paypal);
        $this->m_data->ubah2($data,$id);
        // $this->session->set_flashdata('success', 'Berhasil diupdate');

		redirect('home/data3');
    }

    public function laporan(){
        $data['user']= $this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
        $data['kas'] = $this->m_data->tampil();
        $data['title'] = 'Laporan';
        $this->template->utama('data/laporan',$data);
    }

    public function pencarian(){
        $data['user']= $this->db->GET_WHERE('tb_user',['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Pencarian';
        $this->template->utama('input/pencarian',$data);
    }
}