<?php include('includes/header.php'); ?>
<div class="container mt-5">
  <h1 class="text-center mb-5">Mes Projets</h1>
  <div class="row justify-content-center g-5">
    <!-- Projet 1 -->
    <div class="col-12 col-lg-5">
      <div class="project-card bg-white rounded-4 shadow p-4 h-100 d-flex flex-column align-items-center">
        <img src="assets/img/portfolio_fr.png" class="project-img mb-3" alt="Portfolio Personnel">
        <h3 class="mb-3">Portfolio Personnel</h3>
        <p class="lead text-center mb-4">
          Un site vitrine responsive développé en PHP & Bootstrap, présentant mon parcours, mes compétences et mes réalisations. 
          Ce projet m’a permis de perfectionner mes compétences en intégration web et en design responsive.
        </p>
        <div class="d-flex flex-wrap gap-2 justify-content-center mb-3">
          <span class="competence-badge">PHP</span>
          <span class="competence-badge">Bootstrap</span>
          <span class="competence-badge">HTML/CSS</span>
          <span class="competence-badge">Responsive</span>
        </div>
        <a href="#" class="btn btn-outline-primary mt-auto">Voir le projet</a>
      </div>
    </div>
    <!-- Projet 2 -->
    <div class="col-12 col-lg-5">
      <div class="project-card bg-white rounded-4 shadow p-4 h-100 d-flex flex-column align-items-center">
        <img src="assets/img/Vmanager.png" class="project-img mb-3" alt="Application To-Do">
        <h3 class="mb-3">VManager</h3>
        <p class="lead text-center mb-4">
        Projet de fin d’études BTS CIEL : plateforme web pour l’entreprise Roverba, permettant de gérer des machines virtuelles sur un cloud privé sécurisé. Basée sur Proxmox, Ansible, PHP et Python, elle automatise la création, l’administration et la connexion aux VM, avec des outils dédiés aux utilisateurs et aux chefs d’entreprise.        <div class="d-flex flex-wrap gap-2 justify-content-center mb-3">
          <span class="competence-badge">Proxmox</span>
          <span class="competence-badge">Ansible</span>
          <span class="competence-badge">Python</span>
          <span class="competence-badge">Php</span>
        </div>
        <a href="https://github.com/VmManager/site-web" class="btn btn-outline-primary mt-auto">Voir le projet</a>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
