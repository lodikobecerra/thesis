<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table ='teams';

    protected $primaryKey = 'employee_num';

    protected $guarded = [];


    public function position()
    {
       return $this->belongsTo(Position::class);

       //oneToMany
     
       //hasOne -> One to One

       
    }
    





}
