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
                        <h1>Biodiversity</h1>
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
                <li>Biodiversity</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->

    <div class="biodiversity_page d-none">
        <div class="container">
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-9">
                    <section class="overview-section">
                        <div class="container1">
                            <div class="overview-wrap">
                                <!-- Image -->
                                <div class="overview-images">
                                    <div class="img-box">
                                        <img class="img-fluid" src="{{ asset('assets/images/biodiversity/overview1.webp') }}" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img class="img-fluid" src="{{ asset('assets/images/biodiversity/overview2.webp') }}" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img class="img-fluid" src="{{ asset('assets/images/biodiversity/overview3.webp') }}" alt="">
                                    </div>
                                </div>
                                <!-- Content -->
                                <div class="overview-content">
                                    <div class="heading">Overview</div>
                                    <p>The Biodiversity Wing of the Symbiosis Centre for Climate Change and Sustainability (SCCCS) aligns its work with the United Nations Sustainable Development Goals 13 (Climate Action), 14 (Life Below Water), and 15 (Life on Land). Our mission centers on understanding the rich biodiversity within Symbiosis International University (SIU) campuses, assessing the impacts of climate change on these ecosystems, and implementing effective conservation strategies to protect them.</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="vision_and_mission_section vision_sec">
                        <div class="container1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="vision_and_mission_inner">
                                        <div class="heading">
                                            Our Mission
                                        </div>
                                        <p>The Biodiversity Wing is dedicated to documenting and preserving biodiversity while spreading awareness among the Symbiosis community—students, staff, and faculty alike. Through citizen science platforms, we facilitate greater participation from the campus community, enabling us to identify and prioritize critical conservation areas. Our approach combines scientific rigor with community engagement to create lasting impact.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <div class="biodiversity_page">
        <div class="container">
            <div class="row">
            <!-- Sidebar -->
                <div class="col-lg-3">
                    <nav class="sidebar" id="sidebar">
                        <!-- <div class="sidebar-header">
                            <h5>Biodiversity</h5>
                        </div> -->
                        <ul class="sidebar-menu">
                            <li><a href="#overview" class="active">Overview</a></li>
                            <li><a href="#mission">Focus Area</a></li>
                            <li><a href="#campus-biodiversity">Campus Biodiversity</a></li>
                            <li><a href="#our-approach">Our Approach</a></li>
                            <li><a href="#our-flagship-initiative">Campus in Focus</a></li>
                            <li><a href="#join-our-biodiversity-whatsApp-group">Join Our Biodiversity WhatsApp Group</a></li>
                            <li><a href="#current-research-projects">Current Research Projects</a></li>
                            <li><a href="#publications">Publications</a></li>
                            <li><a href="#upcoming-events">Upcoming Events</a></li>
                            <li><a href="#siu-biodiversity-page">SIU Biodiversity Page</a></li>
                            <li><a href="#resources">Resources</a></li>
                            <li><a href="#biodiversity-photos">Biodiversity Photos</a></li>
                        </ul>
                    </nav>
                    <!-- Mobile toggle arrow -->
                    <div class="mobile-sidebar-toggle" id="mobileSidebarToggle">
                        <span class="arrow">☰</span>
                    </div>
                </div>
                <!-- Main Content -->
                <div class="col-lg-9">
                    <!-- Overview -->
                    <section class="overview-section scroll_margin" id="overview">
                    <div class="overview-wrap">
                        <div class="overview-images">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/biodiversity/overview1.webp') }}" alt="">
                        </div>
                        <div class="img-box">
                            <img src="{{ asset('assets/images/biodiversity/overview2.webp') }}" alt="">
                        </div>
                        <div class="img-box">
                            <img src="{{ asset('assets/images/biodiversity/bioslide1-4.webp') }}" alt="">
                        </div>
                        </div>
                        <div class="overview-content">
                        <div class="heading">Overview</div>
                        <p>The Biodiversity Wing of the Symbiosis Centre for Climate Change and Sustainability (SCCCS) aligns its work with the United Nations Sustainable Development Goals 13 (Climate Action), 14 (Life Below Water), and 15 (Life on Land). Our mission centers on understanding the rich biodiversity within Symbiosis International University (SIU) campuses, assessing the impacts of climate change on these ecosystems, and implementing effective conservation strategies to protect them.</p>
                        </div>
                    </div>
                    </section>
                    <!-- Mission -->
                    <section class="vision_and_mission_section vision_sec scroll_margin" id="mission">
                    <div class="vision_and_mission_inner">
                        <div class="heading">Focus Area</div>
                        <p>The Biodiversity Wing is dedicated to documenting and preserving biodiversity while spreading awareness among the Symbiosis community—students, staff, and faculty alike. Through citizen science platforms, we facilitate greater participation from the campus community, enabling us to identify and prioritize critical conservation areas. Our approach combines scientific rigor with community engagement to create lasting impact.</p>
                    </div>
                    </section>

                    <section class="campus-biodiversity-section scroll_margin" id="campus-biodiversity">
                        <div class="section-header">
                            <div class="heading">Campus Biodiversity</div>
                        </div>
                        <div class="campus-content">
                            <!-- Left Column: Images -->
                            <div class="campus-images">
                                <img src="{{ asset('assets/images/biodiversity/campus-biodiversity1.webp') }}" alt="Lavale Campus" class="img-fluid">
                                <img src="{{ asset('assets/images/biodiversity/campus-biodiversity2.webp') }}" alt="Wildlife" class="img-fluid">
                                <img src="{{ asset('assets/images/biodiversity/campus-biodiversity3.webp') }}" alt="Wetlands" class="img-fluid">
                            </div>

                            <!-- Right Column: Text Content -->
                            <div class="campus-text">
                                <div class="biopadding">
                                    <div class="subheading">
                                        The Lavale Campus: A Living Laboratory
                                    </div>
                                    <p>Spread across 350 acres, the SIU Lavale campus serves as an exceptional natural laboratory for biodiversity studies. The campus encompasses a diverse range of habitats, including woodlands, forests, savannas, wetlands, urban gardens, and built-up areas. This habitat diversity creates ideal conditions for studying a wide range of species and ecosystems.</p>
                                    <p>Positioned at the intersection of the Western Ghats—a UNESCO World Heritage Site and global biodiversity hotspot—and the Deccan Savannas, the campus hosts a unique assemblage of flora and fauna. This strategic location results in remarkable species diversity rarely found in an educational setting.</p>                                    
                                </div>
                                <div class="biopadding">
                                    <div class="subheading">Notable Species</div>
                                    <p>The campus is home to several threatened and endemic species that underscore its conservation importance:</p>
                                    <div class="species-cards mt-4">
                                        <div class="species-card">
                                            <img src="{{ asset('assets/images/biodiversity/mammals.webp') }}" alt="Mammals icon">
                                            <h5>Mammals</h5>
                                            <p>12 mammal species documented</p>
                                        </div>
                                        <div class="species-card">
                                            <img src="{{ asset('assets/images/biodiversity/birds.webp') }}" alt="Birds icon">
                                            <h5>Birds</h5>
                                            <p>Over 174 bird species</p>
                                        </div>
                                        <div class="species-card">
                                            <img src="{{ asset('assets/images/biodiversity/reptile.webp') }}" alt="Reptiles icon">
                                            <h5>Reptiles</h5>
                                            <p>26 documented species</p>
                                        </div>
                                        <div class="species-card">
                                            <img src="{{ asset('assets/images/biodiversity/amphibian.webp') }}" alt="Amphibians icon">
                                            <h5>Amphibians</h5>
                                            <p>7 species recorded</p>
                                        </div>
                                        <div class="species-card">
                                            <img src="{{ asset('assets/images/biodiversity/butterfly.webp') }}" alt="Butterflies icon">
                                            <h5>Butterflies</h5>
                                            <p>More than 50 species identified</p>
                                        </div>
                                    </div>
                                    <p class="highlight">These species represent the ecological richness of the region and highlight the campus's role as a refuge for biodiversity in an increasingly urbanized landscape.</p>
                                </div>
                            </div>
                        </div>
                        <div class="biopadding w-100">
                                <div class="bio-wrapper">
                                    <!-- Fauna -->
                                    <div class="bio-card">
                                        <div class="subheading">Fauna</div>
                                        <table>
                                        <thead>
                                            <tr>
                                            <th>Taxonomic group</th>
                                            <th style="text-align:center">No. of Species</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <td>Birds</td>
                                            <td>174</td>
                                            </tr>
                                            <tr>
                                            <td>Mammals</td>
                                            <td>12</td>
                                            </tr>
                                            <tr>
                                            <td>Reptiles</td>
                                            <td>26</td>
                                            </tr>
                                            <tr>
                                            <td>Amphibians</td>
                                            <td>7</td>
                                            </tr>
                                            <tr>
                                            <td>Butterflies</td>
                                            <td>50</td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                    <!-- Flora -->
                                    <div class="bio-card">
                                        <div class="subheading">Flora</div>
                                        <table>
                                        <thead>
                                            <tr>
                                            <th>Taxonomic group</th>
                                            <th style="text-align:center">No. of Species</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <td>Trees</td>
                                            <td>123</td>
                                            </tr>
                                            <tr>
                                            <td>Shrubs</td>
                                            <td>54</td>
                                            </tr>
                                            <tr>
                                            <td>Herbs</td>
                                            <td>107</td>
                                            </tr>
                                            <tr>
                                            <td>Climbers</td>
                                            <td>39</td>
                                            </tr>
                                            <tr>
                                            <td>Cryptogams</td>
                                            <td>15</td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                                <p>These species represent the ecological richness of the region and highlight the campus's role as a refuge for biodiversity in an increasingly urbanized landscape.</p>
                                <p>Link (URL) to different pages that feature checklists/photos of plants and animals observed on campus.</p>
                                <div class="plants_and_animals">
                                    <a target="_blank" href="https://ebird.org/hotspot/L4277624">https://ebird.org/hotspot/L4277624</a>
                                    <a target="_blank" href="https://ebird.org/hotspot/L40147267/bird-list">https://ebird.org/hotspot/L40147267/bird-list</a>
                                    <a target="_blank" href="https://ebird.org/hotspot/L37134926/bird-list">https://ebird.org/hotspot/L37134926/bird-list</a>
                                    <a target="_blank" href="https://www.inaturalist.org/people/symbiosis_university_biodiversity">https://www.inaturalist.org/people/symbiosis_university_biodiversity</a>
                                </div>
                            </div>
                            <div class="">
                                <div class="subheading">Beyond Lavale</div>
                                <p>While other SIU campuses in Pune are smaller and more urbanized, they still maintain pockets of green spaces where biodiversity can thrive. We actively engage with all SIU campuses across India, offering support to document their biodiversity and establish biodiversity clubs under the mentorship of faculty, staff, and students.</p>
                            </div>
                    </section>

                    <section class="our_approach_section scroll_margin" id="our-approach">
                        <div class="our_approach_inner listingsec">
                            <div class="biopadding">
                                <div class="heading"> Our Approach </div>
                                    <div class="subheading"> Community Engagement </div>
                                    <p>The Biodiversity Wing fosters appreciation for nature through diverse initiatives:</p>
                                    <ul>
                                        <li>
                                            <b>Monthly Nature Trails</b>
                                            Guided walks that help participants observe and understand campus biodiversity
                                        </li>
                                        <li>
                                            <b>Competitions</b>
                                            Engaging events that encourage active participation in conservation
                                        </li>
                                        <li>
                                            <b>Guest Talks</b>
                                            Expert presentations on biodiversity and conservation topics
                                        </li>
                                        <li>
                                            <b>Informal Interactions</b>
                                            Both online and in-person discussions that build community awareness
                                        </li>
                                    </ul>
                            </div>
                            <div class="biopadding">
                                <div class="subheading"> Conservation Infrastructure </div>
                                <p>We have developed dedicated spaces across our campuses to support biodiversity</p>
                                <ul>
                                    <li>Butterfly gardens</li>
                                    <li>Medicinal plant gardens</li>
                                    <li>Protected wetlands</li>
                                    <li>Conserved woodlands and forests</li>
                                    <li>Urban gardens designed for biodiversity support</li>
                                </ul>
                            </div>
                            <div class="biopadding">
                                <div class="subheading"> Citizen Science Integration </div>
                                <p>By utilizing citizen science platforms, we democratize biodiversity documentation. This approach not only generates valuable scientific data but also empowers the campus community to become active participants in conservation efforts. The data collected informs our conservation priorities and helps track changes over time.</p>
                            </div>
                            <div class="biopadding m-0">
                                <div class="subheading"> Why Biodiversity Matters </div>
                                <p>Our campuses across India are situated in ecologically diverse regions, with the Lavale campus exemplifying this richness. Located in the foothills of the Western Ghats, one of the world's most significant biodiversity hotspots, the campus provides unparalleled opportunities to observe, study, and conserve biodiversity in an educational context.</p>
                                <p>The presence of globally threatened species, combined with high levels of endemism characteristic of the Western Ghats region, makes our biodiversity work both scientifically significant and urgently necessary. Through our efforts, we contribute to global conservation goals while providing our community with direct, meaningful connections to the natural world.</p>
                            </div>
                        </div>
                    </section>

                    <section class="our_flagship_section scroll_margin" id="our-flagship-initiative">
                        <div class="heading">Campus in Focus</div>
                            <div class="subheading">Nature Photography Competition 2025</div>
                            <div class="flagshipbox biopadding">
                                <div class="flagleft">
                                    <img class="img-fluid" src="{{ asset('assets/images/biodiversity/flagship1.webp') }}" alt="">
                                    <div class="photocredit">Photo Credits: Avishkar Munje</div>
                                </div>
                                <div class="flagright">
                                    <div class="div">
                                        <div class="subheading">The Power of Photography in Conservation</div>
                                        <p>Photography serves as a powerful medium for documenting and appreciating the intrinsic beauty, diversity, and importance of the natural world. Through the lens, we capture the delicate interplay of landscapes and wildlife, creating moments that allow us to pause and reflect on the profound value of our environment. Each photograph tells a story—not just of nature itself, but of our shared responsibility in its preservation and the urgent need to protect the ecosystems that sustain all life on Earth.</p>  
                                    </div>
                                </div>
                            </div>
                            <div class="flagshipbox biopadding">
                                <div class="flagleft">
                                    <img class="img-fluid" src="{{ asset('assets/images/biodiversity/bioslide1-6-1.webp') }}" alt="">
                                </div>
                                <div class="flagright">
                                    <div class="div">
                                        <div class="subheading">About the Competition</div>
                                        <p>In celebration of National Wildlife Week in October 2025, the Symbiosis Centre for Climate Change and Sustainability (SCCCS), in collaboration with the Symbiosis School of Visual Arts and Photography (SSVAP), organized a Nature Photography Competition open to all Symbiosis International University (SIU) campuses. This initiative brought together the campus community in a creative exploration of the natural world that surrounds them.</p>  
                                    </div>
                                </div>
                            </div>
                            <div class="biopadding listingsec">
                                <div class="subheading"> Competition Objectives </div>
                                <p>The competition was designed to encourage students, staff, and faculty across the SIU community to:</p>
                                <p>Observe the natural world with heightened awareness and curiosity</p>
                                <ul>
                                    <li>Interpret ecological relationships and environmental narratives through a visual lens</li>
                                    <li>Capture the beauty, complexity, and fragility of nature through their creative perspectives</li>
                                    <li>Appreciate the biodiversity present within and around our campuses</li>
                                    <li>Connect with conservation values through artistic expression</li>
                                </ul>
                            </div>
                            <div class="biopadding listingsec">
                                <div class="subheading"> Competition Categories </div>
                                <p>Participants submitted entries across four distinct themes, each highlighting different aspects of our natural heritage:</p>
                                <ul>
                                    <li><b>Macro World</b>: Exploring the intricate details of nature often invisible to the naked eye—from the compound eyes of insects to the delicate veining of leaves, revealing the extraordinary complexity hidden in the smallest elements of our ecosystem.</li>
                                    <li><b>Plants</b>: Celebrating the flora that forms the foundation of terrestrial ecosystems, from towering trees to delicate wildflowers, showcasing the diversity, adaptations, and aesthetic beauty of plant life.</li>
                                    <li><b>Animals</b>: Documenting the fauna that inhabits our campuses and surrounding areas, capturing behavior, habitat interactions, and the unique characteristics that make each species remarkable.</li>
                                    <li><b>Conservation</b>: Visual narratives that tell stories of environmental stewardship, ecological challenges, human-nature interactions, and the urgent need to protect our natural world for future generations</li>
                                </ul>
                            </div>
                            <div class="biopadding listingsec">
                                <b>Community Engagement Through Art</b>
                                <p>This competition represented more than just a photographic contest—it served as a platform for environmental education and community building. By encouraging members of the Symbiosis family to engage directly with nature through their cameras, the initiative fostered:</p>
                                <ul>
                                    <li>A deeper understanding of local biodiversity</li>
                                    <li>Enhanced observation skills and ecological awareness</li>
                                    <li>Creative expression as a tool for conservation advocacy</li>
                                    <li>Collaborative dialogue about environmental stewardship</li>
                                    <li>Documentation of our campus ecosystems for research and monitoring</li>
                                </ul>
                                <p>The competition aligned perfectly with National Wildlife Week's emphasis on conservation awareness, bringing the message home to our campuses and demonstrating that meaningful environmental action begins with observing, appreciating, and documenting the nature around us.</p>

                            </div>
                            <div class="biopadding listingsec">
                                <b>Winning Entries</b>
                                <p>The following images represent the winning entries from the competition, showcasing exceptional talent, keen observation, and a profound connection with the natural world. Each photograph demonstrates not only technical skill but also an understanding of the ecological narratives that unfold in our campus environments.</p>
                            </div>
                            <div class="">
                                <div class="subheading">SIU Nature Photography Competition</div>
                                <div class="table-responsive tablesiu">
                                    <table class="table table-bordered table-hover align-middle m-0">
                                        <thead class="table-primary text-center">
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Theme</th>
                                                <th>Category</th>
                                                <th>Winner's Name</th>
                                                <th>Institute</th>
                                                <th>Caption</th>
                                                <th>Winning Images</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>Micro World</td>
                                                <td>Student</td>
                                                <td>Kshiteej Bapat (25030241177)</td>
                                                <td>SCIT</td>
                                                <td>Autumn Sentinel: Visible or invisible, that is the question!</td>
                                                <td>
                                                    <a class="Download-Image" href="{{ asset('assets/images/biodiversity/winner-images/Kshiteej-Bapat.webp') }}" download>
                                                        <img src="{{ asset('assets/images/biodiversity/winner-images/Kshiteej-Bapat.webp') }}" alt="">
                                                        <span >Download Image</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td>Micro World</td>
                                                <td>Student</td>
                                                <td>Ghubade Samadhan Vishwanath (21069001009)</td>
                                                <td>SSI</td>
                                                <td class="fst-italic">Beetle companionship on a blade of grass</td>
                                                <td>
                                                    <a class="Download-Image" href="{{ asset('assets/images/biodiversity/winner-images/Ghubade-Samadhan.webp') }}" download>
                                                        <img src="{{ asset('assets/images/biodiversity/winner-images/Ghubade-Samadhan.webp') }}" alt="">
                                                        <span >Download Image</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td>Wonders of Plants</td>
                                                <td>Student</td>
                                                <td>Tanvi Sontakke (22070122234)</td>
                                                <td>SIT</td>
                                                <td class="fst-italic">Ancient Hulls, New Roots</td>
                                                <td>
                                                    <a class="Download-Image" href="{{ asset('assets/images/biodiversity/winner-images/Tanvi-Sontakke.webp') }}" download>
                                                        <img src="{{ asset('assets/images/biodiversity/winner-images/Tanvi-Sontakke.webp') }}" alt="">
                                                        <span >Download Image</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">4</td>
                                                <td>Animal Kingdom</td>
                                                <td>Student</td>
                                                <td>Ishita Malhotra (21010126123)</td>
                                                <td>SLS-P</td>
                                                <td class="fst-italic">A Mother's Shelter</td>
                                                <td>
                                                    <a class="Download-Image" href="{{ asset('assets/images/biodiversity/winner-images/Ishita-Malhotra.webp') }}" download>
                                                        <img src="{{ asset('assets/images/biodiversity/winner-images/Ishita-Malhotra.webp') }}" alt="">
                                                        <span >Download Image</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">5</td>
                                                <td>Animal Kingdom</td>
                                                <td>Student</td>
                                                <td>Pankaj Bhole (2402914101619)</td>
                                                <td>SSODL</td>
                                                <td class="fst-italic">
                                                Brood Parasitism: Purple-rumped Sunbird feeding Gray-bellied Cuckoo chick
                                                </td>
                                                <td>
                                                    <a class="Download-Image" href="{{ asset('assets/images/biodiversity/winner-images/Pankaj-Bhole.webp') }}" download>
                                                        <img src="{{ asset('assets/images/biodiversity/winner-images/Pankaj-Bhole.webp') }}" alt="">
                                                        <span >Download Image</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">6</td>
                                                <td>Conservation Photography</td>
                                                <td>Student</td>
                                                <td>Arnav Rastogi (25050522004)</td>
                                                <td>SSVAP</td>
                                                <td class="fst-italic">
                                                Sarus Crane looking at humans in the Dhanauri wetlands, U.P.
                                                </td>
                                                <td>
                                                    <a class="Download-Image" href="{{ asset('assets/images/biodiversity/winner-images/Arnav-Rastogi.webp') }}" download>
                                                        <img src="{{ asset('assets/images/biodiversity/winner-images/Arnav-Rastogi.webp') }}" alt="">
                                                        <span >Download Image</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">7</td>
                                                <td>Conservation Photography</td>
                                                <td>Student</td>
                                                <td>Pranay Singh (2402914107019)</td>
                                                <td>SSODL</td>
                                                <td class="fst-italic"> Impact of mining - when the sun sets on ARAI Tekdi, what will remain?</td>
                                                <td>
                                                    <a class="Download-Image" href="{{ asset('assets/images/biodiversity/winner-images/Pranay-Singh.webp') }}" download>
                                                        <img src="{{ asset('assets/images/biodiversity/winner-images/Pranay-Singh.webp') }}" alt="">
                                                        <span >Download Image</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">8</td>
                                                <td>Micro World</td>
                                                <td>Staff</td>
                                                <td>Manas Bhunia (N11346)</td>
                                                <td>DSRW</td>
                                                <td class="fst-italic">
                                                Keep going: progress is progress, no matter how slowly you are making it
                                                </td>
                                                <td><a class="Download-Image" href="{{ asset('assets/images/biodiversity/winner-images/Manas-Bhunia.webp') }}" download>
                                                        <img src="{{ asset('assets/images/biodiversity/winner-images/Manas-Bhunia.webp') }}" alt="">
                                                        <span >Download Image</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">9</td>
                                                <td>Wonders of Plants</td>
                                                <td>Staff</td>
                                                <td>Yogesh Subhash Gurav (N05683)</td>
                                                <td>SID</td>
                                                <td class="fst-italic">Peaceful Bloom (Wild Grass Stem)</td>
                                                <td>
                                                    <a class="Download-Image" href="{{ asset('assets/images/biodiversity/winner-images/Yogesh-Subhash-Gurav.webp') }}" download>
                                                        <img src="{{ asset('assets/images/biodiversity/winner-images/Yogesh-Subhash-Gurav.webp') }}" alt="">
                                                        <span >Download Image</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">10</td>
                                                <td>Animal Kingdom</td>
                                                <td>Staff</td>
                                                <td>Amaresh Kumar Singh (N04103)</td>
                                                <td>SSVAP</td>
                                                <td class="fst-italic">The Shy Leopard</td>
                                                <td>
                                                    <a class="Download-Image" href="{{ asset('assets/images/biodiversity/winner-images/Amaresh-Kumar.webp') }}" download>
                                                        <img src="{{ asset('assets/images/biodiversity/winner-images/Amaresh-Kumar.webp') }}" alt="">
                                                        <span >Download Image</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">11</td>
                                                <td>Animal Kingdom</td>
                                                <td>Staff</td>
                                                <td>Anand Sawant (T04212)</td>
                                                <td>SID</td>
                                                <td class="fst-italic">Jadu ki Zappi</td>
                                                <td>
                                                    <a class="Download-Image" href="{{ asset('assets/images/biodiversity/winner-images/Anand-Sawant.webp') }}" download>
                                                        <img src="{{ asset('assets/images/biodiversity/winner-images/Anand-Sawant.webp') }}" alt="">
                                                        <span >Download Image</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">12</td>
                                                <td>Micro World</td>
                                                <td>Faculty</td>
                                                <td>Chetan Bokde (T08725)</td>
                                                <td>SSPAD-NG</td>
                                                <td class="fst-italic">Rounded Pierrot - Tarucus nara</td>
                                                <td>
                                                    <a class="Download-Image" href="{{ asset('assets/images/biodiversity/winner-images/Chetan-Bokde.webp') }}" download>
                                                        <img src="{{ asset('assets/images/biodiversity/winner-images/Chetan-Bokde.webp') }}" alt="">
                                                        <span >Download Image</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">13</td>
                                                <td>Photography of the Year</td>
                                                <td>Student</td>
                                                <td>Arnav das (24050522004)</td>
                                                <td>SSVAP</td>
                                                <td class="fst-italic">Close to Death</td>
                                                <td>
                                                    <a class="Download-Image" href="{{ asset('assets/images/biodiversity/winner-images/Arnav-das.webp') }}" download>
                                                        <img src="{{ asset('assets/images/biodiversity/winner-images/Arnav-das.webp') }}" alt="">
                                                        <span >Download Image</span>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </section>

                    <section class="join_our_section scroll_margin" id="join-our-biodiversity-whatsApp-group">
                        <div class="biopadding">
                            <div class="heading">Join Our Biodiversity WhatsApp Group</div>
                            <p>The Biodiversity Wing welcomes participation from all members of the Symbiosis community. Any interested student, staff member, or faculty member currently affiliated with any Symbiosis institute can join our active biodiversity community and contribute to conservation efforts on our campuses.</p>
                        </div>
                        <div class="biopadding">
                            <div class="subheading">How to Get Involved</div>
                            <p>To join our citizen science network, please email us at <a href="mailto:biodiversitycell@siu.edu.in">biodiversitycell@siu.edu.in</a> to express your interest in the biodiversity group. Once you join, you'll become part of a vibrant community dedicated to observing, documenting, and understanding the natural world around us.</p>
                        </div>
                        <div class="biopadding">
                            <div class="subheading">Citizen Science Platforms</div>
                            <p>We actively encourage all participants to engage with established citizen science initiatives that provide valuable data for biodiversity research and conservation. These platforms enable you to make meaningful contributions to scientific understanding while developing your observational skills and ecological knowledge.</p>
                        </div>
                        <div class="flagshipbox biopadding">
                            <div class="flagleft">
                                <img class="img-fluid" src="{{ asset('assets/images/biodiversity/bioslide1-5-1.webp') }}" alt="">
                            </div>
                            <div class="flagright">
                                <div class="div">
                                    <b>eBird</b>
                                    <p>This globally recognized bird observation platform, managed by the Cornell Lab of Ornithology, is the world's largest biodiversity-related citizen science project. Through eBird, participants document bird distribution, abundance, habitat use, and trends by submitting checklists of birds observed during outings. The platform's data contributes to hundreds of scientific studies and conservation decisions worldwide, helping researchers understand migration patterns, population changes, and the impacts of climate change on avian species.</p>
                                    <a target="_blank" href="https://ebird.org/hotspot/L4277624">https://ebird.org/hotspot/L4277624</a>
                                    <a target="_blank" href="https://ebird.org/hotspot/L40147267/bird-list">https://ebird.org/hotspot/L40147267/bird-list</a>
                                    <a target="_blank" href="https://ebird.org/hotspot/L37134926/bird-list">https://ebird.org/hotspot/L37134926/bird-list</a>
                                </div>
                            </div>
                        </div>
                        <div class="flagshipbox biopadding reverse-col">
                            <div class="flagleft">
                                <img class="img-fluid" src="{{ asset('assets/images/biodiversity/bioslide1-1-1.webp') }}" alt="">
                            </div>
                            <div class="flagright">
                                <div class="div">
                                    <b>SeasonWatch</b>
                                    <p>An India-wide citizen science initiative focused on understanding how climate change affects the seasonal behavior of trees. Participants observe and record the timing of leafing, flowering, and fruiting in common tree species across the country. This long-term phenology data helps scientists establish baseline patterns and identify shifts in plant seasonality that may be linked to changing climatic conditions. SeasonWatch has compiled over 600,000 observations from thousands of contributors across India, offering crucial insights into the ecology of tropical trees.</p>
                                </div>
                            </div>
                        </div>
                        <div class="flagshipbox biopadding">
                            <div class="flagleft">
                                <img class="img-fluid" src="{{ asset('assets/images/biodiversity/bioslide1-3-1.webp') }}" alt="">
                            </div>
                            <div class="flagright">
                                <div class="div">
                                    <b>iNaturalist</b>
                                    <p>A powerful social network and observation platform that connects naturalists worldwide. Users can photograph and document any living organism, from plants and insects to mammals and fungi. The platform's artificial intelligence helps suggest identifications, while a global community of experts provides verification. Research-grade observations are automatically shared with the Global Biodiversity Information Facility (GBIF), making your contributions directly valuable to biodiversity research and conservation planning.</p>
                                    <a target="_blank" href="https://www.inaturalist.org/people/symbiosis_university_biodiversity">https://www.inaturalist.org/people/symbiosis_university_biodiversity</a>
                                </div>
                            </div>
                        </div>
                        <div class="biopadding">
                            <div class="subheading">Contributing to Science</div>
                            <p>When you share your natural observations on these platforms, you're not simply recording what you see—you're contributing to our collective understanding of biodiversity patterns, species distributions, seasonal changes, and ecological responses to environmental shifts. Your observations become part of datasets that inform conservation strategies, help track rare species, monitor the spread of invasive species, and document the impacts of climate change.</p>
                            <p>Every photograph, every checklist, and every observation adds to a growing body of knowledge that scientists, conservationists, and policymakers use to make informed decisions about protecting our natural heritage.</p>
                        </div>
                        <div class="">
                            <div class="subheading">
                                Get Started Today
                            </div>
                            <p>Whether you're an experienced naturalist or just beginning to explore the natural world, citizen science platforms provide accessible ways to contribute meaningfully to biodiversity science. Join our WhatsApp group, download these applications, and start documenting the remarkable biodiversity that surrounds us on the Symbiosis campuses.</p>
                            <p>To participate in any of our events, activities, or to learn more about citizen science opportunities, write to us at <a href="mailto:biodiversitycell@siu.edu.in">biodiversitycell@siu.edu.in</a>.</p>
                        </div>
                    </section>

                    <section class="current_research_projects scroll_margin" id="current-research-projects">
                        <div class="heading">Current Research Projects</div>
                            <div class="biopadding">
                                <div class="subheading">Monitoring Biodiversity at SIU Lavale Campus</div>
                                <p>The Biodiversity Wing conducts systematic, long-term monitoring of biodiversity across the SIU Lavale campus to understand ecological patterns and changes over time. Through periodic surveys conducted across different seasons and habitats, we aim to identify patterns of biodiversity distribution, assess seasonal variations, and establish baseline data for future conservation and research efforts.</p>
                            </div>
                            <div class="biopadding listingsec">
                                <div class="subheading"> Research Objectives </div>
                                <p>Our monitoring program seeks to:</p>
                                <ul>
                                    <li>Document the complete biodiversity inventory of the campus across multiple taxonomic groups</li>
                                    <li>Understand seasonal patterns and habitat preferences of different species</li>
                                    <li>Track population trends and identify species of conservation concern</li>
                                    <li>Establish baseline data that can inform campus planning and conservation decisions</li>
                                    <li>Assess the impact of campus development and management practices on biodiversity</li>
                                    <li>Create educational opportunities for students to engage in hands-on ecological research</li>
                                </ul>
                            </div>
                            <div class="biopadding listingsec">
                                <div class="subheading">Taxonomic Groups Under Study</div>
                                <p><b>Fauna:</b> Our faunal surveys encompass a wide range of animal groups, providing a comprehensive picture of campus wildlife:</p>
                                <ul>
                                    <li><b>Birds</b>: Regular bird surveys document resident and migratory species, their habitat use, and seasonal abundance patterns</li>
                                    <li><b>Mammals</b>: Camera traps, direct observations, and sign surveys help monitor mammalian diversity, including nocturnal and elusive species</li>
                                    <li><b>Reptiles</b>: Surveys target snakes, lizards, and other reptiles across different microhabitats</li>
                                    <li><b>Amphibians</b>: Focused surveys during monsoon and breeding seasons document frog and toad diversity</li>
                                    <li><b>Insects</b>: Various insect orders are surveyed, with particular emphasis on ecologically important groups like butterflies, bees, and beetles</li>
                                    <li><b>Arachnids</b>: Spider diversity is documented through targeted surveys in different habitat types</li>
                                </ul>
                            </div>
                            <hr>
                            <div class="biopadding listingsec">
                                <!-- <div class="subheading">Taxonomic Groups Under Study</div> -->
                                <p><b>Flora:</b> Plant diversity monitoring provides the foundation for understanding campus ecosystems:</p>
                                <ul>
                                    <li><b>Trees</b>: All tree species are mapped and monitored for distribution, health, and phenological patterns</li>
                                    <li><b>Shrubs</b>: Understorey shrub communities are surveyed to understand habitat structure</li>
                                    <li><b>Herbs</b>: Herbaceous plants, including grasses and wildflowers, are documented across seasons to capture the full diversity of ground-layer vegetation</li>
                                </ul>
                            </div>

                            <div class="biopadding">
                                <div class="subheading">Methodology and Data Management</div>
                                <p>Our monitoring program adheres to standardized protocols to ensure data quality and consistency over time. Surveys are conducted seasonally to capture temporal variations in species presence and abundance. All observations are documented using citizen science platforms, creating a permanent, accessible record that can be analyzed for research publications, conservation planning, and educational purposes.</p>
                            </div>

                            <div class="biopadding listingsec m-0">
                                <div class="subheading">Research Outcomes</div>
                                <p>Data collected through this monitoring program contributes to:</p>
                                <ul>
                                   <li>Scientific publications on campus biodiversity and ecology</li>
                                   <li>Conservation management plans for the campus</li>
                                   <li>Identification of areas requiring protection or restoration</li>
                                   <li>Educational curricula and student research projects</li>
                                   <li>Regional and national biodiversity databases through citizen science platforms</li>
                                   <li>Understanding of how urban-edge ecosystems function and change over time</li>
                                </ul>
                                <p>This ongoing research project represents a long-term commitment to understanding and protecting the remarkable biodiversity that makes the SIU Lavale campus a unique living laboratory for ecological study and conservation action.</p>
                            </div>
                    </section>

                    <section class="publications_section scroll_margin" id="publications">
                        <div class="heading">Publications</div>
                        <div class="biopadding">
                            <div class="row">
                                <div class="col-md-5">
                                    <img class="img-fluid" src="{{ asset('assets/images/biodiversity/campus-biodiversity3.webp') }}" alt="">
                                </div>
                                <div class="col-md-7">
                                    <div class="subheading">Fauna of Symbiosis</div>
                                    <p>This volume documents the rich fauna of the Symbiosis Lavale campus, featuring birds, mammals, reptiles, amphibians, and butterflies.</p>
                                    <div class="biopadding listingsec">
                                        <p><b>ISBN:</b> 978-81-928678-3-0</p>
                                        <p><b>Conceptualisation:</b> Dr. S. B. Mujumdar, Dr. Vidya Yeravdekar</p>
                                        <p><b>Authors:</b> Dr. Om Prakash , Shilpa Avate, Dr. Gurudas Nulkar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="biopadding">
                            <div class="row flex-md-row-reverse ">
                                <div class="col-md-5">
                                    <img class="img-fluid" src="{{ asset('assets/images/biodiversity/campus-biodiversity2.webp') }}" alt="">
                                </div>
                                <div class="col-md-7">
                                    <div class="subheading">Nature’s Wonders at Symbiosis</div>
                                    <p>This book highlights more than 200 plant species found across the Symbiosis International University, Lavale campus.</p>
                                    <div class="biopadding listingsec">
                                        <p><b>ISBN:</b> 978-93-5087-668-8</p>
                                        <p><b>Conceptualisation:</b> Dr. Bhushan Patwarden, Dr. Vidya Yeravdekar, Dr. V. R. Gunale</p>
                                        <p><b>Authors:</b> Dr. O    m Prakash , Shilpa Avate, Dr. Gurudas Nulkar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="highlightbox">
                            <span>These publications are available for purchase at the SIU Central Library.</span>
                        </div>
                    </section>

                    <section class="upcoming_events_sec scroll_margin" id="upcoming-events">
                        <div class="div">
                            <div class="heading">Upcoming Events</div>
                            <p>These nature-based activities will be updated periodically:</p>
                            <div class="listingsec">
                                <!-- <div class="subheading"> Research Objectives </div>
                                <p>Our monitoring program seeks to:</p> -->
                                 <ul>
                                    <li><b>Nature Trails</b>: Conducted on one Saturday every month</li>
                                    <li><b>SIU Nature & Wildlife Photography Competition 2026</b>: To be announced</li>
                                    <li><b>World Environment Day Events</b>: To be announced</li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <section class="siu_biodiversity_sec scroll_margin" id="siu-biodiversity-page">
                        <div class="heading">SIU Biodiversity Page</div>
                        <p>Explore the SIU Biodiversity Page to learn about previous nature-focused activities, conservation initiatives, and campus biodiversity efforts.</p>
                        <a target="_blank" href="https://www.siu.edu.in/student-support/biodiversity">https://www.siu.edu.in/student-support/biodiversity</a>
                    </section>

                    <section class="resources_section listingsec scroll_margin" id="resources">
                        <div class="heading">Resources</div>
                        <p>The following curated resources offer reliable information on India’s biodiversity, wildlife, and environmental issues. They are useful for students, researchers, and nature enthusiasts seeking deeper insights into species, ecosystems, and conservation challenges.</p>
                        <p><b>For learning about India’s biodiversity</b> :  Explore India’s wildlife, habitats, and conservation issues</p>
                        <p><b>Environmental news and analysis</b> :  Explore India’s wildlife, habitats, and conservation issues</p>
                        <p><b>Down To Earth</b> – Latest updates on environment and science in India and South Asia <a target="_blank" href="https://www.downtoearth.org.in/">https://www.downtoearth.org.in/</a></p>
                        <p><b>Mongabay India</b> - Coverage on ecological challenges and sustainability trends <a target="_blank" href="https://news.mongabay.com/">https://news.mongabay.com/</a></p>
                    </section>

                    <section class="biodiversity_gallery scroll_margin" id="biodiversity-photos">
                        <div class="heading">Biodiversity Photos</div>
                        <div class="biodiversity_photos">
                            <div class="gallery_main_box_inner">
                                <div class="gallery_box">
                                    <a href="{{ asset('assets/images/biodiversity/flagship1.webp') }}" data-fancybox="gallerytabbing1" data-caption="Bonelli’s Eagle (Aquila fasciata)">
                                        <img src="{{ asset('assets/images/biodiversity/flagship1.webp') }}" alt="Bonelli’s Eagle" />
                                    </a>
                                    <h6>Bonelli’s Eagle (Aquila fasciata)</h6>
                                    <div class="photocredit">Photo Credits: Avishkar Munje</div>                                    
                                </div>
                                <div class="gallery_box">
                                    <a href="{{ asset('assets/images/biodiversity/overview1.webp') }}" data-fancybox="gallerytabbing1" data-caption="Hill Turmeric (Curcuma pseudomontana)">
                                        <img src="{{ asset('assets/images/biodiversity/overview1.webp') }}" alt="Hill Turmeric" />
                                    </a>
                                    <h6>Hill Turmeric (Curcuma pseudomontana)</h6>
                                    <div class="photocredit">Photo Credits: Dr. Prakash Rao</div>
                                </div>
                                <div class="gallery_box">
                                    <a
                                        href="{{ asset('assets/images/biodiversity/campus-biodiversity1.webp') }}" data-fancybox="gallerytabbing1" data-caption="Wandering Glider (Pantala flavescens)">
                                        <img src="{{ asset('assets/images/biodiversity/campus-biodiversity1.webp') }}" alt="Wandering Glider"/>
                                    </a>
                                    <h6>Wandering Glider (Pantala flavescens)</h6>
                                    <div class="photocredit">Photo Credits: Avishkar Munje</div>
                                </div>
                                <div class="gallery_box">
                                    <a
                                        href="{{ asset('assets/images/biodiversity/overview3.webp') }}" data-fancybox="gallerytabbing1" data-caption="Gulmohar Blossom (Delonix regia)" >
                                        <img src="{{ asset('assets/images/biodiversity/overview3.webp') }}" alt="Gulmohar Blossom " />
                                    </a>
                                    <h6>Gulmohar Blossom  (Delonix regia)</h6>
                                    <div class="photocredit">Photo Credits: Avishkar Munje</div>
                                </div>
                                <div class="gallery_box">
                                    <a
                                        href="{{ asset('assets/images/biodiversity/bhandhara.webp') }}" data-fancybox="gallerytabbing1" data-caption="The bandhara (check dam) at the SIU Lavale campus" >
                                        <img src="{{ asset('assets/images/biodiversity/bhandhara.webp') }}" alt="The bandhara" />
                                    </a>
                                    <h6>The bandhara (check dam) at the SIU Lavale campus</h6>
                                    <div class="photocredit">Photo Credits: Avishkar Munje</div>
                                </div>
                                <div class="gallery_box">
                                    <a
                                        href="{{ asset('assets/images/biodiversity/overview2.webp') }}" data-fancybox="gallerytabbing1" data-caption="Ashoka Tree Blossom  (Saraca asoca)" >
                                        <img src="{{ asset('assets/images/biodiversity/overview2.webp') }}" alt="Ashoka Tree Blossom  (Saraca asoca)" />
                                    </a>
                                    <h6>Ashoka Tree Blossom  (Saraca asoca)</h6>
                                    <div class="photocredit">Photo Credits: Avishkar Munje</div>
                                </div>
                                <div class="gallery_box">
                                    <a
                                        href="{{ asset('assets/images/biodiversity/hilltop.webp') }}" data-fancybox="gallerytabbing1" data-caption="Plateau ecosystem at SIU Hilltop" >
                                        <img src="{{ asset('assets/images/biodiversity/hilltop.webp') }}" alt="Plateau ecosystem at SIU Hilltop" />
                                    </a>
                                    <h6>Plateau ecosystem at SIU Hilltop</h6>
                                    <div class="photocredit">Photo Credits: Avishkar Munje</div>
                                </div>
                                <div class="gallery_box">
                                    <a
                                        href="{{ asset('assets/images/biodiversity/Devrai.webp') }}" data-fancybox="gallerytabbing1" data-caption="Devrai - protected forest at SIU Hilltop" >
                                        <img src="{{ asset('assets/images/biodiversity/Devrai.webp') }}" alt="Devrai - protected forest at SIU Hilltop" />
                                    </a>
                                    <h6>Devrai - protected forest at SIU Hilltop</h6>
                                    <div class="photocredit">Photo Credits: Avishkar Munje</div>
                                </div>
                            </div>
                        </div>
                    </section>  

                    <!-- Other Sections -->
                    <!-- <section id="objectives"><h3>Objectives</h3></section>
                    <section id="research"><h3>Research & Studies</h3></section>
                    <section id="campus"><h3>Campus Biodiversity</h3></section>
                    <section id="gallery"><h3>Gallery</h3></section>
                    <section id="contact"><h3>Contact</h3></section> -->
                </div>
            </div>
        </div>
    </div>



    
    





</main>
@include('footer')

