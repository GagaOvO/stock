<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;

class AdminShowUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seller =Auth::id();
        $seller=User::select('users.*')
        ->where('user_type','=','seller')
        ->get();
        return view('admin.sellers_show_dashboard_admin')->with('seller',$seller);
    }

    public function show_accountant()
    {
        $seller =Auth::id();
        $seller=User::select('users.*')
        ->where('user_type','=','accountant')
        ->get();
        return view('admin.accountants_show_dashboard_admin')->with('seller',$seller);
    }

    public function show_stockers()
    {
        $seller =Auth::id();
        $seller=User::select('users.*')
        ->where('user_type','=','stocker')
        ->get();
        return view('admin.stockers_show_dashboard_admin')->with('seller',$seller);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
