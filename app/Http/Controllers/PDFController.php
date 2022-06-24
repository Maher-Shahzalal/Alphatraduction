<?php

namespace App\Http\Controllers;

use App\Http\Requests\PDFRequest;
use App\PDF;
use App\Services\PDFService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPdfAdmin()
    {
        $pdf = \App\PDF::all();
        return view('admin.show_pdf')->with('PDF',$pdf);
    }

    public function index()
    {
        $pdf = \App\PDF::all();
        return view('present_pdf')->with('PDF',$pdf);
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.upload_pdf');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = $this->getRules();
        $messages = $this->getMessages();
        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        $data=new PDF;
          if($request->file('file')){
               $file=$request->file('file');
                 $filename = time().'.'.$file->getClientOriginalExtension();
             $request->file->move('storage/',$filename);
        $data->pdf= $filename;}
        $data->pdf=$filename;
        $data->save();
        return redirect("/admin_home/show_pdf")->with(['success'=> __('admin.PDF-success')]);
    }

protected function getRules()
{
    $rules =[
        'file'=>'required|mimes:pdf|max:10000',
    ];
    return $rules;
}

protected function getMessages()
{
    $messages =[
        'file.required'=> __('admin.PDF file is required'),
    ];
    return $messages;
}

    /**
     * Display the specified resource.
     *
     * @param  \App\PDF  $pDF
     * @return \Illuminate\Http\Response
     */
    public function show(PDF $pDF)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PDF  $pDF
     * @return \Illuminate\Http\Response
     */
    public function edit(PDF $pDF)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PDF  $pDF
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PDF $pDF)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PDF  $pDF
     * @return \Illuminate\Http\Response
     */
    public function destroy($pDF)
    {
     $pdf = PDF::find($pDF);
        Storage::disk('public')->delete($pdf->pdf);
     $pdf->delete();
     return redirect("/admin_home/show_pdf")->with(['success'=> __('admin.PDF Deleted successfuly')]);

    }
}
