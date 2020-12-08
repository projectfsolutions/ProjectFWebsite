<?php

namespace App\Http\Controllers\CMS;

use App\tblabout;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\tblAboutReq;

class ctrlTblAbout extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    CONST ABOUT_ID = 1;
    public function index()
    {
//        $mission_text = Mission::all()->first();
//        $vision_text = Vision::all()->first();
//        $data = [
//            'about_text' => $about_text,
//            'mission' => $mission_text,
//            'vision' => $vision_text
//        ];
        $rs = tblabout::all();
        return view('CMS.AdminAbout')->with('AdminAbout',$rs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'Test';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(tblAboutReq $request)
    {
//        return $request->input('form.txtAbout');
//         return response()->json([
//            'message' => 'test success'
//        ],422);

//        $data = $request->input('data');
//        $base64 = base64_decode($data);
//        $js = json_decode($data);

//        DB::table('tblabouts')->insert(
//            ['AboutContent' => $js->_txtAbout]
//        );
        $find = ['id' => self::ABOUT_ID];
        $array = ['About' => $request->input('form.txtAbout'),
                'Vision' => $request->input('form.txtVision'),
                'Mission' => $request->input('form.txtMission')];
        tblAbout::updateOrCreate($find,$array);
        return "Saved Successful";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tblabout  $tblabout
     * @return \Illuminate\Http\Response
     */
    public function show(tblabout $tblabout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tblabout  $tblabout
     * @return \Illuminate\Http\Response
     */
    public function edit(tblabout $tblabout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tblabout  $tblabout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tblabout $tblabout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tblabout  $tblabout
     * @return \Illuminate\Http\Response
     */
    public function destroy(tblabout $tblabout)
    {
        //
    }
}
