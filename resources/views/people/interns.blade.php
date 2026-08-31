
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
<!--              <div class="intern-list">-->
                <!-- Intern Item -->
<!--                <div class="intern-item">-->
<!--                    <div class="interns_profile">-->
<!--                        <img class="img-fluid" src="{{ asset('assets/images/people/Tanvi-Dube.webp') }}" alt="Intern Image">-->
<!--                    </div>-->
<!--                    <div class="interns_data">-->
<!--                        <h3 class="intern-name">Tanvi Dube ( June - July 2026)</h3>-->
<!--                        <p class="intern-role">-->
<!--Summer Research Intern-->
<!--                        </p>-->
<!--                        <p class="intern-desc">-->
<!--Tanvi is currently pursuing a Bachelor of Technology (B.Tech.) in Bioengineering at the MIT School of Bioengineering, Pune. Her academic interests span biomedical engineering, environmental biotechnology, microbiology, and laboratory research.As part of her internship, she is working on optimizing Total Viable Count (TVC) recovery from sludge samples by comparing shaking, vortexing, and vortex-sonication techniques under different time and frequency combinations. Conducted under the guidance of Dr. Om Prakash Sharma, her research aims to improve microbial recovery methods for environmental and biotechnological applications. Beyond academics and research, Tanvi enjoys reading, travelling, and exploring emerging technologies.-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
                <!-- Duplicate for more interns -->
<!--            </div>-->
<!--              <div class="intern-list">-->
                <!-- Intern Item -->
<!--                <div class="intern-item">-->
<!--                    <div class="interns_profile">-->
<!--                        <img class="img-fluid" src="{{ asset('assets/images/people/Serena-William-Annam.webp') }}" alt="Intern Image">-->
<!--                    </div>-->
<!--                    <div class="interns_data">-->
<!--                        <h3 class="intern-name">Serena Wiiliam Annam ( June - July 2026)</h3>-->
<!--                        <p class="intern-role">-->
<!--Summer Research Intern-->
<!--                        </p>-->
<!--                        <p class="intern-desc">-->
<!--Serena William Annam is currently pursuing a Bachelor of Technology (B.Tech.) in Bioengineering at the MIT School of Bioengineering, Pune. Her academic interests include molecular biology, microbiology, environmental biotechnology, and laboratory research. During her internship, Serena is working on optimizing Total Viable Count (TVC) recovery from sludge samples by evaluating shaking, vortexing, and vortex-sonication techniques across different time and frequency combinations. Conducted under the guidance of Dr. Om Prakash Sharma, this research aims to identify the most effective method for maximizing microbial recovery. She is also involved in a research project investigating KNO₂ and KNO₃ levels in wastewater samples under the guidance of Dr. Sumailah Ishtiyaq. Beyond her research, Serena enjoys singing, swimming, working out at the gym, and engaging in creative arts. She is passionate about applying biotechnology to develop practical solutions for real-world environmental challenges.-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
                <!-- Duplicate for more interns -->
<!--            </div>-->
            <div class="intern-list">
                <!-- Intern Item -->
                <div class="intern-item">
                    <div class="interns_profile">
                        <img class="img-fluid" src="{{ asset('assets/images/people/Ninad.webp') }}" alt="Intern Image">
                    </div>
                    <div class="interns_data">
                        <h3 class="intern-name">Ninad Kamble (July 2026 - Dec 2026)</h3>
                        <p class="intern-role">
Master's dissertation Research Intern  
                        </p>
                        <p class="intern-desc">
Ninad Kamble is currently pursuing an M.Sc. in Microbiology at PES Modern College of Arts, Science and Commerce, Ganeshkhind, Pune, affiliated with Savitribai Phule Pune University. His academic interests span microbiology, molecular biology, plant–microbe interactions, and applied microbiology, complemented by hands-on experience in microbiological and molecular laboratory techniques. His dissertation focuses on Plant Growth-Promoting Rhizobacteria (PGPR) and their role in enhancing plant growth and green fodder productivity through sustainable, eco-friendly microbial interventions, with an emphasis on beneficial bacterial traits and their agricultural applications as biofertilizers and biostimulants. Beyond academics, he enjoys watching science fiction films, exploring natural destinations, and listening to music.  
                        </p>
                    </div>
                </div>
                <!-- Duplicate for more interns -->
            </div>
            
            
            <!--<div class="intern-list">-->
                <!-- Intern Item -->
                <!--<div class="intern-item">-->
                <!--    <div class="interns_profile">-->
                <!--        <img class="img-fluid" src="{{ asset('assets/images/people/freya-patel.webp') }}" alt="Intern Image">-->
                <!--    </div>-->
                <!--    <div class="interns_data">-->
                <!--        <h3 class="intern-name">Freya Patel</h3>-->
                <!--        <p class="intern-role">-->
                <!--            MSc in Biotechnology at MIT-WPU Department of Biosciences & Technology, MIT World Peace University.-->
                <!--        </p>-->
                <!--        <p class="intern-desc">-->
                <!--            Currently pursuing an MSc in Biotechnology at MIT-WPU Department of Biosciences & Technology, MIT World Peace University, she has strong interests in molecular biology, microbiology, genetic engineering, and cancer biology, along with prior research experience working with enzymes.As part of her dissertation, she will conduct Carbon Capture and Utilization experiments in agricultural systems under the guidance of Dr. Om Prakash Sharma (Jan–May 2026).  Beyond the lab, she enjoys dancing, reading, and artistic expression, and has also completed a charcoal painting course. -->
                <!--        </p>-->
                <!--    </div>-->
                <!--</div>-->
                <!-- Duplicate for more interns -->
            <!--</div>-->
            <!--<div class="intern-list">-->
                <!-- Intern Item -->
            <!--    <div class="intern-item">-->
            <!--        <div class="interns_profile">-->
            <!--            <img class="img-fluid" src="{{ asset('assets/images/people/anushka-awad.webp') }}" alt="Intern Image">-->
            <!--        </div>-->
            <!--        <div class="interns_data">-->
            <!--            <h3 class="intern-name">Anushka Awad</h3>-->
            <!--            <p class="intern-role">-->
            <!--                 B.Tech in Bioengineering at MIT ADTU School of Bioengineering Sciences & Research.-->
            <!--            </p>-->
            <!--            <p class="intern-desc">-->
            <!--            Currently pursuing a B.Tech in Bioengineering at MIT ADTU School of Bioengineering Sciences & Research, she brings strong interests in biomedical technologies and environmental biotechnology, with a focus on developing science-based solutions for healthcare and environmental challenges. At SCCCS, she will conduct Carbon Capture and Utilization experiments in agricultural systems under the guidance of Dr. Om Prakash Sharma (Jan–May 2026). Outside academics, she enjoys reading about astronomy, spending time outdoors, watching sunsets, and collecting seashells. -->
            <!--            </p>-->
            <!--        </div>-->
            <!--    </div>-->
                <!-- Duplicate for more interns -->
            <!--</div>-->
            
            
             <!-- <h1 class="heading">Our Interns</h1> -->

            
        </div>
    </section>
</main>
@include('footer')

