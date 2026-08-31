@include('header')
<main class="main">
    <!-- BANNER SECTION START -->
    <div class="inner_page_banner">
        <div class="banner_wrapper inner_page_banner_content">
            <div class="banner-bg">
                <img src="{{ asset('assets/images/banners/about-siu.webp') }}" alt="About Symbiosis Society Banner"
                    class="img-fluid">
            </div>
            <div class="slider-star">
                <img class="star_img" src="{{ asset('assets/images/slider-star.png') }}" alt="">
            </div>
            <div class="banner_content">
                <div class="container">
                    <div class="banner_text">
                        <h1>Awards & Recognition</h1>
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
                <li>Media & Activity</li> /
                <li>Awards & Recognition</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <section class="recognition-content">
        <div class="container">
            <div class="awardand_recognition_box">
                <div class="text-box">
                    <p>
                        SCCCS has been officially empanelled by the Central Electricity Regulatory Commission (CERC) to
                        provide regulatory research and consultancy services.
                        With a strong foundation in Renewable Energy, the Centre also brings robust capabilities in
                        Policy Analysis, Regulatory Impact Assessment, and Emerging Technologies.
                        This empanelment marks a significant step forward in our mission to contribute meaningfully to
                        India's evolving energy and climate policy landscape.
                    </p>
                </div>
                <div class="image-box">
                    <img src="{{ asset('assets/images/media-and-activity/awards-and-recognition/cerc-logo.webp') }}"
                        alt="CERC Certificate">
                    <a href="{{ asset('assets/pdf/awards-and-recognition/SCCCS-CERC-Empanellment.pdf') }}"
                        target="_blank" class="readmore">
                        View PDF <img src="{{ asset('assets/images/readmore.svg') }}" alt="read more">
                    </a>
                </div>
            </div>
            <div class="awardand_recognition_box">
                <div class="image-box">
                    <img src="{{ asset('assets/images/media-and-activity/awards-and-recognition/PrakashRaoJSWCentreSteeringCommittee.webp') }}"
                        alt="CERC Certificate">
                    <!-- <a href="{{ asset('assets/pdf/awards-and-recognition/SCCCS-CERC-Empanellment.pdf') }}"
                        target="_blank" class="readmore">
                        View PDF <img src="{{ asset('assets/images/readmore.svg') }}" alt="read more">
                    </a> -->
                </div>
                <div class="text-box">
                    <p>
                       We are proud to share that <strong>  Dr. Prakash Rao, Head, SCCCS,</strong> has been invited to serve as a <strong> Member of the Steering Committee of the JSW Centre for Climate Change and Health (JSW CCCH) at the Public Health Foundation of India (PHFI).</strong> Launched in July 2025 with support from the JSW Foundation, the Centre focuses on advancing research, capacity building, policy engagement, and partnerships at the critical intersection of climate change and <strong>human health </strong> in India. Dr. Rao's inclusion in this prestigious national committee reflects the growing recognition of <strong> SCCCS's work in climate science, sustainability, and health systems resilience.</strong>


                    </p>
                </div>
                
            </div>

        </div>
    </section>

</main>
@include('footer')