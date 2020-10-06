<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class LoggedController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function create(){

    return view('post-create');
  }

  public function store(Request $request){

    $data = $request -> all();
    $post = Post::create($data);


    return redirect() -> route('post.show', $post -> id);
  }

  public function edit($id){

    $post = Post::findOrFail($id);

    return view('post-edit', compact('post'));

  }

  public function update(Request $request, $id){

    $data = $request -> all();
    $post = Post::findOrFail($id);

    $post -> update($data);

    return redirect() -> route('post.show', $id);

  }

  public function delete($id){

    $post = Post::findOrFail($id);
    $post -> delete();

    return redirect() -> route('post.index');
  }
}
