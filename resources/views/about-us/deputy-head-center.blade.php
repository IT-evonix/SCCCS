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
                        <h1>Om Prakash</h1>
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
                <li>Leadership</li> /
                <li>Om Prakash</li>
            </ul>
        </div>
     </div>
    <!-- Breadcrumb End -->

    <!-- About Start -->
    <div class="leadership_section">
        <div class="container">
           <div class="leadership_inner">
                <div class="head_img">
                    <img src="{{ asset('assets/images/inner-pages/Deputy_Head.webp') }}" alt="">
                    <div class="broad_areas_box">
                        <h6>Broad Areas</h6>
                        <ul>
                            <li>Microbial Ecology and Diversity</li>
                            <li>Public and Environmental health</li>
                            <li>Anaerobic Microbiology</li>
                            <li>Global warming, Climate change and Carbon sequestration</li>
                            <li>Archaeal bioinoculants</li>
                        </ul>
                    </div>
                </div>
                <div class="profile_content">
                    <div class="profile_intro">
                        <div class="div">
                            <div class="profile_heading heading">
                                Om Prakash <Span>Ph.D</Span>
                            </div>
                            <div class="profile_position">Deputy Head</div>
                        </div>
                        <div class="emailbox">
                            <a href="mailto:dyhead_scccs@siu.edu.in">dyhead_scccs@siu.edu.in</a>
                        </div>
                    </div>
                    <p>Dr. Om Prakash serves as Deputy Head and Associate Professor at the Symbiosis Centre for Climate Change and Sustainability (SCCCS), Symbiosis International (Deemed University), Pune. Over the past two decades, his research has explored the boundaries of anaerobic microbiology, climate systems, greenhouse gas dynamics, environmental remediation, and public health.</p>        
                    <p>Prior to joining Symbiosis, Dr. Prakash spent eleven years as Curator of the Anaerobic Facility at the National Centre for Microbial Resource (NCMR), National Centre for Cell Science (NCCS), Pune. He holds an M.Sc. from Dr. RML Avadh University and a Ph.D. in Microbiology from the University of Delhi, complemented by five years of postdoctoral training at Florida State University and Georgia Institute of Technology, USA, specializing in anaerobic systems and environmental health.</p>        
                    <p>He currently chairs the Subcommittee on Methanogenic Archaea of the International Committee on Systematics of Prokaryotes (ICSP), UK, collaborating with ten experts across eight countries. In 2016, he received the Senior INSA Visiting Fellowship in Microbial Ecology to advance Indo-Israel collaboration in wastewater treatment and coordinated India's participation in the Global Antimicrobial Resistance (AMR) project, involving 47 laboratories from 20 countries. That same year, he was awarded the ICMR Long-term Fellowship for research in human gut ecology, conducting bottom-up proteomics work with the Translational Science Laboratory at Florida State University's College of Medicine.</p>        
                    <p>Dr. Prakash has contributed over 80 research articles to high-impact journals, accumulating more than 5,000 citations. His work has been supported by the Department of Biotechnology (DBT) and Department of Science and Technology (DST), with his climate change and bioenergy research featured by DBT on World Environment Day (2021). At NCCS, he established the Microbiome Bank of NCMR, curating over 30 obligate anaerobe species and discovering Geobacter daltonii, the first documented anoxic benzene degrader with uranium and iron-reducing capabilities.</p>        
                    <p>He founded the Indian Landfill Leachate Network Initiative (ILLNI), a volunteer-driven consortium comprising over 35 Indian institutions that investigates the impacts of landfills on climate, contamination, and public health. His team has developed high-throughput cultivation methods for uncultured bacteria and archaea, designed for resource-limited laboratories, in collaboration with NEERI-Nagpur and the University of Illinois.</p>        
                    <p>Dr. Prakash has mentored over 45 undergraduate and postgraduate students from institutions such as Florida State University and Florida A&M University (FAMU), where he received the Best Mentor Award in 2017. He also received the Young Achiever Award from the Institute of Agricultural Sciences, Banaras Hindu University, that year.</p>        
                    <p>He serves on the editorial boards of Scientific Reports, BMC Microbiology, Journal of Environmental Biology, Indian Journal of Microbiology, and Microsphere, and as a guest editor for Frontiers in Microbiology. Additionally, he holds executive board positions with the Indian Network for Soil Contamination Research (INSCR), the Microbiology Literacy Forum, and the United Science Foundation. He is a founding member and Secretary of the Society of Anaerobic Microbiologists of India.</p>
                    <p>Dr. Prakash's work integrates microbial ecology with climate science, offering insights into the microbial dimensions of environmental sustainability and planetary health.</p>        
                </div>
                <div class="socialmedia_box">
                    <a target="_blank" href="https://www.linkedin.com/in/dr-om-prakash-sharma-3669a01a/"><img src="{{ asset('assets/images/inner-pages/linkedin.webp') }}" alt=""></a>
                    <a target="_blank" href="https://scholar.google.com/citations?user=C0yRzooAAAAJ&hl=en&oi=ao"><img src="{{ asset('assets/images/inner-pages/scholar-google.webp') }}" alt=""></a>
                    <a target="_blank" href="https://orcid.org/0000-0002-6568-0567"><img src="{{ asset('assets/images/inner-pages/domain.webp') }}" alt=""></a>
                </div>
           </div>
        </div>
    </div>
    <!-- About End -->
    <!-- vision and mission start -->
     
</main>
@include('footer')

