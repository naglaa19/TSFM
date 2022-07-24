<?php

namespace App\Http\Controllers;

// use App\Http\Requests\Image;
use App\Models\Gallery;
use App\Models\Image;
use App\Models\Type;
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
        $gallery=Gallery::select()->get();
        return view('category.CatDashboard',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('category.createGallery');

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
        // return $request;

        $photo=$request->alboum_cover;
        $file_extention=$photo->getClientOriginalName();
        // return $file_extention;
        $file_name=time().$file_extention;
        // return $file_name;
        $path='images/category';
        $photo->move($path,$file_name);
        // return 'okay';

        $image=Gallery::create([
            'title'=>$request->title,
            'alboum_cover'=>$file_name,
            'description'=>$request->description

        ]);
        return redirect('GalleryDashboard')->with('success', 'Create Successfully');
        // return redirect('createCat');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return $id;
        // Image
        $imgs=Image::where('cat_id',$id)->get();
        // $type=Type::select('id','name')->where('id',$imgs->type)->get();
        return view('image.ImageDashboard',compact('imgs'));

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
        // return $id;
        $gallery=Gallery::find($id);
        // return $gallery;
        return view('category.editGallery',compact('gallery'));

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
        if(!$request->alboum_cover){
            $request->alboum_cover=$request->old_cover;
        }

        $photo=$request->alboum_cover;
        $file_extention=$photo->getClientOriginalName();
        // return $file_extention;
        $file_name=time().$file_extention;
        // return $file_name;
        $path='images/category';
        $photo->move($path,$file_name);


        Gallery::find($id)->update([
            'title'=>$request->title,
            'alboum_cover'=>$file_name,
            'description'=>$request->description

        ]);
        return redirect('GalleryDashboard')->with('success', 'Updated Successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return $id;
        Gallery::find($id)->delete();
        return redirect('GalleryDashboard')->with('success', 'Deleted Successfully');

    }
}
