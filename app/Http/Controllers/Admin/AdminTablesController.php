<?php

namespace App\Http\Controllers\Admin;

use App\Table;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminTablesController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $table = new Table;

        $table->name = $request->name;
        $table->user_id = 0;
        $table->save();

        $message = 'Masa basariyla olusturuldu';

        return view('admin.tables')->with(
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

        $table = Table::find($id);

        if ($table) {
            return view('admin.tables')->with(
                ["table" => $table]
            );
        } else {
            return redirect('/admin/tables');
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
        Table::destroy($id);

        $message = 'Masa basariyla silindi';

        return view('admin.tables')->with(
            ['message' => $message]
        );
    }
}
