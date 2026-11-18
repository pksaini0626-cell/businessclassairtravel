<?php
/**
 * Hero Section Component
 * Matches Figma design:
 * - Live fares pill badge
 * - Playfair serif headline with Navy & Dark Red styling
 * - Trust guarantee features
 * - Interactive Flight Search Card with:
 *     - Round Trip / One Way toggle
 *     - Direct Flights Only switch
 *     - From / To inputs with quick swap button
 *     - Departure & Return date pickers
 *     - Travelers dropdown
 *     - Cabin Class selector with dynamic JS reveal for Email & Phone on Premium/Business/First class
 *     - Instant search CTA button
 *     - Ratings & Reviews strip
 * - Bottom floating banner with trust pillars & direct call pills
 */
?>
<!-- ===== HERO SECTION ===== -->
<section class="hero-section" id="hero">

  <!-- Background Video & Atmospheric Layers -->
  <div class="hero-bg-wrapper">
    <video class="hero-bg-video" autoplay muted loop playsinline poster="assets/images/banners/hero-banner.webp" preload="auto">
      <source src="assets/videos/home-page-hero.mp4" type="video/mp4">
      <source src="assets/videos/hero-flight.mp4" type="video/mp4">
    </video>
    <div class="hero-video-overlay"></div>
    <div class="hero-gradient-overlay"></div>
  </div>

  <div class="container-xl px-3 px-lg-4 position-relative z-2">

    <!-- ===== HERO INTRO CONTENT ===== -->
    <div class="hero-intro-content">

      <!-- 1. Live Fares Alert Pill -->
      <div class="hero-live-pill mb-3" data-aos="fade-down" data-aos-duration="600">
        <span class="live-dot-pulse"></span>
        <span class="live-pill-text">Live Fares Available · Phone Exclusive Quotes</span>
      </div>

      <!-- 2. Main Headline (Serif + Brand Colors) -->
      <h1 class="hero-display-title mb-3" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">
        <span class="title-navy d-block d-md-inline">Luxury Flights &amp;</span>
        <span class="title-red d-block d-md-inline">Exclusive Offers</span>
      </h1>

      <!-- 3. Subtitle / Value Proposition -->
      <p class="hero-description mb-3" data-aos="fade-up" data-aos-duration="700" data-aos-delay="200">
