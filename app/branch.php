<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class branch extends Model
{
    public $fillable = array('bname', 'bddress', 'brevenue');
}
