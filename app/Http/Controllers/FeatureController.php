<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class FeatureController extends Controller
{
    public function add_user() 
    {
        return view('feature.add_user');
    }

    public function save_user(Request $request) 
    {
        $data = array();
        $data['user_name'] = $request->user_name;
        $data['user_address'] = $request->user_address;
        // $data['filename']=$request->filename;
        $get_image = $request->file('user_image');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/user',$new_image);
            $data['user_image'] = $new_image;

            DB::table('user')->insert($data);
            Session::put('message','Thêm user thành công.');
            return Redirect::to('them-user');
        }

        $data['user_image'] = '';
        DB::table('user')->insert($data);
        Session::put('message','Thêm user thành công.');
        return Redirect::to('them-user');
        
        
    }

    // public function all_user()
    // {
    //     $all_user = DB::table('user')->get();
    //     $manager_user = view('feature.list_user')-> with('list_user',$all_user);
    //     return view('layouts.admin')->with('feature.list_user',$manager_user);
    // } 

    public function all_user()
    {
        $all_user = DB::table('user')->orderby('user_id','desc')->get();
        
        return view('feature.list_user')->with(['all_user' => $all_user]);
    } 

    public function edit_user($user_id)
    {
        $edit_user = DB::table('user')->where('user_id',$user_id)->get();

        return view('feature.edit_user')->with(['edit_user'=> $edit_user]);
    }

    public function update_user(Request $request, $user_id)
    {
        $data = array();
        $data['user_name'] = $request->user_name;
        $data['user_address'] = $request->user_address;
        $get_image = $request->file('user_image');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/user',$new_image);
            $data['user_image'] = $new_image;

            DB::table('user')->where('user_id', $user_id)->update($data);
            Session::put('message','Update user thành công.');
            return Redirect::to('danh-sach-user');
        }

       
        DB::table('user')->where('user_id', $user_id)->update($data);
        Session::put('message','Update user thành công.');
        return Redirect::to('danh-sach-user');
    }

    public function delete_user($user_id) 
    {
        DB::table('user')->where('user_id', $user_id)->delete();
        Session::put('message','Xóa user thành công');
        return Redirect::to('danh-sach-user');
    }
}
