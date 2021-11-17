<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityApply extends Model
{
    //
    protected $table = 'activities_apply';

    protected $fillable = [
        'activity_id',
        'member_id',
        'status',
        'fail_reason'
    ];

    public function activity()
    {
        return $this->hasOne('App\\Models\\Activity', 'id', 'activity_id');
    }

    public function member()
    {
        return $this->hasOne('App\\Models\\Member', 'id', 'member_id');

    }
}
