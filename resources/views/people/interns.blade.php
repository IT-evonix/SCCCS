
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
                        <h1>Interns</h1>
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
                <li>Interns</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->
    <section class="interns-section">
        <div class="container">
            <!-- <h1 class="heading">Our Interns</h1> -->
            <div class="intern-list">
                <!-- Intern Item -->
                <div class="intern-item">
                    <div class="interns_profile">
                        <img class="img-fluid" src="{{ asset('assets/images/people/freya-patel.webp') }}" alt="Intern Image">
                    </div>
                    <div class="interns_data">
                        <h3 class="intern-name">Freya Patel</h3>
                        <p class="intern-role">
                            MSc in Biotechnology at MIT-WPU Department of Biosciences & Technology, MIT World Peace University.
                        </p>
                        <p class="intern-desc">
                            Currently pursuing an MSc in Biotechnology at MIT-WPU Department of Biosciences & Technology, MIT World Peace University, she has strong interests in molecular biology, microbiology, genetic engineering, and cancer biology, along with prior research experience working with enzymes.As part of her dissertation, she will conduct Carbon Capture and Utilization experiments in agricultural systems under the guidance of Dr. Om Prakash Sharma (Jan–May 2026).  Beyond the lab, she enjoys dancing, reading, and artistic expression, and has also completed a charcoal painting course. 
                        </p>
                    </div>
                </div>
                <!-- Duplicate for more interns -->
            </div>
            <div class="intern-list">
                <!-- Intern Item -->
                <div class="intern-item">
                    <div class="interns_profile">
                        <img class="img-fluid" src="{{ asset('assets/images/people/anushka-awad.webp') }}" alt="Intern Image">
                    </div>
                    <div class="interns_data">
                        <h3 class="intern-name">Anushka Awad</h3>
                        <p class="intern-role">
                             B.Tech in Bioengineering at MIT ADTU School of Bioengineering Sciences & Research.
                        </p>
                        <p class="intern-desc">
                        Currently pursuing a B.Tech in Bioengineering at MIT ADTU School of Bioengineering Sciences & Research, she brings strong interests in biomedical technologies and environmental biotechnology, with a focus on developing science-based solutions for healthcare and environmental challenges. At SCCCS, she will conduct Carbon Capture and Utilization experiments in agricultural systems under the guidance of Dr. Om Prakash Sharma (Jan–May 2026). Outside academics, she enjoys reading about astronomy, spending time outdoors, watching sunsets, and collecting seashells. 
                        </p>
                    </div>
                </div>
                <!-- Duplicate for more interns -->
            </div>
            
        </div>
    </section>
</main>
@include('footer')

