<?php
  $page = basename($_SERVER['PHP_SELF']);
  function active($name, $page){ return $name === $page ? 'active fw-semibold' : ''; }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Steps of Hope Africa</title>
  <meta name="description" content="Steps of Hope Africa (SOHA) - Rebuilding Hope Together.">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

<div class="border-bottom bg-white">
  <div class="container py-2 d-flex flex-wrap align-items-center gap-3 small text-muted">
    <span><i class="bi bi-geo-alt"></i> Fort Portal, Uganda</span>
    <span><i class="bi bi-envelope"></i> stepsofhopeafrica@gmail.com</span>
    <span><i class="bi bi-telephone"></i> +256783 264879</span>
    <span class="ms-auto d-none d-md-inline">
      <a class="text-muted text-decoration-none me-3" href="#"><i class="bi bi-facebook"></i></a>
      <a class="text-muted text-decoration-none me-3" href="#"><i class="bi bi-instagram"></i></a>
      <a class="text-muted text-decoration-none" href="#"><i class="bi bi-youtube"></i></a>
    </span>
  </div>
</div>

<nav class="navbar navbar-expand-lg bg-soha-green sticky-top shadow-sm">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center gap-2" href="index.php">
      <img src="assets/img/logo.jpg" alt="SOHA Logo" width="48" height="48" class="rounded-circle object-fit-cover">
      <div>
        <div class="fw-bold text-white">Steps of Hope Africa</div>
        <small class="text-white-50">Rebuilding Hope Together</small>
      </div>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain" aria-controls="navMain" aria-expanded="false" aria-label="Toggle navigation" style="border-color: rgba(255,255,255,.5);">
      <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
    </button>

    <div class="collapse navbar-collapse" id="navMain">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center gap-lg-1">
        <li class="nav-item"><a class="nav-link text-white <?= active('index.php',$page) ?>" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link text-white <?= active('about.php',$page) ?>" href="about.php">About</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white <?= in_array($page, ['programs.php','program-education.php','program-outreach.php','program-orphanage.php','program-environment.php','program-health.php','program-career.php']) ? 'active fw-semibold' : '' ?>" href="programs.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">Programs</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="program-education.php">Education Support</a></li>
            <li><a class="dropdown-item" href="program-outreach.php">Community Outreach</a></li>
            <li><a class="dropdown-item" href="program-orphanage.php">Orphanage Support</a></li>
            <li><a class="dropdown-item" href="program-environment.php">Environmental Conservation</a></li>
            <li><a class="dropdown-item" href="program-health.php">Health Support</a></li>
            <li><a class="dropdown-item" href="program-career.php">Career Development</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link text-white <?= active('impact.php',$page) ?>" href="impact.php">Impact</a></li>
        <li class="nav-item"><a class="nav-link text-white <?= active('gallery.php',$page) ?>" href="gallery.php">Gallery</a></li>
        <li class="nav-item"><a class="nav-link text-white <?= active('news.php',$page) ?>" href="news.php">News</a></li>
        <li class="nav-item"><a class="nav-link text-white <?= active('contact.php',$page) ?>" href="contact.php">Contact</a></li>
        <li class="nav-item ms-lg-2">
          <a class="btn btn-soha-orange" href="donate.php"><i class="bi bi-heart-fill me-1"></i> Donate</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
