<?php

namespace App\Http\Controllers\Admin\Brand;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //获取总条数
        $total=DB::table('brand')->count();
        //获取关键字
        // var_dump($request);exit;
        $kw = $request->input('keywords');
        // var_dump($k);exit;
        //获取数据库中的数据
        $data = DB::table('brand')->where('brand_name','like','%'.$kw.'%')->paginate(10);
        // var_dump($data);exit;
        $arr = array('发布','下架');
        // var_dump($data);exit;
        foreach ($data as $key => $value) {
            // var_dump($value);exit;
            $value->status = $arr[$value->status];
            // var_dump($value);exit;

        }
        // var_dump($data);exit;

        //导入品牌列表
        return view('Admin.Brand.index',['data'=>$data,'total'=>$total,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //导入品牌添加页
        return view('Admin.Brand.add');
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
        //导入品牌修改页
        return view('Admin.Brand.edit');
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
