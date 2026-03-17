
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
                        <h1>Alumni</h1>
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
                <li>Alumni</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->
    <div class="container">
        <section class="alumni-section">
            <h2 class="heading">Our Alumni</h2>
            <div class="alumni-container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="alumni-card">
                            <div class="alumi-image-wrapper">
                                <img src="{{ asset('assets/images/gallery/alumi/VISHWA.webp') }}" alt="Vishwa Raulji" class="alumni-image">
                            </div>
                            <h3 class="subheading">Vishwa Raulji</h3>
                            <p><strong>M.Sc Dissertation Trainee - 2025</strong></p>
                            <div class="social-links">
                                <a href="https://www.linkedin.com/in/vishwa-raulji-114513349/"><img src="{{ asset('assets/images/linkdin.svg') }}" alt="Linkdian"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="alumni-card">
                            <div class="alumi-image-wrapper">
                                <img src="{{ asset('assets/images/gallery/alumi/AASHISH.webp') }}" alt="Ashish Ujalambe" class="alumni-image">
                            </div>
                            <h3 class="subheading">Ashish Ujalambe</h3>
                            <p><strong>Illustrator and Graphic Designer Trainee in Science Communication - April - Dec 2025</strong></p>
                            <div class="social-links">
                                <a href="https://www.linkedin.com/in/ashish-ujalambe-694769318/"><img src="{{ asset('assets/images/linkdin.svg') }}" alt="Linkdian"></a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@include('footer')

