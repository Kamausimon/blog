<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            //fetch data from the database
            $posts = Post::all();
            //pass that data to the view
            return view('post.index')->with('posts', $posts);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'unable to retrieve the posts']);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { //return the view
        return View('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate the data
        $request->validate([
            'title' => 'required|max:255',
            'context' => 'required'
        ]);
        //store the dta in the database
        $post = new Post;
        $post->title = $request->input('title');
        $post->context = $request->input('context');
        $post->user_id = auth()->id();
        $post->save();

        //redirect the user to show the post
        return redirect()->route('post.show', $post)->with('success', 'post created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //shows one specific post from the db
        $post = Post::with('comments')->find($id);
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //for editing the post
        $post = Post::find($id);

        if (!$post) {
            abort(404);
        }

        return view('post.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //for updating the [post]
        //validate the data
        $request->validate([
            'title' => 'required|max:255',
            'context' => 'required'
        ]);

        //find the pos in the db by id 
        $post = Post::find($id);

        //if id doesnt exit return a 404 error
        if (!$post) {
            abort(404);
        }
        //if present update
        $post->title = $request->input('title');
        $post->context = $request->input('context');

        //save the post
        $post->save();

        //redirect the user to show the post
        return redirect()->route('post.show', ['id' => $post->id]);
    }

    public function confirmDelete(string $id)
    {
        $post = Post::findorFail($id);
        return view('post.confirmDelete')->with('post', $post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //for deleting the post
        $post = Post::find($id);

        //if post is not there abort
        if (!$post) {
            abort(404);
        }


        //if not the creator you cant delete
        if ($post && $post->user_id === auth()->id()) {
            //delete the post
            $post->delete();
            return redirect()->route('profile.dashboard')->with('message', 'post deleted successfully');
        }




        //redirect the user back to the dashboard
        return redirect()->route('profile.dashboard')->with('success', 'post deleted successfully');
    }
}
