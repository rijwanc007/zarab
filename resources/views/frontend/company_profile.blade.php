@extends('frontend.master')
@section('profile','active')
@section('content')
    <!-- banner -->
    <div class="agileits-banner5 jarallax">
    @include('frontend.include.header')
    <!-- banner-text -->
        <div class="banner-text">
            <div class="container">
                <div class="banner-w3lstext">
                    <h1><a href="#">Company Profile<span>Zarab Fashion</span></a></h1>
                    <p>A house of qualified and experienced buying experts from Bangladesh</p>
                </div>
            </div>
        </div>
    </div>
    <!-- //banner-text -->
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="card profile_card">
                    <div class="card-body">
                        <h3 class="agileinfo_title">Zarab Fashions</h3>
                        <p> <b>Head Office :</b> House no. 88 ( 2nd fl. ), Lake Drive Road, Sector – 7, Uttara</p>
                        <p>Dhaka – 1230, Bangladesh</p>
                        <p> <b>Cell :</b> +880 1754333344(WhatsApp)</p>
                        <p>+880 1919000035</p>
                        <p> <b>Email :</b> ceo@zarabfashions.com</p>
                        <p> zarabfashions2000@gmail.com</p>
                        <p> <b>Website :</b> <a href="www.zarabfashions.com">www.zarabfashions.com</a> </p>
                        <p><b>Available In :</b></p>
                        <p><img src="{{asset('assets/images/icon/mail.png')}}" class="profile_social_media_logo">
                            <img src="{{asset('assets/images/icon/wp.png')}}" class="profile_social_media_logo">
                            <img src="{{asset('assets/images/icon/zoom.png')}}" class="profile_social_media_logo">
                            <img src="{{asset('assets/images/icon/skype.png')}}" class="profile_social_media_logo">
                            <img src="{{asset('assets/images/icon/linkedin.png')}}" class="profile_social_media_logo">
                        </p>
                        <p ><b>Year Of Establishment :</b> 2010</p>
                        <p ><b>Nature Of Business :</b> 100% Export oriented ready-made garments</p>
                    </div>
                </div>
            </div>
        </div>
        <br/><br/>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="card profile_card">
                    <div class="card-body">
                        <p class="text-center">Ready-made garments and related products</p>
                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <h3 class="agileinfo_title text-center">Knitwear<hr class="h2_product_list"/></h3>
                                <ul class="product_list" >
                                    <li>Mens L/S & S/S T-shirt</li>
                                    <li>Mens & Ladies Pk Polo</li>
                                    <li>Tank Top, Boxer shorts</li>
                                    <li>Lingerie, Legging</li>
                                    <li>Hoody Jacket in single jersey</li>
                                    <li>pique</li>
                                    <li>Rib</li>
                                    <li>interlock</li>
                                    <li>Fleece fabric</li>
                                    <li>And many more..</li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <h3 class="agileinfo_title text-center">Woven<hr class="h2_product_list"/></h3>
                                <ul class="product_list" >
                                    <li>Men’s L/S & S/S Shirt</li>
                                    <li>Ladies L/S & S/S Shirt</li>
                                    <li>Flannel Shirt</li>
                                    <li>Denim Shirt</li>
                                    <li>Denim Long Pants</li>
                                    <li>Denim Shorts</li>
                                    <li>Trouser</li>
                                    <li>Boxer Shorts</li>
                                    <li>Jacket</li>
                                    <li>Shirt</li>
                                    <li>Twill</li>
                                    <li>Denim</li>
                                    <li>Polyester</li>
                                    <li>And many more...</li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <h3 class="agileinfo_title text-center">Sweater<hr class="h2_product_list"/></h3>
                                <ul class="product_list" >
                                    <li>Sweater</li>
                                    <li>Pullover</li>
                                    <li>Cardigan in 5gg, 7gg, 12gg, 14gg in cotton</li>
                                    <li>acrylic</li>
                                    <li>cashmere</li>
                                    <li>viscose</li>
                                    <li>woolen blend</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <p> <b>Source of Raw Materials : </b>Local and Imported</p>
                <p> <b>Portfolio : </b>URembo(UK), LEFORGERON(Ivory Coast), Little Loungers(USA), A&M(Ukraine)</p>
                <p> <b>Associate Factories : </b>
                <ul class="product_list" >
                    <li>Fakir Apparels Ltd.</li>
                    <li>Knit Concern Ltd.</li>
                    <li>Fakir Knitwear ltd.</li>
                    <li>Moni Sweaters Ltd.</li>
                    <li>Columbia Fashions Ltd.</li>
                    <li>Khan Textiles Ltd.</li>
                    <li>Western Fashions Ltd.</li>
                </ul>
                </p>
                <p> <b>Our Services : </b>
                <ul class="product_list" >
                    <li>Order receives from the buyer</li>
                    <li>Finding good suppliers (local factory) to complete the order</li>
                    <li>We deal with only trusted factory</li>
                    <li>Order processing from local factories</li>
                    <li>Making product development samples for buyers</li>
                    <li>Contacting with buyers for necessary approvals</li>
                    <li>Forwarding all the comments and approvals to the factories</li>
                    <li>Follow-up order processing according to buyers demand</li>
                    <li>Maintain desired product quality from sample to production</li>
                    <li>Should follow inspection terms and conditions according to buyers demand</li>
                    <li>Shipping the goods</li>
                </ul>
                </p>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12"></div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <h3 class="agileinfo_title">Bank <span>Details</span><hr class="h2_company_profile"/></h3>
                    <div class="card profile_card">
                        <div class="card-body">
                            <p><b>Account Name :</b>Zarab Fashions</p>
                            <p><b>Bank Name :</b>Union Bank Limited</p>
                            <p><b>Account No. :</b>0271010007381</p>
                            <p><b>Branch :</b>Uttara</p>
                            <p><b>Address :</b>House no. 37, Sonargaon Janapath Road, Sector no. 7, Uttara</p>
                            <p>Dhaka-1230, Bangladesh</p>
                            <p><b>SWIFT :</b>UBLDBDDH</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="team" class="team">
                <div class="container">
                    <h3 class="agileinfo_title text-center"> <span>Management</span><hr class="h2_about_us"/></h3>
                    <p style="text-align: justify">
                        The overall management and supervision of the company is being vested on the Management Team. The Management Team consists with Merchandising Manager, Merchandisers, Quality Control Manager, Quality Controller, Production Manager, Production Coordinator, Sampleman, Commercial Manager, Commercial Executive. The CEO is responsible for overall supervision.  The CEO is being assisted by the management team members and a group of qualified and experienced managerial and technical professionals for efficient management and smooth operation of the business.
                    </p>
                    <div class="team-row-agileinfo">
                        <div class="col-md-3"></div>
                        <div class="col-md-6 col-sm-6 col-xs-6 team-grids">
                            <div class="thumbnail team-agileits">
                                <img src="{{asset('assets/images/team/ceo.jpg')}}" class="img-responsive" alt=""/>
                                <div class="w3agile-caption">
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
                                    <p>Head Of<br/> Merchandising</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 team-grids">
                            <div class="thumbnail team-agileits">
                                <img src="{{asset('assets/images/team/hoq.jpg')}}" class="img-responsive" alt=""/>
                                <div class="w3agile-caption">
                                    <p>Head Of<br/> Quality Control</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 team-grids">
                            <div class="thumbnail team-agileits">
                                <img src="{{asset('assets/images/team/hoc.jpg')}}" class="img-responsive" alt=""/>
                                <div class="w3agile-caption">
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
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card profile_card">
                    <div class="card-body">
                        <h3 class="agileinfo_title">CEO's <span>Profile</span><hr class="h2_ceos_profile"/></h3>
                        <p style="text-align: justify">
                            Abdullah Almuty Farid Amin is the CEO and Owner of this company. He has obtained B.A( Hons.) , M.A degree from Dhaka University in 1993. He also obtained MNFS and MPH degree from University of South Asia. He started his career as a production coordinator of a knit composite factory in 1995. He worked there for 2 years. During this period he obtained a Scholarship on “Management of Garment Industry” from AOTS(The Association for Overseas Technical Scholarship), Japan. After then switched over to a foreign liaison office named EWM( Edinburgh Woolen Mills) as a merchandiser. He worked there for 2.5 years.  After that he joined in H & M Dhaka office as a merchandiser. After 2 years of working he promoted to in-charge of knit and sweater division. He worked there for 5 years. In 2010 he started his own business with readymade garments and now he has become successful entrepreneur. He has 25 years of practical experience in this field.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="team" class="team">
            <div class="container">
                <h3 class="agileinfo_title text-center"> Overseas<span>Representatives</span><hr class="h2_representaives"/></h3>
                <div class="team-row-agileinfo">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 col-sm-6 col-xs-6 team-grids">
                        <div class="thumbnail team-agileits">
                            <img src="{{asset('assets/images/team/or1.jpg')}}" class="img-responsive" alt=""/>
                            <div class="w3agile-caption">
                             <h4>Ousmane G Faye</h4>
                                <p>UK, Senegal, Mali, Mauritania, Gambia</p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="team-row-agileinfo">
                    <div class="col-md-4 col-sm-6 col-xs-6 team-grids">
                        <div class="thumbnail team-agileits">
                            <img src="{{asset('assets/images/team/or2.jpg')}}" class="img-responsive" alt=""/>
                            <div class="w3agile-caption">
                                <h4>Kouame Adei</h4>
                                <p>Guinea, Benin, Burkina Faso, Sierra Leone, Morocco, Liberia, Mauritius</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 team-grids">
                        <div class="thumbnail team-agileits">
                            <img src="{{asset('assets/images/team/or3.jpg')}}" class="img-responsive" alt=""/>
                            <div class="w3agile-caption">
                                <h4>Laud Torkornoo</h4>
                                <p> Namibia, Zimbabwe, Uganda</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 team-grids">
                        <div class="thumbnail team-agileits">
                            <img src="{{asset('assets/images/team/or4.jpg')}}" class="img-responsive" alt=""/>
                            <div class="w3agile-caption">
                                <h4>Yannick Ngoran</h4>
                                <p>Ivory Coast</p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="team-row-agileinfo">
                    <div class="col-md-4 col-sm-6 col-xs-6 team-grids">
                        <div class="thumbnail team-agileits">
                            <img src="{{asset('assets/images/team/or5.jpg')}}" class="img-responsive" alt=""/>
                            <div class="w3agile-caption">
                                <h4>Derrick Osei</h4>
                                <p>Ghana</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 team-grids">
                        <div class="thumbnail team-agileits">
                            <img src="{{asset('assets/images/team/or7.png')}}" class="img-responsive" alt=""/>
                            <div class="w3agile-caption">
                                <h4>David Dimenne</h4>
                                <p>South Africa</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 team-grids">
                        <div class="thumbnail team-agileits">
                            <img src="{{asset('assets/images/team/or6.jpg')}}" class="img-responsive" alt=""/>
                            <div class="w3agile-caption">
                                <h4>Mahamat Nour</h4>
                                <p>Togo </p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6"><a href="{{asset('assets/images/document/company_profile.pdf')}}" class="btn btn-info btn-block" target="_blank"><i class="fa fa-download" aria-hidden="true"> </i> Download Company Profile</a></div>
        </div>
    </div>
    <br/><br/>
@endsection
