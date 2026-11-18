<?php
/**
 * Header Component with Top Bar & Simple Main Navbar
 */
$currentPage = basename($_SERVER['PHP_SELF'] ?? '');
?>
<!-- ===== HEADER / NAVBAR ===== -->
<header id="site-header" class="site-header shadow-sm">

  <!-- ===== 1. DESKTOP TOP BAR (Hidden on Mobile) ===== -->
  <div class="top-bar py-2 d-none d-lg-block">
    <div class="container-xl px-3 px-lg-4">
      <div class="d-flex align-items-center justify-content-between gap-2 top-bar-inner">

        <!-- Left Badges -->
        <div class="d-flex flex-nowrap align-items-center gap-3 gap-xl-4 top-bar-left">
          <div class="top-badge d-flex align-items-center gap-1">
            <span class="material-icons-round text-accent fs-6">verified</span>
            <span>ASTA Certified Partner</span>
          </div>
          <div class="top-badge d-flex align-items-center gap-1">
            <span class="material-icons-round text-accent fs-6">workspace_premium</span>
            <span>16+ Years Experience</span>
          </div>
          <div class="top-badge d-flex align-items-center gap-1">
            <span class="material-icons-round text-accent fs-6">headset_mic</span>
            <span>24×7 Live Travel Desk</span>
          </div>
        </div>

        <!-- Right Phone Number -->
        <div class="d-flex align-items-center justify-content-end gap-2 gap-sm-3 top-bar-right ms-auto">
          <a href="tel:+18337431225" class="top-phone d-inline-flex align-items-center gap-1 text-decoration-none">
            <span class="material-icons-round" style="font-size:16px;">call</span>
            <span class="top-phone-number">1-833-743-1225</span>
          </a>
        </div>

      </div>
    </div>
  </div>

  <!-- ===== MOBILE TOP BAR (Visible only on Mobile & Tablets < lg) ===== -->
  <div class="mobile-top-bar d-lg-none py-2">
    <div class="container-fluid px-3">
      <div class="d-flex align-items-center justify-content-between gap-2">
        <div class="mobile-top-avail d-flex align-items-center gap-2">
          <span class="mobile-avail-dot"></span>
          <span class="mobile-avail-text">24/7 Available</span>
        </div>
        <a href="tel:+18337431225" class="btn btn-mobile-top-call text-decoration-none d-inline-flex align-items-center gap-1">
          <i class="bi bi-telephone-fill"></i>
          <span>Call Now</span>
        </a>
      </div>
    </div>
  </div>

  <!-- ===== 2. MAIN NAVBAR ===== -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white py-2" id="mainNavbar">
    <div class="container-xl px-3 px-lg-4">

      <!-- Logo -->
      <a class="navbar-brand py-1" href="index.php">
        <img src="assets/images/logo/logo.png" alt="Business Class Air Travel" height="58" class="d-inline-block align-middle">
      </a>

      <!-- Mobile Toggle Button -->
      <button class="navbar-toggler border-0 shadow-none" type="button"
        data-bs-toggle="collapse" data-bs-target="#navbarMain"
        aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Simple Nav Links without icons or special characters -->
      <div class="collapse navbar-collapse" id="navbarMain">
        <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2 my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link <?= ($currentPage === 'index.php' || $currentPage === '') ? 'active' : ''; ?>" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#contact">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= ($currentPage === 'blog.php') ? 'active' : ''; ?>" href="blog.php">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#flight-deals">Best Deal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= ($currentPage === 'flight-results.php') ? 'active' : ''; ?>" href="flight-results.php">Cheap Flights</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#premier-airlines">Airlines</a>
          </li>
        </ul>
      </div>

    </div>
  </nav>

</header>
<!-- ===== END HEADER ===== -->
