<!DOCTYPE html>
<html lang="en">

<head>
    @php($canonicalUrl = url()->current())
    <title>{{ $data_arr['title'] ?? '' }}</title>
    <meta name="title" content="{{ $data_arr['title'] ?? '' }}">
    <meta name="keywords" content="{{ $data_arr['keywords'] ?? '' }}">
    <meta name="description" content="{{ $data_arr['description'] ?? '' }}">
    <link rel="canonical" href="{{ $canonicalUrl }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> -->
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
	<link rel="preload" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
	<meta property="og:title" content="SCCCS">
    <meta property="og:site_name" content="Symbiosis Centre for Climate Change and Sustainability (SCCCS),">
    <meta property="og:url" content="https://testblog.democheck.in/scccs/">
    <meta property="og:description" content="SCCCS">
    <meta property="og:type" content="website">
	<meta property="og:image" content="https://testblog.democheck.in/scccs/assets/images/SCCCS_link.jpg">
    <link rel="preload" fetchpriority="high" as="image" href="{{ENV('APP_URL')}}assets/images/logo.webp" type="image/webp">
    <link rel="preload" fetchpriority="high" as="image" href="{{ENV('APP_URL')}}assets/images/banners/banner.webp" type="image/webp">
    <link rel="preload" fetchpriority="high" as="image" href="{{ENV('APP_URL')}}assets/images/home/about-us.webp" type="image/webp">
	<link rel="preload" href="../fonts/Montserrat-Medium.woff2" as="font" type="font/woff2" crossorigin>
</head>


