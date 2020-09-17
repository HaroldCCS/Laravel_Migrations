<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoriesModel;
use App\Models\statusesModel;


class categoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= categoriesModel::all();
        $statuses= statusesModel::all();
        $datos= categoriesModel::join('statuses as s','s.id','=','categories.status_id')
            ->select('s.name as status','categories.*')
            ->get();

        return view('Categories.index',compact('categories','datos','statuses'));
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
        $categories = request()->except('_token');

        categoriesModel::insert($categories);
        return redirect('categories');
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
        $categories= categoriesModel::find($id);
        $statuses= statusesModel::all();
        $datos= categoriesModel::join('statuses as s','s.id','=','categories.status_id')
            ->select('s.name as status','categories.*')
            ->where('categories.id','=',$id)
            ->get();
        return \View::make('categories.edit',compact('categories','datos','statuses'));
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
        $categories = request()->except(['_token', '_method']);
        categoriesModel::where('id', '=', $id)->update($categories);
        return redirect('categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories= categoriesModel::find($id);
        $categories->delete();
        return redirect()->back();
    }
}
