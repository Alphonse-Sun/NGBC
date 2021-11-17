<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    //
    protected $table = 'template';
    protected $fillable = [
        'name',
        'pic',
        'client_type',
        'sort',
        'status',
        'template_name'
    ];
}
