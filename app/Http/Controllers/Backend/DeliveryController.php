<?php

namespace tracking\Http\Controllers\Backend;

use Illuminate\Http\Request;

use tracking\Http\Requests;
use tracking\Http\Controllers\Controller;

class DeliveryController extends Controller
{
    public function index()
    {
    	return view('backend.delivery.index');
    }
}
