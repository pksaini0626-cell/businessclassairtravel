<?php
/**
 * Newsletter Subscribe CTA Section Component
 * 
 * Features:
 * - 100% full-width luxury brand red gradient background (#A20D24)
 * - White Playfair Display serif heading and elegant descriptive subtitle
 * - Frosted glassmorphic input group with email text input
 * - High-conversion white submit button with arrow micro-interaction
 * - Animated ambient glowing backdrop and floating flight trail icon
 * - Instant client-side validation and celebratory success state
 * - Trust guarantee badges (No spam, Instant unsubscribe, Exclusive discounts)
 */
?>

<!-- ===== NEWSLETTER SUBSCRIBE CTA SECTION ===== -->
<section class="newsletter-cta-section position-relative overflow-hidden" id="newsletter-cta" aria-label="Subscribe to VIP Flight Deals">

  <!-- Ambient Luxury Floating Orbs (Background Animation) -->
  <div class="newsletter-glow-orb newsletter-orb-1" aria-hidden="true"></div>
  <div class="newsletter-glow-orb newsletter-orb-2" aria-hidden="true"></div>
  <div class="newsletter-flight-trail d-none d-lg-block" aria-hidden="true">
    <i class="bi bi-airplane-fill"></i>
  </div>

  <div class="container-xl px-3 px-lg-4 position-relative" style="z-index: 2;">
    <div class="row justify-content-center text-center">
      <div class="col-lg-9 col-xl-8">

        <!-- VIP Badge -->
        <div class="newsletter-badge-wrapper mb-3" data-aos="fade-down" data-aos-duration="600">
          <span class="newsletter-pill-badge d-inline-flex align-items-center gap-2">
            <i class="bi bi-stars"></i>
            <span>VIP Insider Access</span>
          </span>
        </div>

        <!-- White Heading -->
        <h2 class="newsletter-heading mb-3 text-white" data-aos="fade-up" data-aos-duration="650">
          Subscribe &amp; Unlock Secret Flight Deals
        </h2>

        <!-- White Description -->
        <p class="newsletter-subheading mb-4 mx-auto text-white" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">
          Get unpublished consolidator fares up to 70% off, secret private flash sales, and complimentary flight concierge alerts directly in your inbox.
        </p>

        <!-- Newsletter Form Wrapper -->
        <div class="newsletter-form-container mx-auto" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="150">
          <form class="newsletter-cta-form" id="newsletterCtaForm" novalidate>
            <div class="newsletter-input-group d-flex flex-column flex-sm-row align-items-stretch align-items-sm-center">
              
              <div class="newsletter-input-inner d-flex align-items-center flex-grow-1">
                <i class="bi bi-envelope-fill newsletter-icon" aria-hidden="true"></i>
                <input type="email" 
                       class="newsletter-email-field form-control" 
                       id="newsletterCtaEmail" 
                       placeholder="Enter your personal or business email..." 
                       required 
                       autocomplete="email" 
                       aria-label="Email address for flight newsletter">
              </div>

              <button type="submit" class="btn newsletter-submit-btn flex-shrink-0" id="newsletterCtaSubmitBtn">
                <span class="btn-text">Get Secret Deals</span>
                <i class="bi bi-arrow-right-short btn-icon" aria-hidden="true"></i>
              </button>

            </div>

            <!-- Animated Feedback / Success Message -->
            <div class="newsletter-feedback-alert mt-3" id="newsletterCtaFeedback" role="alert" aria-live="polite"></div>
          </form>
        </div>

        <!-- Trust Badges / Perks Row -->
        <div class="newsletter-perks-row d-flex flex-wrap justify-content-center align-items-center gap-2 gap-sm-4 mt-4" data-aos="fade-up" data-aos-delay="250">
          <div class="newsletter-perk d-inline-flex align-items-center gap-2 text-white">
            <i class="bi bi-shield-check text-white"></i>
            <span>No spam, ever</span>
          </div>
          <span class="newsletter-perk-sep d-none d-sm-inline" aria-hidden="true">•</span>
          <div class="newsletter-perk d-inline-flex align-items-center gap-2 text-white">
            <i class="bi bi-bell-slash text-white"></i>
            <span>Unsubscribe anytime</span>
          </div>
          <span class="newsletter-perk-sep d-none d-sm-inline" aria-hidden="true">•</span>
          <div class="newsletter-perk d-inline-flex align-items-center gap-2 text-white">
            <i class="bi bi-tag-fill text-white"></i>
            <span>50-70% Private discounts</span>
          </div>
        </div>

      </div>
    </div>
  </div>

</section>
<!-- ===== END NEWSLETTER SUBSCRIBE CTA SECTION ===== -->
