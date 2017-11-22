<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
public function index(){

	$this->load->view('user/index');
}

public function log(){

	$usr = $this->imput->post('user');
	$psw = $this->imput->post('password');
$r = false;
	$select = $this->db->get('users');

	for ($i=0; $i < count(select); $i++) { 
		if(select[i].user==$usr && select[i].password == psw){
$r=true;

		}



	}

	if($r){
		$this->load->view('user/index');
	}else{
		$this->load->view('user/login');
	}

}




}
