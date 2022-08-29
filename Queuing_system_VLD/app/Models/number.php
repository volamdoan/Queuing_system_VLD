<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class number extends Model
{
    use HasFactory;
    protected $table = 'number';
    protected $fillable = [

        'number',
        'number_Name',
        'number_Service',
        'number_Status',
        'number_Source',
        'created_at', 
        'updated_at', 
    ];
}
