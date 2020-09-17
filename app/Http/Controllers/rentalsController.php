<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rentalsModel;
use App\Models\statusesModel;
use App\Models\userModel;


class rentalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rentals= rentalsModel::all();
        $statuses= statusesModel::all();
        $users= userModel::all();
        $datos= rentalsModel::join('users as u','u.id','=','rentals.user_id')
            ->join('statuses as s','s.id','=','rentals.status_id')
            ->select('u.name as user','s.name as status','rentals.*')
            ->get();

        return view('Rentals.index',compact('rentals','datos','users','statuses'));
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
        $rentals = request()->except('_token');

        rentalsModel::insert($rentals);
        return redirect('rentals');
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
        $rentals= rentalsModel::find($id);
        $statuses= statusesModel::all();
        $users= userModel::all();
        $datos= rentalsModel::join('users as u','u.id','=','rentals.user_id')
            ->join('statuses as s','s.id','=','rentals.status_id')
            ->select('u.name as user','s.name as status','rentals.*')
            ->where('rentals.id','=',$id)
            ->get();
        return \View::make('rentals.edit',compact('rentals','datos','users','statuses'));
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
        $rentals = request()->except(['_token', '_method']);
        rentalsModel::where('id', '=', $id)->update($rentals);
        return redirect('rentals');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rentals= rentalsModel::find($id);
        $rentals->delete();
        return redirect()->back();
    }
}
