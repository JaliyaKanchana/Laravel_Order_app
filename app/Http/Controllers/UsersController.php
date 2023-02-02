<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UsersController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return
     */
    public function index()
    {

        if (request()->ajax()) {

            $users = User::all();

            return Datatables::of($users)
//                ->editColumn('name', function ($row) {
//                        return $row->name;
//                })
//                ->editColumn('email', function ($row) {
//                        return $row->email;
//
//                })
                ->make(false);
        }

        return view('users.index');

    }
}
