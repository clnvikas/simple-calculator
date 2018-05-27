<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use URL;
use Redirect;

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

     
    //////////////////////////////////////////////////////////////////
    public function calculator()
    {    //echo "a"; exit;
         return view('register.calculator');

        
    }
    
   public function operation(Request $data)
    {    

        $dataall=$data->all();
    //print_r($dataall); exit;
    if($dataall['cal'] == "add") {
        $add = $dataall['first_integer'] + $dataall['second_integer'];
        //echo $add; exit;
        return view('register.add')->with("re",$add)->with("data1",$dataall);
    } else if($dataall['cal'] == "sub") 
    {
         return view('register.subtract')->with("data1",$dataall);

    } else if($dataall['cal'] == "multiply") 
    {
      return view('register.multiply')->with("data1",$dataall);

    } else if($dataall['cal'] == "divide")
    {

     return view('register.divide')->with("data1",$dataall);
    }
////////////////////////////////////////////////////////////////////
     
    
}

}


