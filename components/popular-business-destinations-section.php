<?php
/**
 * Popular Business Class Destinations Section Component
 * 
 * Features:
 * - 100% full-width brand navy blue background (#08264C)
 * - White Playfair Display headline & white description
 * - Responsive 3-column grid on desktop, 2-column on tablet, single column on mobile
 * - Mobile view shows first 10 items with a "View More Destinations" button
 * - Seamless integration with search flight engine on card/link click
 */

$business_destinations = [
  ['city' => 'Bangkok',        'code' => 'BKK', 'airport' => 'Bangkok (BKK)'],
  ['city' => 'Tokyo',          'code' => 'HND', 'airport' => 'Tokyo (HND)'],
  ['city' => 'London',         'code' => 'LHR', 'airport' => 'London (LHR)'],
  ['city' => 'Paris',          'code' => 'CDG', 'airport' => 'Paris (CDG)'],
  ['city' => 'Dubai',          'code' => 'DXB', 'airport' => 'Dubai (DXB)'],
  ['city' => 'Singapore',      'code' => 'SIN', 'airport' => 'Singapore (SIN)'],
  ['city' => 'Cairo',          'code' => 'CAI', 'airport' => 'Cairo (CAI)'],
  ['city' => 'Cape Town',      'code' => 'CPT', 'airport' => 'Cape Town (CPT)'],
  ['city' => 'Buenos Aires',   'code' => 'EZE', 'airport' => 'Buenos Aires (EZE)'],
  ['city' => 'Mumbai',         'code' => 'BOM', 'airport' => 'Mumbai (BOM)'],
  ['city' => 'Rome',           'code' => 'FCO', 'airport' => 'Rome (FCO)'],
  ['city' => 'Sydney',         'code' => 'SYD', 'airport' => 'Sydney (SYD)'],
  ['city' => 'Milan',          'code' => 'MXP', 'airport' => 'Milan (MXP)'],
  ['city' => 'Madrid',         'code' => 'MAD', 'airport' => 'Madrid (MAD)'],
  ['city' => 'Barcelona',      'code' => 'BCN', 'airport' => 'Barcelona (BCN)'],
  ['city' => 'Amsterdam',      'code' => 'AMS', 'airport' => 'Amsterdam (AMS)'],
  ['city' => 'New Delhi',      'code' => 'DEL', 'airport' => 'New Delhi (DEL)'],
  ['city' => 'Chennai',        'code' => 'MAA', 'airport' => 'Chennai (MAA)'],
  ['city' => 'Bengaluru',      'code' => 'BLR', 'airport' => 'Bengaluru (BLR)'],
  ['city' => 'Shanghai',       'code' => 'PVG', 'airport' => 'Shanghai (PVG)'],
  ['city' => 'Beijing',        'code' => 'PEK', 'airport' => 'Beijing (PEK)'],
  ['city' => 'Auckland',       'code' => 'AKL', 'airport' => 'Auckland (AKL)'],
  ['city' => 'Manila',         'code' => 'MNL', 'airport' => 'Manila (MNL)'],
  ['city' => 'Seoul',          'code' => 'ICN', 'airport' => 'Seoul (ICN)'],
  ['city' => 'Munich',         'code' => 'MUC', 'airport' => 'Munich (MUC)'],
  ['city' => 'Frankfurt',      'code' => 'FRA', 'airport' => 'Frankfurt (FRA)'],
  ['city' => 'Hong Kong',      'code' => 'HKG', 'airport' => 'Hong Kong (HKG)'],
  ['city' => 'Lisbon',         'code' => 'LIS', 'airport' => 'Lisbon (LIS)'],
  ['city' => 'Vienna',         'code' => 'VIE', 'airport' => 'Vienna (VIE)'],
  ['city' => 'Athens',         'code' => 'ATH', 'airport' => 'Athens (ATH)'],
  ['city' => 'Istanbul',       'code' => 'IST', 'airport' => 'Istanbul (IST)'],
  ['city' => 'Zurich',         'code' => 'ZRH', 'airport' => 'Zurich (ZRH)'],
  ['city' => 'Dublin',         'code' => 'DUB', 'airport' => 'Dublin (DUB)'],
  ['city' => 'Doha',           'code' => 'DOH', 'airport' => 'Doha (DOH)'],
  ['city' => 'Abu Dhabi',      'code' => 'AUH', 'airport' => 'Abu Dhabi (AUH)'],
  ['city' => 'Hyderabad',      'code' => 'HYD', 'airport' => 'Hyderabad (HYD)'],
  ['city' => 'Melbourne',      'code' => 'MEL', 'airport' => 'Melbourne (MEL)'],
  ['city' => 'Venice',         'code' => 'VCE', 'airport' => 'Venice (VCE)'],
  ['city' => 'Sao Paulo',      'code' => 'GRU', 'airport' => 'Sao Paulo (GRU)'],
  ['city' => 'Rio de Janeiro', 'code' => 'GIG', 'airport' => 'Rio de Janeiro (GIG)'],
  ['city' => 'Edinburgh',      'code' => 'EDI', 'airport' => 'Edinburgh (EDI)'],
  ['city' => 'Tel Aviv',       'code' => 'TLV', 'airport' => 'Tel Aviv (TLV)'],
];
?>

<!-- ===== POPULAR BUSINESS CLASS DESTINATIONS SECTION ===== -->
<section class="popular-business-dest-section" id="popular-business-destinations" aria-label="Popular Business Class Destinations">
  <div class="container-xl px-3 px-lg-4">

    <!-- Section Header Row -->
    <div class="popular-business-dest-header text-center" data-aos="fade-up" data-aos-duration="600">
      <h2 class="popular-business-dest-title">Popular Business Class destinations</h2>
      <p class="popular-business-dest-desc">
        Contracted consolidator fares 50-60% below airline.com, with every US gateway and carrier ranked for each city
      </p>
    </div>

    <!-- Destinations Grid: 3 columns (lg), 2 columns (md), 1 column (mobile) -->
    <div class="row g-2 g-md-3 popular-business-dest-grid" id="popularBusinessDestGrid" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">
      <?php foreach ($business_destinations as $index => $dest): ?>
        <div class="col-12 col-md-6 col-lg-4 popular-business-dest-col <?= ($index >= 10) ? 'popular-dest-more-item' : ''; ?>">
          <a href="destination-detail.php?city=<?= urlencode($dest['city']); ?>" 
             class="popular-business-dest-link" 
             data-city="<?= htmlspecialchars($dest['city']); ?>" 
             data-code="<?= htmlspecialchars($dest['code']); ?>" 
             data-airport="<?= htmlspecialchars($dest['airport']); ?>" 
             title="Business Class to <?= htmlspecialchars($dest['city']); ?>">
            <span class="dest-link-text">Business Class to <?= htmlspecialchars($dest['city']); ?></span>
            <i class="bi bi-arrow-right dest-link-icon" aria-hidden="true"></i>
          </a>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Mobile-Only "View More Destinations" Button (Visible only on mobile screens < 768px) -->
    <div class="popular-business-dest-toggle-wrap text-center mt-3 pt-2 d-md-none" data-aos="fade-up">
      <button type="button" class="btn popular-business-dest-btn" id="popularDestViewMoreBtn" aria-expanded="false" aria-controls="popularBusinessDestGrid">
        <span class="btn-text">View More Destinations</span>
        <i class="bi bi-chevron-down ms-1" aria-hidden="true"></i>
      </button>
    </div>

  </div>
</section>
<!-- ===== END POPULAR BUSINESS CLASS DESTINATIONS SECTION ===== -->
