<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perpage =$request->perpage ?? 2;
        return view('posts',[
            'posts'=>Post::paginate($perpage)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post_create',['departments'=> Department::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated =$request->validate([
            'name'=>'required|unique:posts|max:255',
            'department_id'=>'integer'

        ]);
        $post=new Post($validated);
        $post->save();
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('post_edit', ['post'=> Post::all()->where('id',$id)->first(),
            'departments'=>Department::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated =$request->validate([
            'name'=>'required|max:255',
            'department_id'=>'integer'
        ]);
        $post = Post::all()->where('id',$id)->first();
        $post->name=$validated['name'];
        $post->department_id=$validated['department_id'];
        $post->save();
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(! Gate::Allows('destroy-post', Post::all()->where('id',$id)->first())){
            return redirect('/error')->with('message','У вас нет разрешения на удаление должности с номером '.$id);
        }
        Post::destroy($id);
        return redirect('/posts');
    }
}
