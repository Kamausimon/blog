<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //fetch data from the database
        //pass that data to the view
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
        //stores the data generated from the create
        //validates the data to make sure it is correct before storing
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //shows one specific post from the db

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //for editing the post
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //for updating the [post]
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //for deleting the post
    }
}
