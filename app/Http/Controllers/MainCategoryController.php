<?php

namespace App\Http\Controllers;

use App\Main_category;
use Illuminate\Http\Request;

class MainCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.main_categories');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Main_category  $main_category
     * @return \Illuminate\Http\Response
     */
    public function show(Main_category $main_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Main_category  $main_category
     * @return \Illuminate\Http\Response
     */
    public function edit(Main_category $main_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Main_category  $main_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Main_category $main_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Main_category  $main_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Main_category $main_category)
    {
        //
    }
}