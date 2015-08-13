<?php

namespace tracking\Http\Controllers;

use Illuminate\Http\Request;

use tracking\Http\Requests;
use tracking\Http\Controllers\Controller;
use tracking\Http\Requests\TrackFormRequest;
use tracking\Client;
use tracking\Comment;

class TracksController extends Controller
{
    public function index()
    {
        return view('frontend.tracks.index');
    }

    public function tracks(TrackFormRequest $request)
    {
        $code = $request->get('track_code');

        $client = Client::where('track_code', $code)->firstOrFail();

        $client->comments()->where('client_id', $client->id)->get();

        return view('frontend.tracks.view')->with('client', $client); 
        //return $client->comments['comments'];
    }
}
