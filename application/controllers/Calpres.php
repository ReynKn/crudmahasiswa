<?php
defined('BASEPATH') or exit('No direct script access allowed');
#[\AllowDynamicProperties]

class Calpres extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Calpres_model');
  }
  public function calpres()
  {
    $data['judul'] = "Halaman Calon Presiden";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['calpres'] = $this->Calpres_model->get();
    $this->load->view("layout/header",$data);
    $this->load->view("mahasiswa/vw_calpres.php", $data);
    $this->load->view("layout/footer",$data);
  }

  public function tambah()
  {
    $data['judul'] = "Halaman Tambah Calon Presiden";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view("layout/header",$data);
    $this->load->view("mahasiswa/vw_tambah_calpres.php",$data);
    $this->load->view("layout/footer",$data);
  }
  function upload()
  {
    $data = [
      'nik' => $this->input->post('nik'),
      'nama' => $this->input->post('nama'),
      'asal' => $this->input->post('asal'),
      'partai_pendukung' => $this->input->post('partai_pendukung'),
      'riwayat_pekerjaan' => $this->input->post('riwayat_pekerjaan'),
      'umur' => $this->input->post('umur'),
    ];
    $this->Calpres_model->insert($data);
    redirect('Calpres/calpres');
  }
  public function hapus($id)
  {
    $this->Calpres_model->delete($id);
    redirect('Calpres/calpres');
  }

  public function edit($id)
  {
    $data['judul'] = "Halaman Edit Calon Presiden";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['calpres'] = $this->Calpres_model->getById($id);
    $this->load->view("layout/header",$data);
    $this->load->view("mahasiswa/vw_ubah_calpres", $data);
    $this->load->view("layout/footer",$data);
  }
  public function update()
  {
    $data = [
        'nik' => $this->input->post('nik'),
        'nama' => $this->input->post('nama'),
        'asal' => $this->input->post('asal'),
        'partai_pendukung' => $this->input->post('partai_pendukung'),
        'riwayat_pekerjaan' => $this->input->post('riwayat_pekerjaan'),
        'umur' => $this->input->post('umur'),
      ];
    $id= $this->input->post('id');
    $this->Calpres_model->update(['id' => $id], $data);
    redirect('index.php/Calpres/calpres');

  }  
  public function detail($id)
  {
    $data['judul'] = "Halaman Detail Calon Presiden";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['calpres'] = $this->Calpres_model->getById($id);
    $this->load->view("layout/header",$data);
    $this->load->view("mahasiswa/vw_detail_calpres", $data);
    $this->load->view("layout/footer",$data);
  }

}
?>