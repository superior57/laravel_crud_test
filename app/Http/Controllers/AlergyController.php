<?php

namespace App\Http\Controllers;

use App\Models\Alergy;
use Illuminate\Http\Request;

class AlergyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alergies = Alergy::all();
        return view('alergy.create', compact('alergies'));
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function create()
    {
        $alergies = Alergy::all();
        return view('alergy.create', compact('alergies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
  
        Alergy::create($request->all());
   
        $alergies = Alergy::all();
        return view('alergy.create', compact('alergies'))->with('success','Alergy created successfully.');
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Post  $post
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Post $post)
    // {
    //     return view('food.show',compact('post'));
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Post  $post
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Post $post)
    // {
    //     return view('post.edit',compact('post'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Post  $post
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Post $post)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'detail' => 'required',
    //     ]);
  
    //     $post->update($request->all());
  
    //     return redirect()->route('posts.index')->with('success','Post updated successfully');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Post  $post
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Post $post)
    // {
    //     $post->delete();
  
    //     return redirect()->route('posts.index')->with('success','Post deleted successfully');
    // }
}
