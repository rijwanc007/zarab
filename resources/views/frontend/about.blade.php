@extends('frontend.master')
@section('about','active')
@section('content')
    <!-- banner -->
    <div class="agileits-banner2 jarallax">
    @include('frontend.include.header')
    <!-- banner-text -->
        <div class="banner-text">
            <div class="container">
                <div class="banner-w3lstext">
                    <h1><a href="#">About Us<span>Zarab Fashion</span></a></h1>
                    <p>A house of qualified and experienced buying experts from Bangladesh</p>
                </div>
            </div>
        </div>
        <!-- //banner-text -->
    </div>
    <br/><br/>
        <div class="container">
            <h3 class="agileinfo_title text-center">About <span>Us</span><hr class="h2_about_us text-right"/></h3>
            <br/>
            <p style="text-align: justify">
                Zarab Fashions is a service based organization with basic objective of working as a representative of foreign buyers. The company started it’s operation in 2010. It can be mentioned here that each of our management team has more than 25 years working experience in their related field.  Initially company started exporting to some African and East European countries with some basic items. Later, it moved to EU and USA customers. Gradually it is shifting basic to fashionable items.  The company takes the responsibility to carry out final  inspection of the goods according to buyer’s requirements. The company maintains a high standard business ethics and responsibility. Currently Zarab Fashions is handling all type readymade garments in knitwear, woven and sweater items in all types of fabric and yarn.
            </p>
            <br/>
            <p style="text-align: justify">
                Zarab Fashions is professionally managed with some educated, technically qualified and dedicated staffs to ensure  quality products for the buyer. We uphold buyer’s brand value and principle. Company’s aim is to source excellent products for it’s  buyers from best suppliers. Company’s strength is on-time delivery, best quality and price.
            </p>
        </div>
        <br/><br/>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="agileinfo_title text-center"><span>Mission</span></h3>
                    <p style="text-align: justify">To maintain brand value and brand principle.
                        To be cost effective, innovative and globally competitive.
                        Ensuring on time delivery with right quality.
                        To ensure quality products at fair price and on time delivery through team efforts ; are to key to satisfy our customers.
                        To maintain honesty, integrity, transparency and fast communication.
                    </p>
                </div>
                <div class="col-md-6">
                    <img class="mission" src="{{asset('assets/images/mission_vision/mission.png')}}" alt="mission"/>
                </div>
            </div>
            <br/><br/>
            <div class="row">
                <div class="col-md-6">
                    <img class="vision" src="{{asset('assets/images/mission_vision/vision.png')}}" alt="vision"/>
                </div>
                <div class="col-md-6">
                    <h3 class="agileinfo_title text-center"> <span>Vision</span></h3>
                    <p style="text-align: justify">To attain customer satisfaction is the heart of our policy and strategy. We strive to become world renowned reliable and trustworthy sourcing agent for clothing company of the world in Bangladesh.</p>
                </div>
            </div>
        </div>
        <br/><br/><br/>
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
