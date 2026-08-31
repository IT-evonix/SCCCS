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
                        <h1>Angela Thomas</h1>
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
                <li>Angela Thomas</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->

    <!-- About Start -->
    <div class="leadership_section">
        <div class="container">
           <div class="leadership_inner">
                <div class="head_img">
                    <img src="{{ asset('assets/images/people/angela-thomas.webp') }}" alt="">
                    <div class="broad_areas_box">
                        <h6>Broad Areas</h6>
                        <ul>
                            <li>Carbon Pricing & Market-Based Climate Policies</li>
                            <li>Environmental Economics</li>
                            <li>Carbon Markets (EU Focus)</li>
                            <li>Climate Policy & Governance</li>
                            <li>Sustainable Business & Policy Analysis</li>
                        </ul>
                    </div>
                </div>
                <div class="profile_content">
                    <div class="profile_intro">
                        <div class="div">
                            <div class="profile_heading heading">
                                Angela Thomas
                            </div>
                            <div class="profile_position">PhD Scholar</div>
                        </div>
                        <div class="emailbox">
                            <a href="mailto:phdgrad.angela.thomas@siu.edu.in">phdgrad.angela.thomas@siu.edu.in</a>
                        </div>
                    </div>
                    <p>With a Master's in Economics, Angela’s work revolves around understanding economic policies and their broader implications. Before beginning her PhD journey, she works as a Consultant at the Economic Research Unit of the Mahratta Chamber of Commerce, Industries and Agriculture, Pune (MCCIA). She currently serves as an Assistant Professor at Symbiosis College of Arts & Commerce in the Departments of Economics and Banking and Finance. Angela’s PhD research under Prof. Dr. Prakash Rao focuses on Carbon Pricing Strategies.</p>
                    <p>Her research evaluates carbon pricing policies as a market-based strategy to mitigate carbon emissions, with a particular focus on the European Union. To deepen this understanding, Angela works as a visiting researcher at the Berlin School of Economics and Law (Hochschule für Wirtschaft und Recht, Berlin) under a DAAD German Academic Exchange Service scholarship in 2022, where she studies the policy dynamics shaping carbon markets. An effective carbon pricing policy mix, she argues, helps internalize the social cost of carbon emissions and promotes sustainable business decisions.</p>
                    <p>Beyond academia, Angela is an avid reader and enjoys theatre and gardening.</p>
                </div>
                <div class="socialmedia_box">
                    <a target="_blank" href="https://www.linkedin.com/in/angela-t-330a2a162/"><img src="{{ asset('assets/images/inner-pages/linkedin.webp') }}" alt=""></a>
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

