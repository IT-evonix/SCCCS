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
                        <h1>Afshan Ahmad</h1>
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

                <li>People</li> /
                <li>Afshan Ahmad</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- About Start -->
    <div class="leadership_section arshan-ahmad">
        <div class="container">
            <div class="leadership_inner">
                <div class="head_img">
                    <img src="{{ asset('assets/images/people/afshan-ahmed.webp') }}" alt="">
                   
                </div>
                <div class="profile_content ">
                    <div class="profile_intro ">
                        <div class="div">
                            <div class="profile_heading heading">
                                Afshan Ahmad
                            </div>
                            <div class="profile_position">Research Assistant</div>
                        </div>
                        <div class="emailbox">
                            <a href="mailto:afshan.ahmad@siu.edu.in">afshan.ahmad@siu.edu.in</a>
                        </div>
                    </div>
                    <!--<p>With a Master's in Zoology from Patna Science College, Patna University, Afshan joins us after working as a Project Assistant for an SIU–Major Research Project (SIU-MJRP) evaluating the effects of residual antibiotics from hospital wastewater on plants.</p>-->
                    <!--<p>She currently works as a Research Assistant at the Centre, supporting ongoing research activities. She also plans to enroll for a PhD soon.</p>-->
                    <!--<p>Outside of work, she enjoys exploring nature and loves playing badminton.</p>-->
                    <p>With a Master's in Zoology from Patna University, Afshan joins us after working as a Project
                        Assistant on Symbiosis International University–Major Research Project (SIU-MJRP), where she
                        previously evaluated the impact of residual pharmaceutical concentrations from hospital
                        wastewater on surrounding soil and plant systems.</p>
                    <p>She currently works as a Research Assistant at the Centre, where she actively supports a wide
                        range of research and administrative activities. Her responsibilities include assisting faculty
                        with writing project proposals, analysing data, and contributing to the preparation of reports
                        and academic publications. She is also involved in conducting literature reviews and maintaining
                        documentation, which contribute to the smooth functioning of the Centre's research initiatives.
                        She has a keen interest in climate change-impacted zoonotic and infectious diseases, especially
                        vector-borne diseases.</p>
                        <div>
                            
                        </div>
                        
                    <p><strong><br>Broad Areas</strong></p>
                    <ol style="list-style-type: decimal; list-style-position: inside; ;">
                        <li>Residual pharmaceuticals in hospital wastewater</li>
                        <li>Climate change impacted zoonotic diseases</li>
                        <li>Impact of climatic variables on vector-borne disease</li>
                    </ol>
                </div>
                <div class="socialmedia_box">
                    <a target="_blank" href="https://www.linkedin.com/in/afshan-ahmad-22203384/"><img
                            src="{{ asset('assets/images/inner-pages/linkedin.webp') }}" alt=""></a>
                    <a target="_blank" href=""><img src="{{ asset('assets/images/inner-pages/scholar-google.webp') }}"
                            alt=""></a>
                    <a target="_blank" href="https://orcid.org/0009-0004-8197-9448"><img
                            src="{{ asset('assets/images/inner-pages/domain.webp') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- vision and mission start -->

</main>
@include('footer')