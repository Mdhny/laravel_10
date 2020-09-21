<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Price;


class PriceController extends Controller
{

    public function index()
    {
        $data = Price::all();
        return view('price.home',[
            "data" => $data
        ]);
    }


    public function create()
    {
        return view('price.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $price = new Price;
        $price->name = $req->name;
        $price->save();
        return redirect('/price');
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
        $data = Price::find($id);
        $data->delete();
        return redirect('/price');
    }
}
