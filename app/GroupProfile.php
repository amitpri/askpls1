<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class GroupProfile extends Model
{
    protected static function boot()
    {
        parent::boot();

         
        static::addGlobalScope('group_profiles.user_id', function (Builder $builder) {

        	$loggedinid = Auth::user()->id;
            $builder->where('group_profiles.user_id', '=', $loggedinid);

        });
    }
}
