<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesCall extends Model
{
    protected $table = "sales_call";
    
    protected $fillable = [
        'name',
        'school_name',
        'city',
        'teacher_name',
        'phone',
        'audience',
        'requirement',
        'created_by',
        'updated_by',
    ];

    public static $table_name = "sales_call";

    public static $rules = [
        'name' => 'required|max:256',
        'school_name' => 'required|max:256',
        'city' => 'required|max:256',
        'teacher_name' => 'required|max:256',
        'phone' => 'required|max:15',
        'audience' => 'required|numeric',
        'requirement' => 'required|max:256',
    ];
          
}       
