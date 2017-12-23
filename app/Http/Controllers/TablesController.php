<?php

namespace App\Http\Controllers;

use App\Table;

class TablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tables = Table::all();

        return view('admin.tables')->with(
            ["tables" => $tables]
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

        $table = Table::find($id);

        if (!$table) {
            if (Auth::user()->role_id == 1) {
                return redirect('/admin/tables');
            } else {
                return redirect('/personel/tables');
            }
        }

        return view('admin.tables')->with(
            ["table" => $table]
        );
    }

}
