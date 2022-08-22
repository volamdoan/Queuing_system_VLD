<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\device;
use App\models\category;
use Illuminate\Support\Facades\DB;
class DeviceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        if($key = request()->key){
            $data=DB::table('device')
            ->select('*')
            ->where('device_name','like','%'.$key.'%')
            ->paginate(7);
        }else{$data= device::paginate(7);}
      
        return view('device',compact('data'));
    }
    public function create(){
        $data = category::all();
        return view('add_device',compact('data'));
    }
    public function save(Request $request){
        device::create([
            'device_code' => $request->device_code,
            'device_category'=> $request->device_category,
            'device_name'=>$request->device_name,
            'device_username'=>$request->device_username,
            'device_id'=>$request->device_id,
            'device_password'=>$request->device_password,
            'device_status'=>1,
            'device_conection'=>1,
            'device_title'=>$request->device_title,
            'created_at'=>now(),
            'updated_at'=>now()            
    ]);
    return redirect('/thiet-bi')->withSuccess('Thêm thành công');
    }
    public function detail($id){
        $data = DB::table('device')->where('id', $id)->first();
        return view('device_detail',compact('data'));
    }
    public function edit($id){
        $category = category::all();
        $device = DB::table('device')->where('id', $id)->first();
        return view('edit_device',compact('category','device'));
    }
    public function update( Request $request,$id){
       $update = device::find($id);
       $update->update([
            'device_code' => $request->device_code,
            'device_category'=> $request->device_category,
            'device_name'=>$request->device_name,
            'device_username'=>$request->device_username,
            'device_id'=>$request->device_id,
            'device_password'=>$request->device_password,
            'device_status'=>1,
            'device_conection'=>1,
            'device_title'=>$request->device_title,
                   
    ]);
    return redirect('/thiet-bi')->withSuccess('Cập nhật thành công');
    }
    public function device_active(){
        $data = device::where('device_status',1)->paginate(7);
        return view('device',compact('data'));
    }
    public function device_shut_dow(){
        $data = device::where('device_status',0)->paginate(7);
        return view('device',compact('data'));
    }
    public function device_connecting(){
        $data = device::where('device_conection',1)->paginate(7);
        return view('device',compact('data'));
    }
    public function device_disconnect(){
        $data = device::where('device_conection',0)->paginate(7);
        return view('device',compact('data'));
    }
}
