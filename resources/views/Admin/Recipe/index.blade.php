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
                        <h3>Recipes</h3>
                    </div>
                    <div class="float-right">
                        <a class="btn-lg btn-primary" href="{{route('admin.recipe.create')}}"> Add New</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="bg-info text-white">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Total View</th>
                            <th>Status</th>
                            <th>Created At</th>
                            {{--<th>Updated At</th>--}}
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($recipes as $recipe)
                            <tr>
                                <td>{{ $recipe->id }}</td>
                                <td>{{ Str::limit($recipe->title,'30') }}</td>
                                <td>{{ $recipe->visited }}</td>
                                <td>
                                    @if($recipe->status == 1)
                                        <span class="badge badge-primary">Approved</span>
                                    @else
                                        <span class="badge badge-secondary">Pending</span>
                                    @endif
                                </td>
                                <td>{{ $recipe->created_at }}</td>
                                <td class="text-center">
                                    <a href="{{ route('author.recipe.show',$recipe->id) }}" class="btn btn-info waves-effect">
                                        <i class="fa fa-eye fa-lg"></i>
                                    </a>
                                    <a href="{{ route('author.recipe.edit',$recipe->id) }}" class="btn btn-info waves-effect">
                                        <i class="fa fa-edit fa-lg"></i>
                                    </a>
                                    <button class="btn btn-danger waves-effect" type="button" onclick="deletePost({{ $recipe->id }})">
                                        <i class="fa fa-trash fa-lg"></i>
                                    </button>
                                    <form id="delete-form-{{ $recipe->id }}" action="{{ route('author.recipe.destroy',$recipe->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
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
