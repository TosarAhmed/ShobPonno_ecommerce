@extends('front-end.master')

@section('title')
    Home
@endsection

@section('body')

<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url ('/')}}"><strong> Home <span class="sr-only">(current)</strong></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><strong>Food</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><strong>Home Appliance</strong></a>
      </li>  
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Others
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" style="" href="#"><strong> Home & Cleaning </strong></a>
          <a class="dropdown-item" href="#"><strong>Baby Care</strong></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><strong>Clothes collection</strong></a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</nav>

    <!--end navbar part-->


   <section class="home_banner_area mb-40">    
         <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content row">
                    <div class="col-lg-12">
                        <p class="sub text-uppercase">men Collection</p>
                        <h3><span>Shop</span> now <br/>10% <span>Cashback</span></h3>
                        <h4>The best experience for the Customer</h4>
                        <a class="main_btn mt-40" href="#">View Collection</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================End Home Banner Area =================-->

    <!-- End feature Area -->
    <!--================ Feature Product Area =================-->
    
    <section class="feature_product_area section_gap_bottom_custom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main_title">


                        <h2><span>Featured product</span></h2>
                        <p>Bring called seed first of third give itself now ment</p>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($featuredProducts as $featuredProduct)
                <div class="col-md-3">
                    <div class="single-product">
                        <div class="product-img">
                            <img class="img-fluid w-100" src="{{asset($featuredProduct->main_image)}}" alt="" />
                            <div class="p_icon">
                                <a href="#">
                                    <i class="ti-eye"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-btm">
                            <a href="#" class="d-block">
                                <h4>{{$featuredProduct->product_name}}</h4>
                            </a>
                            <div class="mt-3">
                                <span class="mr-3">Tk.{{$featuredProduct->product_price}}</span>
                                <a href="#" class="btn btn-outline-warning">Add to card</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--================ End Feature Product Area =================-->
        <!-- Start feature Area -->
    <section class="feature-area section_gap_bottom_custom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <i class="flaticon-money"></i>
                            <h3>Money back gurantee</h3>
                        </a>
                        <p>Shall open divide a one</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <i class="flaticon-truck"></i>
                            <h3>Free Delivery</h3>
                        </a>
                        <p>Shall open divide a one</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <i class="flaticon-support"></i>
                            <h3>Alway support</h3>
                        </a>
                        <p>Shall open divide a one</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <i class="flaticon-blockchain"></i>
                            <h3>Secure payment</h3>
                        </a>
                        <p>Shall open divide a one</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Offer Area =================-->
    <section class="offer_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="offset-lg-4 col-lg-8 text-center">
                    <div class="offer_content">
                        <h3 class="text-uppercase mb-40">all men’s collection</h3>
                        <h2 class="text-uppercase">50% off</h2>
                        <a href="#" class="btn btn-outline-warning">Discover Now!</a>
                        <p>Limited Time Offer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Offer Area =================-->
    <!--================ New Product Area =================-->
    <section class="new_product_area section_gap_top section_gap_bottom_custom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main_title">
                        <h2><span>new products</span></h2>
                        <p>Bring called seed first of third give itself now ment</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="new_product">
                        <h5 class="text-uppercase">collection of 2021</h5>
                        <h3 class="text-uppercase">Kid’s Collection</h3>
                        <div class="product-img">
                            <img class="img-fluid" src="{{asset('/public/front')}}/img/product/new-product/new-product1.png" alt="" />
                        </div>
                        <h4>$120.70</h4>
                        <a href="#" class="btn btn-outline-warning">Add to card</a>
                    </div>
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="row">
                        @foreach($newProducts as $newProduct)
                        <div class="col-lg-6 col-md-6">
                            <div class="single-product">
                                <div class="product-img">
                                    <img class="img-fluid w-100" src="{{asset($newProduct->main_image)}}" alt="" />
                                    <div class="p_icon">
                                        <a href="#">
                                            <i class="ti-eye"></i>
                                        </a>
                                        <a href="#">
                                            <i class="ti-heart"></i>
                                        </a>
                                        <a href="#">
                                            <i class="ti-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-btm">
                                    <a href="#" class="d-block">
                                        <h4>{{$newProduct->product_name}}</h4>
                                    </a>
                                    <div class="mt-3">
                                        <span class="mr-4">Tk.{{$newProduct->product_price}}</span>
                                        <a href="#" class="btn btn-outline-warning">Add to card</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End New Product Area =================-->
    <!--================ Inspired Product Area =================-->
    <section class="inspired_product_area section_gap_bottom_custom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main_title">
                        <h2><span>Inspired products</span></h2>
                        <p>Bring called seed first of third give itself now ment</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img class="img-fluid w-100" src="{{asset('/public/front')}}/img/product/inspired-product/i1.jpg" alt="" /> 

                            <div class="p_icon">
                                <a href="#">
                                    <i class="ti-eye"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-btm">
                            <a href="#" class="d-block">
                                <h4>Latest sneaker</h4>
                            </a>
                            <div class="mt-3">
                                <span class="mr-4">$25.00</span>
                                <del>$35.00</del>
                                <a href="#" class="btn btn-outline-warning">Add to card</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img class="img-fluid w-100" src="{{asset('/public/front')}}/img/product/inspired-product/i2.jpg" alt="" />
                            <div class="p_icon">
                                <a href="#">
                                    <i class="ti-eye"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-btm">
                            <a href="#" class="d-block">
                                <h4>Latest men’s sneaker</h4>
                            </a>
                            <div class="mt-3">
                                <span class="mr-4">$25.00</span>
                                <del>$35.00</del>
                                <a href="#" class="btn btn-outline-warning">Add to card</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img class="img-fluid w-100" src="{{asset('/public/front')}}/img/product/inspired-product/i3.jpg" alt="" />
                            <div class="p_icon">
                                <a href="#">
                                    <i class="ti-eye"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-btm">
                            <a href="#" class="d-block">
                                <h4>Latest men’s sneaker</h4>
                            </a>
                            <div class="mt-3">
                                <span class="mr-4">$25.00</span>
                                <del>$35.00</del>
                                <a href="#" class="btn btn-outline-warning">Add to card</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img class="img-fluid w-100" src="{{asset('/public/front')}}/img/product/inspired-product/i4.jpg" alt="" />
                            <div class="p_icon">
                                <a href="#">
                                    <i class="ti-eye"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-btm">
                            <a href="#" class="d-block">
                                <h4>Latest men’s sneaker</h4>
                            </a>
                            <div class="mt-3">
                                <span class="mr-4">$25.00</span>
                                <del>$35.00</del>
                                <a href="#" class="btn btn-outline-warning">Add to card</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img class="img-fluid w-100" src="{{asset('/public/front')}}/img/product/inspired-product/i5.jpg" alt="" />
                            <div class="p_icon">
                                <a href="#">
                                    <i class="ti-eye"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-btm">
                            <a href="#" class="d-block">
                                <h4>Latest men’s sneaker</h4>
                            </a>
                            <div class="mt-3">
                                <span class="mr-4">$25.00</span>
                                <del>$35.00</del>
                                <a href="#" class="btn btn-outline-warning">Add to card</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img class="img-fluid w-100" src="{{asset('/public/front')}}/img/product/inspired-product/i6.jpg" alt="" />
                            <div class="p_icon">
                                <a href="#">
                                    <i class="ti-eye"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-btm">
                            <a href="#" class="d-block">
                                <h4>Latest men’s sneaker</h4>
                            </a>
                            <div class="mt-3">
                                <span class="mr-4">$25.00</span>
                                <del>$35.00</del>
                                <a href="#" class="btn btn-outline-warning">Add to card</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img class="img-fluid w-100" src="{{asset('/public/front')}}/img/product/inspired-product/i7.jpg" alt="" />
                            <div class="p_icon">
                                <a href="#">
                                    <i class="ti-eye"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-btm">
                            <a href="#" class="d-block">
                                <h4>Latest men’s sneaker</h4>
                            </a>
                            <div class="mt-3">
                                <span class="mr-4">$25.00</span>
                                <del>$35.00</del>
                                <a href="#" class="btn btn-outline-warning">Add to card</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img class="img-fluid w-100" src="{{asset('/public/front')}}/img/product/inspired-product/i8.jpg" alt="" />
                            <div class="p_icon">
                                <a href="#">
                                    <i class="ti-eye"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-btm">
                            <a href="#" class="d-block">
                                <h4>Latest men’s sneaker</h4>
                            </a>
                            <div class="mt-3">
                                <span class="mr-4">$25.00</span>
                                <del>$35.00</del>
                                <a href="#" class="btn btn-outline-warning">Add to card</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Inspired Product Area =================-->
    <!--================ Start Blog Area =================-->
    <section class="blog-area section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main_title">
                        <h2><span>latest blog</span></h2>
                        <p>Bring called seed first of third give itself now ment</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="{{asset('/public/front')}}/img/b1.jpg" alt="">
                        </div>
                        <div class="short_details">
                            <div class="meta-top d-flex">
                                <a href="#">By Admin</a>
                                <a href="#"><i class="ti-comments-smiley"></i>2 Comments</a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4>Ford clever bed stops your sleeping
                                    partner hogging the whole</h4>
                            </a>
                            <div class="text-wrap">
                                <p>
                                    Let one fifth i bring fly to divided face for bearing the divide unto seed winged divided light
                                    Forth.
                                </p>
                            </div>
                            <a href="#" class="blog_btn">Learn More <span class="ml-2 ti-arrow-right"></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="{{asset('/public/front')}}/img/b2.jpg" alt="">
                        </div>
                        <div class="short_details">
                            <div class="meta-top d-flex">
                                <a href="#">By Admin</a>
                                <a href="#"><i class="ti-comments-smiley"></i>2 Comments</a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4>Ford clever bed stops your sleeping
                                    partner hogging the whole</h4>
                            </a>
                            <div class="text-wrap">
                                <p>
                                    Let one fifth i bring fly to divided face for bearing the divide unto seed winged divided light
                                    Forth.
                                </p>
                            </div>
                            <a href="#" class="blog_btn">Learn More <span class="ml-2 ti-arrow-right"></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="{{asset('/public/front')}}/img/b3.jpg" alt="">
                        </div>
                        <div class="short_details">
                            <div class="meta-top d-flex">
                                <a href="#">By Admin</a>
                                <a href="#"><i class="ti-comments-smiley"></i>2 Comments</a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4>Ford clever bed stops your sleeping
                                    partner hogging the whole</h4>
                            </a>
                            <div class="text-wrap">
                                <p>
                                    Let one fifth i bring fly to divided face for bearing the divide unto seed winged divided light
                                    Forth.
                                </p>
                            </div>
                            <a href="#" class="blog_btn">Learn More <span class="ml-2 ti-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection