<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopicMail extends Model
{
    protected $table = 'topic_mails';

    protected $fillable = [
	       'user_id','topic_id','group_id','profile_id','emailid','mailkey',
	    ];
}
