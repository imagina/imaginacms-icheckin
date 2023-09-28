<?php

namespace Modules\Icheckin\Entities;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'icheckin__jobs';

    protected $fillable = [
        'title',
        'status',
    ];
}
