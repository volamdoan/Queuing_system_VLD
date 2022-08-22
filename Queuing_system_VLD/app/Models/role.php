<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;
    protected $table = 'role';
    protected $fillable = [

        'role_name',
        'role_qty',
        'role_content',
        'role_status',
        'permissions',
        'created_at', 
        'updated_at', 
        

        
       
    ];
}
