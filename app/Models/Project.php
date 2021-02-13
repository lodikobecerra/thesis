<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    use HasFactory;

    protected $table ='projects';

    protected $primaryKey = 'project_code';

    protected $attributes = [
        'project_client' => 'DPWH',
    ];

    protected $guarded = [];

}
