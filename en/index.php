<?php include('includes/header.php'); ?>
<div class="container mt-5 position-relative">
  <!-- Prestige card on the left, isolated -->
  <div class="prestige-card position-absolute top-0 start-0 mt-2 ms-2 d-none d-lg-block" style="z-index:10; left:-100px;">
    <div class="card shadow rounded-4 p-3 text-center" style="min-width:260px; background:rgba(255,255,255,0.95);">
      <img src="../assets/img/hugo.jpg" alt="Profile photo" class="rounded-circle mb-2" style="width:80px; height:80px; object-fit:cover; border:3px solid #fbc02d;">
      <h5 class="fw-bold mb-1">Bertagna Hugo</h5>
      <div class="text-muted mb-1">Cybersecurity Engineering Student</div>
      <a href="mailto:hugo.bertagna@cpe.fr" class="d-block mb-2" style="color:#1a237e; text-decoration:none;">
        <i class="fas fa-envelope"></i> hugo.bertagna@cpe.fr
      </a>
      <div>
        <a href="https://www.linkedin.com/in/hugo-bertagna-aa6768311/" target="_blank" class="me-2" style="color:#0a66c2;"><i class="fab fa-linkedin fa-lg"></i></a>
        <a href="https://github.com/hugobertagna" target="_blank" style="color:#232323;"><i class="fab fa-github fa-lg"></i></a>
      </div>
    </div>
  </div>
  <!-- End prestige card -->

  <div class="row justify-content-center text-center">
    <div class="col-lg-8">
      <h1 class="display-5 fw-bold mb-4">Welcome to My Portfolio</h1>
      <p class="lead mb-4">
        I'm a first-year cybersecurity engineering student at CPE Lyon, passionate about IT, development, and digital security.
        My goal is to become a committed professional in protecting digital systems, capable of innovating and tackling technical challenges.
      </p>
      <hr class="my-4">
      <h3 class="mb-3">About Me</h3>
      <p>
        After completing a BTS CIEL at ORT Lyon, I chose to pursue further studies in cybersecurity.
        Curious and determined, I enjoy learning through experimentation, exploring new technologies, and deeply understanding computer systems.
      </p>
      <div class="mt-5">
        <a href="cv.php" class="btn btn-outline-primary btn-lg">
          View My Resume
        </a>
      </div>
    </div>
  </div>

  <!-- Academic background -->
  <div class="row justify-content-center mt-5">
    <h2 class="text-center mb-4">Academic Background</h2>
    <div class="col-12 d-flex flex-column align-items-center">
      <div class="d-flex flex-row align-items-center justify-content-center gap-4 flex-wrap">
        <!-- Step 1 -->
        <div class="school-card text-center p-3">
          <img src="../assets/img/immac.png" alt="High School" class="school-logo mb-2">
          <h5 class="mb-1">Immaculée Conception High School</h5>
          <div class="text-muted">General Baccalaureate</div>
        </div>
        <!-- Arrow + BAC -->
        <div class="d-flex flex-column align-items-center mx-2">
          <span class="badge bg-secondary mb-1">BAC+2</span>
          <i class="fas fa-arrow-right fa-2x text-secondary"></i>
        </div>
        <!-- Step 2 -->
        <div class="school-card text-center p-3">
          <img src="../assets/img/ortlyon.png" alt="ORT Lyon" class="school-logo mb-2">
          <h5 class="mb-1">ORT Lyon</h5>
          <div class="text-muted">BTS CIEL IR</div>
        </div>
        <!-- Arrow + BAC+2 -->
        <div class="d-flex flex-column align-items-center mx-2">
          <span class="badge bg-secondary mb-1">BAC+5</span>
          <i class="fas fa-arrow-right fa-2x text-secondary"></i>
        </div>
        <!-- Step 3 -->
        <div class="school-card text-center p-3">
          <img src="../assets/img/cpe.png" alt="CPE Lyon" class="school-logo mb-2">
          <h5 class="mb-1">CPE Lyon</h5>
          <div class="text-muted">Cybersecurity Engineering Program</div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
