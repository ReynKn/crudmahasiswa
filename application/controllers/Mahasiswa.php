<?php
defined('BASEPATH') or exit('No direct script access allowed');
#[\AllowDynamicProperties]
class Mahasiswa extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mahasiswa_model');
    $this->load->model('Prodi_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman Mahasiswa";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['mahasiswa'] = $this->Mahasiswa_model->get();
    $this->load->view("layout/header", $data);
    $this->load->view("mahasiswa/vw_mahasiswa", $data);
    $this->load->view("layout/footer", $data);
  }
  public function tambah()
  {
    $data['judul'] = "Halaman Tambah Mahasiswa";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['prodi'] = $this->Prodi_model->get();
    $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required', [
      'required' => 'Nama Mahasiswa is Required'
    ]);
    $this->form_validation->set_rules('nim', 'NIM Mahasiswa', 'required', [
      'required' => 'NIM Mahasiswa is Required'
    ]);
    $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
      'required' => 'Jenis Kelamin Mahasiswa is Required'
    ]);
    $this->form_validation->set_rules('email', 'Email Mahasiswa', 'required', [
      'required' => 'Email Mahasiswa is Required'
    ]);
    $this->form_validation->set_rules('prodi', 'Prodi Mahasiswa', 'required', [
      'required' => 'Prodi Mahasiswa is Required'
    ]);
    $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required', [
      'required' => 'Asal Sekolah Mahasiswa is Required'
    ]);
    $this->form_validation->set_rules('no_hp', 'Nomor HP Mahasiswa', 'required|integer', [
      'required' => 'Nama Mahasiswa is Required',
      'integer' => 'NO HP have to be numbers'
    ]);
    $this->form_validation->set_rules('alamat', 'Alamat Mahasiswa', 'required', [
      'required' => 'Alamat Mahasiswa is Required'
    ]);
    if ($this->form_validation->run() == false) {
      $this->load->view("layout/header", $data);
      $this->load->view("mahasiswa/vw_tambah_mahasiswa", $data);
      $this->load->view("layout/footer", $data);
    } else {
      $data = [
        'nama' => $this->input->post('nama'),
        'nim' => $this->input->post('nim'),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'email' => $this->input->post('email'),
        'prodi' => $this->input->post('prodi'),
        'asal_sekolah' => $this->input->post('asal_sekolah'),
        'no_hp' => $this->input->post('no_hp'),
        'alamat' => $this->input->post('alamat'),
      ];
      $this->Mahasiswa_model->insert($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" 
      role="alert">The Data Successfully Added!</div>');
      redirect('Mahasiswa');
    }
  }
  public function detail($id)
  {
    $data['judul'] = "Halaman Detail Mahasiswa";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
    $this->load->view("layout/header", $data);
    $this->load->view("mahasiswa/vw_detail_mahasiswa", $data);
    $this->load->view("layout/footer", $data);
  }
  public function hapus($id)
  {
    $this->Mahasiswa_model->delete($id);
    $this->session->set_flashdata('message', '<div class="alert alert-success"
     role="alert">The Data Successfully Deleted!</div>');
    redirect('Mahasiswa');
  }
  public function edit($id)
  {
    $data['judul'] = "Halaman Edit Mahasiswa";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['prodi'] = $this->Prodi_model->get();
    $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);

    $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required', [
      'required' => 'Nama Mahasiswa is Required'
    ]);
    $this->form_validation->set_rules('nim', 'NIM Mahasiswa', 'required', [
      'required' => 'NIM Mahasiswa is Required'
    ]);
    $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
      'required' => 'Jenis Kelamin Mahasiswa is Required'
    ]);
    $this->form_validation->set_rules('email', 'Email Mahasiswa', 'required', [
      'required' => 'Email Mahasiswa is Required'
    ]);
    $this->form_validation->set_rules('prodi', 'Prodi Mahasiswa', 'required', [
      'required' => 'Prodi Mahasiswa is Required'
    ]);
    $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required', [
      'required' => 'Asal Sekolah Mahasiswa is Required'
    ]);
    $this->form_validation->set_rules('no_hp', 'Nomor HP Mahasiswa', 'required|integer', [
      'required' => 'Nama Mahasiswa is Required',
      'integer' => 'NO HP have to be numbers'
    ]);
    $this->form_validation->set_rules('alamat', 'Alamat Mahasiswa', 'required', [
      'required' => 'Alamat Mahasiswa is Required'
    ]);
    if ($this->form_validation->run() == false) {
      $this->load->view("layout/header", $data);
      $this->load->view("mahasiswa/vw_ubah_mahasiswa", $data);
      $this->load->view("layout/footer", $data);
    } else {
      $data = [
        'nama' => $this->input->post('nama'),
        'nim' => $this->input->post('nim'),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'email' => $this->input->post('email'),
        'prodi' => $this->input->post('prodi'),
        'asal_sekolah' => $this->input->post('asal_sekolah'),
        'no_hp' => $this->input->post('no_hp'),
        'alamat' => $this->input->post('alamat'),
      ];
      $id = $this->input->post('id');
      $this->Mahasiswa_model->update(['id' => $id], $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" 
      role="alert">The Data Successfully Edited!</div>');
      redirect('Mahasiswa');
    }
  }
  public function update()
  {
    $data = [
      'nama' => $this->input->post('nama'),
      'nim' => $this->input->post('nim'),
      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'email' => $this->input->post('email'),
      'prodi' => $this->input->post('prodi'),
      'asal_sekolah' => $this->input->post('asal_sekolah'),
      'no_hp' => $this->input->post('no_hp'),
      'alamat' => $this->input->post('alamat'),
    ];
    $id = $this->input->post('id');
    $this->Mahasiswa_model->update(['id' => $id], $data);
    redirect('Mahasiswa');
  }
}
