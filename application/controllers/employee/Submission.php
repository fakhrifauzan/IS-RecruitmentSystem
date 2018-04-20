<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submission extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        // $data['data'] = M_Submission::all();
        $data['sidebar'] = 'employee/sidebar';
        $data['content'] = 'employee/submission';
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
        $data['sidebar'] = 'employee/sidebar';
        $data['content'] = 'employee/submission_view';
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

    public function setVerified($id)
    {
        $submission = M_Submission::find($id);
        if ($submission) {
            $submission->verified == 1;
            $submission->save();
            $this->session->set_flashdata('sukses', 'Submission Berhasil Disimpan');
        } else {
            $this->session->set_flashdata('gagal', 'Submission Tidak Berhasil Disimpan');
        }
        redirect('manager/submission');
    }

    public function setInReview($id)
    {
        $submission = M_Submission::find($id);
        if ($submission->verified == 1) {
            $submission->in_review = 1;
            $submission->save();
            $this->session->set_flashdata('sukses', 'Submission Berhasil Disimpan');
        } else {
            $this->session->set_flashdata('gagal', 'Submission Tidak Berhasil Disimpan');
        }
        redirect('manager/submission');
    }

    public function setInterview($id)
    {
        $submission = M_Submission::find($id);
        if ($submission->in_review == 1) {
            $submission->interview = 1;
            $submission->save();
            $this->session->set_flashdata('sukses', 'Submission Berhasil Disimpan');
        } else {
            $this->session->set_flashdata('gagal', 'Submission Tidak Berhasil Disimpan');
        }
        redirect('manager/submission');
    }
}
