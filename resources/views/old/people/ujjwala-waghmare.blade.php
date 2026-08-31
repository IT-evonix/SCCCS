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
                        <h1>Ujjwala Waghmare</h1>
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
                <li>Ujjwala Waghmare</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->

    <!-- About Start -->
    <div class="leadership_section">
        <div class="container">
           <div class="leadership_inner">
                <div class="head_img">
                    <img src="{{ asset('assets/images/people/ujjwala-waghmare.webp') }}" alt="">
                    <div class="broad_areas_box">
                        <h6>Broad Areas</h6>
                        <ul>
                            <li>Environmental Microbiology</li>
                            <li>Public Health & Epidemiology</li>
                            <li>Waste Management & Urban Landfill Ecology</li>
                            <li>Community Health Resilience</li>
                        </ul>
                    </div>
                </div>
                <div class="profile_content">
                    <div class="profile_intro">
                        <div class="div">
                            <div class="profile_heading heading">
                                Ujjwala Waghmare
                            </div>
                            <div class="profile_position">PhD Scholar</div>
                        </div>
                        <div class="emailbox">
                            <a href="mailto:phdgrad.ujjwala.waghmare@siu.edu.in">phdgrad.ujjwala.waghmare@siu.edu.in</a>
                        </div>
                    </div>
                    <p>Ujjwala holds a Master’s degree in Microbiology from Savitribai Phule Pune University and joined SCCCS as a Research Assistant in 2023, where she developed a strong interest in understanding the complex relationship between microbes and the global challenge of climate change, with a particular focus on public health. In early 2025, she transitioned into a full-time PhD student.</p>
                    <p>Her doctoral research investigates the impact of climate change on the spread of infectious diseases, particularly within communities residing near urban landfills. These areas face heightened health risks due to exposure to pollutants, pathogens, and vectors that thrive under changing climate conditions. By exploring these dynamics, Ujjwala aims to develop strategies that mitigate public health risks and improve the resilience of vulnerable populations.</p>
                    <p>Outside her academic work, she enjoys traveling and reading—activities that fuel her curiosity and broaden her understanding of global issues.</p>
                </div>
                <div class="socialmedia_box">
                    <a target="_blank" href="https://www.linkedin.com/in/ujjwala-waghmare-8944b8242/"><img src="{{ asset('assets/images/inner-pages/linkedin.webp') }}" alt=""></a>
                    <a target="_blank" href="#"><img src="{{ asset('assets/images/inner-pages/scholar-google.webp') }}" alt=""></a>
                    <a target="_blank" href="https://orcid.org/0009-0005-9249-1533"><img src="{{ asset('assets/images/inner-pages/domain.webp') }}" alt=""></a>
                </div>
           </div>
        </div>
    </div>
    <!-- About End -->
    <!-- vision and mission start -->
     
</main>
@include('footer')

