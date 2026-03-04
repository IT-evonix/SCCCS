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
                        <h1>Institutional Partners</h1>
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
                <li>Collaborators</li> /
                <li>Institutional Partners</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->
    <div class="gallery_main_sec collaboration_logo_page">
        <div class="container">
            <div class="gallery_main_box">
                 <!-- <div class="heading">Gallery</div> -->
                <!-- <ul class="nav nav-pills tabbing-btn mb-3 mobilescroll" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="gallery_tabbing1" data-bs-toggle="pill" data-bs-target="#nationaltab" type="button" role="tab" aria-controls="gallerytabbing1" aria-selected="true">National Collaborations</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="gallery_tabbing2" data-bs-toggle="pill" data-bs-target="#internationaltab" type="button" role="tab" aria-controls="gallerytabbing2" aria-selected="false">International Collaborations</button>
                    </li>
                </ul> -->
                <ul class="nav nav-pills tabbing-btn mb-3 mobilescroll" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active"
                            data-bs-toggle="pill"
                            data-bs-target="#national"
                            type="button">
                            National Collaborators 
                        </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link"
                            data-bs-toggle="pill"
                            data-bs-target="#international"
                            type="button">
                            International Collaborators 
                        </button>
                    </li>
                </ul>

                <div class="tab-content infrastructure_tab" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="national" role="tabpanel" aria-labelledby="gallery_tabbing1">
                        <div class="gallery_main_box_inner">
                           <div class="collaboration_logo_box">
                                <img src="{{ asset('assets/images/logos/national-collaborators/logo1.webp') }}" alt="Lab life">
                                <div class="collab_partner_name">National Centre for Cell Science (NCCS)</div>
                            </div>
                            <div class="collaboration_logo_box">
                                <img src="{{ asset('assets/images/logos/national-collaborators/logo2.webp') }}" alt="Lab life">
                                <div class="collab_partner_name">Kumaun University (KU), Uttarakhand</div>
                            </div>
                            <div class="collaboration_logo_box">
                                <img src="{{ asset('assets/images/logos/national-collaborators/logo3.webp') }}" alt="Lab life">
                                <div class="collab_partner_name">The Energy and Resources Institute, Delhi</div>
                            </div>
                            <div class="collaboration_logo_box">
                                <img src="{{ asset('assets/images/logos/national-collaborators/logo4.webp') }}" alt="Lab life">
                                <div class="collab_partner_name">Breach Candy Hospital Trust, Mumbai</div>
                            </div>
                            <div class="collaboration_logo_box">
                                <img src="{{ asset('assets/images/logos/national-collaborators/logo5.webp') }}" alt="Lab life">
                                <div class="collab_partner_name">Agharkar Research Institute, Pune</div>
                            </div>
                            <div class="collaboration_logo_box">
                                <img src="{{ asset('assets/images/logos/national-collaborators/logo6.webp') }}" alt="Lab life">
                                <div class="collab_partner_name">University of Delhi</div>
                            </div>
                            <div class="collaboration_logo_box">
                                <img src="{{ asset('assets/images/logos/national-collaborators/logo7.webp') }}" alt="Lab life">
                                <div class="collab_partner_name">Defiant Renewables Pvt Ltd, Pune</div>
                            </div>
                            <div class="collaboration_logo_box">
                                <img src="{{ asset('assets/images/logos/national-collaborators/logo8.webp') }}" alt="Lab life">
                                <div class="collab_partner_name">National Environmental Engineering Research, Institute (NEERI), Nagpur</div>
                            </div>
                            <div class="collaboration_logo_box">
                                <img src="{{ asset('assets/images/logos/national-collaborators/logo9.webp') }}" alt="Lab life">
                                <div class="collab_partner_name">Kasturba Medical College, Manipal</div>
                            </div>
                            <div class="collaboration_logo_box">
                                <img src="{{ asset('assets/images/logos/national-collaborators/logo10.webp') }}" alt="Lab life">
                                <div class="collab_partner_name">National Botanical Research Institute (NBRI) Lucknow</div>
                            </div>
                            <div class="collaboration_logo_box">
                                <img src="{{ asset('assets/images/logos/national-collaborators/logo11.webp') }}" alt="Lab life">
                                <div class="collab_partner_name">Sam Higginbottom University of Agriculture, Technology and Sciences, Prayagraj</div>
                            </div>
                            <div class="collaboration_logo_box">
                                <img src="{{ asset('assets/images/logos/national-collaborators/logo12.webp') }}" alt="Lab life">
                                <div class="collab_partner_name">All India Institute of Medical Sciences, Bhopal</div>
                            </div>
                            <div class="collaboration_logo_box">
                                <img src="{{ asset('assets/images/logos/national-collaborators/logo13.webp') }}" alt="Lab life">
                                <div class="collab_partner_name">National Institute of Himalayan Environment (NIHE), Sikkim</div>
                            </div>
                            <div class="collaboration_logo_box">
                                <img src="{{ asset('assets/images/logos/national-collaborators/logo14.webp') }}" alt="Lab life">
                                <div class="collab_partner_name">Sikkim University, Sikkim</div>
                            </div>
                            <div class="collaboration_logo_box">
                                <img src="{{ asset('assets/images/logos/national-collaborators/logo15.webp') }}" alt="Lab life">
                                <div class="collab_partner_name">Zoological Survey of India, Kolkata</div>
                            </div>
                            <div class="collaboration_logo_box">
                                <img src="{{ asset('assets/images/logos/national-collaborators/logo16.webp') }}" alt="Lab life">
                                <div class="collab_partner_name">Indian Institute of Technology Kharagpur, West Bengal</div>
                            </div>
                            <div class="collaboration_logo_box">
                                <img src="{{ asset('assets/images/logos/national-collaborators/logo17.webp') }}" alt="Lab life">
                                <div class="collab_partner_name">Visva-Bharati, Shanti Niketan, West Bengal</div>
                            </div>
                            <div class="collaboration_logo_box">
                                <img src="{{ asset('assets/images/logos/national-collaborators/logo18.webp') }}" alt="Lab life">
                                <div class="collab_partner_name">National Centre for Sustainable Coastal Management (NCSCM), Chennai</div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="international" role="tabpanel" aria-labelledby="gallery_tabbing2">
                        <div class="gallery_main_box_inner">
                            <div class="collaboration_logo_box">
                                <img src="{{ asset('assets/images/logos/international-collaborators/logo-1.webp') }}" alt="Lab life">
                                <div class="collab_partner_name">Georgia Institute of Technology</div>
                            </div>
                            <div class="collaboration_logo_box">
                                <img src="{{ asset('assets/images/logos/international-collaborators/logo-2.webp') }}" alt="Lab life">
                                <div class="collab_partner_name">RUSH Medical University Centre</div>
                            </div>
                            <div class="collaboration_logo_box">
                                <img src="{{ asset('assets/images/logos/international-collaborators/logo-3.webp') }}" alt="Lab life">
                                <div class="collab_partner_name">Pennsylvania State University</div>
                            </div>
                            <div class="collaboration_logo_box">
                                <img src="{{ asset('assets/images/logos/international-collaborators/logo-4.webp') }}" alt="Lab life">
                                <div class="collab_partner_name">Florida State University</div>
                            </div>
                            <div class="collaboration_logo_box">
                                <img src="{{ asset('assets/images/logos/international-collaborators/logo-5.webp') }}" alt="Lab life">
                                <div class="collab_partner_name">Florida Agriculture and Mechanical University</div>
                            </div>
                            <div class="collaboration_logo_box">
                                <img src="{{ asset('assets/images/logos/international-collaborators/logo-6.webp') }}" alt="Lab life">
                                <div class="collab_partner_name">University of Georgia</div>
                            </div>
                            <div class="collaboration_logo_box">
                                <img src="{{ asset('assets/images/logos/international-collaborators/logo-7.webp') }}" alt="Lab life">
                                <div class="collab_partner_name">Agricultural Research Organization,  Israel</div>
                            </div>
                            <div class="collaboration_logo_box">
                                <img src="{{ asset('assets/images/logos/international-collaborators/logo-8.webp') }}" alt="Lab life">
                                <div class="collab_partner_name">Japan Agency for Marine-Earth Science and Technology, Japan</div>
                            </div>
                            <div class="collaboration_logo_box">
                                <img src="{{ asset('assets/images/logos/international-collaborators/logo-9.webp') }}" alt="Lab life">
                                <div class="collab_partner_name">Chinese Academy of Sciences, China</div>
                            </div>
                            <div class="collaboration_logo_box">
                                <img src="{{ asset('assets/images/logos/international-collaborators/logo-10.webp') }}" alt="Lab life">
                                <div class="collab_partner_name">Chungbuk National University, South Korea</div>
                            </div>
                            <div class="collaboration_logo_box">
                                <img src="{{ asset('assets/images/logos/international-collaborators/logo-11.webp') }}" alt="Lab life">
                                <div class="collab_partner_name">All-Russian Collection of Microorganisms (VKM), Russia</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      
</main>
@include('footer')
