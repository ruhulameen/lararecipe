@extends('Admin.app')

@push('page_title')
    Add New Recipe
@endpush

@push('css')

@endpush

@section('content')
    <!-- Submit Recipe Area Start Here -->
    <section class="submit-recipe-page-wrap padding-top-74 padding-bottom-50">
        <div class="container">
            <div class="row gutters-60">
                <div class="col-lg-12">
                    <form class="submit-recipe-form">
                        <div class="form-group">
                            <label>Recipe Title</label>
                            <input type="text" placeholder="Recipe Name" class="form-control" name="name"
                                   data-error="Subject field is required" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Choose Category</label>
                                    <select class="select2" name="category" data-placeholder="Select Category">
                                        <option value="0">Breakfast</option>
                                        <option value="1">Newest</option>
                                        <option value="2">Top Sell</option>
                                        <option value="3">Top Rated</option>
                                        <option value="4">Price High</option>
                                        <option value="5">Low Price</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Choose Tags</label>
                                    <select class="select2"  multiple="" name="tags[]" data-placeholder="Select Tags">
                                        <option value="0">Breakfast</option>
                                        <option value="1">Newest</option>
                                        <option value="2">Top Sell</option>
                                        <option value="3">Top Rated</option>
                                        <option value="4">Price High</option>
                                        <option value="5">Low Price</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea placeholder="Type your text" class="textarea form-control summernote" name="message" id="form-message"
                                      rows="7" cols="20" data-error="Message field is required" required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="additional-input-wrap">
                            <label>Upload your photos</label>
                            <div class="form-group">
                                <ul class="upload-img">
                                    <li><img src="{{asset('assets/img/figure/upload-banner1.jpg')}}" alt="Upload Image"></li>
                                    <li><img src="{{asset('assets/img/figure/upload-banner1.jpg')}}" alt="Upload Image"></li>
                                    <li><img src="{{asset('assets/img/figure/upload-banner1.jpg')}}" alt="Upload Image"></li>
                                    <li><img src="{{asset('assets/img/figure/upload-banner1.jpg')}}" alt="Upload Image"></li>
                                    <li><img src="{{asset('assets/img/figure/upload-banner1.jpg')}}" alt="Upload Image"></li>
                                </ul>
                                <button type="submit" class="btn-upload"><i class="fas fa-cloud-upload-alt"></i>UPLOAD</button>
                            </div>
                        </div>
                        <div class="additional-input-wrap">
                            <label>Additional Informations:</label>
                            <div class="row gutters-5">
                                <div class="col-lg-6">
                                    <div class="form-group additional-input-box icon-left">
                                        <i class="far fa-clock"></i>
                                        <input type="text" placeholder="Preparation Time: 00.00.00" class="form-control"
                                               name="name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group additional-input-box icon-left">
                                        <i class="fas fa-utensils"></i>
                                        <input type="text" placeholder="Cooking Time: 00.00.00" class="form-control"
                                               name="name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group additional-input-box icon-left">
                                        <i class="fas fa-users"></i>
                                        <input type="text" placeholder="Serving People: 00" class="form-control"
                                               name="name">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Ingredients:</label>
                            <textarea placeholder="Type ingredients one per line and hit ENTER for next ingredients" class="textarea form-control" name="message" id="form-message"
                                      rows="7" cols="20" data-error="Message field is required" required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label>Directions:</label>
                            <textarea placeholder="Type directions and hit ENTER for next directions" class="textarea form-control" name="message" id="form-message"
                                      rows="7" cols="20" data-error="Message field is required" required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="additional-input-wrap">
                            <label>Nutrition Facts:</label>
                            <div class="row gutters-5">
                                <div class="col-6">
                                    <div class="form-group additional-input-box icon-right">
                                        <input type="text" placeholder="Total Calories" class="form-control" name="calories">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group additional-input-box icon-right">
                                        <input type="text" placeholder="Sugar" class="form-control" name="sugar">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group additional-input-box icon-right">
                                        <input type="text" placeholder="Protein" class="form-control" name="protein">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group additional-input-box icon-right">
                                        <input type="text" placeholder="Fat" class="form-control" name="fat">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group additional-input-box icon-right">
                                        <input type="text" placeholder="Carbs" class="form-control" name="carbs">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group additional-input-box icon-right">
                                        <input type="text" placeholder="Food Fat" class="form-control" name="food_fat">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn-submit">SUBMIT RECIPE</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Submit Recipe Area End Here -->
@endsection

@push('js')

@endpush
