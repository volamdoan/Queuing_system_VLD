<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'service';
    protected $fillable = [

        'service_code',
        'service_name',
        'service_content',
        'service_status',
        'service_min',
        'service_max',    
        'service_Prefix', 
        'service_Surfix', 
        

        
       
    ];
}