Unlock private consolidator fares and unpublished lie-flat cabin inventory to India, Europe, and worldwide. Connect with our 24/7 live concierge travel desk.

      </p>

      <!-- 4. Key Guarantees Row -->
      <div class="hero-guarantees-row d-flex flex-wrap align-items-center gap-3 gap-md-4 mb-4" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">
        <div class="guarantee-item d-flex align-items-center gap-2">
          <i class="bi bi-shield-fill-check guarantee-icon"></i>
          <span>Best Fare Guaranteed</span>
        </div>
        <span class="guarantee-divider d-none d-md-inline">|</span>
        <div class="guarantee-item d-flex align-items-center gap-2">
          <i class="bi bi-briefcase-fill guarantee-icon"></i>
          <span>2×32kg Bags on Major Airlines</span>
        </div>
        <span class="guarantee-divider d-none d-md-inline">|</span>
        <div class="guarantee-item d-flex align-items-center gap-2">
          <i class="bi bi-telephone-fill guarantee-icon"></i>
          <span>Call Only Rates Save Up to $600</span>
        </div>
      </div>

    </div>

    <!-- ===== 5. FLIGHT SEARCH FORM CARD ===== -->
    <div class="flight-search-card shadow-lg" data-aos="fade-up" data-aos-duration="800" data-aos-delay="350">
      <form id="flightSearchForm" action="flight-results.php" method="GET">

        <!-- Top Flight Options (Trip Type & Direct Filter) -->
        <div class="search-top-bar d-flex flex-wrap align-items-center justify-content-between gap-3 mb-3">
          
          <!-- Trip Type Buttons -->
          <div class="trip-type-group d-inline-flex align-items-center gap-2" role="group" aria-label="Trip type">
            <button type="button" class="btn btn-trip-pill active" id="btnRoundTrip" data-trip-type="round-trip">
              <i class="bi bi-arrow-left-right me-1"></i> Round Trip
            </button>
            <button type="button" class="btn btn-trip-pill" id="btnOneWay" data-trip-type="one-way">
              <i class="bi bi-airplane-fill me-1 airplane-icon-turn"></i> One Way
            </button>
            <input type="hidden" name="trip_type" id="tripTypeInput" value="round-trip">
          </div>

          <!-- Direct Flights Only Toggle -->
          <div class="form-check form-switch direct-toggle-switch d-flex align-items-center gap-2 m-0">
            <input class="form-check-input custom-switch-input" type="checkbox" role="switch" id="directFlightsOnly" name="direct_only" value="1">
            <label class="form-check-label switch-label fw-bold text-navy" for="directFlightsOnly">Direct Flights Only</label>
          </div>

        </div>

        <!-- Inputs Row 1: Departure, Destination, Departure Date, Return Date -->
        <div class="row g-2 mb-2">

          <!-- Combined Route Box (From + Swap Button + To) -->
          <div class="col-lg-6 col-12">
            <div class="route-fields-container d-flex align-items-center">

              <!-- FROM (DEPARTURE) -->
              <div class="search-input-box flex-fill route-box-from">
                <div class="input-box-inner d-flex align-items-center gap-2">
                  <span class="material-icons-round input-icon">location_on</span>
                  <div class="flex-grow-1 min-w-0">
                    <label for="fromAirport" class="input-label">FROM (DEPARTURE)</label>
                    <input type="text" class="form-control form-control-naked" id="fromAirport" name="origin" placeholder="City or Airport (e.g. JFK, SFO)" value="New York (JFK)" required>
                  </div>
                </div>
              </div>

              <!-- Swap Button -->
              <button type="button" class="btn-swap-airports" id="btnSwapAirports" title="Swap Departure and Destination" aria-label="Swap airports">
                <i class="bi bi-arrow-left-right"></i>
              </button>

              <!-- TO (DESTINATION) -->
              <div class="search-input-box flex-fill route-box-to">
                <div class="input-box-inner d-flex align-items-center gap-2">
                  <span class="material-icons-round input-icon">location_on</span>
                  <div class="flex-grow-1 min-w-0">
                    <label for="toAirport" class="input-label">TO (DESTINATION)</label>
                    <input type="text" class="form-control form-control-naked" id="toAirport" name="destination" placeholder="City or Airport (e.g. DEL, BOM)" value="London (LHR)" required>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- DEPARTURE DATE -->
          <div class="col-lg-3 col-sm-6 col-12">
            <div class="search-input-box h-100">
              <div class="input-box-inner d-flex align-items-center gap-2">
                <span class="material-icons-round input-icon">calendar_month</span>
                <div class="flex-grow-1 min-w-0">
                  <label for="departureDate" class="input-label">DEPARTURE DATE</label>
                  <input type="date" class="form-control form-control-naked" id="departureDate" name="depart_date" value="2026-11-16" required>
                </div>
              </div>
            </div>
          </div>

          <!-- RETURN DATE -->
          <div class="col-lg-3 col-sm-6 col-12" id="returnDateCol">
            <div class="search-input-box h-100">
              <div class="input-box-inner d-flex align-items-center gap-2">
                <span class="material-icons-round input-icon">calendar_month</span>
                <div class="flex-grow-1 min-w-0">
                  <label for="returnDate" class="input-label">RETURN DATE</label>
                  <input type="date" class="form-control form-control-naked" id="returnDate" name="return_date" value="2026-11-30">
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- Inputs Row 2: Travelers, Cabin Class, Email Address, & Phone Number -->
        <div class="row g-2 align-items-stretch" id="rowPrimarySelectors">

          <!-- TRAVELERS (Custom Styled Dropdown) -->
          <div class="col-lg-6 col-sm-6 col-12" id="travelersCol">
            <div class="search-input-box h-100 custom-select-box dropdown" id="travelersBox">
              <div class="input-box-inner d-flex align-items-center gap-2 cursor-pointer" data-bs-toggle="dropdown" aria-expanded="false" id="travelersDropdownToggle">
                <span class="material-icons-round input-icon">group</span>
                <div class="flex-grow-1 min-w-0">
                  <label class="input-label cursor-pointer">TRAVELERS</label>
                  <div class="custom-select-value d-flex align-items-center justify-content-between">
                    <span id="travelersDisplay" class="text-truncate fw-bold text-navy">1 Adult</span>
                    <i class="bi bi-chevron-down custom-select-caret ms-1"></i>
                  </div>
                </div>
              </div>
              
              <!-- Hidden Input for Form Submission -->
              <input type="hidden" name="travelers" id="travelersInput" value="1 Adult">

              <!-- Custom Dropdown Menu -->
              <ul class="dropdown-menu custom-select-menu shadow-lg border-0 w-100 p-2" aria-labelledby="travelersDropdownToggle">
                <li>
                  <button type="button" class="dropdown-item custom-select-item d-flex align-items-center justify-content-between active" data-value="1 Adult">
                    <span>1 Adult</span>
                    <i class="bi bi-check2 check-icon"></i>
                  </button>
                </li>
                <li>
                  <button type="button" class="dropdown-item custom-select-item d-flex align-items-center justify-content-between" data-value="2 Adults">
                    <span>2 Adults</span>
                    <i class="bi bi-check2 check-icon"></i>
                  </button>
                </li>
                <li>
                  <button type="button" class="dropdown-item custom-select-item d-flex align-items-center justify-content-between" data-value="3 Adults">
                    <span>3 Adults</span>
                    <i class="bi bi-check2 check-icon"></i>
                  </button>
                </li>
                <li>
                  <button type="button" class="dropdown-item custom-select-item d-flex align-items-center justify-content-between" data-value="4+ Adults">
                    <span>4+ Adults / Group</span>
                    <i class="bi bi-check2 check-icon"></i>
                  </button>
                </li>
                <li>
                  <button type="button" class="dropdown-item custom-select-item d-flex align-items-center justify-content-between" data-value="Family (2 Adults, 2 Children)">
                    <span>Family (2 Adults, 2 Children)</span>
                    <i class="bi bi-check2 check-icon"></i>
                  </button>
                </li>
              </ul>
            </div>
          </div>

          <!-- CABIN CLASS (Custom Styled Dropdown - Reveals Email & Phone on selection) -->
          <div class="col-lg-6 col-sm-6 col-12" id="cabinClassCol">
            <div class="search-input-box h-100 custom-select-box dropdown" id="cabinClassBox">
              <div class="input-box-inner d-flex align-items-center gap-2 cursor-pointer" data-bs-toggle="dropdown" aria-expanded="false" id="cabinClassDropdownToggle">
                <span class="material-icons-round input-icon">diamond</span>
                <div class="flex-grow-1 min-w-0">
                  <label class="input-label cursor-pointer">CABIN CLASS</label>
                  <div class="custom-select-value d-flex align-items-center justify-content-between">
                    <span id="cabinClassDisplay" class="text-truncate fw-bold text-navy">Select Cabin Class</span>
                    <i class="bi bi-chevron-down custom-select-caret ms-1"></i>
                  </div>
                </div>
              </div>
              
              <!-- Hidden Input for Form Submission & JS Trigger -->
              <input type="hidden" name="cabin_class" id="cabinClassSelect" value="">

              <!-- Custom Dropdown Menu -->
              <ul class="dropdown-menu custom-select-menu shadow-lg border-0 w-100 p-2" aria-labelledby="cabinClassDropdownToggle">
                <li>
                  <button type="button" class="dropdown-item custom-select-item d-flex align-items-center justify-content-between active" data-value="">
                    <span class="text-muted">Select Cabin Class</span>
                    <i class="bi bi-check2 check-icon"></i>
                  </button>
                </li>
                <li>
                  <button type="button" class="dropdown-item custom-select-item d-flex align-items-center justify-content-between" data-value="economy">
                    <div class="d-flex align-items-center gap-2">
                      <i class="bi bi-person text-secondary"></i>
                      <div>
                        <span class="d-block fw-semibold text-navy">Economy/Coach</span>
                        <small class="text-muted" style="font-size:0.75rem;">Standard Comfort</small>
                      </div>
                    </div>
                    <i class="bi bi-check2 check-icon"></i>
                  </button>
                </li>
                <li>
                  <button type="button" class="dropdown-item custom-select-item d-flex align-items-center justify-content-between" data-value="premium_economy">
                    <div class="d-flex align-items-center gap-2">
                      <i class="bi bi-star-fill text-warning"></i>
                      <div>
                        <span class="d-block fw-semibold text-navy">Premium Economy</span>
                        <small class="text-dark-red fw-semibold" style="font-size:0.75rem;">Extra Legroom &amp; Priority</small>
                      </div>
                    </div>
                    <i class="bi bi-check2 check-icon"></i>
                  </button>
                </li>
                <li>
                  <button type="button" class="dropdown-item custom-select-item d-flex align-items-center justify-content-between" data-value="business_class">
                    <div class="d-flex align-items-center gap-2">
                      <i class="bi bi-award-fill text-primary"></i>
                      <div>
                        <span class="d-block fw-bold text-navy">Business Class</span>
                        <small class="text-dark-red fw-bold" style="font-size:0.75rem;">Lie-Flat &amp; Lounge Access</small>
                      </div>
                    </div>
                    <i class="bi bi-check2 check-icon"></i>
                  </button>
                </li>
                <li>
                  <button type="button" class="dropdown-item custom-select-item d-flex align-items-center justify-content-between" data-value="first_class">
                    <div class="d-flex align-items-center gap-2">
                      <i class="bi bi-gem text-danger"></i>
                      <div>
                        <span class="d-block fw-bold text-navy">First Class</span>
                        <small class="text-dark-red fw-bold" style="font-size:0.75rem;">Ultimate Private Luxury</small>
                      </div>
                    </div>
                    <i class="bi bi-check2 check-icon"></i>
                  </button>
                </li>
              </ul>
            </div>
          </div>

          <!-- EMAIL ADDRESS * (Hidden by default, revealed on cabin class selection) -->
          <div class="col-lg-3 col-sm-6 col-12 d-none" id="emailCol">
            <div class="search-input-box h-100" id="emailBox">
              <div class="input-box-inner d-flex align-items-center gap-2">
                <span class="material-icons-round input-icon">email</span>
                <div class="flex-grow-1 min-w-0">
                  <label for="contactEmail" class="input-label">EMAIL ADDRESS *</label>
                  <input type="email" class="form-control form-control-naked" id="contactEmail" name="email" placeholder="you@email.com">
                </div>
              </div>
            </div>
          </div>

          <!-- PHONE NUMBER * (Hidden by default, revealed on cabin class selection) -->
          <div class="col-lg-3 col-sm-6 col-12 d-none" id="phoneCol">
            <div class="search-input-box h-100" id="phoneBox">
              <div class="input-box-inner d-flex align-items-center gap-2">
                <span class="material-icons-round input-icon">phone</span>
                <div class="flex-grow-1 min-w-0">
                  <label for="contactPhone" class="input-label">PHONE NUMBER *</label>
                  <input type="tel" class="form-control form-control-naked" id="contactPhone" name="phone" placeholder="123-456-7890">
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- Row 3: Micro-Features & Search CTA Button -->
        <div class="search-action-row d-flex flex-wrap align-items-center justify-content-between gap-3 mt-3 pt-2">
          
          <!-- Micro Features Strip -->
          <div class="form-features-strip d-flex flex-wrap align-items-center gap-2 gap-md-3">
            <div class="strip-item d-flex align-items-center gap-1 rating-pill-badge">
              <span class="badge-star"><i class="bi bi-star-fill"></i></span>
              <span class="fw-bold text-navy">Ratings &amp; Reviews 4.9★</span>
              <span class="text-muted">(800+)</span>
            </div>
            <span class="strip-divider d-none d-md-inline">|</span>
            <div class="strip-item d-flex align-items-center gap-1">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span class="fw-semibold text-navy">No Hidden Booking Fees</span>
            </div>
            <span class="strip-divider d-none d-md-inline">|</span>
            <div class="strip-item d-flex align-items-center gap-1">
              <i class="bi bi-lightning-charge-fill text-warning"></i>
              <span class="fw-semibold text-navy">Instant Confirmation</span>
            </div>
          </div>

          <!-- Search CTA Button -->
          <div class="search-btn-wrapper ms-sm-auto">
            <button type="submit" class="btn btn-search-flights" id="btnSearchFlights">
              <i class="bi bi-search search-cta-icon me-2"></i>
              <span class="search-cta-text">SEARCH FLIGHTS</span>
            </button>
          </div>

        </div>

      </form>
    </div>

  </div>

  <!-- ===== 6. BOTTOM FLOATING BANNER / TRUST PILLARS STRIP ===== -->
  <div class="hero-bottom-strip mt-5">
    <div class="container-xl px-3 px-lg-4">
      <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 py-3">

        <!-- Left Trust Pillars -->
        <div class="d-flex flex-wrap align-items-center gap-3 gap-lg-4 trust-pillars-group">
          
          <div class="trust-pillar-item d-flex align-items-center gap-2">
            <span class="pillar-icon-box"><i class="bi bi-globe-americas"></i></span>
            <div class="lh-sm">
              <span class="pillar-title d-block">Worldwide</span>
              <span class="pillar-subtitle d-block">Coverage</span>
            </div>
          </div>

          <span class="pillar-divider d-none d-md-inline">|</span>

          <div class="trust-pillar-item d-flex align-items-center gap-2">
            <span class="pillar-icon-box"><i class="bi bi-headset"></i></span>
            <div class="lh-sm">
              <span class="pillar-title d-block">Unbeatable</span>
              <span class="pillar-subtitle d-block">Deals</span>
            </div>
          </div>

          <span class="pillar-divider d-none d-md-inline">|</span>

          <div class="trust-pillar-item d-flex align-items-center gap-2">
            <span class="pillar-icon-box"><i class="bi bi-shield-check"></i></span>
            <div class="lh-sm">
              <span class="pillar-title d-block">24X7 Customer</span>
              <span class="pillar-subtitle d-block">Support</span>
            </div>
          </div>

          <span class="pillar-divider d-none d-md-inline">|</span>

          <div class="trust-pillar-item d-flex align-items-center gap-2">
            <span class="pillar-icon-box"><i class="bi bi-airplane-fill airplane-tilt"></i></span>
            <div class="lh-sm">
              <span class="pillar-title d-block">Travel with</span>
              <span class="pillar-subtitle d-block">Confidence</span>
            </div>
          </div>

        </div>

        <!-- Quick Call Pill -->
        <div class="d-flex flex-wrap align-items-center gap-2 ms-auto call-pills-group">
          <a href="tel:+18337431225" class="btn btn-call-pill btn-call-red d-inline-flex align-items-center gap-2">
            <i class="bi bi-telephone-fill"></i>
            <span>1-833-743-1225</span>
          </a>
        </div>

      </div>
    </div>
  </div>

</section>
<!-- ===== END HERO SECTION ===== -->
