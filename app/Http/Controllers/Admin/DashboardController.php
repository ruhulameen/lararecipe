<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Recipe;
use App\Tag;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::all();
        $pending_recipes = Recipe::where('status',0)->count();
        $all_views = Recipe::sum('visited');
        $category_count = Category::all()->count();
        $tag_count = Tag::all()->count();
        $author_count = User::where('role_id',2)->count();
        $new_authors_today = User::where('role_id',2)
            ->whereDate('created_at',Carbon::today())->count();
        $popular_recipes = Recipe::withCount('comments')
            ->withCount('favorite_to_users')
            ->orderBy('visited','desc')
            ->orderBy('comments_count','desc')
            ->orderBy('favorite_to_users_count','desc')
            ->take(5)->get();
        $active_authors = User::where('role_id',2)
            ->withCount('recipes')
            ->withCount('comments')
            ->withCount('favorite_recipes')
            ->orderBy('recipes_count','desc')
            ->orderBy('comments_count','desc')
            ->orderBy('favorite_recipes_count','desc')
            ->take(10)->get();

        return view('Admin.dashboard',compact('recipes', 'pending_recipes', 'all_views', 'category_count', 'tag_count', 'author_count', 'new_authors_today','popular_recipes', 'active_authors'));
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
