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
                        <h1>Seminars Workshops Conferences</h1>
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
                <li>Media Activity</li> /
                <li>Seminars Workshops Conferences</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->
    <div class="gallery_main_sec">
        <div class="container">
            <div class="gallery_main_box">
                 <!-- <div class="heading">Gallery</div> -->
                <ul class="nav tabbing-btn mb-3 mobilescroll" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="gallery_tabbing1" data-bs-toggle="pill" data-bs-target="#gallerytabbing1" type="button" role="tab" aria-controls="gallerytabbing1" aria-selected="true">Seminars </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="gallery_tabbing2" data-bs-toggle="pill" data-bs-target="#gallerytabbing2" type="button" role="tab" aria-controls="gallerytabbing2" aria-selected="false">Workshops </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="gallery_tabbing3" data-bs-toggle="pill" data-bs-target="#gallerytabbing3" type="button" role="tab" aria-controls="gallerytabbing3" aria-selected="false">Conferences</button>
                    </li>
                   
                    </li>
                </ul>
                <div class="tab-content infrastructure_tab" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="gallerytabbing1" role="tabpanel" aria-labelledby="gallery_tabbing1">
                        <div class="gallery_main_box_inner">
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/about-symbiosis-society.webp') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/about-symbiosis-society.webp') }}" alt="Symbiosis Society" />
                                </a>
                                <h6>Upright Freezer: -86 Deep Freezer Cole Palmer (WW-16340-02)</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/gallery/infrastructure/High-Performance-Work-Station-and-Server.webp') }}" data-fancybox="gallerytabbing1" data-caption="" >
                                    <img src="{{ asset('assets/images/gallery/infrastructure/High-Performance-Work-Station-and-Server.webp') }}" alt="Student Activities" />
                                </a>
                                <h6>Rotary Evaporator</h6>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="gallerytabbing2" role="tabpanel" aria-labelledby="gallery_tabbing2">
                        <div class="gallery_main_box_inner">
                            <a href="{{ asset('assets/images/gallery/lab-life/tablife1.webp') }}" data-fancybox="gallerytabbing2" data-caption="">
                                <img src="{{ asset('assets/images/gallery/lab-life/tablife1.webp') }}" alt="Lab life">
                            </a>
                            <a href="{{ asset('assets/images/gallery/lab-life/tablife2.webp') }}" data-fancybox="gallerytabbing2" data-caption="">
                                <img src="{{ asset('assets/images/gallery/lab-life/tablife2.webp') }}" alt="Lab life">
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="gallerytabbing3" role="tabpanel" aria-labelledby="gallery_tabbing3">
                        <div class="gallery_main_box_inner">
                            <a href="{{ asset('assets/images/gallery/biodiversity/biodiversity1.webp') }}" data-fancybox="gallerytabbing3" data-caption="">
                                <img src="{{ asset('assets/images/gallery/biodiversity/biodiversity1.webp') }}" alt="Biodiversity">
                            </a>
                            <a href="{{ asset('assets/images/gallery/biodiversity/biodiversity2.webp') }}" data-fancybox="gallerytabbing3" data-caption="">
                                <img src="{{ asset('assets/images/gallery/biodiversity/biodiversity2.webp') }}" alt="Biodiversity">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@include('footer')
