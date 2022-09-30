<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\Crete;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use stdClass;

class UserController extends Controller
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
    public function store(CreateUserRequest $request)
    {
        //

        $username = $request->input('username');
        $password = $request->input('password');
        $email = $request->input('email');
        $date_of_birth = $request->input('date_of_birth');

        $user_new = (object)[];
        $user_new->username = $username;
        $user_new->password = $password;
        $user_new->email = $email;
        $user_new->date_of_birth = $date_of_birth;

        $data_string_user = file_get_contents(resource_path('data_temp/users.json'));
        $list_user = json_decode($data_string_user);
        $list_user[] = $user_new;
        file_put_contents(resource_path('data_temp/users.json'),json_encode($list_user));

        Session::put('user_info', $user_new);

        return view('redirect_page')
            ->with('message_notice', "Đăng ký thành công!!")
            ->with('type_notice', 'success')
            ->with('url_redirect', '/');


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
    public function createNewAccount()
    {

        return view('register_acc');
    }

    function login(){
        return view('login_page');
    }

    function logout(Request $request){
        Session::forget('user_info');

        return redirect($request->server('HTTP_REFERER'), 302);
    }

    function login_Account(LoginRequest $request){
        $email = $request->input('email');
        $password = $request->input('password');

        $user = DB::table('sb_user')
            ->where('email', $email)
            ->where('mat_khau', md5($password))
            ->first();

        if(isset($user->email)){
            $user->mat_khau = '';
            Session::put('user_info', $user);
            return redirect('/');
        }
        else {
            return redirect($_SERVER['HTTP_REFERER'])->withErrors(['Tài khoản hoặc mật khẩu không chính xác'], 'loginErrors');
        }

        echo '<pre>',print_r($user),'</pre>';

        return redirect($_SERVER['HTTP_REFERER'])->withErrors(['Server Internal Error'], 'loginErrors');
    }
}
