    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const rows = document.querySelectorAll('.tablebody tr');
        rows.forEach(function (row, index) {
            const th = row.querySelector('th[scope="row"]');
            if (th) {
                th.textContent = index + 1;
            }
        });
    });
</script>
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
                            <h1>Publications</h1>
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
                    <li>Publications</li>
                </ul>
            </div>
         </div>
        <!-- Breadcrumb End -->
    
        <div class="publication_section d-none">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="publication-tab4" data-bs-toggle="tab" data-bs-target="#publication4" type="button" role="tab" aria-controls="publication4" aria-selected="true">2025</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="publication-tab3" data-bs-toggle="tab" data-bs-target="#publication3" type="button" role="tab" aria-controls="publication3" aria-selected="false">2024</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="publication-tab2" data-bs-toggle="tab" data-bs-target="#publication2" type="button" role="tab" aria-controls="publication2" aria-selected="false">2023</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="publication-tab1" data-bs-toggle="tab" data-bs-target="#publication1" type="button" role="tab" aria-controls="publication1" aria-selected="false">2022</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="publication4" role="tabpanel" aria-labelledby="publication-tab4">
                                Coming Soon
                            </div>
                            <div class="tab-pane fade" id="publication3" role="tabpanel" aria-labelledby="publication-tab3">
                                <div class="publication_main">
                                    <ul class="selected_publications_ul">
                                        <li>Yogesh S Nimonkar, Dilip R Ranade, Aruna Poojary, Manjusha S Dake, Om Prakash (2024). “Comparison of Taxonomic Resolutions of Various Typing Methods for Clostridium and Paraclostridium Species Isolated from Landfill Leachate”. Indian Journal of Microbiology (Pages 1-10)</li>
                                        <li>Om Prakash, Sahab Ram Dewala, Yogesh Nimonkar, Ashvini Chauhan, Amit Yadav, Dheeraj P Dhotre (2024). “Culture-based and culture-independent approach for the study of the methanogens and obligate anaerobes from different landfill sites”. Frontiers in Microbiology (Vol. 14, Pages 1273037)</li>
                                        <li>Aehtesham Hussain, Umera Patwekar, Dattatray S Mongad, Yogesh Nimonkar, Swapnil Mundhe, Dhiraj Paul, Om Prakash, Yogesh S Shouche (2024). “Functional antagonism and insights into the biosynthetic potential of human gut-derived microbes”. International Journal of Antimicrobial Agents Volume (Vol. 63, Issue 3, Pages 107091)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="publication2" role="tabpanel" aria-labelledby="publication-tab2">
                                <div class="publication_main">
                                    <ul class="selected_publications_ul">
                                        <li>Vaibhav Kadam, Pooja Singh, Yogesh Patil, <b>Om Prakash</b>, Nikita Berawala (2023). Effect of biosurfactant on thiocyanate degradation by automobile service station soil isolates Brachybacterium sp. and Bacillus albus. Bioremediation Journal. (Pages 1-11)</li>
                                        <li>Krishna K Yadav, Yogesh Nimonkar, Stefan J Green, Sahabram Dewala, Manikprabhu N Dhanorkar, Rohit Sharma, Vinay R Rale, <b>Om Prakash</b> (2023). Anaerobic growth and drug susceptibility of versatile fungal pathogen Scedosporium apiospermum. Iscience. 2023 Nov 17; (Vol.26, Issue 11)</li>
                                        <li>Inderjeet Tyagi,  Koamud Tyagi,  Vipin Gupta,  Ritesh Dutta, Nirjara Singhvi, Vikas Kumar, Rakesh Bhutiani, <b>Om Prakash</b> (2023). Microbial diversity characterizations, associated pathogenesis and antimicrobial resistance profiling of Najafgarh drain. Environmental Research. (Vol. 238, Page 117140)</li>
                                        <li>Divyanshu Pawar, Prerana Chandak, Chirchom Luithui, Rucharani Kale, Prakash Rao, Om Prakash (2023). Campus Biodiversity Management: A case-specific review of Symbiosis International University. Microsphere Journal. (Vol.02, Issue 1, Pages 127-137)</li>
                                        <li>Sahabram Dewala, Rahul Bodkhe, Yogesh Nimonkar, Om Prakash, Vineet Ahuja, Govind K Makharia, Yogesh S Shouche (2023). Human small-intestinal gluten-degrading bacteria and its potential implication in celiac disease. Journal of Biosciences. (Vol. 48, Issue 3, Page 18)</li>
                                        <li>Yogesh S Nimonkar, Swapnil Kajale, Manjusha Dake, Om Prakash (2023). Draft Genome Sequence of Ignatzschineria sp. Strain RMDPL8A, a Bacterium Isolated from Landfill Leachate. Microbiology Resource Announcements. (e00307-23)</li>
                                        <li>Om Prakash, Jeremy A Dodsworth, Xiuzhu Dong, James G Ferry, Stephane L’Haridon, Hiroyuki Imachi, Yoichi Kamagata, Sung-Keun Rhee, Isita Sagar, Viktoria Shcherbakova, Dirk Wagner, William B Whitman (2023). Proposed minimal standards for description of methanogenic archaea. International Journal of Systematic and Evolutionary Microbiology. (Vol. 73, Issue 4, Page 005500)</li>
                                        <li>Asmita Pramanic, Shreyansh Sharma, Manikprabhu Dhanorkar, Om Prakash, Pooja Singh (2023). Endophytic microbiota of floating aquatic plants: recent developments and environmental prospects. World Journal of Microbiology and Biotechnology. (Vol. 39, Issue 4, Page No. 96)</li>
                                        <li>Jeremy A Dodsworth, Om Prakash (2023). International Committee on Systematics of Prokaryotes: subcommittee on the taxonomy of methanogenic archaea. Minutes of the closed, online meetings held 24 September 2020 and 8 October 2020. International journal of systematic and evolutionary microbiology. (Vol. 73, Issue 2, Page 005775)</li>
                                        <li>Amruta Joglekar, Yogesh Nimonkar, Abhay Bajaj, Om Prakash (2023). Resolution of inter/intraspecies variation in Weissella group requires multigene analysis and functional characterization. Journal of Basic Microbiology. (Vol. 63, Issue 2, Pages 140 – 155)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="publication1" role="tabpanel" aria-labelledby="publication-tab1">
                                Coming Soon
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="">
                <div class="row mt-5">
                    <div class="col-md-12">
                        <a target="_blank" href="https://www.downtoearth.org.in/waste/manipur-s-ukhrul-faces-a-gargantuan-waste-problem-here-is-how-it-can-solve-it-84282" class="pdf_box">
                            <span class="pdficon_box">
                                <img src="https://cdn-icons-png.flaticon.com/512/16168/16168654.png" alt="">
                            </span>
                            <span class="pdficon_text">
                                View Artical
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <div class="publication_section">
        <div class="container">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead class="tableheader align-middle">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Journal</th>
                            <th scope="col">Authors from SCCCS</th>
                            <th scope="col">Year</th>
                        </tr>
                    </thead>
                    <tbody class="tablebody">
     <tr>
    <th scope="row"></th>
    <td>
        <a target="_blank" href="https://www.mdpi.com/1996-1073/19/15/3553">
