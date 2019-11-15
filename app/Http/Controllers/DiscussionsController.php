<?php

namespace App\Http\Controllers;

use Session;    
use Auth;
use App\Discussion;
use Illuminate\Http\Request;

class DiscussionsController extends Controller
{
    public function create()
    {
        return view('discuss');
    }
    public function store()
    {
        $r = request();
        $this->validate($r, [
           'channel_id' => 'required',
           'title' => 'required',
           'content' => 'required' 
        ]);

        $discussion = Discussion::create([
            'title' => $r->title,
            'user_id' => Auth::id(),
            'channel_id' => $r->channel_id,
            'content'=> $r->content,
            'slug'=> str_slug($r->title)


        ]);

        Session::flash('success', 'Discussion created successfully!');

        return redirect()->route('discussion', ['slug'=> $discussion->slug]);
    }

    public function show($slug) 
    {
       
        return view('discussions.show')->with('discussion',Discussion::where('slug', $slug)->first());

    }
}
