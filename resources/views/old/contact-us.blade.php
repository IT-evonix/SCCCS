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
                        <h1>Contact Us</h1>
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
                <li>Contact Us</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->

    <div class="contactus_main_box">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading text-center">
                        Contact us
                    </div>
                </div>
            </div>
            <div class="contactus_inner">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact_left">
                            <div class="contact_content">
                                <div class="contact_address_box">
                                    <div class="address_icon"><img src="{{ asset('assets/images/pin.webp') }}" alt=""></div>
                                    <div class="address_text">
                                        Symbiosis Centre for Climate Change and Sustainability (SCCCS), 6th Floor, Symbiosis Institute of Technology Building, Lavale Base Hill Campus, Symbiosis International (Deemed) University, Lavale, Pune - 412115

                                    </div>
                                </div>
                                <div class="contact_address_box contact_info">
                                    <div class="Coordinator_text">For General Enquiries, Please write to the Senior Coordinator Ms.Rucharani Kale</div>
                                    <hr>
                                    <a href="mailto:rucharani.kale@siu.edu.in">
                                        <span><img src="{{ asset('assets/images/mail.webp') }}" alt=""></span>rucharani.kale@siu.edu.in</span>
                                    </a>
                                    <hr>
                                    <div class="Outreach_box">
                                        <p class="w-100 m-0">Outreach & Activities: </p>
                                        <a href="mailto:outreach.scccs@siu.edu.in">
                                            <span><img src="{{ asset('assets/images/mail.webp') }}" alt=""></span>
                                            outreach.scccs@siu.edu.in
                                        </a>
                                    </div>
                                </div>
                                <div class="contact_address_box">
                                    <a href="tel:(+91) 20 6693 6942"><span><img src="{{ asset('assets/images/phone.webp') }}" alt=""></span><span>(+91) 20 6693 6942</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact_right">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.725872532134!2d73.72523507380129!3d18.54128586854389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bd3c15dc1273%3A0x4ead298759fa8884!2sSymbiosis%20Centre%20for%20Climate%20Change%20and%20Sustainability%20(SCCCS)!5e0!3m2!1sen!2sin!4v1761820294220!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div> 
            </div>            
        </div>
    </div>



</main>
@include('footer')

