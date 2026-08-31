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
                        <h1>Water & Climate Change</h1>
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
                <li>Water & Climate Change</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->

    <div class="areas_of_research_section">
        <!-- Secound box start -->
        <div class="areas_of_research_inner areas_of_research_inner2 greybg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            Water & Climate Change: The Invisible Crisis in Our Treatment Systems
                        </div>
                        <div class="areas_of_research_box areas_of_research_box1">
                            <div class="areas_of_research_left">
                                <div class="subheading">
                                    N₂O emissions from wastewater treatment
                                </div>
                                <p>Wastewater treatment plants are surprisingly significant sources of nitrous oxide (N₂O), a greenhouse gas with a warming potential approximately 300 times greater than that of carbon dioxide. Our research quantifies N₂O emissions from various treatment stages, with a particular focus on biological nitrogen removal processes, where suboptimal conditions—such as fluctuating oxygen levels, temperature variations, or imbalanced nutrient ratios—result in incomplete denitrification. Using continuous gas monitoring systems and microbial community analysis, we correlate emissions with operational parameters to identify opportunities for intervention. This work is crucial because, as India rapidly expands wastewater treatment capacity to meet urban population needs, this essential public health infrastructure could inadvertently undermine national climate goals without proper emission controls. Climate change itself may exacerbate these emissions through rising temperatures that alter microbial metabolism and increased storm events that overwhelm treatment systems. Our findings inform operational optimization strategies—fine-tuning aeration, improving process control, and managing carbon dosing—that can reduce emissions by 30-50% without compromising treatment effectiveness. Additionally, we explore nature-based solutions, such as constructed wetlands, that achieve nitrogen removal with minimal greenhouse gas production.</p>
                            </div>
                            <div class="areas_of_research_right">
                                <div class="areas_of_research_mask"></div>
                            </div>
                        </div>
                        <div class="areas_of_research_box areas_of_research_box2 direction_change">
                            <div class="areas_of_research_left">
                                <div class="subheading">
                                    AMR spreads in water ecosystems
                                </div>
                                <p>Wastewater treatment plants concentrate millions of bacteria in close proximity while simultaneously exposing them to antibiotics from human excretion, hospital discharges, pharmaceutical manufacturing, and agricultural runoff, creating ideal conditions for the horizontal gene transfer of antimicrobial resistance genes. Our research tracks resistance genes throughout the entire water cycle, from influent wastewater to treatment stages, and ultimately to treated effluent discharge into rivers, lakes, and ultimately, irrigation systems and drinking water sources. Using quantitative PCR and metagenomic sequencing, we identified prevalent resistance genes, the bacterial taxa that serve as their reservoirs, and the effectiveness of different treatment processes in removing them. This research is vital because resistance developed in environmental bacteria can be transferred to human pathogens, and climate change significantly complicates this picture. Higher water temperatures accelerate bacterial growth and gene transfer rates, while extreme weather overwhelms treatment systems, releasing poorly treated wastewater. Additionally, drought-induced low flows reduce the dilution of resistant bacteria downstream. Our work informs treatment plant upgrades and highlights the need for source control through hospital wastewater pretreatment and the regulation of the pharmaceutical industry.</p>
                            </div>
                            <div class="areas_of_research_right">
                                <div class="areas_of_research_mask"></div>
                            </div>
                        </div>
                        <div class="areas_of_research_box areas_of_research_box3">
                            <div class="areas_of_research_left">
                                <div class="subheading">
                                    Constructed wetlands for effluent treatment
                                </div>
                                <p>We explore constructed wetlands as nature-based solutions that can achieve effective wastewater treatment while minimizing the greenhouse gas emissions and energy consumption associated with conventional treatment systems. These engineered ecosystems utilize natural processes—such as plant uptake, microbial degradation, and filtration through substrate media—to remove pollutants, nutrients, and pathogens from wastewater. Our research investigates optimal design configurations, plant species selection, hydraulic loading rates, and seasonal performance variations across different climatic conditions. This work is particularly relevant for India's context, where decentralized treatment solutions are needed for smaller communities and peri-urban areas, and where land availability and tropical climate conditions favor wetland systems. We examine how constructed wetlands perform in removing antimicrobial resistance genes, reducing nitrogen loads with minimal N₂O production, and providing co-benefits including habitat creation, carbon sequestration, and aesthetic value. By quantifying treatment efficiency, operational costs, and environmental benefits, we provide evidence for integrating these systems into water infrastructure planning as climate-smart alternatives that protect both water quality and atmospheric composition.</p>
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


