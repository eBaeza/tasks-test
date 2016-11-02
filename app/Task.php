<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';

    protected $fillable = [
        'resource_type_id', 'name', 'description','team_id', 'delivery_time','status', 'created_at', 'updated_at'
    ];
}
