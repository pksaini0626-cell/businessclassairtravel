<?php
/**
 * Blog / Travel Insights Listing Page — Business Class Air Travel
 * 
 * Features:
 * - Luxury blended dark-blue flight cabin hero with white typography and breadcrumb pagination
 * - Interactive category filters and sorting matching brand theme (Navy & Dark Red)
 * - Clickable blog cards with bold Playfair headings, hover lift, zoom, and cool AOS animations
 * - Strictly no author names displayed on cards
 * - Numbered pagination controls
 * - Embedded Customer Testimonials section from homepage
 * - Embedded VIP Newsletter Subscribe CTA section with red background
 */

$page_title       = 'Latest Travel Insights & Stories | Business Class Air Travel';
$meta_description = 'Expert flight tips, secret consolidator deals, luxury airline reviews, and premium destination guides from Business Class Air Travel concierges.';

$articles = [
  [
    'id'        => 'dream-destinations-2026',
    'title'     => 'Top 10 Dream Destinations for 2026',
    'excerpt'   => 'Discover the most breathtaking places around the globe to add to your luxury business class itinerary this year.',
    'image'     => 'assets/images/imgs/tokyo.png',
    'date'      => 'Nov 12, 2026',
    'category'  => 'Destinations',
    'read_time' => '4 min read',
    'sort_order'=> 1
  ],
  [
    'id'        => 'packing-tips',
    'title'     => 'Travel Smart: 10 Essential Packing Tips for Premium Flyers',
    'excerpt'   => 'Maximize your 2x32kg luggage allowance with curated garment care, smart compression cubes, and essential in-flight items.',
    'image'     => 'assets/images/blog/blog.png',
    'date'      => 'Nov 08, 2026',
    'category'  => 'Travel Tips',
    'read_time' => '5 min read',
    'sort_order'=> 2
  ],
  [
    'id'        => 'europe-best-time',
    'title'     => 'Best Time to Visit Europe: A Seasonal Flight Guide',
    'excerpt'   => 'From Mediterranean summers to Alpine winter wonders, here is our seasonal guide for booking premium European flights.',
    'image'     => 'assets/images/imgs/paris.png',
    'date'      => 'Oct 29, 2026',
    'category'  => 'Seasonal Guide',
    'read_time' => '6 min read',
    'sort_order'=> 3
  ],
  [
    'id'        => 'worlds-best-business-cabins',
    'title'     => 'The World’s Best Business Class Cabins Ranked for 2026',
    'excerpt'   => 'A comprehensive benchmark comparing Qatar Qsuite, Singapore Airlines A380, Emirates A380, and British Airways Club Suite.',
    'image'     => 'assets/images/banners/hero-banner.webp',
    'date'      => 'Oct 22, 2026',
    'category'  => 'Airline Reviews',
    'read_time' => '7 min read',
    'sort_order'=> 4
  ],
  [
    'id'        => 'vip-lounge-access-secrets',
    'title'     => 'How to Unlock VIP First &amp; Business Class Airport Lounges',
    'excerpt'   => 'Indulge in complimentary spa treatments, private sleeping cabanas, and champagne bars before your international departure.',
    'image'     => 'assets/images/imgs/dubai.png',
    'date'      => 'Oct 15, 2026',
    'category'  => 'Business Perks',
    'read_time' => '4 min read',
    'sort_order'=> 5
  ],
  [
    'id'        => 'japan-cherry-blossom-flights',
    'title'     => 'Spring in Japan: Securing Business Class Seats for Sakura Season',
    'excerpt'   => 'Cherry blossom season demands strategic timing. Discover the top transpacific routes and unpublished fare windows to Tokyo.',
    'image'     => 'assets/images/imgs/tokyo.png',
    'date'      => 'Oct 05, 2026',
    'category'  => 'Destinations',
    'read_time' => '5 min read',
    'sort_order'=> 6
  ],
  [
    'id'        => 'beating-long-haul-jetlag',
    'title'     => 'The Science of Beating Jet Lag on Long-Haul Overnight Flights',
    'excerpt'   => 'How lie-flat beds, proper cabin pressurization, and in-flight hydration help you touch down refreshed and meeting-ready.',
    'image'     => 'assets/images/imgs/london.png',
    'date'      => 'Sep 28, 2026',
    'category'  => 'Travel Tips',
    'read_time' => '5 min read',
    'sort_order'=> 7
  ],
  [
    'id'        => 'south-america-luxury-itinerary',
    'title'     => 'Exploring South America in Style: Rio, Buenos Aires &amp; Beyond',
    'excerpt'   => 'From tango in historic San Telmo to private helicopter transfers in Rio, unlock consolidated rates on premium routes south of the equator.',
    'image'     => 'assets/images/imgs/latin-america.jpg',
    'date'      => 'Sep 18, 2026',
    'category'  => 'Destinations',
    'read_time' => '6 min read',
    'sort_order'=> 8
  ],
  [
    'id'        => 'consolidator-airfares-explained',
    'title'     => 'What Are Consolidator Airfares &amp; How Do They Save You 50–70%?',
    'excerpt'   => 'An insider deep-dive into wholesale corporate allotments, net fare contracting, and why you should never pay published airline retail.',
    'image'     => 'assets/images/imgs/new-york.png',
    'date'      => 'Sep 10, 2026',
    'category'  => 'Business Perks',
    'read_time' => '4 min read',
    'sort_order'=> 9
  ]
];

