@extends('frontend.master')
@section('products','active')
@section('content')
    <!-- banner -->
    <div class="agileits-banner4 jarallax">
    @include('frontend.include.header')
    <!-- banner-text -->
        <div class="banner-text">
            <div class="container">
                <div class="banner-w3lstext">
                    <h1><a href="#">Products<span>Zarab Fashion</span></a></h1>
                    <p>A house of qualified and experienced buying experts from Bangladesh</p>
                </div>
            </div>
        </div>
    </div>
    <!-- //banner-text -->
    <br/><br/>
    <div class="container">

        <h3 class="agileinfo_title text-center">Our <span>Products</span><hr class="h2_about_us text-right"/></h3>
        <h3 class="agileinfo_title">Knitwear<hr class="hr_2"/></h3>
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('assets/images/products/kn1.jpg')}}" class="card-img-top our_product_image" alt="...">
                    <div class="card-body">
                        <p class="card-text">Ladies short sleeve Pique Polo</p>
                        <p class="card-text">100% Cotton pique fabric</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('assets/images/products/kn2.jpg')}}" class="card-img-top our_product_image" alt="...">
                    <div class="card-body">
                        <p class="card-text">Mens short sleeve Pique Polo</p>
                        <p class="card-text">100% Cotton pique fabric</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('assets/images/products/kn3.jpg')}}" class="card-img-top our_product_image" alt="...">
                    <div class="card-body">
                        <p class="card-text">Ladies short sleeve T-Shirt</p>
                        <p class="card-text">100% Cotton single jersey with chest print</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('assets/images/products/kn4.jpg')}}" class="card-img-top our_product_image" alt="...">
                    <div class="card-body">
                        <p class="card-text">Mens short sleeve T-Shirt.</p>
                        <p class="card-text">100% Cotton single jersey with front print</p>
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <h3 class="agileinfo_title">Woven Items<hr class="hr_2"/></h3>
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('assets/images/products/wv1.jpg')}}" class="card-img-top our_product_image" alt="...">
                    <div class="card-body">
                        <p class="card-text">Mens L/S Shirt</p>
                        <p class="card-text">100% Cotton S/D Fabric</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('assets/images/products/wv2.jpg')}}" class="card-img-top our_product_image" alt="...">
                    <div class="card-body">
                        <p class="card-text">Ladies L/S Shirt</p>
                        <p class="card-text">100% Cotton S/D Fabric </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('assets/images/products/wv3.png')}}" class="card-img-top our_product_image" alt="...">
                    <div class="card-body">
                        <p class="card-text">Mens Denim Pants</p>
                        <p class="card-text">95% Cotton 5% Spandex</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('assets/images/products/wv4.jpg')}}" class="card-img-top our_product_image" alt="...">
                    <div class="card-body">
                        <p class="card-text">Ladies Denim Pants</p>
                        <p class="card-text">95% Cotton 5% Spandex</p>
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <h3 class="agileinfo_title">Sweater Items<hr class="hr_2"/></h3>
        <div class="row text-center">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('assets/images/products/s1.jpg')}}" class="card-img-top our_product_image" alt="...">
                    <div class="card-body">
                        <p class="card-text">Mens Sweater</p>
                        <p class="card-text">100% acrylic Yarn</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('assets/images/products/s2.jpg')}}" class="card-img-top our_product_image" alt="...">
                    <div class="card-body">
                        <p class="card-text">Ladies Cardigan</p>
                        <p class="card-text">60% Cotton 40% Wool</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('assets/images/products/s3.jpg')}}" class="card-img-top our_product_image" alt="...">
                    <div class="card-body">
                        <p class="card-text">Mens Hoody</p>
                        <p class="card-text">100% Polyester Fleece</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('assets/images/products/s4.jpg')}}" class="card-img-top our_product_image" alt="...">
                    <div class="card-body">
                        <p class="card-text">Ladies Jeggings</p>
                        <p class="card-text">100% Cotton Printed Fabric</p>
                    </div>
                </div>
            </div>
        </div>
        <br/><br/>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <h3 class="agileinfo_title text-center">Knitwear<hr class="h2_product_list"/></h3>
                <ul class="product_list" >
                    <li>Ladies knit sexy shorts</li>
                    <li>Ladies allover print T-shirt</li>
                    <li>Girls Fancy T-shirt</li>
                    <li>Ladies Fancy Tank Top</li>
                    <li>Ladies Panty</li>
                    <li>Ladies / Girls Fancy Top</li>
                    <li>Mens /Ladies Boxer Shorts</li>
                    <li>Boys T-shirt</li>
                    <li>Mens/Boys/Ladies Sweat shirt</li>
                    <li>Mens/Ladies/Boys/Girls L/S T-shirt</li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <h3 class="agileinfo_title text-center">Woven Items<hr class="h2_product_list"/></h3>
                <ul class="product_list" >
                    <li>Ladies Denim Shorts</li>
                    <li>Girls Denim short Pants</li>
                    <li>Girls Romper</li>
                    <li>Girls 3 pcs sets</li>
                    <li>Ladies/Girls Stretch Pants</li>
                    <li>Ladies/Girls sexy shorts</li>
                    <li>Boys Denim Pants/li>
                    <li>Boys short Pants</li>
                    <li>Mens/Ladies/Boys/Girls Denim Jacket</li>
                    <li>Mens/Ladies Boxer shorts</li>
                    <li>Ladies Trouser</li>
                    <li>Mens Cargo Pants</li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <h3 class="agileinfo_title text-center">Sweater Items<hr class="h2_product_list"/></h3>
                <ul class="product_list" >
                    <li>Mens/Ladies Sweater, Cardigan, Pullover</li>
                    <li>Boys Sweater</li>
                    <li>Girls Sweater</li>
                </ul>
            </div>
        </div>
        <br/><br/>
        <div class="row">
            <div class="col-md-3">{{--<a href="#" class="btn btn-info btn-block disabled" > Download</a>--}}</div>
            <div class="col-md-6"><a href="{{asset('assets/images/document/our_products.pdf')}}" class="btn btn-info btn-block" target="_blank"><i class="fa fa-download" aria-hidden="true"> </i> Download Catelogue</a></div>
        </div>
    </div>
    <br/><br/>
@endsection
