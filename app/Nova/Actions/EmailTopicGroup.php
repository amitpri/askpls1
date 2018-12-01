<?php

namespace App\Nova\Actions;

use Illuminate\Bus\Queueable;
use Laravel\Nova\Actions\Action;
use Illuminate\Support\Collection;
use Laravel\Nova\Fields\ActionFields;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Http\Request;
use App\Mail\MailTopicGroup;
use App\Jobs\SendMail;

class EmailTopicGroup extends Action implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Perform the action on the given models.
     *
     * @param  \Laravel\Nova\Fields\ActionFields  $fields
     * @param  \Illuminate\Support\Collection  $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {
   //     $groupinput = $request->group;

   //     $topicid = $request->topicid;

    //    $loggedinid = Auth::user()->id;

    //    $groups = Group::
    //            where('user_id', '=' , $loggedinid)-> 
   //             where('name', '=' , "$groupinput")->
   //             first(['id']);

     //   $groupid = $groups->id;
         
   //     $job = new SendMail($groupid, $topicid);
        $job = new SendMail();

       
        $toemailid = "amitpri@gmail.com";
        $profileid = 1;
        $mailkey = str_random(50);  
        $topicname = "Hi";
        $username = "Amit";

       \Mail::to($toemailid)->queue(new MailTopicGroup($topicname,$username,$mailkey));
     //   $this->dispatch($job);
    }

    /**
     * Get the fields available on the action.
     *
     * @return array
     */
    public function fields()
    {
        return [];
    }
}
