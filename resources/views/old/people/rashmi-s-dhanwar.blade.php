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
                        <h1>Rashmi S. Dhanwar</h1>
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
                <li>Rashmi S. Dhanwar</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->

    <!-- About Start -->
    <div class="leadership_section">
        <div class="container">
           <div class="leadership_inner">
                <div class="head_img">
                    <img src="{{ asset('assets/images/people/rashmi-dhanwar.webp') }}" alt="">
                    <div class="broad_areas_box">
                        <h6>Broad Areas</h6>
                        <ul>
                            <li>Methanogenesis</li>
                            <li>Carbon capture</li>
                            <li>Biogas Production and Upgradation</li>
                        </ul>
                    </div>
                </div>
                <div class="profile_content">
                    <div class="profile_intro">
                        <div class="div">
                            <div class="profile_heading heading">
                                Rashmi S. Dhanwar
                            </div>
                            <div class="profile_position">PhD Scholar</div>
                        </div>
                        <div class="emailbox">
                            <a href="mailto:phdgrad.rashmi.dhanwar@siu.edu.in">phdgrad.rashmi.dhanwar@siu.edu.in</a>
                        </div>
                    </div>
                    <p>Meet our senior PhD scholar, Rashmi Dhanwar!</p>
                    <p>With a Master's in Microbiology from Fergusson College, Pune, Rashmi begins her career in academia as a teacher after completing her post-graduation. As her interest in understanding the impacts of climate change grows, she enrolls for a PhD under Dr. Om Prakash Sharma at the Centre in 2023.</p>
                    <p>Her research focuses on special microorganisms called hydrogenotrophic methanogens, which have the potential to help address climate change. These tiny organisms use carbon dioxide (CO₂) and hydrogen (H₂) to produce biomethane, a valuable fuel. This natural process not only lowers atmospheric CO₂ levels but also generates a renewable energy source.</p>
                    <p>Beyond academia, Rashmi is an avid fiction reader, a budding knitter, a cat lover, and a proud participant in Diadem Miss Maharashtra 2022!</p>
                </div>
                <div class="socialmedia_box">
                    <a target="_blank" href="https://www.linkedin.com/in/rashmi-dhanwar-79aaa1144/"><img src="{{ asset('assets/images/inner-pages/linkedin.webp') }}" alt=""></a>
                    <a target="_blank" href="https://scholar.google.com/citations?hl=en&user=sk1-evoAAAAJ"><img src="{{ asset('assets/images/inner-pages/scholar-google.webp') }}" alt=""></a>
                    <a target="_blank" href="https://orcid.org/0009-0002-2245-0769"><img src="{{ asset('assets/images/inner-pages/domain.webp') }}" alt=""></a>
                </div>
           </div>
        </div>
    </div>
    <!-- About End -->
    <!-- vision and mission start -->
     
</main>
@include('footer')

