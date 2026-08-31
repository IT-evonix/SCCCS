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
                            <li>Antimicrobial Resistance (AMR)</li>
                            <li>Environmental Metagenomics</li>
                            <li>Waste Management and Urban Landfill Ecology</li>
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
                    <p>
Ujjwala holds a Master’s degree in Microbiology from Savitribai Phule Pune University and joined SCCCS as a Research Assistant in 2023, where she developed a strong interest in environmental microbiology and the role of microorganisms in environmental and public health. In early 2025, she transitioned into a full-time PhD student.                    </p>
                    <p>
Her doctoral research investigates the dissemination of antimicrobial resistance in urban landfill leachate systems. Using metagenomic approaches, she studies microbial communities, antibiotic resistance genes (ARGs), and horizontal gene transfer to understand how landfill environments contribute to the emergence and spread of antimicrobial resistance. Her research aims to generate insights that support sustainable waste management practices and strengthen environmental surveillance of antimicrobial resistance.                    </p>
                    <p>
Outside her academic work, she enjoys travelling, photography, and reading, activities that fuel her curiosity and broaden her understanding of global issues.        
</p>
                </div>
                <div class="socialmedia_box">
                    <a target="_blank" href="https://www.linkedin.com/in/ujjwala-waghmare-8944b8242/"><img src="{{ asset('assets/images/inner-pages/linkedin.webp') }}" alt=""></a>
                    <a target="_blank" href="https://scholar.google.com/citations?user=fsMUMgYAAAAJ&hl=en"><img src="{{ asset('assets/images/inner-pages/scholar-google.webp') }}" alt=""></a>
                    <a target="_blank" href="https://orcid.org/0009-0005-9249-1533"><img src="{{ asset('assets/images/inner-pages/domain.webp') }}" alt=""></a>
                </div>
           </div>
        </div>
    </div>
    <!-- About End -->
    <!-- vision and mission start -->
     
</main>
@include('footer')

