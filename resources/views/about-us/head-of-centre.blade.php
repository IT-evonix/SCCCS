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
                        <h1>Prof. Prakash Rao</h1>
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
                <li>About Us</li> /
                <li>Leadership</li> /
                <li>Prof. Prakash Rao</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->

    <!-- About Start -->
    <div class="leadership_section">
        <div class="container">
           <div class="leadership_inner">
                <div class="head_img">
                    <img src="{{ asset('assets/images/inner-pages/Dr-Prakash-Rao-Head.webp') }}" alt="">
                    <div class="broad_areas_box">
                        <h6>Broad Areas</h6>
                        <ul>
                            <li>Climate change – Impacts, and Adaptation strategies</li>
                            <li>Climate Change and Energy Policy</li>
                            <li>Water and Energy linkages</li>
                            <li>Environment and Ecological Footprints</li>
                            <li>Urbanisation and development</li>
                            <li>Biodiversity and Ecosystem Conservation</li>
                            <li>Sustainability Assessments and Standards</li>
                            <li>ESG frameworks</li>
                        </ul>
                    </div>
                </div>
                <div class="profile_content">
                    <div class="profile_intro">
                        <div class="div">
                            <div class="profile_heading heading">
                                Prof. Prakash Rao, <Span>Ph.D</Span>
                            </div>
                            <div class="profile_position">Head and Professor</div>
                        </div>
                        <div class="emailbox">
                            <a href="mailto:head_scccs@siu.edu.in">head_scccs@siu.edu.in</a>
                        </div>
                    </div>
                    <p>Dr. Prakash Rao leads the Symbiosis Centre for Climate Change and Sustainability (SCCCS) at Symbiosis International (Deemed University), Pune. With a doctorate from the University of Bombay and four decades of research and practice, his work spans ecology, environmental systems, and sustainability management, with particular focus on climate adaptation, energy transitions, and natural resource governance.</p>        
                    <p>His career encompasses the coordination of multidisciplinary, multi-country initiatives addressing critical intersections of climate, energy, and resource systems. For nearly a decade, he directed the Climate Change and Energy Programme at WWF-India, steering research agendas, policy analysis, and community-based interventions on a global scale.</p>
                    <p>Dr. Rao has authored approximately 85 scholarly contributions—research articles, technical notes, and book chapters—published in peer-reviewed international journals and volumes. His written work extends to popular science writing and media commentary, alongside consultancy engagements with organizations seeking expertise in environmental resource management and corporate sustainability strategy. He has authored four books, most recently Environmental Impacts of Tourism in Developing Nations (IGI Global Publishers, USA).</p>
                    <p>His current efforts center on embedding sustainability within higher education frameworks. Dr. Rao is spearheading a certification initiative for Symbiosis International (Deemed University) through the 2000-Watt Smart Cities label, a Swiss standard for operationalizing campus-level sustainability. He mentors five doctoral candidates whose research explores climate finance mechanisms, energy modeling, efficiency optimization, and circular economy integration in educational institutions.</p>
                    <p>Dr. Rao's approach combines rigorous scholarship with institutional leadership, fostering pathways for systemic change in climate education and sustainable development practice.</p>
                </div>
                <div class="socialmedia_box">
                    <a target="_blank" href="https://www.linkedin.com/in/prakash-rao-ph-d-22a48ab6/"><img src="{{ asset('assets/images/inner-pages/linkedin.webp') }}" alt=""></a>
                    <a target="_blank" href="#"><img src="{{ asset('assets/images/inner-pages/scholar-google.webp') }}" alt=""></a>
                    <a target="_blank" href="https://orcid.org/0000-0002-5895-9279"><img src="{{ asset('assets/images/inner-pages/domain.webp') }}" alt=""></a>
                </div>
           </div>
        </div>
    </div>
    <!-- About End -->
    <!-- vision and mission start -->
     
</main>
@include('footer')

