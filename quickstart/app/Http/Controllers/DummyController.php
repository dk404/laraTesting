<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dummy;
use Illuminate\Support\Facades\Redirect;

class DummyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        return view('dummy.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        return view('dummy.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $this->validate($request, [

            'name' => 'required|unique:dummies|string|max:30',

        ]);

        $dummy = Dummy::create(['name' => $request->name]);

        $dummy->save();

        alert()->success('Congrats!', 'You made a Dummy');

        return Redirect::route('dummy.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $dummy = Dummy::findOrFail($id);

        return view('dummy.show', compact('dummy'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $dummy = Dummy::findOrFail($id);

        return view('dummy.edit', compact('dummy'));

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
        $this->validate($request, [

            'name' => 'required|string|max:40|unique:dummies,name,' .$id

        ]);

        $dummy = Dummy::findOrFail($id);

        $dummy->update(['name' => $request->name]);

        alert()->success('Congrats!', 'You updated a Dummy');


        return Redirect::route('dummy.show', ['dummy' => $dummy]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        Dummy::destroy($id);

        alert()->overlay('Attention!', 'You deleted a Dummy', 'error');

        return Redirect::route('dummy.index');

    }
}