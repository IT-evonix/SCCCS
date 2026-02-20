<!-- FOOTER START -->
<footer class="footer">
    <div class="container">
        <div class="footer_mainBox">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer_logobox">
                       <a href="<?= url('/'); ?>"> <img class="img-fluid" src="{{ asset('assets/images/footer_logo.webp') }}" alt="Footer logo"></a>
                    </div>
                </div>
            </div>

            <div class="row">
                    <div class="col-lg-5 col-md-5 mb-lg-0 mb-5">
                        <div class="footer_box">
                            <div class="footer_heading">
                                Address
                            </div>
                            <p> Symbiosis Centre for Climate Change and Sustainability (SCCCS),
                                6th Floor, Symbiosis Institute of Technology Building,
                                Lavale Base Hill Campus,
                                Symbiosis International (Deemed) University,
                                Lavale, Pune - 412115
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="footer_box">
                            <div class="footer_heading">
                                Quick Links
                            </div>
                            <ul>
                                <li><a href="<?= url('/about-scccs'); ?>">About us</a></li>
                                <li><a href="<?= url('/head-of-centre'); ?>">People</a></li>
                                <li><a target="_blank" href="<?= url('https://scri.siu.edu.in/'); ?>">PhD Program</a></li>
                                <li><a href="<?= url('/projects-and-grants'); ?>">Projects</a></li>
                                <li><a href="<?= url('/areas-of-research'); ?>">Research</a></li>
                                <li><a href="<?= url('/news'); ?>">News and Events</a></li>
                                <li><a href="<?= url('/contact-us'); ?>">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="footer_box contact_usmenu">
                            <div class="footer_heading">
                                Contact Us
                            </div>
                            <ul>
                               
                                <li><a href="mailto:head_scccs@siu.edu.in"><img src="{{ asset('assets/images/email.svg') }}" alt="email"> head_scccs@siu.edu.in</a></li>
                            </ul>
                        </div>
                        <div class="address_box mt-0 mt-lg-4" style="border-top: 1px solid #ccc; padding: 15px 0 0 0;">
                             <div class="footer_heading">
                                Social Media
                            </div>
                            <div class="social_media_box">
                                <!-- <a target="_blank" href="#"><img src="{{ asset('assets/images/fb.svg') }}" alt="fb"></a> -->
                                <a target="_blank" href="https://www.instagram.com/scccs_siu/"><img src="{{ asset('assets/images/insta.svg') }}" alt="insta"></a>
                                <a target="_blank" href="https://www.youtube.com/@SCCCS_SIU_India"><img src="{{ asset('assets/images/youtube.svg') }}" alt="youtube"></a>
                                <!-- <a target="_blank" href="#"><img src="{{ asset('assets/images/whatsapp.svg') }}" alt="whatsapp"></a>
                                <a target="_blank" href="#"><img src="{{ asset('assets/images/x.svg') }}" alt="x"></a> -->
                                <a target="_blank" href="https://www.linkedin.com/company/symbiosis-centre-for-climate-change-and-sustainability-scccs/people/?viewAsMember=true"><img src="{{ asset('assets/images/linkdin.svg') }}" alt="linkdin"></a>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
    </div>
    <div class="footer_bottom_strip">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="copyright">
                        © 2026 Symbiosis Centre for Climate Change and Sustainability (SCCCS). All rights reserved.
                    </div>
                </div>
                <div class="col-md-5 d-flex align-items-center">
                    <div class="crafted_by_evonix">
                        Crafted By
                        <a href="https://www.evonix.co/" target="_blank">
                            <img class="img-fluid" src="{{ asset('assets/images/footer-logo.webp') }}" alt="Crafted By Evonix">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER END -->



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<!-- form content ends -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets/js/script.js')}}"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<!-- Fancybox Image Gallery -->        
<script defer src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

</body>
</html>