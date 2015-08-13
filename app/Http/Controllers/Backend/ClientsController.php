<?php

namespace tracking\Http\Controllers\Backend;

use Illuminate\Http\Request;

use tracking\Http\Requests;
use tracking\Http\Controllers\Controller;
use tracking\Client;
use tracking\Http\Requests\ClientFormRequest;
use Illuminate\Support\Str;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $clients = Client::where('status', 0)
                    ->orderBy('id', 'desc')
                    ->paginate(5);

        return view('backend.clients.index')->with('clients', $clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $post = new Client(array(
            'name' => $request->get('name'),
            'product' => $request->get('product'),
            'location' => $request->get('location'),
            'phone' => $request->get('phone'),
            //'track_code' => strtoupper(Str::random(6))
            'track_code'    => mt_rand()
        ));

        $post->save();
        return \Redirect::route('admin.clients.create')->with('message', 'A new client has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        return view('backend.clients.edit')->with('client', $client);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update($id, ClientFormRequest $request)
    {
        $client = Client::find($id);
        
        $client->name = $request->get('name');
        $client->product = $request->get('product');
        $client->location = $request->get('location');
        $client->phone = $request->get('phone');
        $client->status = $request->get('status');

        $client->save();

        /*$client->update([
            'name'      => $request->get('name'),
            'product'   => $request->get('product'),
            'location'  => $request->get('location'),
            'phone'     => $request->get('phone'),
            'status'    => $request->get('status'),
        ]);*/
        return \Redirect::route('admin.clients.edit', array($client->id))->with('message', 'Client has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
