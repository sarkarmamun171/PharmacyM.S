<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Carbon\Carbon;
class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard.list');
    }
    public function dashboard_profile()
    {
        $users = User::find(Auth::user()->id);
        return view('admin.profile.index', [
            'users' => $users,
        ]);
    }
    public function dashboard_profile_update(Request $request, $id)
    {
        $user = User::find($id);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'image' => 'required|image',
            'password' => 'required',
        ]);

        if ($request->image == '') {
            User::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            return back()->with('success', 'User Updated Successfully');
        } else {
            $request->validate([
                'image' => 'required|image',
            ]);

            // $current_image = public_path('uploads/user/' . $user->image);
            // unlink($current_image);

            $img = $request->image;
            $extension = $img->extension();
            $file_name = Str::lower(str_replace(' ', '-', $request->name)) . '-' . random_int(100, 1000) . '.' .$extension;

            Image::make($img)->resize(300, 200)->save(public_path('uploads/user/' . $file_name));


            User::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'image'=>$file_name,
                'password' => Hash::make($request->password),
           ]);
           return back()->with('success','User updated Successfully');
        }
    }
}
