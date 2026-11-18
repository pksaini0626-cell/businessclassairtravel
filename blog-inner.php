<?php
/**
 * Inner Blog Post Detail Page — Business Class Air Travel
 * 
 * Features:
 * - Inner page with a luxury blended banner image hero & breadcrumb navigation
 * - Light theme, highly readable typography (Plus Jakarta Sans body + Playfair Display headings)
 * - 2-Column responsive layout (Main Content + Sticky Sidebar on large screens lg/xl)
 * - Sidebar Features:
 *     1. "Find a Business Class Deal" Booking Form:
 *        - Exact fields as the homepage hero section (Trip Type, Direct Only, Origin, Destination,
 *          Departure Date, Return Date, Travelers, Cabin Class, dynamic Email/Phone)
 *        - Re-engineered as a high-converting vertical sidebar card with brand colors & swap button
 *     2. Related Posts:
 *        - Visual thumbnails, category badge, read time, date, hover effects
 *     3. Quick Concierge Call Widget:
 *        - 24/7 Phone Concierge direct dial
 * - Rich, readable article content with key takeaways box, pull quotes, image highlight, author/desk trust badge
 * - Post Navigation & Social Sharing
 * - Full-width CTA Section ("Why Choose Business Class Air Travel")
 * - High-converting Newsletter Subscribe CTA Section
 * - Master Site Footer
 */

$page_title       = 'Top 10 Dream Destinations for 2026 | Business Class Air Travel Insights';
$meta_description = 'Discover the most breathtaking places around the globe to add to your luxury business class itinerary this year. Read expert reviews, flight tips, and booking recommendations.';

// Master article repository for dynamic rendering
$all_articles = [
  'dream-destinations-2026' => [
    'id'        => 'dream-destinations-2026',
    'title'     => 'Top 10 Dream Destinations for 2026',
    'subtitle'  => 'Discover the most breathtaking places around the globe to add to your luxury business class itinerary this year.',
    'excerpt'   => 'Discover the most breathtaking places around the globe to add to your luxury business class itinerary this year.',
    'image'     => 'assets/images/imgs/tokyo.png',
    'banner'    => 'assets/images/banners/hero-banner.webp',
    'date'      => 'Nov 12, 2026',
    'category'  => 'Destinations',
    'read_time' => '4 min read',
    'views'     => '2.4k views',
    'tags'      => ['Luxury Travel', 'Destinations 2026', 'Business Class', 'Lie-Flat Cabins', 'Wanderlust']
  ],
  'packing-tips' => [
    'id'        => 'packing-tips',
    'title'     => 'Travel Smart: 10 Essential Packing Tips for Premium Flyers',
    'subtitle'  => 'Maximize your luggage allowance with curated garment care, smart compression cubes, and in-flight amenities.',
    'excerpt'   => 'Maximize your 2x32kg luggage allowance with curated garment care, smart compression cubes, and essential in-flight items.',
    'image'     => 'assets/images/blog/blog.png',
    'banner'    => 'assets/images/banners/hero-banner.webp',
    'date'      => 'Nov 08, 2026',
    'category'  => 'Travel Tips',
    'read_time' => '5 min read',
    'views'     => '1.9k views',
    'tags'      => ['Packing Guide', 'Business Flying', 'Carry-On', 'Luggage Tips']
  ],
  'europe-best-time' => [
    'id'        => 'europe-best-time',
    'title'     => 'Best Time to Visit Europe: A Seasonal Flight Guide',
    'subtitle'  => 'From Mediterranean summers to Alpine winter wonders, here is our seasonal guide for booking premium European flights.',
    'excerpt'   => 'From Mediterranean summers to Alpine winter wonders, here is our seasonal guide for booking premium European flights.',
    'image'     => 'assets/images/imgs/paris.png',
    'banner'    => 'assets/images/banners/hero-banner.webp',
    'date'      => 'Oct 29, 2026',
    'category'  => 'Seasonal Guide',
    'read_time' => '6 min read',
    'views'     => '3.1k views',
    'tags'      => ['Europe Flights', 'Seasonal Travel', 'Paris', 'Rome', 'Consolidator Fares']
  ],
  'worlds-best-business-cabins' => [
    'id'        => 'worlds-best-business-cabins',
    'title'     => 'The World’s Best Business Class Cabins Ranked for 2026',
    'subtitle'  => 'A comprehensive benchmark comparing Qatar Qsuite, Singapore Airlines A380, Emirates A380, and British Airways Club Suite.',
    'excerpt'   => 'A comprehensive benchmark comparing Qatar Qsuite, Singapore Airlines A380, Emirates A380, and British Airways Club Suite.',
    'image'     => 'assets/images/banners/hero-banner.webp',
    'banner'    => 'assets/images/banners/hero-banner.webp',
    'date'      => 'Oct 22, 2026',
    'category'  => 'Airline Reviews',
    'read_time' => '7 min read',
    'views'     => '4.8k views',
    'tags'      => ['Qsuite', 'Emirates A380', 'Cabin Reviews', 'First vs Business']
  ],
  'vip-lounge-access-secrets' => [
    'id'        => 'vip-lounge-access-secrets',
    'title'     => 'How to Unlock VIP First &amp; Business Class Airport Lounges',
    'subtitle'  => 'Indulge in complimentary spa treatments, private sleeping cabanas, and champagne bars before your international departure.',
    'excerpt'   => 'Indulge in complimentary spa treatments, private sleeping cabanas, and champagne bars before your international departure.',
    'image'     => 'assets/images/imgs/dubai.png',
    'banner'    => 'assets/images/banners/hero-banner.webp',
    'date'      => 'Oct 15, 2026',
    'category'  => 'Business Perks',
    'read_time' => '4 min read',
    'views'     => '2.7k views',
    'tags'      => ['Airport Lounges', 'VIP Access', 'Priority Pass', 'Travel Perks']
  ],
  'japan-cherry-blossom-flights' => [
    'id'        => 'japan-cherry-blossom-flights',
    'title'     => 'Spring in Japan: Securing Business Class Seats for Sakura Season',
    'subtitle'  => 'Cherry blossom season demands strategic timing. Discover the top transpacific routes and unpublished fare windows to Tokyo.',
    'excerpt'   => 'Cherry blossom season demands strategic timing. Discover the top transpacific routes and unpublished fare windows to Tokyo.',
    'image'     => 'assets/images/imgs/tokyo.png',
    'banner'    => 'assets/images/banners/hero-banner.webp',
    'date'      => 'Oct 05, 2026',
    'category'  => 'Destinations',
    'read_time' => '5 min read',
    'views'     => '3.5k views',
    'tags'      => ['Tokyo Flights', 'Cherry Blossom', 'Japan Travel', 'Secret Fares']
  ]
];

