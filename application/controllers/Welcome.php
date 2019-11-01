<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class welcome extends CI_Controller {
	function __construct(){
		parent ::__construct();
		//$config['allowed_types']= 'gif|jpg|png;
		$this->load->model('model_pertama');
		$this->load->helper('url');
	}


	public function index(){
		$data['datashop']=$this->model_pertama->getdata()->result();
		$this->load->view('v_model',$data);
	}
}