<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Image;
use Purifier;


class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // create a variable and store all the blog posts in it from the database

        //paginate - its a method witch allow to separate by pages all data from the database
        $posts = Post::orderBy('id', 'desc')->paginate(5);

        //return a view and pass in the above variable
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts.create')->with('categories', $categories)->with('tags', $tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        // validate the data. if it doesn't validate, it sends to create method
        $this->validate($request, array(
            'title' => 'required|max:255',
            'slug' => 'required|alpha_dash|min:5|max:255',
            'category_id' => 'required|integer',
            'body' => 'required'
        ));

        // store in the database
        $post = new Post;

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category_id = $request->category_id;
        $post->body = Purifier::clean($request->body);

        //Save the image
        if ($request->hasFile('featured_image')) {

            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/posts_images' . $filename);
            Image::make($image)->resize(800, 400)->save($location);

            $post->image = $filename;
        }

        $post->save();

        $post->tags()->sync($request->tags, false);

        Session::flash('success', 'The blog post was successfully save!');

        //redirect to another page(show method)
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find a post in a database and save it to a variable
        $post = Post::find($id);
        $categories = Category::all();
        $cats = [];
        foreach ($categories as $category){
            $cats[$category->id] = $category->name;
        }

        $tags = Tag::all();
        $tags2 = array();

        foreach ($tags as $tag) {
            $tags2[$tag->id] = $tag->name;
        }

        //return a view and pass oin the var we previously created
        return view('posts.edit')->with('post', $post)->with('categories', $cats)->with('tags', $tags2);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Save the data to the database
        $post = Post::find($id);

        //Validate the data
        if ($request->input('slug') == $post->slug) {

            $this->validate($request, array(
                'title' => 'required|max:255',
                'category_id' => 'required|integer',
                'body' => 'required'
            ));

        } else {

            $this->validate($request, array(
                'title' => 'required|max:255',
                'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
                'category_id' => 'required|integer',
                'body' => 'required'
            ));

        }

        $post -> title = $request -> input('title');
        $post -> slug = $request -> input('slug');
        $post -> category_id = $request -> input('category_id');
        $post -> body = Purifier::clean($request -> input('body'));

        $post -> save();

        if (isset($request->tags)) {

            $post->tags()->sync($request->tags);

        } else {

            $post->tags()->sync(array());

        }


        //Set flash data with success message
        Session::Flash('success', 'This post was successfully saved.');

        //Redirect with flash data to post.show
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::find($id);
        $post->tags()->detach();

        $post -> delete();

        Session::flash('success', 'The post was successfully deleted.');
        return redirect()->route('posts.index');
    }
}
