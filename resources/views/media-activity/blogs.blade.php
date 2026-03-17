@include('header')

<main class="main new__blog_mainbox">
    <!-- BANNER SECTION START -->
    <div class="inner_page_banner">
        <div class="banner_wrapper inner_page_banner_content">
            <div class="banner-bg">
                <img src="{{ asset('assets/images/banners/about-siu.webp') }}" alt="About Symbiosis Society Banner" class="img-fluid">
            </div>
            <div class="slider-star">
                <img class="star_img" src="{{ asset('assets/images/slider-star.png') }}" alt="">
            </div>
            <div class="banner_content">
                <div class="container">
                    <div class="banner_text">
                        <h1>Blogs</h1>
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
                <li>Media & Activity</li> /
                <li>Blogs</li>
            </ul>
        </div>
     </div>
     <div class="main-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-list-inner">

                        <a href="https://www.linkedin.com/pulse/when-heat-becomes-disaster-governance-0gx9c/?trackingId=aREz8VMt127BH4xLLjHx0Q%3D%3D" target="_blank" class="blog-list-item col-md-3">
                                <div class="blog-image">
                                    <img class="img-fluid" src="{{ asset('/assets/images/blog/Heat_Becomes_a_Disaster.png') }}" alt="Blog 1">
                                </div>
                                <div class="blog-content">
                                      When Heat Becomes a Disaster, Governance Finally Catches Up with Climate
                                </div>
                        </a>
                         <a href="https://www.linkedin.com/pulse/carbon-capture-utilization-india-bets-tprqc/?trackingId=1DKEmPg6JQ1vvIMIJipBdQ%3D%3D" target="_blank" class="blog-list-item col-lg-3 col-md-3">
                                <div class="blog-image">
                                    <img class="img-fluid" src="{{ asset('/assets/images/blog/CarbonCapture.png') }}" alt="Blog 1">
                                </div>
                                <div class="blog-content text-left">
                                      Carbon Capture and Utilization: India Bets on Realism Over Rhetoric
                                </div>
                        </a>      
                    </div>
                </div>

            </div>
        </div>
     </div>
    
</main>
@include('footer')
