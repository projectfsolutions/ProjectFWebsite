<?php

namespace App\Http\Controllers\HomeWebsite;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\tblmainslider;
use App\tblServices;

class ctrlHomePage extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rsSlider = tblmainslider::orderBy('Position', 'ASC')->get();
        $rsServices = tblServices::orderBy('Position','ASC')->get();

        $data = [
            'rsSlider' => $rsSlider,
            'rsServices' => $rsServices
        ];

        return view('HomePage')->with($data);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
}
