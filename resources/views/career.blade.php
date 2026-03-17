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
                        <h1>Career</h1>
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
                <li>Career</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->

    <div class="career_main_box d-none">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading text-center">
                        OPENINGS
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="career_inner_box">
                        <div class="career_box">
                            <div class="career_box_left">
                                <p>Applications are invited for the post of Junior Research Fellow (JRF) / Junior Project Fellow (JPF) for NMHS – funded research project in Symbiosis Centre for Climate Change and Sustainability, (SCCCS) at Symbiosis International (Deemed University)</p>
                            </div>
                             <div class="career_box_right">
                                <a target="_blank" href="{{ asset('assets/pdf/SIU_NHMS_ADVT.pdf') }}"><img src="{{ asset('assets/images/inner-pages/pdf-icon.png') }}" alt=""> Click here for details</a>
                            </div>
                        </div>
                        <div class="career_box">
                            <div class="career_box_left">
                                <p>Applications are invited for the post of Research Assistant/ Project Assistant for the SIU- MJRP Project in Symbiosis Centre for Climate Change and Sustainability, (SCCCS) at Symbiosis International (Deemed University)</p>
                            </div>
                             <div class="career_box_right">
                                <a target="_blank" href="{{ asset('assets/pdf/Advt-for-PA-RA-under-MJRP.pdf') }}"><img src="{{ asset('assets/images/inner-pages/pdf-icon.png') }}" alt=""> Click here for details</a>
                            </div>
                        </div>
                        <div class="career_box">
                            <div class="career_box_left">
                                <p>Applications are invited for the post of <b>Research Assistant</b> in Symbiosis Centre for Climate Change and Sustainability, (SCCCS) at Symbiosis International (Deemed University)</p>
                            </div>
                             <div class="career_box_right">
                                <a target="_blank" href="{{ asset('assets/pdf/Document-1.pdf') }}"><img src="{{ asset('assets/images/inner-pages/pdf-icon.png') }}" alt=""> Click here for details</a>
                            </div>
                        </div>
                        <div class="career_box">
                            <div class="career_box_left">
                                <p>Applications are invited for the position of <b>Women Scientist</b> in Symbiosis Centre for Climate Change and Sustainability, (SCCCS) at Symbiosis International (Deemed University)</p>
                            </div>
                             <div class="career_box_right">
                                <a target="_blank" href="{{ asset('assets/pdf/Document-2.pdf') }}"><img src="{{ asset('assets/images/inner-pages/pdf-icon.png') }}" alt=""> Click here for details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="volunteer-section d-none">
        <div class="container">
            <div class="vs-heading">
                <div class="heading text-center">
                    Volunteer & Positions
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
            </div>
            <div class="vs-grid">
                <div class="vs-card">
                    <span class="vs-tag volunteer">Volunteer</span>
                    <h3>Event Helper</h3>
                    <div class="vs-meta">
                        <span class="vs-meta-item">Experience: <strong>0 – 1 yrs</strong></span>
                        <span class="vs-meta-item">Positions: <strong>5</strong></span>
                    </div>
                    <p>Assist in managing events, coordinate with participants, and support event logistics.</p>
                    <a href="#" class="readmore">Apply Now <img src="{{ asset('assets/images/readmore.svg') }}" alt="Read More"></a>
                </div>

                <div class="vs-card">
                    <span class="vs-tag position">Position</span>
                    <h3>Research Assistant</h3>
                    <div class="vs-meta">
                        <span class="vs-meta-item">Experience: <strong>0 – 1 yrs</strong></span>
                        <span class="vs-meta-item">Positions: <strong>5</strong></span>
                    </div>
                    <p>Work closely with the research team to create and maintain study documentation.</p>
                    <a href="#" class="readmore">Apply Now <img src="{{ asset('assets/images/readmore.svg') }}" alt="Read More"></a>
                </div>

                <div class="vs-card">
                    <span class="vs-tag volunteer">Volunteer</span>
                    <h3>Social Media Support</h3>
                    <div class="vs-meta">
                        <span class="vs-meta-item">Experience: <strong>0 – 1 yrs</strong></span>
                        <span class="vs-meta-item">Positions: <strong>5</strong></span>
                    </div>
                    <p>Help create and publish informative content across major social platforms.</p>
                    <a href="#" class="readmore">Apply Now <img src="{{ asset('assets/images/readmore.svg') }}" alt="Read More"></a>
                </div>

                <div class="vs-card">
                    <span class="vs-tag position">Position</span>
                    <h3>Project Coordinator</h3>
                    <div class="vs-meta">
                        <span class="vs-meta-item">Experience: <strong>0 – 1 yrs</strong></span>
                        <span class="vs-meta-item">Positions: <strong>5</strong></span>
                    </div>
                    <p>Coordinate various departmental tasks and ensure smooth project execution.</p>
                    <a href="#" class="readmore">Apply Now <img src="{{ asset('assets/images/readmore.svg') }}" alt="Read More"></a>
                </div>

            </div>
        </div>
    </section>

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

