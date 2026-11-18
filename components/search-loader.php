<?php
/**
 * Flight Search Loading Screen Component
 * 
 * Displays an animated radar and progress tracker while searching
 * unpublished consolidator inventory before navigating to flight-results.php.
 */
?>
<!-- ===== FLIGHT SEARCH ANIMATED LOADER OVERLAY ===== -->
<div id="flightSearchLoaderOverlay" class="flight-search-loader-overlay d-none" role="dialog" aria-modal="true" aria-label="Searching flights">
  <div class="loader-content-box text-center">
    
    <!-- Animated Radar & Flight Compass -->
    <div class="loader-radar-wrapper mb-4">
      <div class="loader-radar-ping"></div>
      <div class="loader-radar-circle"></div>
      <div class="loader-radar-sweep"></div>
      <div class="loader-plane-wrapper">
        <i class="bi bi-airplane-fill loader-plane-icon"></i>
      </div>
    </div>
    
    <!-- Title & Route -->
    <h3 class="loader-title text-white mb-2 font-playfair">Searching Unpublished Consolidator Fares</h3>
    <p class="loader-route text-white-50 mb-3" id="loaderRouteDisplay">
      <span class="loader-origin">New York (JFK)</span> 
      <i class="bi bi-arrow-right mx-2 text-danger"></i> 
      <span class="loader-dest">London (LGW)</span>
    </p>
    
    <!-- Progress Track & Bar -->
    <div class="loader-progress-track mb-3 mx-auto">
      <div class="loader-progress-fill" id="loaderProgressFill"></div>
    </div>
    
    <!-- Dynamic Scanning Step Indicator -->
    <div class="loader-step-box" id="loaderStepBox">
      <span class="spinner-grow spinner-grow-sm text-danger me-2" role="status"></span>
      <span class="loader-step-text" id="loaderStepText">Accessing private airline consolidator databases...</span>
    </div>

    <!-- Small Trust Strip -->
    <div class="loader-trust-strip mt-4 pt-3 border-top border-white border-opacity-10 d-flex justify-content-center gap-3 text-white-50 small">
      <span><i class="bi bi-shield-check text-success me-1"></i> IATA Certified</span>
      <span>•</span>
      <span><i class="bi bi-check2-circle text-success me-1"></i> 60+ Airline Partners</span>
      <span>•</span>
      <span><i class="bi bi-lock-fill text-warning me-1"></i> 256-Bit SSL Encrypted</span>
    </div>

  </div>
</div>
<!-- ===== END FLIGHT SEARCH ANIMATED LOADER OVERLAY ===== -->
