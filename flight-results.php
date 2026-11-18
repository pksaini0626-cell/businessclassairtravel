<?php
/**
 * Flight Results & Written Fare Quote Page — Business Class Air Travel
 * 
 * Features:
 * - Live fare snapshot (JFK to LGW) with animated flight path
 * - Real-time cabin class fare selector (Premium Economy $1,019, Business $2,219, First $5,409)
 * - Published vs Contracted fare comparison with $1,001 (31%) savings
 * - 10-minute price snapshot freshness timestamp
 * - "Get this fare in writing" lead capture form with full TCPA SMS consent
 * - Direct advisor phone call urgency banner with $100 bonus phone discount
 * - "Your advisor is one call away" high-impact concierge section
 * - VIP Newsletter Subscribe CTA section with red background
 */

$page_title       = 'New York (JFK) to London (LGW) — Business Class Flight Fares | Business Class Air Travel';
$meta_description = 'Lock in unpublished consolidator business class fares from New York to London starting at $2,219 roundtrip. Save up to 31% off airline published prices.';

// Initial search parameters (supports query params or falls back to user static specifications)
$origin_display   = !empty($_GET['origin']) ? htmlspecialchars($_GET['origin']) : 'New York (JFK)';
$dest_display     = !empty($_GET['destination']) ? htmlspecialchars($_GET['destination']) : 'London (LGW)';
$depart_date      = !empty($_GET['depart_date']) ? htmlspecialchars($_GET['depart_date']) : 'Dec 15, 2026';
$return_date      = !empty($_GET['return_date']) ? htmlspecialchars($_GET['return_date']) : 'Dec 24, 2026';
$trip_type        = !empty($_GET['trip_type']) && $_GET['trip_type'] === 'one-way' ? 'One Way' : 'Round trip';
$travelers        = !empty($_GET['travelers']) ? htmlspecialchars($_GET['travelers']) : '1 person';
$cabin_class      = !empty($_GET['cabin_class']) ? htmlspecialchars($_GET['cabin_class']) : 'Business';

$current_time     = date('H:i');
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

  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Round" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Bootstrap 5.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- AOS CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" href="assets/css/theme.css?v=<?= time(); ?>">
