<?php
/**
 * Destination Detail Inner Page: Business Class to Dubai (DXB)
 * Business Class Air Travel
 * 
 * Features:
 * - Dynamic / Reference Inner Page for "Popular Business Class destinations"
 * - Luxury Top Banner Hero with breadcrumbs, Dubai skyline imagery, and quick stat badges
 * - Responsive 2-Column Layout (Content left 8 cols, Sticky Booking Sidebar right 4 cols)
 * - Sidebar includes:
 *     - "Find a Business Class Deal" search form with exact inputs as hero section (Trip Type, Direct Only, Origin, Destination, Dates, Travelers, Cabin Class, dynamic Email/Phone)
 *     - Quick Direct Phone Concierge Widget
 *     - Other Popular Business Class Destinations quick links
 * - Rich Destination Showcase Content:
 *     - About Dubai & The Business Traveler Experience
 *     - Feature Images & Luxury Photo Showcase Gallery (Burj Khalifa, Palm Jumeirah, Desert, DXB Luxury Lounge)
 *     - Top Business Class Airlines Flying to Dubai (Emirates A380 Qsuite benchmark, Qatar, British Airways)
 *     - Best Time to Visit & Flight Tips
 *     - Popular Business Class Flight Routes to Dubai with indicative savings
 *     - FAQ for booking business class to Dubai
 * - CTA Section ("Why Choose Business Class Air Travel")
 * - VIP Newsletter Subscribe Section
 * - Master Site Footer
 */

$destination = [
  'city'            => 'Dubai',
  'country'         => 'United Arab Emirates',
  'code'            => 'DXB',
  'airport_name'    => 'Dubai International Airport (DXB)',
  'hero_banner'     => 'assets/images/banners/hero-banner.webp',
  'main_image'      => 'assets/images/imgs/dubai.png',
  'starting_from'   => '$3,450',
  'average_saving'  => '58%',
  'flight_time_nyc' => '12h 45m (Non-stop)',
  'flight_time_lon' => '7h 10m (Non-stop)',
  'currency'        => 'AED (UAE Dirham)',
  'best_season'     => 'November to April'
];

$page_title       = 'Cheap Business Class Flights to Dubai (DXB) | Save Up to 60% | Business Class Air Travel';
$meta_description = 'Book discounted Business Class flights to Dubai (DXB). Lie-flat seats, Emirates A380 lounge access, 2x32kg luggage, and secret consolidator airfares. Call our 24/7 desk.';

