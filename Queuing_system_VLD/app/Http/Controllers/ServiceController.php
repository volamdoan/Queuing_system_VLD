<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\service;
use Illuminate\Support\Facades\DB;
class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        if($key = request()->key){
            $data=DB::table('service')
            ->select('*')
            ->where('service_name','like','%'.$key.'%')
            ->paginate(7);
        }else{$data= service::paginate(7);}
        return view('service',compact('data'));
    }
    public function create(){
        return view('add_service');
    }
    public function save (Request $request){
        service::create([
            'service_code' => $request->service_code,
            'service_name'=> $request->service_name,
            'service_content'=>$request->service_content,
            'service_status'=>1,
            'service_min'=>$request->service_min,
            'service_max'=>$request->service_max,
            'service_Prefix'=>$request->service_Prefix,
            'service_Surfix'=>$request->service_Surfix,      
    ]);
    return redirect('/dich-vu')->withSuccess('Thêm dịch vụ thành công');
    }
    public function service_active(){
        $data = service::where('service_status',1)->paginate(7);
        return view('service',compact('data'));
    }
    public function service_shut_dow(){
        $data = service::where('service_status',0)->paginate(7);
        return view('service',compact('data'));
    }
    public function service_detail($id){
        $data = DB::table('service')->where('id', $id)->first();
        return view('service_detail',compact('data'));
    }
    public function edit_service($id){
        $data = DB::table('service')->where('id', $id)->first();
        return view('edit_service',compact('data'));
    }
    public function update_service(Request $request, $id){
        $update = service::find($id);
        $update->update([
            'service_code' => $request->service_code,
            'service_name'=> $request->service_name,
            'service_content'=>$request->service_content,
            'service_status'=>1,
            'service_min'=>$request->service_min,
            'service_max'=>$request->service_max,
            'service_Prefix'=>$request->service_Prefix,
            'service_Surfix'=>$request->service_Surfix,                 
        ]);
        return redirect('/dich-vu')->withSuccess('Cập nhật dịch vụ thành công');
    }
}
