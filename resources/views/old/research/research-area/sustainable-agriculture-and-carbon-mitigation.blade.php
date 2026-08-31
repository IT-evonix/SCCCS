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
                        <h1>Sustainable Agriculture & Carbon Mitigation</h1>
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
                <li>Sustainable Agriculture & Carbon Mitigation</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->
    <div class="areas_of_research_section">
         <!-- five box start -->
        <div class="areas_of_research_inner areas_of_research_inner5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            Sustainable Agriculture & Carbon Mitigation: Reimagining Food Production for Climate Solutions
                        </div>
                        <div class="areas_of_research_box areas_of_research_box1">
                            <div class="areas_of_research_left">
                                <div class="subheading">
                                    Methane mitigation in livestock and paddies
                                </div>
                                <p>Enteric fermentation in ruminant animals produces approximately 100 million tonnes of methane annually in India, accounting for roughly 48% of national methane emissions. Our research focuses on innovative biological interventions centered on methanotrophs—bacteria that utilize methane as their primary energy source. We investigate methanotroph-enriched livestock feed where these bacteria are incorporated into formulations to oxidize methane in the rumen before it's belched while simultaneously providing high-quality protein to animals. Laboratory studies examine which methanotroph species survive rumen conditions and reduce emissions without affecting digestive efficiency or animal health. We investigate whether stable rumen microbiome populations can be established to achieve lasting emission reductions. Parallel research investigates dietary modifications with high-quality forages, feed additives such as seaweed containing compounds that inhibit methanogenic archaea, and probiotics, thereby shifting fermentation toward hydrogen-consuming pathways. Field trials with dairy farmers measure real-world methane reductions, monitor milk production to ensure that interventions don't compromise productivity, and calculate cost-benefit ratios to assess economic viability. For rice paddies—another major source of methane emissions—we explore the introduction of methanotrophs into soils to intercept emissions before atmospheric release, investigating application methods, optimal timing, and ecological interactions with native microbes.</p>
                            </div>
                            <div class="areas_of_research_right">
                                <div class="areas_of_research_mask"></div>
                            </div>
                        </div>
                        <div class="areas_of_research_box areas_of_research_box2 direction_change">
                            <div class="areas_of_research_left">
                                <div class="subheading">
                                    Alternative approaches: Biochar
                                </div>
                                <p>Biochar application presents a powerful pathway for transforming agriculture into a climate solution while enhancing soil health and crop productivity. Produced through pyrolysis—heating organic biomass in oxygen-limited conditions—biochar converts approximately 50% of biomass carbon into highly stable structures that resist decomposition for centuries, effectively locking carbon away rather than releasing it through normal decomposition or field burning. Our research investigates biochar derived from various feedstocks, including rice husks, wheat straw, and livestock manure, under different pyrolysis conditions to understand how production parameters affect properties such as surface area, nutrient content, and carbon stability. Field trials across various soil types and cropping systems have revealed that biochar significantly improves water retention in degraded soils, enhances nutrient retention, reduces fertilizer leaching, improves soil structure, provides habitat for beneficial microorganisms, and often increases crop yields by 10-30%. We track the carbon sequestration rate, suggesting 2-5 tonnes CO₂ equivalent per hectare annually, while monitoring the effects on nitrous oxide and methane emissions from soils, with evidence of 20-50% N₂O reductions. Economic analysis examines business models, including mobile pyrolysis units and carbon credit mechanisms that compensate farmers for verified sequestration, demonstrating that climate action and food security can advance together.</p>
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

