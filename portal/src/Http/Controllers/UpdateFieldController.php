<?php

namespace Laravel\Nova\Http\Controllers;

use Auth;
use Illuminate\Routing\Controller;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Http\Requests\ResourceDetailRequest;

use Illuminate\Support\Facades\DB;


class UpdateFieldController extends Controller
{
 
    public function index(NovaRequest $request, ResourceDetailRequest $request1)
    {
        
        $var_resource =  $request1->resource;
        $var_resourceId =  $request1->resourceId;  

        $db_resource = DB::table($var_resource)->where('id', $var_resourceId)->first(); 

        $flg_set_id = 0;

        if ( $var_resource === 'users'){

            $db_user_id =  $db_resource->id;     

        }

        if ( $var_resource != 'users'){

            $db_user_id =  $db_resource->user_id;       

        }

        $loggedinid = Auth::user()->id;

        if( $db_user_id === $loggedinid){
            $resource = $request->newResourceWith($request->findModelOrFail()); 

            $resource->authorizeToUpdate($request);

            return response()->json(
                $resource
                    ->updateFields($request)
                    ->values()
                    ->all()
            );
        }
    }
}
