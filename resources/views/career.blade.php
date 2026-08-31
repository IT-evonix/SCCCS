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
                        <h1>Career</h1>
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
                <li>Career</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <section class="career_section py-5">
        <div class="container">
            <!-- Career Subtabs Navigation -->
            <div class="career-tab-nav mb-5">
                <ul class="nav nav-pills justify-content-center custom-career-tabs" id="careerTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="positions-tab" data-bs-toggle="tab" data-bs-target="#positions-content" type="button" role="tab" aria-controls="positions-content" aria-selected="true" onclick="switchCareerTab('positions')">
                            Positions
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="volunteer-tab" data-bs-toggle="tab" data-bs-target="#volunteer-content" type="button" role="tab" aria-controls="volunteer-content" aria-selected="false" onclick="switchCareerTab('volunteer')">
                            Volunteer
                        </button>
                    </li>
                </ul>
            </div>

            <!-- Tab Content -->
            <div class="tab-content" id="careerTabsContent">

                <!-- POSITIONS SUBTAB -->
                <div class="tab-pane fade show active" id="positions-content" role="tabpanel" aria-labelledby="positions-tab">
                    <div class="section-title text-center mb-5">
                        <h2 class="heading" style="color: #C53034; font-weight: 700;">Open Positions</h2>
                        <p class="text-muted" style="max-width: 700px; margin: 10px auto 0;">Explore career opportunities at Symbiosis Centre for Climate Change and Sustainability (SCCCS).</p>
                    </div>

                    <div class="row g-4 justify-content-center">
                        <!-- CARD 1: Postdoctoral Research Fellow (PDRF) -->
                        <div class="col-lg-6 col-md-12">
                            <div class="position-small-card">
                                <div class="card-tag-badge">Position</div>
                                <div class="position-card-layout">
                                    <div class="position-thumb-box" onclick="openFlyerModal('{{ asset('assets/images/PDRF.webp') }}', 'Postdoctoral Research Fellow (PDRF)')">
                                        <img src="{{ asset('assets/images/PDRF.webp') }}" alt="PDRF Flyer" class="img-fluid position-flyer-img">
                                        <div class="thumb-hover-overlay">
                                            <span>View Flyer</span>
                                        </div>
                                    </div>
                                    <div class="position-card-details">
                                        <h3 class="position-card-title">Postdoctoral Research Fellow (PDRF)</h3>
                                        <p class="position-card-intro">We are looking for passionate researchers with strong academic credentials to work on cutting-edge projects in:</p>
                                        
                                        <ul class="position-highlights-list">
                                            <li><span class="emoji-icon">🌿</span> Campus Carbon Sequestration</li>
                                            <li><span class="emoji-icon">🎯</span> Net-Zero Campus Initiatives</li>
                                            <li><span class="emoji-icon">🌍</span> Sustainability Research</li>
                                        </ul>

                                        <div class="apply-info-box">
                                            <div class="apply-label">📩 Apply:</div>
                                            <div class="apply-emails-wrapper">
                                                <a href="mailto:head_scccs@siu.edu.in" class="email-btn-link">head_scccs@siu.edu.in</a>
                                                <span class="email-separator">|</span>
                                                <a href="mailto:dyhead_scccs@siu.edu.in" class="email-btn-link">dyhead_scccs@siu.edu.in</a>
                                            </div>
                                        </div>

                                        <div class="card-action-bar mt-3">
                                            <button type="button" class="btn btn-outline-danger btn-sm rounded-pill font-weight-bold" onclick="openFlyerModal('{{ asset('assets/images/PDRF.webp') }}', 'Postdoctoral Research Fellow (PDRF)')">
                                                <i class="far fa-image"></i> View Flyer
                                            </button>
                                            <a href="mailto:head_scccs@siu.edu.in?cc=dyhead_scccs@siu.edu.in&subject=Application for Postdoctoral Research Fellow (PDRF)" class="btn btn-danger btn-sm rounded-pill font-weight-bold px-3">
                                                Apply Now <i class="fas fa-paper-plane ms-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CARD 2: Assistant Professor -->
                        <div class="col-lg-6 col-md-12">
                            <div class="position-small-card">
                                <div class="card-tag-badge">Position</div>
                                <div class="position-card-layout">
                                    <div class="position-thumb-box" onclick="openFlyerModal('{{ asset('assets/images/Assistant_Professor.webp') }}', 'Assistant Professor')">
                                        <img src="{{ asset('assets/images/Assistant_Professor.webp') }}" alt="Assistant Professor Flyer" class="img-fluid position-flyer-img">
                                        <div class="thumb-hover-overlay">
                                            <span> View Flyer</span>
                                        </div>
                                    </div>
                                    <div class="position-card-details">
                                        <h3 class="position-card-title">Assistant Professor</h3>
                                        <p class="position-card-intro">We are looking for passionate academicians with strong research credentials to work in multidisciplinary areas including:</p>
                                        
                                        <ul class="position-highlights-list">
                                            <li><span class="emoji-icon">🌿</span> Climate Change</li>
                                            <li><span class="emoji-icon">🧪</span> Environmental Health</li>
                                            <li><span class="emoji-icon">♻️</span> Carbon Capture</li>
                                            <li><span class="emoji-icon">🌱</span> Sustainable Agriculture</li>
                                            <li><span class="emoji-icon">🧬</span> Bioinformatics</li>
                                        </ul>

                                        <div class="apply-info-box">
                                            <div class="apply-label">📩 Apply:</div>
                                            <div class="apply-emails-wrapper">
                                                <a href="mailto:head_scccs@siu.edu.in" class="email-btn-link">head_scccs@siu.edu.in</a>
                                                <span class="email-separator">|</span>
                                                <a href="mailto:dyhead_scccs@siu.edu.in" class="email-btn-link">dyhead_scccs@siu.edu.in</a>
                                            </div>
                                        </div>

                                        <div class="card-action-bar mt-3">
                                            <button type="button" class="btn btn-outline-danger btn-sm rounded-pill font-weight-bold" onclick="openFlyerModal('{{ asset('assets/images/Assistant_Professor.webp') }}', 'Assistant Professor')">
                                                <i class="far fa-image"></i> View Flyer
                                            </button>
                                            <a href="mailto:head_scccs@siu.edu.in?cc=dyhead_scccs@siu.edu.in&subject=Application for Assistant Professor" class="btn btn-danger btn-sm rounded-pill font-weight-bold px-3">
                                                Apply Now <i class="fas fa-paper-plane ms-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- VOLUNTEER SUBTAB -->
                <div class="tab-pane fade" id="volunteer-content" role="tabpanel" aria-labelledby="volunteer-tab">
                    <div class="vs-heading text-center mb-4">
                        <div class="heading" style="color: #C53034; font-weight: 700;">Volunteer Opportunities</div>
                        <p class="text-muted mt-2">Join hands with SCCCS to drive sustainability initiatives and environmental research.</p>
                    </div>

                    <div class="text-center py-5">
                        <div class="p-4 bg-light rounded-4 d-inline-block border" style="max-width: 500px;">
                            <h4 class="text-secondary font-weight-bold mb-2">Coming Soon</h4>
                            <p class="text-muted mb-0">No active volunteer positions at the moment. Please check back soon or send your general inquiry to <a href="mailto:head_scccs@siu.edu.in" style="color: #C53034;">head_scccs@siu.edu.in</a>.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<!-- FLYER MODAL -->
