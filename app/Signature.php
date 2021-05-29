<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    protected $fillable = [
    	'name',
    	'date',
    	'image_name',
    	'image_path',
     ];
}
