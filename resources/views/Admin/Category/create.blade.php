@extends('Admin.app')

@push('page_title')
    Add New Category
@endpush

@push('css')

@endpush

@section('content')
    <!-- Submit Recipe Area Start Here -->
    <section class="submit-recipe-page-wrap padding-top-74 padding-bottom-50">
        <div class="container">
            <div class="row gutters-60">
                <div class="col-lg-12">
                    <form class="submit-recipe-form" action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" placeholder="Category Name" class="form-control" name="name"
                                   data-error="Subject field is required" required>
                            <div class="help-block with-errors"></div>
                        </div>

                        <button type="submit" class="btn-submit">SUBMIT NOW</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Submit Recipe Area End Here -->
@endsection

@push('js')

@endpush
