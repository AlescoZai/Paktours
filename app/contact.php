<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $fillable = ['user_id','name','last_name','email','phone','subject','message'];
}
