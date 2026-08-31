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
                        <h1>PhD Programs</h1>
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
                <li>PhD Programs</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->

    <!-- About Start -->
    <div class="aboutus_section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="aboutus_inner">
                        <div class="row justify-content-center flex-sm-row-reverse">
                            <div class="col-lg-7 col-md-6">
                                <div class="aboutright">
                                    <img class="img-fluid" src="{{ asset('assets/images/home/about-us.webp') }}" alt="about image">
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 d-flex align-items-center">
                                <div class="aboutleft">
                                    <div class="heading">PhD Programs</div>
                                    <p>The SCCCS offers an interdisciplinary platform for research for aspirants of the SIU doctoral program. The applications for the PhD program are open for this year and can be applied from the <b> <a class="red_link" target="_blank" href="https://scri.siu.edu.in/">Symbiosis International (Deemed University)</a></b></p>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

        <!-- PHD Programs Start -->
    <div class="phd_programs_section">
        <div class="container">
            <div class="phd_programs_inner">
                <div class="row">
                    <div class="col-md-6 d-flex align-item-center">
                        <div class="phd-content">
                            <div class="sub_heading">
                                Know more about the PhD program:
                            </div>
                            <a target="_blank" href="https://scri.siu.edu.in/">https://scri.siu.edu.in/</a>
                            <br><br>
                            <div class="sub_heading">
                                For General Queries on PhD programme, you may call the following numbers:
                            </div>
                            <a href="tel:020-6693-6918">020-6693-6918</a>, <a href="tel:020- 6693-6919">020- 6693-6919</a>, <a href="tel:7972282128">7972282128</a>, <a href="tel:8668988218">8668988218</a>
                            <br><br>
                            <div class="sub_heading">
                                Send an email to: 
                            </div>
                            <a target="_blank" href="mailto:admissionphd@siu.edu.in">admissionphd@siu.edu.in</a>
                            <br><br>
                            <div class="sub_heading">
                                For Technical Queries on the application forms, payment etc:
                            </div>
                            <a href="tel:7200495273">7200495273</a>, <a href="tel:020- 6693-6919">020- 6693-6919</a>, <a href="tel:7972282128">7972282128</a>, <a href="tel:8668988218">8668988218</a>
                            
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="phd_programs_right">
                            <p><span class="sub_heading">Note: </span> <span>Helpdesk Phone support will be available between 10.00am and 5.00pm,Monday-Friday.</span></p>
                            <div class="sub_heading mt-3">Symboisis International (Deemed University)</div>
                            <p>Symboisis Centre for Research and Innovation (SSRI)</p>
                            <p><b class="sub_heading">Gram</b>: Lavale,</p>
                            <p><b class="sub_heading">Tal</b>: Mulshi,</p>
                            <p><b class="sub_heading">District</b>: Pune</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PHD Programs End -->
      
</main>
@include('footer')

