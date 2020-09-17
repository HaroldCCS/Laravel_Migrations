<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoriesModel;
use App\Models\categorymovieModel;
use App\Models\moviesModel;

class categorymovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalle= categorymovieModel::all();
        $count=categorymovieModel::count();
        $categories= categoriesModel::all();
        $movies= moviesModel::all();
        $datos= categorymovieModel::join('movies as m','m.id','=','category_Movie.movie_id')
            ->join('categories as c','c.id','=','category_Movie.category_id')
            ->select('m.name as movie','c.name as category','category_Movie.*')
            ->get();

        return view('CategoryMovie.index',compact('count','detalle','datos','movies','categories'));
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

        categorymovieModel::insert($detalle);
        return redirect('category_movie');
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
        $detalle= categorymovieModel::find($id);
        $count=categorymovieModel::count();
        $categories= categoriesModel::all();
        $movies= moviesModel::all();
        $datos= categorymovieModel::join('movies as m','m.id','=','category_Movie.movie_id')
            ->join('categories as c','c.id','=','category_Movie.category_id')
            ->select('m.name as movie','c.name as category','category_Movie.*')
            ->where('category_movie.id','=',$id)
            ->get();
        return \View::make('CategoryMovie.edit',compact('count','detalle','datos','movies','categories'));
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
        categorymovieModel::where('id', '=', $id)->update($detalle);
        return redirect('category_movie');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalle= categorymovieModel::find($id);
        $detalle->delete();
        return redirect()->back();
    }
}