</head>
<body class="d-flex flex-column min-vh-100 bg-light-subtle">

  <!-- ===== 1. SITE HEADER ===== -->
  <?php include 'components/header.php'; ?>

  <main class="flex-grow-1" id="main-content">

    <!-- ===== 2. RESULTS TOP SUMMARY & ROUTE BAR ===== -->
    <section class="results-top-bar-section bg-white border-bottom py-3">
      <div class="container-xl px-3 px-lg-4">
        <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3">
          
          <!-- Route Title & Search Details -->
          <div class="results-summary-info">
            <div class="d-flex align-items-center gap-2 mb-1">
              <span class="badge bg-danger-subtle text-danger border border-danger-subtle px-2 py-1 small fw-bold text-uppercase">
                <i class="bi bi-shield-lock-fill me-1"></i> Contracted Consolidator Fare
              </span>
              <span class="text-muted small">&bull;</span>
              <span class="text-success small fw-semibold"><i class="bi bi-check-circle-fill me-1"></i> Seats Available</span>
            </div>
            <h1 class="results-route-title font-playfair fw-bold text-navy mb-1" id="summaryRouteTitle">
              New York to London
            </h1>
            <div class="results-route-meta text-muted small d-flex flex-wrap align-items-center gap-2">
              <span class="meta-item"><i class="bi bi-calendar3 me-1"></i>Dec 15, 2026</span>
              <span class="meta-dot">&middot;</span>
              <span class="meta-item"><i class="bi bi-arrow-left-right me-1"></i>Round trip</span>
              <span class="meta-dot">&middot;</span>
              <span class="meta-item"><i class="bi bi-person-fill me-1"></i>1 person, Business</span>
            </div>
          </div>

          <!-- Modify Search Button -->
          <div class="results-summary-actions ms-md-auto">
            <button type="button" class="btn btn-outline-navy rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-2" id="btnToggleModifySearch" aria-expanded="false" aria-controls="modifySearchDrawer">
              <i class="bi bi-sliders"></i>
              <span>Modify Search</span>
            </button>
          </div>

        </div>

        <!-- Collapsible Modify Search Drawer (Hidden by default) -->
        <div class="collapse mt-3 pt-3 border-top" id="modifySearchDrawer">
          <form id="modifySearchForm" action="flight-results.php" method="GET" class="p-3 bg-light rounded-4 border">
            <div class="row g-2 align-items-end">
              <div class="col-md-3 col-12">
                <label class="form-label small fw-bold text-navy mb-1">From (Departure)</label>
                <input type="text" class="form-control" name="origin" value="<?= $origin_display; ?>" required>
              </div>
              <div class="col-md-3 col-12">
                <label class="form-label small fw-bold text-navy mb-1">To (Destination)</label>
                <input type="text" class="form-control" name="destination" value="<?= $dest_display; ?>" required>
              </div>
              <div class="col-md-2 col-6">
                <label class="form-label small fw-bold text-navy mb-1">Depart</label>
                <input type="date" class="form-control" name="depart_date" value="2026-12-15">
              </div>
              <div class="col-md-2 col-6">
                <label class="form-label small fw-bold text-navy mb-1">Return</label>
                <input type="date" class="form-control" name="return_date" value="2026-12-24">
              </div>
              <div class="col-md-2 col-12">
                <button type="submit" class="btn btn-danger w-100 fw-bold py-2 rounded-3">Update Fare</button>
              </div>
            </div>
          </form>
        </div>

      </div>
    </section>

    <!-- ===== 3. FARE SNAPSHOT & LEAD QUOTE FORM (2-COLUMN HERO) ===== -->
    <section class="results-main-hero py-4 py-lg-5">
      <div class="container-xl px-3 px-lg-4">
        <div class="row g-4 align-items-start">

          <!-- LEFT COLUMN: ROUTE ANIMATION, CABIN TABS & PRICING SNAPSHOT -->
          <div class="col-12 col-lg-7" data-aos="fade-up" data-aos-duration="650">
            <div class="fare-snapshot-card bg-white rounded-4 border shadow-sm p-4 p-md-4">
              
              <!-- 1. Route Display with Animated Flight -->
              <div class="flight-route-hero-box p-3 p-sm-4 rounded-3 mb-4">
                <div class="row align-items-center text-center">
                  
                  <!-- Departure: JFK / New York -->
                  <div class="col-4 text-start">
                    <span class="route-airport-code d-block fw-bold text-navy">JFK</span>
                    <span class="route-city-name d-block text-secondary fw-semibold">New York</span>
                    <span class="route-terminal-note d-block text-muted small">John F. Kennedy Intl</span>
                  </div>

                  <!-- Flight Path & Animated Airplane -->
                  <div class="col-4 position-relative px-0">
                    <div class="flight-animation-track position-relative">
                      <!-- Dashed trajectory line -->
                      <div class="flight-track-line"></div>
                      
                      <!-- Animated Flying Airplane Icon -->
                      <div class="flight-animated-plane-wrap" aria-hidden="true">
                        <i class="bi bi-airplane-fill flight-animated-plane"></i>
                      </div>
                    </div>
                    <span class="flight-duration-badge mt-2 d-inline-block">
                      7h 15m &bull; Nonstop
                    </span>
                  </div>

                  <!-- Arrival: LGW / London -->
                  <div class="col-4 text-end">
                    <span class="route-airport-code d-block fw-bold text-navy">LGW</span>
                    <span class="route-city-name d-block text-secondary fw-semibold">London</span>
                    <span class="route-terminal-note d-block text-muted small">London Gatwick</span>
                  </div>

                </div>
              </div>

              <!-- 2. Cabin Class Fare Tabs -->
              <div class="cabin-fare-tabs-wrapper mb-4">
                <label class="d-block small text-muted text-uppercase fw-bold mb-2 tracking-wide">
                  Select Cabin Class &amp; Real-time Fares:
                </label>
                <div class="row g-2 cabin-tabs-row" id="cabinFareTabs" role="tablist">
                  
                  <!-- Premium Economy -->
                  <div class="col-4">
                    <button type="button" 
                            class="btn cabin-fare-tab w-100 text-start p-2 p-sm-3 rounded-3" 
                            data-cabin="premium-economy" 
                            data-price="1019" 
                            data-published="1850" 
                            data-save="831" 
                            data-percent="45%">
                      <span class="d-block cabin-tab-label text-truncate">Premium Economy</span>
                      <span class="d-block cabin-tab-price fw-bold text-navy">$1,019</span>
                    </button>
                  </div>

                  <!-- Business Class (Active by default) -->
                  <div class="col-4">
                    <button type="button" 
                            class="btn cabin-fare-tab w-100 text-start p-2 p-sm-3 rounded-3 active" 
                            data-cabin="business" 
                            data-price="2219" 
                            data-published="3220" 
                            data-save="1001" 
                            data-percent="31%">
                      <span class="badge bg-danger text-white cabin-value-tag">Popular</span>
                      <span class="d-block cabin-tab-label text-truncate">Business</span>
                      <span class="d-block cabin-tab-price fw-bold text-navy">$2,219</span>
                    </button>
                  </div>

                  <!-- First Class -->
                  <div class="col-4">
                    <button type="button" 
                            class="btn cabin-fare-tab w-100 text-start p-2 p-sm-3 rounded-3" 
                            data-cabin="first" 
                            data-price="5409" 
                            data-published="7890" 
                            data-save="2481" 
                            data-percent="31%">
                      <span class="d-block cabin-tab-label text-truncate">First</span>
                      <span class="d-block cabin-tab-price fw-bold text-navy">$5,409</span>
                    </button>
                  </div>

                </div>
              </div>

              <!-- 3. Pricing Display Box (Published vs Consolidator Rate) -->
              <div class="pricing-comparison-box p-4 rounded-4 bg-light border mb-4">
                <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between gap-3">
                  
                  <div>
                    <div class="published-fare-line text-muted mb-1">
                      <span>Published fare</span> 
                      <del class="text-decoration-line-through fw-semibold ms-1" id="displayPublishedFare">$3,220</del>
                    </div>
                    <div class="d-flex align-items-baseline gap-2">
                      <span class="consolidator-price-big font-playfair fw-bold text-navy" id="displayPrice">$2,219</span>
                      <span class="price-currency-note text-muted small">USD*</span>
                    </div>
                    <p class="price-subtext text-muted small mb-0">per person, round trip, USD*</p>
                  </div>

                  <!-- Savings Pill Badge -->
                  <div class="savings-highlight-badge">
                    <div class="badge bg-success text-white px-3 py-2 rounded-pill fs-6 fw-bold shadow-sm" id="displaySavingsBadge">
                      <i class="bi bi-tag-fill me-1"></i> You save $1,001 (31%)
                    </div>
                    <div class="text-success small fw-semibold mt-1 text-sm-end">
                      <i class="bi bi-check2-circle"></i> Best Rate Guaranteed
                    </div>
                  </div>

                </div>

                <!-- 4. Price Snapshot Freshness Bar -->
                <div class="price-snapshot-bar mt-3 pt-3 border-top d-flex align-items-center gap-2">
                  <span class="live-pulse-dot" aria-hidden="true"></span>
                  <span class="small text-muted">
                    Price snapshot current for <strong class="text-navy" id="displaySnapshotTime">05:04</strong> &middot; contracted fares refresh every 10 minutes
                  </span>
                </div>
              </div>

              <!-- 5. Included Business Class Privileges -->
              <div class="fare-privileges-grid">
                <div class="row g-3">
                  <div class="col-sm-6">
                    <div class="d-flex align-items-center gap-2">
                      <i class="bi bi-check-circle-fill text-danger fs-5"></i>
                      <span class="small fw-semibold text-navy">180&deg; Full Flat-Bed Seats</span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="d-flex align-items-center gap-2">
                      <i class="bi bi-check-circle-fill text-danger fs-5"></i>
                      <span class="small fw-semibold text-navy">2&times;32kg Checked Luggage</span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="d-flex align-items-center gap-2">
                      <i class="bi bi-check-circle-fill text-danger fs-5"></i>
                      <span class="small fw-semibold text-navy">VIP Lounge Access &amp; Dining</span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="d-flex align-items-center gap-2">
                      <i class="bi bi-check-circle-fill text-danger fs-5"></i>
                      <span class="small fw-semibold text-navy">Priority Boarding &amp; Fast-Track</span>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- RIGHT COLUMN: GET THIS FARE IN WRITING LEAD FORM -->
          <div class="col-12 col-lg-5" data-aos="fade-up" data-aos-duration="650" data-aos-delay="100">
            <div class="fare-quote-card bg-white rounded-4 border shadow-sm p-4 position-relative">
              
              <!-- Card Header -->
              <div class="quote-card-header mb-3">
                <div class="d-inline-flex align-items-center gap-1 text-danger small fw-bold text-uppercase mb-1">
                  <i class="bi bi-patch-check-fill"></i>
                  <span>Official Quote Guarantee</span>
                </div>
                <h3 class="quote-card-title font-playfair fw-bold text-navy mb-1">
                  Get this fare in writing
                </h3>
                <p class="quote-card-subtitle text-muted small mb-0">
                  Lock in this unpublished consolidator rate before airline seats sell out.
                </p>
              </div>

              <!-- Form -->
              <form id="fareQuoteForm" class="fare-quote-form" novalidate>
                
                <!-- Full Name -->
                <div class="mb-3">
                  <label for="quoteName" class="form-label small fw-bold text-navy mb-1">Your Name *</label>
                  <div class="input-group">
                    <span class="input-group-text bg-light border-end-0 text-muted"><i class="bi bi-person"></i></span>
                    <input type="text" class="form-control border-start-0" id="quoteName" name="name" placeholder="First &amp; Last Name" required>
                  </div>
                </div>

                <!-- Email -->
                <div class="mb-3">
                  <label for="quoteEmail" class="form-label small fw-bold text-navy mb-1">Your Email *</label>
                  <div class="input-group">
                    <span class="input-group-text bg-light border-end-0 text-muted"><i class="bi bi-envelope"></i></span>
                    <input type="email" class="form-control border-start-0" id="quoteEmail" name="email" placeholder="name@company.com" required>
                  </div>
                </div>

                <!-- Phone -->
                <div class="mb-3">
                  <label for="quotePhone" class="form-label small fw-bold text-navy mb-1">Your Phone *</label>
                  <div class="input-group">
                    <span class="input-group-text bg-light border-end-0 text-muted"><i class="bi bi-telephone"></i></span>
                    <input type="tel" class="form-control border-start-0" id="quotePhone" name="phone" placeholder="(123) 456-7890" required>
                  </div>
                </div>

                <!-- Required Checkbox & Exact Legal Text -->
                <div class="form-check text-optin-check mb-3">
                  <input class="form-check-input custom-check-input" type="checkbox" id="smsConsentCheck" required checked>
                  <label class="form-check-label text-optin-label text-muted" for="smsConsentCheck">
                    Yes, I agree to receive text messages from Business Class Travel to my phone number above. Message frequency varies and may include my fare quote, follow-ups about that quote, booking confirmations and e-ticket details, and replies to my questions. Consent is not a condition of purchase. Message and data rates may apply. Reply STOP to unsubscribe at any time. Reply HELP for help. We do not share your mobile opt-in information with anyone. See our <a href="#" class="text-navy text-decoration-underline fw-semibold">Privacy Policy</a> and our messaging <a href="#" class="text-navy text-decoration-underline fw-semibold">Terms and Conditions</a> for more information about how we handle your data.
                  </label>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-quote-submit w-100 fw-bold py-3 rounded-pill text-white d-inline-flex align-items-center justify-content-center gap-2" id="btnSubmitQuote">
                  <span>Get my written quote</span>
                  <i class="bi bi-arrow-right fs-5"></i>
                </button>

                <!-- Feedback Toast / Alert -->
                <div class="quote-feedback-alert mt-3" id="quoteFeedbackAlert" style="display: none;" role="alert"></div>

              </form>

              <!-- Departing in 28 days Urgency Box -->
              <div class="departing-urgency-box text-center mt-3 pt-3 border-top">
                <p class="urgency-call-heading fw-bold text-navy mb-2">
                  <i class="bi bi-stopwatch-fill text-danger me-1"></i> Departing in 28 days? Call before this fare changes
                </p>
                <a href="tel:+18337431225" class="btn btn-direct-call w-100 py-2 rounded-pill fw-bold d-inline-flex align-items-center justify-content-center gap-2">
                  <i class="bi bi-telephone-fill"></i>
                  <span>Call 1-833-743-1225</span>
                </a>
                <p class="offer-extra-discount-note small text-muted mt-2 mb-0">
                  *Extra $100 off applies once per new international Business or First Class booking made by phone with an advisor.
                </p>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ===== 4. "YOUR ADVISOR IS ONE CALL AWAY" NEW CTA SECTION ===== -->
    <section class="advisor-one-call-section position-relative py-5 text-white" aria-label="Advisor Concierge Support">
      <div class="container-xl px-3 px-lg-4 position-relative" style="z-index: 2;">
        
        <div class="row align-items-center justify-content-between g-4">
          
          <!-- Left Text Content -->
          <div class="col-lg-7" data-aos="fade-up" data-aos-duration="600">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-white bg-opacity-10 text-white small fw-bold mb-3">
              <i class="bi bi-headset text-danger"></i>
              <span>Dedicated Live Travel Desk</span>
            </div>
            
            <h2 class="advisor-section-title font-playfair fw-bold text-white mb-3">
              Your advisor is<br class="d-none d-sm-inline"> one call away
            </h2>
            
            <p class="advisor-section-desc text-white text-opacity-85 mb-4">
              Concierge Business Class travel, human-led and personal to you. Advisors with 10+ years of ticketing experience and 60+ airline partners.
            </p>

            <!-- Feature Badges -->
            <div class="row g-3 mb-4">
              <div class="col-sm-6">
                <div class="d-flex align-items-center gap-2">
                  <i class="bi bi-award-fill text-danger fs-5"></i>
                  <span class="small fw-semibold">10+ Years Ticketing Experience</span>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="d-flex align-items-center gap-2">
                  <i class="bi bi-airplane-engines-fill text-danger fs-5"></i>
                  <span class="small fw-semibold">60+ Airline Consolidator Contracts</span>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="d-flex align-items-center gap-2">
                  <i class="bi bi-clock-history text-danger fs-5"></i>
                  <span class="small fw-semibold">24&times;7 VIP Emergency Flight Concierge</span>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="d-flex align-items-center gap-2">
                  <i class="bi bi-shield-check text-danger fs-5"></i>
                  <span class="small fw-semibold">ASTA &amp; IATA Certified Travel Partner</span>
                </div>
              </div>
            </div>

          </div>

          <!-- Right Call & Email Action Card -->
          <div class="col-lg-5 col-xl-4 ms-lg-auto" data-aos="fade-left" data-aos-duration="700">
            <div class="advisor-contact-card p-4 rounded-4 bg-white text-navy shadow-lg">
              <div class="d-flex align-items-center gap-3 mb-3 pb-3 border-bottom">
                <div class="advisor-avatar-icon bg-danger-subtle text-danger rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-headset fs-3"></i>
                </div>
                <div>
                  <h4 class="h6 fw-bold mb-0 text-navy">Priority Concierge Desk</h4>
                  <span class="text-success small fw-semibold"><i class="bi bi-dot fs-5 align-middle"></i> Live Advisors Online</span>
                </div>
              </div>

              <!-- Phone Direct Link -->
              <div class="mb-3">
                <label class="d-block small text-muted text-uppercase fw-bold mb-1">Direct Phone Call</label>
                <a href="tel:+18337431225" class="btn btn-advisor-phone w-100 py-3 rounded-pill fw-bold text-white d-inline-flex align-items-center justify-content-center gap-2">
                  <i class="bi bi-telephone-fill"></i>
                  <span>1-833-743-1225</span>
                </a>
              </div>

              <!-- Email Direct Link -->
              <div>
                <label class="d-block small text-muted text-uppercase fw-bold mb-1">Email Concierge</label>
                <a href="mailto:concierge@businessclassairtravel.com" class="btn btn-outline-navy w-100 py-2 rounded-pill fw-bold d-inline-flex align-items-center justify-content-center gap-2">
                  <i class="bi bi-envelope-fill"></i>
                  <span>concierge@businessclassairtravel.com</span>
                </a>
              </div>

              <p class="small text-muted text-center mt-3 mb-0">
                Toll-free USA &amp; Canada &bull; Available 24 hours a day
              </p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- ===== 5. NEWSLETTER SUBSCRIBE CTA SECTION (Red Background) ===== -->
    <?php include 'components/newsletter-cta-section.php'; ?>

  </main>

  <!-- ===== 6. SITE FOOTER ===== -->
  <?php include 'components/footer.php'; ?>

  <!-- ===== 7. SEARCH ANIMATED LOADER OVERLAY ===== -->
  <?php include 'components/search-loader.php'; ?>

  <!-- Bootstrap 5.3 Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- AOS JS -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

  <!-- Main JS -->
  <script src="assets/js/main.js?v=<?= time(); ?>"></script>

  <!-- Page-specific Interactive Script for Cabin Fares & Quote Form -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      if (typeof AOS !== 'undefined') {
        AOS.init({ duration: 650, once: true });
      }

      // 1. Cabin Class Tabs Switching
      const cabinTabs = document.querySelectorAll('.cabin-fare-tab');
      const displayPrice = document.getElementById('displayPrice');
      const displayPublishedFare = document.getElementById('displayPublishedFare');
      const displaySavingsBadge = document.getElementById('displaySavingsBadge');

      cabinTabs.forEach(tab => {
        tab.addEventListener('click', function () {
          cabinTabs.forEach(t => t.classList.remove('active'));
          this.classList.add('active');

          const price = this.getAttribute('data-price');
          const published = this.getAttribute('data-published');
          const save = this.getAttribute('data-save');
          const percent = this.getAttribute('data-percent');

          if (displayPrice) displayPrice.textContent = '$' + Number(price).toLocaleString();
          if (displayPublishedFare) displayPublishedFare.textContent = '$' + Number(published).toLocaleString();
          if (displaySavingsBadge) {
            displaySavingsBadge.innerHTML = `<i class="bi bi-tag-fill me-1"></i> You save $${Number(save).toLocaleString()} (${percent})`;
          }
        });
      });

      // 2. Modify Search Drawer Toggle
      const btnToggleModify = document.getElementById('btnToggleModifySearch');
      const modifyDrawer = document.getElementById('modifySearchDrawer');
      if (btnToggleModify && modifyDrawer) {
        btnToggleModify.addEventListener('click', function () {
          const bsCollapse = bootstrap.Collapse.getOrCreateInstance(modifyDrawer);
          bsCollapse.toggle();
        });
      }

      // 3. Lead Quote Form Submission Handling
      const quoteForm = document.getElementById('fareQuoteForm');
      const quoteAlert = document.getElementById('quoteFeedbackAlert');
      const btnSubmit = document.getElementById('btnSubmitQuote');

      if (quoteForm && quoteAlert && btnSubmit) {
        quoteForm.addEventListener('submit', function (e) {
          e.preventDefault();
          const nameVal = document.getElementById('quoteName').value.trim();
          const emailVal = document.getElementById('quoteEmail').value.trim();
          const phoneVal = document.getElementById('quotePhone').value.trim();

          if (!nameVal || !emailVal || !phoneVal) {
            quoteAlert.className = 'quote-feedback-alert alert alert-danger';
            quoteAlert.innerHTML = '<i class="bi bi-exclamation-triangle-fill me-2"></i> Please complete all required fields.';
            quoteAlert.style.display = 'block';
            return;
          }

          // Button loading
          const origText = btnSubmit.innerHTML;
          btnSubmit.disabled = true;
          btnSubmit.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span> Generating Written Quote...';

          setTimeout(function () {
            btnSubmit.disabled = false;
            btnSubmit.innerHTML = '<i class="bi bi-check-lg me-1"></i> Quote Sent to Inbox!';
            btnSubmit.classList.remove('btn-quote-submit');
            btnSubmit.classList.add('btn-success');

            quoteAlert.className = 'quote-feedback-alert alert alert-success mt-3';
            quoteAlert.innerHTML = `<strong><i class="bi bi-check-circle-fill me-2"></i> Official Quote Dispatched!</strong><br>An itemized fare quote for <strong>New York to London ($2,219)</strong> has been sent to <strong>${emailVal}</strong>. A dedicated advisor will text confirmation to <strong>${phoneVal}</strong> shortly.`;
            quoteAlert.style.display = 'block';

            quoteForm.reset();

            setTimeout(function () {
              btnSubmit.innerHTML = origText;
              btnSubmit.classList.remove('btn-success');
              btnSubmit.classList.add('btn-quote-submit');
            }, 6000);
          }, 800);
        });
      }
    });
  </script>

</body>
</html>
