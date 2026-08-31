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
                        <h1>Visitors to SCCCS</h1>
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
                <li>Visitors to SCCCS</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="tab-content infrastructure_tab" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="gallerytabbing1" role="tabpanel"
                        aria-labelledby="gallery_tabbing1">
                        <div class="gallery_main_box_inner">
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/media-and-activity/visitors-to-scccs/Anshuman.webp') }}"
                                    data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/media-and-activity/visitors-to-scccs/Anshuman.webp') }}"
                                        alt="Symbiosis Society" />
                                </a>
                                <h6>Dr.Anshuman Khardenavis, Principal Scientist, CSIR - National Environmental Engineering Research Institute (NEERI)</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/media-and-activity/visitors-to-scccs/meeta.webp') }}"
                                    data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/media-and-activity/visitors-to-scccs/meeta.webp') }}"
                                        alt="Symbiosis Society" />
                                </a>
                                <h6>Dr. Meeta Lavania, Senior Fellow and Associate Director of Microbial Biotechnology at The Energy and Resources Institute</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/media-and-activity/visitors-to-scccs/Rajat.webp') }}"
                                    data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/media-and-activity/visitors-to-scccs/Rajat.webp') }}"
                                        alt="Symbiosis Society" />
                                </a>
                                <h6>Dr.Rajan Kotru, Integrated Mountain Initiative, New Delhi</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/media-and-activity/visitors-to-scccs/Revati.webp') }}"
                                    data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/media-and-activity/visitors-to-scccs/Revati.webp') }}"
                                        alt="Symbiosis Society" />
                                </a>
                                <h6>Dr. Revati Phalkey, Director, United Nations University - IIGH (Malaysia)</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/media-and-activity/visitors-to-scccs/Roxy.webp') }}"
                                    data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/media-and-activity/visitors-to-scccs/Roxy.webp') }}"
                                        alt="Symbiosis Society" />
                                </a>
                                <h6>Dr.Roxy Matthew Koll, Climate Scientist, Indian Institute of Tropical Meterology (IITM)</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/media-and-activity/visitors-to-scccs/ruchika.webp') }}"
                                    data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/media-and-activity/visitors-to-scccs/ruchika.webp') }}"
                                        alt="Symbiosis Society" />
                                </a>
                                <h6>Ruchika Drall, Deputy Secretary, Ministry of Environment, Forest and Climate Change, GoI</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/media-and-activity/visitors-to-scccs/sanjay.webp') }}"
                                    data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/media-and-activity/visitors-to-scccs/sanjay.webp') }}"
                                        alt="Symbiosis Society" />
                                </a>
                                <h6>Dr.Sanjay Zodpey, President, Public Health Foundation of India</h6>
                            </div>
                                <div class="gallery_box">
                                <a href="{{ asset('assets/images/media-and-activity/visitors-to-scccs/Himanshu.webp') }}"
                                    data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/media-and-activity/visitors-to-scccs/Himanshu.webp') }}"
                                        alt="Symbiosis Society" />
                                </a>
                                <h6>Dr.Himanshu Kumar, Danone Nutricia Research, Netherlands</h6>
                            </div>
                               <div class="gallery_box">
                                <a href="{{ asset('assets/images/media-and-activity/visitors-to-scccs/mr_krishna.webp') }}"
                                    data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/media-and-activity/visitors-to-scccs/mr_krishna.webp') }}"
                                        alt="Symbiosis Society" />
                                </a>
                                <h6> Mr. Krishnan Komandur,CEO and Mr. Ashish Marathe, GM - Adar Poonawalla Clean City Initiative, Pune</h6>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@include('footer')