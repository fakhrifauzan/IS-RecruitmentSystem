<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submission extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        // 
	}

	public function create($id_vacancy)
    {
        $data['sidebar'] = 'public/sidebar';
        $data['content'] = 'public/submision_create';
        $this->load->view('layouts/app', $data);
    }

    public function store()
    {
        if (!$this->input->post()) {
            redirect('index');
        } else {
            //PROFILE
            $this->form_validation->set_rules('username', 'Nama Pengguna', 'required');
            $this->form_validation->set_rules('password', 'Kata Sandi', 'required');
            $this->form_validation->set_rules('first_name', 'Nama Depan', 'required');
            $this->form_validation->set_rules('last_name', 'Nama Belakang', 'required');
            $this->form_validation->set_rules('location', 'Lokasi', 'required');
            $this->form_validation->set_rules('email', 'Surat Elektronik', 'required');
            $this->form_validation->set_rules('phone', 'Nomor Telepon', 'required');

            //SUBMISSION
            $this->form_validation->set_rules('id_vacancy', 'ID Lowongan', 'required');
            $this->form_validation->set_rules('resume', 'Berkas', 'required');
            $this->form_validation->set_rules('website', 'Situs Web', '');
            $this->form_validation->set_rules('linkedin', 'Profil LinkedIn', '');
            $this->form_validation->set_rules('github', 'Profil Github', '');
            $this->form_validation->set_rules('facebook', 'Facebook', '');
            $this->form_validation->set_rules('twitter', 'Twiter', '');

            //RECOMMENDER SYSTEM
            $this->form_validation->set_rules('energi', 'Profil LinkedIn', 'required');
            $this->form_validation->set_rules('informasi', 'Profil Github', 'required');
            $this->form_validation->set_rules('keputusan', 'Facebook', 'required');
            $this->form_validation->set_rules('hidup', 'Twiter', 'required');

            if ($this->form_validation->run() == FALSE) {
                redirect('index');
            } else {
                $user = M_User::create([
                    'username' => $this->input->post('username'),
                    'password' => md5($this->input->post('password')),
                    'first_name' => strtoupper($this->input->post('first_name')),
                    'last_name' => empty($this->input->post('last_name')) ? NULL : strtoupper($this->input->post('last_name')),
                    'location' => $this->input->post('location'),
                    'email' => $this->input->post('email'),
                    'phone' => $this->input->post('phone'),
                    'role' => 0,
                ]);

                if (empty($_FILES['resume']) || !isset($_FILES['resume'])) {
                    $config['upload_path']      = './assets/resume/';
                    $config['allowed_types']    = 'rar|zip|pdf|docx|doc';
                    $config['max_size']         = 4096;
                    $config['file_name']        = '['.$this->input->post('id_vacancy').']_RESUME_'.$user->id;
                    $config['overwrite']        = TRUE;

                    $this->load->library('upload', $config);

                    if (!$this->upload->do_upload('resume')) {
                        dd($error);
                    }
                }

                $questionnaire = array(
                    'energi' => $this->input->post('energi'), 
                    'informasi' => $this->input->post('informasi'), 
                    'keputusan' => $this->input->post('keputusan'), 
                    'hidup' => $this->input->post('hidup'), 
                );

                $submission = M_Submission::create([
                    'id_user' => $user->id,
                    'id_vacancy' => $this->input->post('id_vacancy'),
                    'resume' => '['.$this->input->post('id_vacancy').']_RESUME_'.$user->id.$this->upload->data('file_ext'),
                    'verified' => 0,
                    'website' => empty($this->input->post('website')) ? NULL : $this->input->post('website'),
                    'linkedin' => empty($this->input->post('linkedin')) ? NULL : $this->input->post('linkedin'),
                    'github' => empty($this->input->post('github')) ? NULL : $this->input->post('github'),
                    'facebook' => empty($this->input->post('facebook')) ? NULL : $this->input->post('facebook'),
                    'twitter' => empty($this->input->post('website')) ? NULL : $this->input->post('twitter'),
                    'recommendation' => $this->getRecommendation($questionnaire),
                    'in_review' => 0,
                    'interview' => 0,
                    'offer' => 0,
                ]);

                if($user && $submission) {
                    $this->session->set_flashdata('sukses', 'Submission Berhasil Disimpan');
                } else {
                    $submission->delete();
                    $user->delete();
                    $this->session->set_flashdata('gagal', 'Submission Tidak Berhasil Disimpan');
                }
                redirect('index');
            }
        }
    }

    public function show($id)
    {
        // 
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

    public function getRecommendation($data)
    {
        $satu = $data['energi'];
        $dua = $data['informasi'];
        $tiga = $data['keputusan'];
        $empat = $data['hidup'];

        if ($satu == 'I') {
            if ($dua == 'S') {
                if ($empat == 'J') {
                    if ($tiga == 'T') {
                        return 'Si Pengamat';
                    } elseif ($tiga == 'F') {
                        return 'Si Pelindung';
                    }
                } elseif($empat == 'P') {
                    if ($tiga == 'T') {
                        return 'Si Terpercaya';
                    } elseif ($tiga == 'F') {
                        return 'Si Seniman';
                    }
                }
            } elseif ($dua == 'N') {
                if ($tiga == 'F') {
                    if ($empat == 'J') {
                        return 'Si Konselor';
                    } elseif ($empat == 'P') {
                        return 'Si Pemimpi';
                    }
                } elseif ($tiga == 'T') {
                    if ($empat == 'J') {
                        return 'Si Strategis';
                    } elseif ($empat == 'P') {
                        return 'Si Perancang';
                    }
                }
            }
        } elseif ($satu == 'E') {
            if ($dua == 'S') {
                if ($empat == 'J') {
                    if ($tiga == 'T') {
                        return 'Si Supervisor';
                    } elseif($tiga == 'F') {
                        return 'Si Siaga';
                    }
                } elseif ($empat == 'P') {
                    if ($tiga == 'T') {
                        return 'Si Promotor';
                    } elseif($tiga == 'F') {
                        return 'Si Performer';
                    }
                }
            } elseif ($dua == 'N') {
                if ($tiga == 'F') {
                    if ($empat == 'J') {
                        return 'Si Pengajar';
                    } elseif($empat == 'P') {
                        return 'Si Juara';
                    }
                } elseif($tiga == 'T') {
                    if ($empat == 'J') {
                        return 'Si Maverick';
                    } elseif($empat == 'P') {
                        return 'Si Pencipta';
                    }
                }
            }
        }
        return 'Tidak Ada';
    }
}