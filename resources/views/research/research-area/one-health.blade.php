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
                        <h1>Areas of Research for SCCCS</h1>
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
                <li>One Health</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->

    <div class="areas_of_research_section">
        <!-- First box start -->
        <div class="areas_of_research_inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            One Health: Connecting Environmental, Animal, and Human Wellbeing
                        </div>
                        <div class="areas_of_research_box areas_of_research_box1">
                            <div class="areas_of_research_left">
                                <div class="subheading">
                                    Impact of residual antibiotics and pharmaceuticals on soil, water & food systems
                                </div>
                                <p>Our research traces pharmaceutical residues from hospitals, livestock operations, and human waste as they enter environmental systems through wastewater irrigation, manure application, and improper disposal. Using advanced analytical chemistry and microbial genomics, we investigate how these compounds—regardless of their concentration—persist in soils and accumulate in crops and fodder. This work is critical because it reveals how contaminated soils disrupt microbial diversity, which is essential for plant health, how antibiotics in animal feed alter livestock gut microbiomes and enter the food chain through milk and meat, and how residues in vegetables and dairy expose consumers to chronic, low-dose antibiotics that can compromise the human gut microbiota. Our field studies across various agricultural systems document real-world contamination patterns and seasonal variations, providing evidence for integrated interventions that span antibiotic stewardship, improved wastewater treatment, and agricultural practice reforms to protect the interconnected web of environmental, animal, and human health.</p>
                            </div>
                            <div class="areas_of_research_right">
                                <div class="areas_of_research_mask"></div>
                            </div>
                        </div>
                        <div class="areas_of_research_box areas_of_research_box2 direction_change">
                            <div class="areas_of_research_left">
                                <div class="subheading">
                                    AMR (Antimicrobial Resistance)
                                </div>
                                <p>Antimicrobial resistance represents one of the most urgent global health threats, where environmental, animal, and human health converge dramatically. Our research investigates AMR hotspots—wastewater treatment plants, hospital effluents, agricultural soils, and livestock operations—using metagenomic sequencing to identify antimicrobial resistance genes and the bacteria carrying them. We examine how climate factors such as temperature, humidity, and flooding influence the survival and spread of resistant bacteria in environmental reservoirs. This work is vital because the World Health Organization estimates drug-resistant infections could cause 10 million deaths annually by 2050, potentially exceeding cancer mortality. Our findings reveal how warmer temperatures accelerate bacterial growth and gene transfer, how extreme weather facilitates the spread of contamination, and how climate-stressed environments favor the development of resistant strains. By understanding these climate-AMR linkages, we provide evidence for integrated interventions including antibiotic stewardship in healthcare and agriculture, advanced wastewater treatment technologies, and climate adaptation strategies in water and sanitation infrastructure.</p>
                            </div>
                            <div class="areas_of_research_right">
                                <div class="areas_of_research_mask"></div>
                            </div>
                        </div>
                        <div class="areas_of_research_box areas_of_research_box3">
                            <div class="areas_of_research_left">
                                <div class="subheading">
                                    Climate-linked diseases
                                </div>
                                <p>We investigate how environmental changes are driving the evolution of more dangerous fungal pathogens, particularly Candida auris—a multidrug-resistant yeast that has spread globally since 2009. Our research investigates the hypothesis that climate warming may be selecting for fungi capable of thriving at human body temperature, thereby breaching what has historically been a crucial thermal defense barrier. We subject C. auris to temperature stress and elevated salinity conditions, documenting changes in pathogenicity, biofilm formation, and susceptibility to antifungal drugs. Simultaneously, we investigate how rising temperatures, increased UV radiation, and urban pollution disrupt the skin microbiome—the protective community of microorganisms that defends against pathogens and maintains skin health. This research is critical because it reveals a dual threat: warming environments producing more virulent fungal pathogens while compromising human microbial defenses. India's diverse climatic zones provide natural laboratories for comparing skin microbiome composition across temperature and pollution gradients, demonstrating how environmental conditions affecting fungi in ecosystems may ultimately determine the risks of hospital outbreaks.</p>
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