<div class="modal fade" id="flyerModal" tabindex="-1" aria-labelledby="flyerModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 16px; overflow: hidden;">
            <div class="modal-header border-0 bg-light py-3 px-4">
                <h5 class="modal-title font-weight-bold" id="flyerModalTitle" style="color: #111; font-size: 18px;">Position Flyer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center p-3" style="">
                <img id="flyerModalImg" src="" alt="Flyer Image" class="img-fluid rounded" style="max-height: 80vh; object-fit: contain;">
            </div>
            <div class="modal-footer border-0 bg-light py-2 px-4 justify-content-between">
                <a id="flyerModalDownloadBtn" href="" download target="_blank" class="btn btn-danger btn-sm px-4 rounded-pill font-weight-bold">
                    <i class="fas fa-download me-1"></i> Download Flyer
                </a>
            </div>
        </div>
    </div>
</div>

<style>
/* Custom Styles for Positions & Career Page */
.custom-career-tabs {
    border-bottom: 2px solid #e9ecef;
    padding-bottom: 10px;
}
.custom-career-tabs .nav-link {
    color: #495057;
    font-weight: 600;
    font-size: 18px;
    padding: 10px 30px;
    border-radius: 30px;
    background: transparent;
    transition: all 0.3s ease;
    margin: 0 5px;
}
.custom-career-tabs .nav-link.active,
.custom-career-tabs .nav-link:hover {
    background-color: #C53034 !important;
    color: #ffffff !important;
    box-shadow: 0 4px 12px rgba(197, 48, 52, 0.25);
}

