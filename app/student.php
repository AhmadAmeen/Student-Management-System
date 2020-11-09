<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    public $fillable = array('simg', 's_school_id', 's_bform_id',
     'sname', 'fname', 'class', 'phone', 'email');
}
