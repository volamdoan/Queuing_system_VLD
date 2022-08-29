<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;
    protected $table = 'role';
    protected $fillable = [

        'role_Name',
        'role_Service',
        'role_Content',
        'role_Status',
        'Permissions',
        'created_at', 
        'updated_at', 
        

        
       
    ];
}
