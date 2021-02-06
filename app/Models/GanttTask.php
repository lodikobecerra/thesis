<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GanttTask extends Model
{
    use HasFactory;

    protected $table = "gantt_tasks";
    public $primaryKey = "id";
    public $timestamps = false;
}
