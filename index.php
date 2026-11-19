<?php

$page_title       = 'Business Class Air Travel | Exclusive Premium Flight Deals';
$meta_description = 'Get exclusive business class and first class flight deals at unbeatable prices. Save up to 70% on premium flights worldwide. IATA certified, 24/7 support.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= htmlspecialchars($page_title); ?></title>
  <meta name="description" content="<?= htmlspecialchars($meta_description); ?>">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="assets/images/logo/logo.png">

  <!-- Google Fonts (Plus Jakarta Sans & Playfair Display for Luxury Headings) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,600;1,700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Round" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Bootstrap 5.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- AOS CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

  <!-- Swiper 11 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" href="assets/css/theme.css?v=<?= time(); ?>">
</head>
<body class="d-flex flex-column min-vh-100">

  <?php include 'components/header.php'; ?>

  <main class="flex-grow-1" id="main-content">
    <?php include 'components/hero-section.php'; ?>
    <?php include 'components/destinations-section.php'; ?>
    <?php include 'components/cta-section.php'; ?>
    <?php include 'components/flight-deals-section.php'; ?>
    <?php include 'components/premier-destinations-section.php'; ?>
    <?php include 'components/premier-airlines-section.php'; ?>
    <?php include 'components/popular-business-destinations-section.php'; ?>
    <?php include 'components/blog-section.php'; ?>
    <?php include 'components/testimonial-section.php'; ?>
    <?php include 'components/faq-section.php'; ?>
    <?php include 'components/newsletter-cta-section.php'; ?>

    <!-- Future sections will be included here -->
    <!-- <?php // include 'components/services-section.php'; ?> -->
    <!-- <?php // include 'components/booking-section.php'; ?> -->
  </main>

  <?php include 'components/footer.php'; ?>

  <!-- Bootstrap 5.3 Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- AOS JS -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

  <!-- Swiper 11 Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Main JS -->
  <script src="assets/js/main.js?v=<?= time(); ?>"></script>

</body>
</html>
