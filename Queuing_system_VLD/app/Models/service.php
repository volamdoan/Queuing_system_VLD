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

        'service_Code',
        'service_Name',
        'service_Content',
        'service_Status',
        'service_Min',
        'service_Max',    
        'service_Prefix', 
        'service_Surfix', 
        

        
       
    ];
}