$categories = ['All', 'Destinations', 'Travel Tips', 'Seasonal Guide', 'Airline Reviews', 'Business Perks'];
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

  <!-- Google Fonts (Playfair Display & Plus Jakarta Sans) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,600;1,700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Bootstrap 5.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- AOS CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

  <!-- Swiper 11 CSS (For Testimonials Section) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" href="assets/css/theme.css?v=<?= time(); ?>">
</head>
<body class="d-flex flex-column min-vh-100 bg-white">

  <!-- ===== 1. SITE HEADER ===== -->
  <?php include 'components/header.php'; ?>

  <main class="flex-grow-1" id="main-content">
    
    <!-- ===== 2. HERO BANNER WITH BLENDED LUXURY FLIGHT BG ===== -->
    <section class="blog-hero-banner position-relative text-white" aria-label="Travel Insights Page Header">
      <div class="container-xl px-3 px-lg-4 position-relative" style="z-index: 2;">
        
        <!-- White Breadcrumb / Pagination in Hero -->
        <nav aria-label="breadcrumb" class="blog-hero-breadcrumb mb-3" data-aos="fade-down" data-aos-duration="600">
          <ol class="breadcrumb mb-0 align-items-center">
            <li class="breadcrumb-item">
              <a href="index.php" class="text-white-50 text-decoration-none">
                <i class="bi bi-house-door-fill me-1"></i> Home
              </a>
            </li>
            <li class="breadcrumb-item">
              <a href="blog.php" class="text-white-50 text-decoration-none">Travel Insights</a>
            </li>
            <li class="breadcrumb-item active text-white fw-semibold" aria-current="page">Articles</li>
            <li class="ms-auto d-none d-sm-inline-block">
              <span class="blog-hero-badge">
                <i class="bi bi-book-half me-1 text-warning"></i> Page 1 of 1 &bull; 9 Articles
              </span>
            </li>
          </ol>
        </nav>

        <div class="row align-items-center justify-content-between g-4">
          <div class="col-lg-8" data-aos="fade-up" data-aos-duration="700">
            <h1 class="blog-hero-title">Exclusive Travel Insights &amp; Stories</h1>
            <p class="blog-hero-desc mb-0">
              Expert flight guides, unpublished consolidator saving tactics, luxury airline reviews, and curated destination inspiration from our premier travel desk.
            </p>
          </div>
          <div class="col-lg-4 text-lg-end" data-aos="fade-left" data-aos-duration="700" data-aos-delay="100">
            <a href="index.php#hero" class="btn btn-outline-light rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-2">
              <i class="bi bi-search"></i>
              <span>Search Flight Deals</span>
            </a>
          </div>
        </div>

      </div>
    </section>

    <!-- ===== 3. SORT & FILTER CONTROLS BAR ===== -->
    <section class="blog-controls-section" aria-label="Filter and Sort Articles">
      <div class="container-xl px-3 px-lg-4">
        <div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center justify-content-between gap-3">
          
          <!-- Category Filter Buttons -->
          <div class="blog-filter-group d-flex flex-wrap align-items-center gap-2" id="blogCategoryFilters" role="toolbar" aria-label="Filter by category">
            <?php foreach ($categories as $index => $cat): ?>
              <button type="button" 
                      class="btn blog-filter-btn <?= $index === 0 ? 'active' : ''; ?>" 
                      data-filter="<?= htmlspecialchars($cat); ?>">
                <?= htmlspecialchars($cat); ?>
              </button>
            <?php endforeach; ?>
          </div>

          <!-- Sort Dropdown Controls -->
          <div class="blog-sort-group d-flex align-items-center gap-2 ms-lg-auto">
            <label for="blogSortSelect" class="small fw-semibold text-secondary text-nowrap mb-0 d-none d-sm-inline">
              <i class="bi bi-sort-down me-1"></i> Sort By:
            </label>
            <select class="form-select blog-sort-select" id="blogSortSelect" aria-label="Sort articles">
              <option value="newest" selected>Newest First</option>
              <option value="oldest">Oldest First</option>
              <option value="read-time">Read Time</option>
              <option value="title">Title (A &ndash; Z)</option>
            </select>
          </div>

        </div>
      </div>
    </section>

    <!-- ===== 4. BLOG CARDS LISTING GRID ===== -->
    <section class="blog-listing-section" id="blogCardsSection" aria-label="Travel Articles Listing">
      <div class="container-xl px-3 px-lg-4">

        <!-- Grid Container -->
        <div class="row g-4" id="blogArticlesGrid">
          <?php foreach ($articles as $index => $art): 
            $delay = ($index % 3) * 100 + 100;
          ?>
            <div class="col-12 col-md-6 col-lg-4 blog-card-grid-item" 
                 data-category="<?= htmlspecialchars($art['category']); ?>" 
                 data-date="<?= htmlspecialchars($art['date']); ?>" 
                 data-order="<?= $art['sort_order']; ?>" 
                 data-title="<?= htmlspecialchars($art['title']); ?>"
                 data-read="<?= intval($art['read_time']); ?>"
                 data-aos="fade-up" 
                 data-aos-duration="650" 
                 data-aos-delay="<?= $delay; ?>">
              
              <!-- Entire Card is Clickable -->
              <a href="blog-inner.php?post=<?= urlencode($art['id']); ?>" 
                 class="blog-card-clickable" 
                 title="Read: <?= htmlspecialchars($art['title']); ?>" 
                 aria-label="<?= htmlspecialchars($art['title']); ?>">
                
                <!-- Card Media & Category Tag -->
                <div class="blog-card-media-wrap">
                  <img src="<?= htmlspecialchars($art['image']); ?>" 
                       alt="<?= htmlspecialchars($art['title']); ?>" 
                       class="blog-card-cover-img" 
                       loading="lazy">
                  <span class="blog-card-tag"><?= htmlspecialchars($art['category']); ?></span>
                  <div class="blog-card-corner-arrow" aria-hidden="true">
                    <i class="bi bi-arrow-up-right"></i>
                  </div>
                </div>

                <!-- Card Details (Strictly No Author Displayed) -->
                <div class="blog-card-details">
                  
                  <!-- Meta: Date & Read Time -->
                  <div class="blog-card-meta-line">
                    <span><i class="bi bi-calendar3 me-1"></i><?= htmlspecialchars($art['date']); ?></span>
                    <span>&bull;</span>
                    <span><i class="bi bi-clock me-1"></i><?= htmlspecialchars($art['read_time']); ?></span>
                  </div>

                  <!-- Bold Title -->
                  <h2 class="blog-card-bold-title"><?= htmlspecialchars($art['title']); ?></h2>

                  <!-- Excerpt -->
                  <p class="blog-card-summary mb-0"><?= htmlspecialchars($art['excerpt']); ?></p>

                  <!-- Bottom CTA Bar -->
                  <div class="blog-card-bottom-bar">
                    <span class="blog-card-cta-link">
                      <span>Read Story</span>
                      <i class="bi bi-arrow-right"></i>
                    </span>
                    <span class="blog-card-badge-pill">
                      <i class="bi bi-airplane-fill me-1 text-danger"></i> Business Class
                    </span>
                  </div>

                </div>

              </a>
            </div>
          <?php endforeach; ?>
        </div>

        <!-- No Results Found State (Hidden by default) -->
        <div class="text-center py-5 d-none" id="blogNoResults">
          <i class="bi bi-journal-x text-muted display-4 mb-3 d-block"></i>
          <h4 class="fw-bold text-navy">No articles found in this category</h4>
          <p class="text-muted">Try selecting "All" to view all available travel insights.</p>
          <button type="button" class="btn btn-navy rounded-pill px-4 mt-2" onclick="resetBlogFilter()">View All Stories</button>
        </div>

        <!-- Pagination Controls -->
        <div class="blog-pagination-wrap mt-5 pt-3 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <nav aria-label="Blog pages" class="blog-pagination-nav">
            <ul class="pagination pagination-md mb-0">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                  <i class="bi bi-chevron-left me-1"></i> Prev
                </a>
              </li>
              <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">
                  Next <i class="bi bi-chevron-right ms-1"></i>
                </a>
              </li>
            </ul>
          </nav>
        </div>

      </div>
    </section>

    <!-- ===== 5. TESTIMONIALS SECTION (From Homepage) ===== -->
    <?php include 'components/testimonial-section.php'; ?>

    <!-- ===== 6. NEWSLETTER SUBSCRIBE CTA SECTION (Red Background) ===== -->
    <?php include 'components/newsletter-cta-section.php'; ?>

  </main>

  <!-- ===== 7. SITE FOOTER ===== -->
  <?php include 'components/footer.php'; ?>

  <!-- Bootstrap 5.3 Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- AOS JS -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

  <!-- Swiper 11 Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Main JS (Controls carousels, mobile toggles, newsletter AJAX) -->
  <script src="assets/js/main.js?v=<?= time(); ?>"></script>

  <!-- Page-specific Interactive Filter & Sort Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      if (typeof AOS !== 'undefined') {
        AOS.init({
          duration: 700,
          easing: 'ease-out-cubic',
          once: true,
          offset: 60
        });
      }

      const filterButtons = document.querySelectorAll('.blog-filter-btn');
      const sortSelect = document.getElementById('blogSortSelect');
      const grid = document.getElementById('blogArticlesGrid');
      const noResults = document.getElementById('blogNoResults');
      const cards = Array.from(document.querySelectorAll('.blog-card-grid-item'));

      let activeCategory = 'All';

      // 1. Filter Handling
      filterButtons.forEach(btn => {
        btn.addEventListener('click', function () {
          filterButtons.forEach(b => b.classList.remove('active'));
          this.classList.add('active');
          activeCategory = this.getAttribute('data-filter') || 'All';
          applyFilterAndSort();
        });
      });

      // 2. Sort Handling
      if (sortSelect) {
        sortSelect.addEventListener('change', function () {
          applyFilterAndSort();
        });
      }

      function applyFilterAndSort() {
        let visibleCount = 0;

        // Sorting order
        const sortVal = sortSelect ? sortSelect.value : 'newest';
        cards.sort((a, b) => {
          if (sortVal === 'newest') {
            return parseInt(a.getAttribute('data-order')) - parseInt(b.getAttribute('data-order'));
          } else if (sortVal === 'oldest') {
            return parseInt(b.getAttribute('data-order')) - parseInt(a.getAttribute('data-order'));
          } else if (sortVal === 'read-time') {
            return parseInt(a.getAttribute('data-read')) - parseInt(b.getAttribute('data-read'));
          } else if (sortVal === 'title') {
            return a.getAttribute('data-title').localeCompare(b.getAttribute('data-title'));
          }
          return 0;
        });

        // Re-append sorted cards and filter visibility
        cards.forEach(card => {
          const cardCat = card.getAttribute('data-category');
          if (activeCategory === 'All' || cardCat === activeCategory) {
            card.style.display = 'flex';
            visibleCount++;
          } else {
            card.style.display = 'none';
          }
          grid.appendChild(card);
        });

        // Show/hide no results message
        if (noResults) {
          if (visibleCount === 0) {
            noResults.classList.remove('d-none');
          } else {
            noResults.classList.add('d-none');
          }
        }

        if (typeof AOS !== 'undefined') {
          setTimeout(() => { AOS.refresh(); }, 100);
        }
      }

      window.resetBlogFilter = function () {
        const allBtn = document.querySelector('.blog-filter-btn[data-filter="All"]');
        if (allBtn) allBtn.click();
      };
    });
  </script>

</body>
</html>
