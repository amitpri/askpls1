<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Review extends Model
{
    public function topic()
    {

    	return $this->belongsTo('App\Topic', 'topic_id');

    }

    protected static function boot()
    {
        parent::boot();

         
        static::addGlobalScope('user_id', function (Builder $builder) {

        	$loggedinid = Auth::user()->id;
            $builder->where('reviews.user_id', '=', $loggedinid);

        });
    }    

}
