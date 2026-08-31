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
                        <h1>Shwetha Kadam</h1>
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
                <li>Shwetha Kadam</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->

    <!-- About Start -->
    <div class="leadership_section">
        <div class="container">
           <div class="leadership_inner">
                <div class="head_img">
                    <img src="{{ asset('assets/images/people/shweta-kadam.webp') }}" alt="">
                    <div class="broad_areas_box">
                        <h6>Broad Areas</h6>
                        <ul>
                            <li>High-Altitude Wetland Ecology</li>
                            <li>Carbon Cycling & Greenhouse Gas Dynamics</li>
                            <li>Climate Change Impacts in Mountain Ecosystems</li>
                            <li>Microbial Ecology of Extreme Environments</li>
                            <li>Environmental Health & Ecosystem Monitoring</li>
                        </ul>
                    </div>
                </div>
                <div class="profile_content">
                    <div class="profile_intro">
                        <div class="div">
                            <div class="profile_heading heading">
                                Shwetha Kadam
                            </div>
                            <div class="profile_position">Project JRF</div>
                        </div>
                        <div class="emailbox">
                            <a href="mailto:junior.fellow_nmhs@siu.edu.in">junior.fellow_nmhs@siu.edu.in</a>
                        </div>
                    </div>
                    <p>Meet our outdoor enthusiast and mountaineer, Shweta Kadam!</p>
                    <p>With a Master’s in Microbiology from Savitribai Phule Pune University, Shweta has previously worked on psychrophilic (cold-loving) bacteria from Antarctica. After a brief stint at Sula Vineyards, she now serves as a Project Fellow with Dr. Om Prakash Sharma at the Centre.</p>
                    <p>Aligned with her love for the outdoors, her project focuses on understanding high-altitude wetlands in the Himalayas under the National Mission on Himalayan Studies (NMHS), funded by the Ministry of Environment, Forests and Climate Change (MoEF&CC). Her research examines carbon-capture dynamics, greenhouse gas emissions, and the overall environmental health of these wetlands—ecosystems that are critical in combating climate change in the Himalayan region. Wetlands act as natural carbon sinks, storing carbon in their biomass; however, rising global temperatures can cause this stored carbon to be released as methane.</p>
                    <p>When she isn’t conducting research or exploring high-altitude ecosystems, Shweta can be found dancing—both classical and folk—or out on a hiking adventure discovering new places.</p>
                </div>
                <div class="socialmedia_box">
                    <a target="_blank" href="https://www.linkedin.com/in/shweta-kadam-7881711bb/"><img src="{{ asset('assets/images/inner-pages/linkedin.webp') }}" alt=""></a>
                    <a target="_blank" href="https://scholar.google.com/citations?hl=en&user=O5bVKfcAAAAJ"><img src="{{ asset('assets/images/inner-pages/scholar-google.webp') }}" alt=""></a>
                    <a target="_blank" href="https://orcid.org/0009-0003-4965-7775"><img src="{{ asset('assets/images/inner-pages/domain.webp') }}" alt=""></a>
                </div>
           </div>
        </div>
    </div>
    <!-- About End -->
    <!-- vision and mission start -->
     
</main>
@include('footer')

