<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestEquipment extends Model
{
    use HasFactory;

    protected $table = 'equipment_request';
    protected $guarded = [];
}
