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
                        <h1>About SIU</h1>
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
                <li>About</li> /
                <li>About SIU</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->

    <!-- About Start -->
    <div class="aboutus_siu_page">
        <div class="container">
            <div class="aboutinner_content">
                <div class="heading">About SIU</div>
                <p>Symbiosis International (Deemed University) is a multi-disciplinary university offering its students and faculty a vibrant learning ecosystem designed around its multi-cultural and innovative ethos. Established in 1971 by Prof. Dr. S.B. Mujumdar, is a ‘home away from home’ for International students. The Institution is based on the principles of Vedic thought of “World as One Family”. The University’s name fittingly captures the quintessence of the relationship with International students; a mutually beneficial bond between India and the International student community. Symbiosis is committed to building international understanding by offering quality education, and is resplendent of the activities and students of more than 85 countries.</p>
                <p>Today the university has its campuses spread across four states and 6 cities in India. All the university campuses epitomise the Symbiosis vision, ‘Promoting International Understanding through Quality Education’ and are a beehive of international students from all across the globe, being privy to Indian culture and hospitality.</p>
            </div>
        </div>
    </div>
    <div class="aboutus_inner_section">
        <div class="container">
            <p>The university is awarded the Category-I status by UGC, and an ‘A’ grade by NAAC with a score 3.58 on 4. The university is also ranked 38th in the Universities Category of NIRF 2021, and ranked tenth in the category of ‘University & Deemed to be University (Private-Self-Financed)’ in Atal Ranking of Institutions on Innovation Achievement (ARIIA) 2021. Globally the Times Higher Education (THE) World University Ranking 2022 has ranked Symbiosis International University amongst the top 800 – 1000 Universities in the World. The University is also ranked in the top 350 Universities in Asia by the QS Regional Rankings, and is the only Indian university to have received the Asia Pacific Quality Label.</p> 
            <p>The university is a pioneer in liberal arts education and has a strong School for Liberal Arts with departments in languages, literature, music, philosophy, indology, art, dance, theatre, education, anthropology, political science, international relations, film studies, peace and conflict studies, mathematics and statistics, pure and applied sciences, sociology, economics, sports, etc. While offering India’s pioneering 4 year honours programme, it also offers students across SIU institutes the opportunity to study courses of liberal arts, giving them a unique edge by focusing on 360° critical thinking and innovative design thinking, with the hope of finding innovative solutions to societal problems. Innovation and entrepreneurship programmes, an incubation centre and seed money for student /faculty research completes the learning ecosystem. Students and faculty are provided with opportunities to pursue their international academic interests to the fullest, be it through academic exchanges, or exposure to international conferences, seminars, workshops, and other resources.</p>
            <p>Recently, the University has established the Symbiosis Medical College for Women. The medical college and its attached Symbiosis University Hospital and Research Centre have state-of-the-art infrastructure and facilities.</p>
            <p>Symbiosis International (Deemed University) is committed towards generation of knowledge, innovations and its contribution towards the development of the Nation.</p>
        </div>
    </div>
    <!-- About End -->

      
</main>
@include('footer')

