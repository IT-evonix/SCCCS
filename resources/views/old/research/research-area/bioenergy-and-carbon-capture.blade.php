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
                        <h1>Bioenergy & Carbon Capture</h1>
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
                <li>Bioenergy & Carbon Capture</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->

    <div class="areas_of_research_section">
        <!-- Third box start -->
        <div class="areas_of_research_inner areas_of_research_inner3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            Bioenergy & Carbon Capture: Transforming Waste into Climate Solutions
                        </div>
                        <div class="areas_of_research_box areas_of_research_box1">
                            <div class="areas_of_research_left">
                                <div class="subheading">
                                    Hydrogenotrophic methanogens for high-quality biogas
                                </div>
                                <p>At the heart of efficient biogas production lies a complex microbial consortium, and our research focuses on hydrogenotrophic methanogens—remarkable archaea that consume hydrogen and carbon dioxide to produce methane. By enriching these organisms and providing additional hydrogen produced through renewable electrolysis, we can achieve biological methanation where CO₂ in raw biogas is converted to additional methane, increasing methane concentration from typical 50-70% to over 95% directly in the digester. Using molecular techniques including 16S rRNA gene sequencing and isotope tracing, we track methanogen populations and correlate community composition with biogas production rates and quality. This research is crucial because it enables biogas to be directly used in vehicles or natural gas grids without costly purification, making decentralized renewable energy economically viable for rural communities. Additionally, it reduces methane emissions from organic waste while producing nutrient-rich digestate for organic fertilizer. We investigate optimal digester parameters, co-digestion strategies that combine various waste streams, and the integration of hydrogen injection systems, demonstrating how innovations at the microbial level can scale to transform national energy infrastructure and waste management systems.</p>
                            </div>
                            <div class="areas_of_research_right">
                                <div class="areas_of_research_mask"></div>
                            </div>
                        </div>
                        <div class="areas_of_research_box areas_of_research_box2 direction_change">
                            <div class="areas_of_research_left">
                                <div class="subheading">
                                    Renewable energy integration
                                </div>
                                <p>Our research investigates how biogas systems can deliver flexible, dispatchable renewable energy that complements intermittent solar and wind power, while contributing to carbon sequestration and promoting circular economy principles. We investigate integrated systems that convert agricultural residues, municipal organic waste, and industrial biomass materials, which currently contribute to pollution through open burning or landfill disposal, into clean energy. This work is particularly crucial for India, where rapid economic growth generates enormous quantities of waste that could instead be converted into valuable energy resources. We examine how to optimize energy system integration, exploring novel substrates such as lignocellulosic biomass that require pretreatment, and investigating how biogas facilities can be scaled from individual farms to community-level operations serving multiple stakeholders. By improving both quantity and quality of biogas output through microbial optimization while simultaneously addressing waste management challenges, we demonstrate pathways for achieving multiple benefits: reducing greenhouse gas emissions from waste decomposition, displacing fossil fuels with carbon-neutral sources, creating economic value from burdensome materials, and potentially achieving negative emissions through carbon capture integrated with bioenergy production.</p>
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
