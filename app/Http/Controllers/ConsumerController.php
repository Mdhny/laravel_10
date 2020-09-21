<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consumer;

class ConsumerController extends Controller
{

    public function index()
    {
        $data = Consumer::all();
        return view('consumer.home',[
            'data' => $data
        ]);
    }


    public function create()
    {
        return view('consumer.create');
    }

    public function store(Request $req)
    {
        $consumer = new Consumer;
        $consumer->name = $req->name;
        $consumer->save();
        return redirect('/consumer');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $consumer =Consumer::find($id);
       ;
        return view('consumer.edit',[
            'data' => $consumer
        ]);
    }


    public function update(Request $req)
    {
        $consumer = Consumer::find($req->id);
        $consumer->name = $req->name;
        $consumer->save();
        return redirect('/consumer');

    }

    public function destroy($id)
    {
        $data =  Consumer::find($id);
        $data->delete();
        return redirect('/consumer');
    }
}
