<?php include('includes/header.php'); ?>
<div class="container mt-5">
  <h1 class="text-center mb-5">My Projects</h1>
  <div class="row justify-content-center g-5">
    <!-- Project 1 -->
    <div class="col-12 col-lg-5">
      <div class="project-card bg-white rounded-4 shadow p-4 h-100 d-flex flex-column align-items-center">
        <img src="/assets/img/portfolio_en.png" class="project-img mb-3" alt="Personal Portfolio">
        <h3 class="mb-3">Personal Portfolio</h3>
        <p class="lead text-center mb-4">
          A responsive showcase website built with PHP and Bootstrap, highlighting my background, skills, and projects. 
          This project helped me refine my web integration and responsive design abilities.
        </p>
        <div class="d-flex flex-wrap gap-2 justify-content-center mb-3">
          <span class="competence-badge">PHP</span>
          <span class="competence-badge">Bootstrap</span>
          <span class="competence-badge">HTML/CSS</span>
          <span class="competence-badge">Responsive Design</span>
        </div>
        <a href="#" class="btn btn-outline-primary mt-auto">View Project</a>
      </div>
    </div>
    <!-- Project 2 -->
    <div class="col-12 col-lg-5">
      <div class="project-card bg-white rounded-4 shadow p-4 h-100 d-flex flex-column align-items-center">
        <img src="/assets/img/Vmanager.png" class="project-img mb-3" alt="VManager Platform">
        <h3 class="mb-3">VManager</h3>
        <p class="lead text-center mb-4">
          Final-year project for the BTS CIEL program: a web-based platform for Roverba to manage virtual machines on a secure private cloud. 
          Built using Proxmox, Ansible, PHP, and Python, it automates VM creation, administration, and remote access, with dedicated tools for both users and company administrators.
        </p>
        <div class="d-flex flex-wrap gap-2 justify-content-center mb-3">
          <span class="competence-badge">Proxmox</span>
          <span class="competence-badge">Ansible</span>
          <span class="competence-badge">Python</span>
          <span class="competence-badge">PHP</span>
        </div>
        <a href="https://github.com/VmManager/site-web" class="btn btn-outline-primary mt-auto">View Project</a>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
