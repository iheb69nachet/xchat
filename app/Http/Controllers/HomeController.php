<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models;
use DB;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $modelss = User::where('is_admin',NULL)->where('is_model',1)->get()->toArray();
        
        $models=array();
        foreach ($modelss as $model){
         
            $picss=DB::table('photos')->select('user_imgs')->where('user_id',$model['id'])->get()->toArray();
            foreach($picss as $pics){
                array_push($model,$pics);
                
            }
            array_push($models,$model);
        }
    
    
  
    //    var_dump($models[0][0]);
    //    die();   
       
        return view('home',compact('models'));
    }
    public function adminHome()
    {
        return view('adminHome');
    }
    
}
