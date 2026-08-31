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
                        <h1>Brij Raj</h1>
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
                <li>Brij Raj</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->

    <!-- About Start -->
    <div class="leadership_section">
        <div class="container">
           <div class="leadership_inner">
                <div class="head_img">
                    <img src="{{ asset('assets/images/people/brij-raj.webp') }}" alt="">
                    <div class="broad_areas_box">
                        <h6>Broad Areas</h6>
                        <ul>
                            <li>Sustainable Finance</li>
                            <li>Climate Risk & Financial Regulation</li>
                            <li>Net-Zero Banking & Financed Emissions</li>
                            <li>Green Transition in Developing Economies</li>
                            <li>Banking Policy & Environmental Governance</li>
                        </ul>
                    </div>
                </div>
                <div class="profile_content">
                    <div class="profile_intro">
                        <div class="div">
                            <div class="profile_heading heading">
                                Brij Raj
                            </div>
                            <div class="profile_position">PhD Scholar</div>
                        </div>
                        <div class="emailbox">
                            <a href="mailto:phdgrad.brij.raj@siu.edu.in">phdgrad.brij.raj@siu.edu.in</a>
                        </div>
                    </div>
                    <p>A senior PhD scholar, Mr. Brij Raj, is the Chief General Manager at the Reserve Bank of India (RBI), with over 25 years of experience in central banking functions, including Regulation, Supervision, Enforcement, and Foreign Exchange Reserve Management. An Electronics and Communication Engineer by qualification, he holds an MBA from the globally top-ranked Hult International Business School, Boston, completed on the prestigious Golden Jubilee Scholarship from the Reserve Bank of India (RBI). He is also a Chevening Financial Services Fellow from King's College London and holds a Postgraduate Award in Financial Regulation and Supervision from the University of Warwick, UK.</p>
                    <p>In 2021, Mr. Brij serves as part of the Sustainable Finance Group (SFG) within RBI’s Department of Regulation, formed to drive regulatory efforts around climate risk and sustainable finance. This role ignites his passion for research on climate-linked financial risks and the role of banks in India’s green transition.</p>
                    <p>He is currently pursuing his doctoral thesis under the supervision of Dr. Prakash Rao, Ph.D., at the Centre, focusing on Net-Zero Banking in India: A Framework for Assessing and Managing Financed Emissions. His study aims to develop actionable frameworks for Indian banks to evaluate and manage their financed emissions—supporting India’s transition to a low-carbon economy—and contributes to the broader global discourse on sustainable finance, particularly in developing economies.</p>
                </div>
                <div class="socialmedia_box">
                    <a target="_blank" href="https://www.linkedin.com/in/brij-raj-b753951b/"><img src="{{ asset('assets/images/inner-pages/linkedin.webp') }}" alt=""></a>
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

