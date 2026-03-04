@include('header')
<main class="main">
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
                        <h1>International / National Collaborations -Individual</h1>
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
                <li>Research</li> /
                <li>Collaborators</li> /
                <li>International / National Collaborations -Individual</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="heading mt-5 mb-5">
                    Coming Soon
                </div>
            </div>
        </div>
    </div>
</main>
@include('footer')