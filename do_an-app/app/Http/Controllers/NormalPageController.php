<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NormalPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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


    public function gio_hang(){
        $gio_hang = [];
        if(Session::has('gio_hang')){
            $gio_hang = Session::get('gio_hang');

            // echo '<pre>',print_r($gio_hang) ,'</pre>';
        }

        $tong_tien = 0;
        foreach($gio_hang as $sp){
            $tong_tien += $sp->so_luong * $sp->don_gia;
        }

        return view('trang_gio_hang')->with('allow_update_cart', true);
        // ->with('gio_hang', $gio_hang)
        // ->with('tong_tien', $tong_tien);
    }

    function thanh_toan(){
        return view('trang_thanh_toan')->with('allow_update_cart', false);
    }

    function thanh_toan_store(){

    }
}
