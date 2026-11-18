<?php
/**
 * Flight Destinations Listing Page — Business Class Air Travel
 */

$page_title       = 'All Flight Destinations | Business Class Air Travel';
$meta_description = 'Browse all luxury business class flight destinations worldwide. Save up to 70% with unpublished airline consolidator rates. 24/7 concierge flight support.';

$destinations_list = [
  [
    'city'           => 'London',
    'country'        => 'United Kingdom',
    'region'         => 'europe',
    'route'          => 'New York (JFK) → London (LHR)',
    'save_percent'   => 'Save 56%',
    'published_fare' => '$7,480',
    'indicative_fare'=> '$3,290*',
    'image'          => 'assets/images/imgs/london.png',
    'code_to'        => 'LHR'
  ],
  [
    'city'           => 'Paris',
    'country'        => 'France',
    'region'         => 'europe',
    'route'          => 'New York (JFK) → Paris (CDG)',
    'save_percent'   => 'Save 58%',
    'published_fare' => '$7,650',
    'indicative_fare'=> '$3,190*',
    'image'          => 'assets/images/imgs/paris.png',
    'code_to'        => 'CDG'
  ],
  [
    'city'           => 'Dubai',
    'country'        => 'United Arab Emirates',
    'region'         => 'middle-east',
    'route'          => 'New York (JFK) → Dubai (DXB)',
    'save_percent'   => 'Save 57%',
    'published_fare' => '$8,450',
    'indicative_fare'=> '$3,650*',
    'image'          => 'assets/images/imgs/dubai.png',
    'code_to'        => 'DXB'
  ],
  [
    'city'           => 'Tokyo',
    'country'        => 'Japan',
    'region'         => 'asia',
    'route'          => 'Los Angeles (LAX) → Tokyo (HND)',
    'save_percent'   => 'Save 55%',
    'published_fare' => '$8,900',
    'indicative_fare'=> '$3,890*',
    'image'          => 'assets/images/imgs/tokyo.png',
    'code_to'        => 'HND'
  ],
  [
    'city'           => 'Sydney',
    'country'        => 'Australia',
    'region'         => 'australia',
    'route'          => 'San Francisco (SFO) → Sydney (SYD)',
    'save_percent'   => 'Save 56%',
    'published_fare' => '$9,600',
    'indicative_fare'=> '$4,250*',
    'image'          => 'assets/images/imgs/sydney.png',
    'code_to'        => 'SYD'
  ],
  [
    'city'           => 'New York',
    'country'        => 'United States',
    'region'         => 'americas',
    'route'          => 'London (LHR) → New York (JFK)',
    'save_percent'   => 'Save 59%',
    'published_fare' => '$6,950',
    'indicative_fare'=> '$2,850*',
    'image'          => 'assets/images/imgs/new-york.png',
    'code_to'        => 'JFK'
  ],
  [
    'city'           => 'Rome',
    'country'        => 'Italy',
    'region'         => 'europe',
    'route'          => 'New York (JFK) → Rome (FCO)',
    'save_percent'   => 'Save 57%',
    'published_fare' => '$7,150',
    'indicative_fare'=> '$3,080*',
    'image'          => 'assets/images/imgs/paris.png',
    'code_to'        => 'FCO'
  ],
  [
    'city'           => 'Singapore',
    'country'        => 'Singapore',
    'region'         => 'asia',
    'route'          => 'San Francisco (SFO) → Singapore (SIN)',
    'save_percent'   => 'Save 54%',
    'published_fare' => '$8,850',
    'indicative_fare'=> '$4,050*',
    'image'          => 'assets/images/imgs/tokyo.png',
    'code_to'        => 'SIN'
  ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= htmlspecialchars($page_title); ?></title>
  <meta name="description" content="<?= htmlspecialchars($meta_description); ?>">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="assets/images/logo/logo.png">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,600;1,700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Material Icons & Bootstrap Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Round" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Bootstrap 5.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- AOS CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" href="assets/css/theme.css?v=<?= time(); ?>">
</head>
<body class="d-flex flex-column min-vh-100">

  <?php include 'components/header.php'; ?>

  <main class="flex-grow-1" id="main-content">
    
    <!-- Hero Banner for Listing Page -->
    <div class="destinations-hero-banner py-5 bg-navy text-white position-relative">
      <div class="container-xl px-3 px-lg-4 position-relative z-2">
        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb" class="mb-3">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="index.php" class="text-white-50 text-decoration-none">Home</a></li>
            <li class="breadcrumb-item active text-white" aria-current="page">Flight Destinations</li>
          </ol>
        </nav>

        <h1 class="display-5 fw-bold mb-3 font-serif" data-aos="fade-up">Explore Flight Destinations</h1>
        <p class="lead text-white-50 max-w-700 mb-0" data-aos="fade-up" data-aos-delay="100">
          Compare private consolidator fares and published rates across the world&#39;s premier business class routes. Lock in up to 70% in savings with personalised concierge ticketing.
        </p>
      </div>
    </div>

    <!-- Listing & Filter Section -->
    <section class="py-5 bg-light-subtle">
      <div class="container-xl px-3 px-lg-4">
        
        <!-- Filter Tabs -->
        <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4 pb-2">
          <div class="d-flex flex-wrap gap-2 filter-tabs">
            <button class="btn btn-sm btn-outline-secondary active filter-btn" data-filter="all">All Destinations</button>
            <button class="btn btn-sm btn-outline-secondary filter-btn" data-filter="europe">Europe</button>
            <button class="btn btn-sm btn-outline-secondary filter-btn" data-filter="asia">Asia</button>
            <button class="btn btn-sm btn-outline-secondary filter-btn" data-filter="americas">Americas</button>
            <button class="btn btn-sm btn-outline-secondary filter-btn" data-filter="middle-east">Middle East</button>
            <button class="btn btn-sm btn-outline-secondary filter-btn" data-filter="australia">Australia</button>
          </div>

          <div class="destinations-count text-muted small">
            Showing <strong class="text-navy"><?= count($destinations_list); ?></strong> premier business class routes
          </div>
        </div>

        <!-- Cards Grid -->
        <div class="row g-3 g-lg-4" id="destinationsListingGrid">
          <?php foreach ($destinations_list as $index => $deal): ?>
            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 destination-card-col scroll-reveal-col" 
                 data-region="<?= htmlspecialchars($deal['region']); ?>"
                 style="--reveal-delay: <?= ($index % 4) * 90; ?>ms;">
              
              <a href="index.php#hero" 
                 class="flight-deal-card d-flex flex-column h-100" 
                 data-city="<?= htmlspecialchars($deal['city']); ?>" 
                 data-destination="<?= htmlspecialchars($deal['city'] . ' (' . $deal['code_to'] . ')'); ?>">
                
                <!-- Media -->
                <div class="flight-deal-media position-relative">
                  <span class="flight-deal-badge"><?= htmlspecialchars($deal['save_percent']); ?></span>
                  <img src="<?= htmlspecialchars($deal['image']); ?>" 
                       alt="<?= htmlspecialchars($deal['city']); ?>" 
                       class="flight-deal-img" 
                       loading="lazy">
                  <div class="flight-deal-media-overlay"></div>
                  <span class="flight-deal-hover-action">
                    <span>Book Deal</span>
                    <i class="bi bi-arrow-up-right"></i>
                  </span>
                </div>

                <!-- Body -->
                <div class="flight-deal-body d-flex flex-column flex-grow-1">
                  <div class="flight-deal-titles mb-3">
                    <h3 class="flight-deal-city mb-1"><?= htmlspecialchars($deal['city']); ?></h3>
                    <span class="flight-deal-route d-block"><?= htmlspecialchars($deal['route']); ?></span>
                  </div>

                  <!-- Pricing -->
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

                  <!-- Footer -->
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

    <?php include 'components/cta-section.php'; ?>

  </main>

  <?php include 'components/footer.php'; ?>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script src="assets/js/main.js?v=<?= time(); ?>"></script>
  <script>
    // Simple filter tabs logic for listing page
    document.querySelectorAll('.filter-btn').forEach(btn => {
      btn.addEventListener('click', function() {
        document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active', 'btn-secondary'));
        this.classList.add('active', 'btn-secondary');
        const filter = this.getAttribute('data-filter');
        document.querySelectorAll('.destination-card-col').forEach(col => {
          if (filter === 'all' || col.getAttribute('data-region') === filter) {
            col.style.display = 'block';
          } else {
            col.style.display = 'none';
          }
        });
      });
    });

    // Handle filter query parameter from URL (e.g., flight-destinations.php?filter=middle-east)
    try {
      const urlParams = new URLSearchParams(window.location.search);
      const targetFilter = urlParams.get('filter') || urlParams.get('region');
      if (targetFilter) {
        const matchingBtn = document.querySelector(`.filter-btn[data-filter="${targetFilter.toLowerCase()}"]`);
        if (matchingBtn) {
          matchingBtn.click();
        }
      }
    } catch (e) {
      console.warn('URL search filter error:', e);
    }
  </script>

</body>
</html>