<header class="page-header">
	<div class="main_menu">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="logobox d-block d-lg-none">
						<a href="<?= url('/'); ?>"><img src="{{ asset('assets/images/logo.webp') }}" alt="logo"></a>
					</div>
					<div class="desk-menu">
						<nav class="box-menu">
							<div class="menu-container">
								<div class="menu-header-container">
									<div class="logobox d-lg-block d-none">
										<a href="<?= url('/'); ?>"><img src="{{ asset('assets/images/logo.webp') }}" alt="logo"></a>
									</div>
									<ul id="cd-primary-nav" class="menu">
										<li class="menu-item menu-item-has-children">
											<a href="#">About Us</a>
											<ul class="sub-menu">
												<li class="menu-item">
													<a href="<?= url('/about-scccs'); ?>">About SCCCS</a>
												</li>
												<li class="menu-item menu-item-has-children">
													<a href="#">Leadership</a>
													<ul class="sub-menu">
														<li class="menu-item">
															<a target="_blank" href="<?= url('https://www.siu.edu.in/leadership/prof-dr-s-b-mujumdar'); ?>">Chancellor</a>
														</li>
														<li class="menu-item">
															<a target="_blank" href="<?= url('https://www.siu.edu.in/leadership/dr-vidya-yeravdekar'); ?>">Pro-Chancellor</a>
														</li>
														<li class="menu-item">
															<a target="_blank" href="<?= url('https://www.siu.edu.in/leadership/dr-ramakrishnan-raman'); ?>">Vice Chancellor</a>
														</li>
														<li class="menu-item">
															<a href="<?= url('/head-of-centre'); ?>">Head of Centre</a>
														</li>
														<li class="menu-item">
															<a href="<?= url('/deputy-head-center'); ?>">Deputy Head of Centre</a>
														</li>
													</ul>
												</li>

												<li class="menu-item menu-item-has-children">
													<a href="#">About SIU</a>
													<ul class="sub-menu">
														<li class="menu-item">
															<a target="_blank" href="<?= url('https://www.siu.edu.in/'); ?>">SIU Main Website</a>
														</li>
														<li class="menu-item">
															<a target="_blank" href="<?= url('https://www.siu.edu.in/about-us/vision-mission'); ?>">About SIU - Visions and Mission</a>
														</li>
														<li class="menu-item">
															<a target="_blank" href="<?= url('https://www.siu.edu.in/about-us/leaderships'); ?>">Leadership</a>
														</li>	
														<li class="menu-item">
															<a target="_blank" href="<?= url('https://www.siu.edu.in/'); ?>">SIU Authorities & Committees </a>
														</li>	
														<li class="menu-item">
															<a target="_blank" href="<?= url('https://www.siu.edu.in/about-us/why-us/student-wellbeing'); ?>">Anti Ragging & Grievance Redressal</a>
														</li>	
														<li class="menu-item">
															<a target="_blank" href="<?= url('https://www.siu.edu.in/about-us/why-us/health-promoting-university'); ?>">Health Promoting Initiatives </a>
														</li>	
														<li class="menu-item">
															<a target="_blank" href="<?= url('https://www.symbiosis-ambedkarmemorial.org'); ?>">Dr. Babasaheb Ambedkar Museum & Memorial </a>
														</li>
														<li class="menu-item">
															<a target="_blank" href="<?= url('https://afroasian.symbiosis.ac.in'); ?>">Afro-Asian Cultural Museum </a>
														</li>
													</ul>
												</li>


												<li class="menu-item">
													<a target="_blank" href="<?= url('https://scri.siu.edu.in/'); ?>">PhD Program</a>
												</li>
												<li class="menu-item">
													<a href="<?= url('/life-at-scccs'); ?>">Life at SCCCS</a>
												</li>
											</ul>
										</li>
										<li class="menu-item menu-item-has-children">
											<a href="#">Focus Areas</a>
											<ul class="sub-menu">
												<!-- <li class="menu-item">
													<a href="<?= url('/areas-of-research'); ?>">Research Areas</a>
												</li> -->
												<li class="menu-item menu-item-has-children">
													<a href="#">Research Areas</a>
													<ul class="sub-menu">
														<li class="menu-item">
															<a href="<?= url('/areas-of-research/one-health'); ?> ">One Health</a>
														</li>
														<li class="menu-item">
															<a href="<?= url('/areas-of-research/water-and-climate-change'); ?>">Water & Climate Change</a>
														</li>
														<li class="menu-item">
															<a href="<?= url('/areas-of-research/bioenergy-and-carbon-capture'); ?>">Bioenergy & Carbon Capture</a>
														</li>
														<li class="menu-item">
															<a href="<?= url('/areas-of-research/biodiversity-and-waste-management'); ?>">Biodiversity Conservation</a>
														</li>
														<li class="menu-item">
															<a href="<?= url('/areas-of-research/sustainable-agriculture-and-carbon-mitigation'); ?>">Sustainable Agriculture & Carbon Mitigation</a>
														</li>
														<li class="menu-item">
															<a href="<?= url('/areas-of-research/energy-and-urban-sustainability'); ?>">Energy and Urban Sustainability</a>
														</li>
														<li class="menu-item">
															<a href="<?= url('/areas-of-research/campus-sustainability'); ?>">Campus Sustainability</a>
														</li>
														<li class="menu-item">
															<a href="<?= url('/areas-of-research/climate-education-and-capacity-building'); ?>">Climate Education and Capacity Building</a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a href="<?= url('/projects-and-grants'); ?>">Grants/Projects</a>
												</li>
												<li class="menu-item">
													<a href="<?= url('/coming-soon-for-publication'); ?>">Publications</a>
												</li>
												<li class="menu-item menu-item-has-children">
													<a href="#">Dissertation Outputs</a>
													<ul class="sub-menu">
														<li class="menu-item">
															<a href="<?= url('/phd-thesis'); ?> ">PhD Thesis</a>
														</li>
														<li class="menu-item">
															<a href="<?= url('/masters-dissertation-reports'); ?>">Master’s Dissertation Reports</a>
														</li>
													</ul>
												</li>
												<li class="menu-item menu-item-has-children">
													<a href="#">Collaborators</a>
													<ul class="sub-menu">
														<li class="menu-item">
															<a href="<?= url('/institutional-partners'); ?>">Institutional Partners</a>
														</li>
														<li class="menu-item">
															<a href="<?= url('/international-national-collaborations-individual'); ?>">International / National Collaborations -Individual</a>
														</li>
													</ul>
												</li>
											</ul>
										</li>
										<li class="menu-item menu-item-has-children">
											<a href="">People</a>
											<ul class="sub-menu">
												<li class="menu-item menu-item-has-children">
													<a href="#">Faculty</a>
													<ul class="sub-menu">
														<li class="menu-item">
															<a href="<?= url('/head-of-centre'); ?>">Head of Centre</a>
														</li>
														<li class="menu-item">
															<a href="<?= url('/deputy-head-center'); ?>">Deputy Head of Centre</a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a href="<?= url('/visiting-scholars-faculty'); ?>">Visiting Scholars/ Faculty</a>
												</li>
												<li class="menu-item menu-item-has-children">
													<a href="#">Staff</a>
													<ul class="sub-menu">
														<li class="menu-item">
															<a target="_blank" href="<?= url('/rucha-kale'); ?>">Rucha Kale</a>
														</li>
													</ul>
												</li>
												<li class="menu-item menu-item-has-children">
													<a href="#">Project Scientists</a>
													<ul class="sub-menu">
														<li class="menu-item">
															<a target="_blank" href="<?= url('/ankita-chopra'); ?>">Ankita Chopra</a>
														</li>
														<li class="menu-item">
															<a href="<?= url('/shumailah-ishtiyaq'); ?>">Shumailah Ishtiyaq</a>
														</li>
													</ul>
												</li>
												<li class="menu-item menu-item-has-children">
													<a href="#">PostDoc/ Research Associate</a>
													<ul class="sub-menu">
														<li class="menu-item">
															<a href="<?= url('/abhijit-kulkarni'); ?>">Abhijit Kulkarni</a>
														</li>
													</ul>
												</li>
												<li class="menu-item menu-item-has-children">
													<a href="#">Doctoral Students</a>
													<ul class="sub-menu">
														<li class="menu-item">
															<a href="<?= url('/adarsh-kumar-singh'); ?>">Adarsh Singh</a>
														</li>
														<li class="menu-item">
															<a href="<?= url('/rashmi-s-dhanwar'); ?>">Rashmi Dhanwar</a>
														</li>
														<li class="menu-item">
															<a href="<?= url('/rupali-s-thakur'); ?>">Rupali Thakur</a>
														</li>
														<li class="menu-item">
															<a href="<?= url('/ujjwala-waghmare'); ?>">Ujjwala Waghmare</a>
														</li>
														<li class="menu-item">
															<a href="<?= url('/kriti-joshi'); ?>">Kriti Joshi</a>
														</li>
														<li class="menu-item">
															<a href="<?= url('/khushboo-tomar'); ?>">Khushboo Tomar</a>
														</li>
														<li class="menu-item">
															<a href="<?= url('/angela-thomas'); ?>">Angela Thomas</a>
														</li>
														<li class="menu-item">
															<a href="<?= url('/kedar-sohoni'); ?>">Kedar Sohoni</a>
														</li>
														<li class="menu-item">
															<a href="<?= url('/sudha-balakrishnan'); ?>">Sudha Balakrishnan</a>
														</li>
														<li class="menu-item">
															<a href="<?= url('/brij-raj'); ?>">Brij Raj</a>
														</li>
													</ul>
												</li>
												<li class="menu-item menu-item-has-children">
													<a href="#">Research Assistants</a>
													<ul class="sub-menu">
														<li class="menu-item">
															<a href="<?= url('/avishkar-munje'); ?>">Avishkar Munje</a>
														</li>
														<li class="menu-item">
															<a href="<?= url('/afshan-ahmad'); ?>">Afshan Ahmad</a>
														</li>
													</ul>
												</li>
												<li class="menu-item menu-item-has-children">
													<a href="#">Project Assistants</a>
													<ul class="sub-menu">
														<li class="menu-item">
															<a href="<?= url('/shwetha-kadam'); ?>">Shwetha Kadam</a>
														</li>
														<li class="menu-item">
															<a href="<?= url('/kshiteeja-dushing'); ?>">Kshiteeja Dushing</a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a href="<?= url('/interns'); ?>">Interns</a>
												</li>
												<li class="menu-item">
													<a href="<?= url('/alumni'); ?>">Alumni</a>
												</li>
											</ul>
										</li>
										<li class="contact menu-item">
											<a href="<?= url('/sustainability-initiatives'); ?>">Sustainability Initiatives</a>
										</li>
										<li class="menu-item menu-item-has-children">
											<a href="#">Media & Activity</a>
											<ul class="sub-menu">												
												<li class="menu-item">
													<a target="blank" href="<?= url('https://www.linkedin.com/company/symbiosis-centre-for-climate-change-and-sustainability-scccs/people/?viewAsMember=true'); ?>">LinkedIn</a>
												</li>
												<li class="menu-item">
													<a target="blanl" href="<?= url('https://www.instagram.com/scccs_siu/'); ?>">Instagram</a>
												</li>
												<li class="menu-item">
													<a target="blanl" href="<?= url('https://www.youtube.com/@SCCCS_SIU_India'); ?>">Youtube</a>
												</li>
												<li class="menu-item">
													<a href="<?= url('/awards-and-recognition'); ?>">Awards & Recognition</a>
												</li>
												<li class="menu-item">
													<a href="<?= url('/blogs'); ?>">Blogs</a>
												</li>
												<li class="menu-item">
													<a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSdhl60mr-tMxgQ9I0o33icadUlGcdkmCEQz_sGlIv_ZosGvwg/viewform">Quiz</a>
												</li>
												<li class="menu-item">
													<a href="<?= url('/news'); ?>">News</a>
												</li>
												<li class="menu-item">
													<a href="<?= url('/events-calendar'); ?>">Events calendar</a>
												</li>
												<li class="menu-item">
													<a href="<?= url('/seminars-workshops-conferences'); ?>">Seminars / Workshops / Conferences</a>
												</li>
												<li class="menu-item">
													<a href="<?= url('/visitors-to-scccs'); ?>">Visitors to SCCCS</a>
												</li>
											</ul>
										</li>
										<li class="menu-item menu-item-has-children">
											<a target="_blank" href="#" class="">Career</a>
											<ul class="sub-menu">
												<li class="menu-item">
													<a href="<?= url('/career'); ?>">Positions</a>
												</li>
												<li class="menu-item">
													<a href="<?= url('/career'); ?>">Volunteer</a>
												</li>	
											</ul>
										</li>
										<!-- <li class="menu-item menu-item-has-children">
											<a target="_blank" href="#" class="">About SIU</a>
											<ul class="sub-menu">
												<li class="menu-item">
													<a target="_blank" href="<?= url('https://www.siu.edu.in/'); ?>">SIU Main Website</a>
												</li>
												<li class="menu-item">
													<a target="_blank" href="<?= url('https://www.siu.edu.in/about-us/vision-mission'); ?>">About SIU - Visions and Mission</a>
												</li>
												<li class="menu-item">
													<a target="_blank" href="<?= url('https://www.siu.edu.in/about-us/leaderships'); ?>">Leadership</a>
												</li>	
												<li class="menu-item">
													<a target="_blank" href="<?= url('https://www.siu.edu.in/'); ?>">SIU Authorities & Committees </a>
												</li>	
												<li class="menu-item">
													<a target="_blank" href="<?= url('https://www.siu.edu.in/about-us/why-us/student-wellbeing'); ?>">Anti Ragging & Grievance Redressal</a>
												</li>	
												<li class="menu-item">
													<a target="_blank" href="<?= url('https://www.siu.edu.in/about-us/why-us/health-promoting-university'); ?>">Health Promoting Initiatives </a>
												</li>	
											</ul>
										</li> -->
										<li class="contact menu-item">
											<a href="<?= url('/biodiversity'); ?>">Biodiversity</a>
										</li>
										<li class="contact menu-item">
											<a href="<?= url('/contact-us'); ?>" class="last_menu">Contact Us</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="hamburger-menu">
								<div class="bar"></div>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <a class="caution_notice_btn" href="">Caution Notice</a> -->
</header>
</header>

