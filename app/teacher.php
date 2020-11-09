<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
  public $fillable = array('tname', 'classes', 'courses', 'iscoordinator', 'disp_coordinator', 'phno', 'email');

}
