<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class SPAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds_san_pham = DB::table('sb_san_pham')
            ->select(DB::raw('sb_san_pham.*,sb_san_pham.id,ten_nha_cung_cap,ten_nha_san_xuat,ten_loai_sp'))
            ->join('sb_nha_cung_cap', 'sb_san_pham.id_nha_cung_cap', '=', 'sb_nha_cung_cap.id')
            ->join('sb_nha_san_xuat', 'sb_san_pham.id_nha_san_xuat', '=', 'sb_nha_san_xuat.id')
            ->join('sb_loai_san_pham', 'sb_san_pham.id_loai_sp', '=', 'sb_loai_san_pham.ID_loai_sp')
            ->get();
        // echo '<pre>', print_r($ds_san_pham), '</pre>';
        return view('page_admin.trang_ds_san_pham')->with('ds_san_pham', $ds_san_pham);
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
        $ten_san_pham = $request->get('ten_san_pham');
        $gioi_thieu = $request->get('gioi_thieu');
        $don_gia = $request->get('don_gia');
        $gia_giam = $request->get('gia_giam');
        $sku = $request->get('sku');
        $noi_bat = $request->get('noi_bat');
        $trang_thai = $request->get('trang_thai');
        $id_loai_sp = $request->get('id_loai_sp');

        $hinh_sp = $request->file('hinh');
        //echo "<pre>",print_r($hinh_sach),"</pre>";

        $cur_time = time();

        $name_file = $hinh_sp->getClientOriginalName();
        $arr_name_file = explode('.', $name_file);

        $public_path = public_path();
        $hinh = $arr_name_file[0] . '_' . $cur_time . '.' . $arr_name_file[count($arr_name_file) - 1];
        if ($hinh_sp->isValid()) {
            $hinh_sp->move($public_path . '/images/hinh_sp', $hinh);
        }

        $id_san_pham_moi = DB::table('sb_san_pham')
            ->insertGetId([
                'id_loai_sp' => $id_loai_sp,
                'ten_san_pham' => $ten_san_pham,
                'gioi_thieu' => $gioi_thieu,
                'don_gia' => $don_gia,
                'gia_giam' => $gia_giam,
                'sku' => $sku,
                'noi_bat' => $noi_bat,
                'trang_thai' => $trang_thai,
                'hinh' => $hinh
            ]);

        return redirect('/admin/ql-san-pham/')->with('NoticeSuccess', 'Thêm sản phẩm mới thành công');
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
        $ds_nsx = DB::table('sb_nha_san_xuat')->get();

        $thong_tin_san_pham = DB::table('sb_san_pham')->where('ID', $id)->first();
        $info_product = DB::table('sb_san_pham')->where('ID', $id)->get();
        $list_loai_sp = DB::table('sb_loai_san_pham')->get();

        return view('page_admin.trang_edit_san_pham')
            ->with('ds_nsx', $ds_nsx)
            ->with('info_product', $info_product)
            ->with('list_loai_sp', $list_loai_sp)
            ->with('thong_tin_san_pham', $thong_tin_san_pham);
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
        $id_loai_san_pham = $request->get('id_loai_sp');
        $gioi_thieu = $request->get('editor1');
        $don_gia = $request->get('don_gia');
        $sku = $request->get('sku');
        $id_nha_cung_cap = $request->get('id_nha_cung_cap');
        $id_nha_san_xuat = $request->get('id_nha_san_xuat');
        $ngay_san_xuat = $request->get('ngay_san_xuat');
        $trang_thai = $request->get('trang_thai');

        $hinh = $request->get('hinh');

        if ($request->hasFile('hinh_sp')) {
            $hinh_san_pham = $request->file('hinh_sp');

            $cur_time = time();

            $name_file = $hinh_san_pham->getClientOriginalName();
            $arr_name_file = explode('.', $name_file);

            $public_path = public_path();
            $hinh = $arr_name_file[0] . '_' . $cur_time . '.' . $arr_name_file[count($arr_name_file) - 1];
            if ($hinh_san_pham->isValid()) {
                $hinh_san_pham->move($public_path . '/images/hinh_sp', $hinh);
            }
        }

        $result = DB::table('sb_san_pham')
            ->where('ID', $id)
            ->update([
                'id_loai_sp' => $id_loai_san_pham,
                'gioi_thieu' => $gioi_thieu,
                'don_gia' => $don_gia,
                'sku' => $sku,
                'id_nha_cung_cap' => $id_nha_cung_cap,
                'id_nha_san_xuat' => $id_nha_san_xuat,
                'ngay_san_xuat' => $ngay_san_xuat,
                'trang_thai' => $trang_thai,
                'hinh' => $hinh
            ]);

        return redirect('/admin/ql-san-pham')->with('NoticeSuccess', 'Cập nhật sản phẩm thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::table('sb_san_pham')->where('ID', $id)->delete();
            return redirect($_SERVER['HTTP_REFERER'])->withErrors('Xoá thành công ', 'NoticeDelete');
        } catch (Exception $e) {
            return redirect($_SERVER['HTTP_REFERER'])->withErrors('Bị lỗi trong quá trình xóa vui lòng thử lại: ' . $e, 'NoticeDelete');
        }
    }

    function create_sp()
    {
        $list_loai_sp = DB::table('sb_loai_san_pham')->get();
        return view('page_admin.trang_them_sp')->with('list_loai_sp', $list_loai_sp);
    }
}
