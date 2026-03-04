@include('header')
<main class="main">
    <!-- BANNER SECTION START -->
    <div class="banner-section hero_slider">
        <div class="hero_slider_inner owl-carousel">
            <div class="banner_wrapper hero_sec_inner">
                <div class="banner-bg">
                    <img class="img-fluid" src="{{ asset('assets/images/banners/Banner-Option-new.webp') }}" alt="Banner Image" class="img-fluid">
                </div>
            </div>
            <div class="banner_wrapper hero_sec_inner">
                <div class="banner-bg">
                    <img class="img-fluid" src="{{ asset('assets/images/banners/Banner-Option-new.webp') }}" alt="Banner Image" class="img-fluid">
                </div>
            </div>
            <div class="banner_wrapper hero_sec_inner">
                <div class="banner-bg">
                    <img class="img-fluid" src="{{ asset('assets/images/banners/Banner-Option-new.webp') }}" alt="Banner Image" class="img-fluid">
                </div>
            </div>
            <!-- <div class="banner_wrapper hero_sec_inner">
                <div class="banner-bg">
                    <img src="{{ asset('assets/images/banners/Banner-Option.jpeg') }}" alt="Banner Image" class="img-fluid">
                </div>
            </div>
            <div class="banner_wrapper hero_sec_inner">
                <div class="banner-bg">
                    <img src="{{ asset('assets/images/banners/Banner-Option-5.jpeg') }}" alt="Banner Image" class="img-fluid">
                </div>
            </div>
            <div class="banner_wrapper hero_sec_inner">
                <div class="banner-bg">
                    <img src="{{ asset('assets/images/banners/Banner-Option-6.jpeg') }}" alt="Banner Image" class="img-fluid">
                </div>
            </div> -->
        </div>
    </div>
    <!-- BANNER SECTION END -->

    <!-- Announcement Start -->
    <div class="announcement_sec">
        <div class="announcement_head"><img src="{{ asset('assets/images/announcement.webp') }}" alt=""> Latest Announcement</div>
        <marquee behavior="scroll" direction="left">
            <span>Admissions are now open. Apply before 30th December!</span>
        </marquee>
    </div>
    <!-- Announcement End -->

    <!-- About Start -->
    <div class="aboutus_section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="aboutus_inner">
                        <div class="row justify-content-center flex-sm-row-reverse">
                            <div class="col-lg-7 col-md-6">
                                <div class="aboutright">
                                    <img class="img-fluid" src="{{ asset('assets/images/home/about-us.webp') }}" alt="about image">
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 d-flex align-items-center">
                                <div class="aboutleft">
                                    <h1 class="heading">ABOUT SCCCS</h1>
                                    <p>The Symbiosis Centre for Climate Change and Sustainability (SCCCS), established in March 2022, is a research centre under Symbiosis International (Deemed University).</p>
                                    <!-- <ul>
                                        <li>Re-accredited by NAAC with A++ (3.56/4)</li>
                                        <li>Awarded Category-I by UGC</li>
                                    </ul> -->
                                    <p>“Climate change is not just an environmental issue—it is shaping the future of investment, technology, and human development in the 21st century.”</p>
                                    <a href="<?= url('/about-scccs'); ?>" class="readmore">
                                        Read More <img src="{{ asset('assets/images/readmore.svg') }}" alt="read more">
                                    </a>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Vision and Mision Start -->
    <div class="visionmision_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="visionmision_inner">
                        <div class="row">
                            <div class="col-md-6 d-flex align-items-center d-lg-block d-none">
                                <div class="visionmision_left">
                                    <img class="img-fluid" src="{{ asset('assets/images/home/vision-mision-img.webp') }}" alt="vision mision img">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="visionmision_right">
                                    <div class="visionmision_inner_box">
                                        <div class="visionimg_box">
                                            <img class="img-fluid" src="{{ asset('assets/images/home/vision.webp') }}" alt="vision icon">
                                        </div>
                                        <div class="visiontext_box">
                                            <div class="heading">
                                                VISION
                                            </div>
                                            <p>Addressing contemporary climate change and sustainability issues through research, policy analysis, outreach, and advocacy for achieving net-zero goals</p>
                                        </div>
                                    </div>
                                    <div class="visionmision_inner_box">
                                        <div class="visionimg_box">
                                            <img class="img-fluid" src="{{ asset('assets/images/home/mission.webp') }}" alt="mission icon">
                                        </div>
                                        <div class="visiontext_box">
                                            <div class="heading">
                                                MISSION
                                            </div>
                                            <p>To conduct contemporary, issue-based, cutting-edge interdisciplinary research on climate change impacts, mitigation, adaptation, and sustainable development at the local, regional, and national levels.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vision and Mision End -->

    <!-- RESEARCH FOCUS AREAS Start -->
    <div class="research_focus_areas_section">
        <div class="container">
            <div class="heading research_heading">
                RESEARCH FOCUS AREAS
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="research_focus_areas_inner">
                        <img class="img-fluid main-image" src="{{ asset('assets/images/home/RESEARCH-FOCUS-AREAS.webp') }}" alt="RESEARCH FOCUS AREAS">
                        <div class="research_focus_areas_box research_focus_areas_box1" data-aos="fade-up" data-aos-duration="500">
                            <div class="icon_mobile_img"><img class="img-fluid" src="{{ asset('assets/images/home/one-health.svg') }}" alt="One Health"></div>
                            <div class="research_subheading">
                                One Health: Connecting Environmental, Animal, and Human Wellbeing
                            </div>
                            <ul>
                                <li>Impact of residual antibiotics and pharmaceuticals on soil, water & food systems</li>
                                <li>AMR (Antimicrobial Resistance)</li>
                                <li>Landfills & Community Health</li>
                                <li>Climate-linked diseases</li>
                            </ul>
                        </div>
                        <div class="research_focus_areas_box research_focus_areas_box2" data-aos="fade-up" data-aos-duration="700">
                            <div class="icon_mobile_img"><img class="img-fluid" src="{{ asset('assets/images/home/climate-change.svg') }}" alt="Water & Climate Change"></div>
                            <div class="research_subheading">
                                Water & Climate Change: The Invisible Crisis in Our Treatment Systems
                            </div>
                            <ul>
                                <li>N₂O emissions from wastewater treatment </li>
                                <li>AMR spreads in water ecosystems</li>
                                <li>Constructed wetlands for effluent treatment</li>
                            </ul>
                        </div>
                        <div class="research_focus_areas_box research_focus_areas_box3" data-aos="fade-up" data-aos-duration="1000">
                            <div class="icon_mobile_img"><img class="img-fluid" src="{{ asset('assets/images/home/carbon-capture.svg') }}" alt="Bioenergy & Carbon Capture"></div>
                            <div class="research_subheading">
                                Bioenergy & Carbon Capture: Transforming Waste into Climate Solutions
                            </div>
                            <ul>
                                <li>Hydrogenotrophic methanogens for high-quality biogas</li>
                                <li>Renewable energy integration</li>                                 
                            </ul>
                        </div>
                        <div class="research_focus_areas_box research_focus_areas_box4" data-aos="fade-up" data-aos-duration="1500">
                            <div class="icon_mobile_img"><img class="img-fluid" src="{{ asset('assets/images/home/waste-management.svg') }}" alt="Biodiversity & Waste Management"></div>
                            <div class="research_subheading">
                                Biodiversity to Conservation Models
                            </div>
                            <ul>
                                <!-- <li>Landfill leachate management</li> -->
                                <li>Conservation initiatives on campus</li>
                            </ul>
                        </div>
                        <div class="research_focus_areas_box research_focus_areas_box5" data-aos="fade-up" data-aos-duration="1500">
                            <div class="icon_mobile_img"><img class="img-fluid" src="{{ asset('assets/images/home/carbon-mitigation.svg') }}" alt="Sustainable Agriculture & Carbon Mitigation"></div>
                            <div class="research_subheading">
                                Sustainable Agriculture & Carbon Mitigation: Reimagining Food Production for Climate Solutions
                            </div>
                            <ul>
                                <li>Methane mitigation in livestock and paddies</li>
                                <li>Alternative approaches: Biochar</li>
                            </ul>
                        </div>
                        <div class="research_focus_areas_box research_focus_areas_box6" data-aos="fade-up" data-aos-duration="1000">
                            <div class="icon_mobile_img"><img class="img-fluid" src="{{ asset('assets/images/home/energy-and-urban.webp') }}" alt="Sustainable Agriculture & Carbon Mitigation"></div>
                            <div class="research_subheading">
                                Energy and Urban Sustainability
                            </div>
                            <ul>
                                <li>Low Carbon Smart Cities</li>
                                <li>Renewable energy management</li>
                                <li>Climate finance and policy</li>
                            </ul>
                        </div>
                        <div class="research_focus_areas_box research_focus_areas_box7" data-aos="fade-up" data-aos-duration="700">
                            <div class="icon_mobile_img"><img class="img-fluid" src="{{ asset('assets/images/home/campus-sustainability.webp') }}" alt="Sustainable Agriculture & Carbon Mitigation"></div>
                            <div class="research_subheading">
                                Campus Sustainability
                            </div>
                            <ul>
                                <li>2000 Watts Smart Campus</li>
                                <li>Sustainability Report</li>
                                <li>Sustainability Initiatives</li>
                            </ul>
                        </div>
                        <div class="research_focus_areas_box research_focus_areas_box8" data-aos="fade-up" data-aos-duration="500">
                            <div class="icon_mobile_img"><img class="img-fluid" src="{{ asset('assets/images/home/climate-education.webp') }}" alt="Sustainable Agriculture & Carbon Mitigation"></div>
                            <div class="research_subheading">
                                Climate Education and Capacity Building
                            </div>
                            <ul>
                                <li>Youth Climate and Biodiversity Awareness</li>
                                <li>Training sessions/ workshops and consulting</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- RESEARCH FOCUS AREAS End -->


    <!-- RESEARCH HIGHLIGHTS Start -->
    <div class="research_highlights_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading text-center" style="color:#7A7A7A">
                        RESEARCH HIGHLIGHTS
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="co-md-12">
                    <div class="research_highlights_inner">
                        <div class="research_highlights_box">
                            <img class="img-fluid" src="{{ asset('assets/images/home/publications.webp') }}" alt="publications">
                            <div class="research_content">
                                <h6 class="div">publications</h6>
                                <a class="readmore" href="<?= url('/coming-soon-for-publication'); ?>">Read <span>More</span> <img src="{{ asset('assets/images/readmore.svg') }}" alt="Read More"></a>
                            </div>
                        </div>
                        <div class="research_highlights_box">
                            <img class="img-fluid" src="{{ asset('assets/images/home/research-grants.webp') }}" alt="research grants">
                            <div class="research_content">
                                <h6 class="div">Research Grants</h6>
                                <a class="readmore" href="<?= url('/projects-and-grants'); ?>">Read <span>More</span> <img src="{{ asset('assets/images/readmore.svg') }}" alt="Read More"></a>
                            </div>
                        </div>
                        <div class="research_highlights_box">
                            <img class="img-fluid" src="{{ asset('assets/images/home/Donors.webp') }}" alt="Donors">
                            <div class="research_content">
                                <h6 class="div">DONORS/FUNDING AGENCIES</h6>
                                <a class="readmore" href="<?= url('/projects-and-grants'); ?>">Read <span>More</span> <img src="{{ asset('assets/images/readmore.svg') }}" alt="Read More"></a>
                            </div>
                        </div>
                        <div class="research_highlights_box">
                            <img class="img-fluid" src="{{ asset('assets/images/gallery/infrastructure/Mini-Centrifuge-Remi-RM-02-Plus.webp') }}" alt="Infrastructure">
                            <div class="research_content">
                                <h6 class="div">Infrastructure (Facilities & Equipment) </h6>
                                <a class="readmore" href="<?= url('/life-at-scccs'); ?>">Read <span>More</span> <img src="{{ asset('assets/images/readmore.svg') }}" alt="Read More"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- RESEARCH HIGHLIGHTS End -->

    <!-- COLLABORATIONS Start -->
     <div class="collaborations_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="heading" style="color:#A81417;">
                        Collaborators
                    </div>
                    <div class="collaborations_left">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="national-tab" data-bs-toggle="pill" data-bs-target="#nationaltab" type="button" role="tab" aria-controls="nationaltab" aria-selected="true">National Collaborators</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="internationaltab-tab" data-bs-toggle="pill" data-bs-target="#internationaltab" type="button" role="tab" aria-controls="internationaltab" aria-selected="false">International Collaborators</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="nationaltab" role="tabpanel" aria-labelledby="national-tab">
                                <div class="collaborations_logos">
                                    <div class="collaborations_logo">
                                        <img class="img-fluid" src="{{ asset('assets/images/logos/national-collaborators/logo1.webp') }}" alt="logo1">
                                        <div class="collab_partner_name">National Centre for Cell Science (NCCS)</div>
                                    </div>
                                    <div class="collaborations_logo">
                                        <img class="img-fluid" src="{{ asset('assets/images/logos/national-collaborators/logo2.webp') }}" alt="logo2">
                                        <div class="collab_partner_name">Kumaun University (KU), Uttarakhand</div>
                                    </div>
                                    <div class="collaborations_logo">
                                        <img class="img-fluid" src="{{ asset('assets/images/logos/national-collaborators/logo3.webp') }}" alt="logo3">
                                        <div class="collab_partner_name">The Energy and Resources Institute, Delhi</div>
                                    </div>
                                    <div class="collaborations_logo">
                                        <img class="img-fluid" src="{{ asset('assets/images/logos/national-collaborators/logo4.webp') }}" alt="logo4">
                                        <div class="collab_partner_name">Breach Candy Hospital Trust, Mumbai</div>
                                    </div>
                                    <div class="collaborations_logo">
                                        <img class="img-fluid" src="{{ asset('assets/images/logos/national-collaborators/logo5.webp') }}" alt="logo5">
                                        <div class="collab_partner_name">Agharkar Research Institute, Pune</div>
                                    </div>                                   
                                    <div class="collaborations_logo collaborations_logoread">
                                        <a class="readmore" href="<?= url('/collaborators?tab=national'); ?>">
                                            Read More <img class="img-fluid" src="{{ asset('assets/images/readmore.svg') }}" alt="readmore">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="internationaltab" role="tabpanel" aria-labelledby="internationaltab-tab">
                                <div class="collaborations_logos">
                                    <div class="collaborations_logo">
                                        <img class="img-fluid" src="{{ asset('assets/images/logos/international-collaborators/logo-1.webp') }}" alt="logo1">
                                         <div class="collab_partner_name">Georgia Institute of Technology</div>
                                    </div>
                                    <div class="collaborations_logo">
                                        <img class="img-fluid" src="{{ asset('assets/images/logos/international-collaborators/logo-2.webp') }}" alt="logo2">
                                         <div class="collab_partner_name">Pennsylvania State University</div>
                                    </div>
                                    <div class="collaborations_logo">
                                        <img class="img-fluid" src="{{ asset('assets/images/logos/international-collaborators/logo-3.webp') }}" alt="logo3">
                                         <div class="collab_partner_name">All-Russian Collection of Microorganisms (VKM), Russia</div>
                                    </div>
                                    <div class="collaborations_logo">
                                        <img class="img-fluid" src="{{ asset('assets/images/logos/international-collaborators/logo-4.webp') }}" alt="logo4">
                                         <div class="collab_partner_name">Chungbuk National University, South Korea</div>
                                    </div>
                                    <div class="collaborations_logo">
                                        <img class="img-fluid" src="{{ asset('assets/images/logos/international-collaborators/logo-5.webp') }}" alt="logo5">
                                         <div class="collab_partner_name">Chinese Academy of Sciences, China</div>
                                    </div>                                   
                                    <div class="collaborations_logo collaborations_logoread">
                                        <a class="readmore" href="<?= url('/collaborators?tab=international'); ?>">
                                            Read More <img class="img-fluid" src="{{ asset('assets/images/readmore.svg') }}" alt="readmore">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="collaborations_right">
                        <img src="{{ asset('assets/images/home/map.webp') }}" alt="map">
                    </div>  
                </div>
            </div>
        </div>
     </div>
    <!-- COLLABORATIONS End -->

    <!-- FUTURE ROADMAP (2025–2030) Start -->
    <div class="future_roadmap_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        FUTURE ROADMAP (2025–2030)
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="future_roadmap_inner owl-carousel">
                        <div class="future_roadmap_box">
                            <div class="steps_count">
                                01
                            </div>
                            <p>Establish SCCCS as a National Nodal Centre for Climate Science</p>
                            <!-- <a class="readmore" href="#">Read More <img class="img-fluid" src="{{ asset('assets/images/readmore.svg') }}" alt="readmore"></a> -->
                        </div>
                        <div class="future_roadmap_box">
                            <div class="steps_count">
                                02
                            </div>
                            <p>Drive Science–Policy–Society Engagement through Strategic Partnerships</p>
                            <!-- <a class="readmore" href="#">Read More <img class="img-fluid" src="{{ asset('assets/images/readmore.svg') }}" alt="readmore"></a> -->
                        </div>
                        <div class="future_roadmap_box">
                            <div class="steps_count">
                                03
                            </div>
                            <p>Achieve Measurable Progress towards Campus Net-Zero and Low-Carbon Operations</p>
                            <!-- <a class="readmore" href="#">Read More <img class="img-fluid" src="{{ asset('assets/images/readmore.svg') }}" alt="readmore"></a> -->
                        </div>
                        <div class="future_roadmap_box">
                            <div class="steps_count">
                                04
                            </div>
                            <p>Advance India-Centric Climate–Health and Waste Systems Research </p>
                            <!-- <a class="readmore" href="#">Read More <img class="img-fluid" src="{{ asset('assets/images/readmore.svg') }}" alt="readmore"></a> -->
                        </div>
                        <div class="future_roadmap_box">
                            <div class="steps_count">
                                05
                            </div>
                            <p>Build Capacity, Awareness, and Leadership for Climate Action</p>
                            <!-- <a class="readmore" href="#">Read More <img class="img-fluid" src="{{ asset('assets/images/readmore.svg') }}" alt="readmore"></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FUTURE ROADMAP (2025–2030) End-->
      
</main>
@include('footer')

