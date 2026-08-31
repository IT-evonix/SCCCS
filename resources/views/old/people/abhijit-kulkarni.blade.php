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
                        <h1>Abhijit Kulkarni</h1>
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
                <li>Abhijit Kulkarni</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->

    <!-- About Start -->
    <div class="leadership_section">
        <div class="container">
           <div class="leadership_inner">
                <div class="head_img">
                    <img src="{{ asset('assets/images/people/abhijit-kulkarni.webp') }}" alt="">
                    <div class="broad_areas_box">
                        <h6>Broad Areas</h6>
                        <ul>
                            <li>Gut Microbiome & Human Biology</li>
                            <li>Culturomics & Indigenous Health</li>
                            <li>Science Communication</li>
                            <li>Sustainable Food Systems & Community Health</li>
                            <li>Climate Awareness & Sustainability Studies</li>
                        </ul>
                    </div>
                </div>
                <div class="profile_content">
                    <div class="profile_intro">
                        <div class="div">
                            <div class="profile_heading heading">
                                Abhijit Kulkarni, <span>Ph.D</span>
                            </div>
                            <div class="profile_position">Postdoctoral Research Associate</div>
                        </div>
                        <div class="emailbox">
                            <a href="mailto:abhijits.kulkarni@siu.edu.in">abhijits.kulkarni@siu.edu.in</a>
                        </div>
                    </div>
                    <p>Abhijit is a Postdoctoral Research Associate at the Symbiosis Centre for Climate Change and Sustainability (SCCCS), where his work spans gut microbiome science, culturomics, science communication, and climate awareness. His PhD from the National Centre for Cell Science examined how ancestral diets shape human biology, culminating in one of the world’s first studies to analyze the gut microbiome of eight tribal populations simultaneously. This research revealed how centuries-old cultural practices influence human health and microbial ecosystems.</p>
                    <p>Working in remote tribal regions helped Abhijit discover his passion for science communication and strengthen his skills in scientific project management. He now translates microbiology and climate concepts into accessible narratives, including content in local languages to ensure communities can meaningfully engage with science. Abhijit believes that accessible science empowers society to make informed decisions for planetary and human well-being.</p>
                    <p>At SCCCS, he also contributes as a Research Associate, supporting the Centre’s efforts in science communication, sustainable food systems, community health, climate research, and the establishment of new laboratory facilities. He works on the conviction that sustainability must be a lived cultural practice and that curious scientists should inspire equally curious communities.</p>
                </div>
                <div class="socialmedia_box">
                    <a target="_blank" href="https://www.linkedin.com/in/askmicrobe/"><img src="{{ asset('assets/images/inner-pages/linkedin.webp') }}" alt=""></a>
                    <a target="_blank" href="#"><img src="{{ asset('assets/images/inner-pages/scholar-google.webp') }}" alt=""></a>
                    <a target="_blank" href="https://orcid.org/my-orcid?orcid=0000-0002-7096-5727"><img src="{{ asset('assets/images/inner-pages/domain.webp') }}" alt=""></a>
                </div>
           </div>
        </div>
    </div>
    <!-- About End -->
    <!-- vision and mission start -->
     
</main>
@include('footer')

