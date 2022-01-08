<?php

namespace App\Http\Controllers;

use App\Media;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPdfAdmin()
    {
        $Media = \App\Media::all();
        return view('admin.show_media')->with('Media',$Media);;
    }

    public function index()
    {
        $Media = \App\Media::all();
        return view('home')->with('Media',$Media);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.upload_media');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            "image" => 'mimes:jpeg,png,jpg,gif,svg',]);
        $data=new Media;

        if($request->file('image')){
            $file=$request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $request->image->move('storage/',$filename);
            $data->image=$filename;}
        $data->save();
        return redirect('/admin_home/show_media')->with(['success'=> __('admin.Media created successfuly')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit(Media $media)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Media $media)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy($media)
    {
        $media = Media::find($media);
        Storage::disk('public')->delete($media->image);
        $media->delete();
        return redirect('/admin_home/show_media')->with(['success'=> __('admin.Media Deleted successfuly')]);;
    }
}
