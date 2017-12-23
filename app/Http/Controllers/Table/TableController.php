<?php

namespace App\Http\Controllers\Table;

use App\Table;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TableController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show all tables.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = Table::all();


        return view('staff.tables')->with(
            ["tables" => $table]
        );

    }
    /**
     * Insert new table
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if (Auth::User()->role_id > 2) {
            return redirect('/home');
        }
        else {

            $table = new Table;
            $table->name = $request->name;
            $table->save();
            return redirect('/tables');
        }
    }
    /**
     * New table resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newTable(){
        if (Auth::User()->role_id > 2) {
            return redirect('/home');
        }
        else
            return view('staff.new-table');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::User()->role_id>2) {
            return redirect('/home');
        }
        else {
            Table::destroy($id);
            return redirect('/tables');
        }
    }
}
