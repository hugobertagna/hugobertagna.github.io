<?php include('includes/header.php'); ?>
<div class="container mt-5">
  <div class="row justify-content-center text-center">
    <div class="col-lg-8">
      <h1 class="display-5 fw-bold mb-4">Bienvenue sur mon portfolio</h1>
      <p class="lead mb-4">
        Je suis étudiant en première année du cycle ingénieur en cybersécurité à CPE Lyon, passionné par l’informatique, le développement et la sécurité numérique.
        Mon objectif est de devenir un professionnel engagé dans la protection du numérique, capable d’innover et de relever des défis techniques.
      </p>
      <hr class="my-4">
      <h3 class="mb-3">Qui suis-je ?</h3>
      <p>
        Après un BTS CIEL à l’ORT Lyon, j’ai choisi de poursuivre mes études dans le domaine de la cybersécurité.
        Curieux et déterminé, j’aime apprendre en expérimentant, explorer les nouvelles technologies et comprendre en profondeur les systèmes informatiques.
      </p>
      <div class="mt-5">
        <a href="cv.php" class="btn btn-outline-primary btn-lg">
          Voir mon CV
        </a>
      </div>
    </div>
  </div>

  <!-- Parcours scolaire -->
  <div class="row justify-content-center mt-5">
    <h2 class="text-center mb-4">Parcours scolaire</h2>
    <div class="col-12 d-flex flex-column align-items-center">
      <div class="d-flex flex-row align-items-center justify-content-center gap-4 flex-wrap">
        <!-- Case 1 -->
        <div class="school-card text-center p-3">
          <img src="assets/img/immac.png" alt="Lycée" class="school-logo mb-2">
          <h5 class="mb-1">Lycée Immaculée Conception</h5>
          <div class="text-muted">Bac général </div>
        </div>
        <!-- Flèche + BAC -->
        <div class="d-flex flex-column align-items-center mx-2">
          <span class="badge bg-secondary mb-1">BAC+2</span>
          <i class="fas fa-arrow-right fa-2x text-secondary"></i>
        </div>
        <!-- Case 2 -->
        <div class="school-card text-center p-3">
          <img src="assets/img/ortlyon.png" alt="ORT Lyon" class="school-logo mb-2">
          <h5 class="mb-1">ORT Lyon</h5>
          <div class="text-muted">BTS CIEL IR</div>
        </div>
        <!-- Flèche + BAC+2 -->
        <div class="d-flex flex-column align-items-center mx-2">
          <span class="badge bg-secondary mb-1">BAC+5</span>
          <i class="fas fa-arrow-right fa-2x text-secondary"></i>
        </div>
        <!-- Case 3 -->
        <div class="school-card text-center p-3">
          <img src="assets/img/cpe.png" alt="CPE Lyon" class="school-logo mb-2">
          <h5 class="mb-1">CPE Lyon</h5>
          <div class="text-muted">Cycle Ingénieur Cybersécurité</div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
