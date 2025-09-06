<?php
  $currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hugo BERTAGNA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link href="/assets/css/style.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">

</head>
<body>
<nav class="navbar d-flex justify-content-between align-items-center">
  <!-- Left section: brand + menu -->
  <div class="navbar-left d-flex align-items-center">
    <a class="navbar-brand" href="index.php">
      <img src="../assets/img/logo.png" alt="Logo">
    </a>
    <ul class="navbar-nav d-flex flex-row mb-0">
      <li><a class="nav-link" href="index.php">Home</a></li>
      <li><a class="nav-link" href="cv.php">Resume</a></li>
      <li><a class="nav-link" href="certifications.php">Certifications</a></li>
      <li><a class="nav-link" href="projets.php">Projects</a></li>
    </ul>
  </div>

  <!-- Right section: buttons -->
  <div class="navbar-right d-flex align-items-center gap-2">
    <button id="themeToggle"><i id="themeIcon" class="fas fa-moon"></i></button>
    <a href="/<?php echo $currentPage; ?>" id="langSwitch"> FR</a>
  </div>
</nav>
