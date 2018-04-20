<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Capsule\Manager as DB;

class M_User extends Eloquent
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    // public $timestamps = false;
    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';

    protected $fillable = ['username', 'password', 'first_name', 'last_name', 'location', 'email', 'phone', 'role'];

    public function submission()
    {
        return $this->hasOne('M_Submission', 'id_user', 'id');
    }
}