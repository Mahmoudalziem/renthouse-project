<?php

namespace App\Http\Controllers;
use App\Admin;
use Auth;
use Carbon\Traits\Timestamp;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function settings(){


        return view('admin/settings');
    }

    public function updateSettings(Request $request){
        
        if($request->has('password')){

            $id = Auth::guard('webAdmin')->user()->get()[0]->id;

            $password = $request->input('password');

            Admin::find($id)->update([

                'password' => bcrypt($password)
            ]);
        }
        
    }

    public function subAdmin()
    {

        return view('admin/subadmin');
    }

    public function addSubAdmin (Request $request){

        Admin::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'email_verified_at' => null,
            'password' => bcrypt($request->input('password')),
        ]);


        return redirect('admin/addadmin');
    }
}
