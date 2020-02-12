@extends('Frontend.app')

@section('content')
    <!-- Inne Page Banner Area Start Here -->
    <!-- Inne Page Banner Area End Here -->
    <!-- Single Recipe With Sidebar Area Start Here -->
    <section class="single-recipe-wrap-layout1 padding-top-74 padding-bottom-50">
        <div class="container">
            <div class="row gutters-60">
                <div class="col-lg-8">
                    <div class="single-recipe-layout1">
                        <div class="ctg-name">{{ $recipe->category }}</div>
                        <h2 class="item-title">{{ $recipe->title }}</h2>
                        <div class="row mb-4">
                            <div class="col-xl-9 col-12">
                                <ul class="entry-meta">
                                    <li class="single-meta"><i class="far fa-calendar-alt"></i> {{ $recipe->created_at->format('h:i A, M d, Y') }}</li>
                                    <li class="single-meta"><a href="#"><i class="fas fa-user"></i>by <span>{{ $recipe->user->name }}</span></a></li>
                                    <li class="single-meta">
                                        <ul class="item-rating">
                                            <li class="star-fill"><i class="fas fa-star"></i></li>
                                            <li class="star-fill"><i class="fas fa-star"></i></li>
                                            <li class="star-fill"><i class="fas fa-star"></i></li>
                                            <li class="star-fill"><i class="fas fa-star"></i></li>
                                            <li class="star-empty"><i class="fas fa-star"></i></li>
                                            <li><span>9<span> / 10</span></span> </li>
                                        </ul>
                                    </li>
                                    <li class="single-meta"><a href="#"><i class="fas fa-heart"></i><span>02</span>
                                            Likes</a></li>
                                </ul>
                            </div>
                            <div class="col-xl-3 col-12">
                                <ul class="action-item">
                                    <li><button><i class="fas fa-print"></i></button></li>
                                    <li><button><i class="fas fa-expand-arrows-alt"></i></button></li>
                                    <li class="action-share-hover"><button><i class="fas fa-share-alt"></i></button>
                                        <div class="action-share-wrap">
                                            <a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#" title="twitter"><i class="fab fa-twitter"></i></a>
                                            <a href="#" title="linkedin"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="#" title="pinterest"><i class="fab fa-pinterest-p"></i></a>
                                            <a href="#" title="skype"><i class="fab fa-skype"></i></a>
                                            <a href="#" title="rss"><i class="fas fa-rss"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="item-figure">
                            <img src="{{asset('assets/img/product/single-product1.jpg')}}" alt="Product">
                        </div>
                        <div class="item-feature">
                            <ul>
                                <li>
                                    <div class="feature-wrap">
                                        <div class="media">
                                            <div class="feature-icon">
                                                <i class="far fa-clock"></i>
                                            </div>
                                            <div class="media-body space-sm">
                                                <div class="feature-title">PREP TIME</div>
                                                <div class="feature-sub-title">{{ $recipe->prepare_time }} Mins</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="feature-wrap">
                                        <div class="media">
                                            <div class="feature-icon">
                                                <i class="fas fa-utensils"></i>
                                            </div>
                                            <div class="media-body space-sm">
                                                <div class="feature-title">COOK TIME</div>
                                                <div class="feature-sub-title">{{ $recipe->cooking_time }} Mins</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="feature-wrap">
                                        <div class="media">
                                            <div class="feature-icon">
                                                <i class="fas fa-users"></i>
                                            </div>
                                            <div class="media-body space-sm">
                                                <div class="feature-title">SERVING</div>
                                                <div class="feature-sub-title">{{ $recipe->serves }} People</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="feature-wrap">
                                        <div class="media">
                                            <div class="feature-icon">
                                                <i class="far fa-eye"></i>
                                            </div>
                                            <div class="media-body space-sm">
                                                <div class="feature-title">VIEWS</div>
                                                <div class="feature-sub-title">{{ $recipe->visited }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="item-description">
                            {!! html_entity_decode($recipe->description) !!}
                        </div>
                        <div class="making-elements-wrap">
                            <div class="row">
                                <div class="col-xl-6 col-12">
                                    <div class="ingridients-wrap">
                                        <h3 class="item-title"><i class="fas fa-list-ul"></i>Ingridients</h3>
                                        @foreach(explode("\n", $recipe->ingredients) as $ingredients)
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox{{$loop->iteration}}" type="checkbox">
                                            <label for="checkbox{{$loop->iteration}}">{{$ingredients}}</label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-xl-6 col-12">
                                    <div class="nutrition-wrap">
                                        <h3 class="item-title"><i class="fas fa-info"></i>Nutrition</h3>
                                        <ul class="nutrition-list">
                                            <li>
                                                <div class="nutrition-name">Calories</div>
                                                <div class="nutrition-value">
                                                    @if($nutrition->calories == null)
                                                        N/A
                                                        @else
                                                        {{ $nutrition->calories }}
                                                    @endif</div>
                                            </li>
                                            <li>
                                                <div class="nutrition-name">Sugar</div>
                                                <div class="nutrition-value">
                                                    @if($nutrition->sugar == null)
                                                        N/A
                                                    @else
                                                        {{ $nutrition->sugar }}g
                                                    @endif</div>
                                            </li>
                                            <li>
                                                <div class="nutrition-name">Protein</div>
                                                <div class="nutrition-value">
                                                    @if($nutrition->protein == null)
                                                        N/A
                                                    @else
                                                        {{ $nutrition->protein }}g
                                                    @endif</div>
                                            </li>
                                            <li>
                                                <div class="nutrition-name">Fat</div>
                                                <div class="nutrition-value">
                                                    @if($nutrition->fat == null)
                                                        N/A
                                                    @else
                                                        {{ $nutrition->fat }}g
                                                    @endif</div>
                                            </li>
                                            <li>
                                                <div class="nutrition-name">Carbs</div>
                                                <div class="nutrition-value">
                                                    @if($nutrition->cabs == null)
                                                        N/A
                                                    @else
                                                        {{ $nutrition->cabs }}g
                                                    @endif</div>
                                            </li>
                                            <li>
                                                <div class="nutrition-name">Food Fat</div>
                                                <div class="nutrition-value">
                                                    @if($nutrition->food_fat == null)
                                                        N/A
                                                    @else
                                                        {{ $nutrition->food_fat }}
                                                    @endif</div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--<div class="related-recipe">
                            <h4 class="heading-title">FROM OUR SHOP</h4>
                            <div class="rc-carousel nav-control-layout3" data-loop="true" data-items="5"
                                 data-margin="40" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="700"
                                 data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1"
                                 data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="1"
                                 data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2"
                                 data-r-small-nav="true" data-r-small-dots="false" data-r-medium="1"
                                 data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="2"
                                 data-r-large-nav="true" data-r-large-dots="false" data-r-extra-large="2"
                                 data-r-extra-large-nav="true" data-r-extra-large-dots="false">
                                <div class="shop-box-layout1">
                                    <div class="mask-item bg--light">
                                        <div class="item-figure">
                                            <img src="img/product/shop-figure1.png" alt="Product">
                                        </div>
                                        <ul class="action-items">
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-shopping-cart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item-content">
                                        <h3 class="item-title"><a href="single-shop.html">Kitchen Utensils</a></h3>
                                        <div class="item-price"><span class="currency">$</span>28.00</div>
                                    </div>
                                </div>
                                <div class="shop-box-layout1">
                                    <div class="mask-item bg--light">
                                        <div class="item-figure">
                                            <img src="img/product/shop-figure2.png" alt="Product">
                                        </div>
                                        <ul class="action-items">
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-shopping-cart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item-content">
                                        <h3 class="item-title"><a href="single-shop.html">Kitchen Utensils</a></h3>
                                        <div class="item-price"><span class="currency">$</span>28.00</div>
                                    </div>
                                </div>
                                <div class="shop-box-layout1">
                                    <div class="mask-item bg--light">
                                        <div class="item-figure">
                                            <img src="img/product/shop-figure3.png" alt="Product">
                                        </div>
                                        <ul class="action-items">
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-shopping-cart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item-content">
                                        <h3 class="item-title"><a href="single-shop.html">Kitchen Utensils</a></h3>
                                        <div class="item-price"><span class="currency">$</span>28.00</div>
                                    </div>
                                </div>
                                <div class="shop-box-layout1">
                                    <div class="mask-item bg--light">
                                        <div class="item-figure">
                                            <img src="img/product/shop-figure4.png" alt="Product">
                                        </div>
                                        <ul class="action-items">
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-shopping-cart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item-content">
                                        <h3 class="item-title"><a href="single-shop.html">Kitchen Utensils</a></h3>
                                        <div class="item-price"><span class="currency">$</span>28.00</div>
                                    </div>
                                </div>
                                <div class="shop-box-layout1">
                                    <div class="mask-item bg--light">
                                        <div class="item-figure">
                                            <img src="img/product/shop-figure5.png" alt="Product">
                                        </div>
                                        <ul class="action-items">
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-shopping-cart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item-content">
                                        <h3 class="item-title"><a href="single-shop.html">Kitchen Utensils</a></h3>
                                        <div class="item-price"><span class="currency">$</span>28.00</div>
                                    </div>
                                </div>
                                <div class="shop-box-layout1">
                                    <div class="mask-item bg--light">
                                        <div class="item-figure">
                                            <img src="img/product/shop-figure6.png" alt="Product">
                                        </div>
                                        <ul class="action-items">
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-shopping-cart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item-content">
                                        <h3 class="item-title"><a href="single-shop.html">Kitchen Utensils</a></h3>
                                        <div class="item-price"><span class="currency">$</span>28.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <div class="direction-wrap-layout1">
                            <div class="section-heading heading-dark">
                                <h2 class="item-heading">DIRECTIONS</h2>
                            </div>

                            @foreach(explode("\n", $recipe->directions) as $directions)
                            <div class="direction-box-layout1">
                                <div class="item-figure">
                                </div>
                                <div class="item-content">
                                    <div class="serial-number">Step {{$loop->iteration}}</div>
                                    <p>{{ $directions }}</p>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <div class="tag-share">
                            <ul>
                                <li>
                                    <ul class="inner-tag">
                                        @foreach($recipe->tags as $tag)
                                            <li><a href="{{ route('frontend.tag.recipes',$tag->slug) }}">{{ $tag->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <ul class="inner-share">
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-google-plus-g"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-pinterest"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="recipe-author">
                            <div class="media media-none--xs">
                                <img src="{{asset('assets/img/blog/author9.jpg')}}" alt="Blog Author" class="rounded-circle media-img-auto">
                                <div class="media-body">
                                    <h4 class="author-title">{{ $recipe->user->name }}</h4>
                                    <h5 class="author-sub-title">Written by</h5>
                                    <p>{{ $recipe->user->about }}</p>
                                    <ul class="author-social">
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-skype"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="also-like-wrap">
                            <h4 class="also-like-title">YOU MAY ALSO LIKE</h4>
                            <div class="row">
                                @foreach($random_recipes as $similar)
                                <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                                    <div class="product-box-layout2">
                                        <figure class="item-figure"><img src="{{asset('assets/img/product/product11.jpg')}}"
                                                                         alt="Product"></figure>
                                        <div class="item-content">
                                            <span class="sub-title">{{ $similar->category }}</span>
                                            <h3 class="item-title"><a href="{{ route('frontend.recipe.details',$similar->slug) }}">{{ $similar->title }}</a></h3>
                                            <ul class="entry-meta">
                                                <li><a href="#"><i class="fas fa-user"></i>by <span>{{ $similar->user->name }}</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="recipe-reviews">
                            <div class="section-heading heading-dark">
                                <h2 class="item-heading">RECIPE REVIEWS</h2>
                            </div>
                            <div class="avarage-rating-wrap">
                                <div class="avarage-rating">Avarage Rating:
                                    <span class="rating-icon-wrap">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </span>
                                    <span class="rating-number">(5)</span>
                                </div>
                                <div class="total-reviews">Total Reviews:<span class="review-number">(02)</span></div>
                            </div>
                            <ul>
                                <li class="reviews-single-item">
                                    <div class="media media-none--xs">
                                        <img src="img/blog/comment1.jpg" alt="Comment" class="media-img-auto">
                                        <div class="media-body">
                                            <h4 class="comment-title">Liza Zaman</h4>
                                            <span class="post-date">September 27, 2018</span>
                                            <p>Absolutely great recipe. I cooked it for my kids and they loved it, even
                                                asked for more, can you believe it?</p>
                                            <ul class="item-rating">
                                                <li class="single-item star-fill"><i class="fas fa-star"></i></li>
                                                <li class="single-item star-fill"><i class="fas fa-star"></i></li>
                                                <li class="single-item star-fill"><i class="fas fa-star"></i></li>
                                                <li class="single-item star-fill"><i class="fas fa-star"></i></li>
                                                <li class="single-item star-empty"><i class="fas fa-star"></i></li>
                                                <li class="single-item"><span>9<span> / 10</span></span> </li>
                                            </ul>
                                            <a href="#" class="item-btn">REPLY<i class="fas fa-long-arrow-alt-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="reviews-single-item">
                                    <div class="media media-none--xs">
                                        <img src="img/blog/comment2.jpg" alt="Comment" class="media-img-auto">
                                        <div class="media-body">
                                            <h4 class="comment-title">John Martin</h4>
                                            <span class="post-date">September 12, 2018</span>
                                            <p>Absolutely great recipe. I cooked it for my kids and they loved it, even
                                                asked for more, can you believe it?</p>
                                            <ul class="item-rating">
                                                <li class="single-item star-fill"><i class="fas fa-star"></i></li>
                                                <li class="single-item star-fill"><i class="fas fa-star"></i></li>
                                                <li class="single-item star-fill"><i class="fas fa-star"></i></li>
                                                <li class="single-item star-fill"><i class="fas fa-star"></i></li>
                                                <li class="single-item star-empty"><i class="fas fa-star"></i></li>
                                                <li class="single-item"><span>7<span> / 10</span></span> </li>
                                            </ul>
                                            <a href="#" class="item-btn">REPLY<i class="fas fa-long-arrow-alt-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="leave-review">
                            <div class="section-heading heading-dark">
                                <h2 class="item-heading">LEAVE A REVIEW</h2>
                            </div>
                            <div class="rate-wrapper">
                                <div class="rate-label">Rating</div>
                                <div class="rate">
                                    <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                    <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                    <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                    <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                    <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                </div>
                            </div>
                            <form class="leave-form-box">
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <label>Comment :</label>
                                        <textarea placeholder="" class="textarea form-control" name="message" rows="7"
                                                  cols="20" data-error="Message field is required" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label>Name :</label>
                                        <input type="text" placeholder="" class="form-control" name="name"
                                               data-error="Name field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label>E-mail :</label>
                                        <input type="email" placeholder="" class="form-control" name="email"
                                               data-error="E-mail field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label>Website :</label>
                                        <input type="email" placeholder="" class="form-control" name="email"
                                               data-error="E-mail field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group mb-0">
                                        <button type="submit" class="item-btn">POST REVIEW</button>
                                    </div>
                                </div>
                                <div class="form-response"></div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Sidebar-->
                @include('Frontend.sidebar')

            </div>
        </div>
    </section>
    <!-- Single Recipe With Sidebar Area End Here -->
@endsection
