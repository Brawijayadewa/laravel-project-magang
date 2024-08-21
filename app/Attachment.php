<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $table = 'attachment';

    protected $fillable = [
        'module',
        'module_id',
        'url',
        'created_by',
        'updated_by',
    ];

}
