<?php

namespace App\Http\Controllers;

use App\Models\Yt;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $data = Yt::orderBy('viewCount', 'desc')->get();
        return view('Depan/Index', compact('data'));
    }
}
