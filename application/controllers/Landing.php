<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['vacancy'] = M_Vacancy::where('status', 1)->get();
		$this->load->view('public/landing', $data);
	}

	public function show($id)
    {
        $data['vacancy'] = M_Vacancy::where('status', 1)->where('id_vacancy',$id)->first();
        if (!$data['vacancy']) {
        	redirect(base_url());
        }
        $this->load->view('public/vacancy', $data);
    }

	public function submit()
	{
        $data['content'] = 'public/submission';
		$this->load->view('public/app', $data);
	}
}
