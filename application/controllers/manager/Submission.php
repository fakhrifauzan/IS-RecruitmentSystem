<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submission extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $data['data'] = M_Submission::where('verified', 1)->get();
        $data['sidebar'] = 'manager/sidebar';
        $data['content'] = 'manager/submission';
        $this->load->view('layouts/app', $data); 
	}

	public function create()
    {
        // 
    }

    public function store()
    {
        // 
    }

    public function show($id)
    {
        $data['submission'] = M_Submission::find($id);
        $data['sidebar'] = 'manager/sidebar';
        $data['content'] = 'manager/submission_view';
        $this->load->view('layouts/app', $data);
    }

    public function edit($id)
    {
        // 
    }

    public function update()
    {
        //
    }

    public function destroy($id)
    {
        // 
    }

    public function setOffer($id)
    {
        $submission = M_Submission::find($id);
        if ($submission->interview == 1) {
            if ($submission->offer == 1) {
                $submission->offer = 0;
            } else {
                $submission->offer = 1;
            }
            $submission->save();
            $this->session->set_flashdata('sukses', 'Submission Berhasil Disimpan');
        } else {
            $this->session->set_flashdata('gagal', 'Submission Tidak Berhasil Disimpan');
        }
        redirect('manager/submission');
    }
}
