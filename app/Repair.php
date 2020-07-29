<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    //

    protected $casts = [
      'repair_type' => 'array'
    ];
}
