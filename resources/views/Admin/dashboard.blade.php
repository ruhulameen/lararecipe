@extends('Admin.app')

@push('page_title')
    Dashboard
@endpush

@push('css')

@endpush

@section('content')
    <div class="container">
        <section class="padding-top-80 padding-bottom-80">
            <div class="card">
                <div class="card-header">
                    Overview
                </div>
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-md-3 col-lg-3">
                            <div class="card">
                                <div class="card-body bg-primary text-white">
                                    <div class="row">
                                        <div class="col-6">
                                            <i class="fa fa-utensils fa-4x"></i>
                                        </div>
                                        <div class="col-6">
                                            <h3 class="card-title text-white">{{ $recipes->count() }}</h3>
                                            <p class="card-text">Total Recipes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="card">
                                <div class="card-body bg-secondary text-white">
                                    <div class="row">
                                        <div class="col-6">
                                            <i class="fa fa-tasks fa-4x"></i>
                                        </div>
                                        <div class="col-6">
                                            <h3 class="card-title text-white">{{ $pending_recipes }}</h3>
                                            <p class="card-text">Pending</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="card">
                                <div class="card-body bg-danger text-white">
                                    <div class="row">
                                        <div class="col-6">
                                            <i class="fa fa-heart fa-4x"></i>
                                        </div>
                                        <div class="col-6">
                                            <h3 class="card-title text-white">1025</h3>
                                            <p class="card-text">Favorite</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="card">
                                <div class="card-body bg-primary text-white">
                                    <div class="row">
                                        <div class="col-6">
                                            <i class="fa fa-eye fa-4x"></i>
                                        </div>
                                        <div class="col-6">
                                            <h3 class="card-title text-white">{{ $all_views }}</h3>
                                            <p class="card-text">View</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="card">
                                <div class="card-body bg-info text-white">
                                    <div class="row">
                                        <div class="col-6">
                                            <i class="fa fa-table fa-4x"></i>
                                        </div>
                                        <div class="col-6">
                                            <h3 class="card-title text-white">{{ $category_count }}</h3>
                                            <p class="card-text">Categories</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="card">
                                <div class="card-body bg-dark text-white">
                                    <div class="row">
                                        <div class="col-6">
                                            <i class="fa fa-tags fa-4x"></i>
                                        </div>
                                        <div class="col-6">
                                            <h3 class="card-title text-white">{{ $tag_count }}</h3>
                                            <p class="card-text">Tags</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="card">
                                <div class="card-body bg-success text-white">
                                    <div class="row">
                                        <div class="col-6">
                                            <i class="fa fa-users fa-4x"></i>
                                        </div>
                                        <div class="col-6">
                                            <h3 class="card-title text-white">{{ $author_count }}</h3>
                                            <p class="card-text">Total Authors</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="card">
                                <div class="card-body bg--primary text-white">
                                    <div class="row">
                                        <div class="col-6">
                                            <i class="fa fa-user fa-4x"></i>
                                        </div>
                                        <div class="col-6">
                                            <h3 class="card-title text-white">{{ $new_authors_today }}</h3>
                                            <p class="card-text">Today Authors</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            <div class="card">
            <div class="card-header">
                Top Popular Recipes
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead class="bg-info text-white">
                    <tr>
                        <th>Rank</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Views</th>
                        <th>Favorite</th>
                        <th>Comments</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($popular_recipes as $popular_recipe)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ Str::limit($popular_recipe->title,'20') }}</td>
                        <td>{{ $popular_recipe->user->name }}</td>
                        <td>{{ $popular_recipe->visited }}</td>
                        <td>{{ $popular_recipe->favorite_to_users_count }}</td>
                        <td>{{ $popular_recipe->comments_count }}</td>
                        <td>
                            @if($popular_recipe->status == true)
                                <span class="label bg-green">Published</span>
                            @else
                                <span class="label bg-red">Pending</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <section class="padding-top-80 padding-bottom-80">
            <div class="card">
            <div class="card-header">
                Top 10 Authors
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead class="bg-info text-white">
                    <tr>
                        <th>Rank</th>
                        <th>Name</th>
                        <th>Posts</th>
                        <th>Comments</th>
                        <th>Favorite</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($active_authors as $author)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $author->name }}</td>
                            <td>{{ $author->recipes_count }}</td>
                            <td>{{ $author->comments_count }}</td>
                            <td>{{ $author->favorite_recipes_count }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </section>
    </div>
    <br>
@endsection

@push('js')

@endpush
