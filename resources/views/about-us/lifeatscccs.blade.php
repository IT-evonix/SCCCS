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
                        <h1>Life at SCCCS</h1>
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
                <li>About Us</li> /
                <li>Life at SCCCS</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->

    <div class="gallery_main_sec">
        <div class="container">
            <div class="gallery_main_box">
                 <!-- <div class="heading">Gallery</div> -->
                <ul class="nav tabbing-btn mb-3 mobilescroll" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="gallery_tabbing1" data-bs-toggle="pill" data-bs-target="#gallerytabbing1" type="button" role="tab" aria-controls="gallerytabbing1" aria-selected="true">Infrastructure</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="gallery_tabbing2" data-bs-toggle="pill" data-bs-target="#gallerytabbing2" type="button" role="tab" aria-controls="gallerytabbing2" aria-selected="false">Lab Life</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="gallery_tabbing3" data-bs-toggle="pill" data-bs-target="#gallerytabbing3" type="button" role="tab" aria-controls="gallerytabbing3" aria-selected="false">Biodiversity</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="gallery_tabbing4" data-bs-toggle="pill" data-bs-target="#gallerytabbing4" type="button" role="tab" aria-controls="gallerytabbing4" aria-selected="false">Social Gatherings</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="gallery_tabbing5" data-bs-toggle="pill" data-bs-target="#gallerytabbing5" type="button" role="tab" aria-controls="gallerytabbing5" aria-selected="false">Creatives</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="gallery_tabbing6" data-bs-toggle="pill" data-bs-target="#gallerytabbing6" type="button" role="tab" aria-controls="gallerytabbing6" aria-selected="false">Events and Meetings</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="gallery_tabbing7" data-bs-toggle="pill" data-bs-target="#gallerytabbing7" type="button" role="tab" aria-controls="gallerytabbing7" aria-selected="false">Field Work</button>
                    </li>
                </ul>
                <div class="tab-content infrastructure_tab" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="gallerytabbing1" role="tabpanel" aria-labelledby="gallery_tabbing1">
                        <div class="gallery_main_box_inner">
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/about-symbiosis-society80.webp') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/about-symbiosis-society80.webp') }}" alt="Symbiosis Society" />
                                </a>
                                <h6>Upright Freezer: -86 Deep Freezer Cole Palmer (WW-16340-02)</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/about-symbiosis-society20.jpg') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/about-symbiosis-society.jpg') }}" alt="Campus View" />
                                </a>
                                <h6>Upright Freezer: -20 Degree Deep Celfrost Freezer 450 L (NFG450 G*)</h6>
                            </div>
                            <div class="gallery_box">
                                <a
                                    href="{{ asset('assets/images/gallery/infrastructure/Refrigerated-Centrifuge-CRYSTE-PureSpin-18R.webp') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/gallery/infrastructure/Refrigerated-Centrifuge-CRYSTE-PureSpin-18R.webp') }}" alt="Refrigerated Centrifuge – CRYSTE PureSpin 18R" />
                                </a>
                                <h6>Refrigerated Centrifuge – CRYSTE PureSpin 18R</h6>
                            </div>
                            <div class="gallery_box">
                                <a
                                    href="{{ asset('assets/images/gallery/infrastructure/Bio-Safety-Cabinet.webp') }}" data-fancybox="gallerytabbing1" data-caption="" >
                                    <img src="{{ asset('assets/images/gallery/infrastructure/Bio-Safety-Cabinet.webp') }}" alt="Student Activities" />
                                </a>
                                <h6>Biosafety Cabinet (Laminar Air Flow) Microfilt MFT Class II TYPE A2</h6>
                            </div>
                            <div class="gallery_box">
                                <a
                                    href="{{ asset('assets/images/gallery/infrastructure/UV-Vis-Spectrophotomet-er.webp') }}" data-fancybox="gallerytabbing1" data-caption="" >
                                    <img src="{{ asset('assets/images/gallery/infrastructure/UV-Vis-Spectrophotomet-er.webp') }}" alt="Symbiosis Society" />
                                </a>
                                <h6>UV-Vis Spectrophotometer – Labman (LMSPUV1900)</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/gallery/infrastructure/Water-Purification-System-(Laboratory-water-makers)-Ion-Exchange-(LQHS20011).webp') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/gallery/infrastructure/Water-Purification-System-(Laboratory-water-makers)-Ion-Exchange-(LQHS20011).webp') }}" alt="Campus View" />
                                </a>
                                <h6>Water Purification System (Laboratory water makers), Ion Exchange (LQHS20011)</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/gallery/infrastructure/Upright-Freezer-Celfrost-430-L-Capacity-(FKG430).webp') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/gallery/infrastructure/Upright-Freezer-Celfrost-430-L-Capacity-(FKG430).webp') }}" alt="Upright Freezer 2 Degree to 8 Degree Celfrost 430 L Capacity (FKG430)" />
                                </a>
                                <h6>Upright Freezer 2 Degree to 8 Degree Celfrost 430 L Capacity (FKG430)</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/gallery/infrastructure/Orbital-Shaking-Incubator-(Heating).webp') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/gallery/infrastructure/Orbital-Shaking-Incubator-(Heating).webp') }}" alt="BTI Orbital Shaking Incubator (Heating)(BTI-39)" />
                                </a>
                                <h6>BTI Orbital Shaking Incubator (Heating)(BTI-39)</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/gallery/infrastructure/Digital-Probe-Sonicator-Labman-(PRO656).webp') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/gallery/infrastructure/Digital-Probe-Sonicator-Labman-(PRO656).webp') }}" alt="Symbiosis Society" />
                                </a>
                                <h6>Digital Probe Sonicator - Labman (PRO656)</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/about-symbiosis-society.jpg') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/about-symbiosis-society.jpg') }}" alt="Campus View" />
                                </a>
                                <h6>Vertical Autoclave Fully Automatic- 52 Litre (BTI-02-A)</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/gallery/infrastructure/Bacteriological-Lab-Incubator-GMP-Model-(BTI-04).webp') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/gallery/infrastructure/Bacteriological-Lab-Incubator-GMP-Model-(BTI-04).webp') }}" alt="Student Activities" />
                                </a>
                                <h6>Bacteriological Lab Incubator GMP Model (BTI-04)</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/gallery/infrastructure/Hot-Air-Oven-GMP-Model-(BTI 21).webp') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/gallery/infrastructure/Hot-Air-Oven-GMP-Model-(BTI 21).webp') }}" alt="Hot Air Oven, GMP Model (BTI 21)" />
                                </a>
                                <h6>Hot Air Oven, GMP Model (BTI 21)</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/gallery/infrastructure/Digital-Dry-Bath-Incubator-Labman-(DBI 18).webp') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/gallery/infrastructure/Digital-Dry-Bath-Incubator-Labman-(DBI 18).webp') }}" alt="Digital Dry Bath Incubator - Labman (DBI 18)" />
                                </a>
                                <h6>Digital Dry Bath Incubator - Labman (DBI 18)</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/gallery/infrastructure/Weighing-Balance-Wensar-KAB-5L.webp') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/gallery/infrastructure/Weighing-Balance-Wensar-KAB-5L.webp') }}" alt="Weighing Balance - Wensar KAB 5L" />
                                </a>
                                <h6>Weighing Balance - Wensar KAB 5L</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/gallery/infrastructure/pH-Meter-Labman-(HM-80)-(LMPH9).webp') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/gallery/infrastructure/pH-Meter-Labman-(HM-80)-(LMPH9).webp') }}" alt="pH Meter - Labman (HM-80) (LMPH9)" />
                                </a>
                                <h6>pH Meter - Labman (HM-80) (LMPH9)</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/gallery/infrastructure/Digital-Water-Bath-(BTI-50).webp') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/gallery/infrastructure/Digital-Water-Bath-(BTI-50).webp') }}" alt="Digital Water Bath (BTI-50)" />
                                </a>
                                <h6>Digital Water Bath (BTI-50)</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/gallery/infrastructure/Table-top-Vortex -REMI-(CM-101).webp') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/gallery/infrastructure/Table-top-Vortex -REMI-(CM-101).webp') }}" alt="Table top Vortex - REMI (CM 101) – 2 Nos" />
                                </a>
                                <h6>Table top Vortex - REMI (CM 101) – 2 Nos</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/gallery/infrastructure/Magnetic-Stirrer-with-Hot-plate-REMI-2MLH-2-L.webp') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/gallery/infrastructure/Magnetic-Stirrer-with-Hot-plate-REMI-2MLH-2-L.webp') }}" alt="Magnetic Stirrer with Hot plate- REMI 2MLH, 2 L" />
                                </a>
                                <h6>Magnetic Stirrer with Hot plate- REMI 2MLH, 2 L</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/Heating_Mantle.jpg') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/Heating_Mantle.jpg') }}" alt="Heating Mantle- 1 Litre (BTI-19)" />
                                </a>
                                <h6>Heating Mantle- 1 Litre (BTI-19)</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/gallery/infrastructure/Mini-Centrifuge-Remi-RM-02-Plus.webp') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/gallery/infrastructure/Mini-Centrifuge-Remi-RM-02-Plus.webp') }}" alt="Mini Centrifuge- Remi RM 02 Plus" />
                                </a>
                                <h6>Mini Centrifuge- Remi RM 02 Plus</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/Gel_Electrophoresis_Unit.jpg') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/Gel_Electrophoresis_Unit.jpg') }}" alt="Gel Electrophoresis Unit" />
                                </a>
                                <h6>Gel Electrophoresis Unit</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/about-symbiosis-society.webp') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/about-symbiosis-society.webp') }}" alt="Electrophoresis Power Supply Unit 7090" />
                                </a>
                                <h6>Electrophoresis Power Supply Unit 7090</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/about-symbiosis-society.webp') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/about-symbiosis-society.webp') }}" alt="MIDI SUB Electrophoresis" />
                                </a>
                                <h6>MIDI SUB Electrophoresis</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/Refrigerator-Haier_(HEF252)_2-4_degrees.jpg') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/Refrigerator-Haier_(HEF252)_2-4_degrees.jpg') }}" alt="Refrigerator - Haier (HEF252): 2- 4 degrees" />
                                </a>
                                <h6>Refrigerator - Haier (HEF252): 2- 4 degrees</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/about-symbiosis-society.webp') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/about-symbiosis-society.webp') }}" alt="Nitrogen gas cylinders -46.7 L capacity – 2 nos" />
                                </a>
                                <h6>Nitrogen gas cylinders -46.7 L capacity – 2 nos</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/about-symbiosis-society.webp') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/about-symbiosis-society.webp') }}" alt="Carbon dioxide gas cylinders- 46.7 L capacity – 2 nos" />
                                </a>
                                <h6>Carbon dioxide gas cylinders- 46.7 L capacity – 2 nos</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/about-symbiosis-society.webp') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/about-symbiosis-society.webp') }}" alt="Methane Gas cylinders - 46.7 L Capacity – 2 nos" />
                                </a>
                                <h6>Methane Gas cylinders - 46.7 L Capacity – 2 nos</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/about-symbiosis-society.webp') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/about-symbiosis-society.webp') }}" alt="Cylinder Regulators - CO2, Methane, Nitrogen – 6 nos" />
                                </a>
                                <h6>Cylinder Regulators - CO2, Methane, Nitrogen – 6 nos</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/Table_top_Microcentrifuge .jpg') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/Table_top_Microcentrifuge .jpg') }}" alt="Table top Microcentrifuge - (P18R-MB)" />
                                </a>
                                <h6>Table top Microcentrifuge - (P18R-MB)</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/about-symbiosis-society.webp') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/about-symbiosis-society.webp') }}" alt="Student Activities" />
                                </a>
                                <h6>Hydroponics Setup System</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/LG_Solo_20_L_Microwave.jpg') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/LG_Solo_20_L_Microwave.jpg') }}" alt="Student Activities" />
                                </a>
                                <h6>LG Solo 20 L Microwave</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/Gas-Distribution-Unit-Wall-Mounted.jpg') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/Gas-Distribution-Unit-Wall-Mounted.jpg') }}" alt="Gas Purification Unit – Wall Mounted" />
                                </a>
                                <h6>Gas Purification Unit – Wall Mounted</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/about-symbiosis-society.webp') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/about-symbiosis-society.webp') }}" alt="Student Activities" />
                                </a>
                                <h6>GILSON Pipette Set – 6 Nos</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/about-symbiosis-society.webp') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/about-symbiosis-society.webp') }}" alt="Student Activities" />
                                </a>
                                <h6>Tarsons Pipette Set – 4 Nos</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/AnaerobicGlassJars.jpg') }}" data-fancybox="gallerytabbing1" data-caption="">
                                    <img src="{{ asset('assets/images/AnaerobicGlassJars.jpg') }}" alt="Student Activities" />
                                </a>
                                <h6>Anaerobic Glass Jars – 2 Nos</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/gallery/infrastructure/High-Performance-Work-Station-and-Server.webp') }}" data-fancybox="gallerytabbing1" data-caption="" >
                                    <img src="{{ asset('assets/images/gallery/infrastructure/High-Performance-Work-Station-and-Server.webp') }}" alt="Student Activities" />
                                </a>
                                <h6>HP Server and Workstation</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/gallery/infrastructure/High-Performance-Work-Station-and-Server.webp') }}" data-fancybox="gallerytabbing1" data-caption="" >
                                    <img src="{{ asset('assets/images/gallery/infrastructure/High-Performance-Work-Station-and-Server.webp') }}" alt="Student Activities" />
                                </a>
                                <h6>Automatic Weather Station</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/gallery/infrastructure/High-Performance-Work-Station-and-Server.webp') }}" data-fancybox="gallerytabbing1" data-caption="" >
                                    <img src="{{ asset('assets/images/gallery/infrastructure/High-Performance-Work-Station-and-Server.webp') }}" alt="Student Activities" />
                                </a>
                                <h6>BOD Incubator</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/gallery/infrastructure/High-Performance-Work-Station-and-Server.webp') }}" data-fancybox="gallerytabbing1" data-caption="" >
                                    <img src="{{ asset('assets/images/gallery/infrastructure/High-Performance-Work-Station-and-Server.webp') }}" alt="Student Activities" />
                                </a>
                                <h6>Gassing Manifold</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/gallery/infrastructure/High-Performance-Work-Station-and-Server.webp') }}" data-fancybox="gallerytabbing1" data-caption="" >
                                    <img src="{{ asset('assets/images/gallery/infrastructure/High-Performance-Work-Station-and-Server.webp') }}" alt="Student Activities" />
                                </a>
                                <h6>Anaerobic Chamber</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/gallery/infrastructure/High-Performance-Work-Station-and-Server.webp') }}" data-fancybox="gallerytabbing1" data-caption="" >
                                    <img src="{{ asset('assets/images/gallery/infrastructure/High-Performance-Work-Station-and-Server.webp') }}" alt="Student Activities" />
                                </a>
                                <h6>Air Sampler for Microbiological Studies</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/gallery/infrastructure/High-Performance-Work-Station-and-Server.webp') }}" data-fancybox="gallerytabbing1" data-caption="" >
                                    <img src="{{ asset('assets/images/gallery/infrastructure/High-Performance-Work-Station-and-Server.webp') }}" alt="Student Activities" />
                                </a>
                                <h6>Fume Hood</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/gallery/infrastructure/High-Performance-Work-Station-and-Server.webp') }}" data-fancybox="gallerytabbing1" data-caption="" >
                                    <img src="{{ asset('assets/images/gallery/infrastructure/High-Performance-Work-Station-and-Server.webp') }}" alt="Student Activities" />
                                </a>
                                <h6>Furnace</h6>
                            </div>
                            <div class="gallery_box">
                                <a href="{{ asset('assets/images/gallery/infrastructure/High-Performance-Work-Station-and-Server.webp') }}" data-fancybox="gallerytabbing1" data-caption="" >
                                    <img src="{{ asset('assets/images/gallery/infrastructure/High-Performance-Work-Station-and-Server.webp') }}" alt="Student Activities" />
                                </a>
                                <h6>Rotary Evaporator</h6>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="gallerytabbing2" role="tabpanel" aria-labelledby="gallery_tabbing2">
                        <div class="gallery_main_box_inner">
                            <a href="{{ asset('assets/images/gallery/lab-life/tablife1.webp') }}" data-fancybox="gallerytabbing2" data-caption="">
                                <img src="{{ asset('assets/images/gallery/lab-life/tablife1.webp') }}" alt="Lab life">
                            </a>
                            <a href="{{ asset('assets/images/gallery/lab-life/tablife2.webp') }}" data-fancybox="gallerytabbing2" data-caption="">
                                <img src="{{ asset('assets/images/gallery/lab-life/tablife2.webp') }}" alt="Lab life">
                            </a>
                            <a href="{{ asset('assets/images/gallery/lab-life/tablife3.webp') }}" data-fancybox="gallerytabbing2" data-caption="">
                                <img src="{{ asset('assets/images/gallery/lab-life/tablife3.webp') }}" alt="Lab life">
                            </a>
                            <a href="{{ asset('assets/images/gallery/lab-life/tablife4.webp') }}" data-fancybox="gallerytabbing2" data-caption="">
                                <img src="{{ asset('assets/images/gallery/lab-life/tablife4.webp') }}" alt="Lab life">
                            </a>
                            <a href="{{ asset('assets/images/gallery/lab-life/tablife5.webp') }}" data-fancybox="gallerytabbing2" data-caption="">
                                <img src="{{ asset('assets/images/gallery/lab-life/tablife5.webp') }}" alt="Lab life">
                            </a>
                            <a href="{{ asset('assets/images/gallery/lab-life/tablife6.webp') }}" data-fancybox="gallerytabbing2" data-caption="">
                                <img src="{{ asset('assets/images/gallery/lab-life/tablife6.webp') }}" alt="Lab life">
                            </a>
                            <a href="{{ asset('assets/images/gallery/lab-life/tablife7.webp') }}" data-fancybox="gallerytabbing2" data-caption="">
                                <img src="{{ asset('assets/images/gallery/lab-life/tablife7.webp') }}" alt="Lab life">
                            </a>
                            <a href="{{ asset('assets/images/gallery/lab-life/tablife8.webp') }}" data-fancybox="gallerytabbing2" data-caption="">
                                <img src="{{ asset('assets/images/gallery/lab-life/tablife8.webp') }}" alt="Lab life">
                            </a>
                            <a href="{{ asset('assets/images/gallery/lab-life/tablife9.webp') }}" data-fancybox="gallerytabbing2" data-caption="">
                                <img src="{{ asset('assets/images/gallery/lab-life/tablife9.webp') }}" alt="Lab life">
                            </a>
                            <a href="{{ asset('assets/images/gallery/lab-life/tablife10.webp') }}" data-fancybox="gallerytabbing2" data-caption="">
                                <img src="{{ asset('assets/images/gallery/lab-life/tablife10.webp') }}" alt="Lab life">
                            </a>
                            <a href="{{ asset('assets/images/gallery/lab-life/tablife11.webp') }}" data-fancybox="gallerytabbing2" data-caption="">
                                <img src="{{ asset('assets/images/gallery/lab-life/tablife11.webp') }}" alt="Lab life">
                            </a>
                            <a href="{{ asset('assets/images/gallery/lab-life/tablife12.webp') }}" data-fancybox="gallerytabbing2" data-caption="">
                                <img src="{{ asset('assets/images/gallery/lab-life/tablife12.webp') }}" alt="Lab life">
                            </a>
                            <a href="{{ asset('assets/images/gallery/lab-life/tablife13.webp') }}" data-fancybox="gallerytabbing2" data-caption="">
                                <img src="{{ asset('assets/images/gallery/lab-life/tablife13.webp') }}" alt="Lab life">
                            </a>
                             <a href="{{ asset('assets/images/gallery/lab-life/tablife14.webp') }}" data-fancybox="gallerytabbing2" data-caption="">
                                <img src="{{ asset('assets/images/gallery/lab-life/tablife14.webp') }}" alt="Lab life">
                            </a>
                             <a href="{{ asset('assets/images/gallery/lab-life/tablife15.webp') }}" data-fancybox="gallerytabbing2" data-caption="">
                                <img src="{{ asset('assets/images/gallery/lab-life/tablife15.webp') }}" alt="Lab life">
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="gallerytabbing3" role="tabpanel" aria-labelledby="gallery_tabbing3">
                        <div class="gallery_main_box_inner">
                            <a href="{{ asset('assets/images/gallery/biodiversity/biodiversity1.webp') }}" data-fancybox="gallerytabbing3" data-caption="">
                                <img src="{{ asset('assets/images/gallery/biodiversity/biodiversity1.webp') }}" alt="Biodiversity">
                            </a>
                            <a href="{{ asset('assets/images/gallery/biodiversity/biodiversity2.webp') }}" data-fancybox="gallerytabbing3" data-caption="">
                                <img src="{{ asset('assets/images/gallery/biodiversity/biodiversity2.webp') }}" alt="Biodiversity">
                            </a>
                            <a href="{{ asset('assets/images/gallery/biodiversity/biodiversity3.webp') }}" data-fancybox="gallerytabbing3" data-caption="">
                                <img src="{{ asset('assets/images/gallery/biodiversity/biodiversity3.webp') }}" alt="Biodiversity">
                            </a>
                            <a href="{{ asset('assets/images/gallery/biodiversity/biodiversity4.webp') }}" data-fancybox="gallerytabbing3" data-caption="">
                                <img src="{{ asset('assets/images/gallery/biodiversity/biodiversity4.webp') }}" alt="Biodiversity">
                            </a>
                            <a href="{{ asset('assets/images/gallery/biodiversity/biodiversity5.webp') }}" data-fancybox="gallerytabbing3" data-caption="">
                                <img src="{{ asset('assets/images/gallery/biodiversity/biodiversity5.webp') }}" alt="Biodiversity">
                            </a>
                            <a href="{{ asset('assets/images/gallery/biodiversity/biodiversity6.webp') }}" data-fancybox="gallerytabbing3" data-caption="">
                                <img src="{{ asset('assets/images/gallery/biodiversity/biodiversity6.webp') }}" alt="Biodiversity">
                            </a>
                            <a href="{{ asset('assets/images/gallery/biodiversity/biodiversity7.webp') }}" data-fancybox="gallerytabbing3" data-caption="">
                                <img src="{{ asset('assets/images/gallery/biodiversity/biodiversity7.webp') }}" alt="Biodiversity">
                            </a>
                            <a href="{{ asset('assets/images/gallery/biodiversity/biodiversity8.webp') }}" data-fancybox="gallerytabbing3" data-caption="">
                                <img src="{{ asset('assets/images/gallery/biodiversity/biodiversity8.webp') }}" alt="Biodiversity">
                            </a>
                            <a href="{{ asset('assets/images/gallery/biodiversity/biodiversity9.webp') }}" data-fancybox="gallerytabbing3" data-caption="">
                                <img src="{{ asset('assets/images/gallery/biodiversity/biodiversity9.webp') }}" alt="Biodiversity">
                            </a>
                            <a href="{{ asset('assets/images/gallery/biodiversity/birdcount1.webp') }}" data-fancybox="gallerytabbing3" data-caption="">
                                <img src="{{ asset('assets/images/gallery/biodiversity/birdcount1.webp') }}" alt="Biodiversity">
                            </a>
                            <a href="{{ asset('assets/images/gallery/biodiversity/birdcount2.webp') }}" data-fancybox="gallerytabbing3" data-caption="">
                                <img src="{{ asset('assets/images/gallery/biodiversity/birdcount2.webp') }}" alt="Biodiversity">
                            </a>
                            <a href="{{ asset('assets/images/gallery/biodiversity/birdcount3.webp') }}" data-fancybox="gallerytabbing3" data-caption="">
                                <img src="{{ asset('assets/images/gallery/biodiversity/birdcount3.webp') }}" alt="Biodiversity">
                            </a>
                            <a href="{{ asset('assets/images/gallery/biodiversity/SCCCS_Seedball_2025_1.webp') }}" data-fancybox="gallerytabbing3" data-caption="">
                                <img src="{{ asset('assets/images/gallery/biodiversity/SCCCS_Seedball_2025_1.webp') }}" alt="Biodiversity">
                            </a>
                            <a href="{{ asset('assets/images/gallery/biodiversity/SCCCS_Seedball_2025_2.webp') }}" data-fancybox="gallerytabbing3" data-caption="">
                                <img src="{{ asset('assets/images/gallery/biodiversity/SCCCS_Seedball_2025_2.webp') }}" alt="Biodiversity">
                            </a>
                            <a href="{{ asset('assets/images/gallery/biodiversity/Nature-hotography-Winning-Ceremony.webp') }}" data-fancybox="gallerytabbing3" data-caption="">
                                <img src="{{ asset('assets/images/gallery/biodiversity/Nature-hotography-Winning-Ceremony.webp') }}" alt="Biodiversity">
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="gallerytabbing4" role="tabpanel" aria-labelledby="gallery_tabbing4">
                        <div class="gallery_main_box_inner">
                            <a href="{{ asset('assets/images/gallery/social-gatherings/social-gatherings1.webp') }}" data-fancybox="gallerytabbing4" data-caption="">
                                <img src="{{ asset('assets/images/gallery/social-gatherings/social-gatherings1.webp') }}" alt="Social Gatherings">
                            </a>
                            <a href="{{ asset('assets/images/gallery/social-gatherings/social-gatherings2.webp') }}" data-fancybox="gallerytabbing4" data-caption="">
                                <img src="{{ asset('assets/images/gallery/social-gatherings/social-gatherings2.webp') }}" alt="Social Gatherings">
                            </a>
                            <a href="{{ asset('assets/images/gallery/social-gatherings/social-gatherings3.webp') }}" data-fancybox="gallerytabbing4" data-caption="">
                                <img src="{{ asset('assets/images/gallery/social-gatherings/social-gatherings3.webp') }}" alt="Social Gatherings">
                            </a>
                            <a href="{{ asset('assets/images/gallery/social-gatherings/social-gatherings4.webp') }}" data-fancybox="gallerytabbing4" data-caption="">
                                <img src="{{ asset('assets/images/gallery/social-gatherings/social-gatherings4.webp') }}" alt="Social Gatherings">
                            </a>
                            <a href="{{ asset('assets/images/gallery/social-gatherings/social-gatherings5.webp') }}" data-fancybox="gallerytabbing4" data-caption="">
                                <img src="{{ asset('assets/images/gallery/social-gatherings/social-gatherings5.webp') }}" alt="Social Gatherings">
                            </a>
                            <a href="{{ asset('assets/images/gallery/social-gatherings/social-gatherings6.webp') }}" data-fancybox="gallerytabbing4" data-caption="">
                                <img src="{{ asset('assets/images/gallery/social-gatherings/social-gatherings6.webp') }}" alt="Social Gatherings">
                            </a>
                            <a href="{{ asset('assets/images/gallery/social-gatherings/social-gatherings7.webp') }}" data-fancybox="gallerytabbing4" data-caption="">
                                <img src="{{ asset('assets/images/gallery/social-gatherings/social-gatherings7.webp') }}" alt="Social Gatherings">
                            </a>
                            <a href="{{ asset('assets/images/gallery/social-gatherings/social-gatherings8.webp') }}" data-fancybox="gallerytabbing4" data-caption="">
                                <img src="{{ asset('assets/images/gallery/social-gatherings/social-gatherings8.webp') }}" alt="Social Gatherings">
                            </a>
                            <a href="{{ asset('assets/images/gallery/social-gatherings/social-gatherings9.webp') }}" data-fancybox="gallerytabbing4" data-caption="">
                                <img src="{{ asset('assets/images/gallery/social-gatherings/social-gatherings9.webp') }}" alt="Social Gatherings">
                            </a>
                            <a href="{{ asset('assets/images/gallery/social-gatherings/social-gatherings10.webp') }}" data-fancybox="gallerytabbing4" data-caption="">
                                <img src="{{ asset('assets/images/gallery/social-gatherings/social-gatherings10.webp') }}" alt="Social Gatherings">
                            </a>
                            <a href="{{ asset('assets/images/gallery/social-gatherings/social-gatherings11.webp') }}" data-fancybox="gallerytabbing4" data-caption="">
                                <img src="{{ asset('assets/images/gallery/social-gatherings/social-gatherings11.webp') }}" alt="Social Gatherings">
                            </a>
                            <a href="{{ asset('assets/images/gallery/social-gatherings/social-gatherings12.webp') }}" data-fancybox="gallerytabbing4" data-caption="">
                                <img src="{{ asset('assets/images/gallery/social-gatherings/social-gatherings12.webp') }}" alt="Social Gatherings">
                            </a>
                            <a href="{{ asset('assets/images/gallery/social-gatherings/social-gatherings13.webp') }}" data-fancybox="gallerytabbing4" data-caption="">
                                <img src="{{ asset('assets/images/gallery/social-gatherings/social-gatherings13.webp') }}" alt="Social Gatherings">
                            </a>
                            <a href="{{ asset('assets/images/gallery/social-gatherings/social-gatherings14.webp') }}" data-fancybox="gallerytabbing4" data-caption="">
                                <img src="{{ asset('assets/images/gallery/social-gatherings/social-gatherings14.webp') }}" alt="Social Gatherings">
                            </a>
                            <a href="{{ asset('assets/images/gallery/social-gatherings/social-gatherings15.webp') }}" data-fancybox="gallerytabbing4" data-caption="">
                                <img src="{{ asset('assets/images/gallery/social-gatherings/social-gatherings15.webp') }}" alt="Social Gatherings">
                            </a>
                            <!-- <h5>Coming Soon</h5> -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="gallerytabbing5" role="tabpanel" aria-labelledby="gallery_tabbing5">
                        <div class="gallery_main_box_inner">
                            <a href="{{ asset('assets/images/gallery/creatives/biogas-memes.webp') }}" data-fancybox="gallerytabbing5" data-caption="">
                                <img src="{{ asset('assets/images/gallery/creatives/biogas-memes.webp') }}" alt="Symbiosis Society">
                            </a>
                            <a href="{{ asset('assets/images/gallery/creatives/creatives2.webp') }}" data-fancybox="gallerytabbing5" data-caption="">
                                <img src="{{ asset('assets/images/gallery/creatives/creatives2.webp') }}" alt="Symbiosis Society">
                            </a>
                            <a href="{{ asset('assets/images/gallery/creatives/creative3.webp') }}" data-fancybox="gallerytabbing5" data-caption="">
                                <img src="{{ asset('assets/images/gallery/creatives/creative3.webp') }}" alt="Symbiosis Society">
                            </a>
                            <a href="{{ asset('assets/images/gallery/creatives/creative4.webp') }}" data-fancybox="gallerytabbing5" data-caption="">
                                <img src="{{ asset('assets/images/gallery/creatives/creative4.webp') }}" alt="Symbiosis Society">
                            </a>
                            <a href="{{ asset('assets/images/gallery/creatives/creative5.webp') }}" data-fancybox="gallerytabbing5" data-caption="">
                                <img src="{{ asset('assets/images/gallery/creatives/creative5.webp') }}" alt="Symbiosis Society">
                            </a>
                            <a href="{{ asset('assets/images/gallery/creatives/creative6.webp') }}" data-fancybox="gallerytabbing5" data-caption="">
                                <img src="{{ asset('assets/images/gallery/creatives/creative6.webp') }}" alt="Symbiosis Society">
                            </a>
                            <a href="{{ asset('assets/images/gallery/creatives/creative7.webp') }}" data-fancybox="gallerytabbing5" data-caption="">
                                <img src="{{ asset('assets/images/gallery/creatives/creative7.webp') }}" alt="Symbiosis Society">
                            </a>
                            <a href="{{ asset('assets/images/gallery/creatives/creative8.webp') }}" data-fancybox="gallerytabbing5" data-caption="">
                                <img src="{{ asset('assets/images/gallery/creatives/creative8.webp') }}" alt="Symbiosis Society">
                            </a>
                            <a href="{{ asset('assets/images/gallery/creatives/creative9.webp') }}" data-fancybox="gallerytabbing5" data-caption="">
                                <img src="{{ asset('assets/images/gallery/creatives/creative9.webp') }}" alt="Symbiosis Society">
                            </a>
                            <a href="{{ asset('assets/images/gallery/creatives/creative10.webp') }}" data-fancybox="gallerytabbing5" data-caption="">
                                <img src="{{ asset('assets/images/gallery/creatives/creative10.webp') }}" alt="Symbiosis Society">
                            </a>
                            <a href="{{ asset('assets/images/gallery/creatives/creative11.webp') }}" data-fancybox="gallerytabbing5" data-caption="">
                                <img src="{{ asset('assets/images/gallery/creatives/creative11.webp') }}" alt="Symbiosis Society">
                            </a>

                            <a href="{{ asset('assets/images/gallery/creatives/creative12.webp') }}" data-fancybox="gallerytabbing5" data-caption="">
                                <img src="{{ asset('assets/images/gallery/creatives/creative12.webp') }}" alt="Symbiosis Society">
                            </a>
                            <a href="{{ asset('assets/images/gallery/creatives/creative13.webp') }}" data-fancybox="gallerytabbing5" data-caption="">
                                <img src="{{ asset('assets/images/gallery/creatives/creative13.webp') }}" alt="Symbiosis Society">
                            </a>
                            <a href="{{ asset('assets/images/gallery/creatives/creative14.webp') }}" data-fancybox="gallerytabbing5" data-caption="">
                                <img src="{{ asset('assets/images/gallery/creatives/creative14.webp') }}" alt="Symbiosis Society">
                            </a>
                            <a href="{{ asset('assets/images/gallery/creatives/creative15.webp') }}" data-fancybox="gallerytabbing5" data-caption="">
                                <img src="{{ asset('assets/images/gallery/creatives/creative15.webp') }}" alt="Symbiosis Society">
                            </a>
                            <a href="{{ asset('assets/images/gallery/creatives/creative16.webp') }}" data-fancybox="gallerytabbing5" data-caption="">
                                <img src="{{ asset('assets/images/gallery/creatives/creative16.webp') }}" alt="Symbiosis Society">
                            </a>
                            <a href="{{ asset('assets/images/gallery/creatives/creative17.webp') }}" data-fancybox="gallerytabbing5" data-caption="">
                                <img src="{{ asset('assets/images/gallery/creatives/creative17.webp') }}" alt="Symbiosis Society">
                            </a>
                            <a href="{{ asset('assets/images/gallery/creatives/creative18.webp') }}" data-fancybox="gallerytabbing5" data-caption="">
                                <img src="{{ asset('assets/images/gallery/creatives/creative18.webp') }}" alt="Symbiosis Society">
                            </a>
                            <a href="{{ asset('assets/images/gallery/creatives/creative19.webp') }}" data-fancybox="gallerytabbing5" data-caption="">
                                <img src="{{ asset('assets/images/gallery/creatives/creative19.webp') }}" alt="Symbiosis Society">
                            </a>
                            <a href="{{ asset('assets/images/gallery/creatives/creative20.webp') }}" data-fancybox="gallerytabbing5" data-caption="">
                                <img src="{{ asset('assets/images/gallery/creatives/creative20.webp') }}" alt="Symbiosis Society">
                            </a>
                          

                        </div>
                    </div>
                    <div class="tab-pane fade" id="gallerytabbing6" role="tabpanel" aria-labelledby="gallery_tabbing6">
                        <div class="gallery_main_box_inner">
                            <a href="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings1.webp') }}" data-fancybox="gallerytabbing6" data-caption="">
                                <img src="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings1.webp') }}" alt="Symbiosis Society">
                            </a>
                            <a href="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings2.webp') }}" data-fancybox="gallerytabbing6" data-caption="">
                                <img src="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings2.webp') }}" alt="Campus View">
                            </a>
                            <a href="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings3.webp') }}" data-fancybox="gallerytabbing6" data-caption="">
                                <img src="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings3.webp') }}" alt="Student Activities">
                            </a>
                            <a href="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings4.webp') }}" data-fancybox="gallerytabbing6" data-caption="">
                                <img src="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings4.webp') }}" alt="Student Activities">
                            </a>
                            <a href="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings5.webp') }}" data-fancybox="gallerytabbing6" data-caption="">
                                <img src="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings5.webp') }}" alt="Symbiosis Society">
                            </a>
                            <a href="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings6.webp') }}" data-fancybox="gallerytabbing6" data-caption="">
                                <img src="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings6.webp') }}" alt="Campus View">
                            </a>
                            <a href="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings7.webp') }}" data-fancybox="gallerytabbing6" data-caption="">
                                <img src="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings7.webp') }}" alt="Student Activities">
                            </a>
                            <a href="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings8.webp') }}" data-fancybox="gallerytabbing6" data-caption="">
                                <img src="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings8.webp') }}" alt="Student Activities">
                            </a>
                            <a href="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings9.webp') }}" data-fancybox="gallerytabbing6" data-caption="">
                                <img src="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings9.webp') }}" alt="Symbiosis Society">
                            </a>
                            <a href="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings10.webp') }}" data-fancybox="gallerytabbing6" data-caption="">
                                <img src="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings10.webp') }}" alt="Campus View">
                            </a>
                            <a href="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings11.webp') }}" data-fancybox="gallerytabbing6" data-caption="">
                                <img src="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings11.webp') }}" alt="Campus View">
                            </a>
                            <a href="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings12.webp') }}" data-fancybox="gallerytabbing6" data-caption="">
                                <img src="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings12.webp') }}" alt="Campus View">
                            </a>
                            <a href="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings13.webp') }}" data-fancybox="gallerytabbing6" data-caption="">
                                <img src="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings13.webp') }}" alt="Campus View">
                            </a>
                            <a href="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings14.webp') }}" data-fancybox="gallerytabbing6" data-caption="">
                                <img src="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings14.webp') }}" alt="Campus View">
                            </a>
                            <a href="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings15.webp') }}" data-fancybox="gallerytabbing6" data-caption="">
                                <img src="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings15.webp') }}" alt="Campus View">
                            </a>
                            <a href="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings16.webp') }}" data-fancybox="gallerytabbing6" data-caption="">
                                <img src="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings16.webp') }}" alt="Campus View">
                            </a>
                            <a href="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings17.webp') }}" data-fancybox="gallerytabbing6" data-caption="">
                                <img src="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings17.webp') }}" alt="Campus View">
                            </a>
                            <a href="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings18.webp') }}" data-fancybox="gallerytabbing6" data-caption="">
                                <img src="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings18.webp') }}" alt="Campus View">
                            </a>
                            <a href="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings19.webp') }}" data-fancybox="gallerytabbing6" data-caption="">
                                <img src="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings19.webp') }}" alt="Campus View">
                            </a>
                            <a href="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings20.webp') }}" data-fancybox="gallerytabbing6" data-caption="">
                                <img src="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings20.webp') }}" alt="Campus View">
                            </a>
                            <a href="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings21.webp') }}" data-fancybox="gallerytabbing6" data-caption="">
                                <img src="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings21.webp') }}" alt="Campus View">
                            </a>
                            <a href="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings22.webp') }}" data-fancybox="gallerytabbing6" data-caption="">
                                <img src="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings22.webp') }}" alt="Campus View">
                            </a>
                            <a href="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings23.webp') }}" data-fancybox="gallerytabbing6" data-caption="">
                                <img src="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings23.webp') }}" alt="Campus View">
                            </a>
                            <a href="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings24.webp') }}" data-fancybox="gallerytabbing6" data-caption="">
                                <img src="{{ asset('assets/images/gallery/events-and-meetings/events-and-meetings24.webp') }}" alt="Campus View">
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="gallerytabbing7" role="tabpanel" aria-labelledby="gallery_tabbing7">
                        <div class="gallery_main_box_inner">
                            <a href="{{ asset('assets/images/gallery/research-field-work/research-field-work1.webp') }}" data-fancybox="gallerytabbing7" data-caption="">
                                <img src="{{ asset('assets/images/gallery/research-field-work/research-field-work1.webp') }}" alt="Research and field Work">
                            </a>
                            <a href="{{ asset('assets/images/gallery/research-field-work/research-field-work2.webp') }}" data-fancybox="gallerytabbing7" data-caption="">
                                <img src="{{ asset('assets/images/gallery/research-field-work/research-field-work2.webp') }}" alt="Research and field Work">
                            </a>
                            <a href="{{ asset('assets/images/gallery/research-field-work/research-field-work3.webp') }}" data-fancybox="gallerytabbing7" data-caption="">
                                <img src="{{ asset('assets/images/gallery/research-field-work/research-field-work3.webp') }}" alt="Research and field Work">
                            </a>
                            <a href="{{ asset('assets/images/gallery/research-field-work/research-field-work4.webp') }}" data-fancybox="gallerytabbing7" data-caption="">
                                <img src="{{ asset('assets/images/gallery/research-field-work/research-field-work4.webp') }}" alt="Research and field Work">
                            </a>
                            <a href="{{ asset('assets/images/gallery/research-field-work/research-field-work5.webp') }}" data-fancybox="gallerytabbing7" data-caption="">
                                <img src="{{ asset('assets/images/gallery/research-field-work/research-field-work5.webp') }}" alt="Research and field Work">
                            </a>
                            <a href="{{ asset('assets/images/gallery/research-field-work/research-field-work6.webp') }}" data-fancybox="gallerytabbing7" data-caption="">
                                <img src="{{ asset('assets/images/gallery/research-field-work/research-field-work6.webp') }}" alt="Research and field Work">
                            </a>
                            <a href="{{ asset('assets/images/gallery/research-field-work/research-field-work7.webp') }}" data-fancybox="gallerytabbing7" data-caption="">
                                <img src="{{ asset('assets/images/gallery/research-field-work/research-field-work7.webp') }}" alt="Research and field Work">
                            </a>
                            <a href="{{ asset('assets/images/gallery/research-field-work/research-field-work8.webp') }}" data-fancybox="gallerytabbing7" data-caption="">
                                <img src="{{ asset('assets/images/gallery/research-field-work/research-field-work8.webp') }}" alt="Research and field Work">
                            </a>
                            <a href="{{ asset('assets/images/gallery/research-field-work/research-field-work9.webp') }}" data-fancybox="gallerytabbing7" data-caption="">
                                <img src="{{ asset('assets/images/gallery/research-field-work/research-field-work9.webp') }}" alt="Research and field Work">
                            </a>
                            <a href="{{ asset('assets/images/gallery/research-field-work/research-field-work10.webp') }}" data-fancybox="gallerytabbing7" data-caption="">
                                <img src="{{ asset('assets/images/gallery/research-field-work/research-field-work10.webp') }}" alt="Research and field Work">
                            </a>
                            <a href="{{ asset('assets/images/gallery/research-field-work/research-field-work11.webp') }}" data-fancybox="gallerytabbing7" data-caption="">
                                <img src="{{ asset('assets/images/gallery/research-field-work/research-field-work11.webp') }}" alt="Research and field Work">
                            </a>
                            <a href="{{ asset('assets/images/gallery/research-field-work/research-field-work12.webp') }}" data-fancybox="gallerytabbing7" data-caption="">
                                <img src="{{ asset('assets/images/gallery/research-field-work/research-field-work12.webp') }}" alt="Research and field Work">
                            </a>
                            <a href="{{ asset('assets/images/gallery/research-field-work/research-field-work13.webp') }}" data-fancybox="gallerytabbing7" data-caption="">
                                <img src="{{ asset('assets/images/gallery/research-field-work/research-field-work13.webp') }}" alt="Research and field Work">
                            </a>
                            <a href="{{ asset('assets/images/gallery/research-field-work/research-field-work14.webp') }}" data-fancybox="gallerytabbing7" data-caption="">
                                <img src="{{ asset('assets/images/gallery/research-field-work/research-field-work14.webp') }}" alt="Research and field Work">
                            </a>
                            <a href="{{ asset('assets/images/gallery/research-field-work/research-field-work15.webp') }}" data-fancybox="gallerytabbing7" data-caption="">
                                <img src="{{ asset('assets/images/gallery/research-field-work/research-field-work15.webp') }}" alt="Research and field Work">
                            </a>
                        </div>
                    </div>
                    <!-- <div class="tab-pane fade" id="gallerytabbing8" role="tabpanel" aria-labelledby="gallery_tabbing8">
                        <div class="gallery_main_box_inner">
                            <a href="{{ asset('assets/images/about-symbiosis-society.webp') }}" data-fancybox="gallery" data-caption="">
                                <img src="{{ asset('assets/images/about-symbiosis-society.webp') }}" alt="Symbiosis Society">
                            </a>
                            <a href="{{ asset('assets/images/about-symbiosis-society.webp') }}" data-fancybox="gallery" data-caption="">
                                <img src="{{ asset('assets/images/about-symbiosis-society.webp') }}" alt="Campus View">
                            </a>
                            <a href="{{ asset('assets/images/about-symbiosis-society.webp') }}" data-fancybox="gallery" data-caption="">
                                <img src="{{ asset('assets/images/about-symbiosis-society.webp') }}" alt="Student Activities">
                            </a>
                            <a href="{{ asset('assets/images/about-symbiosis-society.webp') }}" data-fancybox="gallery" data-caption="">
                                <img src="{{ asset('assets/images/about-symbiosis-society.webp') }}" alt="Student Activities">
                            </a>
                            <a href="{{ asset('assets/images/about-symbiosis-society.webp') }}" data-fancybox="gallery" data-caption="">
                                <img src="{{ asset('assets/images/about-symbiosis-society.webp') }}" alt="Symbiosis Society">
                            </a>
                            <a href="{{ asset('assets/images/about-symbiosis-society.webp') }}" data-fancybox="gallery" data-caption="">
                                <img src="{{ asset('assets/images/about-symbiosis-society.webp') }}" alt="Campus View">
                            </a>
                            <a href="{{ asset('assets/images/about-symbiosis-society.webp') }}" data-fancybox="gallery" data-caption="">
                                <img src="{{ asset('assets/images/about-symbiosis-society.webp') }}" alt="Student Activities">
                            </a>
                            <a href="{{ asset('assets/images/about-symbiosis-society.webp') }}" data-fancybox="gallery" data-caption="">
                                <img src="{{ asset('assets/images/about-symbiosis-society.webp') }}" alt="Student Activities">
                            </a>
                            <a href="{{ asset('assets/images/about-symbiosis-society.webp') }}" data-fancybox="gallery" data-caption="">
                                <img src="{{ asset('assets/images/about-symbiosis-society.webp') }}" alt="Symbiosis Society">
                            </a>
                            <a href="{{ asset('assets/images/about-symbiosis-society.webp') }}" data-fancybox="gallery" data-caption="">
                                <img src="{{ asset('assets/images/about-symbiosis-society.webp') }}" alt="Campus View">
                            </a>
                            <a href="{{ asset('assets/images/about-symbiosis-society.webp') }}" data-fancybox="gallery" data-caption="">
                                <img src="{{ asset('assets/images/about-symbiosis-society.webp') }}" alt="Student Activities">
                            </a>
                            <a href="{{ asset('assets/images/about-symbiosis-society.webp') }}" data-fancybox="gallery" data-caption="">
                                <img src="{{ asset('assets/images/about-symbiosis-society.webp') }}" alt="Student Activities">
                            </a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
      
</main>
@include('footer')

