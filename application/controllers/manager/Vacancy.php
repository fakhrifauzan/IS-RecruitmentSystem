<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vacancy extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $data['data'] = M_Vacancy::all();
        $data['sidebar'] = 'manager/sidebar';
        $data['content'] = 'manager/vacancy';
        $this->load->view('layouts/app', $data); 
	}

	public function create()
    {
        $data['data'] = M_location::all();
        // dd($data['data']);
        $data['sidebar'] = 'manager/sidebar';
        $data['content'] = 'manager/vacancy_create';
        $this->load->view('layouts/app', $data);
    }

    public function store()
    {
        if (!$this->input->post()) {
            redirect('manager/vacancy');
        } else {
            $this->form_validation->set_rules('title', 'Judul Lowongan', 'required|min_length[5]');
            $this->form_validation->set_rules('job_desc', 'Deskripsi Pekerjaan', 'required');
            $this->form_validation->set_rules('qualifications', 'Kualifikasi', 'required');
            $this->form_validation->set_rules('location_id', 'Lokasi', 'required');
            $this->form_validation->set_rules('type', 'Tipe Lowongan', 'required');
            $this->form_validation->set_rules('status', 'Status Lowongan', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->create();
            } else {
                $vacancy = M_Vacancy::create([
                    'title' => $this->input->post('title'),
                    'job_desc' => $this->input->post('job_desc'),
                    'qualifications' => $this->input->post('qualifications'),
                    'location_id' => $this->input->post('location_id'),
                    'additional' => empty($this->input->post('additional')) ? NULL : $this->input->post('additional'),
                    'type' => $this->input->post('type'),
                    'status' => $this->input->post('status'),
                    'title' => $this->input->post('title'),
                    'created_by' => $this->session->id,
                ]);

                if($vacancy) {
                    $this->session->set_flashdata('sukses', 'Vacancy Berhasil Disimpan');
                } else {
                    $this->session->set_flashdata('gagal', 'Vacancy Tidak Berhasil Disimpan');
                }
                redirect('manager/vacancy');
            }
        }
    }

    public function show($id)
    {
        $data['vacancy'] = M_Vacancy::find($id);
        $data['sidebar'] = 'manager/sidebar';
        $data['content'] = 'manager/vacancy_show';
        $this->load->view('layouts/app', $data);
    }

    public function edit($id)
    {
        $data['data'] = M_location::all();
        $data['vacancy'] = M_Vacancy::find($id);
        if(!$data['vacancy']) {
            redirect('manager/vacancy');
        }
        $data['sidebar'] = 'manager/sidebar';
        $data['content'] = 'manager/vacancy_edit';
        $this->load->view('layouts/app', $data);
    }

    public function update()
    {
        if (!$this->input->post()) {
            redirect('manager/vacancy');
        } else {
            $this->form_validation->set_rules('title', 'Vacancy Title', 'required|min_length[5]');
            $this->form_validation->set_rules('job_desc', 'Job Description', 'required');
            $this->form_validation->set_rules('qualifications', 'Qualifications', 'required');
            $this->form_validation->set_rules('location_id', 'Location', 'required');
            $this->form_validation->set_rules('type', 'Vacancy Type', 'required');
            $this->form_validation->set_rules('status', 'Vacancy Status', 'required');

            if ($this->form_validation->run() == FALSE) {
                redirect('manager/vacancy');
            } else {
                $vacancy = M_Vacancy::find($this->input->post('id_vacancy'));
                $vacancy->title = $this->input->post('title');
                $vacancy->job_desc = $this->input->post('job_desc');
                $vacancy->qualifications = $this->input->post('qualifications');
                $vacancy->additional = empty($this->input->post('additional')) ? NULL : $this->input->post('additional');
                $vacancy->location_id = $this->input->post('location_id');
                $vacancy->type = $this->input->post('type');
                $vacancy->status = $this->input->post('status');
                $vacancy->save();

                if($vacancy) {
                    $this->session->set_flashdata('sukses', 'Vacancy Berhasil Diperbarui');
                } else {
                    $this->session->set_flashdata('gagal', 'Vacancy Tidak Berhasil Diperbarui');
                }
                redirect('manager/vacancy');
            }
        }
    }

    public function destroy($id)
    {
        $vacancy = M_Vacancy::find($id);
        if($vacancy->created_by == $this->session->id) {
            if ($vacancy->submission->count() == 0) {
                $vacancy->delete();
                $this->session->set_flashdata('sukses', 'Artikel Berhasil Dihapus');
            }
        } else {
            $this->session->set_flashdata('gagal', 'Artikel Tidak Berhasil Dihapus');
        }
        redirect('manager/vacancy');
    }

    public function changeStatus($id)
    {
        $vacancy = M_Vacancy::find($id);
        if ($vacancy->created_by == $this->session->id) {
            if ($vacancy->status == 1) {
                $vacancy->status = 0;
            } else {
                $vacancy->status = 1;
            }
            $vacancy->save();
        }
        redirect('manager/vacancy');        
    }
}
