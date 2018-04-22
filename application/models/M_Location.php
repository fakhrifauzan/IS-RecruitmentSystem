<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Capsule\Manager as DB;

class M_Location extends Eloquent
{
    protected $table = 'locations';
    protected $primaryKey = 'location_id';

    public $timestamps = false;
    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';

    protected $guarded = ['street_address', 'postal_code', 'city', 'state_province', 'country_id'];

    public function vacancy()
    {
        return $this->belongsTo('M_Vacancy', 'location_id', 'location_id');
    }


}