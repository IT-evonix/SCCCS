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
            <!--<div class="row">-->
            <!--    <div class="col-lg-12">-->
            <!--        <div class="blog-list-inner">-->

            <!--            <a href="https://www.linkedin.com/pulse/earth-day-2026-our-power-planet-symbiosis-centre-for-climate-chang-eiofc/?trackingId=NRb4iSrotMfqOZVPYDwcdw%3D%3D" target="_blank" class="blog-list-item col-lg-3 col-md-3">-->
            <!--                    <div class="blog-image">-->
            <!--                        <img class="img-fluid" src="{{ asset('/assets/images/blog/Earth-Day-2026-Our-Power-Our-Planet.webp') }}" alt="Blog 1">-->
            <!--                    </div>-->
            <!--                    <div class="blog-content text-left">-->
            <!--                        Earth Day 2026: Our Power, Our Planet<br>-->
            <!--                        Author/s: Prof. Prakash Rao, Ph.D-->

            <!--                    </div>-->
            <!--            </a>      -->
            <!--             <a href="https://www.linkedin.com/pulse/india-raises-climate-bar-ambition-anchored-o8fyc/?trackingId=lkdjI7zdSouZnEjpQF3cyA%3D%3D" target="_blank" class="blog-list-item col-lg-3 col-md-3">-->
            <!--                    <div class="blog-image">-->
            <!--                        <img class="img-fluid" src="{{ asset('/assets/images/blog/India-Raises.webp') }}" alt="Blog 1">-->
            <!--                    </div>-->
            <!--                    <div class="blog-content text-left"> -->
            <!--                    India Raises the Climate Bar: Ambition Anchored in Delivery <br>-->
            <!--                    Author/s: Abhijit Kulkarni, Ph.D and Prof. Prakash Rao, Ph.D-->
            <!--                    </div>-->
            <!--            </a>      -->
            <!--            <a href="https://www.linkedin.com/pulse/when-heat-becomes-disaster-governance-0gx9c/?trackingId=aREz8VMt127BH4xLLjHx0Q%3D%3D" target="_blank" class="blog-list-item col-md-3">-->
            <!--                    <div class="blog-image">-->
            <!--                        <img class="img-fluid" src="{{ asset('/assets/images/blog/Heat_Becomes_a_Disaster.webp') }}" alt="Blog 1">-->
            <!--                    </div>-->
            <!--                    <div class="blog-content">-->
            <!--                          When Heat Becomes a Disaster, Governance Finally Catches Up with Climate-->
            <!--                    </div>-->
            <!--            </a>-->
            <!--            <a href="https://www.linkedin.com/pulse/carbon-capture-utilization-india-bets-tprqc/?trackingId=1DKEmPg6JQ1vvIMIJipBdQ%3D%3D" target="_blank" class="blog-list-item col-lg-3 col-md-3">-->
            <!--                    <div class="blog-image">-->
            <!--                        <img class="img-fluid" src="{{ asset('/assets/images/blog/CarbonCapture.webp') }}" alt="Blog 1">-->
            <!--                    </div>-->
            <!--                    <div class="blog-content text-left">-->
            <!--                          Carbon Capture and Utilization: India Bets on Realism Over Rhetoric-->
            <!--                    </div>-->
            <!--            </a>  -->

            <!--        </div>-->
            <!--    </div>-->

            <!--</div>-->
            <div class="row">
    <div class="col-lg-12">
        <div class="blog-list-inner row">

            <a href="https://www.linkedin.com/pulse/earth-day-2026-our-power-planet-symbiosis-centre-for-climate-chang-eiofc/?trackingId=NRb4iSrotMfqOZVPYDwcdw%3D%3D" 
               target="_blank" class="blog-list-item col-lg-4 col-md-6 col-sm-12">
                <div class="blog-image">
                    <img class="img-fluid" src="{{ asset('/assets/images/blog/Earth-Day-2026-Our-Power-Our-Planet.webp') }}" alt="Blog 1">
                </div>
            <div class="blog-content text-left">
              <span class="blog-title">
                Earth Day 2026: Our Power, Our Planet
              </span> 
              <span class="blog-author">
                Author/s: Prof. Prakash Rao, Ph.D
              </span>
            </div>
            </a>

            <a href="https://www.linkedin.com/pulse/india-raises-climate-bar-ambition-anchored-o8fyc/?trackingId=lkdjI7zdSouZnEjpQF3cyA%3D%3D" 
               target="_blank" class="blog-list-item col-lg-4 col-md-6 col-sm-12">
                <div class="blog-image">
                    <img class="img-fluid" src="{{ asset('/assets/images/blog/India-Raises.webp') }}" alt="Blog 1">
                </div>
                <div class="blog-content text-left">
                      <span class="blog-title">
                    India Raises the Climate Bar: Ambition Anchored in Delivery
                </span>
                 <span class="blog-author">
                    Author/s: Abhijit Kulkarni, Ph.D and Prof. Prakash Rao, Ph.D
                </span>
                </div>
            </a>

            <a href="https://www.linkedin.com/pulse/when-heat-becomes-disaster-governance-0gx9c/?trackingId=aREz8VMt127BH4xLLjHx0Q%3D%3D" 
               target="_blank" class="blog-list-item col-lg-4 col-md-6 col-sm-12">
                <div class="blog-image">
                    <img class="img-fluid" src="{{ asset('/assets/images/blog/Heat_Becomes_a_Disaster.webp') }}" alt="Blog 1">
                </div>
                <div class="blog-content text-left">
                    <span class="blog-title">
                    When Heat Becomes a Disaster, Governance Finally Catches Up with Climate 
                    </span>
                     <span class="blog-author">
                         Author/s : Abhijit Kulkarni, Ph.D and Prof. Prakash Rao,Ph.D
                     </span>
                </div>
            </a>

            <a href="https://www.linkedin.com/pulse/carbon-capture-utilization-india-bets-tprqc/?trackingId=1DKEmPg6JQ1vvIMIJipBdQ%3D%3D" 
               target="_blank" class="blog-list-item col-lg-4 col-md-6 col-sm-12">
                <div class="blog-image">
                    <img class="img-fluid" src="{{ asset('/assets/images/blog/CarbonCapture.webp') }}" alt="Blog 1">
                </div>
                <div class="blog-content text-left">
                    <span class="blog-title">
Carbon Capture and Utilization: India Bets on Realism Over Rhetoric 
</span>
 <span class="blog-author">
     Author/s : Abhijit Kulkarni, Ph.D and Prof. Prakash Rao,Ph.D
     </span>
                </div>
            </a>

        </div>
    </div>
</div>
        </div>
     </div>
    
</main>
@include('footer')