The Influence of Biochar Pretreatment on Cell Immobilisation and Biochar Augmentation During Anaerobic Digestion of Cellulose</a>
    </td>
    <td>MDPI Energies</td>
    <td>Om Prakash</td></td>
    <td>2026</td>
</tr>
    
    <tr>
    <th scope="row"></th>
    <td>
        <a target="_blank" href="https://www.tandfonline.com/doi/full/10.1080/19490976.2026.2694242?scroll=top&needAccess=true">
Gut microbiomes of tribal communities in India vary with dairy and grain consumption
</a>
    </td>
    <td> Gut Microbes</td>
    <td>Abhijit Kulkarni</td></td>
    <td>2026</td>
</tr>
                        
<tr>
    <th scope="row"></th>
    <td>
        <a target="_blank" href="http://www.jeb.co.in./journal_issues/202603_mar26_spl/paper_11.pdf">
            16S rRNA gene sequence-based metagenomics assessment of microbial community structure and hospital wastewater chemical impacts on urban river
        </a>
    </td>
    <td> Environmental Biology</td>
    <td>Om Prakash</td>
    <td>2026</td>
</tr>
                              <tr>
                            <th scope="row"></th>
                            <td>
                                <a target="_blank" href="https://link.springer.com/article/10.1007/s43621-026-03202-z">
                                    A critical review of virtual power plants for distributed renewable energy projects in the built environment                                </a>
                            </td>
                            <td>Discover Sustainability</td>
                            <td>Prakash Rao</td>
                            <td>2026</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <a target="_blank" href="https://doi.org/10.1186/s40643-026-01021-8">
                                    Decolourizing distillery spent wash using fungal biotechnologies: from pollution to potential
                                </a>
                            </td>
                            <td>Bioresources and Bioprocessing</td>
                            <td>Om Prakash</td>
                            <td>2026</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>
                                <a target="_blank" href="https://doi.org/10.1007/s43621-026-02841-6">
                                    Sustainable practices to reduce carbon footprint and nurture biodiversity of academic campuses
                                </a>
                            </td>
                            <td>Discover Sustainability</td>
                            <td>Om Prakash, Prakash Rao</td>
                            <td>2026</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>
                                <a target="_blank" href="https://doi.org/10.1080/26395940.2026.2648195">
                                    Fate and transformation of pharmaceutical residues: environment and human health implications
                                </a>
                            </td>
                            <td>Environmental Pollutants and Bioavailability</td>
                            <td>Om Prakash, Prakash Rao, Ankita Chopra</td>
                            <td>2026</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td><a target="_blank" href="https://doi.org/10.1007/s44282-025-00307-0">Evolution of environmental policy and sustainable marketing research using bibliometric methods</a></td>
                            <td>Discover Global Society</td>
                            <td>Prakash Rao</td>
                            <td>2025</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td><a target="_blank" href="https://doi.org/10.1007/s43621-025-02133-5">Key factors determining pro-environmental behaviour to rejuvenate urban rivers: a socio-psychological perspective and intervention strategies</a></td>
                            <td>Discover Sustainability</td>
                            <td>Prakash Rao</td>
                            <td>2025</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td><a target="_blank" href="https://www.cambridgescholars.com/product/978-1-0364-4085-5">Anaerobic Way of Life and Tools Used in Cultivation and Preservation of Obligate Anaerobes</a></td>
                            <td>Cambridge Scholars Publishing</td>
                            <td>Om Prakash</td>
                            <td>2025</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td><a target="_blank" href="https://www.cambridgescholars.com/product/978-1-0364-4085-5">Clinical Significance of Archaea in Human Health and Diseases</a></td>
                            <td>Cambridge Scholars Publishing</td>
                            <td>Om Prakash</td>
                            <td>2025</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td><a target="_blank" href="https://www.cambridgescholars.com/product/978-1-0364-4085-5">Fungi of Clinical Significance Tolerating Anaerobic and Microaerophilic Conditions</a></td>
                            <td>Cambridge Scholars Publishing</td>
                            <td>Om Prakash</td>
                            <td>2025</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td><a target="_blank" href="https://www.cambridgescholars.com/product/978-1-0364-4085-5">Human Gut Microbiota, Anaerobic Probiotics and Faecal Microbiota Transplant (FMT)</a></td>
                            <td>Cambridge Scholars Publishing</td>
                            <td>Om Prakash</td>
                            <td>2025</td>
                        </tr>
                        <tr>
                            <th scope="row">10</th>
                            <td><a target="_blank" href="https://www.cambridgescholars.com/product/978-1-0364-4085-5">Oral Microbiome and Role of Anaerobes in Periodontal Disease</a></td>
                            <td>Cambridge Scholars Publishing</td>
                            <td>Om Prakash</td>
                            <td>2025</td>
                        </tr>
                        <tr>
                            <th scope="row">11</th>
                            <td><a target="_blank" href="https://link.springer.com/article/10.1007/s12088-025-01495-8">Biological Approaches to Carbon Sequestration and Bioenergy Production</a></td>
                            <td>Indian Journal of Microbiology</td>
                            <td>Om Prakash</td>
                            <td>2025</td>
                        </tr>
                        <tr>
                            <th scope="row">12</th>
                            <td><a target="_blank" href="https://www.scopus.com/record/display.uri?eid=2-s2.0-105001531951&origin=recordpage">Global perspectives on residual antibiotics: environmental challenges and trends</a></td>
                            <td>Discover Sustainability</td>
                            <td>Om Prakash</td>
                            <td>2025</td>
                        </tr>
                        <tr>
                            <th scope="row">13</th>
                            <td><a target="_blank" href="https://enviromicro-journals.onlinelibrary.wiley.com/doi/10.1111/1758-2229.70108?af=R">The Study of Microbial Physiology Under Microoxic Conditions Is Critical but Neglected</a></td>
                            <td>Environmental Microbiology Reports</td>
                            <td>Om Prakash</td>
                            <td>2025</td>
                        </tr>
                        <tr>
                            <th scope="row">14</th>
                            <td><a target="_blank" href="https://journals.asm.org/doi/full/10.1128/aem.01728-24">Optimizing experimental conditions: the role of buffered environments in microbial isolation, physiological studies, and taxonomic characterization</a></td>
                            <td>Applied and Environmental Microbiology</td>
                            <td>Om Prakash</td>
                            <td>2025</td>
                        </tr>
                        <tr>
                            <th scope="row">15</th>
                            <td><a target="_blank" href="https://www.scopus.com/record/display.uri?eid=2-s2.0-105003465197&origin=recordpage">Evaluation of Sensory Properties and Short-Chain Fatty Acid Production in Fermented Soymilk on Addition of Fructooligosaccharides and Raffinose Family of Oligosaccharides</a></td>
                            <td>Fermentation</td>
                            <td>Om Prakash</td>
                            <td>2025</td>
                        </tr>
                        <tr>
                            <th scope="row">16</th>
                            <td><a target="_blank" href="https://www.scopus.com/record/display.uri?eid=2-s2.0-85214987490&origin=recordpage">Addressing the Climate Crisis: The Urgent Need for Sustainable Resource Management</a></td>
                            <td>Journal of Environmental Biology</td>
                            <td>Om Prakash</td>
                            <td>2025</td>
                        </tr>
                        <tr>
                            <th scope="row">17</th>
                            <td><a target="_blank" href="https://www.scopus.com/record/display.uri?eid=2-s2.0-85181529635&origin=recordpage">Comparison of Taxonomic Resolutions of Various Typing Methods for Clostridium and Paraclostridium Species Isolated from Landfill Leachate</a></td>
                            <td>Indian Journal of Microbiology</td>
                            <td>Om Prakash</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">18</th>
                            <td><a href="https://www.scopus.com/record/display.uri?eid=2-s2.0-85186207157&origin=recordpage">Temporal assessment of emission inventory model for Indian heavy commercial vehicle segment: A top-down approach</a></td>
                            <td>International Journal of Transportation Science and Technology</td>
                            <td>Prakash Rao</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">19</th>
                            <td><a target="_blank" href="https://www.scopus.com/record/display.uri?eid=2-s2.0-85211595958&origin=recordpage">Analysing the factors of bus transport operations influencing the energy consumption of electric buses in real world for sustainable transport strategies</a></td>
                            <td>International Journal of Energy Sector Management</td>
                            <td>Prakash Rao</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">20</th>
                            <td><a target="_blank" href="https://www.scopus.com/record/display.uri?eid=2-s2.0-85203300325&origin=recordpage">Biochar-enhanced soilless farming: a sustainable solution for modern agriculture</a></td>
                            <td>Mitigation and Adaptation Strategies for Global Change</td>
                            <td>Ankita Chopra, Prakash Rao, Om Prakash</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">21</th>
                            <td><a target="_blank" href="https://www.scopus.com/pages/publications/85189081786">Exploring the diversity of vaginal microbiota between healthy women and cervical cancer patients in India</a></td>
                            <td>Journal of Medical Microbiology</td>
                            <td>Prakash Rao</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">22</th>
                            <td><a target="_blank" href="https://www.scopus.com/inward/record.uri?eid=2-s2.0-85185266012&doi=10.1016%2fj.ijantimicag.2024.107091&partnerID=40&md5=f80a94edcb863c50c0cf1744b1981c5e">Functional antagonism and insights into the biosynthetic potential of human gut-derived microbes</a></td>
                            <td>International Journal of Antimicrobial Agents</td>
                            <td>Om Prakash</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">23</th>
                            <td><a target="_blank" href="https://www.frontiersin.org/journals/conservation-science/articles/10.3389/fcosc.2024.1383370/full">Preserving earth's flora in the 21st century: climate, biodiversity, and global change factors since the mid-1940s</a></td>
                            <td>Frontiers in Conservation Science</td>
                            <td>Om Prakash</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">24</th>
                            <td><a target="_blank" href="https://www.scopus.com/inward/record.uri?eid=2-s2.0-85181529635&doi=10.1007%2fs12088-023-01179-1&partnerID=40&md5=4b2ca5f326e6e8147fff7023ce7ee14f">Comparison of Taxonomic Resolutions of Various Typing Methods for Clostridium and Paraclostridium Species Isolated from Landfill Leachate</a></td>
                            <td>Indian Journal of Microbiology</td>
                            <td>Om Prakash</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">25</th>
                            <td><a target="_blank" href="https://www.scopus.com/inward/record.uri?eid=2-s2.0-85200538033&doi=10.1016%2fj.xpro.2024.103247&partnerID=40&md5=82dbb4704601536db014ce76219d6736">Protocol for enriching, isolating, and testing drug susceptibility of facultative anaerobic fungi</a></td>
                            <td>STAR Protocols</td>
                            <td>Om Prakash</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">26</th>
                            <td><a target="_blank" href="https://www.scopus.com/inward/record.uri?eid=2-s2.0-85174620290&doi=10.1080%2f10889868.2023.2269193&partnerID=40&md5=6bdbdaabe30544c3583b0d85212ab7df">Effect of biosurfactant on thiocyanate degradation by automobile service station soil isolates Brachybacterium sp. and Bacillus albus</a></td>
                            <td>Bioremediation Journal</td>
                            <td>Om Prakash</td>
                            <td>2023</td>
                        </tr>
                        <tr>
                            <th scope="row">27</th>
                            <td><a target="_blank" href="https://www.scopus.com/inward/record.uri?eid=2-s2.0-85166392120&doi=10.1128%2fmra.00307-23&partnerID=40&md5=036c9676acac7cfb4738a1442ce38cba">Draft Genome Sequence of Ignatzschineria sp. Strain RMDPL8A, a Bacterium Isolated from Landfill Leachate</a></td>
                            <td>Microbiology Resource Announcements</td>
                            <td>Om Prakash</td>
                            <td>2023</td>
                        </tr>
                        <tr>
                            <th scope="row">28</th>
                            <td><a target="_blank" href="https://www.scopus.com/inward/record.uri?eid=2-s2.0-85153486926&doi=10.1099%2fijsem.0.005500&partnerID=40&md5=7518b2c0c744187fa7334b8fddfc89d3">Proposed minimal standards for description of methanogenic archaea</a></td>
                            <td>International Journal of Systematic and Evolutionary Microbiology</td>
                            <td>Om Prakash</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">29</th>
                            <td><a target="_blank" href="https://www.scopus.com/inward/record.uri?eid=2-s2.0-85147895475&doi=10.1007%2fs11274-023-03543-1&partnerID=40&md5=333f650aecda1c9e1380a816efb44dd2">Endophytic microbiota of floating aquatic plants: recent developments and environmental prospects</a></td>
                            <td>World Journal of Microbiology and Biotechnology</td>
                            <td>Om Prakash</td>
                            <td>2023</td>
                        </tr>
                        <tr>
                            <th scope="row">30</th>
                            <td><a target="_blank" href="https://www.scopus.com/inward/record.uri?eid=2-s2.0-85176565854&doi=10.1016%2fj.isci.2023.108304&partnerID=40&md5=45f68e168615c15e2b1bbc3f17ce1bb2">Anaerobic growth and drug susceptibility of versatile fungal pathogen Scedosporium apiospermum</a></td>
                            <td>iScience</td>
                            <td>Om Prakash</td>
                            <td>2023</td>
                        </tr>
                        <tr>
                            <th scope="row">31</th>
                            <td><a target="_blank" href="https://www.scopus.com/inward/record.uri?eid=2-s2.0-85163074668&doi=10.1007%2fs12038-023-00337-3&partnerID=40&md5=e9ff7289a999e3ff9c800afa458e3986">Human small-intestinal gluten-degrading bacteria and its potential implication in celiac disease</a></td>
                            <td>Journal of Biosciences</td>
                            <td>Om Prakash</td>
                            <td>2023</td>
                        </tr>
                        <tr>
                            <th scope="row">32</th>
                            <td><a target="_blank" href="https://www.scopus.com/inward/record.uri?eid=2-s2.0-85172373662&doi=10.1016%2fj.envres.2023.117140&partnerID=40&md5=629faeecddf2af3284a242e088469e41">Microbial diversity characterizations, associated pathogenesis and antimicrobial resistance profiling of Najafgarh drain</a></td>
                            <td>Environmental Research</td>
                            <td>Om Prakash</td>
                            <td>2023</td>
                        </tr>
                        <tr>
                            <th scope="row">33</th>
                            <td><a target="_blank" href="https://www.scopus.com/inward/record.uri?eid=2-s2.0-85141380381&doi=10.1002%2fjobm.202200357&partnerID=40&md5=3f65401c67cedd77edb8b23fbd5ff09c">Resolution of inter/intraspecies variation in Weissella group requires multigene analysis and functional characterization</a></td>
                            <td>Journal of Basic Microbiology</td>
                            <td>Om Prakash</td>
                            <td>2022</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--    <div class="publication_section">-->
    <!--        <div class="container">-->
    <!--            <div class="table-responsive">-->
    <!--                <table class="table align-middle">-->
    <!--                    <thead class="tableheader align-middle">-->
    <!--                        <tr>-->
    <!--                            <th scope="col">#</th>-->
    <!--                            <th scope="col">Title</th>-->
    <!--                            <th scope="col">Journal</th>-->
    <!--                            <th scope="col">Authors from SCCCS</th>-->
    <!--                            <th scope="col">Year</th>-->
    <!--                        </tr>-->
    <!--                    </thead>-->
    <!--                    <tbody class="tablebody">-->
    <!--                        <tr>-->
    <!--    <th scope="row">3</th>-->
    <!--    <td>-->
    <!--        <a target="_blank" href="https://doi.org/10.1186/s40643-026-01021-8">-->
    <!--            Decolourizing distillery spent wash using fungal biotechnologies: from pollution to potential-->
    <!--        </a>-->
    <!--    </td>-->
    <!--    <td>Bioresources and Bioprocessing</td>-->
    <!--    <td>Om Prakash</td>-->
    <!--    <td>2026</td>-->
    <!--</tr>-->
    <!--                        <tr>-->
    <!--    <th scope="row">2</th>-->
    <!--    <td>-->
    <!--        <a target="_blank" href="https://doi.org/10.1007/s43621-026-02841-6">-->
    <!--            Sustainable practices to reduce carbon footprint and nurture biodiversity of academic campuses-->
    <!--        </a>-->
    <!--    </td>-->
    <!--    <td>Discover Sustainability</td>-->
    <!--    <td>Om Prakash, Prakash Rao</td>-->
    <!--    <td>2026</td>-->
    <!--</tr>-->
    <!--                        <tr>-->
    <!--    <th scope="row">1</th>-->
    <!--    <td>-->
    <!--        <a target="_blank" href="https://doi.org/10.1080/26395940.2026.2648195">-->
    <!--            Fate and transformation of pharmaceutical residues: environment and human health implications-->
    <!--        </a>-->
    <!--    </td>-->
    <!--    <td>Environmental Pollutants and Bioavailability</td>-->
    <!--    <td>Om Prakash, Prakash Rao, Ankita Chopra</td>-->
    <!--    <td>2026</td>-->
    <!--</tr>-->
    <!--                        <tr>-->
    <!--                            <th scope="row">1</th>-->
    <!--                            <td><a target="_blank" href="https://doi.org/10.1007/s44282-025-00307-0">Evolution of environmental policy and sustainable marketing research using bibliometric methods</a> </td>-->
    <!--                            <td>Discover Global Society</td>-->
    <!--                            <td>Prakash Rao</td>-->
    <!--                            <td>2025</td>-->
    <!--                        </tr>-->
    <!--                        <tr>-->
    <!--                            <th scope="row">2</th>-->
    <!--                            <td><a target="_blank" href="https://doi.org/10.1007/s43621-025-02133-5">Key factors determining pro-environmental behaviour to rejuvenate urban rivers: a socio-psychological perspective and intervention strategies</a></td>-->
    <!--                            <td>Discover Sustainability</td>-->
    <!--                            <td>Prakash Rao</td>-->
    <!--                            <td>2025</td>-->
    <!--                        </tr>-->
    <!--                        <tr>-->
    <!--                            <th scope="row">3</th>-->
    <!--                            <td><a target="_blank" href="https://www.cambridgescholars.com/product/978-1-0364-4085-5">Anaerobic Way of Life and Tools Used in Cultivation and Preservation of Obligate Anaerobes</a></td>-->
    <!--                            <td>Cambridge Scholars Publishing</td>-->
    <!--                            <td>Om Prakash</td>-->
    <!--                            <td>2025</td>-->
    <!--                        </tr>-->
    <!--                        <tr>-->
    <!--                            <th scope="row">4</th>-->
    <!--                            <td><a target="_blank" href="https://www.cambridgescholars.com/product/978-1-0364-4085-5">Clinical Significance of Archaea in Human Health and Diseases</a></td>-->
    <!--                            <td>Cambridge Scholars Publishing</td>-->
    <!--                            <td>Om Prakash</td>-->
    <!--                            <td>2025</td>-->
    <!--                        </tr>-->
    <!--                        <tr>-->
    <!--                            <th scope="row">5</th>-->
    <!--                            <td><a target="_blank" href="https://www.cambridgescholars.com/product/978-1-0364-4085-5">Fungi of Clinical Significance Tolerating Anaerobic and Microaerophilic Conditions</a></td>-->
    <!--                            <td>Cambridge Scholars Publishing</td>-->
    <!--                            <td>Om Prakash</td>-->
    <!--                            <td>2025</td>-->
    <!--                        </tr>-->
    <!--                        <tr>-->
    <!--                            <th scope="row">6</th>-->
    <!--                            <td><a target="_blank" href="https://www.cambridgescholars.com/product/978-1-0364-4085-5">Human Gut Microbiota, Anaerobic Probiotics and Faecal Microbiota Transplant (FMT)</a></td>-->
    <!--                            <td>Cambridge Scholars Publishing</td>-->
    <!--                            <td>Om Prakash</td>-->
    <!--                            <td>2025</td>-->
    <!--                        </tr>-->
    <!--                        <tr>-->
    <!--                            <th scope="row">7</th>-->
    <!--                            <td><a target="_blank" href="https://www.cambridgescholars.com/product/978-1-0364-4085-5">Oral Microbiome and Role of Anaerobes in Periodontal Disease</a></td>-->
    <!--                            <td>Cambridge Scholars Publishing</td>-->
    <!--                            <td>Om Prakash</td>-->
    <!--                            <td>2025</td>-->
    <!--                        </tr>-->
    <!--                        <tr>-->
    <!--                            <th scope="row">8</th>-->
    <!--                            <td><a target="_blank" href="https://link.springer.com/article/10.1007/s12088-025-01495-8">Biological Approaches to Carbon Sequestration and Bioenergy Production</a></td>-->
    <!--                            <td>Indian Journal of Microbiology</td>-->
    <!--                            <td>Om Prakash</td>-->
    <!--                            <td>2025</td>-->
    <!--                        </tr>-->
    <!--                        <tr>-->
    <!--                            <th scope="row">9</th>-->
    <!--                            <td><a target="_blank" href="https://www.scopus.com/record/display.uri?eid=2-s2.0-105001531951&origin=recordpage">Global perspectives on residual antibiotics: environmental challenges and trends</a></td>-->
    <!--                            <td>Discover Sustainability</td>-->
    <!--                            <td>Om Prakash</td>-->
    <!--                            <td>2025</td>-->
    <!--                        </tr>-->
    <!--                        <tr>-->
    <!--                            <th scope="row">10</th>-->
    <!--                            <td><a target="_blank" href="https://enviromicro-journals.onlinelibrary.wiley.com/doi/10.1111/1758-2229.70108?af=R">The Study of Microbial Physiology Under Microoxic Conditions Is Critical but Neglected</a></td>-->
    <!--                            <td>Environmental Microbiology Reports</td>-->
    <!--                            <td>Om Prakash</td>-->
    <!--                            <td>2025</td>-->
    <!--                        </tr>-->
    <!--                        <tr>-->
    <!--                            <th scope="row">11</th>-->
    <!--                            <td><a target="_blank" href="https://journals.asm.org/doi/full/10.1128/aem.01728-24">Optimizing experimental conditions: the role of buffered environments in microbial isolation, physiological studies, and taxonomic characterization</a></td>-->
    <!--                            <td>Applied and Environmental Microbiology</td>-->
    <!--                            <td>Om Prakash</td>-->
    <!--                            <td>2025</td>-->
    <!--                        </tr>-->
    <!--                        <tr>-->
    <!--                            <th scope="row">12</th>-->
    <!--                            <td><a target="_blank" href="https://www.scopus.com/record/display.uri?eid=2-s2.0-105003465197&origin=recordpage">Evaluation of Sensory Properties and Short-Chain Fatty Acid Production in Fermented Soymilk on Addition of Fructooligosaccharides and Raffinose Family of Oligosaccharides</a></td>-->
    <!--                            <td>Fermentation</td>-->
    <!--                            <td>Om Prakash</td>-->
    <!--                            <td>2025</td>-->
    <!--                        </tr>-->
    <!--                        <tr>-->
    <!--                            <th scope="row">13</th>-->
    <!--                            <td><a target="_blank" href="https://www.scopus.com/record/display.uri?eid=2-s2.0-85214987490&origin=recordpage">Addressing the Climate Crisis: The Urgent Need for Sustainable Resource Management</a></td>-->
    <!--                            <td>Journal of Environmental Biology</td>-->
    <!--                            <td>Om Prakash</td>-->
    <!--                            <td>2025</td>-->
    <!--                        </tr>-->
    <!--                        <tr>-->
    <!--                            <th scope="row">14</th>-->
    <!--                            <td><a target="_blank" href="https://www.scopus.com/record/display.uri?eid=2-s2.0-85181529635&origin=recordpage">Comparison of Taxonomic Resolutions of Various Typing Methods for Clostridium and Paraclostridium Species Isolated from Landfill Leachate</a></td>-->
    <!--                            <td>Indian Journal of Microbiology</td>-->
    <!--                            <td>Om Prakash</td>-->
    <!--                            <td>2024</td>-->
    <!--                        </tr>-->
    <!--                        <tr>-->
    <!--                            <th scope="row">15</th>-->
    <!--                            <td><a href="https://www.scopus.com/record/display.uri?eid=2-s2.0-85186207157&origin=recordpage">Temporal assessment of emission inventory model for Indian heavy commercial vehicle segment: A top-down approach</a></td>-->
    <!--                            <td>International Journal of Transportation Science and Technology</td>-->
    <!--                            <td>Prakash Rao</td>-->
    <!--                            <td>2024</td>-->
    <!--                        </tr>-->
    <!--                        <tr>-->
    <!--                            <th scope="row">16</th>-->
    <!--                            <td><a target="_blank" href="https://www.scopus.com/record/display.uri?eid=2-s2.0-85211595958&origin=recordpage">Analysing the factors of bus transport operations influencing the energy consumption of electric buses in real world for sustainable transport strategies</a></td>-->
    <!--                            <td>International Journal of Energy Sector Management</td>-->
    <!--                            <td>Prakash Rao</td>-->
    <!--                            <td>2024</td>-->
    <!--                        </tr>-->
    <!--                        <tr>-->
    <!--                            <th scope="row">17</th>-->
    <!--                            <td><a target="_blank" href="https://www.scopus.com/record/display.uri?eid=2-s2.0-85203300325&origin=recordpage">Biochar-enhanced soilless farming: a sustainable solution for modern agriculture</a></td>-->
    <!--                            <td>Mitigation and Adaptation Strategies for Global Change</td>-->
    <!--                            <td>Ankita Chopra, Prakash Rao, Om Prakash</td>-->
    <!--                            <td>2024</td>-->
    <!--                        </tr>-->
    <!--                        <tr>-->
    <!--                            <th scope="row">18</th>-->
    <!--                            <td><a target="_blank" href="https://www.scopus.com/pages/publications/85189081786">Exploring the diversity of vaginal microbiota between healthy women and cervical cancer patients in India</a></td>-->
    <!--                            <td>Journal of Medical Microbiology</td>-->
    <!--                            <td>Prakash Rao</td>-->
    <!--                            <td>2024</td>-->
    <!--                        </tr>-->
    <!--                        <tr>-->
    <!--                            <th scope="row">19</th>-->
    <!--                            <td><a target="_blank" href="https://www.scopus.com/inward/record.uri?eid=2-s2.0-85185266012&doi=10.1016%2fj.ijantimicag.2024.107091&partnerID=40&md5=f80a94edcb863c50c0cf1744b1981c5e">Functional antagonism and insights into the biosynthetic potential of human gut-derived microbes</a></td>-->
    <!--                            <td>International Journal of Antimicrobial Agents</td>-->
    <!--                            <td>Prakash Rao</td>-->
    <!--                            <td>2024</td>-->
    <!--                        </tr>-->
    <!--                        <tr>-->
    <!--                            <th scope="row">20</th>-->
    <!--                            <td><a target="_blank" href="https://www.scopus.com/record/display.uri?eid=2-s2.0-85186207157&origin=recordpage">Preserving earth’s flora in the 21st century: climate, biodiversity, and global change factors since the mid-1940s</a></td>-->
    <!--                            <td>Frontiers in Conservation Science</td>-->
    <!--                            <td>Prakash Rao</td>-->
    <!--                            <td>2024</td>-->
    <!--                        </tr>-->
    <!--                        <tr>-->
    <!--                            <th scope="row">21</th>-->
    <!--                            <td><a target="_blank" href="https://www.scopus.com/inward/record.uri?eid=2-s2.0-85181529635&doi=10.1007%2fs12088-023-01179-1&partnerID=40&md5=4b2ca5f326e6e8147fff7023ce7ee14f">Comparison of Taxonomic Resolutions of Various Typing Methods for Clostridium and Paraclostridium Species Isolated from Landfill Leachate</a></td>-->
    <!--                            <td>Indian Journal of Microbiology</td>-->
    <!--                            <td>Om Prakash</td>-->
    <!--                            <td>2024</td>-->
    <!--                        </tr>-->
    <!--                        <tr>-->
    <!--                            <th scope="row">22</th>-->
    <!--                            <td><a target="_blank" href="https://www.scopus.com/inward/record.uri?eid=2-s2.0-85200538033&doi=10.1016%2fj.xpro.2024.103247&partnerID=40&md5=82dbb4704601536db014ce76219d6736">Protocol for enriching, isolating, and testing drug susceptibility of facultative anaerobic fungi</a></td>-->
    <!--                            <td>STAR Protocols</td>-->
    <!--                            <td>Om Prakash</td>-->
    <!--                            <td>2024</td>-->
    <!--                        </tr>-->
    <!--                        <tr>-->
    <!--                            <th scope="row">23</th>-->
    <!--                            <td><a target="_blank" href="https://www.scopus.com/inward/record.uri?eid=2-s2.0-85174620290&doi=10.1080%2f10889868.2023.2269193&partnerID=40&md5=6bdbdaabe30544c3583b0d85212ab7df">Effect of biosurfactant on thiocyanate degradation by automobile service station soil isolates Brachybacterium sp. and Bacillus albus</a></td>-->
    <!--                            <td>Bioremediation Journal</td>-->
    <!--                            <td>Om Prakash</td>-->
    <!--                            <td>2023</td>-->
    <!--                        </tr>-->
    <!--                        <tr>-->
    <!--                            <th scope="row">24</th>-->
    <!--                            <td><a target="_blank" href="https://www.scopus.com/inward/record.uri?eid=2-s2.0-85166392120&doi=10.1128%2fmra.00307-23&partnerID=40&md5=036c9676acac7cfb4738a1442ce38cba">Draft Genome Sequence of Ignatzschineria sp. Strain RMDPL8A, a Bacterium Isolated from Landfill Leachate</a></td>-->
    <!--                            <td>Microbiology Resource Announcements</td>-->
    <!--                            <td>Om Prakash</td>-->
    <!--                            <td>2023</td>-->
    <!--                        </tr>-->
    <!--                        <tr>-->
    <!--                            <th scope="row">25</th>-->
    <!--                            <td><a target="_blank" href="https://www.scopus.com/inward/record.uri?eid=2-s2.0-85153486926&doi=10.1099%2fijsem.0.005500&partnerID=40&md5=7518b2c0c744187fa7334b8fddfc89d3">Proposed minimal standards for description of methanogenic archaea</a></td>-->
    <!--                            <td>International Journal of Systematic and Evolutionary Microbiology</td>-->
    <!--                            <td>Om Prakash</td>-->
    <!--                            <td>2024</td>-->
    <!--                        </tr>-->
    <!--                        <tr>-->
    <!--                            <th scope="row">26</th>-->
    <!--                            <td><a target="_blank" href="https://www.scopus.com/inward/record.uri?eid=2-s2.0-85147895475&doi=10.1007%2fs11274-023-03543-1&partnerID=40&md5=333f650aecda1c9e1380a816efb44dd2">Endophytic microbiota of floating aquatic plants: recent developments and environmental prospects</a></td>-->
    <!--                            <td>World Journal of Microbiology and Biotechnology</td>-->
    <!--                            <td>Om Prakash</td>-->
    <!--                            <td>2023</td>-->
    <!--                        </tr>-->
    <!--                        <tr>-->
    <!--                            <th scope="row">27</th>-->
    <!--                            <td><a target="_blank" href="https://www.scopus.com/inward/record.uri?eid=2-s2.0-85176565854&doi=10.1016%2fj.isci.2023.108304&partnerID=40&md5=45f68e168615c15e2b1bbc3f17ce1bb2">Anaerobic growth and drug susceptibility of versatile fungal pathogen Scedosporium apiospermum</a></td>-->
    <!--                            <td>iScience</td>-->
    <!--                            <td>Om Prakash</td>-->
    <!--                            <td>2023</td>-->
    <!--                        </tr>-->
    <!--                        <tr>-->
    <!--                            <th scope="row">28</th>-->
    <!--                            <td><a target="_blank" href="https://www.scopus.com/inward/record.uri?eid=2-s2.0-85163074668&doi=10.1007%2fs12038-023-00337-3&partnerID=40&md5=e9ff7289a999e3ff9c800afa458e3986">Human small-intestinal gluten-degrading bacteria and its potential implication in celiac disease</a></td>-->
    <!--                            <td>Journal of Biosciences</td>-->
    <!--                            <td>Om Prakash</td>-->
    <!--                            <td>2023</td>-->
    <!--                        </tr>-->
    <!--                        <tr>-->
    <!--                            <th scope="row">29</th>-->
    <!--                            <td><a target="_blank" href="https://www.scopus.com/inward/record.uri?eid=2-s2.0-85172373662&doi=10.1016%2fj.envres.2023.117140&partnerID=40&md5=629faeecddf2af3284a242e088469e41">Microbial diversity characterizations, associated pathogenesis and antimicrobial resistance profiling of Najafgarh drain</a></td>-->
    <!--                            <td>Environmental Research</td>-->
    <!--                            <td>Om Prakash</td>-->
    <!--                            <td>2023</td>-->
    <!--                        </tr>-->
    <!--                        <tr>-->
    <!--                            <th scope="row">30</th>-->
    <!--                            <td><a target="_blank" href="https://www.scopus.com/inward/record.uri?eid=2-s2.0-85141380381&doi=10.1002%2fjobm.202200357&partnerID=40&md5=3f65401c67cedd77edb8b23fbd5ff09c">Resolution of inter/intraspecies variation in Weissella group requires multigene analysis and functional characterization</a></td>-->
    <!--                            <td>Journal of Basic Microbiology</td>-->
    <!--                            <td>Om Prakash</td>-->
    <!--                            <td>2022</td>-->
    <!--                        </tr>-->
    <!--                    </tbody>-->
    <!--                </table>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    </main>
    @include('footer')
    
