<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;
    // protected $fillable=[
    //     'name','email','address','contact_number'
    // ];
    protected $guarded =[];
}
