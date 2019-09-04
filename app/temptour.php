<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class temptour extends Model
{
    protected $fillable = ['name','days','Details','NRP','departure','user_id'];
}
