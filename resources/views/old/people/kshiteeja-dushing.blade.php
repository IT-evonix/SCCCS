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
                        <h1>Kshiteeja Dushing</h1>
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
                <li>Kshiteeja Dushing</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->

    <!-- About Start -->
    <div class="leadership_section">
        <div class="container">
           <div class="leadership_inner">
                <div class="head_img">
                    <img src="{{ asset('assets/images/people/kshiteeja-dushing.webp') }}" alt="">
                    <div class="broad_areas_box">
                        <h6>Broad Areas</h6>
                        <ul>
                            <li>Environmental Biotechnology</li>
                            <li>Antimicrobial Resistance (AMR)</li>
                            <li>Synthetic Biology</li>
                            <li>Pharmaceutical Pollution & Soil–Plant Interactions</li>
                            <li>Climate–Ecosystem Resilience</li>
                        </ul>
                    </div>
                </div>
                <div class="profile_content">
                    <div class="profile_intro">
                        <div class="div">
                            <div class="profile_heading heading">
                                Kshiteeja Dushing
                            </div>
                            <div class="profile_position">Project Assistant</div>
                        </div>
                        <div class="emailbox">
                            <a href="mailto:project.assistant_mjrp@siu.edu.in">project.assistant_mjrp@siu.edu.in</a>
                        </div>
                    </div>
                    <p>Kshiteeja brings a strong academic foundation in Microbiology and Biotechnology — she is a Gold Medalist in BSc from Abeda Inamdar Senior College, Savitribai Phule Pune University, and holds an MSc in Applied Biosciences and Biotechnology from Imperial College London.</p>
                    <p>Her research focuses on environmental biotechnology, antimicrobial resistance, and synthetic biology. At SCCCS, she works on evaluating residual pharmaceutical concentrations in plants and soils impacted by hospital wastewater, studying how antibiotic residues influence soil health, plant growth, and microbial resistance patterns.</p>
                    <p>This work is closely linked to the challenges of climate change, as healthy soils and resilient ecosystems are essential for carbon storage, sustainable agriculture, and environmental protection.</p>
                    <p>Beyond her research, Kshiteeja is a trained Bharatanatyam dancer and a Taekwondo black belt, bringing a blend of discipline, creativity, and perseverance to her work.</p>
                </div>
                <div class="socialmedia_box">
                    <a target="_blank" href="https://www.linkedin.com/in/kshiteeja-dushing/"><img src="{{ asset('assets/images/inner-pages/linkedin.webp') }}" alt=""></a>
                    <a target="_blank" href="#"><img src="{{ asset('assets/images/inner-pages/scholar-google.webp') }}" alt=""></a>
                    <a target="_blank" href="https://orcid.org/0009-0007-4037-4786"><img src="{{ asset('assets/images/inner-pages/domain.webp') }}" alt=""></a>
                </div>
           </div>
        </div>
    </div>
    <!-- About End -->
    <!-- vision and mission start -->
     
</main>
@include('footer')

