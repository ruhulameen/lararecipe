@extends('Admin.app')

@push('page_title')
    Manage Recipes
@endpush

@push('css')

@endpush

@section('content')
    <div class="container">
        <section class="padding-top-80 padding-bottom-80">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h3>Authors</h3>
                </div>
                <div class="float-right">
                    <a class="btn-lg btn-primary" href="{{route('author.recipe.create')}}"> Add New</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead class="bg-info text-white">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Total Recipe</th>
                        <th>Total Comments</th>
                        <th>Status</th>
                        <th>Created At</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($authors as $authors)
                    <tr>
                        <td>{{$authors->id}}</td>
                        <td>{{$authors->name}}</td>
                        <td>{{$authors->email}}</td>
                        <td>{{$authors->recipes_count}}</td>
                        <td>{{$authors->comments_count}}</td>
                        <td>Approved</td>
                        <td>{{$authors->created_at}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </section>
    </div>
@endsection

@push('js')

@endpush
