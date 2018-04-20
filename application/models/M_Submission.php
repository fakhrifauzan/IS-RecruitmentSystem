<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Capsule\Manager as DB;

class M_Submission extends Eloquent
{
    protected $table = 'submission';
    protected $primaryKey = 'id_submission';

    public $timestamps = true;
    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';

    protected $fillable = ['id_user', 'id_vacancy', 'resume', 'verified', 'website', 'linkedin', 'github', 'facebook', 'twitter', 'recommendation', 'in_review', 'interview', 'offer'];

    public function applicants()
    {
        return $this->belongsTo('M_User', 'id_user', 'id');
    }

    public function vacancy()
    {
        return $this->belongsTo('M_Vacancy', 'id_vacancy', 'id_vacancy');
    }

}