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
                        <h1>Adarsh Kumar Singh</h1>
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
                <li>Adarsh Kumar Singh</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->

    <!-- About Start -->
    <div class="leadership_section">
        <div class="container">
           <div class="leadership_inner">
                <div class="head_img">
                    <img src="{{ asset('assets/images/people/adarsh-kumar-singh.webp') }}" alt="">
                    <div class="broad_areas_box">
                        <h6>Broad Areas</h6>
                        <ul>
                            <li>Denitrifying Bacteria</li>
                            <li>Denitrification</li>
                            <li>Methanogens</li>
                            <li>Nitrous oxide</li>
                        </ul>
                    </div>
                </div>
                <div class="profile_content">
                    <div class="profile_intro">
                        <div class="div">
                            <div class="profile_heading heading">
                                Adarsh Kumar Singh
                            </div>
                            <div class="profile_position">PhD Scholar</div>
                        </div>
                        <div class="emailbox">
                            <a href="mailto:phdgrad.adarsh.singh@siu.edu.in">phdgrad.adarsh.singh@siu.edu.in</a>
                        </div>
                    </div>
                    <p>Adarsh, a PhD scholar at the Centre, is a microbiologist with a Bachelor's and Master's degree in Microbiology from Dr. Ram Manohar Lohia Awadh University, Faizabad, Ayodhya. He is currently a PhD scholar (2023 batch) under the supervision of Dr. Om Prakash Sharma. His research focuses on understanding the role of denitrifying bacteria in wastewater treatment plants (WWTPs), particularly the microbial communities responsible for emitting nitrous oxide (N₂O), a highly potent greenhouse gas. In April 2024, he joins the DST-PURSE Project of the Department of Science & Technology, Government of India, to further strengthen his work in environmental microbiology.</p>
                    <p>His professional experience includes 1.5 years at AIIMS Jodhpur as an Application Specialist in Individual Donor Nucleic Acid Testing (ID-NAT), and three years as an Assistant Professor at Sultanpur Institute of Nursing and Paramedical Sciences, where he mentors students in microbiology and healthcare sciences.</p>
                    <p>Beyond his academic and professional engagements, Adarsh enjoys traveling, reading history, playing sports, and physique training.</p>
                </div>
                <div class="socialmedia_box">
                    <a target="_blank" href="https://www.linkedin.com/in/adarsh-kumar-singh-phd/"><img src="{{ asset('assets/images/inner-pages/linkedin.webp') }}" alt=""></a>
                    <a target="_blank" href="https://scholar.google.com/citations?user=fXc71CkAAAAJ&hl=en"><img src="{{ asset('assets/images/inner-pages/scholar-google.webp') }}" alt=""></a>
                    <a target="_blank" href="https://orcid.org/0009-0004-5000-0508"><img src="{{ asset('assets/images/inner-pages/domain.webp') }}" alt=""></a>
                </div>
           </div>
        </div>
    </div>
    <!-- About End -->
    <!-- vision and mission start -->
     
</main>
@include('footer')

