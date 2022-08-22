<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class device extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'device';
    protected $fillable = [

        'device_code',
        'device_category',
        'device_name',
        'device_username',
        'device_id',
        'device_password',
        'device_status',
        'device_conection',
        'device_title',    
        

        
       
    ];
}