// Determine active article from GET param, default to dream-destinations-2026
$current_id = isset($_GET['post']) && isset($all_articles[$_GET['post']]) ? $_GET['post'] : 'dream-destinations-2026';
$article = $all_articles[$current_id];

// Prepare related posts (exclude current)
$related_posts = array_filter($all_articles, function($k) use ($current_id) {
  return $k !== $current_id;
}, ARRAY_FILTER_USE_KEY);
$related_posts = array_slice($related_posts, 0, 4);

$page_title = $article['title'] . ' | Business Class Air Travel Insights';
$meta_description = $article['excerpt'];
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

  <!-- Material Icons & Bootstrap Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Round" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Bootstrap 5.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- AOS CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" href="assets/css/theme.css?v=<?= time(); ?>">

  <style>
    /* =========================================================================
       INNER BLOG PAGE SPECIFIC STYLES
       Light, Crisp, Ultra-Readable Editorial Styling with Brand Highlights
       ========================================================================= */

    /* Inner Hero Banner */
    .blog-inner-hero {
      position: relative;
      background-color: var(--color-navy);
      background-image: 
        linear-gradient(135deg, rgba(8, 38, 76, 0.94) 0%, rgba(18, 61, 112, 0.88) 55%, rgba(6, 26, 52, 0.96) 100%),
        url('assets/images/banners/hero-banner.webp');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-blend-mode: multiply;
      padding: 60px 0 70px 0;
      color: #ffffff;
      overflow: hidden;
    }

    .blog-inner-hero::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 24px;
      background: linear-gradient(to top, rgba(255,255,255,0.06), transparent);
      pointer-events: none;
    }

    .blog-inner-breadcrumb .breadcrumb {
      background: transparent;
      padding: 0;
      font-size: 0.88rem;
    }

    .blog-inner-breadcrumb .breadcrumb-item + .breadcrumb-item::before {
      content: "›";
      color: rgba(255, 255, 255, 0.5);
      font-size: 1.15rem;
      line-height: 1;
      padding: 0 0.45rem;
    }

    .blog-inner-title {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: clamp(2rem, 3.8vw, 3.25rem);
      font-weight: 700;
      color: #ffffff;
      line-height: 1.22;
      letter-spacing: -0.015em;
      text-shadow: 0 2px 10px rgba(0, 0, 0, 0.4);
    }

    .blog-meta-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
      padding: 0.35rem 0.85rem;
      border-radius: 50px;
      font-size: 0.78rem;
      font-weight: 700;
      letter-spacing: 0.04em;
      text-transform: uppercase;
      background: rgba(162, 13, 36, 0.95);
      color: #ffffff;
      box-shadow: 0 2px 8px rgba(162, 13, 36, 0.3);
    }

    .blog-meta-info-strip {
      color: rgba(255, 255, 255, 0.85);
      font-size: 0.9rem;
      font-weight: 500;
    }

    .blog-meta-info-strip i {
      color: #f59e0b;
    }

    /* Article Body & Editorial Typography (A Light, Clean, Inviting Theme) */
    .blog-detail-container {
      background-color: #FAFCFE;
      padding: 48px 0 64px 0;
    }

    .blog-article-card {
      background: #FFFFFF;
      border: 1px solid #E6EDF5;
      border-radius: 16px;
      box-shadow: 0 4px 20px rgba(8, 38, 76, 0.04);
      padding: 36px 36px 44px 36px;
      overflow: hidden;
    }

    @media (max-width: 767.98px) {
      .blog-article-card {
        padding: 24px 18px 32px 18px;
        border-radius: 12px;
      }
      .blog-detail-container {
        padding: 28px 0 48px 0;
      }
    }

    .blog-featured-media {
      position: relative;
      border-radius: 12px;
      overflow: hidden;
      margin-bottom: 2rem;
      box-shadow: 0 8px 24px rgba(8, 38, 76, 0.08);
      max-height: 440px;
    }

    .blog-featured-media img {
      width: 100%;
      height: 100%;
      max-height: 440px;
      object-fit: cover;
      display: block;
      transition: transform 0.6s ease;
    }

    .blog-featured-media:hover img {
      transform: scale(1.02);
    }

    .blog-featured-caption {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      padding: 10px 18px;
      background: linear-gradient(to top, rgba(8, 38, 76, 0.85), transparent);
      color: #ffffff;
      font-size: 0.82rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    /* Content Typography */
    .blog-article-content {
      color: #2D3748;
      font-size: 1.075rem;
      line-height: 1.82;
      font-weight: 400;
    }

    .blog-article-content p {
      margin-bottom: 1.45rem;
      color: #334155;
    }

    .blog-article-content .lead-text {
      font-size: 1.22rem;
      line-height: 1.75;
      font-weight: 500;
      color: var(--color-navy);
      border-left: 4px solid var(--color-dark-red);
      padding-left: 1.15rem;
      margin-bottom: 1.75rem;
    }

    .blog-article-content h2 {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: 1.85rem;
      font-weight: 700;
      color: var(--color-navy);
      margin-top: 2.5rem;
      margin-bottom: 1rem;
      line-height: 1.3;
      padding-bottom: 0.5rem;
      border-bottom: 2px solid #F1F5F9;
    }

    .blog-article-content h3 {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: 1.45rem;
      font-weight: 700;
      color: var(--color-deep-blue);
      margin-top: 2rem;
      margin-bottom: 0.85rem;
      line-height: 1.35;
    }

    /* Highlight Key Takeaways Box */
    .blog-takeaways-box {
      background: #F8FAFC;
      border: 1px solid #E2E8F0;
      border-left: 5px solid var(--color-dark-red);
      border-radius: 12px;
      padding: 24px;
      margin: 2rem 0;
    }

    .blog-takeaways-title {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: 1.25rem;
      font-weight: 700;
      color: var(--color-navy);
      display: flex;
      align-items: center;
      gap: 0.5rem;
      margin-bottom: 0.85rem;
    }

    .blog-takeaways-list {
      list-style: none;
      padding-left: 0;
      margin-bottom: 0;
    }

    .blog-takeaways-list li {
      position: relative;
      padding-left: 1.65rem;
      margin-bottom: 0.65rem;
      font-size: 0.98rem;
      color: #334155;
    }

    .blog-takeaways-list li:last-child {
      margin-bottom: 0;
    }

    .blog-takeaways-list li::before {
      content: "✓";
      position: absolute;
      left: 0;
      top: 0;
      color: var(--color-dark-red);
      font-weight: 800;
      font-size: 1.05rem;
    }

    /* Pull Quote Style */
    .blog-pull-quote {
      position: relative;
      background: linear-gradient(135deg, rgba(8, 38, 76, 0.03) 0%, rgba(162, 13, 36, 0.05) 100%);
      border-radius: 12px;
      border-left: 4px solid var(--color-navy);
      padding: 26px 30px;
      margin: 2rem 0;
    }

    .blog-pull-quote p {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: 1.28rem;
      font-style: italic;
      color: var(--color-navy);
      line-height: 1.6;
      margin-bottom: 0.5rem;
    }

    .blog-pull-quote cite {
      display: block;
      font-style: normal;
      font-size: 0.85rem;
      font-weight: 600;
      color: var(--color-dark-red);
      text-transform: uppercase;
      letter-spacing: 0.05em;
    }

    /* Destination Highlights Grid inside content */
    .dest-card-inline {
      background: #FFFFFF;
      border: 1px solid #E2E8F0;
      border-radius: 12px;
      padding: 16px;
      transition: all 0.25s ease;
      height: 100%;
    }

    .dest-card-inline:hover {
      box-shadow: 0 8px 24px rgba(8, 38, 76, 0.08);
      border-color: #CBD5E1;
      transform: translateY(-2px);
    }

    .dest-pill-code {
      display: inline-block;
      background: rgba(8, 38, 76, 0.08);
      color: var(--color-navy);
      font-weight: 800;
      font-size: 0.78rem;
      padding: 0.2rem 0.55rem;
      border-radius: 4px;
      letter-spacing: 0.04em;
    }

    /* Article Tags Strip */
    .blog-tags-strip {
      padding-top: 1.5rem;
      margin-top: 2rem;
      border-top: 1px solid #E2E8F0;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 0.5rem;
    }

    .blog-tag-item {
      display: inline-block;
      padding: 0.35rem 0.85rem;
      background-color: #F1F5F9;
      color: #475569;
      font-size: 0.82rem;
      font-weight: 600;
      border-radius: 50px;
      text-decoration: none;
      transition: all 0.2s ease;
    }

    .blog-tag-item:hover {
      background-color: var(--color-navy);
      color: #ffffff;
    }

    /* Author / Concierge Trust Desk Box */
    .blog-author-card {
      background: #F8FAFC;
      border: 1px solid #E2E8F0;
      border-radius: 14px;
      padding: 24px;
      margin-top: 2.25rem;
      display: flex;
      flex-direction: column;
      flex-sm-row: row;
      gap: 1.25rem;
      align-items: center;
    }

    .blog-author-avatar {
      width: 64px;
      height: 64px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--color-navy), var(--color-deep-blue));
      display: flex;
      align-items: center;
      justify-content: center;
      color: #ffffff;
      font-size: 1.8rem;
      flex-shrink: 0;
      box-shadow: 0 4px 12px rgba(8, 38, 76, 0.18);
    }

    /* Social Sharing Strip */
    .blog-share-strip {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      padding: 1.25rem 0;
      margin-top: 1.5rem;
      border-top: 1px solid #E2E8F0;
      border-bottom: 1px solid #E2E8F0;
    }

    .blog-share-btn {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      background-color: #F1F5F9;
      color: var(--color-navy);
      text-decoration: none;
      transition: all 0.25s ease;
      font-size: 0.95rem;
    }

    .blog-share-btn:hover {
      background-color: var(--color-dark-red);
      color: #ffffff;
      transform: translateY(-2px);
    }

    /* =========================================================================
       SIDEBAR SPECIFIC STYLES
       Sticky on large screens (lg+)
       ========================================================================= */
    .blog-sidebar {
      position: sticky;
      top: 24px;
      display: flex;
      flex-direction: column;
      gap: 24px;
    }

    /* 1. Sidebar Booking Card: "Find a Business Class Deal" */
    .sidebar-booking-card {
      background: #FFFFFF;
      border: 1px solid #E2E8F0;
      border-radius: 16px;
      box-shadow: 0 8px 30px rgba(8, 38, 76, 0.08);
      overflow: hidden;
      transition: border-color 0.25s ease;
    }

    .sidebar-booking-header {
      background: linear-gradient(135deg, var(--color-navy) 0%, var(--color-deep-blue) 100%);
      padding: 20px 22px;
      color: #ffffff;
      position: relative;
    }

    .sidebar-booking-header::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 3px;
      background: var(--color-dark-red);
    }

    .sidebar-badge-pill {
      display: inline-flex;
      align-items: center;
      gap: 0.35rem;
      background: rgba(162, 13, 36, 0.25);
      border: 1px solid rgba(255, 255, 255, 0.2);
      color: #ffffff;
      font-size: 0.72rem;
      font-weight: 700;
      padding: 0.2rem 0.6rem;
      border-radius: 50px;
      text-transform: uppercase;
      letter-spacing: 0.04em;
    }

    .sidebar-booking-title {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: 1.35rem;
      font-weight: 700;
      color: #ffffff;
      line-height: 1.25;
      margin-top: 0.4rem;
      margin-bottom: 0.25rem;
    }

    .sidebar-booking-subtitle {
      font-size: 0.82rem;
      color: rgba(255, 255, 255, 0.82);
      margin-bottom: 0;
    }

    .sidebar-booking-body {
      padding: 22px 20px;
    }

    /* Compact Field Controls matching Homepage Look & Feel */
    .sb-field-group {
      margin-bottom: 12px;
    }

    .sb-input-box {
      border: 1px solid #E2E8F0;
      border-radius: 8px;
      background-color: #FFFFFF;
      padding: 7px 12px;
      transition: all 0.2s ease;
    }

    .sb-input-box:focus-within {
      border-color: var(--color-navy);
      box-shadow: 0 0 0 3px rgba(8, 38, 76, 0.1);
    }

    .sb-input-label {
      font-size: 0.68rem;
      font-weight: 700;
      color: #64748B;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      display: block;
      margin-bottom: 2px;
    }

    .sb-form-control {
      border: none;
      padding: 0;
      font-size: 0.88rem;
      font-weight: 600;
      color: var(--color-navy);
      background: transparent;
      width: 100%;
      outline: none;
      box-shadow: none;
    }

    .sb-form-control:focus {
      outline: none;
      box-shadow: none;
      background: transparent;
    }

    .sb-route-swap-row {
      position: relative;
    }

    .sb-btn-swap {
      position: absolute;
      right: 12px;
      top: 50%;
      transform: translateY(-50%);
      width: 32px;
      height: 32px;
      border-radius: 50%;
      background: #FFFFFF;
      border: 1px solid #E2E8F0;
      color: var(--color-navy);
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      z-index: 5;
      box-shadow: 0 2px 8px rgba(8, 38, 76, 0.12);
      transition: all 0.25s ease;
    }

    .sb-btn-swap:hover {
      background-color: var(--color-navy);
      color: #ffffff;
      transform: translateY(-50%) rotate(180deg);
    }

    /* Submit Button in Sidebar */
    .btn-sidebar-search {
      background: var(--color-dark-red);
      color: #ffffff;
      border: none;
      font-weight: 700;
      font-size: 0.96rem;
      padding: 12px 18px;
      border-radius: 8px;
      width: 100%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      letter-spacing: 0.01em;
      box-shadow: 0 4px 14px rgba(162, 13, 36, 0.35);
      transition: all 0.25s ease;
    }

    .btn-sidebar-search:hover {
      background-color: #830B1D;
      color: #ffffff;
      transform: translateY(-2px);
      box-shadow: 0 6px 18px rgba(162, 13, 36, 0.45);
    }

    /* 2. Sidebar Related Posts Card */
    .sidebar-widget-card {
      background: #FFFFFF;
      border: 1px solid #E2E8F0;
      border-radius: 16px;
      box-shadow: 0 4px 20px rgba(8, 38, 76, 0.04);
      padding: 24px;
    }

    .sidebar-widget-title {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: 1.25rem;
      font-weight: 700;
      color: var(--color-navy);
      margin-bottom: 1.2rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding-bottom: 0.65rem;
      border-bottom: 2px solid #F1F5F9;
    }

    .related-post-item {
      display: flex;
      align-items: center;
      gap: 14px;
      padding: 12px 0;
      border-bottom: 1px dashed #E2E8F0;
      text-decoration: none;
      transition: all 0.2s ease;
    }

    .related-post-item:last-child {
      border-bottom: none;
      padding-bottom: 0;
    }

    .related-post-item:hover {
      transform: translateX(4px);
    }

    .related-post-thumb {
      width: 72px;
      height: 72px;
      border-radius: 10px;
      object-fit: cover;
      flex-shrink: 0;
      background-color: #EEF2F6;
      border: 1px solid #E2E8F0;
    }

    .related-post-title {
      font-size: 0.92rem;
      font-weight: 700;
      color: var(--color-navy);
      line-height: 1.35;
      margin-bottom: 0.35rem;
      transition: color 0.2s ease;
    }

    .related-post-item:hover .related-post-title {
      color: var(--color-dark-red);
    }

    .related-post-meta {
      font-size: 0.76rem;
      color: #64748B;
      display: flex;
      align-items: center;
      gap: 0.6rem;
    }

    /* 3. Sidebar Concierge Call Card */
    .sidebar-concierge-card {
      background: linear-gradient(135deg, #061933 0%, var(--color-navy) 100%);
      border-radius: 16px;
      padding: 24px;
      color: #ffffff;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .sidebar-concierge-card::before {
      content: '';
      position: absolute;
      top: -30px;
      right: -30px;
      width: 100px;
      height: 100px;
      background: radial-gradient(circle, rgba(162, 13, 36, 0.45) 0%, transparent 70%);
      border-radius: 50%;
    }

    .concierge-avatar-icon {
      width: 52px;
      height: 52px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.12);
      border: 1px solid rgba(255, 255, 255, 0.2);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      color: #ffffff;
      margin-bottom: 0.85rem;
    }

    .btn-concierge-call {
      background-color: var(--color-dark-red);
      color: #ffffff;
      border: none;
      font-weight: 700;
      font-size: 0.95rem;
      padding: 10px 18px;
      border-radius: 50px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      text-decoration: none;
      width: 100%;
      box-shadow: 0 4px 14px rgba(162, 13, 36, 0.4);
      transition: all 0.25s ease;
    }

    .btn-concierge-call:hover {
      background-color: #830B1D;
      color: #ffffff;
      transform: translateY(-2px);
    }
  </style>
