<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GanttLink extends Model
{
    use HasFactory;

    protected $table = "gantt_links";
    public $primaryKey = "id";
    public $timestamps = false;
}