/* Small Card Layout */
.position-small-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 20px;
    position: relative;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.position-small-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 30px rgba(197, 48, 52, 0.12);
    border-color: #C53034;
}

.card-tag-badge {
    position: absolute;
    top: 16px;
    right: 16px;
    background: rgba(197, 48, 52, 0.08);
    color: #C53034;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    padding: 4px 12px;
    border-radius: 20px;
}

.position-card-layout {
    display: flex;
    gap: 20px;
    height: 100%;
}
@media (max-width: 767px) {
    .position-card-layout {
        flex-direction: column;
    }
}

/* Thumbnail Box */
.position-thumb-box {
    position: relative;
    width: 170px;
    min-width: 170px;
    height: 220px;
    border-radius: 12px;
    overflow: hidden;
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 6px;
    margin-top: 10px;
}
@media (max-width: 767px) {
    .position-thumb-box {
        width: 100%;
        min-width: 100%;
        height: 200px;
        margin-top: 25px;
    }
}
.position-flyer-img {
    max-height: 100%;
    width: 100%;
    object-fit: contain;
    transition: transform 0.3s ease;
}
.position-thumb-box:hover .position-flyer-img {
    transform: scale(1.05);
}
.thumb-hover-overlay {
    position: absolute;
    inset: 0;
    background: rgba(197, 48, 52, 0.85);
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 13px;
    font-weight: 600;
    opacity: 0;
    transition: opacity 0.3s ease;
    border-radius: 12px;
}
.position-thumb-box:hover .thumb-hover-overlay {
    opacity: 1;
}

/* Card Details */
.position-card-details {
    flex: 1;
    display: flex;
    flex-direction: column;
}
.position-card-title {
    font-size: 19px;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 8px;
    padding-right: 70px; /* Space for top tag */
    line-height: 1.3;
}
.position-card-intro {
    font-size: 13px;
    color: #475569;
    line-height: 1.5;
    margin-bottom: 12px;
}

.position-highlights-list {
    list-style: none;
    padding: 0;
    margin: 0 0 15px 0;
}
.position-highlights-list li {
    font-size: 13px;
    color: #334155;
    padding: 3px 0;
    display: flex;
    align-items: center;
    gap: 8px;
    font-weight: 500;
}
.emoji-icon {
    font-size: 14px;
}

/* Apply Info Box */
.apply-info-box {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    padding: 10px 14px;
    margin-top: auto;
}
.apply-label {
    font-size: 12px;
    font-weight: 700;
    color: #334155;
    margin-bottom: 4px;
}
.apply-emails-wrapper {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 6px;
    font-size: 12px;
}
.email-btn-link {
    color: #C53034;
    font-weight: 600;
    text-decoration: none;
    transition: color 0.2s ease;
}
.email-btn-link:hover {
    color: #8c1e21;
    text-decoration: underline;
}
.email-separator {
    color: #94a3b8;
    font-weight: 400;
}

.card-action-bar {
    display: flex;
    gap: 10px;
    align-items: center;
}
</style>

<script>
function openFlyerModal(imgSrc, title) {
    document.getElementById('flyerModalImg').src = imgSrc;
    document.getElementById('flyerModalTitle').innerText = title + ' - Flyer';
    document.getElementById('flyerModalDownloadBtn').href = imgSrc;
    var myModal = new bootstrap.Modal(document.getElementById('flyerModal'));
    myModal.show();
}

function switchCareerTab(tabName) {
    if (history.pushState) {
        history.pushState(null, null, '#' + tabName);
    } else {
        location.hash = '#' + tabName;
    }
}

document.addEventListener('DOMContentLoaded', function () {
    var hash = window.location.hash;
    if (hash === '#volunteer') {
        var volunteerTabBtn = document.getElementById('volunteer-tab');
        if (volunteerTabBtn) {
            var tab = new bootstrap.Tab(volunteerTabBtn);
            tab.show();
        }
    } else if (hash === '#positions') {
        var positionsTabBtn = document.getElementById('positions-tab');
        if (positionsTabBtn) {
            var tab = new bootstrap.Tab(positionsTabBtn);
            tab.show();
        }
    }
});
</script>

@include('footer')
