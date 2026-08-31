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
                        <h1>Biodiversity & Waste Management</h1>
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
                <li>Research</li> /
                <li>Areas of Research for SCCCS</li> /
                <li>Biodiversity & Waste Management</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->

    <div class="areas_of_research_section">
        <!-- four box start -->
        <div class="areas_of_research_inner areas_of_research_inner4 greybg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            Biodiversity Conservation
                        </div>
                      
                        <div class="areas_of_research_box areas_of_research_box2 direction_change">
                            <div class="areas_of_research_left">
                                <div class="subheading">
                                    Conservation initiatives on campus
                                </div>
                                <p>The 350-acre Symbiosis Lavale campus offers invaluable opportunities for biodiversity monitoring and conservation, serving multiple purposes: generating scientific knowledge about local ecosystems, creating living laboratories for hands-on ecological research, contributing to regional conservation through habitat connectivity, and providing ecosystem services, including carbon sequestration and groundwater recharge. Our systematic monitoring program documents plant species richness through quadrat sampling, bird populations through point counts identifying resident and migratory species, small mammals through camera trapping, butterfly and pollinator communities through seasonal observation walks, and amphibians and reptiles through visual surveys. We develop comprehensive species inventories, establishing baseline data to measure future changes and identify climate-sensitive species. Camera traps have revealed surprising biodiversity, including threatened species that utilize the campus as habitat corridors, highlighting the conservation value of protected spaces within modified landscapes. Seasonal monitoring tracks phenological patterns—such as flowering timing, bird breeding, and insect emergence—which are shifting in response to climate change and serve as sensitive ecological indicators. Student involvement through field courses and citizen science programs trains future conservation professionals while fostering campus-wide environmental consciousness, demonstrating that institutional spaces can actively support biodiversity while serving educational functions and delivering tangible climate benefits through carbon sequestration.</p>
                            </div>
                            <div class="areas_of_research_right">
                                <div class="areas_of_research_mask"></div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>         
    </div>
</main>
@include('footer')

