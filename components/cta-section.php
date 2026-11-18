<?php
/**
 * CTA / Why Choose Air Trip Maker Section Component
 * 
 * Features:
 * - Airplane window accent graphic (assets/images/icons/cta-side.png)
 * - Playfair serif headline & luxury subtitle
 * - 4 Trust Pillars with brand dark-red icons and stacked titles
 * - Elegant vertical dividers matching the design specification
 * - 100% responsive across mobile, tablet, and desktop
 */
?>
<!-- ===== CTA / WHY CHOOSE US SECTION ===== -->
<div id="about"></div>
<section class="cta-why-choose-section" id="why-choose-us" style="display: block; opacity: 1; visibility: visible;">
  <div class="container-xl px-3 px-lg-4">

    <div class="cta-banner-card" style="opacity: 1; visibility: visible;">
      
      <!-- Top / Left Content Wrapper (Window Image + Text) -->
      <div class="cta-lead-group">
        <!-- Airplane Window Accent Image (Hidden on mobile screen) -->
        <div class="cta-window-graphic d-none d-lg-block">
          <img src="assets/images/icons/cta-side.png" 
               alt="Airplane Window Sky View" 
               class="cta-window-img" 
               loading="eager" 
               draggable="false">
        </div>

        <!-- Heading Block -->
        <div class="cta-text-block">
          <h2 class="cta-heading mb-1">Why Choose Business Class Air Travel?</h2>
          <p class="cta-subheading mb-0">Your trusted partner for the best travel experience.</p>
        </div>
      </div>

      <!-- Main Vertical Divider (Desktop) -->
      <div class="cta-divider d-none d-lg-block"></div>

      <!-- 4 Trust Pillars Group -->
      <div class="cta-pillars-grid">
        
        <!-- Pillar 1: Worldwide Coverage -->
        <div class="cta-pillar-item">
          <div class="cta-pillar-icon">
            <i class="bi bi-globe-americas"></i>
          </div>
          <div class="cta-pillar-text">
            <span class="d-block pillar-line-1">Worldwide</span>
            <span class="d-block pillar-line-2">Coverage</span>
          </div>
        </div>

        <!-- Divider -->
        <div class="cta-inner-divider d-none d-md-block"></div>

        <!-- Pillar 2: Unbeatable Deals -->
        <div class="cta-pillar-item">
          <div class="cta-pillar-icon">
            <i class="bi bi-headset"></i>
          </div>
          <div class="cta-pillar-text">
            <span class="d-block pillar-line-1">Unbeatable</span>
            <span class="d-block pillar-line-2">Deals</span>
          </div>
        </div>

        <!-- Divider -->
        <div class="cta-inner-divider d-none d-md-block"></div>

        <!-- Pillar 3: 24X7 Customer Support -->
        <div class="cta-pillar-item">
          <div class="cta-pillar-icon">
            <i class="bi bi-shield-fill-check"></i>
          </div>
          <div class="cta-pillar-text">
            <span class="d-block pillar-line-1">24X7 Customer</span>
            <span class="d-block pillar-line-2">Support</span>
          </div>
        </div>

        <!-- Divider -->
        <div class="cta-inner-divider d-none d-md-block"></div>

        <!-- Pillar 4: Travel with Confidence -->
        <div class="cta-pillar-item">
          <div class="cta-pillar-icon">
            <i class="bi bi-airplane-fill airplane-tilt"></i>
          </div>
          <div class="cta-pillar-text">
            <span class="d-block pillar-line-1">Travel with</span>
            <span class="d-block pillar-line-2">Confidence</span>
          </div>
        </div>

      </div>

    </div>

  </div>
</section>
<!-- ===== END CTA / WHY CHOOSE US SECTION ===== -->
