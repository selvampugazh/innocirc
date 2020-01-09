<?php

namespace App\Models\History;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    protected $table = 'activity_log';

    protected $fillable = ['log_name', 'description'];
}
