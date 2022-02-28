<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class OwnPostController extends Controller
{
    // function __construct()
    // {
    //      $this->middleware('permission:Pregled Objava|Stvaranje Objava|Uredjivanje Objava|Brisanje Objava ', ['only' => ['index','store']]);
    //      $this->middleware('permission:Stvaranje Objava', ['only' => ['create','store']]);
    //      $this->middleware('permission:Uredjivanje Objava', ['only' => ['edit','update']]);
    //      $this->middleware('permission:Brisanje Objava', ['only' => ['destroy']]);
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
           $user = auth()->user();
           $user_id=$user->id;
        //   $userposts=Post::all()->where('user_id',$user_id);
           $posts= Post::orderBy('id','ASC')->where('user_id',$user_id)->paginate(10);
            return view('ownposts.home',compact('posts'),['user'=>$user])
            ->with('i', ($request->input('page', 1) - 1) * 5);

        
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = Post::get();
         return view('ownposts.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $user = auth()->user();
        $post=new Post;
        $post->user_id=$user->id;
        $post->title=$request->title;
        $post->description=$request->description;

        $image=$request->file('image');

        if($image!=null){
            $imagename=$user->id.$image->getClientOriginalName();
            $extension=$image->getClientOriginalExtension();

            $image->move('image',$post->title.'.'.$extension);
            $path='image/'.$post->title.'.'.$extension;
            $post->image=$path;
        }
        $post->save();

        return Redirect::To('profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $user = auth()->user();
        $post = Post::find($id);
        return view('ownposts.show',['post'=>$post],['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post,$id)
    {
        $post=Post::find($id);
          $user = auth()->user();
          $user_id=$user->id;
          $post_user_id=$post->user_id;
         
          if($post_user_id==$user_id){
            $post=Post::find($id);
            if(Auth::check()){
                return view('ownposts.edit',['post'=>$post]);
            }
          }
       else{
           return Redirect::To('profile');
       }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post,$id)
    {
        $user = auth()->user();
        $post=Post::find($id);
        $post->user_id=$post->user_id;
        $post->title=$request->title;
        $post->description=$request->description;

        $image=$request->file('image');

        if($image!=null){
            $imagename=$user->id.$image->getClientOriginalName();
            $extension=$image->getClientOriginalExtension();

            $image->move('image',$post->title.'.'.$extension);
            $path='image/'.$post->title.'.'.$extension;
            $post->image=$path;
        }
        $post->save();

        return redirect()->route('own-posts.show',$post->id)->with('success','Objava uspesno uredjena');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        $user = auth()->user();
        $user_id=$user->id;
        $post_user_id=$post->user_id;
       
        if($post_user_id==$user_id){
        Post::find($id)->delete();
        return redirect()->route('profile.index')
                        ->with('success','Objava uspesno izbrisana');
        }
        else{
            return Redirect::To('profile');
        }
    }
}
