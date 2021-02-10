<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GanttTask extends Model
{
    use HasFactory;

    protected $appends = ["open"];
 
    public function getOpenAttribute(){
        return true;
    }
}
