<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Image;
use App\Photos;
use App\User;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    $photo = new Photos ();
    $photo->user_id = \Auth::user()->id;
    if($request->hasFile('img')){
        $file = $request->file('img');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move(public_path('images/users/'),$filename);
        $photo->user_imgs = $filename;
    }else{
        return $request;
        $photo->user_imgs='';
    }
    $photo->save();
     return (redirect()->back()->with('success','l\'image a été bien sauvegarder'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function dlt($phnom){
        $photos =  \DB::table('photos')->where('user_id', \Auth::user()->id)->where('user_imgs',$phnom)->delete();
        return redirect('home');
    }
}

