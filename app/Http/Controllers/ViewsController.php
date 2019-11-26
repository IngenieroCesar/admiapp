<?php

namespace AdMi\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function apiindex()
    {
        return view('api.api');
    }

}


