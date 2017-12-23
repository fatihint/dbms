<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    /**
     * Show user profile.
     *
     */
    public function index()
    {
        if (Auth::user()->role_id == 3) {
            return view('customer.profile');
        } else {

            $path = NULL;

            if(Storage::disk('local')->exists('public/user-images/' . Auth::user()->id . ".jpeg")) {
                $path = asset('storage/user-images/' . Auth::user()->id . ".jpeg");
            } elseif(Storage::disk('local')->exists('public/user-images/' . Auth::user()->id . ".jpeg")) {
                $path = asset('storage/user-images/' . Auth::user()->id . ".png");
            }

            return view('staff.profile')->with(
                ['user' => Auth::user(), 'path' => $path]
            );
        }
    }

    /**
     * Update user profile.
     *
     */
    public function update(Request $request)
    {

        if ($request->password != $request->password_again) {
            switch (Auth::user()->role_id){
                case 1:
                    return redirect('/admin/profile/')->with('message', "Parolalar uyusmuyor !");
                    break;
                case 2:
                    return redirect('/personel/profile/')->with('message', "Parolalar uyusmuyor !");
                    break;
                case 3:
                    return redirect('/customer/profile/')->with('message', "Parolalar uyusmuyor !");
                    break;
            }
        }

        $user = Auth::user();
        $user->email = $request->email;
        $user->updated_at = date('Y-m-d H:i:s');

        if (!empty($request->password)) {
            $user->password = bcrypt($request->password);
        }

        if (isset($request->image)) {
            if(Storage::disk('local')->exists('public/user-images/' . $user->image)){
                Storage::delete('public/menu-images/' . $user->image);
            }
            $request->file('image')->storeAs('public/user-images', $user->id . "." .$request->image->extension());
            $user->image = $user->id . "." . $request->image->extension();
        }

        $user->save();

        switch (Auth::user()->role_id){
            case 1:
                return redirect('/admin/profile/')->with('message', "Profil basariyla guncellendi");
                break;
            case 2:
                return redirect('/personel/profile/')->with('message', "Profil basariyla guncellendi");
                break;
            case 3:
                return redirect('/customer/profile/')->with('message', "Profil basariyla guncellendi");
                break;
        }
    }
}
