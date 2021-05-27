<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Alaouy\Youtube\Facades\Youtube;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tag = Tag::all();
        return view('Dashboard/Index', compact('tag'));
    }
    public function insertVideo(Request $request)
    {
        $link = $request->input('link');
        $tag  = $request->input('tag');

        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $link, $match);
        $youtube_id = $match[1];


        $video = Youtube::getVideoInfo($youtube_id);
        
        $data = Yt::create([
            'title' => $video->snippet->title,
            'description' => $video->snippet->description,
            'tag' => $tag,
            'publishedAt' => $video->snippet->publishedAt,
            'likeCount' => $video->
        ])
    }

    public function insertTag(Request $request)
    {
        $cek = Tag::where('tag', $request->input('tag'))->exists();
        if (!$cek) {
            $data = Tag::create($request->all());
            return redirect()->back()->with('sukses', 'Success Added New Tag');
        }elseif($cek){
            return redirect()->back()->with('gagal', 'Failed Add New Tag Because Tag Is Already Exists');
        }
    }
}
