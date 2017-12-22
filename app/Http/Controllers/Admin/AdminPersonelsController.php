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

        $personel->role_id = 2;
        $personel->name = $request->name;
        $personel->email = $request->email;
        $personel->created_at = date('Y-m-d H:i:s');
        $personel->updated_at = date('Y-m-d H:i:s');
        $personel->save();

        $message = "Yeni personel basariyla eklendi";

        return view('admin.personels')->with(
            ['message' => $message]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personel = User::where('role_id', 2)->where('id',$id);

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
        $message = "Personel basariyla silindi";

        return view('admin.personels')->with(
            ['message' => $message]
        );
    }
}
