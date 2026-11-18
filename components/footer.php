<?php
/**
 * Footer Component
 * Matches Figma design:
 * - Dark Navy Background (#08264C)
 * - White Logo (assets/images/logo/logo-white.png)
 * - Brand Tagline
 * - Quick Links & Support Columns
 * - Newsletter Subscription Box with Dark Red Button
 * - Direct Phone Numbers with Country Flags
 */
?>
<!-- ===== FOOTER ===== -->
<footer class="site-footer bg-navy text-white" id="contact">
  <div class="container-xl px-3 px-lg-4">

    <!-- Main Footer Content -->
    <div class="footer-main-row row g-4 py-5">

      <!-- 1. Brand Column -->
      <div class="col-lg-3 col-md-6">
        <a href="index.php" class="d-inline-block mb-3">
          <img src="assets/images/logo/logo-white.png" alt="Business Class Air Travel" class="footer-logo">
        </a>
        <p class="footer-tagline">
          Fly further. Travel better. Discover more with Business Class Air Travel.
        </p>
      </div>

      <!-- 2. Quick Links -->
      <div class="col-lg-2 col-md-3 col-6">
        <h5 class="footer-heading">Quick Links</h5>
        <ul class="list-unstyled footer-nav-list">
          <li><a href="#">Flights</a></li>
          <li><a href="#">US Domestic</a></li>
          <li><a href="#">Premium Economy</a></li>
          <li><a href="#">Business Class</a></li>
          <li><a href="#">First Class</a></li>
        </ul>
      </div>

      <!-- 3. Support -->
      <div class="col-lg-2 col-md-3 col-6">
        <h5 class="footer-heading">Support</h5>
        <ul class="list-unstyled footer-nav-list">
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">FAQs</a></li>
          <li><a href="#">Travel Tips</a></li>
          <li><a href="#">Privacy Policy</a></li>
        </ul>
      </div>

      <!-- 4. Newsletter & Direct Contact -->
      <div class="col-lg-5 col-md-12 footer-newsletter-col ps-lg-4 ps-xl-5">
        <div class="footer-divider-wrapper ps-lg-4">
          <h5 class="footer-heading mb-2">Subscribe to Our Newsletter</h5>
          <p class="footer-subtext mb-3">Get the latest travel deals and updates.</p>

          <!-- Newsletter Form -->
          <form class="newsletter-form mb-4" onsubmit="event.preventDefault();">
            <div class="input-group">
              <input type="email" class="form-control newsletter-input" placeholder="Your Email Address" aria-label="Your Email Address" required>
              <button class="btn btn-newsletter" type="submit">Subscribe</button>
            </div>
          </form>

          <!-- Phone Number -->
          <div class="footer-phones d-flex flex-wrap align-items-center gap-3">
            <a href="tel:+18337431225" class="footer-phone-link d-inline-flex align-items-center gap-2">
              <i class="bi bi-telephone-fill"></i>
              <span>1-833-743-1225</span>
            </a>
          </div>
        </div>
      </div>

    </div>

    <!-- Bottom Copyright -->
    <div class="footer-bottom py-3 border-top border-white border-opacity-10 text-center text-md-start">
      <div class="row align-items-center">
        <div class="col-md-6">
          <p class="mb-0 small footer-copyright">
            &copy; <?= date('Y'); ?> Business Class Air Travel. All Rights Reserved.
          </p>
        </div>
        <div class="col-md-6 text-md-end mt-2 mt-md-0">
          <ul class="list-inline mb-0 small footer-legal-links">
            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            <li class="list-inline-item mx-2 text-white-50">·</li>
            <li class="list-inline-item"><a href="#">Terms of Service</a></li>
            <li class="list-inline-item mx-2 text-white-50">·</li>
            <li class="list-inline-item"><a href="#">Sitemap</a></li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</footer>
<!-- ===== END FOOTER ===== -->
