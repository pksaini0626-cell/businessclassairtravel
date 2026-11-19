<?php
/**
 * Premier Airlines Section Component
 * 
 * Exact Match to User Design Specification:
 * - Title: "Explore Our Premier Airlines" (Playfair Display serif, luxury navy)
 * - Subtitle: "See the world through the lens of unparalleled comfort and luxury"
 * - 6 cards on large screen arranged in 2 rows (3 columns each)
 * - Fully clickable cards leading to flight destinations/deals
 * - Elegant dark gradient overlay for optimal text contrast and cinematic depth
 * - Cool interactive hover animations:
 *    • Smooth image zoom scale
 *    • Card lift with luxury layered drop shadow
 *    • Top-right frosted glass action badge (arrow) gliding in
 *    • Silky shimmer sheen sweep effect
 *    • Smooth elevation of airline name + reveal of luxury class tag
 * - Prominent "See All" button with animated arrow
 * - Staggered AOS scroll entry animations
 */

$premier_airlines = [
  [
    'id'         => 'emirates',
    'name'       => 'Emirates',
    'airline'    => 'Emirates',
    'image'      => 'assets/images/airlines/Emirates.jpg',
    'alt'        => 'Emirates Airbus A380 First and Business Class',
    'tagline'    => 'First & Business Class',
    'link'       => 'flight-destinations.php?airline=emirates',
    'delay'      => '100'
  ],
  [
    'id'         => 'qatar-airways',
    'name'       => 'Qatar Airways',
    'airline'    => 'Qatar Airways',
    'image'      => 'assets/images/airlines/qatar-airways.jpg',
    'alt'        => 'Qatar Airways A350 Qsuite Business Class',
    'tagline'    => 'World’s Best Business Class',
    'link'       => 'flight-destinations.php?airline=qatar-airways',
    'delay'      => '150'
  ],
  [
    'id'         => 'singapore-airlines',
    'name'       => 'Singapore Airlines',
    'airline'    => 'Singapore Airlines',
    'image'      => 'assets/images/airlines/singapore-airways.jpg',
    'alt'        => 'Singapore Airlines Luxury Travel',
    'tagline'    => '5-Star Inflight Luxury',
    'link'       => 'flight-destinations.php?airline=singapore-airlines',
    'delay'      => '200'
  ],
  [
    'id'         => 'lufthansa',
    'name'       => 'Lufthansa',
    'airline'    => 'Lufthansa',
    'image'      => 'assets/images/airlines/lufthansa-airways.jpg',
    'alt'        => 'Lufthansa Allegris Business Class',
    'tagline'    => 'Allegris Premium Cabin',
    'link'       => 'flight-destinations.php?airline=lufthansa',
    'delay'      => '250'
  ],
  [
    'id'         => 'british-airways',
    'name'       => 'British Airways',
    'airline'    => 'British Airways',
    'image'      => 'assets/images/airlines/british-airways.jpg',
    'alt'        => 'British Airways Boeing 787 Club World',
    'tagline'    => 'Club World Business Suite',
    'link'       => 'flight-destinations.php?airline=british-airways',
    'delay'      => '300'
  ],
  [
    'id'         => 'turkish-airlines',
    'name'       => 'Turkish Airlines',
    'airline'    => 'Turkish Airlines',
    'image'      => 'assets/images/airlines/turkish-airlines.jpg',
    'alt'        => 'Turkish Airlines Business Class',
    'tagline'    => 'Global Network Excellence',
    'link'       => 'flight-destinations.php?airline=turkish-airlines',
    'delay'      => '350'
  ]
];
?>

<!-- ===== PREMIER AIRLINES SECTION ===== -->
<section class="premier-airlines-section" id="premier-airlines" aria-label="Explore Our Premier Airlines">
  <div class="container-xl px-3 px-lg-4">

    <!-- Section Header Row: Title, Subtitle & See All Button -->
    <div class="premier-airlines-header-row d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-end mb-4 mb-lg-5 gap-3" 
         data-aos="fade-up" 
         data-aos-duration="600">
      
      <div class="premier-airlines-header-left">
        <h2 class="premier-airlines-title">Explore Our Premier Airlines</h2>
        <p class="premier-airlines-subtitle">See the world through the lens of unparalleled comfort and luxury</p>
      </div>

      <div class="premier-airlines-header-right">
        <a href="flight-destinations.php" 
           class="premier-airlines-see-all-btn d-inline-flex align-items-center gap-2" 
           title="See All Partner Airlines">
          <span>See All Airlines</span>
          <i class="bi bi-arrow-right see-all-arrow" aria-hidden="true"></i>
        </a>
      </div>

    </div>

    <!-- 6 Cards Grid: 2 rows of 3 columns on large screen -->
    <div class="row g-4 premier-airlines-grid">
      <?php foreach ($premier_airlines as $airline): ?>
        <div class="col-12 col-md-6 col-lg-4" 
             data-aos="fade-up" 
             data-aos-duration="650" 
             data-aos-delay="<?= htmlspecialchars($airline['delay']); ?>">
          
          <a href="<?= htmlspecialchars($airline['link']); ?>" 
             class="premier-airline-card" 
             data-airline="<?= htmlspecialchars($airline['id']); ?>"
             aria-label="Explore <?= htmlspecialchars($airline['name']); ?> business class flights">
            
            <!-- Media Container -->
            <div class="premier-airline-media">
              <img src="<?= htmlspecialchars($airline['image']); ?>" 
                   alt="<?= htmlspecialchars($airline['alt']); ?>" 
                   class="premier-airline-img" 
                   loading="lazy" 
                   draggable="false">
              
              <!-- Dark Cinematic Gradient Overlay -->
              <div class="premier-airline-overlay" aria-hidden="true"></div>

              <!-- Shimmer light sheen effect on hover -->
              <div class="premier-airline-shimmer" aria-hidden="true"></div>

              <!-- Top-Right Floating Interactive Arrow Badge -->
              <div class="premier-airline-arrow-badge" aria-hidden="true">
                <i class="bi bi-arrow-up-right"></i>
              </div>
            </div>

            <!-- Card Bottom Content -->
            <div class="premier-airline-content">
              <h3 class="premier-airline-name"><?= htmlspecialchars($airline['name']); ?></h3>
              <div class="premier-airline-meta">
                <span class="premier-airline-tag"><?= htmlspecialchars($airline['tagline']); ?></span>
                <span class="premier-airline-explore-link">Explore Deals &rarr;</span>
              </div>
            </div>

          </a>

        </div>
      <?php endforeach; ?>
    </div>

    <!-- Bottom Mobile / Secondary "See All" Button -->
    <div class="text-center mt-4 pt-2 d-md-none" data-aos="fade-up" data-aos-duration="500">
      <a href="flight-destinations.php" class="btn btn-outline-primary px-4 py-2 rounded-pill fw-semibold">
        <span>See All Airlines</span>
        <i class="bi bi-arrow-right ms-2" aria-hidden="true"></i>
      </a>
    </div>

  </div>
</section>
<!-- ===== END PREMIER AIRLINES SECTION ===== -->
