<?php
/**
 * Master Layout
 * Designed for modular Core PHP and smooth transition to CodeIgniter views.
 * 
 * Variables accepted:
 * - $page_title (string)
 * - $meta_description (string)
 * - $extra_css (array or raw string)
 * - $extra_js (array or raw string)
 * - $content (string or callable)
 */

$page_title = $page_title ?? 'New Project';
$meta_description = $meta_description ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= htmlspecialchars($page_title); ?></title>
  <?php if (!empty($meta_description)): ?>
    <meta name="description" content="<?= htmlspecialchars($meta_description); ?>">
  <?php endif; ?>

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="assets/images/logo/favicon.ico">

  <!-- Google Fonts (Plus Jakarta Sans & Playfair Display for Luxury Headings) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,600;1,700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Material Icons & Bootstrap Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Round" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Bootstrap 5.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- AOS (Animate on Scroll) CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

  <!-- Swiper 11 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

  <!-- Custom Theme CSS -->
  <link rel="stylesheet" href="assets/css/theme.css?v=<?= time(); ?>">

  <?php if (isset($extra_css)) echo $extra_css; ?>
</head>
<body class="d-flex flex-column min-vh-100">

  <!-- Main Content Slot -->
  <main class="flex-grow-1" id="main-content">
    <?php 
    if (isset($content)) {
      if (is_callable($content)) {
        $content();
      } else {
        echo $content;
      }
    }
    ?>
  </main>

  <!-- Bootstrap 5.3 Bundle JS (with Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- AOS (Animate on Scroll) JS -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

  <!-- Swiper 11 Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Custom Main JS -->
  <script src="assets/js/main.js?v=<?= time(); ?>"></script>

  <?php if (isset($extra_js)) echo $extra_js; ?>
</body>
</html>

