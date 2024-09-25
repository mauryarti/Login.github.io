<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_controller{
  public function index(){
    $this->load->helper('form');
  $this->load->view('form');
  }
  public function my_func(){
     $this->load->helper('form');
  $this->load->library('form_validation');
  if($this->form_validation->run('signup')){
    $config['upload_path']='./uploads';
     $config['allowed_types']='*';

    $this->load->library('upload','$config');
    $this->upload->do_upload('document');
  // $postdata=$this->input->post();

//$this->load->model('homemodel');
//$this->homemodel->add_data($postdata);
  }
  else
  {
   // $this->form_validation->set_error_delimiters('<div class="text-danger mt-1 mb-3">','</div>');
   $this->load->view('form');
   } 
 }
  }
