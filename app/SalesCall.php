<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesCall extends Model
{
    protected $table = "sales_call";
    
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
