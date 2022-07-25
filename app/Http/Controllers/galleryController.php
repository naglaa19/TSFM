<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class galleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('image');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $photo=$request->image;
        $file_extention=$photo->getClientOriginalName();
        // return $file_extention;
        $file_name=time().$file_extention;
        // return $file_name;
        $path='images/category';
        $photo->move($path,$file_name);
        // return 'okay';

        $image=Gallery::create([
            'name'=>$request->name,
            'image'=>$file_name,
            'notes'=>$request->notes,
            'date'=>$request->date,
            'location'=>$request->location,
            'type'=>$request->type,
            'cat_id'=>$request->cat

        ]);
        return redirect('create');
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
       Gallery::query();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      $result = Gallery::destroy($id);
    if($result==1)
    {
    echo 'succesful';
    }
    else if($result==0)
    {
        echo 'not found';
    }
    }
}
