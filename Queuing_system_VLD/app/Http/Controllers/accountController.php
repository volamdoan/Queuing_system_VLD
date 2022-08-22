<?php

namespace App\Http\Controllers;
use App\Models\role;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class accountController extends Controller
{
   public function index(){
    $data=DB::table('users')
    ->join('role','users.account_role','=','role.id')
    ->select('users.*','role.role_name','role.id')
    ->paginate(8);
       return view('account',compact('data'));
   }
   public function create(){
       $role=role::all();
       return view('add_account',compact('role'));
   }
   public function save(Request $request){
      $request->validate([
       'name' =>'required',
       'email' =>'required',
       'account_username' =>'required',
       'account_number' =>'required',
       'password' =>'required',
       'password_confirmation'=>['required','same:password'],

      ],[
        'name.required'=>'Tên tài khoản không được bỏ trống',
        'email.required'=>'Email không được bỏ trống',
        'account_username.required'=>'Tên đăng nhập không được bỏ trống',
        'account_number.required'=>'Số điện thoại không được bỏ trống',
        'password.required'=>'Mật khẩu nhập không được bỏ trống',
        'password_confirmation.required'=>'Mật khẩu không được trống',
        'password_confirmation.same'=>'Mật khẩu không khớp',
      ]);
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'account_username'=>$request->account_username,
            'account_number'=>$request->account_number,
            'account_role'=>$request->account_role,
            'account_status'=>$request->account_status,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/account')->withSuccess('Thêm tài khoản thành công');
   }
   public function edit($id){
    $role=role::all();
    $data=user::find($id);
    return view('edit_account',compact('data','role'));
   }
   public function note(){
    return view('note');
   }
}
