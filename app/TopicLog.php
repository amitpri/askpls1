<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopicLog extends Model
{
    protected $fillable = [
	       'user_id','topic_id','group_id','topic_name','group_title', 
	    ];
}