@extends('frontend.master')
@section('home','active')
@section('content')
    <!-- banner -->
    <div class="agileits-banner jarallax">
    @include('frontend.include.header')
    <!-- banner-text -->
        <div class="banner-text">
            <div class="container">
                <div class="banner-w3lstext">
                    <h1><a href="{{route('frontend.index')}}"><div class="zf">zarab fashions</div> <span>Welcome To</span></a></h1>
                    <p>A house of qualified and experienced buying experts from Bangladesh</p>
                </div>
            </div>
        </div>
        <!-- //banner-text -->
    </div>
    <div id="about" class="banner-bottom-grids">
        <div class="col-md-7 col-xs-7 banner-bottom-grid-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
            <h2>Discover the art of <span> Clothing</span></h2>
            <p style="text-align: justify">
                Clothes have developed from a practical asset to a social marker: they affect the way we see ourselves. They help us to be seen in the light that we wish to be, and also exude our personalities and social status. In many societies, dress sense embodies personal wealth and taste.
            </p>
            <p style="text-align: justify">
                <b>Fashion design</b> is the art of applying design, aesthetics, clothing construction and natural beauty to clothing and its accessories. It is influenced by cultural and social attitudes, and has varied over time and place.
            </p>
            <p style="text-align: justify">
                Fashion is not something that exists in dresses only. Fashion is in the sky, in the street, fashion has to do with ideas, the way we live, what is happening.
                <br/><b> --Coco Chanel
                </b>
            </p>
        </div>
        <div class="col-md-5 col-xs-5 banner-bottom-grid animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
                <img src="{{asset('assets/images/six.jpg')}}" alt=" " id="apeal_img" class="img-responsive" style="width:797px;height:711px" />
            <div class="banner-bottom-grid1">
                <div class="banner-bottom-grid1-pos animated wow fadeInUpBig" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <h3>Quality Products with luxurious Design.</h3>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!-- //banner-bottom-grids -->
    <!-- progress -->
    <div class="wthree_progress" id="work">
        <div class="col-md-6 col-xs-6 w3_agileits_progress_right">
            <h3 class="agileinfo_title">Appeal <span>To Buyers</span><hr class="hr_2_our_work"/> </h3>
            <p style="text-align: justify">
                It is a great pleasure to inform you that we have been exporting all kinds of Ready-made Garments in Woven, Knit, Sweater and Home Textile for many years to EU, USA and other African countries. We have 25 years practical experience in this field. We are professionally managed by educated, technically qualified and dedicated staffs to ensure the quality of the ready-made garments. Our aim is to source excellent fashion product for our esteem Buyers from quality suppliers. We have good experience in garments industry. Our strength is On-time Shipment, Best Quality and Price.
                We are very much interested to make a good business relationship with esteemed organizations. As you know Bangladesh is doing extremely good in Ready-Made Garments in all type of fabric and yarn in knitwear, woven and sweater.
            </p>
            <br/><br/>
        </div>
        <div class="col-md-6 col-xs-6 w3_agileits_progress_left"><div class="agileits_progress_left_grid"></div></div>
        <div class="clearfix"> </div>
    </div>
    <!-- //progress -->
    <!-- services -->
    <br/>
    <br/>
    <br/>
    <div id="services" class="services">
        <div class="container">
            <h3 class="agileinfo_title">Our <span>Products</span><hr class="hr_2"/></h3>
            <div class="services-agileinfo">
                <div class="col-sm-4 col-xs-12 services-w3grids">
                    <div class="services-icon<!-- hvr-radial-in-->">
                        <img src="{{asset('assets/images/products/knitwear.jpg')}}" class="product_image">
                    </div>
                    <p class="our_product">Knitwear</p>
                </div>
                <div class="col-sm-4 col-xs-12 services-w3grids">
                    <div class="services-icon <!--hvr-radial-in-->">
                        <img src="{{asset('assets/images/products/woven.jpg')}}" class="product_image">
                    </div>
                    <p class="our_product">Woven</p>
                </div>
                <div class="col-sm-4 col-xs-12 services-w3grids">
                    <div class="services-icon <!--hvr-radial-in-->">
                        <img src="{{asset('assets/images/products/sweater.jpg')}}" class="product_image">
                    </div>
                    <p class="our_product">Sweater</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //services -->
    <!-- gallery -->
    <div id="gallery" class="gallery">
        <div class="container">
            <h3 class="agileinfo_title">What We <span>Can Do</span></h3>
        </div>
        <!-- Owl-Carousel -->
        <div id="owl-demo" class="owl-carousel text-center agileinfo-gallery-row">
            <a href="{{asset('assets/images/gallery/1.jpeg')}}" class="item g1">
                <img class="lazyOwl" src="{{asset('assets/images/gallery/1.jpeg')}}" title="Our latest gallery" alt=""/>
            </a>
            <a href="{{asset('assets/images/gallery/2.jpeg')}}" class="item g1">
                <img class="lazyOwl" src="{{asset('assets/images/gallery/2.jpeg')}}" title="Our latest gallery" alt=""/>
            </a>
            <a href="{{asset('assets/images/gallery/3.jpeg')}}" class="item g1">
                <img class="lazyOwl" src="{{asset('assets/images/gallery/3.jpeg')}}" title="Our latest gallery" alt=""/>
            </a>
            <a href="{{asset('assets/images/gallery/4.jpeg')}}" class="item g1">
                <img class="lazyOwl" src="{{asset('assets/images/gallery/4.jpeg')}}" title="Our latest gallery" alt=""/>
            </a>
            <a href="{{asset('assets/images/gallery/5.jpeg')}}" class="item g1">
                <img class="lazyOwl" src="{{asset('assets/images/gallery/5.jpeg')}}" title="Our latest gallery" alt=""/>
            </a>
            <a href="{{asset('assets/images/gallery/6.jpeg')}}" class="item g1">
                <img class="lazyOwl" src="{{asset('assets/images/gallery/6.jpeg')}}" title="Our latest gallery" alt=""/>
            </a>
        </div>
        <script type="text/javascript" src="{{asset('assets/js/simple-lightbox.min.js')}}"></script>
        <script>
            $(function(){
                var gallery = $('.agileinfo-gallery-row a').simpleLightbox({navText:		['&lsaquo;','&rsaquo;']});
            });
        </script>
    </div>
    <!-- //gallery -->
    <!-- about-team -->
    <div id="team" class="team">
        <div class="container">
            <h3 class="agileinfo_title">Our <span>Team</span><hr class="hr_2_our_team"/> </h3>
            <div class="team-row-agileinfo">
                <div class="col-md-3"></div>
                <div class="col-md-6 col-sm-6 col-xs-6 team-grids text-center">
                    <div class="thumbnail team-agileits">
                        <img src="{{asset('assets/images/team/ceo.jpg')}}" class="img-responsive" alt=""/>
                        <div class="w3agile-caption">
                            <h4>Farid Amin</h4>
                            <p>CEO</p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="team-row-agileinfo">
                <div class="col-md-3 col-sm-6 col-xs-6 team-grids">
                    <div class="thumbnail team-agileits">
                        <img src="{{asset('assets/images/team/hom.jpg')}}" class="img-responsive" alt=""/>
                        <div class="w3agile-caption">
                            <h4>Sheikh Hannan</h4>
                            <p>Head of<br/>Merchandising</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 team-grids">
                    <div class="thumbnail team-agileits">
                        <img src="{{asset('assets/images/team/hoq.jpg')}}" class="img-responsive" alt=""/>
                        <div class="w3agile-caption">
                            <h4>Touhid Amin</h4>
                            <p>Head Of<br/> Quality Control</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 team-grids">
                    <div class="thumbnail team-agileits">
                        <img src="{{asset('assets/images/team/hoc.jpg')}}" class="img-responsive" alt=""/>
                        <div class="w3agile-caption">
                            <h4>Akhtar Habib</h4>
                            <p>Head Of<br/> Commercial</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 team-grids">
                    <div class="thumbnail team-agileits">
                        <img src="{{asset('assets/images/team/hocomp.jpg')}}" class="img-responsive" alt=""/>
                        <div class="w3agile-caption">
                            <h4>Sanjida Nasrin</h4>
                            <p>Head Of<br/> Compliance</p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //about-team -->
    <!-- about-slid -->
    <div class="about-w3slid jarallax">
        <div class="subscribe-agileinfo">
            <div class="container">
                <h3>"One is never over-dressed or under-dressed with a Little Black Dress."</h3>
                <p> —Karl Lagerfeld</p>
            </div>
        </div>
    </div>
    <!-- //about-slid -->
    <!-- blog -->
    <div id="blog" class="blog cd-section">
        <div class="container">
            <h3 class="agileinfo_title">Our <span>Trends</span> <hr class="h2_our_blog"/> </h3>
            <div class="blog-agileinfo">
                <div class="col-md-7 blog-w3grid-img">
                    <a href="#myModal_women" data-toggle="modal" class="wthree-blogimg">
                        <img src="{{asset('assets/images/blog/f1.jpg')}}" class="img-responsive" alt=""/>
                    </a>
                </div>
                <div class="col-md-5 blog-w3grid-text">
                    <h4><a href="#myModal_women" data-toggle="modal">Women</a></h4>
                    <p>Womenswear is much more than just the garments you wear. Ladies’ clothing reflects your style, your lifestyle and your mood. Garments that underline your personality create a unique appearance that showcase your style</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="blog-agileinfo blog-agileinfo-mdl">
                <div class="col-md-7 blog-w3grid-img blog-img-rght">
                    <a href="#myModal_men" data-toggle="modal" class="wthree-blogimg">
                        <img src="{{asset('assets/images/blog/man.jpg')}}" class="img-responsive" alt=""/>
                    </a>
                </div>
                <div class="col-md-5 blog-w3grid-text">
                    <h4><a href="#myModal_men" data-toggle="modal">Men</a></h4>
                    <p>Style is not merely about self-expression; it’s also about being dressed appropriately for your environment. Think of clothes as being codes: you need the right combination to work with the setting you’re in.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="blog-agileinfo">
                <div class="col-md-7 blog-w3grid-img">
                    <a href="#myModal_kids" data-toggle="modal" class="wthree-blogimg">
                        <img src="{{asset('assets/images/blog/kid2.jpg')}}" class="img-responsive" alt=""/>
                    </a>
                </div>
                <div class="col-md-5 blog-w3grid-text">
                    <h4><a href="#myModal_kids" data-toggle="modal">Kids</a></h4>
                    <p>Children's clothing is often more casual than adult clothing, fit for play and rest. Hosiery is commonly used. More recently, however, a lot of childrenswear is heavily influenced by trends in adult fashion. </p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //blog -->
    <!-- modal -->
    <div class="modal about-modal w3-agileits fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <img src="{{asset('assets/images/six.jpg')}}" alt="">
                    <h5>Zarab Fashions</h5>
                    <p>Children's clothing is often more casual than adult clothing, fit for play and rest. Hosiery is commonly used. More recently, however, a lot of childrenswear is heavily influenced by trends in adult fashion. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal about-modal w3-agileits fade" id="myModal_women" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <img src="{{asset('assets/images/blog/f1.jpg')}}" alt="">
                    <h5>Zarab Fashions</h5>
                    <p>Womenswear is much more than just the garments you wear. Ladies’ clothing reflects your style, your lifestyle and your mood. Garments that underline your personality create a unique appearance that showcase your style </p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal about-modal w3-agileits fade" id="myModal_men" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <img src="{{asset('assets/images/blog/man.jpg')}}" alt="">
                    <h5>Zarab Fashions</h5>
                    <p>Style is not merely about self-expression; it’s also about being dressed appropriately for your environment. Think of clothes as being codes: you need the right combination to work with the setting you’re in.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal about-modal w3-agileits fade" id="myModal_kids" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <img src="{{asset('assets/images/blog/kid2.jpg')}}" alt="">
                    <h5>Zarab Fashions</h5>
                    <p>Children's clothing is often more casual than adult clothing, fit for play and rest. Hosiery is commonly used. More recently, however, a lot of childrenswear is heavily influenced by trends in adult fashion. </p>
                </div>
            </div>
        </div>
    </div>
    <!-- //modal -->
    <!-- subscribe -->
    <div class="subscribe jarallax">
        <div class="subscribe-agileinfo">
            <div class="container">
                <h3>SignUp Newsletter</h3>
                <form action="#" method="post">
                    <input type="text" name="name" placeholder="Your Name" required="">
                    <input type="email" name="email" placeholder="Your Email" required="">
                    <input type="submit" value="Submit">
                    <div class="clearfix"> </div>
                </form>
            </div>
        </div>
    </div>
    <!-- //subscribe -->
    <!-- map -->
    <div id="contact" class="map">
        <div class="col-sm-6 map-right">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.482996455866!2d90.39172151536421!3d23.87248579001758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c5f93917dfa7%3A0x48cbd6a49b94507b!2sZarab%20Fashions!5e0!3m2!1sen!2sbd!4v1607256163682!5m2!1sen!2sbd"></iframe>
        </div>
        <div class="col-sm-6 map-pos">
            <div class="address-row">
                <div class="col-xs-2 address-left">
                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                </div>
                <div class="col-xs-10 address-right">
                    <h5>Visit Us</h5>
                    <p>House no. 88( 2nd Fl.), Lake Drive Road, Sector 7, Uttara, Dhaka-1230, Bangladesh.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="address-row w3-agileits">
                <div class="col-xs-2 address-left">
                    <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                </div>
                <div class="col-xs-10 address-right">
                    <h5>Mail Us</h5>
                    <p><a href="#">ceo@zarabfashions.com</a></p>
                    <p><a href="#">zarabfashions2000@gmail.com</a></p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="address-row">
                <div class="col-xs-2 address-left">
                    <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                </div>
                <div class="col-xs-10 address-right">
                    <h5>Call Us</h5>
                    <p>+880 1754333344 (WhatsApp)</p>
                    <p>+880 1919000035</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //map -->
    <!-- contact -->
    <div class="contact">
        <div class="container">
            <h3 class="agileinfo_title">Contact<span> Us</span> </h3>
            <form action="#" method="post">
                <div class="col-sm-6 contact-left">
                    <input type="text" name="Name" placeholder="Your Name" required="">
                    <input type="email" name="Email" placeholder="Email" required="">
                    <input type="text" name="Mobile Number" placeholder="Mobile Number" required="">
                </div>
                <div class="col-sm-6 contact-right">
                    <textarea name="Message" placeholder="Message" required=""></textarea>
                    <input type="submit" value="Submit" >
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
    <!-- //contact -->

@endsection
