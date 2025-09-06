<?php include('includes/header.php'); ?>
<div class="container mt-5">
  <h1 class="text-center mb-4">Mon CV</h1>
  <div class="row">
    <!-- CV Français -->
    <div class="col-md-6 mb-4">
      <h4 class="text-center">French Version</h4>
      <div class="ratio ratio-4x3 mb-3">
        <iframe src="assets/cv/cv_fr.pdf" frameborder="0"></iframe>
      </div>
      <div class="text-center">
        <a href="assets/cv/cv_fr.pdf" download class="btn btn-primary">
          <i class="fas fa-download"></i> Télécharger
        </a>
      </div>
    </div>

    <!-- CV Anglais -->
    <div class="col-md-6 mb-4">
      <h4 class="text-center">English Version</h4>
      <div class="ratio ratio-4x3 mb-3">
        <iframe src="assets/cv/cv_en.pdf" frameborder="0"></iframe>
      </div>
      <div class="text-center">
        <a href="assets/cv/cv_en.pdf" download class="btn btn-success">
          <i class="fas fa-download"></i> Download
        </a>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
