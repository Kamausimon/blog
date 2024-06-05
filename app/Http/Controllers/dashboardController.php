<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(15);
        return view('profile.dashboard', ['posts' => $posts]);
    }

    //display user's posts only 

    public function ownPosts()
    {
        $posts = Post::where('user_id', auth()->id())->paginate(15);

        return view('profile.ownPosts', ['posts' => $posts]);
    }


    public function search(Request $request)
    {
        $query = $request->input('query');

        $posts = Post::where('title', 'like', "%{$query}%")->orWhere('context', 'like', "%{$query}%")->paginate(15);


        return view('profile.dashboard', ['posts' => $posts]);
    }

    public function myProfile()
    {
        $user = auth()->user();

        return view('profile.MyProfile', ['user' => $user]);
    }
}
