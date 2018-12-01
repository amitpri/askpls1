<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index()
    {
 
        return view('index');

    }

    public function howitworks()
    {
 
    	return view('howitworks');

    }

    public function enterprises()
    {
 

    	return view('enterprises');

    }

    public function customers()
    {
 

    	return view('customers');

    }

	public function product()
    {
 

    	return view('product');

    }

    public function engineering()
    {
 

    	return view('engineering');

    }

    public function it()
    {
 

    	return view('it');

    }

    public function customersupport()
    {
 

    	return view('customersupport');

    }

    public function sales()
    {
 

    	return view('sales');

    }

    public function marketing()
    {
 

    	return view('marketing');

    }

    public function humanresources()
    {
 

    	return view('humanresources');

    }  
    
    public function cxo()
    {
 

    	return view('cxo');

    }  

    public function prices()
    {
 

    	return view('prices');

    }  

    public function faqs()
    {
 

    	return view('faqs');

    }  

    public function contact()
    {
 

    	return view('contact');

    }   
}
