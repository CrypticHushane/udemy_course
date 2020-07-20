<?php

namespace App\Http\Controllers;
use App\Special;
use Illuminate\Http\Request;

class SpecialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specials = Special::all();
        return view("admin.specials.index", [
            'specials' => $specials
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view("admin.specials.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $special = new Special();

        $special->name = $input['name'];
        $special->description = $input['description'];
        $special->was_priced = $input['was_priced'];
        $special->current_price = $input['current_price'];

        $special->save();

        return redirect('/admin/specials');
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
        $special = Special::where('id',$id)->first();
        return view('admin.specials.edit',[
            'special' => $special
        ]);
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
        $input = $request->all();

        $special = Special::where('id', $id)->first();

        $special->name = $input['name'];
        $special->description = $input['description'];
        $special->was_priced = $input['was_priced'];
        $special->current_price = $input['current_price'];

        $special->save();

        return redirect('/admin/specials');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Special::where('id', $id)->delete();
        return redirect('/admin/specials');


    }
}
