<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Tenant;

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
}
