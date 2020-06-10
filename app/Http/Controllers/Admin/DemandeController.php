<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models;
use App\User;


class DemandeController extends Controller
{
    public function demande(){
        $mdls = Models::where('is_model',NULL)->get();
        $users = User::where('is_model',NULL)->where('is_admin',NULL)->get();
        $models = User::where('is_admin',NULL)->where('is_model',1)->get();
        $admin = User::where('is_model',NULL)->where('is_admin',1)->get();
        return view ('adminHome')->with('models',$mdls)->with('users',$users)->with('admin',$admin)->with('mdl',$models);   
    }
    public function demandeDelete($id){
        $mdls = Models::findOrFail($id);
        $mdls->delete();
        return redirect('admin/home')->with('deletemdls',$mdls->nom);
    }
    public function demandeUpdate($id){
        $mdls = Models::findOrFail($id)->where('id',$id)->update(['is_model'=> 1]);
        $users = (new User)
        ->setTable('models')
        ->find($id)
        ->replicate()
        ->setTable('users')
        ->save();
        $mdls = Models::findOrFail($id)->where('id',$id)->delete();
        return redirect('admin/home');
    }
}
