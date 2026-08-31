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
                        <h1>Avishkar Munje</h1>
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
                <li>Avishkar Munje</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->

    <!-- About Start -->
    <div class="leadership_section">
        <div class="container">
           <div class="leadership_inner">
                <div class="head_img">
                    <img src="{{ asset('assets/images/people/avishkar-munje.webp') }}" alt="">
                    <div class="broad_areas_box">
                        <h6>Broad Areas</h6>
                        <ul>
                            <li>Land-use Change and Biodiversity</li>
                            <li>Community Ecology</li>
                            <li>Savanna Ecosystem Ecology</li>
                            <li>Plant Animal Interactions</li>
                            <li>Nature Education, Outreach and Awareness</li>
                            <li>Nature, Culture and Society</li>
                        </ul>
                    </div>
                </div>
                <div class="profile_content">
                    <div class="profile_intro">
                        <div class="div">
                            <div class="profile_heading heading">
                                Avishkar Munje
                            </div>
                            <div class="profile_position">Research Assistant</div>
                        </div>
                        <div class="emailbox">
                            <a href="mailto:avishkar.munje@siu.edu.in">avishkar.munje@siu.edu.in</a>
                        </div>
                    </div>
                    <p>With a Bachelor's in Environmental Science from Fergusson College and a Master's in Wildlife Biology from the National Centre for Biological Sciences, Avishkar leads the Centre’s biodiversity initiatives.</p>   
                    <p>At the Centre, his work involves researching plant, invertebrate, and bird diversity on campus; educating students and youth on the importance of biodiversity, environmental issues, and sustainability; and conducting nature trails, outreach programs, and social media awareness on biodiversity. He also supports Dr. Prakash Rao in designing a sustainability policy for Symbiosis International University.</p>   
                    <p>Beyond the lab, he enjoys reading, exploring the outdoors, observing wildlife, sketching, and engaging in meaningful conversations about nature.</p>   
                </div>
                <div class="socialmedia_box">
                    <a target="_blank" href="https://www.linkedin.com/in/avishkar-munje-745a141b0/"><img src="{{ asset('assets/images/inner-pages/linkedin.webp') }}" alt=""></a>
                    <a target="_blank" href="https://scholar.google.com/citations?hl=en&user=PNUHJvIAAAAJ"><img src="{{ asset('assets/images/inner-pages/scholar-google.webp') }}" alt=""></a>
                    <a target="_blank" href="https://orcid.org/0009-0005-2377-8928"><img src="{{ asset('assets/images/inner-pages/domain.webp') }}" alt=""></a>
                </div>
           </div>
        </div>
    </div>
    <!-- About End -->
    <!-- vision and mission start -->
     
</main>
@include('footer')

