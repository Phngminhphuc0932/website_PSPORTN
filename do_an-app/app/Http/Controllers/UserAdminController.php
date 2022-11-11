<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds_khach_hang = DB::table('sb_user')
            ->select(DB::raw('sb_user.*,sb_user.id,sb_loai_user.ten_loai_user'))
            ->join('sb_loai_user', 'sb_user.id_loai_user', '=', 'sb_loai_user.id')
            ->get();
        return view('page_admin.trang_ds_user')->with('ds_khach_hang', $ds_khach_hang);
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
        $ds_user = DB::table('sb_user')->where("ID", $id)->get();
        $loai_tv = DB::table('sb_loai_user')->get();


        return view('page_admin.trang_edit_user')
            ->with('ds_user', $ds_user)
            ->with('loai_tv', $loai_tv);
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
        $mat_khau = $request->get('mat_khau');
        $email = $request->get('email');
        $dien_thoai = $request->get('dien_thoai');

        $result = DB::table('sb_user')
            ->where('ID', $id)
            ->update([
                'mat_khau' => md5($mat_khau),
                'email' => $email,
                'dien_thoai' => $dien_thoai,
            ]);

        return redirect('/admin/ql-khach-hang')->with('NoticeSuccess', 'Cập nhật thông tin thành công');
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
            DB::table('sb_user')->where('id', $id)->delete();
            return redirect($_SERVER['HTTP_REFERER'])->withErrors('Xoá thành công ', 'NoticeDelete');
        } catch (Exception $e) {
            return redirect($_SERVER['HTTP_REFERER'])->withErrors('Bị lỗi trong quá trình xóa vui lòng thử lại: ' . $e, 'NoticeDelete');
        }
    }
}