</head>
<body class="d-flex flex-column min-vh-100 bg-white">

  <!-- ===== 1. SITE HEADER ===== -->
  <?php include 'components/header.php'; ?>

  <main class="flex-grow-1" id="main-content">
    
    <!-- ===== 2. INNER BLOG HERO BANNER ===== -->
    <section class="blog-inner-hero position-relative" aria-label="Article Banner Header">
      <div class="container-xl px-3 px-lg-4 position-relative" style="z-index: 2;">
        
        <!-- Breadcrumb Navigation -->
        <nav aria-label="breadcrumb" class="blog-inner-breadcrumb mb-3" data-aos="fade-down" data-aos-duration="600">
          <ol class="breadcrumb mb-0 align-items-center">
            <li class="breadcrumb-item">
              <a href="index.php" class="text-white-50 text-decoration-none">
                <i class="bi bi-house-door-fill me-1"></i> Home
              </a>
            </li>
            <li class="breadcrumb-item">
              <a href="blog.php" class="text-white-50 text-decoration-none">Travel Insights</a>
            </li>
            <li class="breadcrumb-item active text-white" aria-current="page">
              <span class="text-truncate d-inline-block align-bottom" style="max-width: 280px;">
                <?= htmlspecialchars($article['category']); ?>
              </span>
            </li>
          </ol>
        </nav>

        <div class="row align-items-center">
          <div class="col-lg-10 col-xl-9" data-aos="fade-up" data-aos-duration="700">
            
            <!-- Category Badge & Read Time Meta -->
            <div class="d-flex flex-wrap align-items-center gap-2 gap-sm-3 mb-3">
              <span class="blog-meta-badge">
                <i class="bi bi-tag-fill"></i> <?= htmlspecialchars($article['category']); ?>
              </span>
              <div class="blog-meta-info-strip d-flex align-items-center gap-3">
                <span><i class="bi bi-calendar3 me-1"></i> <?= htmlspecialchars($article['date']); ?></span>
                <span><i class="bi bi-clock me-1"></i> <?= htmlspecialchars($article['read_time']); ?></span>
                <span><i class="bi bi-eye me-1"></i> <?= htmlspecialchars($article['views']); ?></span>
              </div>
            </div>

            <!-- Main Heading (Playfair Display) -->
            <h1 class="blog-inner-title mb-3">
              <?= htmlspecialchars($article['title']); ?>
            </h1>

            <!-- Subtitle -->
            <p class="lead text-white-50 mb-0" style="font-size: 1.15rem; max-width: 780px;">
              <?= htmlspecialchars($article['subtitle']); ?>
            </p>

          </div>
        </div>

      </div>
    </section>

    <!-- ===== 3. MAIN CONTENT & SIDEBAR SECTION ===== -->
    <section class="blog-detail-container" aria-label="Article Content and Booking Sidebar">
      <div class="container-xl px-3 px-lg-4">
        <div class="row g-4 g-xl-5">

          <!-- ==========================================
               LEFT COLUMN: EDITORIAL ARTICLE CONTENT (8 cols on lg)
               Light, spacious, readable typography
               ========================================== -->
          <article class="col-lg-8" data-aos="fade-up" data-aos-duration="700">
            <div class="blog-article-card">
              
              <!-- Featured Image with Subdued Luxury Caption -->
              <div class="blog-featured-media">
                <img src="<?= htmlspecialchars($article['image']); ?>" 
                     alt="<?= htmlspecialchars($article['title']); ?>" 
                     loading="eager">
                <div class="blog-featured-caption">
                  <i class="bi bi-camera-fill text-warning"></i>
                  <span>Global Business Class Flight Itinerary &bull; Luxury Travel Photography</span>
                </div>
              </div>

              <!-- Article Content -->
              <div class="blog-article-content">
                
                <p class="lead-text">
                  As international commercial aviation completes its golden revival, 2026 heralds a renaissance in ultra-long-haul comfort. With modern composite airframes like the Airbus A350-1000 and Boeing 787-10 Dreamliner dominating premier international trunk routes, travelers no longer need to sacrifice wellbeing for transcontinental distances.
                </p>

                <p>
                  Whether your travel calendars are dictated by boardroom negotiations in financial capitals or restorative escapes across pristine archipelagos, selecting the right business class ticket unlocks seamless airport fast-tracks, Michelin-inspired in-flight dining, and lie-flat rest that guarantees you arrive fully energized.
                </p>

                <!-- Key Takeaways Highlight Box -->
                <div class="blog-takeaways-box" data-aos="fade-up" data-aos-duration="600">
                  <h4 class="blog-takeaways-title">
                    <i class="bi bi-bookmark-star-fill text-dark-red"></i>
                    Executive Summary &amp; Key Takeaways
                  </h4>
                  <ul class="blog-takeaways-list">
                    <li><strong>Transpacific routes to Tokyo &amp; Singapore:</strong> Unpublished wholesale contracts consistently beat retail carrier pricing by up to 50–65%.</li>
                    <li><strong>Lie-Flat privacy suites:</strong> Ensure your aircraft equipment schedule features 1-2-1 direct aisle access rather than older 2-2-2 cabin layouts.</li>
                    <li><strong>Stopover luxury:</strong> Qatar Airways, Emirates, and Turkish Airlines offer world-class five-star transit stopovers for zero added airfare.</li>
                    <li><strong>Luggage &amp; Lounges:</strong> All recommended business itineraries include 2×32kg checked baggage allowances and first-class lounge access.</li>
                  </ul>
                </div>

                <h2>1. Tokyo, Japan: The Architectural &amp; Gastronomic Pinnacle</h2>
                <p>
                  Tokyo remains the unrivaled crown jewel for international travelers in 2026. The metropolis combines centuries-old tea traditions with neon-lit hyper-modernism. Flying business class via carriers like All Nippon Airways (ANA 'The Room') or Japan Airlines (A350-1000 suites with personal stereo headrests) elevates a 14-hour transpacific journey into a restorative retreat.
                </p>
                <p>
                  <strong>Concierge Tip:</strong> Target flight bookings landing at Haneda Airport (HND) rather than Narita (NRT) to reduce transit time to downtown Ginza and Shibuya by more than 50 minutes.
                </p>

                <!-- Pull Quote -->
                <div class="blog-pull-quote">
                  <p>
                    "A business class ticket is no longer merely a seat on an aircraft; it is eight to fourteen hours of reclaimable sleep, uninterrupted productivity, and unhurried luxury."
                  </p>
                  <cite>— Business Class Air Travel Concierge Team</cite>
                </div>

                <h2>2. Paris &amp; the French Riviera: European Splendor</h2>
                <p>
                  From the newly expanded terminal facilities at Paris Charles de Gaulle (CDG) to bespoke private transfers down to Nice and Cannes, Europe continues to see immense premium flight demand. Leading SkyTeam and Oneworld partners have upgraded transatlantic rotations with private closing-door mini-suites, ensuring maximum acoustic isolation.
                </p>

                <!-- Destination Mini Cards Row -->
                <div class="row g-3 my-3">
                  <div class="col-md-6">
                    <div class="dest-card-inline">
                      <div class="d-flex align-items-center justify-content-between mb-2">
                        <span class="dest-pill-code">PARIS &bull; CDG</span>
                        <span class="text-success fw-bold small"><i class="bi bi-tag-fill"></i> Save Up to 60%</span>
                      </div>
                      <h5 class="fw-bold text-navy mb-1">Paris, France</h5>
                      <p class="text-muted small mb-2">Unpublished corporate net fares available on lie-flat suites with complimentary champagne service.</p>
                      <a href="#sidebarFlightSearch" class="btn btn-sm btn-outline-primary rounded-pill">Check Deals &rarr;</a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="dest-card-inline">
                      <div class="d-flex align-items-center justify-content-between mb-2">
                        <span class="dest-pill-code">DUBAI &bull; DXB</span>
                        <span class="text-success fw-bold small"><i class="bi bi-tag-fill"></i> Best Fare Guaranteed</span>
                      </div>
                      <h5 class="fw-bold text-navy mb-1">Dubai &amp; Emirates</h5>
                      <p class="text-muted small mb-2">Direct A380 business bar access, luxury chauffeur transfers, and 2×32kg baggage allowances.</p>
                      <a href="#sidebarFlightSearch" class="btn btn-sm btn-outline-primary rounded-pill">Check Deals &rarr;</a>
                    </div>
                  </div>
                </div>

                <h2>3. Unlocking Unpublished Business Class Rates</h2>
                <p>
                  Over 40% of premium cabin seats across tier-one international carriers are distributed through private consolidators and net-fare contracts rather than generic public search engines. Airlines release these allotments to maintain yield protection without advertising discounted tickets to retail customers.
                </p>
                <p>
                  By utilizing our dedicated flight booking desk—either through the quick search tool on your right or by contacting our 24/7 concierge—you tap directly into these wholesale inventories.
                </p>

                <!-- Social Sharing Strip -->
                <div class="blog-share-strip">
                  <span class="fw-bold text-navy small me-2"><i class="bi bi-share-fill text-dark-red me-1"></i> Share Insight:</span>
                  <a href="https://twitter.com/intent/tweet?text=<?= urlencode($article['title']); ?>" target="_blank" rel="noopener" class="blog-share-btn" title="Share on X (Twitter)">
                    <i class="bi bi-twitter-x"></i>
                  </a>
                  <a href="https://www.facebook.com/sharer/sharer.php" target="_blank" rel="noopener" class="blog-share-btn" title="Share on Facebook">
                    <i class="bi bi-facebook"></i>
                  </a>
                  <a href="https://www.linkedin.com/shareArticle" target="_blank" rel="noopener" class="blog-share-btn" title="Share on LinkedIn">
                    <i class="bi bi-linkedin"></i>
                  </a>
                  <a href="mailto:?subject=<?= urlencode($article['title']); ?>" class="blog-share-btn" title="Share via Email">
                    <i class="bi bi-envelope-fill"></i>
                  </a>
                </div>

                <!-- Tags Strip -->
                <div class="blog-tags-strip">
                  <span class="fw-bold text-navy small me-1"><i class="bi bi-tags-fill me-1"></i> Topics:</span>
                  <?php foreach ($article['tags'] as $tag): ?>
                    <a href="blog.php" class="blog-tag-item"><?= htmlspecialchars($tag); ?></a>
                  <?php endforeach; ?>
                </div>

                <!-- Concierge Desk Trust Box -->
                <div class="blog-author-card">
                  <div class="blog-author-avatar">
                    <i class="bi bi-shield-check"></i>
                  </div>
                  <div>
                    <div class="d-flex align-items-center gap-2 mb-1">
                      <h5 class="fw-bold text-navy mb-0">Business Class Air Travel Concierge Desk</h5>
                      <span class="badge bg-success small">Verified Experts</span>
                    </div>
                    <p class="text-muted small mb-2">
                      Our seasoned airline ticket specialists have negotiated corporate consolidated contracts for over 16 years. We secure unpublished business class fares with personalized seat assignments, luggage tracking, and multi-city itineraries.
                    </p>
                    <a href="tel:+18337431225" class="fw-bold text-dark-red text-decoration-none small d-inline-flex align-items-center gap-1">
                      <i class="bi bi-telephone-fill"></i> Speak with a Senior Desk Advisor: 1-833-743-1225 &rarr;
                    </a>
                  </div>
                </div>

              </div><!-- /.blog-article-content -->

            </div><!-- /.blog-article-card -->

            <!-- Post Navigation Buttons -->
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mt-4 pt-2">
              <a href="blog.php" class="btn btn-outline-secondary rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-2">
                <i class="bi bi-arrow-left"></i> Back to All Articles
              </a>
              <a href="flight-results.php" class="btn btn-navy rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-2" style="background-color: var(--color-navy); color:#fff;">
                <span>View Live Flight Deals</span> <i class="bi bi-arrow-right"></i>
              </a>
            </div>

          </article>

          <!-- ==========================================
               RIGHT COLUMN: STICKY LUXURY SIDEBAR (4 cols on lg)
               1. "Find a Business Class Deal" Booking Form
               2. Related Travel Posts
               3. 24/7 Concierge Hotline Widget
               ========================================== -->
          <aside class="col-lg-4">
            <div class="blog-sidebar">
              
              <!-- ===== 1. SIDEBAR BOOKING FORM: "Find a Business Class Deal" ===== -->
              <div class="sidebar-booking-card" id="sidebarFlightSearch" data-aos="fade-left" data-aos-duration="700">
                
                <div class="sidebar-booking-header">
                  <span class="sidebar-badge-pill">
                    <i class="bi bi-stars"></i> Exclusive Consolidator Fares
                  </span>
                  <h3 class="sidebar-booking-title">Find a Business Class Deal</h3>
                  <p class="sidebar-booking-subtitle">Save up to 70% on unpublished lie-flat flight seats.</p>
                </div>

                <div class="sidebar-booking-body">
                  <form id="sidebarFlightForm" action="flight-results.php" method="GET">
                    
                    <!-- Trip Type Toggle Buttons -->
                    <div class="d-flex align-items-center justify-content-between mb-3 pb-1">
                      <div class="btn-group btn-group-sm w-100" role="group" aria-label="Trip type selector">
                        <button type="button" class="btn btn-sm btn-outline-primary active fw-semibold" id="sbBtnRoundTrip" data-trip="round-trip">
                          <i class="bi bi-arrow-left-right me-1"></i> Round Trip
                        </button>
                        <button type="button" class="btn btn-sm btn-outline-primary fw-semibold" id="sbBtnOneWay" data-trip="one-way">
                          <i class="bi bi-airplane-fill me-1"></i> One Way
                        </button>
                      </div>
                      <input type="hidden" name="trip_type" id="sbTripTypeInput" value="round-trip">
                    </div>

                    <!-- Direct Flights Toggle -->
                    <div class="form-check form-switch mb-3">
                      <input class="form-check-input custom-switch-input" type="checkbox" role="switch" id="sbDirectOnly" name="direct_only" value="1">
                      <label class="form-check-label fw-bold text-navy small" for="sbDirectOnly" style="font-size:0.8rem;">
                        Direct Flights Only
                      </label>
                    </div>

                    <!-- Origin & Destination with Swap Button -->
                    <div class="sb-route-swap-row mb-2">
                      
                      <!-- FROM -->
                      <div class="sb-field-group mb-2">
                        <div class="sb-input-box">
                          <span class="sb-input-label"><i class="bi bi-geo-alt-fill text-dark-red me-1"></i> From (Departure)</span>
                          <input type="text" class="sb-form-control" id="sbFromAirport" name="origin" placeholder="City or Airport (e.g. JFK)" value="New York (JFK)" required>
                        </div>
                      </div>

                      <!-- SWAP BUTTON -->
                      <button type="button" class="sb-btn-swap" id="sbBtnSwap" title="Swap origin and destination" aria-label="Swap airports">
                        <i class="bi bi-arrow-down-up"></i>
                      </button>

                      <!-- TO -->
                      <div class="sb-field-group mb-2">
                        <div class="sb-input-box">
                          <span class="sb-input-label"><i class="bi bi-geo-alt-fill text-primary me-1"></i> To (Destination)</span>
                          <input type="text" class="sb-form-control" id="sbToAirport" name="destination" placeholder="City or Airport (e.g. LHR)" value="London (LHR)" required>
                        </div>
                      </div>

                    </div>

                    <!-- Dates Row -->
                    <div class="row g-2 mb-2">
                      <!-- Departure Date -->
                      <div class="col-6">
                        <div class="sb-input-box">
                          <span class="sb-input-label"><i class="bi bi-calendar-event me-1"></i> Departure</span>
                          <input type="date" class="sb-form-control" id="sbDepartDate" name="depart_date" value="2026-11-20" required>
                        </div>
                      </div>
                      <!-- Return Date -->
                      <div class="col-6" id="sbReturnDateWrapper">
                        <div class="sb-input-box">
                          <span class="sb-input-label"><i class="bi bi-calendar-check me-1"></i> Return</span>
                          <input type="date" class="sb-form-control" id="sbReturnDate" name="return_date" value="2026-11-30">
                        </div>
                      </div>
                    </div>

                    <!-- Travelers Dropdown -->
                    <div class="sb-field-group mb-2">
                      <div class="sb-input-box dropdown">
                        <span class="sb-input-label"><i class="bi bi-people-fill me-1"></i> Travelers</span>
                        <div class="d-flex align-items-center justify-content-between cursor-pointer" data-bs-toggle="dropdown" aria-expanded="false" id="sbTravelersToggle">
                          <span id="sbTravelersDisplay" class="fw-bold text-navy small">1 Adult</span>
                          <i class="bi bi-chevron-down text-muted small"></i>
                        </div>
                        <input type="hidden" name="travelers" id="sbTravelersInput" value="1 Adult">
                        <ul class="dropdown-menu shadow-lg border-0 w-100 p-2" aria-labelledby="sbTravelersToggle">
                          <li><button type="button" class="dropdown-item sb-traveler-item active" data-val="1 Adult">1 Adult</button></li>
                          <li><button type="button" class="dropdown-item sb-traveler-item" data-val="2 Adults">2 Adults</button></li>
                          <li><button type="button" class="dropdown-item sb-traveler-item" data-val="3 Adults">3 Adults</button></li>
                          <li><button type="button" class="dropdown-item sb-traveler-item" data-val="4+ Adults / Group">4+ Adults / Group</button></li>
                          <li><button type="button" class="dropdown-item sb-traveler-item" data-val="Family (2 Adults, 2 Children)">Family (2 Adults, 2 Children)</button></li>
                        </ul>
                      </div>
                    </div>

                    <!-- Cabin Class Dropdown (Select triggers phone/email reveal) -->
                    <div class="sb-field-group mb-2">
                      <div class="sb-input-box dropdown">
                        <span class="sb-input-label"><i class="bi bi-gem text-warning me-1"></i> Cabin Class</span>
                        <div class="d-flex align-items-center justify-content-between cursor-pointer" data-bs-toggle="dropdown" aria-expanded="false" id="sbCabinToggle">
                          <span id="sbCabinDisplay" class="fw-bold text-navy small">Business Class</span>
                          <i class="bi bi-chevron-down text-muted small"></i>
                        </div>
                        <input type="hidden" name="cabin_class" id="sbCabinInput" value="business_class">
                        <ul class="dropdown-menu shadow-lg border-0 w-100 p-2" aria-labelledby="sbCabinToggle">
                          <li>
                            <button type="button" class="dropdown-item sb-cabin-item" data-val="economy">
                              <span class="fw-semibold">Economy/Coach</span>
                            </button>
                          </li>
                          <li>
                            <button type="button" class="dropdown-item sb-cabin-item" data-val="premium_economy">
                              <span class="fw-semibold">Premium Economy</span>
                            </button>
                          </li>
                          <li>
                            <button type="button" class="dropdown-item sb-cabin-item active" data-val="business_class">
                              <span class="fw-bold text-navy">Business Class (Lie-Flat)</span>
                            </button>
                          </li>
                          <li>
                            <button type="button" class="dropdown-item sb-cabin-item" data-val="first_class">
                              <span class="fw-bold text-navy">First Class Luxury</span>
                            </button>
                          </li>
                        </ul>
                      </div>
                    </div>

                    <!-- Dynamic Contact Email & Phone fields (revealed on premium/business/first) -->
                    <div id="sbDynamicContactFields">
                      <div class="sb-field-group mb-2">
                        <div class="sb-input-box">
                          <span class="sb-input-label"><i class="bi bi-envelope-fill me-1"></i> Email for Secret Quotes *</span>
                          <input type="email" class="sb-form-control" id="sbContactEmail" name="email" placeholder="you@company.com">
                        </div>
                      </div>
                      <div class="sb-field-group mb-3">
                        <div class="sb-input-box">
                          <span class="sb-input-label"><i class="bi bi-telephone-fill me-1"></i> Phone for Unpublished Rates *</span>
                          <input type="tel" class="sb-form-control" id="sbContactPhone" name="phone" placeholder="(555) 000-0000">
                        </div>
                      </div>
                    </div>

                    <!-- Search CTA Button -->
                    <button type="submit" class="btn-sidebar-search mt-1">
                      <i class="bi bi-search"></i>
                      <span>Search Business Class Deals</span>
                    </button>

                    <!-- Trust Strip -->
                    <div class="d-flex align-items-center justify-content-center gap-2 mt-2 pt-1 text-muted text-center" style="font-size: 0.72rem;">
                      <i class="bi bi-shield-check text-success"></i>
                      <span>Free Quote &bull; No Booking Fees &bull; 24/7 Desk</span>
                    </div>

                  </form>
                </div>
              </div>

              <!-- ===== 2. RELATED POSTS WIDGET ===== -->
              <div class="sidebar-widget-card" data-aos="fade-left" data-aos-duration="700" data-aos-delay="100">
                <h4 class="sidebar-widget-title">
                  <span>Related Articles</span>
                  <a href="blog.php" class="small fw-semibold text-dark-red text-decoration-none" style="font-size:0.8rem;">View All &rarr;</a>
                </h4>
                
                <div class="related-posts-list">
                  <?php foreach ($related_posts as $r_post): ?>
                    <a href="blog-inner.php?post=<?= urlencode($r_post['id']); ?>" class="related-post-item" title="<?= htmlspecialchars($r_post['title']); ?>">
                      <img src="<?= htmlspecialchars($r_post['image']); ?>" 
                           alt="<?= htmlspecialchars($r_post['title']); ?>" 
                           class="related-post-thumb" 
                           loading="lazy">
                      <div class="flex-grow-1 min-w-0">
                        <span class="badge bg-light text-navy border px-2 py-1 mb-1" style="font-size:0.68rem; font-weight:700;">
                          <?= htmlspecialchars($r_post['category']); ?>
                        </span>
                        <h5 class="related-post-title text-truncate-2">
                          <?= htmlspecialchars($r_post['title']); ?>
                        </h5>
                        <div class="related-post-meta">
                          <span><i class="bi bi-clock me-1 text-warning"></i><?= htmlspecialchars($r_post['read_time']); ?></span>
                          <span>&bull;</span>
                          <span><?= htmlspecialchars($r_post['date']); ?></span>
                        </div>
                      </div>
                    </a>
                  <?php endforeach; ?>
                </div>
              </div>

              <!-- ===== 3. CONCIERGE CALL-ONLY SAVINGS WIDGET ===== -->
              <div class="sidebar-concierge-card" data-aos="fade-left" data-aos-duration="700" data-aos-delay="150">
                <div class="concierge-avatar-icon">
                  <i class="bi bi-headset"></i>
                </div>
                <h4 class="fw-bold text-white mb-1" style="font-size:1.25rem;">Prefer Booking by Phone?</h4>
                <p class="text-white-50 small mb-3">
                  Airlines restrict our deepest discounts from online display. Call our certified agents to unlock up to $600 extra off today.
                </p>
                <a href="tel:+18337431225" class="btn-concierge-call">
                  <i class="bi bi-telephone-fill"></i>
                  <span>Call 1-833-743-1225</span>
                </a>
                <span class="d-block text-white-50 mt-2" style="font-size:0.7rem;">
                  Toll-Free &bull; Available 24 Hours &bull; 7 Days a Week
                </span>
              </div>

            </div>
          </aside>

        </div>
      </div>
    </section>

    <!-- ===== 4. CTA / WHY CHOOSE US SECTION ===== -->
    <?php include 'components/cta-section.php'; ?>

    <!-- ===== 5. VIP NEWSLETTER SUBSCRIBE CTA SECTION ===== -->
    <?php include 'components/newsletter-cta-section.php'; ?>

  </main>

  <!-- ===== 6. SITE FOOTER ===== -->
  <?php include 'components/footer.php'; ?>

  <!-- Bootstrap 5.3 Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- AOS JS -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

  <!-- Main Theme JS -->
  <script src="assets/js/main.js?v=<?= time(); ?>"></script>

  <!-- Interactive Sidebar Booking & Trip Type Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Initialize AOS
      if (typeof AOS !== 'undefined') {
        AOS.init({
          once: true,
          duration: 700,
          easing: 'ease-out-cubic'
        });
      }

      // 1. Sidebar Trip Type Toggle (Round Trip vs One Way)
      const btnRoundTrip = document.getElementById('sbBtnRoundTrip');
      const btnOneWay = document.getElementById('sbBtnOneWay');
      const tripTypeInput = document.getElementById('sbTripTypeInput');
      const returnDateWrapper = document.getElementById('sbReturnDateWrapper');

      if (btnRoundTrip && btnOneWay) {
        btnRoundTrip.addEventListener('click', function () {
          btnRoundTrip.classList.add('active');
          btnOneWay.classList.remove('active');
          tripTypeInput.value = 'round-trip';
          if (returnDateWrapper) returnDateWrapper.style.display = 'block';
        });

        btnOneWay.addEventListener('click', function () {
          btnOneWay.classList.add('active');
          btnRoundTrip.classList.remove('active');
          tripTypeInput.value = 'one-way';
          if (returnDateWrapper) returnDateWrapper.style.display = 'none';
        });
      }

      // 2. Sidebar Origin & Destination Swap
      const btnSwap = document.getElementById('sbBtnSwap');
      const fromAirport = document.getElementById('sbFromAirport');
      const toAirport = document.getElementById('sbToAirport');

      if (btnSwap && fromAirport && toAirport) {
        btnSwap.addEventListener('click', function () {
          const temp = fromAirport.value;
          fromAirport.value = toAirport.value;
          toAirport.value = temp;
        });
      }

      // 3. Sidebar Travelers Selector
      const travelerItems = document.querySelectorAll('.sb-traveler-item');
      const travelersDisplay = document.getElementById('sbTravelersDisplay');
      const travelersInput = document.getElementById('sbTravelersInput');

      travelerItems.forEach(item => {
        item.addEventListener('click', function () {
          const val = this.getAttribute('data-val');
          if (travelersDisplay) travelersDisplay.textContent = val;
          if (travelersInput) travelersInput.value = val;
          travelerItems.forEach(i => i.classList.remove('active'));
          this.classList.add('active');
        });
      });

      // 4. Sidebar Cabin Class & Dynamic Phone/Email Reveal
      const cabinItems = document.querySelectorAll('.sb-cabin-item');
      const cabinDisplay = document.getElementById('sbCabinDisplay');
      const cabinInput = document.getElementById('sbCabinInput');
      const dynamicContactFields = document.getElementById('sbDynamicContactFields');

      cabinItems.forEach(item => {
        item.addEventListener('click', function () {
          const val = this.getAttribute('data-val');
          const text = this.textContent.trim();
          if (cabinDisplay) cabinDisplay.textContent = text;
          if (cabinInput) cabinInput.value = val;

          cabinItems.forEach(i => i.classList.remove('active'));
          this.classList.add('active');

          // If Business or First or Premium, show email & phone inputs for private consolidator quotes
          if (dynamicContactFields) {
            if (val === 'economy') {
              dynamicContactFields.style.display = 'none';
            } else {
              dynamicContactFields.style.display = 'block';
            }
          }
        });
      });
    });
  </script>

</body>
</html>