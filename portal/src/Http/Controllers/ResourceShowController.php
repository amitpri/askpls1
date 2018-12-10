<?php

namespace Laravel\Nova\Http\Controllers;

use Auth;
use Laravel\Nova\Panel;
use Illuminate\Routing\Controller;
use Laravel\Nova\Http\Requests\ResourceDetailRequest;

use Illuminate\Support\Facades\DB;

class ResourceShowController extends Controller
{
    /**
     * Display the resource for administration.
     *
     * @param  \Laravel\Nova\Http\Requests\ResourceDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function handle(ResourceDetailRequest $request)
    {

        $var_resource =  $request->resource;
        $var_resourceId =  $request->resourceId;  

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

                    $resource = $request->newResourceWith(tap($request->findModelQuery(), function ($query) use ($request) {
                        $request->newResource()->detailQuery($request, $query);
                    })->firstOrFail());

                    $resource->authorizeToView($request);

                    return response()->json([
                        'panels' => $resource->availablePanels($request),
                        'resource' => $this->assignFieldsToPanels(
                            $request, $resource->serializeForDetail($request)
                        ),
                    ]);

                }

    }

 
    protected function assignFieldsToPanels(ResourceDetailRequest $request, array $resource)
    {
        foreach ($resource['fields'] as $field) {
            $field->panel = $field->panel ?? Panel::defaultNameFor($request->newResource());
        }

        return $resource;
    }
}
