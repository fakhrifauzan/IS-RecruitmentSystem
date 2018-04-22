<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		if (!$this->session->logged_in){
			redirect('auth');
		}
    }

	public function index()
	{
		$this->dashboard();
	}

	public function dashboard()
    {
        
        if ($this->session->role == 0) {
            // $data['sidebar'] = 'admin/sidebar';
        } else {
            if ($this->session->role == 1) {
                $data['sidebar'] = 'employee/sidebar';
            } elseif ($this->session->role == 2) {
                $data['sidebar'] = 'manager/sidebar';
            } elseif ($this->session->role == 3) {
                $data['sidebar'] = 'executive/sidebar';
            }
            $data['pelamar'] = M_Submission::all()->count();
            $data['in_review'] = M_Submission::where('in_review', 1)->count();
            $data['interview'] = M_Submission::where('in_review', 1)->where('interview', 1)->count();
            $data['offer'] = M_Submission::where('in_review', 1)->where('interview', 1)->where('offer', 1)->count();
            $data['content'] = 'layouts/dashboard';
        }
        $this->load->view('layouts/app', $data);
    }
}
