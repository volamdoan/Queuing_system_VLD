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
        'number_name',
        'number_service',
        'number_status',
        'number_source',
        'created_at', 
        'updated_at', 
    ];
}
