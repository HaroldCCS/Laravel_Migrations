<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rentalsModel;
use App\Models\movierentalModel;
use App\Models\moviesModel;

class movierentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalle= movierentalModel::all();
        $count=movierentalModel::count();
        $rentals= rentalsModel::join('users as u','u.id','=','rentals.user_id')
            ->select('u.name','rentals.*')->get();
        $movies= moviesModel::all();
        $datos= movierentalModel::join('movies as m','m.id','=','movie_rental.movie_id')
            ->join('rentals as r','r.id','=','movie_rental.rental_id')
            ->join('users as u','u.id','=','r.user_id')
            ->select('m.name as movie','u.name as user','movie_rental.*')
            ->get();

        return view('MovieRental.index',compact('count','detalle','datos','movies','rentals'));
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
        $detalle = request()->except('_token');

        movierentalModel::insert($detalle);
        return redirect('movie_rental');
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
        $detalle= movierentalModel::find($id);
        $count=movierentalModel::count();
        $rentals= rentalsModel::join('users as u','u.id','=','rentals.user_id')
            ->select('u.name','rentals.*')->get();
        $movies= moviesModel::all();
        $datos= movierentalModel::join('movies as m','m.id','=','movie_rental.movie_id')
            ->join('rentals as r','r.id','=','movie_rental.rental_id')
            ->join('users as u','u.id','=','r.user_id')
            ->select('m.name as movie','u.name as user','movie_rental.*')
            ->where('movie_rental.id','=',$id)
            ->get();
        return \View::make('MovieRental.edit',compact('count','detalle','datos','movies','rentals'));
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
        $detalle = request()->except(['_token', '_method']);
        movierentalModel::where('id', '=', $id)->update($detalle);
        return redirect('movie_rental');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalle= movierentalModel::find($id);
        $detalle->delete();
        return redirect()->back();
    }
}
