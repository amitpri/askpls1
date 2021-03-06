<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\User;
use App\ShowTopic;
use App\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class TopicController extends Controller
{
    public function index()
    {

        return view('topics');
   
    }

    public function default()
    {

  //      $topics = ShowTopic::
      //          where('published', '=' , 1)->
         //       where('status', '=' , 1)->
     //           where('type', '=' , 'public')->
    //            orderBy('updated_at','desc')->
    //            take(10)->
      //          get(['id','user_id','topic_name' ,'details'   ]);

    //    $topics1 = ShowTopic::where('type', '=' , 'public')->
      //                  orderBy('updated_at','desc')->take(10)->find(10)->get();

        $topics = DB::select('SELECT  a.`id`, a.`user_id`,  a.`topic_name`,  a.`details` , b.`name`
                                        FROM `topics` a ,  `users` b 
                                        WHERE a.`user_id` = b.`id`
                                        AND a.`type` = "public"
                                        ORDER BY a.`updated_at` DESC
                                        limit 10');
                                                                                                                
 

        return $topics;
   
    }

    public function getmore(Request $request)
    {

        $row_count = $request->row_count;

        $topics = DB::select('SELECT  a.`id`, a.`user_id`,  a.`topic_name`,  a.`details` , b.`name`
                                        FROM `topics` a ,  `users` b 
                                        WHERE a.`user_id` = b.`id`
                                        AND a.`type` = "public"
                                        ORDER BY a.`updated_at` DESC
                                        limit :limit offset :offset'  
                                                        , [ 'limit' => $limit , 'offset' => $offset]);
 

        return $topics;
   
    }

    public function filtered(Request $request)
    {

        $topicsinput = $request->topics;
        
        $topics = ShowTopic::
                where('published', '=' , 1)
                ->where('status', '=' , 1)->where('type', '=' , 'public')
                ->where('topic', 'like' , "%$topicsinput%")
                ->take(10)
                ->get(['id','topic','details']);
                  
        return $topics;
   
    } 

    public function show($id)
    {
 
         $topics = DB::select('SELECT  a.`id`, a.`user_id`,  a.`topic_name`,  a.`details` , b.`name`, a.`created_at`
                                        FROM `topics` a ,  `users` b 
                                        WHERE a.`id` = :id
                                        AND a.`user_id` = b.`id`
                                        AND a.`type` = "public" ', ['id' => $id]);
        
        
        foreach ($topics as $topic) {
        
            $id = $topic->id;
            $user_id = $topic->user_id;
            $topic_name = $topic->topic_name;
            $details = $topic->details;
            $username = $topic->name;
            $created_at = $topic->created_at; 

            
        }
       
        return view('showtopic',compact('id', 'user_id', 'username' , 'created_at' , 'topic_name', 'details'));
   
    } 

    public function showdetails(Request $request)
    {
 
        $id = $request->id; 

        $topic = ShowTopic::where('id','=',$id)->where('type','=','public')->first(['id','topic','details','type']);
        
        return $topic;
    }

    public function messages(Request $request)
    {   
        $inpid = $request->id; 

        $topic = Feedback::where('topic_id','=',$inpid)->get(['id','topic','review','created_at']); 

        return $topic;
   
    } 

    public function postfeedback(Request $request)
    {   
        $inptopicid = $request->topicid;
        $inptopicname = $request->topicname;
        $inpfeedback = $request->feedback;

        $topic = ShowTopic::where('id','=',$inptopicid)->where('topic','=',$inptopicname)->first(['id','user_id']); 

        $userid = $topic->user_id;

        $postfeedback = Feedback::create(
                [   
                    'user_id' => $userid,
                    'topic_id' => $inptopicid,
                    'topic' => $inptopicname,
                    'review' => $inpfeedback,
                    'published' => 1,
                    'status' => 1,                                 
                ]);

        $publishdata = [

            'event' => "NewFeedback_$userid",
            'data' => [
                'topic_id' => $inptopicid,
                'topic' => $inptopicname,
                'review' => $inpfeedback,
            ]
            
        ]; 

        Redis::publish('channel_feedback',json_encode($publishdata));

        return $postfeedback;
   
    } 
}
