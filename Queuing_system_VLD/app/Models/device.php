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
        'device_id',
        'device_Code',
        'device_Category',
        'device_Name',
        'device_Username',
        'device_Password',
        'device_Status',
        'device_Conection',
        'device_Title',    
        
    ];
}
