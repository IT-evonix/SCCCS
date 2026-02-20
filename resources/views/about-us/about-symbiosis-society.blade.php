@include('header')
<main class="main">
    <!-- BANNER SECTION START -->
    <div class="inner_page_banner">
        <div class="banner_wrapper inner_page_banner_content">
            <div class="banner-bg">
                <img src="{{ asset('assets/images/banners/about-symbiosis-society.webp') }}" alt="About Symbiosis Society Banner" class="img-fluid">
            </div>
            <div class="slider-star">
                <img class="star_img" src="{{ asset('assets/images/slider-star.png') }}" alt="">
            </div>
            <div class="banner_content">
                <div class="container">
                    <div class="banner_text">
                        <h1>About Symbiosis Society</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BANNER SECTION END -->

    <!-- Breadcrumb Start -->
     <div class="bredcrumb_section">
        <div class="container">
            <ul>
                <li><a href="<?= url('/'); ?>">Home</a></li> /
                <li>About</li> /
                <li>About Symbiosis Society</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->

    <!-- About Start -->
    <div class="aboutus_section aboutus_inner_page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="aboutus_inner">
                        <!-- <div class="row">
                            <div class="col-md-12">
                                
                            </div>
                        </div> -->
                        <div class="row justify-content-center flex-sm-row-reverse">
                            <div class="col-lg-6 col-md-6">
                                <div class="aboutright">
                                    <img class="img-fluid" src="{{ asset('assets/images/about-symbiosis-society.webp') }}" alt="about image">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 d-flex align-items-center">
                                <div class="aboutleft">
                                    <div class="heading">About Symbiosis Society</div>
                                    <div class="motto">
                                        "<span>Vasudhaiva Kutumbakkam</span>" means "<span>World is one Family</span>"
                                    </div>
                                    <p>Symbiosis is a family of academic institutions which include University, Colleges, Centres, and Schools which have been imparting quality education for <b>50 years</b>. It is host to over <b>40,000</b> Indian and International students on campus.</p>
                                    <p>These campuses epitomise the Symbiosis vision, <b>‘Promoting International Understanding through Quality Education’</b>, and are a beehive of international students from all across the globe, being privy to Indian culture and hospitality. Many of these campuses are fully residential and have recreational facilities which include swimming pools, amphitheaters & Health Care centres.</p>
                                    <!-- <a href="#" class="readmore">
                                        Read More <img src="{{ asset('assets/images/readmore.svg') }}" alt="read more">
                                    </a> -->
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

      
</main>
@include('footer')

