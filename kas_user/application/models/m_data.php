<?php
Class M_data extends CI_Model{

    public function tampil_kas(){
        $this->db->select('SUM(debit - kredit) AS saldo');
        $this->db->from('tb_kas');
        $query = $this->db->get();
        return $query->result(); 
    }

    public function tampil(){
        $this->db->select('*');
        $this->db->from('tb_kas');
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil1(){
        $this->db->select('*');
        $this->db->from('tb_pengguna');
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil2(){
        $this->db->select('*');
        $this->db->from('tb_paypal');
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil_rekening(){
        $this->db->select('*');
        $this->db->from('tb_rekening');
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get();
        return $query->result();
    }

    public function ambilid($id){
        return $this->db->GET_WHERE('tb_kas', ["idkas" => $id])->row();
    }

    public function ambilid2($id){
        return $this->db->GET_WHERE('tb_paypal', ["id_paypal" => $id])->row();
    }

    public function ambilid_pengguna($id){
        return $this->db->GET_WHERE('tb_pengguna', ["id_pengguna" => $id])->row();
    }

    public function delete($id){
        return $this->db->delete('tb_kas', array("idkas" => $id));
    }

    public function delete1($id){
        return $this->db->delete('tb_pengguna', array("kode_user" => $id));
    }

    public function delete2($id){
        return $this->db->delete('tb_paypal', array("id_paypal" => $id));
    }

    public function delete_rekening($id){
        return $this->db->delete('tb_rekening', array("id_rekening" => $id));
    }

    public function chart(){
        $query = $this->db->query("SELECT tgl,SUM(debit) as saldoo,kredit FROM tb_kas GROUP BY tgl");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function cari($tgl){
        $this->db->select('*');
        $this->db->from('tb_kas');
        $this->db->like('tgl',$tgl);
        $query = $this->db->get();
        return $query->result();
    }

    public function save($data){
        $this->db->insert('tb_kas',$data);
    }

    public function save2($data){
        $this->db->insert('tb_pengguna',$data);
    }

    public function save3($data){
        $this->db->insert('tb_paypal',$data);
    }

    public function save_rekening($data){
        $this->db->insert('tb_rekening',$data);
    }

    public function ubah($data,$id){
        $this->db->where($id);
        $this->db->update('tb_kas',$data);
    }

    public function ubah2($data,$id){
        $this->db->where($id);
        $this->db->update('tb_paypal',$data);
    }

    public function ubah_pengguna($data,$id){
        $this->db->where($id);
        $this->db->update('tb_pengguna',$data);
    }

}
?>