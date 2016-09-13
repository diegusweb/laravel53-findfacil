<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name','pref','cod'];
}
