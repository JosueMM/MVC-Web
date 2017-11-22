<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function login()
    {
        $this->load->view('user/login');
    }

    

    public function register()
    {
        $this->load->view('user/register');
    }

    public function save()
    {
		// get the params
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $first_name = $this->input->post('name');
        $last_name = $this->input->post('last_name');

        $user = array(
            'user' => $username,
            'password' => $password,
            'name' => $first_name,
            'last_name' => $last_name
        );
		// call the model to save

		$r = $this->User_model->save($user);
		
		// redirect
        if ($r) {
            $this->load->view('user/login');
        } else {
             
           $this->load->view('user/register');
        }
    }
}
