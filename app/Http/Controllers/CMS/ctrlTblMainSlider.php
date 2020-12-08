<?php

namespace App\Http\Controllers\CMS;

use App\tblmainslider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\tblMainSliderReq;
use App\Http\Requests\tblMainSliderReqUpd;
use Illuminate\Support\Facades\File;

class ctrlTblMainSlider extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rsSlider = tblmainslider::orderBy('Position')->get();

        return view('CMS.AdminMain')->with('vSlider',$rsSlider);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(tblMainSliderReq $request)
    {
        if( $request->hasFile('_txtImgFileAdd')) {
            $file = $request->file('_txtImgFileAdd');
            $name = time().$file->getClientOriginalName();
            tblmainslider::create([
                'FileName' => time().$file->getClientOriginalName(),
                'Description' => $request->input('_txtDescriptionAdd'),
                'Position' => $request->input('_intPositionAdd')
            ]);
            $file->move(public_path().'/storage/img/slider', $name);
            echo "true";
        }
        else{
            echo "false";
        }
    }

    public function update(tblMainSliderReqUpd $request)
    {
        if( $request->hasFile('_txtImgFileUpd')) {
            $file = $request->file('_txtImgFileUpd');
            $name = time().$file->getClientOriginalName();

            $tblMainSliderUpd = tblmainslider::find($request->input('_intUpdId'));
            $tblMainSliderUpd -> FileName = time().$file->getClientOriginalName();
            $tblMainSliderUpd -> Description = $request->input('_txtDescriptionUpd');
            $tblMainSliderUpd -> Position = $request->input('_intPositionUpd');
            $tblMainSliderUpd ->save();

            $file->move(public_path().'/storage/img/slider/', $name);
            $oldImg = 'storage/img/slider/'.$request['_txtOldFile'];

            if(File::exists($oldImg)){
                File::delete($oldImg);
            }

            return "true";
        }
        else{
            $tblMainSliderUpd = tblmainslider::find($request->input('_intUpdId'));
            $tblMainSliderUpd -> Description = $request->input('_txtDescriptionUpd');
            $tblMainSliderUpd -> Position = $request->input('_intPositionUpd');
            $tblMainSliderUpd ->save();
            return "true";
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tblmainslider  $tblmainslider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        tblmainslider::destroy($request->input('id'));
        File::delete('storage/img/slider/'.$request['fname']);
        return "true";
    }
}
