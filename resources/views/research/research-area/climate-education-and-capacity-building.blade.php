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
                        <h1>Climate Education and Capacity Building</h1>
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
                <li>Climate Education and Capacity Building</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->

    <div class="areas_of_research_section">
         <!-- eight box start -->
        <div class="areas_of_research_inner areas_of_research_inner8 greybg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            Climate Education and Capacity Building
                        </div>
                        <div class="areas_of_research_box areas_of_research_box1">
                            <div class="areas_of_research_left">
                                <div class="subheading">
                                    Youth Climate and Biodiversity Awareness
                                </div>
                                <p>Climate solutions require informed communities, skilled practitioners, and empowered youth capable of engaging with complex environmental challenges. Our programs foster climate literacy through experiential learning that combines scientific understanding with practical skills. We design citizen science initiatives that enable public participation in biodiversity monitoring, pollution mapping, and behavioral change campaigns—approaches that foster ownership rather than passive awareness. Our guided nature trails serve as experiential classrooms for ecological understanding, mental well-being, and scientific observation, connecting abstract concepts to tangible experiences. We develop curricula materials, conduct school and community workshops, and create youth leadership programs that build capacity for environmental stewardship. This work is essential because educational systems often lack climate-informed curricula despite climate literacy being critical for resilience and democratic decision-making. Our approach emphasizes the multiplier effect—one trained educator or engaged student influences many others, rippling out to impact policy, culture, and innovation. We investigate the learning models that foster climate agency and how digital tools can democratize sustainability knowledge, treating education as both an outcome and a research frontier where we explore effective pedagogies for cultivating environmental consciousness.</p>
                            </div>
                            <div class="areas_of_research_right">
                                <div class="areas_of_research_mask"></div>
                            </div>
                        </div>
                        <div class="areas_of_research_box areas_of_research_box2 direction_change">
                            <div class="areas_of_research_left">
                                <div class="subheading">
                                    Training sessions/workshops and consulting
                                </div>
                                <p>We deliver capacity-building programs on the Circular Economy where students, professionals, and community stakeholders learn about material flows, waste reduction, reuse strategies, and regenerative systems that minimize resource extraction and waste generation. Our workshops provide practical skills in conducting environmental assessments, implementing sustainability initiatives, and integrating climate considerations into decision-making across sectors. We partner with international universities to conduct joint workshops that create dialogue spaces on climate adaptation, emerging technologies, justice frameworks, and sustainability innovations, helping young researchers develop global perspectives while grounding their knowledge in local realities. Our consulting services provide organizations with evidence-based expertise to enhance environmental performance, comply with regulations, and develop effective sustainability strategies. This work is significant because it bridges the gap between research and practice, requiring intermediaries who translate scientific findings into actionable guidance tailored to specific contexts. We document which capacity-building approaches prove most effective, how participants apply the concepts they have learned in their professional contexts, and what barriers limit the translation of knowledge into action. By merging learning with action and treating communities as co-researchers rather than passive recipients, we cultivate climate-aware societies capable of informed choices and sustained leadership.</p>
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