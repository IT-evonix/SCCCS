@include('header')
<main class="main">
    <!-- BANNER SECTION START -->
    <div class="inner_page_banner">
        <div class="banner_wrapper inner_page_banner_content">
            <div class="banner-bg">
                <img src="{{ asset('assets/images/banners/about-siu.webp') }}" alt="About Symbiosis Society Banner"
                    class="img-fluid">
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
                <li>Media & Activity</li> /
                <li>Seminars Workshops Conferences</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <div class="gallery_main_sec">
        <div class="container">
            <div class="gallery_main_box">
                <!-- <div class="heading">Gallery</div> -->
                <ul class="nav tabbing-btn mb-3 mobilescroll Workshops_conferences" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="gallery_tabbing1" data-bs-toggle="pill"
                            data-bs-target="#gallerytabbing1" type="button" role="tab" aria-controls="gallerytabbing1"
                            aria-selected="true">Seminars </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="gallery_tabbing2" data-bs-toggle="pill"
                            data-bs-target="#gallerytabbing2" type="button" role="tab" aria-controls="gallerytabbing2"
                            aria-selected="false">Workshops </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="gallery_tabbing3" data-bs-toggle="pill"
                            data-bs-target="#gallerytabbing3" type="button" role="tab" aria-controls="gallerytabbing3"
                            aria-selected="false">Conferences</button>
                    </li>

                    </li>
                </ul>
                <div class="tab-content infrastructure_tab" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="gallerytabbing1" role="tabpanel"
                        aria-labelledby="gallery_tabbing1">
                        <div class="gallery_main_box_inner">
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seminars1-1.webp') }}"
                                    data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seminars1-1.webp') }}"
                                        alt="Symbiosis Society" />
                                </a>
                            </div>
                             <div class="gallery_main_box_inner">
                                <div class="gallery_box">
                                            <a href="{{ asset('assets/pdf/Dr-Himanshu-Kumar.pdf') }}" target="_blank">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/Dr-Himanshu-Kumar.webp') }}"
                                                    alt="Fundamental_pdf.web" />
                                            </a>
                                        </div>
                        </div>            
                            
                        </div>
                    </div>

                    <div class="tab-pane fade" id="gallerytabbing2" role="tabpanel" aria-labelledby="gallery_tabbing2">
                        <div class="workshopinner">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="innertabbing1" data-bs-toggle="pill"
                                        data-bs-target="#innertab1" type="button" role="tab" aria-controls="innertab1"
                                        aria-selected="true">Seedball Workshop</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="innertabbing2" data-bs-toggle="pill"
                                        data-bs-target="#innertab2" type="button" role="tab" aria-controls="innertab2"
                                        aria-selected="false">Fundamentals of Research- Workshop</button>
                                </li>
                                <!-- <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="innertabbing3" data-bs-toggle="pill" data-bs-target="#innertab3" type="button" role="tab" aria-controls="innertab3" aria-selected="false">Contact</button>
                                </li> -->
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="innertab1" role="tabpanel"
                                    aria-labelledby="innertabbing1">
                                    <div class="gallery_main_box_inner">
                                        <div class="gallery_box">
                                            <a href="https://www.instagram.com/reel/DKqtqjctmmh/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA%3D%3D"
                                                target="_blank"
                                                rel="noopener noreferrer">

                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal20.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div>
                                        <!--<div class="gallery_box">-->
                                        <!--    <a data-fancybox="gallerytabbing1" href="javascript:;"-->
                                        <!--        data-caption="Workshop Video"-->
                                        <!--        data-src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal20.webp') }}"-->
                                        <!--        data-type="video">-->

                                        <!--        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal3.webp') }}"-->
                                        <!--            alt="Symbiosis Society" />-->
                                        <!--    </a>-->
                                        <!--</div>-->
                                        
                                        <div class="gallery_box">
                                            <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal1.webp') }}"
                                                data-fancybox="gallerytabbing1" data-caption="">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal1.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div>
                                        <div class="gallery_box">
                                            <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal2.webp') }}"
                                                data-fancybox="gallerytabbing1" data-caption="">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal2.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div>
                                        <!-- <div class="gallery_box">
                                            <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal3.webp') }}"
                                                data-fancybox="gallerytabbing1" data-caption="">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal3.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div> -->
                                        <div class="gallery_box">
                                            <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal4.webp') }}"
                                                data-fancybox="gallerytabbing1" data-caption="">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal4.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div>
                                        <div class="gallery_box">
                                            <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal5.webp') }}"
                                                data-fancybox="gallerytabbing1" data-caption="">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal5.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div>
                                        <div class="gallery_box">
                                            <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal6.webp') }}"
                                                data-fancybox="gallerytabbing1" data-caption="">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal6.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div>
                                        <div class="gallery_box">
                                            <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal7.webp') }}"
                                                data-fancybox="gallerytabbing1" data-caption="">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal7.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div>
                                        <div class="gallery_box">
                                            <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal8.webp') }}"
                                                data-fancybox="gallerytabbing1" data-caption="">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal8.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div>
                                        <div class="gallery_box">
                                            <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal9.webp') }}"
                                                data-fancybox="gallerytabbing1" data-caption="">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal9.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div>
                                        <div class="gallery_box">
                                            <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/Seedbal10.webp') }}"
                                                data-fancybox="gallerytabbing1" data-caption="">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/Seedbal10.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div>
                                        <div class="gallery_box">
                                            <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal11.webp') }}"
                                                data-fancybox="gallerytabbing1" data-caption="">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal11.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div>
                                        <div class="gallery_box">
                                            <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal12.webp') }}"
                                                data-fancybox="gallerytabbing1" data-caption="">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal12.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div>
                                        <div class="gallery_box">
                                            <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal13.webp') }}"
                                                data-fancybox="gallerytabbing1" data-caption="">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal13.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div>
                                        <div class="gallery_box">
                                            <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal14.webp') }}"
                                                data-fancybox="gallerytabbing1" data-caption="">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal14.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div>
                                        <div class="gallery_box">
                                            <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal15.webp') }}"
                                                data-fancybox="gallerytabbing1" data-caption="">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal15.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div>
                                        <div class="gallery_box">
                                            <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal16.webp') }}"
                                                data-fancybox="gallerytabbing1" data-caption="">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal16.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div>
                                        <div class="gallery_box">
                                            <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal17.webp') }}"
                                                data-fancybox="gallerytabbing1" data-caption="">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal17.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div>
                                        <div class="gallery_box">
                                            <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal18.webp') }}"
                                                data-fancybox="gallerytabbing1" data-caption="">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal18.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div>
                                        <div class="gallery_box">
                                            <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal19.webp') }}"
                                                data-fancybox="gallerytabbing1" data-caption="">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal19.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div>
                                        <!-- <div class="gallery_box">
                                            <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal20.webp') }}"
                                                data-fancybox="gallerytabbing1" data-caption="">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal20.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div> -->
                                        <div class="gallery_box">
                                            <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal21.webp') }}"
                                                data-fancybox="gallerytabbing1" data-caption="">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal21.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div>
                                        <div class="gallery_box">
                                            <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal22.webp') }}"
                                                data-fancybox="gallerytabbing1" data-caption="">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal22.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div>
                                        <div class="gallery_box">
                                            <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal23.webp') }}"
                                                data-fancybox="gallerytabbing1" data-caption="">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal23.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div>
                                        <div class="gallery_box">
                                            <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal24.webp') }}"
                                                data-fancybox="gallerytabbing1" data-caption="">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/seedbal24.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div>

                                    </div>
                                    <!-- <div class="tab-pane fade" id="innertab3" role="tabpanel" aria-labelledby="innertabbing3">333</div> -->
                                </div>
                                <div class="tab-pane fade" id="innertab2" role="tabpanel" aria-labelledby="innertabbing2">
                                    <div class="gallery_main_box_inner">
                                                                               
                                       <div class="gallery_box">
                                            <a href="{{ asset('assets/pdf/SYMRESEARCH Pre-Conference - Fundamentals of Research- Report.pdf') }}" target="_blank">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/Fundamental_pdf.web') }}"
                                                    alt="Fundamental_pdf.web" />
                                            </a>
                                        </div>
                                         
                                        
                                        <div class="gallery_box">
                                            <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/fundamental1.webp') }}"
                                                data-fancybox="gallerytabbing1" data-caption="">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/fundamental1.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div>
                                        <div class="gallery_box">
                                            <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/fundamental2.webp') }}"
                                                data-fancybox="gallerytabbing1" data-caption="">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/fundamental2.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div>
                                        <div class="gallery_box">
                                            <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/fundamental3.webp') }}"
                                                data-fancybox="gallerytabbing1" data-caption="">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/fundamental3.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div>
                                        <div class="gallery_box">
                                            <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/fundamental4.webp') }}"
                                                data-fancybox="gallerytabbing1" data-caption="">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/fundamental4.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div>
                                        <div class="gallery_box">
                                            <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/fundamental5.webp') }}"
                                                data-fancybox="gallerytabbing1" data-caption="">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/fundamental5.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div>
                                        <div class="gallery_box">
                                            <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/fundamental6.webp') }}"
                                                data-fancybox="gallerytabbing1" data-caption="">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/fundamental6.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div>
                                        <div class="gallery_box">
                                            <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/fundamental7.webp') }}"
                                                data-fancybox="gallerytabbing1" data-caption="">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/fundamental7.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div>
                                        <div class="gallery_box">
                                            <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/fundamental8.webp') }}"
                                                data-fancybox="gallerytabbing1" data-caption="">
                                                <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/fundamental8.webp') }}"
                                                    alt="Symbiosis Society" />
                                            </a>
                                        </div>

                                    </div>
                                    <!-- <div class="fundamental_readmore">
                                        <a href="{{ asset('assets/pdf/Fundamentals of Research SYMRESEARCH Pre-Conference Report.pdf') }}">

                                            <button class="readmore fundamental_readmore">
                                                view Fundamentals of Research SYMRESEARCH Pre-Conference Report
                                            </button>
                                        </a>

                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="gallerytabbing3" role="tabpanel" aria-labelledby="gallery_tabbing3">

                        <div class="workshopinner">

                            <!-- Inner Tabs -->
                            <ul class="nav nav-pills mb-3" role="tablist">

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="conf_innertabbing1"
                                        data-bs-toggle="pill" data-bs-target="#conf_innertab1"
                                        type="button" role="tab">
                                        SYMRESEARCH 2.0 Conference
                                    </button>
                                </li>
                                <!-- second tab -->
                                <!-- <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="conf_innertabbing2"
                                        data-bs-toggle="pill" data-bs-target="#conf_innertab2"
                                        type="button" role="tab">
                                        Fundamentals of Research- Workshop
                                    </button>
                                </li> -->

                            </ul>

                            <!-- Inner tab content -->
                            <div class="tab-content">
                                <!-- tab 1st content -->
                                <div class="tab-pane fade show active" id="conf_innertab1" role="tabpanel" aria-labelledby="conf_innertabbing1">
                                    <div class="gallery_main_box_inner">

                                        <div class="gallery_box">
                                            <div class="gallery_box">
    <a href="{{ asset('assets/pdf/SYMRESEARCH_Track 4 Report.pdf') }}" target="_blank">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
                                        </div>
                                          <div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance_jul_1.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance_jul_1.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
                                        
                                          <div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance_jul_2.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance_jul_2.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
                                        
                                        
                                        
                                     
                                        <div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance1.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance1.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance2.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance2.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance3.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance3.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance4.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance4.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance5.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance5.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance6.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance6.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance7.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance7.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance8.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance8.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance9.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance9.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance10.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance10.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance11.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance11.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance12.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance12.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance13.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance13.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance14.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance14.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance15.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance15.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance16.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance16.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance17.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance17.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance18.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance18.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance19.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance19.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance20.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance20.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance21.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance21.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance22.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance22.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance23.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance23.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance24.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance24.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance25.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance25.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance26.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance26.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance27.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance27.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance28.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance28.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance29.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance29.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance30.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance30.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance31.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance31.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance32.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance32.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance33.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance33.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance34.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance34.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance35.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance35.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance36.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance36.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance37.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance37.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance38.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance38.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance39.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance39.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
<div class="gallery_box">
    <a href="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance40.webp') }}"
        data-fancybox="gallerytabbing1" data-caption="">
        <img src="{{ asset('assets/images/media-and-activity/seminars-workshops-conferences/confereance40.webp') }}"
            alt="Symbiosis Society" />
    </a>
</div>
                                    </div>
                                </div>

                                <!-- tab 2nd content -->
                                <!-- <div class="tab-pane fade" id="conf_innertab2" role="tabpanel" aria-labelledby="conf_innertabbing2">
                                    <p>Fundamentals of Research Workshop content yaha dikhega</p>
                                </div> -->

                            </div>

                        </div>

                    </div>
                </div>
            </div>
</main>
@include('footer')