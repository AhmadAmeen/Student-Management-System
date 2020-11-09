<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
  public $fillable = [
    'sender_id', 'rec_id', 'messages'
];
}
