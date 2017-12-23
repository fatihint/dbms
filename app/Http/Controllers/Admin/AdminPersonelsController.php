<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPersonelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $personels = User::where('role_id', 2)->get();

        return view('admin.personels')->with(
            ["personels" => $personels]
        );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $personel = new User;

        if ($request->password != $request->password_again) {
            return redirect('/admin/personels/new')->with('message',"Parolalar uyuşmuyor.");
        }

        $personel->role_id = 2;
        $personel->name = $request->name . " ". $request->lastname;
        $personel->email = $request->email;
        $personel->password = bcrypt($request->password);
        $personel->created_at = date('Y-m-d H:i:s');
        $personel->updated_at = date('Y-m-d H:i:s');
        $personel->save();

        return redirect('/admin/personels/' . $personel->id)->with('message',"Yeni personel basariyla eklendi.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personel = User::where('role_id', 2)->where('id',$id)->get()->first();

        if ($personel) {
            return view('admin.personels')->with(
                ['personel' => $personel]
            );
        } else {
            return redirect('admin/personels');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);

        return redirect('admin/personels')->with('message', "Kullanici basariyla silindi.");
    }
}