// Other popular destinations for the sidebar
$other_destinations = [
  ['city' => 'London',    'code' => 'LHR', 'country' => 'United Kingdom', 'image' => 'assets/images/imgs/london.png', 'fare' => '$3,190*'],
  ['city' => 'Paris',     'code' => 'CDG', 'country' => 'France',         'image' => 'assets/images/imgs/paris.png',  'fare' => '$3,080*'],
  ['city' => 'Tokyo',     'code' => 'HND', 'country' => 'Japan',          'image' => 'assets/images/imgs/tokyo.png',  'fare' => '$3,890*'],
  ['city' => 'Singapore', 'code' => 'SIN', 'country' => 'Singapore',      'image' => 'assets/images/imgs/tokyo.png',  'fare' => '$3,950*']
];
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

  <!-- Google Fonts (Playfair Display & Plus Jakarta Sans) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,600;1,700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Material Icons & Bootstrap Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Round" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Bootstrap 5.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- AOS CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" href="assets/css/theme.css?v=<?= time(); ?>">

  <style>
    /* =========================================================================
       DESTINATION INNER PAGE SPECIFIC STYLES
       ========================================================================= */

    /* Hero Banner */
    .dest-inner-hero {
      position: relative;
      background-color: var(--color-navy);
      background-image: 
        linear-gradient(135deg, rgba(8, 38, 76, 0.94) 0%, rgba(18, 61, 112, 0.88) 55%, rgba(6, 26, 52, 0.96) 100%),
        url('assets/images/banners/hero-banner.webp');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-blend-mode: multiply;
      padding: 64px 0 80px 0;
      color: #ffffff;
      overflow: hidden;
    }

    .dest-inner-hero::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 30px;
      background: linear-gradient(to top, rgba(255,255,255,0.06), transparent);
      pointer-events: none;
    }

    .dest-inner-breadcrumb .breadcrumb {
      background: transparent;
      padding: 0;
      font-size: 0.88rem;
    }

    .dest-inner-breadcrumb .breadcrumb-item + .breadcrumb-item::before {
      content: "›";
      color: rgba(255, 255, 255, 0.5);
      font-size: 1.15rem;
      line-height: 1;
      padding: 0 0.45rem;
    }

    .dest-pill-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
      padding: 0.35rem 0.85rem;
      border-radius: 50px;
      font-size: 0.78rem;
      font-weight: 700;
      letter-spacing: 0.04em;
      text-transform: uppercase;
      background: rgba(162, 13, 36, 0.95);
      color: #ffffff;
      box-shadow: 0 2px 8px rgba(162, 13, 36, 0.3);
    }

    .dest-inner-title {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: clamp(2.1rem, 3.8vw, 3.35rem);
      font-weight: 700;
      color: #ffffff;
      line-height: 1.2;
      letter-spacing: -0.015em;
      text-shadow: 0 2px 10px rgba(0, 0, 0, 0.4);
    }

    .dest-stat-pill {
      background: rgba(255, 255, 255, 0.12);
      backdrop-filter: blur(8px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 10px;
      padding: 8px 16px;
      color: #ffffff;
      display: inline-flex;
      flex-direction: column;
    }

    .dest-stat-label {
      font-size: 0.7rem;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      color: rgba(255, 255, 255, 0.7);
    }

    .dest-stat-value {
      font-size: 1.05rem;
      font-weight: 700;
      color: #ffffff;
    }

    /* Main Container & Layout */
    .dest-main-container {
      background-color: #FAFCFE;
      padding: 50px 0 70px 0;
    }

    .dest-card-box {
      background: #FFFFFF;
      border: 1px solid #E6EDF5;
      border-radius: 16px;
      box-shadow: 0 4px 20px rgba(8, 38, 76, 0.04);
      padding: 34px 34px 40px 34px;
      margin-bottom: 28px;
    }

    @media (max-width: 767.98px) {
      .dest-card-box {
        padding: 22px 18px 28px 18px;
        border-radius: 12px;
      }
      .dest-main-container {
        padding: 30px 0 50px 0;
      }
    }

    .dest-section-title {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: 1.85rem;
      font-weight: 700;
      color: var(--color-navy);
      margin-bottom: 1.2rem;
      line-height: 1.25;
      position: relative;
      padding-bottom: 0.65rem;
      border-bottom: 2px solid #F1F5F9;
    }

    .dest-section-title::after {
      content: '';
      position: absolute;
      bottom: -2px;
      left: 0;
      width: 48px;
      height: 2px;
      background: var(--color-dark-red);
    }

    /* Gallery / Featured Images Showcase */
    .dest-gallery-hero {
      position: relative;
      border-radius: 14px;
      overflow: hidden;
      box-shadow: 0 8px 24px rgba(8, 38, 76, 0.1);
      margin-bottom: 14px;
      height: 380px;
    }

    .dest-gallery-hero img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform 0.6s ease;
    }

    .dest-gallery-hero:hover img {
      transform: scale(1.03);
    }

    .dest-gallery-badge {
      position: absolute;
      bottom: 16px;
      left: 16px;
      background: rgba(8, 38, 76, 0.88);
      backdrop-filter: blur(6px);
      color: #ffffff;
      padding: 8px 16px;
      border-radius: 8px;
      font-size: 0.85rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .dest-thumb-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 12px;
      margin-bottom: 24px;
    }

    .dest-thumb-item {
      position: relative;
      border-radius: 10px;
      overflow: hidden;
      height: 120px;
      border: 1px solid #E2E8F0;
    }

    .dest-thumb-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform 0.4s ease;
    }

    .dest-thumb-item:hover img {
      transform: scale(1.08);
    }

    .dest-thumb-caption {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
      color: #fff;
      font-size: 0.72rem;
      font-weight: 600;
      padding: 6px 8px;
      text-align: center;
    }

    /* Key Perks Highlight Pills */
    .dest-perk-box {
      background: #F8FAFC;
      border: 1px solid #E2E8F0;
      border-radius: 12px;
      padding: 18px;
      display: flex;
      align-items: flex-start;
      gap: 14px;
      height: 100%;
      transition: all 0.25s ease;
    }

    .dest-perk-box:hover {
      box-shadow: 0 6px 18px rgba(8, 38, 76, 0.06);
      border-color: #CBD5E1;
      transform: translateY(-2px);
    }

    .dest-perk-icon {
      width: 44px;
      height: 44px;
      border-radius: 10px;
      background: rgba(162, 13, 36, 0.1);
      color: var(--color-dark-red);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.3rem;
      flex-shrink: 0;
    }

    /* Airline Card Showcase */
    .dest-airline-card {
      background: #FFFFFF;
      border: 1px solid #E2E8F0;
      border-radius: 12px;
      padding: 18px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 16px;
      margin-bottom: 12px;
      transition: all 0.25s ease;
    }

    .dest-airline-card:hover {
      border-color: var(--color-navy);
      box-shadow: 0 6px 20px rgba(8, 38, 76, 0.08);
      transform: translateY(-2px);
    }

    .dest-airline-logo {
      width: 70px;
      height: 45px;
      object-fit: contain;
      border-radius: 6px;
      background: #FAFAFA;
      padding: 4px;
      border: 1px solid #EEE;
    }

    /* Route Table / Popular Fares */
    .dest-route-table th {
      background-color: #F8FAFC;
      color: var(--color-navy);
      font-size: 0.8rem;
      text-transform: uppercase;
      letter-spacing: 0.04em;
      border-bottom: 2px solid #E2E8F0;
      padding: 12px 14px;
    }

    .dest-route-table td {
      padding: 14px;
      vertical-align: middle;
      font-size: 0.92rem;
      border-bottom: 1px solid #EDF2F7;
    }

    .dest-route-table tr:hover td {
      background-color: #F8FAFC;
    }

    /* =========================================================================
       SIDEBAR FLIGHT SEARCH CARD (MATCHING HERO SECTION INPUTS)
       ========================================================================= */
    .dest-sidebar {
      position: sticky;
      top: 24px;
      display: flex;
      flex-direction: column;
      gap: 24px;
    }

    .sidebar-booking-card {
      background: #FFFFFF;
      border: 1px solid #E2E8F0;
      border-radius: 16px;
      box-shadow: 0 8px 30px rgba(8, 38, 76, 0.08);
      overflow: hidden;
    }

    .sidebar-booking-header {
      background: linear-gradient(135deg, var(--color-navy) 0%, var(--color-deep-blue) 100%);
      padding: 22px 22px;
      color: #ffffff;
      position: relative;
    }

    .sidebar-booking-header::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 3px;
      background: var(--color-dark-red);
    }

    .sidebar-badge-pill {
      display: inline-flex;
      align-items: center;
      gap: 0.35rem;
      background: rgba(162, 13, 36, 0.3);
      border: 1px solid rgba(255, 255, 255, 0.2);
      color: #ffffff;
      font-size: 0.72rem;
      font-weight: 700;
      padding: 0.2rem 0.6rem;
      border-radius: 50px;
      text-transform: uppercase;
      letter-spacing: 0.04em;
    }

    .sidebar-booking-title {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: 1.35rem;
      font-weight: 700;
      color: #ffffff;
      line-height: 1.25;
      margin-top: 0.45rem;
      margin-bottom: 0.2rem;
    }

    .sidebar-booking-subtitle {
      font-size: 0.82rem;
      color: rgba(255, 255, 255, 0.82);
      margin-bottom: 0;
    }

    .sidebar-booking-body {
      padding: 22px 20px;
    }

    .sb-field-group {
      margin-bottom: 12px;
    }

    .sb-input-box {
      border: 1px solid #E2E8F0;
      border-radius: 8px;
      background-color: #FFFFFF;
      padding: 7px 12px;
      transition: all 0.2s ease;
    }

    .sb-input-box:focus-within {
      border-color: var(--color-navy);
      box-shadow: 0 0 0 3px rgba(8, 38, 76, 0.1);
    }

    .sb-input-label {
      font-size: 0.68rem;
      font-weight: 700;
      color: #64748B;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      display: block;
      margin-bottom: 2px;
    }

    .sb-form-control {
      border: none;
      padding: 0;
      font-size: 0.88rem;
      font-weight: 600;
      color: var(--color-navy);
      background: transparent;
      width: 100%;
      outline: none;
      box-shadow: none;
    }

    .sb-route-swap-row {
      position: relative;
    }

    .sb-btn-swap {
      position: absolute;
      right: 12px;
      top: 50%;
      transform: translateY(-50%);
      width: 32px;
      height: 32px;
      border-radius: 50%;
      background: #FFFFFF;
      border: 1px solid #E2E8F0;
      color: var(--color-navy);
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      z-index: 5;
      box-shadow: 0 2px 8px rgba(8, 38, 76, 0.12);
      transition: all 0.25s ease;
    }

    .sb-btn-swap:hover {
      background-color: var(--color-navy);
      color: #ffffff;
      transform: translateY(-50%) rotate(180deg);
    }

    .btn-sidebar-search {
      background: var(--color-dark-red);
      color: #ffffff;
      border: none;
      font-weight: 700;
      font-size: 0.98rem;
      padding: 12px 18px;
      border-radius: 8px;
      width: 100%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      letter-spacing: 0.01em;
      box-shadow: 0 4px 14px rgba(162, 13, 36, 0.35);
      transition: all 0.25s ease;
    }

    .btn-sidebar-search:hover {
      background-color: #830B1D;
      color: #ffffff;
      transform: translateY(-2px);
      box-shadow: 0 6px 18px rgba(162, 13, 36, 0.45);
    }

    /* Sidebar Concierge Call Card */
    .sidebar-concierge-card {
      background: linear-gradient(135deg, #061933 0%, var(--color-navy) 100%);
      border-radius: 16px;
      padding: 24px;
      color: #ffffff;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .concierge-avatar-icon {
      width: 52px;
      height: 52px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.12);
      border: 1px solid rgba(255, 255, 255, 0.2);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      color: #ffffff;
      margin-bottom: 0.85rem;
    }

    .btn-concierge-call {
      background-color: var(--color-dark-red);
      color: #ffffff;
      border: none;
      font-weight: 700;
      font-size: 0.95rem;
      padding: 10px 18px;
      border-radius: 50px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      text-decoration: none;
      width: 100%;
      box-shadow: 0 4px 14px rgba(162, 13, 36, 0.4);
      transition: all 0.25s ease;
    }

    .btn-concierge-call:hover {
      background-color: #830B1D;
      color: #ffffff;
      transform: translateY(-2px);
    }

    /* Other Popular Destinations Widget */
    .sidebar-other-dest {
      background: #FFFFFF;
      border: 1px solid #E2E8F0;
      border-radius: 16px;
      padding: 22px;
      box-shadow: 0 4px 20px rgba(8, 38, 76, 0.04);
    }
  </style>
