<?php 
require_once('configi.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
  
    <meta charset="utf-8">
    <title>Kalaimagal Matriculation school</title>
<link rel="icon" type="image/png" href="img/logo (2).png">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Favicon -->
    


    <link href="img/favicon.ico" rel="icon">

    <!-- Bootstrap 5 CSS (single version) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <!-- jQuery (single load) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
 

<!-- header start -->
<?php
$activePage = 'index';
include 'header.php';
?>

<!-- header end -->
 

<div class="announcement-bar">
    <div class="container-fluid px-lg-5">

        <a href="announcement.php" class="announcement-link">
            <div class="announcement-text py-1">
                <?php 
                $qry = "SELECT * FROM latest_message WHERE show_flag = '1'";
                $result = $mysqli->query($qry);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo htmlspecialchars($row['Discription']) . " ";
                    }
                } else {
                    echo "No announcements available";
                }
                ?>
            </div>
        </a>

    </div>
</div>


    <div class="hero-wrapper position-relative">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

  <div class="carousel-inner">
    <?php
    $qry = "SELECT * FROM banners WHERE status = '0'";
    $result = $mysqli->query($qry);
    $i = 0;

    while ($row = $result->fetch_assoc()) {
        $active = ($i == 0) ? 'active' : '';
        ?>
        <div class="carousel-item <?= $active ?>">
            <img
              src="<?= $row['image'] ?>"
              class="d-block w-100"
              alt="Campus Banner"
              style="height: 550px; object-fit: cover;">
        </div>
        <?php
        $i++;
    }
    ?>
  </div>


    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
</div>

    <!-- Hero Text Overlay -->
    <div class="hero-overlay-text">
        <h1>Empowering Minds, Building a Better World</h1>
    </div>
</div>

<style>
.hero-wrapper {
    position: relative;
    overflow: hidden;
}

.hero-overlay-text {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(0, 0, 0, 0.4);
    z-index: 10;
    pointer-events: none;
}

.hero-overlay-text h1 {
    color: #fff;
    font-size: 48px;
    font-weight: 700;
    text-align: center;
    text-shadow: 2px 4px 10px rgba(0, 0, 0, 0.5);
    padding: 0 20px;
    letter-spacing: 1px;
    line-height: 1.3;
}

/* Allow carousel controls to remain clickable */
.hero-wrapper .carousel-control-prev,
.hero-wrapper .carousel-control-next {
    z-index: 15;
}

@media (max-width: 767px) {
    .hero-overlay-text h1 {
        font-size: 26px;
    }
}

@media (min-width: 768px) and (max-width: 991px) {
    .hero-overlay-text h1 {
        font-size: 36px;
    }
}
</style>





<!-- Welcome Section Start -->
<section class="welcome-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Column - Text Content -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h4 class="welcome-subtitle">Welcome to</h4>
                <h2 class="welcome-title">Kalaimagal Matriculation school</h2>
                <p class="welcome-text">
                    Welcome to a place where learning is nurtured with love, discipline, and dedication.
                </p>
                <p class="welcome-text">
                    Established in June 1986, our school has been proudly serving the community under the guidance of
                    <strong>SHRI BALAJI EDUCATIONAL TRUST</strong>. With our motto
                    <strong>"LOVE – LEARN – SACRIFICE"</strong>, we strive to shape young minds with strong values,
                    academic excellence, and a sense of responsibility toward society.
                </p>
                <p class="welcome-text">
                    Since our first batch appeared for the Matriculation Public Examination in 1993 and the Higher Secondary
                    Examination in 1995, the school has consistently achieved cent percent results in both 10th and 12th standards.
                    Our students have earned District Ranks in several years and State Ranks in 2012 and 2014, bringing pride
                    and honor to the institution.
                </p>
                <div class="welcome-features">
                    <div class="welcome-feature-item">
                        <i class="fas fa-check-circle"></i>
                        <span>100% Results Every Year</span>
                    </div>
                    <div class="welcome-feature-item">
                        <i class="fas fa-check-circle"></i>
                        <span>State Ranks Achieved</span>
                    </div>
                    <div class="welcome-feature-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Established Since 1986</span>
                    </div>
                    <div class="welcome-feature-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Love – Learn – Sacrifice</span>
                    </div>
                </div>
                <a href="about.php" class="btn welcome-btn mt-3">Learn More About Us</a>
            </div>
            <!-- Right Column - Image -->
            <div class="col-lg-6">
                <div class="welcome-image-wrapper">
                    <img src="reference/DSC_5082.JPG" alt="Kalaimagal School Campus" class="welcome-img">
                    <div class="welcome-experience-badge">
                        <h3>39+</h3>
                        <p>Years of Excellence</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.welcome-section {
    background: #f9fbff;
}

