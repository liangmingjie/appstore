<?php

namespace App\Http\Controllers\AppCenter;

use Auth;
use App\Developer;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AppManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //应用管理中心
        if(!Auth::check())
        {
            //未登录 要登录
            return view('auth.login');
        }

        $developer = Developer::find(['user_id'=>Auth::user()->id]);
        if(empty($developer))
        {
            //不是开发者 注册开发者
            return view('developer.register');
        }

        //获取应用信息
        //return view('appcenter.manage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
