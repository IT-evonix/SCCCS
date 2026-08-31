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
                        <h1>Sudha Balakrishnan</h1>
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
                <li>People</li> /
                <li>Sudha Balakrishnan</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->

    <!-- About Start -->
    <div class="leadership_section">
        <div class="container">
           <div class="leadership_inner">
                <div class="head_img">
                    <img src="{{ asset('assets/images/people/sudha-balakrishnan.webp') }}" alt="">
                    <div class="broad_areas_box">
                        <h6>Broad Areas</h6>
                        <ul>
                            <li>Climate Finance & Green Finance</li>
                            <li>Central Banking & Climate Risk</li>
                            <li>Sustainable Financial Systems</li>
                            <li>Climate-Related Stress Testing & Policy</li>
                            <li>Finance–Sustainability Governance</li>
                        </ul>
                    </div>
                </div>
                <div class="profile_content">
                    <div class="profile_intro">
                        <div class="div">
                            <div class="profile_heading heading">
                                Sudha Balakrishnan
                            </div>
                            <div class="profile_position">PhD Scholar</div>
                        </div>
                        <div class="emailbox">
                            <a href="mailto:phdgrad.sudha.balakrishnan@siu.edu.in">phdgrad.sudha.balakrishnan@siu.edu.in</a>
                        </div>
                    </div>
                    <p>A senior PhD scholar, a senior PhD scholar, serves as the Chief Financial Officer (CFO) of the Reserve Bank of India (RBI).</p>
                    <p>Ms. Sudha Balakrishnan stands as a trailblazer in the financial sector, making history as the first Chief Financial Officer and Executive Director of the Reserve Bank of India (RBI). A distinguished finance professional, she is a member of several premier institutions, including the Institute of Chartered Accountants of India, the Institute of Company Secretaries of India, the Institute of Cost Accountants of India, and the Indian Institute of Banking and Finance. With over three decades of multifaceted experience across diverse sectors, she brings a unique blend of technical expertise, leadership, and commitment to public service. Her credentials also include a qualification in Green and Sustainable Finance from The Chartered Banker Institute in the United Kingdom, underscoring her dedication to aligning finance with sustainability goals.</p>
                    <p>Recognized as the Financial Leader of the Year at the Economic Times ETPrime Women Leadership Awards 2021, Ms. Balakrishnan exemplifies resilience and balance, seamlessly integrating her roles as a professional and a homemaker.</p>
                    <p>Driven by a deep-rooted passion for finance and its evolving role in global challenges, she is presently pursuing her PhD under Prof. Dr. Prakash Rao to explore the critical nexus between climate change and central banking. Her research focuses on the intersection of finance, sustainability, and policy, with particular emphasis on the role of central banks in addressing climate-related risks. She is motivated by the urgent need for financial systems to adapt to climate risks and to support the transition toward a sustainable economy.</p>
                    <p>Through her doctoral work, she aims to examine how central banks can implement and promote green finance initiatives, conduct climate-related stress testing, and influence policy decisions that enhance economic resilience. Her research seeks to offer actionable insights into how financial institutions can not only mitigate the impacts of climate change but also serve as catalysts for sustainable development. By developing a framework for climate-resilient financial systems, her work aspires to contribute to both academic discourse and practical policy-making in the rapidly evolving domain of climate finance.</p>
                </div>
                <div class="socialmedia_box">
                    <a target="_blank" href="https://www.linkedin.com/in/sudha-balakrishnan-553189373/"><img src="{{ asset('assets/images/inner-pages/linkedin.webp') }}" alt=""></a>
                    <a target="_blank" href="#"><img src="{{ asset('assets/images/inner-pages/scholar-google.webp') }}" alt=""></a>
                    <a target="_blank" href="#"><img src="{{ asset('assets/images/inner-pages/domain.webp') }}" alt=""></a>
                </div>
           </div>
        </div>
    </div>
    <!-- About End -->
    <!-- vision and mission start -->
     
</main>
@include('footer')

