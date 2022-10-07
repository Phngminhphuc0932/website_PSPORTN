<?php

namespace App\Http\Controllers;

// use Illuminate\Contracts\Session\Session;

use Exception;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $list_sp_noi_bat = DB::select('SELECT s.*, ten_tac_gia
        // $list_sp_noi_bat = DB::table('sb_san_pham')->where('noi_bat', 1)->limit(3)->get();
        // $list_mau_ao_moi = DB::table('sb_san_pham')->where('trang_thai', 1)->limit(2)->get();
        $list_sp_noi_bat = DB::table('sb_san_pham')->where('noi_bat', 1)->get();
        $list_mau_ao_moi = DB::table('sb_san_pham')->where('ID_loai_sp', 27)->get();
        $list_mau_giay_moi = DB::table('sb_san_pham')->where('ID_loai_sp', 24)->get();


        $user_info = Session::get('user_info');


        return view('trang_chu')
            ->with('user_info', $user_info)
            ->with('list_sp_noi_bat', $list_sp_noi_bat)
            ->with('list_mau_ao_moi', $list_mau_ao_moi)
            ->with('list_mau_giay_moi', $list_mau_giay_moi);
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
    function san_pham()
    {
    }

    public function add_gio_hang($id_sp)
    {
        // echo $id_sp;
        if (Session::has('gio_hang')) {
            $gio_hang = Session::get('gio_hang');

            $flag = 0;
            for ($i = 0; $i < count($gio_hang); $i++) {
                if ($gio_hang[$i]->ID == $id_sp) {
                    $gio_hang[$i]->so_luong += 1;
                    $flag = 1;
                    break;
                }
            }

            if ($flag == 0) {
                $thong_tin_sp = DB::table('sb_san_pham')->where('ID', $id_sp)->first();
                $thong_tin_sp = json_decode(json_encode($thong_tin_sp));
                $thong_tin_sp->so_luong = 1;
                $gio_hang[] = $thong_tin_sp;
            }
        } else {
            $gio_hang = [];
            $thong_tin_sp = DB::table('sb_san_pham')->where('ID', $id_sp)->first();
            $thong_tin_sp = json_decode(json_encode($thong_tin_sp));
            $thong_tin_sp->so_luong = 1;
            $gio_hang[] = $thong_tin_sp;
        }


        $tong_so_luong = 0;
        $tong_tien = 0;
        for ($i = 0; $i < count($gio_hang); $i++) {
            $tong_so_luong += $gio_hang[$i]->so_luong;
            $tong_tien += $gio_hang[$i]->so_luong * $gio_hang[$i]->don_gia;
        }



        // echo '<pre>',print_r($gio_hang) ,'</pre>';
        // echo $gio_hang;

        Session::put('gio_hang', $gio_hang);
        Session::put('tong_so_luong', $tong_so_luong);
        Session::put('tong_tien', $tong_tien);

        echo json_encode($gio_hang);
    }

    function update_gio_hang($id_sp)
    {
        try {
            $so_luong = $_GET['so_luong'];

            if (Session::has('gio_hang')) {
                $gio_hang = Session::get('gio_hang');

                $tong_tien = 0;
                $tong_so_luong = 0;
                foreach ($gio_hang as $sp) {
                    if ($sp->ID == $id_sp) {
                        $sp->so_luong = $so_luong;
                    }
                    $tong_so_luong += $sp->so_luong;
                    $tong_tien += $sp->so_luong * $sp->don_gia;
                }

                Session::put('gio_hang', $gio_hang);
                Session::put('tong_so_luong', $tong_so_luong);
                Session::put('tong_tien', $tong_tien);
            }

            echo '1';
        } catch (Exception $e) {
            die(0);
        }
    }


    function xoa_item_gio_hang($id_sp)
    {

        if (Session::has('gio_hang')) {
            $gio_hang = Session::get('gio_hang');
            for ($i = 0; $i < count($gio_hang); $i++) {
                if ($gio_hang[$i]->ID == $id_sp) {
                    array_splice($gio_hang, $i, 1);
                    break;
                }
            }

            $tong_so_luong = 0;
            $tong_tien = 0;
            foreach ($gio_hang as $sp) {
                $tong_so_luong += $sp->so_luong;
                $tong_tien += $sp->so_luong * $sp->don_gia;
            }

            Session::put('gio_hang', $gio_hang);
            Session::put('tong_so_luong', $tong_so_luong);
            Session::put('tong_tien', $tong_tien);

            echo 1;
        }
    }

    function xoa_gio_hang()
    {
        if (Session::has('gio_hang')) {
            Session::forget('gio_hang');
            Session::forget('tong_so_luong');
            Session::forget('tong_tien');
        }
        echo 1;
    }
    function san_pham_moi(Request $request)
    {
        $id_sp = $request->get('id_sp');
        $sp_single = DB::table('sb_san_pham')->where('ID', $id_sp)->get();
        $img_more = DB::table('sb_hinh_san_pham')->where('id_sp', $id_sp)->get();
        $list_mau_ao_moi = DB::table('sb_san_pham')->where('ID_loai_sp', 27)->get();

        return view('single')
        ->with('list_mau_ao_moi', $list_mau_ao_moi)
        ->with('sp_single', $sp_single)
        ->with('img_more', $img_more);
    }
}
