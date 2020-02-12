<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\Http\Controllers\Controller;
use App\Nutrition;
use App\Recipe;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::published()->latest()->paginate(10);
        $featured_recipes = Recipe::where('is_featured', 1)->published()->take(3)->latest()->get();
        return view('Frontend.home',compact('recipes', 'featured_recipes'));
        //return view('');
    }

    public function details($slug)
    {
        $recipe = Recipe::where('slug',$slug)->published()->first();
        $nutrition = Nutrition::where('recipe_id',$recipe->id)->first();;
        $blogKey = 'blog_' . $recipe->id;

        if (!Session::has($blogKey)) {
            $recipe->increment('visited');
            Session::put($blogKey,1);
        }

        $random_recipes = Recipe::published()->take(3)->inRandomOrder()->get();
        return view('Frontend.recipe_details',compact('recipe', 'nutrition', 'random_recipes'));
    }

    public function RecipeByTag($slug)
    {
        $tag = Tag::where('slug',$slug)->first();
        $recipes = $tag->recipes()->published()->get();
        return view('tag',compact('tag','recipes'));
    }


    public function RecipeByCategory($slug)
    {
        $category = Category::where('slug',$slug)->first();
        $recipes = Recipe::where('category',$category)->get();
        return view('category',compact('category','recipes'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
