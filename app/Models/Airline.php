<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    use HasFactory;
   protected $fillable=[
'Airlines_name','Airport_name'
    ];
    protected $gurded=[];
}
