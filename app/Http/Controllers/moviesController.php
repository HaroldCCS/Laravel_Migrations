<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\moviesModel;
use App\Models\statusesModel;
use App\Models\userModel;


class moviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies= moviesModel::all();
        $statuses= statusesModel::all();
        $users= userModel::all();
        $datos= moviesModel::join('users as u','u.id','=','movies.user_id')
            ->join('statuses as s','s.id','=','movies.status_id')
            ->select('u.name as user','s.name as status','movies.*')
            ->get();

        return view('Movies.index',compact('movies','datos','users','statuses'));
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
        $movies = request()->except('_token');

        moviesModel::insert($movies);
        return redirect('movies');
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
        $movies= moviesModel::find($id);
        $statuses= statusesModel::all();
        $users= userModel::all();
        $datos= moviesModel::join('users as u','u.id','=','movies.user_id')
            ->join('statuses as s','s.id','=','movies.status_id')
            ->select('u.name as user','s.name as status','movies.*')
            ->where('movies.id','=',$id)
            ->get();
        return \View::make('movies.edit',compact('movies','datos','users','statuses'));
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
        $movies = request()->except(['_token', '_method']);
        moviesModel::where('id', '=', $id)->update($movies);
        return redirect('movies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movies= moviesModel::find($id);
        $movies->delete();
        return redirect()->back();
    }
}
