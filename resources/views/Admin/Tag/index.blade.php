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
                    <h3>Tags</h3>
                </div>
                <div class="float-right">
                    <a class="btn-lg btn-primary" href="{{route('admin.tag.create')}}"> Add New</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead class="bg-info text-white">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tags as $tag)
                    <tr>
                        <td>{{ $tag->id }}</td>
                        <td>{{ $tag->name }}</td>
                        <td>{{ $tag->slug }}</td>
                        <td>{{ $tag->created_at }}</td>
                        <td>...</td>
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
