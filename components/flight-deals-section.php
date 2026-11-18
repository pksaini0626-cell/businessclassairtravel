<?php
/**
 * Flight Destinations / Deals Section Component
 * "Fly Business Class for Less"
 * 
 * Features:
 * - Playfair serif headline & description matching the design
 * - "View All Destinations →" link leading to flight-destinations.php
 * - 8 Luxury Flight Deal Cards (4x2 on desktop, responsive on mobile)
 * - Save % badge, published struck-through fare, indicative fare
 * - Staggered scroll animations & smooth card hover micro-interactions
 */

$flight_deals = [
  [
    'city'           => 'London',
    'route'          => 'New York → London',
    'save_percent'   => 'Save 56%',
    'published_fare' => '$7,480',
    'indicative_fare'=> '$3,290*',
    'image'          => 'assets/images/imgs/london.png',
    'code_from'      => 'JFK',
    'code_to'        => 'LHR',
    'destination'    => 'London (LHR)'
  ],
  [
    'city'           => 'Paris',
    'route'          => 'New York → Paris',
    'save_percent'   => 'Save 58%',
    'published_fare' => '$7,650',
    'indicative_fare'=> '$3,190*',
    'image'          => 'assets/images/imgs/paris.png',
    'code_from'      => 'JFK',
    'code_to'        => 'CDG',
    'destination'    => 'Paris (CDG)'
  ],
  [
    'city'           => 'Dubai',
    'route'          => 'New York → Dubai',
    'save_percent'   => 'Save 57%',
    'published_fare' => '$8,450',
    'indicative_fare'=> '$3,650*',
    'image'          => 'assets/images/imgs/dubai.png',
    'code_from'      => 'JFK',
    'code_to'        => 'DXB',
    'destination'    => 'Dubai (DXB)'
  ],
  [
    'city'           => 'Tokyo',
    'route'          => 'Los Angeles → Tokyo',
    'save_percent'   => 'Save 55%',
    'published_fare' => '$8,900',
    'indicative_fare'=> '$3,890*',
    'image'          => 'assets/images/imgs/tokyo.png',
    'code_from'      => 'LAX',
    'code_to'        => 'HND',
    'destination'    => 'Tokyo (HND)'
  ],
  [
    'city'           => 'Sydney',
    'route'          => 'San Francisco → Sydney',
    'save_percent'   => 'Save 56%',
    'published_fare' => '$9,600',
    'indicative_fare'=> '$4,250*',
    'image'          => 'assets/images/imgs/sydney.png',
    'code_from'      => 'SFO',
    'code_to'        => 'SYD',
    'destination'    => 'Sydney (SYD)'
  ],
  [
    'city'           => 'London',
    'route'          => 'Los Angeles → London',
    'save_percent'   => 'Save 56%',
    'published_fare' => '$7,480',
    'indicative_fare'=> '$3,290*',
    'image'          => 'assets/images/imgs/london.png',
    'code_from'      => 'LAX',
    'code_to'        => 'LHR',
    'destination'    => 'London (LHR)'
  ],
  [
    'city'           => 'Paris',
    'route'          => 'Chicago → Paris',
    'save_percent'   => 'Save 54%',
    'published_fare' => '$7,350',
    'indicative_fare'=> '$3,350*',
    'image'          => 'assets/images/imgs/paris.png',
    'code_from'      => 'ORD',
    'code_to'        => 'CDG',
    'destination'    => 'Paris (CDG)'
  ],
  [
    'city'           => 'Dubai',
    'route'          => 'Miami → Dubai',
    'save_percent'   => 'Save 58%',
    'published_fare' => '$8,600',
    'indicative_fare'=> '$3,590*',
    'image'          => 'assets/images/imgs/dubai.png',
    'code_from'      => 'MIA',
    'code_to'        => 'DXB',
    'destination'    => 'Dubai (DXB)'
  ],
];
?>

<!-- ===== FLIGHT DESTINATIONS SECTION ===== -->
<section class="flight-deals-section py-5" id="flight-deals">
  <div class="container-xl px-3 px-lg-4">

    <!-- Header Block -->
    <div class="flight-deals-header mb-4 pb-2">
      <div class="row align-items-end g-3">
        
        <div class="col-lg-9 col-md-8">
          <h2 class="flight-deals-title mb-2">Fly Business Class for Less</h2>
          <p class="flight-deals-description mb-0">
            Discover how our exclusive negotiated fares can make premium air travel more affordable.<br class="d-none d-md-inline">
            Compare typical route savings against published airline prices, with personalised quotes provided in writing for your travel dates.
          </p>
        </div>

        <div class="col-lg-3 col-md-4 text-md-end">
          <a href="flight-destinations.php" class="flight-deals-view-all d-inline-flex align-items-center gap-2">
            <span>View All Destinations</span>
            <i class="bi bi-arrow-right view-all-arrow"></i>
          </a>
        </div>

      </div>
    </div>

    <!-- Deals Cards Grid (4 columns on desktop, 2 on tablet, 1 on mobile) -->
    <div class="row g-3 g-lg-4">
      <?php foreach ($flight_deals as $index => $deal): ?>
        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 scroll-reveal-col" 
             style="--reveal-delay: <?= ($index % 4) * 90; ?>ms;">
          
          <a href="#hero" 
             class="flight-deal-card d-flex flex-column h-100" 
             data-city="<?= htmlspecialchars($deal['city']); ?>" 
             data-destination="<?= htmlspecialchars($deal['destination']); ?>"
             aria-label="View flight deal to <?= htmlspecialchars($deal['city']); ?>">
            
            <!-- Top Image & Save Badge -->
            <div class="flight-deal-media position-relative">
              <span class="flight-deal-badge"><?= htmlspecialchars($deal['save_percent']); ?></span>
              <img src="<?= htmlspecialchars($deal['image']); ?>" 
                   alt="<?= htmlspecialchars($deal['city']); ?>" 
                   class="flight-deal-img" 
                   loading="lazy">
              <div class="flight-deal-media-overlay"></div>
              
              <!-- Quick Action Hover Pill -->
              <span class="flight-deal-hover-action">
                <span>Book Deal</span>
                <i class="bi bi-arrow-up-right"></i>
              </span>
            </div>

            <!-- Card Body Content -->
            <div class="flight-deal-body d-flex flex-column flex-grow-1">
              
              <div class="flight-deal-titles mb-3">
                <h3 class="flight-deal-city mb-1"><?= htmlspecialchars($deal['city']); ?></h3>
                <span class="flight-deal-route d-block"><?= htmlspecialchars($deal['route']); ?></span>
              </div>

              <!-- Pricing Row -->
              <div class="flight-deal-pricing d-flex justify-content-between align-items-end mt-auto pt-2">
                <div class="pricing-col pricing-published">
                  <span class="price-type-label">Published fare</span>
                  <span class="price-strike-val"><?= htmlspecialchars($deal['published_fare']); ?></span>
                </div>

                <div class="pricing-col pricing-indicative text-end">
                  <span class="price-type-label">Indicative fare</span>
                  <span class="price-actual-val"><?= htmlspecialchars($deal['indicative_fare']); ?></span>
                </div>
              </div>

              <!-- Card Bottom Disclaimer -->
              <div class="flight-deal-footer mt-2 pt-2">
                <p class="flight-deal-disclaimer mb-0">*Indicative fare. Final fare depends on dates and availability.</p>
              </div>

            </div>

          </a>

        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>
<!-- ===== END FLIGHT DESTINATIONS SECTION ===== -->
