@extends('Frontend.app')

@section('content')
    <!-- Inne Page Banner Area Start Here -->
    <!-- Inne Page Banner Area End Here -->
    <!-- Slider Area Start Here -->
    <section class="ranna-slider-area">
        <div class="container">
            <div class="rc-carousel nav-control-layout2" data-loop="true" data-items="30" data-margin="5"
                 data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="700" data-dots="false"
                 data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
                 data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="true" data-r-x-medium-dots="false"
                 data-r-small="1" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="1"
                 data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="1" data-r-large-nav="true"
                 data-r-large-dots="false" data-r-extra-large="1" data-r-extra-large-nav="true"
                 data-r-extra-large-dots="false">
                @foreach($featured_recipes as $featured_recipe)
                <div class="ranna-slider-content-layout1">
                    <figure class="item-figure"><a href="{{ route('frontend.recipe.details',$featured_recipe->slug) }}"><img src="{{asset('assets/img/slider/slide1-1.jpg')}}" alt="Product"></a></figure>
                    <div class="item-content">
                        <span class="sub-title">{{ $featured_recipe->category }}</span>
                        <h2 class="item-title"><a href="{{ route('frontend.recipe.details',$featured_recipe->slug) }}">{{ $featured_recipe->title }}</a></h2>
                        <ul class="item-rating">
                            <li class="star-fill"><i class="fas fa-star"></i></li>
                            <li class="star-fill"><i class="fas fa-star"></i></li>
                            <li class="star-fill"><i class="fas fa-star"></i></li>
                            <li class="star-fill"><i class="fas fa-star"></i></li>
                            <li class="star-empty"><i class="fas fa-star"></i></li>
                            <li><span>9<span> / 10</span></span> </li>
                        </ul>
                        <p>More off this less hello salamander lied porpoise much over tightly circa
                            outside crud mightily rigorouse. </p>
                        <ul class="entry-meta">
                            <li><a href="#"><i class="fas fa-clock"></i>15 Mins</a></li>
                            <li><a href="#"><i class="fas fa-user"></i>by <span>{{ $featured_recipe->user->name }}</span></a></li>
                            <li><a href="#"><i class="fas fa-heart"></i><span>02</span> Likes</a></li>
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Slider Area End Here -->
    <!-- Recipe With Sidebar Area Start Here -->
    <section class="all-recipes-page-wrap padding-top-80 padding-bottom-22">
        <div class="container">
            <div class="row gutters-60">
                <div class="col-lg-8">
                    <div class="adv-search-wrap">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Author Name or Recipe Search . . ." />
                            <div class="btn-group">
                                <div class="input-group-btn">
                                    <button type="button" id="adv-serch" class="btn-adv-serch">
                                        <i class="icon-plus flaticon-add-plus-button"></i>
                                        <i class="icon-minus fas fa-minus"></i>
                                        Advanced Search</button>
                                </div>
                                <div class="input-group-btn">
                                    <button type="submit" class="btn-search"><i class="flaticon-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="advance-search-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h3 class="item-title">BY CATEGORIES</h3>
                                    <ul class="search-items">
                                        <li>
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox101" type="checkbox">
                                                <label for="checkbox101">Baking</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox102" type="checkbox">
                                                <label for="checkbox102">Dinner</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox103" type="checkbox">
                                                <label for="checkbox103">Lunch</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox104" type="checkbox">
                                                <label for="checkbox104">Sea Food</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox105" type="checkbox">
                                                <label for="checkbox105">Sweets</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <h3 class="item-title">BY INGREDIENTS</h3>
                                    <ul class="search-items">
                                        <li>
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox106" type="checkbox">
                                                <label for="checkbox106">Oil</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox107" type="checkbox">
                                                <label for="checkbox107">Vegitables</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox108" type="checkbox">
                                                <label for="checkbox108">Fish</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox109" type="checkbox">
                                                <label for="checkbox109">White Salt</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox110" type="checkbox">
                                                <label for="checkbox110">Pizza

                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox111" type="checkbox">
                                                <label for="checkbox111">Meat</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox112" type="checkbox">
                                                <label for="checkbox112">Juice</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <h3 class="item-title">BY CUISINE</h3>
                                    <ul class="search-items">
                                        <li>
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox113" type="checkbox">
                                                <label for="checkbox113">Indian</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox114" type="checkbox">
                                                <label for="checkbox114">Italian</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox115" type="checkbox">
                                                <label for="checkbox115">Maxican</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox116" type="checkbox">
                                                <label for="checkbox116">Bengali</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox117" type="checkbox">
                                                <label for="checkbox117">Franch</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <h3 class="item-title">BY METHOD</h3>
                                    <ul class="search-items">
                                        <li>
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox118" type="checkbox">
                                                <label for="checkbox118">Baking</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox119" type="checkbox">
                                                <label for="checkbox119">Freezing</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox120" type="checkbox">
                                                <label for="checkbox120">Frying</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox121" type="checkbox">
                                                <label for="checkbox121">Grilling</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        @foreach($recipes as $recipe)
                        <div class="col-md-6 col-12">
                            <div class="product-box-layout1">
                                <figure class="item-figure"><a href="{{ route('frontend.recipe.details',$recipe->slug) }}"><img src="{{asset('assets/img/product/product50.jpg')}}"
                                                                                               alt="Product"></a></figure>
                                <div class="item-content">
                                    <span class="sub-title">{{ $recipe->category }}</span>
                                    <h3 class="item-title"><a href="{{route('frontend.recipe.details', $recipe->slug)}}">{{ $recipe->title }}</a></h3>
                                    <ul class="item-rating">
                                        <li class="star-fill"><i class="fas fa-star"></i></li>
                                        <li class="star-fill"><i class="fas fa-star"></i></li>
                                        <li class="star-fill"><i class="fas fa-star"></i></li>
                                        <li class="star-fill"><i class="fas fa-star"></i></li>
                                        <li class="star-empty"><i class="fas fa-star"></i></li>
                                        <li><span>9<span> / 10</span></span> </li>
                                    </ul>
                                    <p>{!! $recipe->description !!}</p>
                                    <ul class="entry-meta">
                                        <li><a href="#"><i class="fas fa-clock"></i>15 Mins</a></li>
                                        <li><a href="#"><i class="fas fa-user"></i>by <span>{{ $recipe->user->name }}</span></a></li>
                                        <li><a href="#"><i class="fas fa-heart"></i><span>02</span> Likes</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                   <div class="text-center">{{ $recipes->links() }}</div>
                </div>

                <!-- Sidebar-->
                @include('Frontend.sidebar')

            </div>
        </div>
    </section>
    <!-- Recipe With Sidebar Area End Here -->
@endsection
