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
                        <h1>Rucharani Kale</h1>
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
                <li>Rucharani Kale</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->

    <!-- About Start -->
    <div class="leadership_section">
        <div class="container">
           <div class="leadership_inner">
                <div class="head_img">
                    <img src="{{ asset('assets/images/people/rucha-kale.webp') }}" alt="">
                    <div class="broad_areas_box">
                        <h6>Broad Areas</h6>
                        <ul>
                            <li>Human Resource Management</li>
                            <li>Finances and Purchases coordination</li>
                        </ul>
                    </div>
                </div>
                <div class="profile_content">
                    <div class="profile_intro">
                        <div class="div">
                            <div class="profile_heading heading">
                               Rucharani Kale
                            </div>
                            <div class="profile_position">Supervisor</div>
                        </div>
                        <div class="emailbox">
                            <a href="mailto:rucharani.kale@siu.edu.in">rucharani.kale@siu.edu.in</a>
                        </div>
                    </div>
                    <p>A strong pillar of the Centre, meet our Supervisor, Rucharani (Kulkarni) Kale!</p>
                    <p>Ms. Rucharani is a commerce graduate from Symbiosis College of Arts & Commerce and holds dual postgraduate degrees—Master's in Management Sciences and Master's in Personnel Management—from the prestigious Savitribai Phule Pune University. With over 16 years of diverse professional experience across academic and non-academic sectors, she has worked with reputed organizations such as Cholamandalam Ltd., Symbiosis Institute of Business Management, Pune (SIBM), Symbiosis Head Office Central HR, and Symbiosis Statistical Institute, Pune (SSI). Her wide-ranging exposure across corporate and educational environments equips her with a strong foundation in administration and human resource management.</p>
                    <p>She has been an integral part of the Centre since its inception, contributing significantly to its growth and operations. In her current role, she oversees key functions related to Administration and Human Resources, ensuring smooth and effective organizational management. Alongside her administrative responsibilities, she actively participates in Centre initiatives, playing a meaningful role in social outreach and community engagement efforts.</p>
                    <p>In her free time, she enjoys listening to music, particularly instrumental genres. She loves visiting beaches, as they allow her to unwind from routine and appreciate the simple pleasures of nature.</p>
                </div>
                <div class="socialmedia_box">
                    <a target="_blank" href="https://www.linkedin.com/in/rucha-kulkarni-kale-528b91216/"><img src="{{ asset('assets/images/inner-pages/linkedin.webp') }}" alt=""></a>
                    <a target="_blank" href="#"><img src="{{ asset('assets/images/inner-pages/scholar-google.webp') }}" alt=""></a>
                    <a target="_blank" href="#"><img src="{{ asset('assets/images/inner-pages/domain.webp') }}" alt=""></a>
                </div>
           </div>
        </div>
    </div>
    <!-- About End -->
    <!-- vision and mission start -->
     
</main>
@include('footer')

