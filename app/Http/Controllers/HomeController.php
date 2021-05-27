<?php

namespace App\Http\Controllers;

use App\Models\Yt;
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
        
        $cek = Yt::where('id_youtube', $youtube_id)->first();

        if (!$cek) {
            $data = Yt::create([
                'title' => $video->snippet->title,
                'description' => $video->snippet->description,
                'tag' => $tag,  
                'publishedAt' => $video->snippet->publishedAt,
                'viewCount' => $video->statistics->viewCount,
                'likeCount' => $video->statistics->likeCount,
                'dislikeCount' => $video->statistics->dislikeCount,
                'commentCount' => $video->statistics->commentCount,
                'thumbnails' => $video->snippet->thumbnails->medium->url,
                'id_youtube' => $youtube_id
            ]);
            return redirect()->back()->with('sukses', 'Success Add Newest Videos');
        }elseif($cek){
            return redirect()->back()->with('gagal', 'Failed Add Videos Because This Video Already Exists');

        }

       
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
