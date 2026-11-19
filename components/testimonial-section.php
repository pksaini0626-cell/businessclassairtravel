<?php
/**
 * Testimonial Section Component
 * 
 * Features:
 * - Full-width dark navy (#08264C) luxury background
 * - Left-edge blended airplane window image (assets/images/icons/blend-cta.png)
 * - Playfair serif heading & subtitle
 * - Vertical Swiper carousel for testimonial cards with customer avatar, quote, author & 5-star rating
 * - Vertical Up/Down circular navigation buttons at the right end
 * - 100% responsive: hidden blend graphic on mobile, stacked layout with optimal touch accessibility
 */
?>
<!-- ===== TESTIMONIALS SECTION ===== -->
<section class="testimonial-section position-relative" id="testimonials" aria-label="Customer Testimonials">
  
  <!-- Left Side Blended Graphic (Hidden on mobile/tablet) -->
  <div class="testimonial-blend-wrapper d-none d-lg-block" aria-hidden="true">
    <img src="assets/images/icons/blend-cta.png" 
         alt="" 
         class="testimonial-blend-img" 
         loading="eager" 
         draggable="false">
    <div class="testimonial-blend-overlay"></div>
  </div>

  <div class="container-fluid px-3 px-sm-4 px-md-5 position-relative testimonial-content-container">
    <div class="row align-items-center g-3 g-lg-4 justify-content-between">
      
      <!-- Left Heading Block -->
      <div class="col-12 col-lg-5 col-xl-5 ps-lg-5 text-center text-lg-start">
        <div class="testimonial-header-block">
          <h2 class="testimonial-heading mb-1 mb-lg-2">What Our Customers Say</h2>
          <p class="testimonial-subheading mb-0">Trusted by millions of travelers worldwide.</p>
        </div>
      </div>

      <!-- Right Testimonials Carousel & Vertical Navigation Controls -->
      <div class="col-12 col-lg-7 col-xl-7 pe-lg-4">
        <div class="testimonial-carousel-wrapper d-flex align-items-center justify-content-center justify-content-lg-end gap-2 gap-sm-3">
          
          <!-- Swiper Vertical Carousel -->
          <div class="swiper testimonial-vertical-swiper">
            <div class="swiper-wrapper">
              
              <!-- Slide 1: Sarah M. -->
              <div class="swiper-slide">
                <div class="testimonial-card">
                  <div class="testimonial-avatar-wrapper">
                    <img src="assets/images/testimonials/testimonial-1.jpg" 
                         alt="Sarah M." 
                         class="testimonial-avatar" 
                         loading="lazy">
                  </div>
                  <div class="testimonial-body">
                    <p class="testimonial-quote mb-1">
                      &ldquo;Amazing service! Found the best deals for my Europe trip. Highly recommended!&rdquo;
                    </p>
                    <div class="testimonial-meta d-flex align-items-center justify-content-between flex-wrap gap-2">
                      <span class="testimonial-author">Sarah M. &ndash; USA</span>
                      <div class="testimonial-rating" aria-label="5 out of 5 stars">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Slide 2: David K. -->
              <div class="swiper-slide">
                <div class="testimonial-card">
                  <div class="testimonial-avatar-wrapper">
                    <img src="assets/images/testimonials/testimonial-2.jpg" 
                         alt="David K." 
                         class="testimonial-avatar" 
                         loading="lazy">
                  </div>
                  <div class="testimonial-body">
                    <p class="testimonial-quote mb-1">
                      &ldquo;Saved over $1,800 on our business class flights to London &amp; Paris. Seamless booking!&rdquo;
                    </p>
                    <div class="testimonial-meta d-flex align-items-center justify-content-between flex-wrap gap-2">
                      <span class="testimonial-author">David K. &ndash; UK</span>
                      <div class="testimonial-rating" aria-label="5 out of 5 stars">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Slide 3: Elena R. -->
              <div class="swiper-slide">
                <div class="testimonial-card">
                  <div class="testimonial-avatar-wrapper">
                    <img src="assets/images/testimonials/testimonial-3.jpg" 
                         alt="Elena R." 
                         class="testimonial-avatar" 
                         loading="lazy">
                  </div>
                  <div class="testimonial-body">
                    <p class="testimonial-quote mb-1">
                      &ldquo;The 24/7 concierge was incredibly responsive. Unmatched lie-flat seat prices!&rdquo;
                    </p>
                    <div class="testimonial-meta d-flex align-items-center justify-content-between flex-wrap gap-2">
                      <span class="testimonial-author">Elena R. &ndash; Canada</span>
                      <div class="testimonial-rating" aria-label="5 out of 5 stars">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Slide 4: Marcus Chen -->
              <div class="swiper-slide">
                <div class="testimonial-card">
                  <div class="testimonial-avatar-wrapper">
                    <img src="assets/images/testimonials/testimonial-4.jpg" 
                         alt="Marcus Chen" 
                         class="testimonial-avatar" 
                         loading="lazy">
                  </div>
                  <div class="testimonial-body">
                    <p class="testimonial-quote mb-1">
                      &ldquo;Exceptional lie-flat booking experience to Singapore. Handled all seat selections perfectly.&rdquo;
                    </p>
                    <div class="testimonial-meta d-flex align-items-center justify-content-between flex-wrap gap-2">
                      <span class="testimonial-author">Marcus C. &ndash; Australia</span>
                      <div class="testimonial-rating" aria-label="5 out of 5 stars">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- Vertical Navigation Buttons (Up / Down) -->
          <div class="testimonial-nav-controls d-flex flex-column gap-2" aria-label="Carousel Navigation">
            <button type="button" 
                    class="testimonial-nav-btn testimonial-nav-prev" 
                    aria-label="Previous review" 
                    title="Previous review">
              <i class="bi bi-arrow-up"></i>
            </button>
            <button type="button" 
                    class="testimonial-nav-btn testimonial-nav-next" 
                    aria-label="Next review" 
                    title="Next review">
              <i class="bi bi-arrow-down"></i>
            </button>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>
