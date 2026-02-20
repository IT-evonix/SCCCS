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
                        <h1>Kedar Sohoni</h1>
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
                <li>Kedar Sohoni</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->

    <!-- About Start -->
    <div class="leadership_section">
        <div class="container">
           <div class="leadership_inner">
                <div class="head_img">
                    <img src="{{ asset('assets/images/people/kedar-sohoni.webp') }}" alt="">
                    <div class="broad_areas_box">
                        <h6>Broad Areas</h6>
                        <ul>
                            <li>Circular Economy & Resource Efficiency</li>
                            <li>Sustainability in Higher Education</li>
                            <li>Climate Change Mitigation Strategies</li>
                            <li>Energy & Environmental Management</li>
                            <li>Industrial Sustainability Practices</li>
                        </ul>
                    </div>
                </div>
                <div class="profile_content">
                    <div class="profile_intro">
                        <div class="div">
                            <div class="profile_heading heading">
                                Kedar Sohoni
                            </div>
                            <div class="profile_position">PhD Scholar</div>
                        </div>
                        <div class="emailbox">
                            <a href="mailto:phdgrad.sohani.kedar@siu.edu.in">phdgrad.sohani.kedar@siu.edu.in</a>
                        </div>
                    </div>
                    <p>Kedar Sohani, a PhD Scholar at the Centre, is a seasoned mechanical engineer with over 34 years of industrial experience in machine tool maintenance, production, and environmental compliance across companies such as Mahindra & Mahindra and Force Motors. Alongside his professional career, he pursues advanced education, holding certifications in energy auditing, environmental sustainability, and an MBA in operations management. He currently serves as a visiting faculty member at several institutions, teaching subjects related to energy and sustainability.</p>
                    <p>His research under Prof. Dr. Prakash Rao focuses on the role of higher education institutions in adopting a circular economy culture, a concept closely aligned with climate change mitigation. The circular economy framework promotes strategies such as reduce, reuse, repair, and recycle to minimize waste and extend the life cycle of resources, thereby reducing greenhouse gas emissions. Kedar’s work examines how academic institutions can champion this approach to advance sustainable development goals. His strong background in energy and environmental management provides a solid foundation for this impactful research direction.</p>
                    <p>Outside of his academic and professional commitments, he is an avid admirer of Indian Classical Music.</p>
                </div>
                <div class="socialmedia_box">
                    <a target="_blank" href="#"><img src="{{ asset('assets/images/inner-pages/linkedin.webp') }}" alt=""></a>
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

