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
                        <h1>Shumailah Ishtiyaq</h1>
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
                <li>Shumailah Ishtiyaq</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->

    <!-- About Start -->
    <div class="leadership_section">
        <div class="container">
           <div class="leadership_inner">
                <div class="head_img">
                    <img src="{{ asset('assets/images/people/shumailah-ishtiaq.webp') }}" alt="">
                    <div class="broad_areas_box">
                        <h6>Broad Areas</h6>
                        <ul>
                            <li>Environmental Biotechnology</li>
                            <li>Wastewater Treatment & Constructed Wetlands</li>
                            <li>Microbial Electrochemical Systems (MES)</li>
                            <li>Bioremediation & Nature-Based Solutions</li>
                            <li>Plant–Microbe Interactions</li>
                        </ul>
                    </div>
                </div>
                <div class="profile_content">
                    <div class="profile_intro">
                        <div class="div">
                            <div class="profile_heading heading">
                                Shumailah Ishtiyaq <span>Ph.D</span>
                            </div>
                            <div class="profile_position">Project Scientist - DBT BioCare </div>
                        </div>
                        <div class="emailbox">
                            <a href="mailto:shumailah.ishtiyaq_dbt@siu.edu.in">shumailah.ishtiyaq_dbt@siu.edu.in</a>
                        </div>
                    </div>
                    <p>As a DBT-BioCARe Women Scientist at the Centre, she leads research on the design and development of constructed wetlands integrated with native plants, denitrifying microbes, and microbial electrochemical systems (MES) for pharmaceutical wastewater remediation. </p> <p> Her work lies at the intersection of environmental biotechnology, microbial ecology, and sustainable water engineering, aiming to create climate-resilient and low-carbon wastewater treatment technologies tailored to emerging contaminants in India.</p> <p> With a Ph.D. (2023) focused on the bioremediation of heavy-metal-contaminated soils using halophytes and plant growth–promoting rhizobacteria (PGPR), her scientific journey bridges microbial processes, plant physiology, and environmental sustainability. She is deeply passionate about transforming laboratory insights into scalable, nature-based solutions for pollution control and the circular economy.</p>


                </div>
                <div class="socialmedia_box">
                    <a target="_blank" href="https://www.linkedin.com/in/shumailah-ishtiyaq/"><img src="{{ asset('assets/images/inner-pages/linkedin.webp') }}" alt=""></a>
                    <a target="_blank" href="https://scholar.google.com/citations?hl=en&user=8otvg3gAAAAJ&view_op=list_works"><img src="{{ asset('assets/images/inner-pages/scholar-google.webp') }}" alt=""></a>
                    <a target="_blank" href="https://orcid.org/0000-0001-5244-447X"><img src="{{ asset('assets/images/inner-pages/domain.webp') }}" alt=""></a>
                </div>
           </div>
        </div>
    </div>
    <!-- About End -->
    <!-- vision and mission start -->
     
</main>
@include('footer')

