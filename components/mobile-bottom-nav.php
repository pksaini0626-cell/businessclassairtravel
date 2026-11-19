<?php
/**
 * Mobile Bottom Navigation Bar & Flight Booking Modal
 * Visible only on mobile / small screens (d-lg-none)
 * Fixed at bottom of screen like modern mobile app navigation
 * 
 * 2 Actions:
 * 1. Call Now button (tel:+18337431225)
 * 2. Book Flight button (triggers modal with full hero flight booking form)
 */
?>

<!-- ===== MOBILE BOTTOM NAVIGATION BAR ===== -->
<nav class="mobile-bottom-nav d-lg-none" id="mobileBottomNav" aria-label="Mobile quick navigation">
  <div class="mobile-bottom-nav-inner d-flex align-items-center justify-content-between">
    
    <!-- 1. Call Now Button -->
    <a href="tel:+18337431225" class="mobile-nav-btn mobile-nav-call" id="mobileNavCallBtn" aria-label="Call Now">
      <div class="mobile-nav-icon-wrap">
        <i class="bi bi-telephone-fill"></i>
      </div>
      <div class="mobile-nav-text">
        <span class="mobile-nav-title">Call Now</span>
      </div>
    </a>

    <!-- Divider -->
    <div class="mobile-nav-divider"></div>

    <!-- 2. Book Flight Button (Opens Modal) -->
    <button type="button" class="mobile-nav-btn mobile-nav-book" id="mobileNavBookBtn" data-bs-toggle="modal" data-bs-target="#flightBookingModal" aria-label="Book Flight">
      <div class="mobile-nav-icon-wrap">
        <i class="bi bi-airplane-fill"></i>
      </div>
      <div class="mobile-nav-text">
        <span class="mobile-nav-title">Book Flight</span>
      </div>
    </button>

  </div>
</nav>

