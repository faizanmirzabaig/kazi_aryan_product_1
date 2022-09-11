<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function profile()
    {
            $id=Auth::user()->id;
            $adminData=User::find($id);
        return view('admin.admin_profile_view',compact('adminData'));

    }

    public function editprofile(Request $request)
    {
            $id=Auth::user()->id;
            $editdata=User::find($id);
        return view('admin.admin_profile_edit',compact('editdata'));

    }

    public function storeprofile(Request $request)
    {
            $id=Auth::user()->id;
            $data=User::find($id);
            $data->name=$request->name;
            $data->username=$request->username;
            $data->email=$request->email;
        if ($request->file('profile_image')) {
            $file=$request->file('profile_image');
            echo '<pre>';
            var_dump($file);
            echo '</pre>';
            $file_name=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('admin_images'),$file_name);
            $data['profile_image']=$file_name;

        }

        $notification=['message'=> 'you profile is successfully',
                        'type'=>'info'
    ];
        $data->save();
return redirect('/dashboard')->with($notification);
    }

}
