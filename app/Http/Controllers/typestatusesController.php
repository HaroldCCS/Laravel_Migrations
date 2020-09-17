<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\typestatusesModel;


class typestatusesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typestatuses=typestatusesModel::all();
        return view('Typestatuses.index',compact('typestatuses'));
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
        $typestatuses = request()->except('_token');

        typestatusesModel::insert($typestatuses);
        return redirect('typestatuses');
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
        $typestatuses= typestatusesModel::find($id);
        return \View::make('Typestatuses.edit',compact('typestatuses'));
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
        $typestatuses = request()->except(['_token', '_method']);
        typestatusesModel::where('id', '=', $id)->update($typestatuses);
        return redirect('typestatuses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $typestatuses= typestatusesModel::find($id);
        $typestatuses->delete();
        return redirect()->back();
    }
}
