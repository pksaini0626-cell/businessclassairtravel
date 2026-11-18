<?php
/**
 * Latest Travel Insights / Blog Section Component
 * 
 * Features:
 * - Playfair serif headline & luxury subtitle matching PDF design
 * - "View All Insights →" arrow link landing on blog.php
 * - Responsive Swiper carousel: 3 blogs on large screen, 2 on tablet, 1 on mobile
 * - Card media with assets/images/blog/blog.png
 * - Interactive hover lift, zoom & arrow mark landing on blog.php
 * - Navigation next/prev arrows for intuitive browsing
 */

$blog_articles = [
  [
    'id'       => 'dream-destinations-2026',
    'title'    => 'Top 10 Dream Destinations for 2026',
    'excerpt'  => 'Discover the most breathtaking places around the globe to add to your luxury business class itinerary this year.',
    'image'    => 'assets/images/blog/blog.png',
    'date'     => 'Nov 12, 2026',
    'read_time'=> '4 min read',
    'category' => 'Destinations',
    'link'     => 'blog-inner.php?post=dream-destinations-2026'
  ],
  [
    'id'       => 'packing-tips',
    'title'    => 'Travel Smart: 10 Essential Packing Tips',
    'excerpt'  => 'Expert advice on packing light, preserving garments, and making the most of your generous 2x32kg business baggage allowance.',
    'image'    => 'assets/images/blog/blog.png',
    'date'     => 'Nov 08, 2026',
    'read_time'=> '5 min read',
    'category' => 'Travel Tips',
    'link'     => 'blog-inner.php?post=packing-tips'
  ],
  [
    'id'       => 'europe-best-time',
    'title'    => 'Best Time to Visit Europe',
    'excerpt'  => 'From Mediterranean summers to Alpine winter wonders, here is our seasonal guide for booking premium European flights.',
    'image'    => 'assets/images/blog/blog.png',
    'date'     => 'Oct 29, 2026',
    'read_time'=> '6 min read',
    'category' => 'Seasonal Guide',
    'link'     => 'blog-inner.php?post=europe-best-time'
  ]
];

// Duplicate items for continuous slider navigation across breakpoints
$blog_articles_loop = array_merge($blog_articles, $blog_articles);
?>

<!-- ===== LATEST TRAVEL INSIGHTS / BLOG SECTION ===== -->
<section class="blog-insights-section" id="travel-insights" aria-label="Latest Travel Insights">
  <div class="container-xl px-3 px-lg-4">
    
    <!-- Section Header Row -->
    <div class="blog-header-row d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-end mb-4 gap-2">
      <div class="blog-header-left">
        <h2 class="blog-title mb-1">Latest Travel Insights</h2>
        <p class="blog-subtitle mb-0">Tips, guides and travel stories from our experts.</p>
      </div>

      <div class="blog-header-right d-flex align-items-center gap-3">
        <!-- View All Arrow Link to Blog Page -->
        <a href="blog.php" class="blog-view-all-link d-inline-flex align-items-center gap-2" title="View all travel insights and blog articles">
          <span>View All Insights</span>
          <i class="bi bi-arrow-right view-all-arrow"></i>
        </a>

        <!-- Swiper Nav Buttons -->
        <div class="blog-nav-buttons d-inline-flex align-items-center gap-2 ms-2">
          <button type="button" class="blog-nav-btn blog-nav-prev" aria-label="Previous articles" title="Previous">
            <i class="bi bi-chevron-left"></i>
          </button>
          <button type="button" class="blog-nav-btn blog-nav-next" aria-label="Next articles" title="Next">
            <i class="bi bi-chevron-right"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Swiper Carousel Container (3 on desktop, 2 on tablet, 1 on mobile) -->
    <div class="blog-carousel-wrapper position-relative">
      <div class="swiper blog-insights-swiper">
        <div class="swiper-wrapper">
          <?php foreach ($blog_articles_loop as $index => $article): ?>
            <div class="swiper-slide">
              <article class="blog-card h-100">
                <a href="<?= htmlspecialchars($article['link']); ?>" class="blog-card-link" title="<?= htmlspecialchars($article['title']); ?>">
                  <!-- Blog Media / Featured Image -->
                  <div class="blog-card-media">
                    <img src="<?= htmlspecialchars($article['image']); ?>" 
                         alt="<?= htmlspecialchars($article['title']); ?>" 
                         class="blog-card-img" 
                         loading="eager">
                    <div class="blog-card-badge"><?= htmlspecialchars($article['category']); ?></div>
                  </div>

                  <!-- Blog Card Content -->
                  <div class="blog-card-body d-flex flex-column">
                    <div class="blog-card-meta d-flex align-items-center gap-2 mb-2">
                      <span class="blog-date"><i class="bi bi-calendar3 me-1"></i><?= htmlspecialchars($article['date']); ?></span>
                      <span class="meta-dot">&bull;</span>
                      <span class="blog-read-time"><i class="bi bi-clock me-1"></i><?= htmlspecialchars($article['read_time']); ?></span>
                    </div>

                    <h3 class="blog-card-title mb-2">
                      <?= htmlspecialchars($article['title']); ?>
                    </h3>

                    <p class="blog-card-excerpt mb-3 flex-grow-1">
                      <?= htmlspecialchars($article['excerpt']); ?>
                    </p>

                    <!-- Arrow Mark Landing on Blog Page -->
                    <div class="blog-card-action d-flex align-items-center justify-content-between pt-2 border-top">
                      <span class="blog-read-more-text">Read Article</span>
                      <span class="blog-card-arrow" aria-label="Read article on blog page">
                        <i class="bi bi-arrow-right"></i>
                      </span>
                    </div>
                  </div>
                </a>
              </article>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

  </div>
</section>
