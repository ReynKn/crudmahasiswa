<?php
defined('BASEPATH') or exit('No direct script access allowed');
#[\AllowDynamicProperties]
class Profil extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_model', 'userrole');
  }

  public function index()
  {
    $data['judul'] = "Halaman Profile";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['user'] = $this->userrole->getBy();
    $this->load->view('layout/header_user', $data);
    $this->load->view('profil/vw_profil', $data);
    $this->load->view('layout/footer', $data);
  }

}
