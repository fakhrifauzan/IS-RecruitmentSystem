<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Capsule\Manager as DB;

class AjaxAPI extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

    public function getDataGender()
    {
        $data = M_User::select('gender', DB::raw('count(*) as total'))->whereIn('id', M_Submission::select('id_user')->get())->groupBy('gender')->get();
        // dd($series);
        $json = array(
            'labels' => $data->pluck('gender'),
            'series' => $data->pluck('total'),
        );
        echo json_encode($json);
    }
}
