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
                        <h1>Khushboo Tomar</h1>
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
                <li>Khushboo Tomar</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->

    <!-- About Start -->
    <div class="leadership_section">
        <div class="container">
           <div class="leadership_inner">
                <div class="head_img">
                    <img src="{{ asset('assets/images/people/khushboo-tomar.webp') }}" alt="">
                    <div class="broad_areas_box">
                        <h6>Broad Areas</h6>
                        <ul>
                            <li>Medical Microbiology</li>
                            <li>Antimicrobial Resistance (AMR)</li>
                            <li>Fungal Pathogenesis (Candida Infections)</li>
                            <li>Climate–Health Interactions (Heat Stress & Infectious Diseases)</li>
                        </ul>
                    </div>
                </div>
                <div class="profile_content">
                    <div class="profile_intro">
                        <div class="div">
                            <div class="profile_heading heading">
                                Khushboo Tomar
                            </div>
                            <div class="profile_position">PhD Scholar</div>
                        </div>
                        <div class="emailbox">
                            <a href="mailto:phdgrad.khushboo.tomar@siu.edu.in">phdgrad.khushboo.tomar@siu.edu.in</a>
                        </div>
                    </div>
                    <p>Khushboo began her academic journey with a Bachelor’s degree in Microbiology from Maharaja Chhatrasal Bundelkhand University (MCBU), Chhatarpur, followed by a Master’s in Microbiology from Dr. Harisingh Gour Central University, Sagar, M.P. During her Master’s dissertation, she worked on the green synthesis of silver nanoparticles using leaf extracts of Parthenium hysterophorus and Asparagus racemosus. This sustainable approach highlighted the use of easily accessible materials to develop eco-friendly nanoparticles with potential antimicrobial properties.</p>
                    <p>In addition to her dissertation, Khushboo joined the Centre for an internship in 2024, where she explores the emergence of multidrug resistance in healthcare-associated Candida infections. This experience strengthened her interest in infectious diseases and motivates her to contribute to innovative healthcare solutions. She now begins her PhD work by studying Candida infections in rising heat-stress environments.</p>
                    <p>Beyond academics, Khushboo is an avid photographer with a keen interest in exploring cities and cultures.</p>
                </div>
                <div class="socialmedia_box">
                    <a target="_blank" href="https://www.linkedin.com/in/khushboo-tomar-7aa88422a/"><img src="{{ asset('assets/images/inner-pages/linkedin.webp') }}" alt=""></a>
                    <a target="_blank" href="#"><img src="{{ asset('assets/images/inner-pages/scholar-google.webp') }}" alt=""></a>
                    <a target="_blank" href="https://orcid.org/0009-0008-6849-0276"><img src="{{ asset('assets/images/inner-pages/domain.webp') }}" alt=""></a>
                </div>
           </div>
        </div>
    </div>
    <!-- About End -->
    <!-- vision and mission start -->
     
</main>
@include('footer')

