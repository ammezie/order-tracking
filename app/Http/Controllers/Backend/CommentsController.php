<?php

namespace tracking\Http\Controllers\Backend;

use Illuminate\Http\Request;

use tracking\Http\Requests;
use tracking\Http\Controllers\Controller;
use tracking\Http\Requests\UpdateOrderFormRequest;
use tracking\Client;
use tracking\Comment;

class CommentsController extends Controller
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

        return view('backend.comments.index')->with('clients', $clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //return view('backend.comments.update');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $client = Client::find($id);
        $client->comments()->where('client_id', $id)->get();

        return view('backend.comments.update')->with('client', $client);
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
        return view('backend.comments.update')->with('client', $client);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update($id, UpdateOrderFormRequest $request)
    {
        $client = Client::find($id);

        $comment = new Comment;
        $comment->comments   = $request->get('comment');
        $comment->time      = $request->get('time');
        $comment->date      = $request->get('date');

        $client->comments()->save($comment);

        return \Redirect::route('admin.orders.edit', array($client->id))->with('message', 'Order has been updated!');
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
