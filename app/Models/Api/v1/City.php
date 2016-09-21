<?php

namespace App\Models\Api\v1;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name','pref','cod'];
}
