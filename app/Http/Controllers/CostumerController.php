<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Packet;
// use App\Consumer;
use App\Costumer;

class CostumerController extends Controller
{

    public function index()
    {
        $data = Costumer::all();
        return view('costumer.home',[
            "data" => $data
        ]);
    }


    public function create()
    {
        // $consumer = Consumer::all();
        // return view('costumer.create',[
        // "consumer" => $consumer
        // ]);

        $packet = Packet::all();
        return view('costumer.create',[
        "packet" => $packet
        ]);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        // Costumer::create([
        //     'name' => $req->name,
        //     'alamat' =>$req->alamat,
        //     'phone' =>$req->phone,
        //     'email' =>$req->email,
        //     // 'consumer_id' => $req->consumer_id,
        //     'packet_id' => $req->packet_id

        //     ]);

        $cos = new Costumer;
        $cos->name = $req->name;
        $cos->alamat = $req->alamat;
        $cos->phone = $req->phone;
        $cos->email = $req->email;
        $cos->packet_id = $req->packet_id;
        $cos->save();


            return redirect('/costumer');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $costumer = Costumer::find($id);
        $packet = Packet::all();
        // $consumer = Consumer::all();
        // $department = Department::where('id', '=',$id)-> first();
        // dd($data);
        return view('costumer.edit',[
            'data' => $costumer,
            // 'consumer' => $consumer,
            'packet' => $packet

        ]);
    }


    public function update(Request $req)
    {
        Costumer::where('id', '=',$req->id)->update([
            'name' => $req->name,
            'alamat' =>$req->alamat,
            'phone' =>$req->phone,
            'email' =>$req->email,
            // 'consumer_id' => $req->consumer_id,
            'packet_id' => $req->packet_id
        ]);




        return redirect('/costumer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Costumer::find($id);
        $data->delete();
        return redirect('/costumer');

    }
}
