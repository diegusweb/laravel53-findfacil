<?php

namespace App\Models\Api\v1;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
   public $fillable = ['title','description'];
}
