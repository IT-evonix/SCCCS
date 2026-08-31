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
                        <h1>Rupali S. Thakur</h1>
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
                <li>Rupali S. Thakur</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->

    <!-- About Start -->
    <div class="leadership_section">
        <div class="container">
           <div class="leadership_inner">
                <div class="head_img">
                    <img src="{{ asset('assets/images/people/rupali-thakur.webp') }}" alt="">
                    <div class="broad_areas_box">
                        <h6>Broad Areas</h6>
                        <ul>
                            <li>Residual antibiotics</li>
                            <li>Antimicrobial Resistance (AMR)</li>
                            <li>Soil Microbial ecology</li>
                        </ul>
                    </div>
                </div>
                <div class="profile_content">
                    <div class="profile_intro">
                        <div class="div">
                            <div class="profile_heading heading">
                                Rupali S. Thakur
                            </div>
                            <div class="profile_position">PhD Scholar</div>
                        </div>
                        <div class="emailbox">
                            <a href="mailto:phdgrad.thakur.rupali@siu.edu.in">phdgrad.thakur.rupali@siu.edu.in</a>
                        </div>
                    </div>
                    <p>Glad to introduce our senior PhD scholar, Rupali Thakur!</p>
                    <p>With a Master's in Biotechnology from Savitribai Phule Pune University, Rupali brings valuable industry experience from her work at Mylab Discovery Solutions Pvt. Ltd. and Genei Laboratories Pvt. Ltd. She joined the Centre in 2023 as a full-time PhD student under the guidance of Dr. Om Prakash Sharma, working on a project within the One Health initiative.</p>
                    <p>For her PhD, she studies the impact of residual antibiotics on microbial communities in soil and sediment affected by hospital and pharmaceutical wastewater. She aims to quantify the concentration of different antibiotics and understand how they influence microbial structure and function. Her work also explores how these ecosystems contribute to the development and spread of antimicrobial resistance (AMR) in agricultural soils and sediments downstream of these water bodies. Water from such sources is widely used in agriculture, posing significant risks of spreading AMR in humans and livestock.</p>
                    <p>Outside the lab, she is a proud dog parent and enjoys singing Indian classical music and going on occasional hikes.</p>
                </div>
                <div class="socialmedia_box">
                    <a target="_blank" href="https://www.linkedin.com/in/rupali-thakur-5a78941ba/"><img src="{{ asset('assets/images/inner-pages/linkedin.webp') }}" alt=""></a>
                    <a target="_blank" href="https://scholar.google.com/citations?hl=en&user=maykrrkAAAAJ"><img src="{{ asset('assets/images/inner-pages/scholar-google.webp') }}" alt=""></a>
                    <a target="_blank" href="https://orcid.org/0009-0004-9059-7011"><img src="{{ asset('assets/images/inner-pages/domain.webp') }}" alt=""></a>
                </div>
           </div>
        </div>
    </div>
    <!-- About End -->
    <!-- vision and mission start -->
     
</main>
@include('footer')

