<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\role;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        if($key = request()->key){
            $data=DB::table('role')
            ->select('*')
            ->where('role_name','like','%'.$key.'%')
            ->paginate(7);
        }else{  $data=role::all();}
        return view('role',compact('data'));
    }
    public function create(){
        return view('add_role');
    }
    public function save( Request $request){
        $request->validate([
            'role_name'=>'required',
            'role_content'=>'required',

        ],[
           'role_name.required'=>'Tên vai trò không được bỏ trống' ,
           'role_content.required'=>'Mô tả vai trò không được bỏ trống' 
        ]);
        $route=json_encode($request->role_id_detail);
        role::create([
            'role_name'=>$request->role_name,
            'role_qty'=>1,
            'role_content'=>$request->role_content,
            'role_status'=>1,
            'permissions'=>$route,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        return redirect('/role')->withSuccess('Thêm thành công');
    }
    public function edit(){
        return view('edit_role');
    }
}
