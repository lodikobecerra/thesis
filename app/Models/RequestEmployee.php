<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestEmployee extends Model
{
    use HasFactory;

    protected $table = 'employee_request';
    
    protected $guarded = [];
}
