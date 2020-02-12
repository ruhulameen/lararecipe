<?php

namespace App\Http\Controllers\Author;

use App\Category;
use App\Http\Controllers\Controller;
use App\Nutrition;
use App\Recipe;
use App\User;
use App\Tag;
use Carbon\Carbon;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Auth::user()->recipes()->latest()->get();
        return view('Author.Recipe.index', compact('recipes'));
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
        return view('Author.Recipe.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            //'image' => 'required',
            //'categories' => 'required',
            'tags' => 'required',
            //'body' => 'required',
        ]);
        //$image = $request->file('image');
        $slug = Str::slug($request->title);
        /*if(isset($image))
        {
//            make unipue name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('recipe'))
            {
                Storage::disk('public')->makeDirectory('recipe');
            }

            $postImage = Image::make($image)->resize(1600,1066)->save();
            Storage::disk('public')->put('recipe/'.$imageName,$postImage);

        } else {
            $imageName = "default.png";
        }*/
        $post = new Recipe();
        $post->user_id = Auth::id();
        $post->title = Str::title($request->title);
        $post->slug = $slug;
        $post->category = $request->category;
        $post->serves =$request->serves;
        $post->prepare_time = $request->prepare_time;
        $post->cooking_time = $request->cooking_time;
        //$post->featured_image = $imageName;
        $post->description = $request->description;
        $post->ingredients = $request->ingredients;
        $post->directions = $request->directions;

        if(isset($request->status))
        {
            $post->status = true;
        }else {
            $post->status = false;
        }
        $post->save();

        $nutrition = new Nutrition();
        $nutrition->recipe_id = $post->id;
        $nutrition->calories = $request->calories;
        $nutrition->sugar = $request->sugar;
        $nutrition->protein = $request->protein;
        $nutrition->fat = $request->fat;
        $nutrition->carbs = $request->carbs;
        $nutrition->food_fat = $request->food_fat;
        $nutrition->save();



        //$post->categories()->attach($request->categories);
        $post->tags()->attach($request->tags);

        //$users = User::where('role_id','1')->get();
        //Notification::send($users, new NewAuthorPost($post));
        //Toastr::success('Post Successfully Saved :)','Success');
        return redirect()->route('author.recipe.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Author.Recipe.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Author.Recipe.edit');
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
        //
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
    }
}
