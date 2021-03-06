<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Tenant;
use App\TenantUser;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function workspace()
    {
        return view('workspace');
    }

    public function workspaceget(Request $request)
    {
        $name = $request->workspace;  
         
        $workspaces = Tenant::where('workspace', 'like' , "%$name%")->get(['id','workspace']);
    
        return $workspaces;  
    }

    public function workspacejoin(Request $request)
    {

        $workspace = $request->workspace; 
        $id = $request->id; 

        return view('workspacejoin', compact('workspace', 'id'));

    }

    public function workspacejoined(Request $request)
    {
        $workspace = $request->workspace; 
        $id = $request->id; 
        $code = $request->code;  

        $loggedinid = Auth::user()->id; 

        $tenantExists = Tenant::where('id','=',$id)
                    ->where('workspace','=',$workspace)
                    ->where('code','=',$code)
                    ->where('status','=', 1)
                    ->first(['id','user_id'  ]); 

        if( isset($tenantExists->id)  ){

            $newtenantuser = TenantUser::create(
                [   'user_id' => $loggedinid, 
                     'tenant_id' => $id,
                    'admin' =>  1, 
                    'status' => 1,
                ]);

            return 1;  

        }else{

            return 0; 
        }
      
    }

    public function workspacecreate(Request $request)
    {
        $workspace = $request->name; 
        return view('workspacecreate', compact('workspace'));
        
    }

    public function workspacecreated(Request $request)
    {
        $workspace = $request->workspace; 
        $company = $request->company; 
        $city = $request->city; 
        $url = "https://askpls.com/" . $workspace ;
        $code = mt_rand(100000, 999999);

        $loggedinid = Auth::user()->id; 

        $newtenant = Tenant::create(
                [   'user_id' => $loggedinid, 
                    'workspace' =>  $workspace, 
                    'company' =>  $company, 
                    'city' => $city,
                    'url' => $url, 
                    'code' => $code,
                    'status' => '1', 
                ]); 

        $tenant_id = $newtenant->id;

        $newtenantuser = TenantUser::create(
                [   'user_id' => $loggedinid, 
                     'tenant_id' => $tenant_id,
                    'admin' =>  1, 
                    'status' => 1,
                ]); 
         
        return $newtenant; 
        
    }
}
