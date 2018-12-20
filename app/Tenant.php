<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
   
   protected $fillable = [
        'user_id', 'workspace', 'company','city', 'url' , 'emailid', 'status' , 'code'
    ];
}
