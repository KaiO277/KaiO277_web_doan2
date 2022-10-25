<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPhongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        db_connect();
        $sql = 'SELECT * FROM phong';
        $result = db_get_list($sql);
        db_disconnect();
        return view('Admin.AdminPhong',['result'=>$result]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.AddRoom');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->has('txtImage')){
            $file = $request->txtImage;
            $ext = $request->txtImage->extension();
            $file_name = time().'-product'.'.'.$ext;
            $file->move(public_path('uploads'), $file_name);
        }
        $request->merge(['image'=>$file_name]);
        db_connect();
        $sql = "INSERT INTO phong(sophong, tenkhachsan, loaiphong, giaphong, diachi, sodienthoai, image) value(:sophong, :tenkhachsan, :loaiphong, :giaphong, :diachi, :sodienthoai, :image)";
        $params = [ 
            'sophong' =>2,
            'tenkhachsan'=>$request->txtTenKS, 
            'loaiphong'=>$request->txtLoaiPhong, 
            'giaphong'=>$request->txtGiaPhong, 
            'diachi'=>$request->txtDiachi , 
            'sodienthoai'=>$request->txtSoDT, 
            'image'=>$file_name,
        ];
        db_execute($sql, $params);
        db_connect();
        return view('Admin.AddRoom');
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
