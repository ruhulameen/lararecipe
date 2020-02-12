@extends('Author.app')

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
                                        <h3 class="card-title text-white">102</h3>
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
                                        <h3 class="card-title text-white">10</h3>
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
                                    <h3 class="card-title text-white">10254104</h3>
                                    <p class="card-text">View</p>
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
                        <th>Views</th>
                        <th>Favorite</th>
                        <th>Comments</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Vegan Recipes</td>
                        <td>124,214</td>
                        <td>14</td>
                        <td>147</td>
                        <td>Publish</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Vegan Recipes</td>
                        <td>124,214</td>
                        <td>14</td>
                        <td>147</td>
                        <td>Publish</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Vegan Recipes</td>
                        <td>124,214</td>
                        <td>14</td>
                        <td>147</td>
                        <td>Publish</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Vegan Recipes</td>
                        <td>124,214</td>
                        <td>14</td>
                        <td>147</td>
                        <td>Publish</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Vegan Recipes</td>
                        <td>124,214</td>
                        <td>14</td>
                        <td>147</td>
                        <td>Publish</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Vegan Recipes</td>
                        <td>124,214</td>
                        <td>14</td>
                        <td>147</td>
                        <td>Publish</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
@endsection

@push('js')

@endpush
