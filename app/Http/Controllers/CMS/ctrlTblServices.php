<?php

namespace App\Http\Controllers\CMS;

use App\tblServices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\tblServicesAddReq;
use App\Http\Requests\tblServicesUpdReq;
use Illuminate\Support\Facades\File;



class ctrlTblServices extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rsServices = tblServices::orderBy('Position')->get();
        return view('CMS.AdminServices')->with('vServices',$rsServices);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(tblServicesAddReq $request)
    {
        if( $request->hasFile('_txtImgFileAdd')) {
            $file = $request->file('_txtImgFileAdd');
            $name = time().$file->getClientOriginalName();
            tblServices::create([
                'FileName' => time().$file->getClientOriginalName(),
                'Title' => $request->input('_txtTitleAdd'),
                'Description' => $request->input('_txtDescriptionAdd'),
                'Position' => $request->input('_intPositionAdd'),
                'ImgPosition' => $request->input('_txtImgPositionAdd'),
            ]);
            $file->move(public_path().'/storage/img/services', $name);
            echo "true";
        }
        else{
            echo "false";
        }
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
    public function update(tblServicesUpdReq $request)
    {
        if( $request->hasFile('_txtImgFileUpd')) {
            $file = $request->file('_txtImgFileUpd');
            $name = time().$file->getClientOriginalName();

            $tblServicesUpd = tblservices::find($request->input('_intUpdId'));
            $tblServicesUpd -> FileName = time().$file->getClientOriginalName();
            $tblServicesUpd -> Title = $request->input('_txtTitleUpd');
            $tblServicesUpd -> Description = $request->input('_txtDescriptionUpd');
            $tblServicesUpd -> Position = $request->input('_intPositionUpd');
            $tblServicesUpd -> ImgPosition = $request->input('_txtImgPositionUpd');
            $tblServicesUpd ->save();

            $file->move(public_path().'/storage/img/services/', $name);
            $oldImg = 'storage/img/services/'.$request['_txtOldFile'];

            if(File::exists($oldImg)){
                File::delete($oldImg);
            }
            return "true";
        }
        else{
            $tblServicesUpd = tblservices::find($request->input('_intUpdId'));
            $tblServicesUpd -> Title = $request->input('_txtTitleUpd');
            $tblServicesUpd -> Description = $request->input('_txtDescriptionUpd');
            $tblServicesUpd -> Position = $request->input('_intPositionUpd');
            $tblServicesUpd -> ImgPosition = $request->input('_txtImgPositionUpd');
            $tblServicesUpd ->save();
            return "true";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        tblservices::destroy($request->input('_intIdDel'));
        $oldImg = 'storage/img/services/'.$request['_txtFileNameDel'];

        if(File::exists($oldImg)){
            File::delete($oldImg);
        }
        return "true";
    }
}
