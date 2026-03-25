<?php
$conn = mysqli_connect("localhost", "root", "", "portofolio");

$certificates = mysqli_query($conn, "SELECT * FROM certificates");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <div class="page-content">

<!-- ================= NAVBAR ================= -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top custom-navbar">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Zelsya's Portfolio</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#certificates">Certificates</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section id="home" class="home-section">
    <div class="container">
        <div class="home-card">
            <div class="row align-items-center">

                <div class="col-md-4 text-center">
                <div class="photo-wrapper">
                    <div class="photo-bg"></div>
                    <img src="images/profile.png" class="profile-img" alt="Profile Photo">
                </div>
            </div>

                    <div class="col-md-8 home-text">
                    <h1 class="hero-title">
                        Hello,<br>I'm Zelsya!
                    </h1>
                    <p class="lead mt-3">
                        My name is Zelsya Rizqita Rahmadhini,
                        an Information Systems student who has an interest in technology and website development.
                    </p>

    
            

            </div>
        </div>
    </div>
</section>

<!-- ================= ABOUT SECTION ================= -->
<section id="about" class="about-section">

    <div class="container text-center mb-5">
        <h2>About Me</h2>
        <p> I'am an Information Systems student at Mulawarman University with an interest in technology.
            During my studies, I have studied and worked on various programming and data management-based projects. 
            I'am interested in continuing to learn and develop my skills in the world of technology, particularly website development.</p>
    </div>
    <!-- CARDS -->
    <div class="container">
        <div class="row g-4">

    <!-- SKILLS -->
    <div class="col-md-6 mb-4">
    <div class="custom-card text-center">
        <div class="icon-circle">
            💻
        </div>
        <h3 class="mt-3">My Skills</h3>

        <div class="d-flex justify-content-between mt-3">
            <span>Programming</span>
            <span>85%</span>
        </div>
        <div class="skill-bar">
            <div class="skill-fill" style="width:85%"></div>
        </div>

        <div class="d-flex justify-content-between mt-4">
            <span>Canva Design</span>
            <span>90%</span>
        </div>
        <div class="skill-bar">
            <div class="skill-fill" style="width:90%"></div>
        </div>

        <div class="d-flex justify-content-between mt-3">
            <span>Communication</span>
            <span>88%</span>
        </div>
        <div class="skill-bar">
            <div class="skill-fill" style="width:88%"></div>
        </div>

        <div class="d-flex justify-content-between mt-3">
            <span>Public Speaking</span>
            <span>82%</span>
        </div>
        <div class="skill-bar">
            <div class="skill-fill" style="width:82%"></div>
        </div>

        <div class="d-flex justify-content-between mt-3">
            <span>Teamwork</span>
            <span>87%</span>
        </div>
        <div class="skill-bar">
            <div class="skill-fill" style="width:87%"></div>
        </div>

    </div>
</div>

    <!-- EXPERIENCE -->
    <div class="col-md-6 mb-4">
        <div class="custom-card text-center">
            <div class="icon-circle">
                💼
            </div>

            <h3 class="mt-3">Experience</h3>

            <ul class="text-start mt-4">
            <li>Developing systems-based and programming projects</li>
            <li>Participating in technology workshops, bootcamps, and seminars</li>
            <li>Actively participating in campus organizations and committees</li>
            <li>Presenting projects as part of developing communication skills</li>
            <li>Participating in Biology and Mathematics Olympiads</li>
            </ul>

        </div>
    </div>

</div>
<!-- ================= CERTIFICATES SECTION ================= -->
<section id="certificates" class="certificates-section">

    <div class="container">
        <div class="home-card"> 

            <h2 class="section-title text-center mb-5">Certificates</h2>

<div class="row g-4">
<?php while($c = mysqli_fetch_assoc($certificates)) { ?>
    
    <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
        <div class="card cert-card">
            
            <img src="images/<?php echo $c['gambar']; ?>" class="card-img-top" alt="Certificate">

            <div class="card-body text-center p-3">
                <a href="images/<?php echo $c['gambar']; ?>" target="_blank" class="btn btn-brown">
                    View Sertifikat
                </a>
            </div>

        </div>
    </div>

<?php } ?>
</div>

    </div>
    </div>
</section>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<footer class="custom-footer">
    © 2026 Zelsya Rizqita | Portfolio Website
</footer>
</body>
</html>