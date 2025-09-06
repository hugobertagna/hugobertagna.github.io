<?php include('includes/header.php'); ?>
<div class="container mt-5">
  <div class="row justify-content-center text-center">
    <div class="col-lg-8">
      <h1 class="display-5 fw-bold mb-4">Welcome to my portfolio</h1>
      <p class="lead mb-4">
        I'm a first-year cybersecurity engineering student at CPE Lyon, passionate about IT, development, and digital security.
        My goal is to become a committed professional in protecting digital systems, capable of innovating and tackling technical challenges.
      </p>
      <hr class="my-4">
      <h3 class="mb-3">Who am I?</h3>
      <p>
        After completing a BTS CIEL at ORT Lyon, I chose to pursue cybersecurity engineering.
        Curious and determined, I love learning through experimentation, exploring new technologies, and deeply understanding how systems work.
      </p>
      <div class="mt-5">
        <a href="cv.php" class="btn btn-outline-primary btn-lg">
          View My Resume
        </a>
      </div>
    </div>
  </div>

  <!-- Academic Path -->
  <div class="row justify-content-center mt-5">
    <h2 class="text-center mb-4">Academic Path</h2>
    <div class="col-12 d-flex flex-column align-items-center">
      <div class="d-flex flex-row align-items-center justify-content-center gap-4 flex-wrap">
        <!-- Card 1 -->
        <div class="school-card text-center p-3">
          <img src="../assets/img/immac.png" alt="High School" class="school-logo mb-2">
          <h5 class="mb-1">Lycée Immaculée Conception</h5>
          <div class="text-muted">General Baccalaureate</div>
        </div>
        <!-- Arrow + BAC -->
        <div class="d-flex flex-column align-items-center mx-2">
          <span class="badge bg-secondary mb-1">BAC+2</span>
          <i class="fas fa-arrow-right fa-2x text-secondary"></i>
        </div>
        <!-- Card 2 -->
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
        <!-- Card 3 -->
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
