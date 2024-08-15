<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesCallReport extends Model
{
    Protected $fillable = [
        'name',
        'school_name',
        'regency',
        'teacher_name',
        'phone',
        'audience',
        'image',
        'requirement',
    ];
          
}       
