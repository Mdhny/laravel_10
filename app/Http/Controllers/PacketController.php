<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consumer;
use App\Packet;

class PacketController extends Controller
{

    public function index()
    {
        $data = Packet::all();
        return view('packet.home',[
            "data" => $data
        ]);
    }


    public function create()
    {
        $consumer = Consumer::all();
        return view('packet.create',[
        "consumer" => $consumer
        ]);
    }


    public function store(Request $req)
    {
        Packet::create([
        'name' => $req->name,
        'consumer_id' => $req->consumer_id
        ]);

        return redirect('/packet');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $packet = Packet::find($id);
        $consumer = Consumer::all();

        return view('packet.edit',[
            'data' => $packet,
            'consumer' => $consumer
        ]);
    }


    public function update(Request $req)
    {


        Packet::where('id', '=',$req->id)->update([
            'name' => $req->name,
            'consumer_id' => $req->consumer_id
        ]);
        return redirect('/packet');
    }



    public function destroy($id)
    {
        $data = Packet::find($id);
        $data->delete();
        return redirect('/packet');
    }
}