</head>
<body class="d-flex flex-column min-vh-100 bg-white">

  <!-- ===== 1. SITE HEADER ===== -->
  <?php include 'components/header.php'; ?>

  <main class="flex-grow-1" id="main-content">

    <!-- ===== 2. DESTINATION HERO BANNER ===== -->
    <section class="dest-inner-hero position-relative" aria-label="Destination Banner">
      <div class="container-xl px-3 px-lg-4 position-relative" style="z-index: 2;">
        
        <!-- Breadcrumb Navigation -->
        <nav aria-label="breadcrumb" class="dest-inner-breadcrumb mb-3" data-aos="fade-down" data-aos-duration="600">
          <ol class="breadcrumb mb-0 align-items-center">
            <li class="breadcrumb-item">
              <a href="index.php" class="text-white-50 text-decoration-none">
                <i class="bi bi-house-door-fill me-1"></i> Home
              </a>
            </li>
            <li class="breadcrumb-item">
              <a href="index.php#popular-business-destinations" class="text-white-50 text-decoration-none">Destinations</a>
            </li>
            <li class="breadcrumb-item active text-white" aria-current="page">
              Dubai (DXB) Business Class
            </li>
          </ol>
        </nav>

        <div class="row align-items-center justify-content-between g-4">
          <div class="col-lg-8" data-aos="fade-up" data-aos-duration="700">
            
            <div class="d-flex flex-wrap align-items-center gap-2 mb-3">
              <span class="dest-pill-badge">
                <i class="bi bi-stars"></i> Top Rated Business Route
              </span>
              <span class="badge bg-warning text-dark fw-bold px-2 py-1">Save Up to <?= $destination['average_saving']; ?></span>
              <span class="text-white-50 small"><i class="bi bi-shield-check text-success me-1"></i> Guaranteed Lie-Flat Cabins</span>
            </div>

            <!-- Page Title -->
            <h1 class="dest-inner-title mb-3">
              Business Class Flights to <?= htmlspecialchars($destination['city']); ?> (<?= htmlspecialchars($destination['code']); ?>)
            </h1>

            <p class="lead text-white-50 mb-4" style="font-size: 1.15rem; max-width: 720px;">
              Experience the pinnacle of luxury aviation. Access unpublished net rates and wholesale consolidator allotments on Emirates, Qatar Airways, and British Airways to <?= htmlspecialchars($destination['airport_name']); ?>.
            </p>

            <!-- Quick Flight Statistics Badges -->
            <div class="d-flex flex-wrap align-items-center gap-2 gap-sm-3">
              <div class="dest-stat-pill">
                <span class="dest-stat-label">Indicative Fares</span>
                <span class="dest-stat-value text-warning">From <?= $destination['starting_from']; ?>*</span>
              </div>
              <div class="dest-stat-pill">
                <span class="dest-stat-label">Flight Time (NYC)</span>
                <span class="dest-stat-value"><?= $destination['flight_time_nyc']; ?></span>
              </div>
              <div class="dest-stat-pill">
                <span class="dest-stat-label">Best Season</span>
                <span class="dest-stat-value"><?= $destination['best_season']; ?></span>
              </div>
              <div class="dest-stat-pill">
                <span class="dest-stat-label">Baggage Allowance</span>
                <span class="dest-stat-value">2×32kg Bags</span>
              </div>
            </div>

          </div>

          <!-- Quick Right CTA Callout (Visible on lg+) -->
          <div class="col-lg-4 text-lg-end d-none d-lg-block" data-aos="fade-left" data-aos-duration="700">
            <div class="p-3 rounded-3" style="background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.18);">
              <span class="d-block text-white-50 small mb-1">Unpublished Phone Discounts:</span>
              <a href="tel:+18337431225" class="d-inline-flex align-items-center gap-2 text-white fw-bold fs-5 text-decoration-none">
                <i class="bi bi-telephone-fill text-warning"></i> 1-833-743-1225
              </a>
              <span class="d-block text-white-50 mt-1" style="font-size:0.75rem;">Agents available 24/7 &bull; Instant WhatsApp / Call Quote</span>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- ===== 3. MAIN CONTENT & SIDEBAR SECTION ===== -->
    <section class="dest-main-container" aria-label="Dubai Destination Details and Flight Booking">
      <div class="container-xl px-3 px-lg-4">
        <div class="row g-4 g-xl-5">

          <!-- ==========================================
               LEFT COLUMN: ABOUT DUBAI & FEATURE SHOWCASE (8 cols on lg)
               ========================================== -->
          <div class="col-lg-8" data-aos="fade-up" data-aos-duration="700">

            <!-- Card 1: Featured Image Showcase & Gallery -->
            <div class="dest-card-box">
              <h2 class="dest-section-title">Experience Dubai in Ultra Luxury</h2>
              
              <div class="dest-gallery-hero">
                <img src="<?= htmlspecialchars($destination['main_image']); ?>" alt="Dubai Skyline & Burj Khalifa" loading="eager">
                <div class="dest-gallery-badge">
                  <i class="bi bi-geo-alt-fill text-warning"></i>
                  <span>Downtown Dubai &bull; Sheikh Zayed Road &amp; Burj Khalifa</span>
                </div>
              </div>

              <!-- 3 Feature Thumbnails Showcase -->
              <div class="dest-thumb-grid">
                <div class="dest-thumb-item">
                  <img src="assets/images/banners/hero-banner.webp" alt="Emirates Business Class Lie Flat" loading="lazy">
                  <span class="dest-thumb-caption">A380 Lie-Flat Suite</span>
                </div>
                <div class="dest-thumb-item">
                  <img src="assets/images/imgs/testimonial-1.jpg" alt="VIP Airport Chauffeur Service" loading="lazy">
                  <span class="dest-thumb-caption">Private Chauffeur</span>
                </div>
                <div class="dest-thumb-item">
                  <img src="assets/images/imgs/tokyo.png" alt="DXB Luxury Terminal Concourse" loading="lazy">
                  <span class="dest-thumb-caption">DXB Concourse Lounge</span>
                </div>
              </div>

              <p class="text-secondary" style="font-size: 1.05rem; line-height: 1.8;">
                Dubai stands at the crossroads of international business and extraordinary architectural ambition. Whether you are finalizing cross-border agreements in the Dubai International Financial Centre (DIFC), attending global conventions at the Dubai World Trade Centre, or unwinding in a seaside villa along Palm Jumeirah, flying business class transforms your journey into an extension of five-star hospitality.
              </p>
              <p class="text-secondary" style="font-size: 1.05rem; line-height: 1.8; margin-bottom: 0;">
                By partnering directly with premier carrier consolidators, <strong>Business Class Air Travel</strong> delivers unpublished inventory on wide-body Boeing 777-300ER and Airbus A380 fleets—providing private suites, on-demand sommelier service, in-flight showers, and complimentary luxury chauffeur transfers upon arrival.
              </p>
            </div>

            <!-- Card 2: 4 Business Class Pillars for Dubai -->
            <div class="dest-card-box">
              <h3 class="dest-section-title">Why Fly Business Class to Dubai?</h3>
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="dest-perk-box">
                    <div class="dest-perk-icon">
                      <i class="bi bi-moon-stars-fill"></i>
                    </div>
                    <div>
                      <h5 class="fw-bold text-navy mb-1" style="font-size:1.05rem;">180° Lie-Flat Rest</h5>
                      <p class="text-muted small mb-0">Arrive fully rested with direct aisle access, plush mattress toppers, and luxury Bulgari amenity kits.</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="dest-perk-box">
                    <div class="dest-perk-icon">
                      <i class="bi bi-cup-hot-fill"></i>
                    </div>
                    <div>
                      <h5 class="fw-bold text-navy mb-1" style="font-size:1.05rem;">The Legendary Onboard Lounge</h5>
                      <p class="text-muted small mb-0">Sip vintage champagne and socialize at 40,000 feet inside Emirates &amp; Qatar premium cabin sky bars.</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="dest-perk-box">
                    <div class="dest-perk-icon">
                      <i class="bi bi-briefcase-fill"></i>
                    </div>
                    <div>
                      <h5 class="fw-bold text-navy mb-1" style="font-size:1.05rem;">Generous 2×32kg Bags</h5>
                      <p class="text-muted small mb-0">Travel with heavy sample cases and luxury wardrobe without paying exorbitant airline excess fees.</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="dest-perk-box">
                    <div class="dest-perk-icon">
                      <i class="bi bi-car-front-fill"></i>
                    </div>
                    <div>
                      <h5 class="fw-bold text-navy mb-1" style="font-size:1.05rem;">Chauffeur-Drive Service</h5>
                      <p class="text-muted small mb-0">Complimentary private BMW or Mercedes chauffeur transfer directly to your Dubai hotel or villa.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Card 3: Top Airlines Flying to Dubai -->
            <div class="dest-card-box">
              <h3 class="dest-section-title">Top Rated Airlines to Dubai (DXB)</h3>
              <p class="text-muted mb-3">Compare our top contracted airlines offering private business class cabins to the UAE:</p>

              <!-- Airline 1: Emirates -->
              <div class="dest-airline-card">
                <div class="d-flex align-items-center gap-3">
                  <img src="assets/images/airlines/emirates-clean.jpg" alt="Emirates" class="dest-airline-logo">
                  <div>
                    <h5 class="fw-bold text-navy mb-0">Emirates Business Class</h5>
                    <span class="text-muted small">Airbus A380 &bull; Non-Stop from JFK, SFO, LAX, ORD, IAH</span>
                  </div>
                </div>
                <div class="text-end">
                  <span class="badge bg-success mb-1">Save 58%</span>
                  <span class="d-block fw-bold text-navy small">From $3,650*</span>
                </div>
              </div>

              <!-- Airline 2: Qatar Airways -->
              <div class="dest-airline-card">
                <div class="d-flex align-items-center gap-3">
                  <img src="assets/images/airlines/qatar-airways-clean.jpg" alt="Qatar Airways" class="dest-airline-logo">
                  <div>
                    <h5 class="fw-bold text-navy mb-0">Qatar Airways Qsuite</h5>
                    <span class="text-muted small">Ranked World's Best Business Class &bull; 1 Stop via Doha</span>
                  </div>
                </div>
                <div class="text-end">
                  <span class="badge bg-success mb-1">Save 62%</span>
                  <span class="d-block fw-bold text-navy small">From $3,450*</span>
                </div>
              </div>

              <!-- Airline 3: British Airways -->
              <div class="dest-airline-card">
                <div class="d-flex align-items-center gap-3">
                  <img src="assets/images/airlines/british-airways-clean.jpg" alt="British Airways" class="dest-airline-logo">
                  <div>
                    <h5 class="fw-bold text-navy mb-0">British Airways Club Suite</h5>
                    <span class="text-muted small">Private Door Suites &bull; 1 Stop via London Heathrow</span>
                  </div>
                </div>
                <div class="text-end">
                  <span class="badge bg-success mb-1">Save 55%</span>
                  <span class="d-block fw-bold text-navy small">From $3,280*</span>
                </div>
              </div>

              <!-- Airline 4: Turkish Airlines -->
              <div class="dest-airline-card">
                <div class="d-flex align-items-center gap-3">
                  <img src="assets/images/airlines/turkish-airlines-clean.jpg" alt="Turkish Airlines" class="dest-airline-logo">
                  <div>
                    <h5 class="fw-bold text-navy mb-0">Turkish Airlines Business Class</h5>
                    <span class="text-muted small">Flying Chef Catering &bull; Free Istanbul Transit Hotel</span>
                  </div>
                </div>
                <div class="text-end">
                  <span class="badge bg-success mb-1">Save 60%</span>
                  <span class="d-block fw-bold text-navy small">From $2,990*</span>
                </div>
              </div>
            </div>

            <!-- Card 4: Popular Flight Routes & Indicative Pricing -->
            <div class="dest-card-box">
              <h3 class="dest-section-title">Popular Business Class Routes to Dubai</h3>
              <div class="table-responsive">
                <table class="table dest-route-table mb-0">
                  <thead>
                    <tr>
                      <th>Origin Route</th>
                      <th>Flight Duration</th>
                      <th>Carrier Type</th>
                      <th>Indicative Deal</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <strong class="text-navy">New York (JFK) &rarr; Dubai (DXB)</strong>
                        <small class="d-block text-muted">Daily Non-stop options</small>
                      </td>
                      <td>12h 45m</td>
                      <td>Emirates A380</td>
                      <td><span class="text-success fw-bold">$3,650*</span> <del class="text-muted small">$8,450</del></td>
                      <td><a href="#sidebarFlightSearch" class="btn btn-sm btn-outline-primary rounded-pill">Book Deal</a></td>
                    </tr>
                    <tr>
                      <td>
                        <strong class="text-navy">Los Angeles (LAX) &rarr; Dubai (DXB)</strong>
                        <small class="d-block text-muted">Direct &bull; 1 Stop Qsuite</small>
                      </td>
                      <td>15h 50m</td>
                      <td>Emirates / Qatar</td>
                      <td><span class="text-success fw-bold">$3,890*</span> <del class="text-muted small">$9,200</del></td>
                      <td><a href="#sidebarFlightSearch" class="btn btn-sm btn-outline-primary rounded-pill">Book Deal</a></td>
                    </tr>
                    <tr>
                      <td>
                        <strong class="text-navy">San Francisco (SFO) &rarr; Dubai (DXB)</strong>
                        <small class="d-block text-muted">Direct Lie-Flat Route</small>
                      </td>
                      <td>15h 40m</td>
                      <td>Emirates B777</td>
                      <td><span class="text-success fw-bold">$3,780*</span> <del class="text-muted small">$8,950</del></td>
                      <td><a href="#sidebarFlightSearch" class="btn btn-sm btn-outline-primary rounded-pill">Book Deal</a></td>
                    </tr>
                    <tr>
                      <td>
                        <strong class="text-navy">London (LHR) &rarr; Dubai (DXB)</strong>
                        <small class="d-block text-muted">Multiple daily non-stops</small>
                      </td>
                      <td>7h 10m</td>
                      <td>British / Emirates</td>
                      <td><span class="text-success fw-bold">&pound;1,850*</span> <del class="text-muted small">&pound;4,200</del></td>
                      <td><a href="#sidebarFlightSearch" class="btn btn-sm btn-outline-primary rounded-pill">Book Deal</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <small class="text-muted d-block mt-3">*Fares shown are round-trip estimates based on private consolidator net contracts subject to availability at time of reservation.</small>
            </div>

            <!-- Card 5: Dubai Insider Travel Tips -->
            <div class="dest-card-box">
              <h3 class="dest-section-title">Dubai Concierge Travel Tips</h3>
              <ul class="list-unstyled mb-0" style="font-size:0.98rem; line-height: 1.8;">
                <li class="mb-2 d-flex align-items-start gap-2">
                  <i class="bi bi-check-circle-fill text-dark-red mt-1"></i>
                  <span><strong>Airport Terminal:</strong> Emirates operates exclusively out of Terminal 3, which houses the world's largest Business Class Lounge directly spanning entire concourses.</span>
                </li>
                <li class="mb-2 d-flex align-items-start gap-2">
                  <i class="bi bi-check-circle-fill text-dark-red mt-1"></i>
                  <span><strong>Smart Gates Entry:</strong> Pre-registered international business passengers can clear Dubai immigration in under 15 seconds using contactless biometrics.</span>
                </li>
                <li class="mb-2 d-flex align-items-start gap-2">
                  <i class="bi bi-check-circle-fill text-dark-red mt-1"></i>
                  <span><strong>Timing Your Booking:</strong> November to March offers pleasant 25°C temperatures. To unlock the deepest consolidator savings, reserve your business seats 4 to 8 weeks in advance.</span>
                </li>
              </ul>
            </div>

          </div>

          <!-- ==========================================
               RIGHT COLUMN: STICKY FLIGHT BOOKING SIDEBAR (4 cols on lg)
               Inputs matching hero section
               ========================================== -->
          <aside class="col-lg-4">
            <div class="dest-sidebar">

              <!-- ===== 1. SIDEBAR FLIGHT BOOKING FORM ===== -->
              <div class="sidebar-booking-card" id="sidebarFlightSearch" data-aos="fade-left" data-aos-duration="700">
                
                <div class="sidebar-booking-header">
                  <span class="sidebar-badge-pill">
                    <i class="bi bi-shield-check"></i> Phone-Exclusive Quotes
                  </span>
                  <h3 class="sidebar-booking-title">Find a Business Class Deal</h3>
                  <p class="sidebar-booking-subtitle">Unpublished consolidator fares to Dubai (DXB).</p>
                </div>

                <div class="sidebar-booking-body">
                  <form id="sidebarFlightForm" action="flight-results.php" method="GET">
                    
                    <!-- Trip Type Toggle Buttons -->
                    <div class="d-flex align-items-center justify-content-between mb-3 pb-1">
                      <div class="btn-group btn-group-sm w-100" role="group" aria-label="Trip type selector">
                        <button type="button" class="btn btn-sm btn-outline-primary active fw-semibold" id="sbBtnRoundTrip" data-trip="round-trip">
                          <i class="bi bi-arrow-left-right me-1"></i> Round Trip
                        </button>
                        <button type="button" class="btn btn-sm btn-outline-primary fw-semibold" id="sbBtnOneWay" data-trip="one-way">
                          <i class="bi bi-airplane-fill me-1"></i> One Way
                        </button>
                      </div>
                      <input type="hidden" name="trip_type" id="sbTripTypeInput" value="round-trip">
                    </div>

                    <!-- Direct Flights Toggle -->
                    <div class="form-check form-switch mb-3">
                      <input class="form-check-input custom-switch-input" type="checkbox" role="switch" id="sbDirectOnly" name="direct_only" value="1">
                      <label class="form-check-label fw-bold text-navy small" for="sbDirectOnly" style="font-size:0.8rem;">
                        Direct Flights Only
                      </label>
                    </div>

                    <!-- Origin & Destination with Swap Button -->
                    <div class="sb-route-swap-row mb-2">
                      
                      <!-- FROM -->
                      <div class="sb-field-group mb-2">
                        <div class="sb-input-box">
                          <span class="sb-input-label"><i class="bi bi-geo-alt-fill text-dark-red me-1"></i> From (Departure)</span>
                          <input type="text" class="sb-form-control" id="sbFromAirport" name="origin" placeholder="City or Airport (e.g. JFK)" value="New York (JFK)" required>
                        </div>
                      </div>

                      <!-- SWAP BUTTON -->
                      <button type="button" class="sb-btn-swap" id="sbBtnSwap" title="Swap origin and destination" aria-label="Swap airports">
                        <i class="bi bi-arrow-down-up"></i>
                      </button>

                      <!-- TO (Pre-filled to Dubai DXB) -->
                      <div class="sb-field-group mb-2">
                        <div class="sb-input-box">
                          <span class="sb-input-label"><i class="bi bi-geo-alt-fill text-primary me-1"></i> To (Destination)</span>
                          <input type="text" class="sb-form-control" id="sbToAirport" name="destination" placeholder="City or Airport (e.g. DXB)" value="Dubai (DXB)" required>
                        </div>
                      </div>

                    </div>

                    <!-- Dates Row -->
                    <div class="row g-2 mb-2">
                      <!-- Departure Date -->
                      <div class="col-6">
                        <div class="sb-input-box">
                          <span class="sb-input-label"><i class="bi bi-calendar-event me-1"></i> Departure</span>
                          <input type="date" class="sb-form-control" id="sbDepartDate" name="depart_date" value="2026-11-25" required>
                        </div>
                      </div>
                      <!-- Return Date -->
                      <div class="col-6" id="sbReturnDateWrapper">
                        <div class="sb-input-box">
                          <span class="sb-input-label"><i class="bi bi-calendar-check me-1"></i> Return</span>
                          <input type="date" class="sb-form-control" id="sbReturnDate" name="return_date" value="2026-12-05">
                        </div>
                      </div>
                    </div>

                    <!-- Travelers Dropdown -->
                    <div class="sb-field-group mb-2">
                      <div class="sb-input-box dropdown">
                        <span class="sb-input-label"><i class="bi bi-people-fill me-1"></i> Travelers</span>
                        <div class="d-flex align-items-center justify-content-between cursor-pointer" data-bs-toggle="dropdown" aria-expanded="false" id="sbTravelersToggle">
                          <span id="sbTravelersDisplay" class="fw-bold text-navy small">1 Adult</span>
                          <i class="bi bi-chevron-down text-muted small"></i>
                        </div>
                        <input type="hidden" name="travelers" id="sbTravelersInput" value="1 Adult">
                        <ul class="dropdown-menu shadow-lg border-0 w-100 p-2" aria-labelledby="sbTravelersToggle">
                          <li><button type="button" class="dropdown-item sb-traveler-item active" data-val="1 Adult">1 Adult</button></li>
                          <li><button type="button" class="dropdown-item sb-traveler-item" data-val="2 Adults">2 Adults</button></li>
                          <li><button type="button" class="dropdown-item sb-traveler-item" data-val="3 Adults">3 Adults</button></li>
                          <li><button type="button" class="dropdown-item sb-traveler-item" data-val="4+ Adults / Group">4+ Adults / Group</button></li>
                          <li><button type="button" class="dropdown-item sb-traveler-item" data-val="Family (2 Adults, 2 Children)">Family (2 Adults, 2 Children)</button></li>
                        </ul>
                      </div>
                    </div>

                    <!-- Cabin Class Dropdown -->
                    <div class="sb-field-group mb-2">
                      <div class="sb-input-box dropdown">
                        <span class="sb-input-label"><i class="bi bi-gem text-warning me-1"></i> Cabin Class</span>
                        <div class="d-flex align-items-center justify-content-between cursor-pointer" data-bs-toggle="dropdown" aria-expanded="false" id="sbCabinToggle">
                          <span id="sbCabinDisplay" class="fw-bold text-navy small">Business Class</span>
                          <i class="bi bi-chevron-down text-muted small"></i>
                        </div>
                        <input type="hidden" name="cabin_class" id="sbCabinInput" value="business_class">
                        <ul class="dropdown-menu shadow-lg border-0 w-100 p-2" aria-labelledby="sbCabinToggle">
                          <li><button type="button" class="dropdown-item sb-cabin-item" data-val="economy">Economy/Coach</button></li>
                          <li><button type="button" class="dropdown-item sb-cabin-item" data-val="premium_economy">Premium Economy</button></li>
                          <li><button type="button" class="dropdown-item sb-cabin-item active" data-val="business_class">Business Class (Lie-Flat)</button></li>
                          <li><button type="button" class="dropdown-item sb-cabin-item" data-val="first_class">First Class Luxury</button></li>
                        </ul>
                      </div>
                    </div>

                    <!-- Dynamic Contact Email & Phone fields -->
                    <div id="sbDynamicContactFields">
                      <div class="sb-field-group mb-2">
                        <div class="sb-input-box">
                          <span class="sb-input-label"><i class="bi bi-envelope-fill me-1"></i> Email for Private Quotes *</span>
                          <input type="email" class="sb-form-control" id="sbContactEmail" name="email" placeholder="you@company.com">
                        </div>
                      </div>
                      <div class="sb-field-group mb-3">
                        <div class="sb-input-box">
                          <span class="sb-input-label"><i class="bi bi-telephone-fill me-1"></i> Phone for Instant Deal Call *</span>
                          <input type="tel" class="sb-form-control" id="sbContactPhone" name="phone" placeholder="(555) 000-0000">
                        </div>
                      </div>
                    </div>

                    <!-- Search CTA Button -->
                    <button type="submit" class="btn-sidebar-search mt-1">
                      <i class="bi bi-search"></i>
                      <span>Search Dubai Business Deals</span>
                    </button>

                    <!-- Trust Strip -->
                    <div class="d-flex align-items-center justify-content-center gap-2 mt-2 pt-1 text-muted text-center" style="font-size: 0.72rem;">
                      <i class="bi bi-shield-check text-success"></i>
                      <span>Free Quote &bull; No Booking Fees &bull; 24/7 Desk</span>
                    </div>

                  </form>
                </div>
              </div>

              <!-- ===== 2. CONCIERGE CALL WIDGET ===== -->
              <div class="sidebar-concierge-card" data-aos="fade-left" data-aos-duration="700" data-aos-delay="100">
                <div class="concierge-avatar-icon">
                  <i class="bi bi-headset"></i>
                </div>
                <h4 class="fw-bold text-white mb-1" style="font-size:1.25rem;">Dubai Desk Specialist</h4>
                <p class="text-white-50 small mb-3">
                  Airlines restrict our deepest Dubai consolidator rates from online booking engines. Call our verified advisors to save an additional $300 to $600 per passenger.
                </p>
                <a href="tel:+18337431225" class="btn-concierge-call">
                  <i class="bi bi-telephone-fill"></i>
                  <span>Call 1-833-743-1225</span>
                </a>
                <span class="d-block text-white-50 mt-2" style="font-size:0.7rem;">
                  Toll-Free &bull; 24×7 Live Concierge Service
                </span>
              </div>

              <!-- ===== 3. OTHER POPULAR DESTINATIONS WIDGET ===== -->
              <div class="sidebar-other-dest" data-aos="fade-left" data-aos-duration="700" data-aos-delay="150">
                <div class="d-flex align-items-center justify-content-between mb-3 pb-1 border-bottom">
                  <h5 class="fw-bold text-navy mb-0" style="font-size:1.1rem;">Other Top Routes</h5>
                  <a href="flight-destinations.php" class="small fw-semibold text-dark-red text-decoration-none">View All &rarr;</a>
                </div>

                <div class="d-flex flex-column gap-3">
                  <?php foreach ($other_destinations as $other): ?>
                    <a href="destination-detail.php?city=<?= urlencode($other['city']); ?>" class="d-flex align-items-center justify-content-between text-decoration-none p-2 rounded-2 border" style="transition: all 0.2s;" onmouseover="this.style.background='#F8FAFC'" onmouseout="this.style.background='transparent'">
                      <div class="d-flex align-items-center gap-2">
                        <img src="<?= htmlspecialchars($other['image']); ?>" alt="<?= htmlspecialchars($other['city']); ?>" style="width: 44px; height: 44px; border-radius: 8px; object-fit: cover;">
                        <div>
                          <span class="d-block fw-bold text-navy small"><?= htmlspecialchars($other['city']); ?> (<?= htmlspecialchars($other['code']); ?>)</span>
                          <span class="text-muted" style="font-size:0.75rem;"><?= htmlspecialchars($other['country']); ?></span>
                        </div>
                      </div>
                      <div class="text-end">
                        <span class="d-block fw-bold text-dark-red small"><?= $other['fare']; ?></span>
                        <span class="text-muted" style="font-size:0.7rem;">Round-Trip</span>
                      </div>
                    </a>
                  <?php endforeach; ?>
                </div>
              </div>

            </div>
          </aside>

        </div>
      </div>
    </section>

    <!-- ===== 4. CTA / WHY CHOOSE US SECTION ===== -->
    <?php include 'components/cta-section.php'; ?>

    <!-- ===== 5. VIP NEWSLETTER SUBSCRIBE CTA SECTION ===== -->
    <?php include 'components/newsletter-cta-section.php'; ?>

  </main>

  <!-- ===== 6. SITE FOOTER ===== -->
  <?php include 'components/footer.php'; ?>

  <!-- Bootstrap 5.3 Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- AOS JS -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

  <!-- Main Theme JS -->
  <script src="assets/js/main.js?v=<?= time(); ?>"></script>

  <!-- Sidebar Flight Form Handler -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      if (typeof AOS !== 'undefined') {
        AOS.init({ once: true, duration: 700, easing: 'ease-out-cubic' });
      }

      // Trip Type Toggle
      const btnRoundTrip = document.getElementById('sbBtnRoundTrip');
      const btnOneWay = document.getElementById('sbBtnOneWay');
      const tripTypeInput = document.getElementById('sbTripTypeInput');
      const returnDateWrapper = document.getElementById('sbReturnDateWrapper');

      if (btnRoundTrip && btnOneWay) {
        btnRoundTrip.addEventListener('click', function () {
          btnRoundTrip.classList.add('active');
          btnOneWay.classList.remove('active');
          tripTypeInput.value = 'round-trip';
          if (returnDateWrapper) returnDateWrapper.style.display = 'block';
        });

        btnOneWay.addEventListener('click', function () {
          btnOneWay.classList.add('active');
          btnRoundTrip.classList.remove('active');
          tripTypeInput.value = 'one-way';
          if (returnDateWrapper) returnDateWrapper.style.display = 'none';
        });
      }

      // Swap Airports
      const btnSwap = document.getElementById('sbBtnSwap');
      const fromAirport = document.getElementById('sbFromAirport');
      const toAirport = document.getElementById('sbToAirport');

      if (btnSwap && fromAirport && toAirport) {
        btnSwap.addEventListener('click', function () {
          const temp = fromAirport.value;
          fromAirport.value = toAirport.value;
          toAirport.value = temp;
        });
      }

      // Travelers Dropdown
      const travelerItems = document.querySelectorAll('.sb-traveler-item');
      const travelersDisplay = document.getElementById('sbTravelersDisplay');
      const travelersInput = document.getElementById('sbTravelersInput');

      travelerItems.forEach(item => {
        item.addEventListener('click', function () {
          const val = this.getAttribute('data-val');
          if (travelersDisplay) travelersDisplay.textContent = val;
          if (travelersInput) travelersInput.value = val;
          travelerItems.forEach(i => i.classList.remove('active'));
          this.classList.add('active');
        });
      });

      // Cabin Class Dropdown
      const cabinItems = document.querySelectorAll('.sb-cabin-item');
      const cabinDisplay = document.getElementById('sbCabinDisplay');
      const cabinInput = document.getElementById('sbCabinInput');
      const dynamicContactFields = document.getElementById('sbDynamicContactFields');

      cabinItems.forEach(item => {
        item.addEventListener('click', function () {
          const val = this.getAttribute('data-val');
          const text = this.textContent.trim();
          if (cabinDisplay) cabinDisplay.textContent = text;
          if (cabinInput) cabinInput.value = val;

          cabinItems.forEach(i => i.classList.remove('active'));
          this.classList.add('active');

          if (dynamicContactFields) {
            dynamicContactFields.style.display = (val === 'economy') ? 'none' : 'block';
          }
        });
      });
    });
  </script>

</body>
</html>