<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Capsule\Manager as DB;

class M_Vacancy extends Eloquent
{
    protected $table = 'vacancy';
    protected $primaryKey = 'id_vacancy';

    public $timestamps = true;
    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';

    protected $fillable = ['title', 'job_desc', 'qualifications', 'additional', 'location_id', 'type', 'created_by', 'status'];

    public function manager()
    {
        return $this->belongsTo('M_User', 'created_by', 'id');
    }

    public function submission()
    {
        return $this->hasMany('M_Submission', 'id_vacancy', 'id_vacancy');
    }

    public function location()
    {
        return $this->hasOne('M_Location', 'location_id', 'location_id');
    }


}