<?php
/**
 * Popular Destinations Section Component
 * 
 * Features:
 * - Playfair serif headline with navy branding and subtitle
 * - "View All Destinations →" brand dark-red link
 * - Infinite auto-running loop carousel powered by Swiper
 * - Pauses immediately on mouseover / hover
 * - Cool interactive hover animations (card lift, image zoom, subtle glass badge, gradient glow)
 * - Clickable cards that populate search destination and scroll to booking search
 */

$destinations = [
  [
    'name'        => 'New York',
    'code'        => 'JFK',
    'airport'     => 'New York (JFK)',
    'country'     => 'United States',
    'image'       => 'assets/images/imgs/new-york.png',
    'badge'       => 'Popular'
  ],
  [
    'name'        => 'London',
    'code'        => 'LHR',
    'airport'     => 'London (LHR)',
    'country'     => 'United Kingdom',
    'image'       => 'assets/images/imgs/london.png',
    'badge'       => 'Trending'
  ],
  [
    'name'        => 'Paris',
    'code'        => 'CDG',
    'airport'     => 'Paris (CDG)',
    'country'     => 'France',
    'image'       => 'assets/images/imgs/paris.png',
    'badge'       => 'Romantic'
  ],
  [
    'name'        => 'Dubai',
    'code'        => 'DXB',
    'airport'     => 'Dubai (DXB)',
    'country'     => 'UAE',
    'image'       => 'assets/images/imgs/dubai.png',
    'badge'       => 'Luxury'
  ],
  [
    'name'        => 'Tokyo',
    'code'        => 'HND',
    'airport'     => 'Tokyo (HND)',
    'country'     => 'Japan',
    'image'       => 'assets/images/imgs/tokyo.png',
    'badge'       => 'Heritage'
  ],
  [
    'name'        => 'Sydney',
    'code'        => 'SYD',
    'airport'     => 'Sydney (SYD)',
    'country'     => 'Australia',
    'image'       => 'assets/images/imgs/sydney.png',
    'badge'       => 'Iconic'
  ],
];

// Duplicate items 3 times for a flawless, continuous infinite loop in Swiper
$destinations_loop = array_merge($destinations, $destinations, $destinations);
?>

<!-- ===== POPULAR DESTINATIONS SECTION ===== -->
<section class="popular-destinations-section" id="popular-destinations">
  <div class="container-xl px-3 px-lg-4">

    <!-- Section Header Row -->
    <div class="destinations-header-row d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-end mb-4 gap-2" data-aos="fade-up" data-aos-duration="600">
      <div class="destinations-header-left">
        <h2 class="destinations-title">Popular Destinations</h2>
        <p class="destinations-subtitle mb-0">Explore the world&#39;s most loved destinations.</p>
      </div>

      <div class="destinations-header-right">
        <a href="#hero" class="destinations-view-all d-inline-flex align-items-center gap-2" title="View all flight destinations">
          <span>View All Destinations</span>
          <i class="bi bi-arrow-right view-all-arrow"></i>
        </a>
      </div>
    </div>

    <!-- Carousel Wrapper with Hover Pause -->
    <div class="destinations-carousel-wrapper position-relative" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">
      
      <!-- Swiper Slider Container -->
      <div class="swiper destinations-swiper">
        <div class="swiper-wrapper">
          <?php foreach ($destinations_loop as $index => $item): ?>
            <div class="swiper-slide">
              <a href="#hero" 
                 class="destination-card" 
                 data-city="<?= htmlspecialchars($item['name']); ?>" 
                 data-code="<?= htmlspecialchars($item['code']); ?>" 
                 data-airport="<?= htmlspecialchars($item['airport']); ?>"
                 aria-label="Flights to <?= htmlspecialchars($item['name']); ?>">
                
                <!-- Card Image & Overlay -->
                <div class="destination-card-media">
                  <img src="<?= htmlspecialchars($item['image']); ?>" 
                       alt="<?= htmlspecialchars($item['name']); ?>" 
                       class="destination-img" 
                       loading="lazy" 
                       draggable="false">
                  <div class="destination-gradient-overlay"></div>
                  
                  <!-- Top Right Glass Arrow Hover Indicator -->
                  <div class="dest-hover-badge" aria-hidden="true">
                    <i class="bi bi-arrow-up-right"></i>
                  </div>
                </div>

                <!-- Bottom Title Content -->
                <div class="destination-card-content">
                  <h3 class="destination-name"><?= htmlspecialchars($item['name']); ?></h3>
                </div>

              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

    </div>

  </div>
</section>
<!-- ===== END POPULAR DESTINATIONS SECTION ===== -->
