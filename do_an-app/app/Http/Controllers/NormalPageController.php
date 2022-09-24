<?php

namespace App\Http\Controllers;



use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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


    public function gio_hang()
    {
        $gio_hang = [];
        if (Session::has('gio_hang')) {
            $gio_hang = Session::get('gio_hang');

            // echo '<pre>',print_r($gio_hang) ,'</pre>';
        }

        $tong_tien = 0;
        foreach ($gio_hang as $sp) {
            $tong_tien += $sp->so_luong * $sp->don_gia;
        }

        return view('trang_gio_hang')->with('allow_update_cart', true);
        // ->with('gio_hang', $gio_hang)
        // ->with('tong_tien', $tong_tien);
    }

    function thanh_toan()
    {
        return view('trang_thanh_toan')->with('allow_update_cart', false);
    }

    function thanh_toan_store(Request $request)
    {
        $gio_hang = [];
        if (Session::has('gio_hang')) {
            $gio_hang = Session::get('gio_hang');
        }

        if (count($gio_hang) > 0) {
            $ho_ten = $request->get('ho_ten');
            $email = $request->get('email');
            $dien_thoai = $request->get('dien_thoai');
            $dia_chi = $request->get('dia_chi');
            $trang_thai = 2;
            $tong_tien = 0;
            $ngay_dat = date("Y-m-d H:i:s");

            $tong_tien = 0;
            foreach ($gio_hang as $sp) {
                $tong_tien += $sp->so_luong * $sp->don_gia;
            }

            DB::transaction(function () use ($ho_ten, $email, $dien_thoai, $dia_chi, $trang_thai, $tong_tien, $ngay_dat, $gio_hang ) {
                $id_don_hang = DB::table('sb_don_hang')
                    ->insertGetId(
                        [
                            "ho_ten_nguoi_nhan" => $ho_ten,
                            "email_nguoi_nhan" => $email,
                            "sdt_nguoi_nhan" => $dien_thoai,
                            "dia_chi_nguoi_nhan" => $dia_chi,
                            "trang_thai" => $trang_thai,
                            "tong_tien" => $tong_tien,
                            "ngay_dat" => $ngay_dat,
                        ]
                    );

                usleep(10000);

                foreach ($gio_hang as $sp) {
                    DB::table('sb_ct_don_hang')
                        ->insert(
                            [
                                "id_don_hang" => $id_don_hang,
                                "id_sp" => $sp->ID,
                                "so_luong" => $sp->so_luong,
                                "don_gia" => $sp->don_gia,
                                "thanh_tien" => $sp->so_luong * $sp->don_gia,
                            ]
                        );
                }
            });

            Session::forget('gio_hang');
            Session::forget('tong_so_luong');
            Session::forget('tong_tien');

            return redirect('/')->withErrors(['Đặt hàng thành công!'], 'noticeOrder');

        } else {
            return redirect('/', 302);
        }
    }
}
