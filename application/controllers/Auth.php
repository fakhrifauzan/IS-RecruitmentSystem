<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        if (!$this->session->has_userdata('logged_in')) {
            $this->load->view('auth/login'); 
        } else {
            if ($this->session->userdata('role') == 0) { // Applicants
                redirect('applicants/dashboard');
            } elseif ($this->session->userdata('role') == 1) { // Employee
                redirect('employee/dashboard');
            } elseif ($this->session->userdata('role') == 2) { // Manager
                redirect('manager/dashboard');
            } else {
                redirect('executive/dashboard');
            }
        }        
	}

    public function login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $user = M_User::where('username', $username)->where('password', $password)->first();
        // dd($user);

        if (!$user) {
            $this->session->set_flashdata('class', 'danger');
            $this->session->set_flashdata('message', 'Username / Password salah!');
            redirect(base_url());
        } else {
            $session_data = array(
                'id'        => $user->id,
                'username'  => $user->username,
                'first_name'=> $user->first_name,
                'last_name' => $user->last_name,
                'location'  => $user->location,
                'email'     => $user->email,
                'phone'     => $user->phone,
                'role'      => $user->role,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($session_data);

            if ($this->session->userdata('role') == 0) { // Applicants
                redirect('applicants/dashboard');
            } elseif ($this->session->userdata('role') == 1) { // Employee
                redirect('employee/dashboard');
            } elseif ($this->session->userdata('role') == 2) { // Manager
                redirect('manager/dashboard');
            } else {
                redirect('executive/dashboard');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());       
    }
}