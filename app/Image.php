<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /** @var array */
    protected $fillable = ['created_by', 'description', 'url'];
}
