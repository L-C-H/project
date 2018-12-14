<?php

namespace App\Http\Controllers\Admin\Advertisement;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //获取总条数
        $total=DB::table('advertisement')->count();
        //获取关键字
        // var_dump($request);exit;
        $k = $request->input('keywords');
        // var_dump($k);exit;
        //获取数据库的数据
        $data = DB::table('advertisement')->where('name','like','%'.$k.'%')->paginate(2);
        // var_dump($data);exit;
        $arr = array('发布','下架');
        // var_dump($data);exit;
        foreach ($data as $key => $value) {
            // var_dump($value);exit;
            $value->status = $arr[$value->status];
            // var_dump($value);exit;

        }
        // var_dump($data);exit;

        //引入广告列表页
        return view('Admin.Advertisement.index',['data'=>$data,'total'=>$total,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //引入广告添加页
        return view('Admin.Advertisement.add');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         //引入广告修改页
        return view('Admin.Advertisement.edit');
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
