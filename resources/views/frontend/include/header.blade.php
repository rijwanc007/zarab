<!-- navigation -->
<div class ="top-nav">
    <div class="container">
        <div class="row tex">
            <div class="col-md-4 col-sm-12 col-xs-12 text-center">
                <div class="zarab_logo"><img src="{{asset('assets/images/zarab_logo.png')}}" class="zarab_logo_show text-center" ></div>
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12 text-center">
                <div class="whatsapp">
                    <img src="{{asset('assets/images/icon/wp.png')}}" class="whatsapp_logo">
                    <span class="whts_app_number">&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;+880 1754333344&nbsp;&nbsp;</span>
                    <span class="whts_app_number"><span class="mail_top">&nbsp;&nbsp;<b>E-mail</b></span> &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;ceo@zarabfashions.com</span>
                    <span class="whts_app_number"><span class="mail_top">&nbsp;&nbsp;<b>Language : </b></span><select class="language"><option>English</option><option>France</option></select></span>
                </div>
            </div>
{{--            <div class="col-md-4 col-sm-12 col-xs-12 text-center">--}}
{{--                <div class="whatsapp"><span class="whts_app_number"><span class="mail_top"><b>e-mail</b></span> &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;ceo@zarabfashions.com</span></div>--}}
{{--            </div>--}}
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
{{--                <div class="whatsapp"><img src="{{asset('assets/images/icon/mail2.jpg')}}" class="whatsapp_logo"> <span class="whts_app_number">&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;ceo@zarabfashions.com <br/> zarabfashions2000@gmail.com</span></div>--}}
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="navbar navbar-default" id="nav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- navbar-header -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="{{route('frontend.index')}}" class="hvr-underline-from-center @yield('home')">Home</a></li>
                    <li><a href="{{route('frontend.about')}}" class="hvr-underline-from-center @yield('about')">About Us</a></li>
                    <li><a href="{{route('frontend.portfolio')}}" class="hvr-underline-from-center @yield('portfolio')">Our Services</a></li>
                    <li><a href="{{route('frontend.products')}}" class="hvr-underline-from-center @yield('products')">Our Product</a></li>
                    <li><a href="{{route('frontend.profile')}}" class="hvr-underline-from-center @yield('profile')">Company Profile</a></li>
                    <li><a href="{{route('frontend.rmg')}}" class="hvr-underline-from-center @yield('rmg')">RMG in Bangladesh</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>

        </nav>
    </div>
</div>
<!-- //navigation -->