<!-- ===== MOBILE FLIGHT BOOKING MODAL ===== -->
<div class="modal fade mobile-flight-modal" id="flightBookingModal" tabindex="-1" aria-labelledby="flightBookingModalLabel" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content shadow-lg border-0">
      
      <!-- Modal Header -->
      <div class="modal-header border-0 bg-navy text-white px-3 py-3 position-relative">
        <div class="d-flex align-items-center gap-2">
          <div class="modal-header-icon-box">
            <i class="bi bi-airplane-fill"></i>
          </div>
          <div>
            <h5 class="modal-title font-playfair fw-bold mb-0 text-white" id="flightBookingModalLabel">Book Business &amp; First Class</h5>
            <small class="text-white-50">Exclusive phone &amp; private consolidator fares</small>
          </div>
        </div>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal Body (Hero Flight Search Form) -->
      <div class="modal-body p-3 p-sm-4 bg-light">
        <div class="flight-search-card flight-search-modal-card p-3 p-sm-4">
          <form id="modalFlightSearchForm" action="flight-results.php" method="GET">

            <!-- Top Flight Options (Trip Type & Direct Filter) -->
            <div class="search-top-bar d-flex flex-wrap align-items-center justify-content-between gap-2 mb-3">
              
              <!-- Trip Type Buttons -->
              <div class="trip-type-group d-inline-flex align-items-center gap-2" role="group" aria-label="Trip type">
                <button type="button" class="btn btn-trip-pill active" id="modalBtnRoundTrip" data-trip-type="round-trip">
                  <i class="bi bi-arrow-left-right me-1"></i> Round Trip
                </button>
                <button type="button" class="btn btn-trip-pill" id="modalBtnOneWay" data-trip-type="one-way">
                  <i class="bi bi-airplane-fill me-1 airplane-icon-turn"></i> One Way
                </button>
                <input type="hidden" name="trip_type" id="modalTripTypeInput" value="round-trip">
              </div>

              <!-- Direct Flights Only Toggle -->
              <div class="form-check form-switch direct-toggle-switch d-flex align-items-center gap-2 m-0">
                <input class="form-check-input custom-switch-input" type="checkbox" role="switch" id="modalDirectFlightsOnly" name="direct_only" value="1">
                <label class="form-check-label switch-label fw-bold text-navy" for="modalDirectFlightsOnly">Direct Only</label>
              </div>

            </div>

            <!-- Route Inputs: From, Swap, To -->
            <div class="row g-2 mb-2">
              <div class="col-12">
                <div class="route-fields-container d-flex align-items-center">

                  <!-- FROM (DEPARTURE) -->
                  <div class="search-input-box flex-fill route-box-from">
                    <div class="input-box-inner d-flex align-items-center gap-2">
                      <span class="material-icons-round input-icon">location_on</span>
                      <div class="flex-grow-1 min-w-0">
                        <label for="modalFromAirport" class="input-label">FROM (DEPARTURE)</label>
                        <input type="text" class="form-control form-control-naked" id="modalFromAirport" name="origin" placeholder="City or Airport (e.g. JFK, SFO)" value="New York (JFK)" required>
                      </div>
                    </div>
                  </div>

                  <!-- Swap Button -->
                  <button type="button" class="btn-swap-airports" id="modalBtnSwapAirports" title="Swap Departure and Destination" aria-label="Swap airports">
                    <i class="bi bi-arrow-left-right"></i>
                  </button>

                  <!-- TO (DESTINATION) -->
                  <div class="search-input-box flex-fill route-box-to">
                    <div class="input-box-inner d-flex align-items-center gap-2">
                      <span class="material-icons-round input-icon">location_on</span>
                      <div class="flex-grow-1 min-w-0">
                        <label for="modalToAirport" class="input-label">TO (DESTINATION)</label>
                        <input type="text" class="form-control form-control-naked" id="modalToAirport" name="destination" placeholder="City or Airport (e.g. DEL, BOM)" value="London (LHR)" required>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

              <!-- DEPARTURE DATE -->
              <div class="col-6">
                <div class="search-input-box h-100">
                  <div class="input-box-inner d-flex align-items-center gap-2">
                    <span class="material-icons-round input-icon">calendar_month</span>
                    <div class="flex-grow-1 min-w-0">
                      <label for="modalDepartureDate" class="input-label">DEPARTURE</label>
                      <input type="date" class="form-control form-control-naked" id="modalDepartureDate" name="depart_date" value="2026-11-16" required>
                    </div>
                  </div>
                </div>
              </div>

              <!-- RETURN DATE -->
              <div class="col-6" id="modalReturnDateCol">
                <div class="search-input-box h-100">
                  <div class="input-box-inner d-flex align-items-center gap-2">
                    <span class="material-icons-round input-icon">calendar_month</span>
                    <div class="flex-grow-1 min-w-0">
                      <label for="modalReturnDate" class="input-label">RETURN</label>
                      <input type="date" class="form-control form-control-naked" id="modalReturnDate" name="return_date" value="2026-11-30">
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <!-- Travelers & Cabin Class Selectors -->
            <div class="row g-2 align-items-stretch" id="modalRowPrimarySelectors">

              <!-- TRAVELERS (Dropdown) -->
              <div class="col-12" id="modalTravelersCol">
                <div class="search-input-box h-100 custom-select-box dropdown" id="modalTravelersBox">
                  <div class="input-box-inner d-flex align-items-center gap-2 cursor-pointer" data-bs-toggle="dropdown" aria-expanded="false" id="modalTravelersDropdownToggle">
                    <span class="material-icons-round input-icon">group</span>
                    <div class="flex-grow-1 min-w-0">
                      <label class="input-label cursor-pointer">TRAVELERS</label>
                      <div class="custom-select-value d-flex align-items-center justify-content-between">
                        <span id="modalTravelersDisplay" class="text-truncate fw-bold text-navy">1 Adult</span>
                        <i class="bi bi-chevron-down custom-select-caret ms-1"></i>
                      </div>
                    </div>
                  </div>
                  
                  <input type="hidden" name="travelers" id="modalTravelersInput" value="1 Adult">

                  <ul class="dropdown-menu custom-select-menu shadow-lg border-0 w-100 p-2" aria-labelledby="modalTravelersDropdownToggle">
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

              <!-- CABIN CLASS (Dropdown - Reveals Email & Phone on selection) -->
              <div class="col-12" id="modalCabinClassCol">
                <div class="search-input-box h-100 custom-select-box dropdown" id="modalCabinClassBox">
                  <div class="input-box-inner d-flex align-items-center gap-2 cursor-pointer" data-bs-toggle="dropdown" aria-expanded="false" id="modalCabinClassDropdownToggle">
                    <span class="material-icons-round input-icon">diamond</span>
                    <div class="flex-grow-1 min-w-0">
                      <label class="input-label cursor-pointer">CABIN CLASS</label>
                      <div class="custom-select-value d-flex align-items-center justify-content-between">
                        <span id="modalCabinClassDisplay" class="text-truncate fw-bold text-navy">Select Cabin Class</span>
                        <i class="bi bi-chevron-down custom-select-caret ms-1"></i>
                      </div>
                    </div>
                  </div>
                  
                  <input type="hidden" name="cabin_class" id="modalCabinClassSelect" value="">

                  <ul class="dropdown-menu custom-select-menu shadow-lg border-0 w-100 p-2" aria-labelledby="modalCabinClassDropdownToggle">
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
              <div class="col-12 d-none" id="modalEmailCol">
                <div class="search-input-box h-100" id="modalEmailBox">
                  <div class="input-box-inner d-flex align-items-center gap-2">
                    <span class="material-icons-round input-icon">email</span>
                    <div class="flex-grow-1 min-w-0">
                      <label for="modalContactEmail" class="input-label">EMAIL ADDRESS *</label>
                      <input type="email" class="form-control form-control-naked" id="modalContactEmail" name="email" placeholder="you@email.com">
                    </div>
                  </div>
                </div>
              </div>

              <!-- PHONE NUMBER * (Hidden by default, revealed on cabin class selection) -->
              <div class="col-12 d-none" id="modalPhoneCol">
                <div class="search-input-box h-100" id="modalPhoneBox">
                  <div class="input-box-inner d-flex align-items-center gap-2">
                    <span class="material-icons-round input-icon">phone</span>
                    <div class="flex-grow-1 min-w-0">
                      <label for="modalContactPhone" class="input-label">PHONE NUMBER *</label>
                      <input type="tel" class="form-control form-control-naked" id="modalContactPhone" name="phone" placeholder="123-456-7890">
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <!-- Guarantee Badges & Instant Search CTA Button -->
            <div class="search-action-row d-flex flex-column gap-3 mt-3 pt-2">
              
              <!-- Search CTA Button -->
              <div class="search-btn-wrapper w-100">
                <button type="submit" class="btn btn-search-flights w-100 py-3" id="modalBtnSearchFlights">
                  <i class="bi bi-search search-cta-icon me-2"></i>
                  <span class="search-cta-text">SEARCH FLIGHTS NOW</span>
                </button>
              </div>

              <!-- Micro Features Strip -->
              <div class="form-features-strip d-flex flex-wrap align-items-center justify-content-center gap-2 text-center small text-navy">
                <span class="d-inline-flex align-items-center gap-1">
                  <i class="bi bi-check-circle-fill text-success"></i> No Hidden Fees
                </span>
                <span>•</span>
                <span class="d-inline-flex align-items-center gap-1">
                  <i class="bi bi-lightning-charge-fill text-warning"></i> Instant Confirmation
                </span>
                <span>•</span>
                <span class="d-inline-flex align-items-center gap-1">
                  <i class="bi bi-shield-check text-primary"></i> 24/7 Desk
                </span>
              </div>

            </div>

          </form>
        </div>
      </div>

    </div>
  </div>
</div>
