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
                        <h1>Events Calendar</h1>
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
                <li>Events Calendar</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->
    <div class="gallery_main_sec">
        <div class="container">
            <div class="gallery_main_box">
                <div class="gallery_main_box_inner">
                    <div class="gallery_box">
                        <a href="{{ asset('assets/pdf/SIU Nature Photography Competition 2026.pdf') }}" target="_blank">
                            <img src="{{ asset('assets/images/events/siu-nature-photography-2026-1.webp') }}" alt="SIU Nature Photography Competition 2026" style="object-fit: contain !important; background-color: #eeebe6;" />
                        </a>
                        <a href="{{ asset('assets/pdf/SIU Nature Photography Competition 2026.pdf') }}" target="_blank" style="text-decoration: none; height: auto; display: block; overflow: visible;">
                            <h6 style="text-align: center; margin-top: 10px; font-size: 14px; color: #7A7A7A; font-family: 'Montserrat-Regular'; font-weight: inherit;">SIU Nature Photography Competition 2026</h6>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</main>
@include('footer')
