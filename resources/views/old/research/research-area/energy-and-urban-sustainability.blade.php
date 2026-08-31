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
                        <h1>Energy and Urban Sustainability</h1>
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
                <li>Energy and Urban Sustainability</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->

    <div class="areas_of_research_section">
        <!-- six box start -->
        <div class="areas_of_research_inner areas_of_research_inner6 greybg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            Energy and Urban Sustainability
                        </div>
                        <div class="areas_of_research_box areas_of_research_box1">
                            <div class="areas_of_research_left">
                                <div class="subheading">
                                    Low Carbon Smart Cities
                                </div>
                                <p>Cities account for nearly 70% of global carbon emissions, while housing more than half the world's population, making urban sustainability a central component of climate solutions. Our research investigates how expanding cities can meet increasing energy demands while mitigating environmental pressures and enhancing liveability. We explore sustainable mobility through studies on low-carbon transport alternatives, behavioral factors influencing the adoption of public or shared transportation, and policy designs that advance walkable, breathable cities. We analyze pathways for accelerating rooftop solar deployment, electric vehicle infrastructure, and decentralized energy systems that enable resilience during climatic shocks. Our work is especially relevant for India and the Global South, where infrastructure expansion, rural-urban migration, and development needs must align with climate goals. We conduct climate risk assessments for industries, helping businesses evaluate vulnerabilities and operational exposures associated with extreme weather events and regulatory shifts. This research theme aims to inform science-based policy design, foster industry partnerships, and support data-driven planning to lower emissions, enhance urban well-being, and improve resource security.</p>
                            </div>
                            <div class="areas_of_research_right">
                                <div class="areas_of_research_mask"></div>
                            </div>
                        </div>
                        <div class="areas_of_research_box areas_of_research_box2 direction_change">
                            <div class="areas_of_research_left">
                                <div class="subheading">
                                    Renewable energy management
                                </div>
                                <p>Our research examines how the deployment of clean energy can accelerate sustainable urban transitions while maintaining grid stability and economic viability. We analyze pathways for integrating distributed renewable energy systems, including rooftop solar installations, community energy projects, and hybrid storage solutions that address the intermittency challenges of solar and wind power. We examine policy mechanisms—such as feed-in tariffs, net metering frameworks, and renewable energy certificates—that incentivize adoption while ensuring equitable access across income groups. This work is crucial as India pursues ambitious renewable energy targets while managing the rapid growth in electricity demand resulting from urbanization and economic development. We explore innovative financing models, including green bonds, sustainability-linked loans, and public-private partnerships that mobilize capital for clean energy infrastructure. Our research also addresses social dimensions, investigating how renewable energy transitions can be designed to benefit marginalized communities rather than exacerbating existing inequalities. By studying successful case examples and analyzing barriers to adoption, we provide actionable insights for accelerating the shift toward clean energy systems that simultaneously advance climate goals, energy security, and inclusive development.</p>
                            </div>
                            <div class="areas_of_research_right">
                                <div class="areas_of_research_mask"></div>
                            </div>
                        </div>
                        <div class="areas_of_research_box areas_of_research_box3">
                            <div class="areas_of_research_left">
                                <div class="subheading">
                                    Climate finance and policy
                                </div>
                                <p>We examine how financial mechanisms and policy frameworks can facilitate technological modernization and promote energy-efficient decision-making within urban systems. Our research examines Environmental, Social, and Governance (ESG) reporting requirements, analyzing how corporate climate disclosures influence investment decisions and operational strategies. We investigate green bonds and sustainability-linked incentives, tracking how these instruments mobilize capital toward the adoption of low-carbon infrastructure and technology. This work is essential because achieving urban climate goals requires massive capital flows redirected from carbon-intensive to sustainable investments, necessitating clear policy signals and credible accountability mechanisms. We analyze carbon pricing mechanisms, emissions trading systems, and regulatory frameworks that create economic incentives for emissions reductions. Our research explores how climate finance can be structured to support just transitions, ensuring that decarbonization pathways don't disproportionately burden vulnerable populations. We examine barriers to accessing climate finance in developing country contexts and identify policy innovations that can unlock greater investment. By advancing understanding of how financial and policy instruments interact with technological and behavioral change, we contribute to designing comprehensive approaches that align economic incentives with climate imperatives.</p>
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

