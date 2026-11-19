<?php
/**
 * Premier Destinations Carousel Section Component
 * 
 * Features:
 * - 100% full-width deep navy background (#08264C) matching screenshot design
 * - Playfair serif headline & luxury subtitle
 * - Auto-running infinite loop carousel powered by Swiper
 * - Pauses smoothly on mouse hover
 * - Zero arrows or dots (clean luxury presentation)
 * - Clickable destination cards leading to flight-destinations.php
 * - Elegant dark overlay gradient ensuring optimal text readability
 * - Smooth hover micro-interactions (card lift, image zoom scale, soft border glow)
 */

$premier_destinations = [
  [
    'name'       => 'Oceania',
    'price'      => 'From $2,782',
    'image'      => 'assets/images/destinations/Oceania.jpg',
    'filter'     => 'australia',
    'alt'        => 'Oceania luxury business class flights',
  ],
  [
    'name'       => 'Latin America',
    'price'      => 'From $4,829',
    'image'      => 'assets/images/destinations/Latin America.jpg',
    'filter'     => 'americas',
    'alt'        => 'Latin America business class flights',
  ],
  [
    'name'       => 'Middle East',
    'price'      => 'From $2,018',
    'image'      => 'assets/images/destinations/Middle East.jpg',
    'filter'     => 'middle-east',
    'alt'        => 'Middle East luxury business class flights',
  ],
  [
    'name'       => 'Indian Subcontinent',
    'price'      => 'From $3,028',
    'image'      => 'assets/images/destinations/india subcontinent.jpg',
    'filter'     => 'asia',
    'alt'        => 'Indian Subcontinent business class flights',
  ],
  [
    'name'       => 'Europe',
    'price'      => 'From $2,450',
    'image'      => 'assets/images/destinations/Europe.jpg',
    'filter'     => 'europe',
    'alt'        => 'Europe business class flights',
  ],
  [
    'name'       => 'East Asia',
    'price'      => 'From $2,890',
    'image'      => 'assets/images/destinations/East Asia.jpg',
    'filter'     => 'asia',
    'alt'        => 'East Asia business class flights',
  ],
  [
    'name'       => 'America',
    'price'      => 'From $1,980',
    'image'      => 'assets/images/destinations/East AsiaAmerica.jpg',
    'filter'     => 'americas',
    'alt'        => 'America business class flights',
  ],
  [
    'name'       => 'United Kingdom',
    'price'      => 'From $2,320',
    'image'      => 'assets/images/destinations/United kingdom.jpg',
    'filter'     => 'europe',
    'alt'        => 'United Kingdom business class flights',
  ],
];

// Duplicate items twice for a seamless infinite loop in Swiper
$premier_destinations_loop = array_merge($premier_destinations, $premier_destinations);
?>

<!-- ===== PREMIER DESTINATIONS SECTION ===== -->
<section class="premier-destinations-section" id="premier-destinations" aria-label="Premier Flight Destinations">
  <div class="container-xl px-3 px-lg-4">

    <!-- Section Header (Title & Subtitle from screenshot) -->
    <div class="premier-dest-header" data-aos="fade-up" data-aos-duration="600">
      <h2 class="premier-dest-title">Explore Our Premier Destinations</h2>
      <p class="premier-dest-subtitle">See the world through the lens of unparalleled comfort and luxury</p>
    </div>

    <!-- Carousel Wrapper (Auto running, hover pause, no arrows or dots) -->
    <div class="premier-destinations-carousel-wrapper" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">
      <div class="swiper premier-destinations-swiper">
        <div class="swiper-wrapper">
          <?php foreach ($premier_destinations_loop as $index => $item): ?>
            <div class="swiper-slide">
              <a href="flight-destinations.php?filter=<?= urlencode($item['filter']); ?>" 
                 class="premier-dest-card" 
                 aria-label="Explore <?= htmlspecialchars($item['name']); ?> business class flights <?= htmlspecialchars($item['price']); ?>">
                
                <!-- Card Image & Dark Overlay for text legibility -->
                <div class="premier-dest-media">
                  <img src="<?= htmlspecialchars($item['image']); ?>" 
                       alt="<?= htmlspecialchars($item['alt']); ?>" 
                       class="premier-dest-img" 
                       loading="lazy" 
                       draggable="false">
                  <div class="premier-dest-overlay"></div>
                </div>

                <!-- Text overlay on top of card bottom -->
                <div class="premier-dest-content">
                  <h3 class="premier-dest-name"><?= htmlspecialchars($item['name']); ?></h3>
                  <p class="premier-dest-price"><?= htmlspecialchars($item['price']); ?></p>
                </div>

              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

  </div>
</section>
<!-- ===== END PREMIER DESTINATIONS SECTION ===== -->
