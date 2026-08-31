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
                        <h1>Kriti Joshi</h1>
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
                <li>Kriti Joshi</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->

    <!-- About Start -->
    <div class="leadership_section">
        <div class="container">
           <div class="leadership_inner">
                <div class="head_img">
                    <img src="{{ asset('assets/images/people/kriti-joshi.webp') }}" alt="">
                    <div class="broad_areas_box">
                        <h6>Broad Areas</h6>
                        <ul>
                            <li>Skin Microbiome & Fungal Ecology</li>
                            <li>Climate–Health Interactions</li>
                            <li>Disease Ecology</li>
                            <li>Microbial Biochemistry</li>
                        </ul>
                    </div>
                </div>
                <div class="profile_content">
                    <div class="profile_intro">
                        <div class="div">
                            <div class="profile_heading heading">
                                Kriti Joshi
                            </div>
                            <div class="profile_position">PhD Scholar</div>
                        </div>
                        <div class="emailbox">
                            <a href="mailto:phdgrad.kriti.joshi@siu.edu.in">phdgrad.kriti.joshi@siu.edu.in</a>
                        </div>
                    </div>
                    <p>Kriti Joshi holds a Master’s degree in Zoology from the University of Calcutta, Kolkata, with a specialization in ecology and conservation. Her deep interest in environmental research motivates her to pursue research opportunities, ultimately leading her to the Centre. She now begins her PhD journey under the supervision of Dr. Om Prakash Sharma.</p>
                    <p>Her doctoral research examines the fungal microbiome of the skin and its biochemical implications for diseases across different climatic zones in India. As global temperatures rise and climate conditions shift, the skin microbiome undergoes significant changes. Through her work, Kriti aims to clarify these complex microbial dynamics and contribute to a deeper understanding of climate-driven health impacts.</p>
                    <p>Beyond her academic pursuits, she enjoys butterfly and birdwatching, exploring fictional literature, and traveling.</p>
                </div>
                <div class="socialmedia_box">
                    <a target="_blank" href="https://www.linkedin.com/in/kriti-joshi-79b078190/"><img src="{{ asset('assets/images/inner-pages/linkedin.webp') }}" alt=""></a>
                    <a target="_blank" href="#"><img src="{{ asset('assets/images/inner-pages/scholar-google.webp') }}" alt=""></a>
                    <a target="_blank" href="https://orcid.org/0009-0003-8457-3649"><img src="{{ asset('assets/images/inner-pages/domain.webp') }}" alt=""></a>
                </div>
           </div>
        </div>
    </div>
    <!-- About End -->
    <!-- vision and mission start -->
     
</main>
@include('footer')

