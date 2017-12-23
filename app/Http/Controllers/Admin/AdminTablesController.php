<?php

namespace App\Http\Controllers\Admin;

use App\Table;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminTablesController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if (Auth::User()->role_id!=1) {
            return redirect('/home');
        }
        else {
            $table = new Table;

            $table->name = $request->name;
            $table->user_id = 0;
            $table->save();

            $message = 'Masa basariyla olusturuldu';

            return view('staff.tables')->with(
                ['message' => $message]
            );
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
        if (Auth::User()->role_id!=1) {
            return redirect('/home');
        }
        else {
            Table::destroy($id);

            $message = 'Masa basariyla silindi';

            return view('staff.tables')->with(
                ['message' => $message]
            );
        }
    }
}
