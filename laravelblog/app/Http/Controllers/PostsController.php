<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Auth;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::orderBy('updated_at','DESC')->get();
 
        return view('blog.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post=new Post();
        $post->title=$request->input('title');
        $post->description=$request->input('description');
        $post->user_id = Auth::user()->id;
        $post->created_at =new \DateTime();
        $post->updated_at=new \DateTime();
       // $imageName = time().'.'.$request->image->extension();  
        //$request->image->move(public_path('images'), $imageName);
        $image=$request->file('image');
         $image_name=date('dmy_H_s_i');
         $ext=strtolower($image->getClientOriginalExtension());
         $image_full_name=$image_name.".".$ext;
         $upload_path='public/image/';
         $image_url=$upload_path.$image_full_name;
         $success=$image->move($upload_path,$image_full_name);
         $post->image_path=$image_url;
         $post->save();
         $slug=SlugService::createSlug(Post::class, 'slug', $request->title);
        return redirect('/blog')->with('message','Your post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post=Post::where('slug',$slug)->first();
       return view('blog.show')->with('post',$post); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $post=Post::where('slug',$slug)->first();
        return view('blog.edit')->with('post',$post); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $post= Post::where('slug',$slug)->first();
        $post->title=$request->input('title');
        $post->description=$request->input('description');
        $post->user_id = Auth::user()->id;
        $post->updated_at=new \DateTime();
       // $imageName = time().'.'.$request->image->extension();  
        //$request->image->move(public_path('images'), $imageName);
        $image=$request->file('image');
        if($request->hasFile('image')){
         $image_name=date('dmy_H_s_i');
         $ext=strtolower($image->getClientOriginalExtension());
         $image_full_name=$image_name.".".$ext;
         $upload_path='public/image/';
         $image_url=$upload_path.$image_full_name;
         $success=$image->move($upload_path,$image_full_name);
         $post->image_path=$image_url;
        }
         $slug=SlugService::createSlug(Post::class, 'slug', $request->title);

         $post->save();
        return redirect('/blog')->with('message','Your post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post= Post::where('slug',$slug)->first();
        $post->delete();

        return redirect('/blog')->with('message','Your post has been removed!');
    }
}
