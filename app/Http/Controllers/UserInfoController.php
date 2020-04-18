<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserInfo;

class UserInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = UserInfo::paginate(5);
        return view('userinfo.index')->with('pagetitle','Welcome to our site')
                                     ->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userinfo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $arrData = $request->except("_token");
        $saveData = UserInfo::create($arrData);
        if($saveData)
        {
          return redirect('/userinfo')->with('status','Success!');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userInfoData = UserInfo::find($id);
        // dd($userInfoData);
        return view('userinfo.edit',['page_title'=>'Edit User Information','userinfodata'=>$userInfoData]);
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
        $arrData = $request->except(["_token",'_method']);
        $saveData = UserInfo::where('id',$id)->update($arrData);//UPDATE table SET yourfieldname= value WHERE pk=yourid
        if($saveData)
        {
            return redirect('/userinfo')->with('status','Success!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = UserInfo::find($id);
        $data->delete();

       return redirect('/userinfo')->with('status', 'Your data has been deleted Successfully');
    }
}