.welcome-subtitle {
    color: #ffaa00;
    font-weight: 600;
    font-size: 18px;
    margin-bottom: 5px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.welcome-title {
    color: #1F4FB2;
    font-weight: 700;
    font-size: 32px;
    margin-bottom: 20px;
}

.welcome-text {
    color: #555;
    font-size: 15px;
    line-height: 1.8;
    margin-bottom: 15px;
}

.welcome-features {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-top: 15px;
}

.welcome-feature-item {
    display: flex;
    align-items: center;
    gap: 8px;
    width: 48%;
    font-size: 15px;
    color: #333;
    font-weight: 500;
}

.welcome-feature-item i {
    color: #1F4FB2;
    font-size: 18px;
}

.welcome-btn {
    background: #1F4FB2;
    color: #fff;
    border: none;
    font-weight: 600;
    padding: 10px 28px;
    border-radius: 6px;
    transition: 0.3s;
}

.welcome-btn:hover {
    background: #163a8a;
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 6px 18px rgba(31, 79, 178, 0.3);
}

.welcome-image-wrapper {
    position: relative;
}

.welcome-img {
    width: 100%;
    height: 400px;
    object-fit: cover;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
}

.welcome-experience-badge {
    position: absolute;
    bottom: -20px;
    left: -20px;
    background: #1F4FB2;
    color: #fff;
    padding: 20px 25px;
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 8px 20px rgba(31, 79, 178, 0.4);
}

.welcome-experience-badge h3 {
    font-size: 36px;
    font-weight: 700;
    margin: 0;
    color: #ffaa00;
}

.welcome-experience-badge p {
    margin: 0;
    font-size: 14px;
    font-weight: 500;
}

@media (max-width: 767px) {
    .welcome-feature-item {
        width: 100%;
    }
    .welcome-experience-badge {
        bottom: -15px;
        left: 10px;
        padding: 15px 20px;
    }
    .welcome-experience-badge h3 {
        font-size: 28px;
    }
    .welcome-title {
        font-size: 26px;
    }
}
</style>
<!-- Welcome Section End -->

<!-- Principal's Message Start -->
<section class="principal-section py-5" style="background:#f8f9fa;">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="font-weight-bold" style="color:#1F4FB2;">Principal's <span style="color:#222;">Message</span></h2>
        </div>
        <div class="row align-items-center">
            <div class="col-md-3 text-center mb-4 mb-md-0">
                <img src="images/principal.jpeg" alt="Principal" class="principal-img">
                <p style="font-weight:600; margin-top:15px; color:#1F4FB2;">The Principal</p>
                <p style="color:#555; font-size:14px;">Kalaimagal Matric. Hr. Sec. School</p>
            </div>
            <div class="col-md-9">
                <p style="color:#444; line-height:1.8; font-size:15px;">
                    <i class="fas fa-quote-left" style="color:#1F4FB2; font-size:20px; margin-right:8px;"></i>
                    Welcome to Kalaimagal Matric. Hr. Sec. School — a place where learning is nurtured with love, discipline, and dedication. Since our establishment in 1986 under <strong>Shri Balaji Educational Trust</strong>, we have been committed to shaping young minds with strong values, academic excellence, and a deep sense of responsibility toward society.
                </p>
                <p style="color:#444; line-height:1.8; font-size:15px;">
                    Our motto <strong>"LOVE – LEARN – SACRIFICE"</strong> guides everything we do. We believe in nurturing self-esteem, confidence, and independent thinking while instilling discipline and good citizenship qualities. Our consistent cent percent results in both 10th and 12th standards, along with District and State Ranks, reflect the hard work of our students and the dedication of our faculty.
                </p>
                <p style="color:#444; line-height:1.8; font-size:15px;">
                    We warmly invite you to be a part of our journey in shaping the leaders of tomorrow. Together, let us empower minds and build a better world.
                    <i class="fas fa-quote-right" style="color:#1F4FB2; font-size:20px; margin-left:8px;"></i>
                </p>
            </div>
        </div>
    </div>
</section>

<style>
.principal-img {
    width: 300px;
    height: 350px;
    object-fit: cover;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
}
</style>
<!-- Principal's Message End -->

<style>
  .merqee { padding-top:10px; font-size:18px; border:3px solid #ff0000; }
  .dd { color:red; }
</style>

<div class="row merqees" style="padding-top:10px;">

  <!-- marquee -->
</div>
<section class="container my-5">
    <div class="text-center mb-4">
        <h2 class="font-weight-bold" style="color:#1F4FB2;">School <span style="color:#222;">Highlights</span></h2>
        <p class="text-muted">What makes our school stand out from the rest.</p>
    </div>

    <div class="row text-center">

        <!-- 1 -->
        <div class="col-md-3 mb-4">
            <div class="highlight-box shadow-sm p-3">
                <img src="reference/1.jpg" alt="Expert Teachers" class="highlight-img">
                
                <h5><a href="learning.php" class="text-decoration-none text-dark">Expert Teachers</a></h5>

                <p>Experienced & dedicated Matriculation faculty.</p>
            </div>
        </div>

        <!-- 2 -->
        <div class="col-md-3 mb-4">
            <div class="highlight-box shadow-sm p-3">
                <img src="reference/front.jpg" alt="Safe Campus" class="highlight-img">
                <h5><a href="learning.php" class="text-decoration-none text-dark">Safe Campus</a></h5>

                
                <p>CCTV, GPS bus tracking, and fire safety.</p>
            </div>
        </div>

        <!-- 3 -->
        <div class="col-md-3 mb-4">
            <div class="highlight-box shadow-sm p-3">
                <img src="reference/comp lab.jpg" alt="Modern Labs" class="highlight-img">
                <h5>Modern Labs</h5>
                <p>Science, Computer, Robotics & Language labs.</p>
            </div>
        </div>

        <!-- 4 -->
        <div class="col-md-3 mb-4">
            <div class="highlight-box shadow-sm p-3">
                <img src="reference/DSC_5146.JPG" alt="Top Results" class="highlight-img">
                <h5>Top Results</h5>
                <p>Academic excellence every year Top Result.</p>
            </div>
        </div>

    </div>
</section>

<style>
/* Image Styling */
.highlight-img {
    width: 100%;
    height: 200px;  /* Adjust height */
    object-fit: cover;
    border-radius: 10px;
}

/* Card Box */
.highlight-box {
    background: #fff;
    padding: 15px;
    border-radius: 12px;
    transition: 0.3s;
    box-shadow: 0 4px 15px rgba(0,0,0,0.06);
}

/* Hover Effect */
.highlight-box:hover {
    transform: translateY(-6px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.12);
}

.highlight-box h5 {
    margin-top: 15px;
    font-weight: 600;
}
</style>





<style>
.program-box img {
    width: 100%;
    height: 250px; /* Adjust height as needed */
    object-fit: cover; 
    border-radius: 10px;
    display: block;
}
.program-box {
    background:#fff;
    padding:20px;
    border-radius:12px;
    text-align:center;
    transition:0.3s;
    box-shadow:0 4px 15px rgba(0,0,0,0.06);
}
.program-box:hover {
    transform:translateY(-6px);
    box-shadow:0 10px 25px rgba(0,0,0,0.12);
}
.program-box h5 {
    margin-top:15px;
    font-weight:600;
}
/* Programs We Offer */

</style>
<section class="container my-5">
    <div class="text-center mb-4">
        <h2 class="font-weight-bold" style="color:#1F4FB2;">Programs <span style="color:#222;">We Offer</span></h2>
    </div>

    <div class="row">

        <div class="col-md-4 mb-4">
            <div class="program-box">
                <img src="reference/4.jpg" alt="Kindergarten">
                 <h5>
                <a href="learning.php" class="text-decoration-none text-dark">
                    Kindergarten
                </a>
            </h5>
                <p>Play-based learning & activity-driven teaching.</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="program-box">
                <img src="reference/3.jpg" alt="Middle School">
                 <h5>
                <a href="learning.php" class="text-decoration-none text-dark">
                    Middle School
                </a>
            </h5>
                <p>Strong academic base with creative learning.</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="program-box">
                <img src="reference/phy lab.jpg" alt="High School">
                 <h5>
                <a href="learning.php" class="text-decoration-none text-dark">
                    High School
                </a>
            </h5>
                <p>Skill development, projects & practical learning.</p>
            </div>
        </div>

    </div>
</section>


<style>
.program-box h5 { margin-top:15px; font-weight:600; }
.program-box p { color:#555; }
</style>
<section class="achievement-section text-white py-5">
    <div class="container text-center">
        <h2 class="mb-4">Our <span style="color:#ffaa00;">Achievements</span></h2>

        <div class="row">

            <div class="col-md-3 mb-3">
                <div class="achievement-box">
                    <i class="fa fa-trophy"></i>
                    <h3>50+</h3>
                    <p>Academic Awards</p>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="achievement-box">
                    <i class="fa fa-users"></i>
                    <h3>800+</h3>
                    <p>Happy Students</p>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="achievement-box">
                    <i class="fa fa-chalkboard-teacher"></i>
                    <h3>40+</h3>
                    <p>Expert Teachers</p>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="achievement-box">
                    <i class="fa fa-medal"></i>
                    <h3>100+</h3>
                    <p>Sports & Arts Awards</p>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
/* Background Image + Overlay */
.achievement-section {
    background: 
        linear-gradient(rgba(22, 92, 232, 0.9), rgba(0, 39, 101, 0.9)),
        url("img/header/bg.jpg");    /* 👉 change to your image */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

/* Icons */
.achievement-box i {
    font-size: 40px;
    color: #ffaa00;
}

/* Numbers */
.achievement-box h3 {
    margin-top: 10px;
    font-size: 32px;
    font-weight: bold;
}

/* Text */
.achievement-box p {
    margin: 0;
    font-size: 15px;
}
</style>

<section class="container my-5">
    <div class="text-center mb-4">
        <h2 class="font-weight-bold" style="color:#1F4FB2;">Latest <span style="color:#222;">News & Events</span></h2>
    </div>

    <div class="row">

        <div class="col-md-4 mb-4">
            <div class="event-box shadow-sm p-3 rounded">
                <img src="reference/DSC_5113.JPG"  class="img-fluid rounded mb-3">
                <h5>Annual Sports Day 2025</h5>
                <p class="text-muted">A day filled with energy, excitement, and sportsmanship.</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="event-box shadow-sm p-3 rounded">
                <img src="reference/chem lab.jpg"  class="img-fluid rounded mb-3">
                <h5>Science Expo</h5>
                <p class="text-muted">Students showcased innovative science models and projects.</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="event-box shadow-sm p-3 rounded">
                <img src="reference/DSC_5171.JPG"  class="img-fluid rounded mb-3">
                <h5>Independence Day</h5>
                <p class="text-muted">A grand celebration with parade and cultural events and celebration</p>
            </div>
        </div>

    </div>
</section>

<!-- admission open satrt -->
<section class="cta-section text-white py-5">
    <div class="container text-center">
        <h2>Admissions Open 2026–2027</h2>
        <p class="lead">Apply today and give your child the best learning experience.</p>

        <!-- FIXED BUTTON -->
        <a href="admission.php" class="btn cta-btn px-4 py-2 mt-3">Apply Now</a>

    </div>
</section>

<style>
.cta-section {
    background:
        linear-gradient(rgba(22, 92, 232, 0.9), rgba(0, 39, 101, 0.9)),
        url("img/header/bg.jpg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.cta-btn {
    background: #ffaa00;
    color: #000;
    border: none;
    font-weight: 600;
}

.cta-btn:hover {
    background: #ffcc33;
    color: #000;
}
</style>
<!-- admission open end -->

<?php include 'footer.php';
?>





<!-- Enquiry Pop-up Modal -->
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-lg enq-modal-dialog">
        <div class="modal-content enq-modal-content">

            <!-- Left Panel -->
            <div class="enq-left-panel">
                <button type="button" class="enq-close-mobile" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
                <div class="enq-left-inner">
                    <img src="img/logo (2).png" alt="School Logo" class="enq-logo">
                    <h2 class="enq-school-name">Kalaimagal Matric. Hr. Sec. School</h2>
                    <p class="enq-tagline">"Love &bull; Learn &bull; Sacrifice"</p>
                    <div class="enq-divider"></div>
                    <ul class="enq-features">
                        <li><i class="fas fa-check-circle"></i> Admissions Open 2026–27</li>
                        <li><i class="fas fa-check-circle"></i> 100% Board Results</li>
                        <li><i class="fas fa-check-circle"></i> KG to Grade 12</li>
                        <li><i class="fas fa-check-circle"></i> Est. Since 1986</li>
                    </ul>
                    <img src="reference/front.jpg" alt="Campus" class="enq-campus-img">
                </div>
            </div>

            <!-- Right Panel -->
            <div class="enq-right-panel">
                <button type="button" class="enq-close-desktop" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
                <div class="enq-right-inner">
                    <p class="enq-form-sub">Fill in your details and we'll get back to you shortly.</p>
                    <h4 class="enq-form-title">Quick Enquiry</h4>

                    <div id="enq-alert" class="alert d-none" role="alert"></div>

                    <form id="enquiryForm" novalidate>
                        <div class="enq-field">
                            <label for="enq_name"><i class="fas fa-user"></i> Full Name <span>*</span></label>
                            <input type="text" id="enq_name" name="enq_name" placeholder="Your full name" required>
                        </div>
                        <div class="enq-field">
                            <label for="enq_email"><i class="fas fa-envelope"></i> Email Address <span>*</span></label>
                            <input type="email" id="enq_email" name="enq_email" placeholder="your@email.com" required>
                        </div>
                        <div class="enq-field">
                            <label for="enq_phone"><i class="fas fa-phone"></i> Phone Number <span>*</span></label>
                            <input type="tel" id="enq_phone" name="enq_phone" placeholder="10-digit mobile number" maxlength="10" required>
                        </div>
                        <div class="enq-field">
                            <label for="enq_grade"><i class="fas fa-graduation-cap"></i> Grade Interested <span>*</span></label>
                            <select id="enq_grade" name="enq_grade" required>
                                <option value="">-- Select Grade --</option>
                                <option value="KG">KG (Kindergarten)</option>
                                <option value="Grade 1">Grade 1</option>
                                <option value="Grade 2">Grade 2</option>
                                <option value="Grade 3">Grade 3</option>
                                <option value="Grade 4">Grade 4</option>
                                <option value="Grade 5">Grade 5</option>
                                <option value="Grade 6">Grade 6</option>
                                <option value="Grade 7">Grade 7</option>
                                <option value="Grade 8">Grade 8</option>
                                <option value="Grade 9">Grade 9</option>
                                <option value="Grade 10">Grade 10 (SSLC)</option>
                                <option value="Grade 11">Grade 11</option>
                                <option value="Grade 12">Grade 12 (HSC)</option>
                            </select>
                        </div>
                        <button type="submit" class="enq-submit-btn" id="enqSubmitBtn">
                            <i class="fas fa-paper-plane me-2"></i> Submit Enquiry
                        </button>
                        <p class="enq-skip" data-bs-dismiss="modal">No thanks, I'll enquire later</p>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<style>
/* ── Modal wrapper ── */
.enq-modal-dialog {
    max-width: 820px;
}
.enq-modal-content {
    display: flex;
    flex-direction: row;
    border: none;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 25px 60px rgba(0,0,0,0.22);
    min-height: 500px;
}

/* ── Left panel ── */
.enq-left-panel {
    width: 42%;
    background: linear-gradient(160deg, #1F4FB2 0%, #0d2d6e 100%);
    color: #fff;
    position: relative;
    display: flex;
    flex-direction: column;
}
.enq-left-inner {
    padding: 36px 28px;
    display: flex;
    flex-direction: column;
    height: 100%;
}
.enq-logo {
    width: 70px;
    height: 70px;
    object-fit: contain;
    border-radius: 50%;
    background: #fff;
    padding: 6px;
    margin-bottom: 14px;
}
.enq-school-name {
    font-size: 15px;
    font-weight: 700;
    line-height: 1.4;
    margin-bottom: 6px;
}
.enq-tagline {
    font-size: 12px;
    color: #ffcc66;
    letter-spacing: 1px;
    margin-bottom: 18px;
}
.enq-divider {
    width: 40px;
    height: 3px;
    background: #ffaa00;
    border-radius: 2px;
    margin-bottom: 18px;
}
.enq-features {
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}
.enq-features li {
    font-size: 13px;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.enq-features li i {
    color: #ffaa00;
    font-size: 14px;
    flex-shrink: 0;
}
.enq-campus-img {
    width: 100%;
    height: 130px;
    object-fit: cover;
    border-radius: 10px;
    margin-top: auto;
    opacity: 0.88;
}

/* ── Right panel ── */
.enq-right-panel {
    width: 58%;
    background: #fff;
    position: relative;
    display: flex;
    flex-direction: column;
}
.enq-right-inner {
    padding: 36px 32px 28px;
    display: flex;
    flex-direction: column;
    height: 100%;
}
.enq-form-sub {
    font-size: 12px;
    color: #ffaa00;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 4px;
}
.enq-form-title {
    font-size: 22px;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 20px;
}

/* ── Fields ── */
.enq-field {
    margin-bottom: 14px;
}
.enq-field label {
    display: block;
    font-size: 12px;
    font-weight: 600;
    color: #555;
    margin-bottom: 5px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}
.enq-field label i {
    color: #1F4FB2;
    margin-right: 5px;
}
.enq-field label span {
    color: #e74c3c;
}
.enq-field input,
.enq-field select {
    width: 100%;
    border: 1.5px solid #e0e0e0;
    border-radius: 8px;
    padding: 10px 14px;
    font-size: 14px;
    color: #333;
    background: #f9f9fc;
    outline: none;
    transition: border-color 0.2s, box-shadow 0.2s;
    appearance: auto;
}
.enq-field input:focus,
.enq-field select:focus {
    border-color: #1F4FB2;
    box-shadow: 0 0 0 3px rgba(31,79,178,0.1);
    background: #fff;
}

/* ── Submit button ── */
.enq-submit-btn {
    width: 100%;
    background: linear-gradient(135deg, #1F4FB2, #1565c0);
    color: #fff;
    border: none;
    border-radius: 9px;
    padding: 12px;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    margin-top: 6px;
    transition: 0.3s;
    letter-spacing: 0.3px;
}
.enq-submit-btn:hover {
    background: linear-gradient(135deg, #163a8a, #0d47a1);
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(31,79,178,0.35);
}

/* ── Skip link ── */
.enq-skip {
    text-align: center;
    font-size: 12px;
    color: #aaa;
    margin-top: 12px;
    margin-bottom: 0;
    cursor: pointer;
    transition: color 0.2s;
}
.enq-skip:hover {
    color: #e74c3c;
    text-decoration: underline;
}

/* ── Close buttons ── */
.enq-close-desktop {
    position: absolute;
    top: 14px;
    right: 16px;
    background: #f0f0f5;
    border: none;
    width: 32px;
    height: 32px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    color: #555;
    cursor: pointer;
    transition: 0.2s;
    z-index: 10;
}
.enq-close-desktop:hover {
    background: #e74c3c;
    color: #fff;
}
.enq-close-mobile {
    display: none;
    position: absolute;
    top: 12px;
    right: 12px;
    background: rgba(255,255,255,0.2);
    border: none;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    align-items: center;
    justify-content: center;
    font-size: 13px;
    color: #fff;
    cursor: pointer;
    z-index: 10;
}

/* ── Responsive ── */
@media (max-width: 650px) {
    .enq-modal-dialog { max-width: 96vw; }
    .enq-modal-content { flex-direction: column; }
    .enq-left-panel { width: 100%; min-height: unset; }
    .enq-left-inner { padding: 24px 20px 16px; flex-direction: row; flex-wrap: wrap; align-items: center; gap: 10px; }
    .enq-logo { width: 50px; height: 50px; margin-bottom: 0; }
    .enq-school-name { font-size: 13px; }
    .enq-features, .enq-campus-img, .enq-divider { display: none; }
    .enq-right-panel { width: 100%; }
    .enq-right-inner { padding: 20px; }
    .enq-close-mobile { display: flex; }
    .enq-close-desktop { display: none; }
}
</style>

<script>
/* Auto-show modal on page load after 1.5s */
document.addEventListener('DOMContentLoaded', function () {
    setTimeout(function () {
        var enquiryModal = new bootstrap.Modal(document.getElementById('enquiryModal'));
        enquiryModal.show();
    }, 1500);
});

/* Form submission */
document.getElementById('enquiryForm').addEventListener('submit', function(e) {
    e.preventDefault();
    var btn = document.getElementById('enqSubmitBtn');
    var alertBox = document.getElementById('enq-alert');
    btn.disabled = true;
    btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span> Submitting...';
    alertBox.className = 'alert d-none';

    fetch('enquiry_handler.php', { method: 'POST', body: new FormData(this) })
        .then(function(res) { return res.json(); })
        .then(function(data) {
            alertBox.className = 'alert ' + (data.success ? 'alert-success' : 'alert-danger');
            alertBox.textContent = data.message;
            if (data.success) {
                document.getElementById('enquiryForm').reset();
                setTimeout(function() {
                    bootstrap.Modal.getInstance(document.getElementById('enquiryModal')).hide();
                }, 2500);
            }
        })
        .catch(function() {
            alertBox.className = 'alert alert-danger';
            alertBox.textContent = 'Network error. Please try again.';
        })
        .finally(function() {
            btn.disabled = false;
            btn.innerHTML = '<i class="fas fa-paper-plane me-2"></i> Submit Enquiry';
        });
});
</script>

     <!-- Back to Top -->
    <a href="#" class="back-to-top">
    <i class="fa fa-angle-up"></i>
</a>
<style>.back-to-top {
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 55px;
    height: 55px;
    background: #1F4FB2;
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    cursor: pointer;
    box-shadow: 0 6px 18px rgba(0,0,0,0.25);
    transition: 0.3s ease;
    z-index: 9999;
    display: none; /* hidden by default */
}

.back-to-top:hover {
    background: #858586;
    transform: translateY(-4px);
}
</style>
<script>
window.addEventListener("scroll", function() {
    const button = document.querySelector(".back-to-top");
    if (window.scrollY > 200) {
        button.style.display = "flex";
    } else {
        button.style.display = "none";
    }
});
</script>







    <!-- JavaScript Libraries -->
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>
</html>