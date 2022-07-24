<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Image;
use App\Models\Type;
use Illuminate\Http\Request;

class imageController extends Controller
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
        // return Image::whereHas('type')->get();
        $type=Type::select()->get();
        $gallery=Gallery::select()->get();
        return view('image.image')->with('type',$type)->with('gallery',$gallery);
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
        $path='images/';
        $photo->move($path,$file_name);
        // return 'okay';

        $image=Image::create([
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
}
