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
                        <h1>Ankita Chopra</h1>
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
                <li>Ankita Chopra</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->

    <!-- About Start -->
    <div class="leadership_section">
        <div class="container">
           <div class="leadership_inner">
                <div class="head_img">
                    <img src="{{ asset('assets/images/people/ankita-chopra.webp') }}" alt="">
                    <div class="broad_areas_box">
                        <h6>Broad Areas</h6>
                        <ul>
                            <li>Sustainable agriculture</li>
                            <li>Plant-microbe interaction</li>
                            <li>Biofertilizer</li>
                            <li>Methane emission and mitigation</li>
                            <li>Carbon sequestration</li>
                        </ul>
                    </div>
                </div>
                <div class="profile_content">
                    <div class="profile_intro">
                        <div class="div">
                            <div class="profile_heading heading">
                                Ankita Chopra, <span>Ph.D</span>
                            </div>
                            <div class="profile_position">Project Scientist - DST WISE Kiran Women Scientist</div>
                        </div>
                        <div class="emailbox">
                            <a href="mailto:ankita.chopra_dstwos@siu.edu.in">ankita.chopra_dstwos@siu.edu.in</a>
                        </div>
                    </div>
                    <p>Dr. Ankita B. Chopra, PhD, joins our centre as a Project Scientist. She joins us as a DST WISE KIRAN Postdoctoral Fellow and works on enhancing the nutritional quality of hydroponic green fodder to reduce methane emissions from ruminants.</p>
                    <p>Dr. Chopra’s research interests span sustainable agricultural practices and plant–microbe interactions. Her previous work focuses on quorum sensing in rhizobacteria and their role in inducing systemic resistance in tea plants.</p>    
                </div>
                <div class="socialmedia_box">
                    <a target="_blank" href="https://www.linkedin.com/in/ankita-b-chopra-phd-5170991b2/"><img src="{{ asset('assets/images/inner-pages/linkedin.webp') }}" alt=""></a>
                    <a target="_blank" href="https://scholar.google.co.in/citations?user=1D16MEcAAAAJ&hl=en"><img src="{{ asset('assets/images/inner-pages/scholar-google.webp') }}" alt=""></a>
                    <a target="_blank" href="https://orcid.org/0000-0001-6297-4933"><img src="{{ asset('assets/images/inner-pages/domain.webp') }}" alt=""></a>
                </div>
           </div>
        </div>
    </div>
    <!-- About End -->
    <!-- vision and mission start -->
     
</main>
@include('footer')

