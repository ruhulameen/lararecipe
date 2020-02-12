<div class="col-lg-4 sidebar-widget-area sidebar-break-md">
    <div class="widget">
        <div class="section-heading heading-dark">
            <h3 class="item-heading">LATEST RECIPES</h3>
        </div>
        <div class="widget-latest">
            <ul class="block-list">
                @foreach($latest_recipes as $latest_recipe)
                <li class="single-item">
                    <div class="item-img">
                        <a href="#"><img src="{{asset('assets/img/product/latest1.jpg')}}" alt="Post"></a>
                        <div class="count-number">{{$loop->iteration}}</div>
                    </div>
                    <div class="item-content">
                        <div class="item-ctg">{{ $latest_recipe->category }}</div>
                        <h4 class="item-title"><a href="#">{{ $latest_recipe->title }}</a></h4>
                        <div class="item-post-by"><a href="single-blog.html"><i class="fas fa-user"></i><span>by</span>
                                {{ $latest_recipe->user->name }}</a></div>
                    </div>
                </li>

                @endforeach

            </ul>
        </div>
    </div>
    <div class="widget">
        <div class="section-heading heading-dark">
            <h3 class="item-heading">SUBSCRIBE &amp; FOLLOW</h3>
        </div>
        <div class="widget-follow-us">
            <ul>
                <li class="single-item"><a href="#"><i class="fab fa-facebook-f"></i>LIKE ME ON</a></li>
                <li class="single-item"><a href="#"><i class="fab fa-twitter"></i>LIKE ME</a></li>
                <li class="single-item"><a href="#"><i class="fab fa-linkedin-in"></i>LIKE ME</a></li>
                <li class="single-item"><a href="#"><i class="fab fa-pinterest-p"></i>LIKE ME</a></li>
                <li class="single-item"><a href="#"><i class="fab fa-instagram"></i>LIKE ME</a></li>
                <li class="single-item"><a href="#"><i class="fab fa-youtube"></i>Subscribe</a></li>
            </ul>
        </div>
    </div>
    <div class="widget">
        <div class="widget-ad">
            <a href="#"><img src="{{asset('assets/img/figure/figure4.jpg')}}" alt="Ad" class="img-fluid"></a>
        </div>
    </div>
    <div class="widget">
        <div class="section-heading heading-dark">
            <h3 class="item-heading">FEATURED ARTICLE</h3>
        </div>
        <div class="widget-featured-feed">
            <div class="rc-carousel nav-control-layout1" data-loop="true" data-items="3"
                 data-margin="5" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="700"
                 data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1"
                 data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="1"
                 data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="1"
                 data-r-small-nav="true" data-r-small-dots="false" data-r-medium="1"
                 data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="1"
                 data-r-large-nav="true" data-r-large-dots="false" data-r-extra-large="1"
                 data-r-extra-large-nav="true" data-r-extra-large-dots="false">

                @foreach($featured_recipes as $featured_recipe)
                <div class="featured-box-layout1">
                    <div class="item-img">
                        <img src="{{asset('assets/img/product/product17.jpg')}}" alt="Brand" class="img-fluid">
                    </div>
                    <div class="item-content">
                        <span class="ctg-name">{{ $featured_recipe->category }}</span>
                        <h4 class="item-title"><a href="single-recipe1.html">{{ $featured_recipe->title }}</a></h4>
                        <p>Definitiones noel ei verear intelle
                            gatpri civibus consequat area
                            refund efficiantue.</p>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <div class="widget">
        <div class="widget-newsletter-subscribe">
            <h3>GET LATEST UPDATES</h3>
            <p>Newsletter Subscribe</p>
            <form class="newsletter-subscribe-form">
                <div class="form-group">
                    <input type="text" placeholder="your e-mail address" class="form-control" name="email"
                           data-error="E-mail field is required" required>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group mb-none">
                    <button type="submit" class="item-btn">SUBSCRIBE</button>
                </div>
            </form>
        </div>
    </div>
    <div class="widget">
        <div class="section-heading heading-dark">
            <h3 class="item-heading">INSTAGRAM</h3>
        </div>
        <div class="widget-instagram">
            <ul>
                <li>
                    <div class="item-box">
                        <img src="{{asset('assets/img/social-figure/social-figure9.jpg')}}" alt="Social Figure" class="img-fluid">
                        <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </li>
                <li>
                    <div class="item-box">
                        <img src="{{asset('assets/img/social-figure/social-figure10.jpg')}}" alt="Social Figure" class="img-fluid">
                        <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </li>
                <li>
                    <div class="item-box">
                        <img src="{{asset('assets/img/social-figure/social-figure11.jpg')}}" alt="Social Figure" class="img-fluid">
                        <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </li>
                <li>
                    <div class="item-box">
                        <img src="{{asset('assets/img/social-figure/social-figure12.jpg')}}" alt="Social Figure" class="img-fluid">
                        <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </li>
                <li>
                    <div class="item-box">
                        <img src="{{asset('assets/img/social-figure/social-figure13.jpg')}}" alt="Social Figure" class="img-fluid">
                        <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </li>
                <li>
                    <div class="item-box">
                        <img src="{{asset('assets/img/social-figure/social-figure14.jpg')}}" alt="Social Figure" class="img-fluid">
                        <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </li>
                <li>
                    <div class="item-box">
                        <img src="{{asset('assets/img/social-figure/social-figure15.jpg')}}" alt="Social Figure" class="img-fluid">
                        <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </li>
                <li>
                    <div class="item-box">
                        <img src="{{asset('assets/img/social-figure/social-figure16.jpg')}}" alt="Social Figure" class="img-fluid">
                        <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </li>
                <li>
                    <div class="item-box">
                        <img src="{{asset('assets/img/social-figure/social-figure17.jpg')}}" alt="Social Figure" class="img-fluid">
                        <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="widget">
        <div class="section-heading heading-dark">
            <h3 class="item-heading">POPULAR TAGS</h3>
        </div>
        <div class="widget-tag">
            <ul>
                <li>
                    <a href="#">DESERT</a>
                </li>
                <li>
                    <a href="#">CAKE</a>
                </li>
                <li>
                    <a href="#">BREAKFAST</a>
                </li>
                <li>
                    <a href="#">BURGER</a>
                </li>
                <li>
                    <a href="#">DINNER</a>
                </li>
                <li>
                    <a href="#">PIZZA</a>
                </li>
                <li>
                    <a href="#">SEA FOOD</a>
                </li>
                <li>
                    <a href="#">SALAD</a>
                </li>
                <li>
                    <a href="#">JUICE</a>
                </li>
            </ul>
        </div>
    </div>
</div>
