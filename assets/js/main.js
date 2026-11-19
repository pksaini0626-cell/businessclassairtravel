/**
 * Main Application JavaScript
 * Includes:
 * - AOS animation initialization
 * - Custom Styled Dropdowns for Travelers & Cabin Class
 * - Dynamic Cabin Class selector logic (reveals Email & Phone for Premium/Business/First class)
 * - Airport swap toggle with rotation animation
 * - Round Trip / One Way trip type toggle
 * - Bootstrap Tooltips initialization
 */

document.addEventListener('DOMContentLoaded', function () {
  // 1. Initialize AOS (Animate On Scroll)
  if (typeof AOS !== 'undefined') {
    AOS.init({
      duration: 800,
      easing: 'ease-in-out',
      once: true,
      mirror: false,
      offset: 40
    });
  }

  // 2. Bootstrap tooltips auto-initialization
  if (typeof bootstrap !== 'undefined' && bootstrap.Tooltip) {
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl);
    });
  }

  // Hero Background Video Playback Guarantee (handles mobile power-saving policies)
  const heroVideo = document.querySelector('.hero-bg-video');
  if (heroVideo) {
    heroVideo.muted = true;
    const playPromise = heroVideo.play();
    if (playPromise !== undefined) {
      playPromise.catch(function () {
        // Autoplay policy prevented playback, fallback poster is visible
      });
    }
  }

  // =========================================================================
  // 3. CUSTOM STYLED SELECT DROPDOWNS (Travelers & Cabin Class)
  // =========================================================================
  const customSelectBoxes = document.querySelectorAll('.custom-select-box');

  customSelectBoxes.forEach(function (box) {
    const displayEl = box.querySelector('.custom-select-value span');
    const hiddenInput = box.querySelector('input[type="hidden"]');
    const items = box.querySelectorAll('.custom-select-item');
    const toggleEl = box.querySelector('[data-bs-toggle="dropdown"]');

    items.forEach(function (item) {
      item.addEventListener('click', function (e) {
        e.preventDefault();

        // Remove active state from all sibling items
        items.forEach(function (el) {
          el.classList.remove('active');
        });
        this.classList.add('active');

        // Extract value and label
        const value = this.getAttribute('data-value');
        let label = '';
        const labelEl = this.querySelector('.fw-bold, .fw-semibold, span:not(.check-icon)');
        if (labelEl) {
          label = labelEl.textContent.trim();
        } else {
          label = this.textContent.trim();
        }

        // Update display text and hidden input
        if (displayEl) {
          displayEl.textContent = label;
        }
        if (hiddenInput) {
          hiddenInput.value = value;
          // Trigger change event to fire dynamic logic
          hiddenInput.dispatchEvent(new Event('change', { bubbles: true }));
        }

        // Close dropdown menu via Bootstrap API if available
        if (toggleEl && typeof bootstrap !== 'undefined' && bootstrap.Dropdown) {
          const bsDropdown = bootstrap.Dropdown.getInstance(toggleEl);
          if (bsDropdown) {
            bsDropdown.hide();
          }
        }
      });
    });
  });

  // =========================================================================
  // 4. CABIN CLASS & DYNAMIC EMAIL/PHONE REVEAL
  // =========================================================================
  const cabinClassSelect = document.getElementById('cabinClassSelect');
  const premiumCabinFields = document.getElementById('premiumCabinFields');
  const contactEmail = document.getElementById('contactEmail');
  const contactPhone = document.getElementById('contactPhone');
  const cabinClassBox = document.getElementById('cabinClassBox');
  const emailBox = document.getElementById('emailBox');
  const phoneBox = document.getElementById('phoneBox');
  const emailCol = document.getElementById('emailCol');
  const phoneCol = document.getElementById('phoneCol');
  const travelersCol = document.getElementById('travelersCol');
  const cabinClassCol = document.getElementById('cabinClassCol');
  const flightSearchForm = document.getElementById('flightSearchForm');

  // Phone number input auto-formatter (e.g. 123-456-7890)
  if (contactPhone) {
    contactPhone.addEventListener('input', function (e) {
      let x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
      if (x && !e.target.value.startsWith('+')) {
        e.target.value = !x[2] ? x[1] : x[1] + '-' + x[2] + (x[3] ? '-' + x[3] : '');
      }
    });
  }

  // Cabin Class Change Listener: Reveals Email & Phone on Cabin Selection
  if (cabinClassSelect) {
    const premiumTiers = ['premium_economy', 'business_class', 'first_class'];

    cabinClassSelect.addEventListener('change', function () {
      const selectedValue = this.value;

      if (selectedValue && selectedValue !== '') {
        // 1. Reveal Email and Phone fields
        if (emailCol) {
          emailCol.classList.remove('d-none');
          emailCol.classList.add('animate-field-in');
        }
        if (phoneCol) {
          phoneCol.classList.remove('d-none');
          phoneCol.classList.add('animate-field-in');
        }

        // 2. Adjust Travelers and Cabin Class columns to 3 cols on large screens
        if (travelersCol) {
          travelersCol.classList.remove('col-lg-6');
          travelersCol.classList.add('col-lg-3');
        }
        if (cabinClassCol) {
          cabinClassCol.classList.remove('col-lg-6');
          cabinClassCol.classList.add('col-lg-3');
        }

        // 3. Set required attributes
        if (contactEmail) contactEmail.setAttribute('required', 'required');
        if (contactPhone) contactPhone.setAttribute('required', 'required');

        // 4. Premium cabin styling highlight
        if (premiumTiers.includes(selectedValue)) {
          if (cabinClassBox) cabinClassBox.classList.add('is-active-premium');
          if (emailBox) emailBox.classList.add('highlight-premium');
          if (phoneBox) phoneBox.classList.add('highlight-premium');
          if (premiumCabinFields) premiumCabinFields.classList.add('is-expanded');
        } else {
          if (cabinClassBox) cabinClassBox.classList.remove('is-active-premium');
          if (emailBox) emailBox.classList.remove('highlight-premium');
          if (phoneBox) phoneBox.classList.remove('highlight-premium');
          if (premiumCabinFields) premiumCabinFields.classList.remove('is-expanded');
        }

        // Refresh AOS coordinates
        setTimeout(function () {
          if (typeof AOS !== 'undefined') {
            AOS.refresh();
          }
        }, 200);

      } else {
        // Reset: Hide Email and Phone fields
        if (emailCol) {
          emailCol.classList.add('d-none');
          emailCol.classList.remove('animate-field-in');
        }
        if (phoneCol) {
          phoneCol.classList.add('d-none');
          phoneCol.classList.remove('animate-field-in');
        }

        // Expand Travelers and Cabin Class back to 6 cols
        if (travelersCol) {
          travelersCol.classList.remove('col-lg-3');
          travelersCol.classList.add('col-lg-6');
        }
        if (cabinClassCol) {
          cabinClassCol.classList.remove('col-lg-3');
          cabinClassCol.classList.add('col-lg-6');
        }

        // Remove required attributes
        if (contactEmail) contactEmail.removeAttribute('required');
        if (contactPhone) contactPhone.removeAttribute('required');

        if (cabinClassBox) cabinClassBox.classList.remove('is-active-premium');
        if (emailBox) emailBox.classList.remove('highlight-premium');
        if (phoneBox) phoneBox.classList.remove('highlight-premium');
        if (premiumCabinFields) premiumCabinFields.classList.remove('is-expanded');

        setTimeout(function () {
          if (typeof AOS !== 'undefined') {
            AOS.refresh();
          }
        }, 200);
      }
    });
  }

  // Form Submission Validation & Animated Loader Navigation
  if (flightSearchForm) {
    flightSearchForm.addEventListener('submit', function (e) {
      e.preventDefault();

      const fromVal = document.getElementById('fromAirport') ? document.getElementById('fromAirport').value.trim() : 'New York (JFK)';
      const toVal = document.getElementById('toAirport') ? document.getElementById('toAirport').value.trim() : 'London (LGW)';

      const loaderOverlay = document.getElementById('flightSearchLoaderOverlay');
      const loaderRoute = document.getElementById('loaderRouteDisplay');
      const progressFill = document.getElementById('loaderProgressFill');
      const stepText = document.getElementById('loaderStepText');

      if (loaderOverlay) {
        loaderOverlay.classList.remove('d-none');
        if (loaderRoute) {
          loaderRoute.innerHTML = `<span class="loader-origin">${fromVal || 'New York (JFK)'}</span> <i class="bi bi-arrow-right mx-2 text-danger"></i> <span class="loader-dest">${toVal || 'London (LGW)'}</span>`;
        }

        // Animate progress bar & scanning stages
        if (progressFill) progressFill.style.width = '25%';

        setTimeout(() => {
          if (progressFill) progressFill.style.width = '60%';
          if (stepText) stepText.textContent = 'Scanning 60+ partner airlines (Emirates, Qatar, BA, Virgin)...';
        }, 500);

        setTimeout(() => {
          if (progressFill) progressFill.style.width = '88%';
          if (stepText) stepText.textContent = 'Unlocking unpublished consolidator inventory...';
        }, 1000);

        setTimeout(() => {
          if (progressFill) progressFill.style.width = '100%';
          if (stepText) stepText.textContent = 'Found exclusive 31% savings! Preparing your itinerary...';
        }, 1450);

        setTimeout(() => {
          window.location.href = 'flight-results.php';
        }, 1800);

      } else {
        window.location.href = 'flight-results.php';
      }
    });
  }

  // =========================================================================
  // 5. AIRPORT SWAP LOGIC (From <-> To)
  // =========================================================================
  const btnSwapAirports = document.getElementById('btnSwapAirports');
  const fromAirport = document.getElementById('fromAirport');
  const toAirport = document.getElementById('toAirport');

  if (btnSwapAirports && fromAirport && toAirport) {
    btnSwapAirports.addEventListener('click', function () {
      // Rotate animation
      this.classList.toggle('rotated');

      // Swap values smoothly
      const tempVal = fromAirport.value;
      fromAirport.value = toAirport.value;
      toAirport.value = tempVal;

      // Temporary pulse feedback
      fromAirport.classList.add('field-swapped');
      toAirport.classList.add('field-swapped');
      setTimeout(function () {
        fromAirport.classList.remove('field-swapped');
        toAirport.classList.remove('field-swapped');
      }, 350);
    });
  }

  // =========================================================================
  // 6. TRIP TYPE SELECTOR (Round Trip vs One Way)
  // =========================================================================
  const btnRoundTrip = document.getElementById('btnRoundTrip');
  const btnOneWay = document.getElementById('btnOneWay');
  const tripTypeInput = document.getElementById('tripTypeInput');
  const returnDateCol = document.getElementById('returnDateCol');
  const returnDateInput = document.getElementById('returnDate');

  if (btnRoundTrip && btnOneWay && tripTypeInput) {
    btnRoundTrip.addEventListener('click', function () {
      btnRoundTrip.classList.add('active');
      btnOneWay.classList.remove('active');
      tripTypeInput.value = 'round-trip';

      if (returnDateCol) {
        returnDateCol.classList.remove('date-disabled');
      }
      if (returnDateInput) {
        returnDateInput.removeAttribute('disabled');
      }
    });

    btnOneWay.addEventListener('click', function () {
      btnOneWay.classList.add('active');
      btnRoundTrip.classList.remove('active');
      tripTypeInput.value = 'one-way';

      if (returnDateCol) {
        returnDateCol.classList.add('date-disabled');
      }
      if (returnDateInput) {
        returnDateInput.setAttribute('disabled', 'disabled');
      }
    });
  }

  // =========================================================================
  // 6b. MODAL TRIP TYPE, CABIN & SWAP LOGIC (Mobile Flight Booking Modal)
  // =========================================================================
  const modalCabinClassSelect = document.getElementById('modalCabinClassSelect');
  const modalContactEmail = document.getElementById('modalContactEmail');
  const modalContactPhone = document.getElementById('modalContactPhone');
  const modalCabinClassBox = document.getElementById('modalCabinClassBox');
  const modalEmailBox = document.getElementById('modalEmailBox');
  const modalPhoneBox = document.getElementById('modalPhoneBox');
  const modalEmailCol = document.getElementById('modalEmailCol');
  const modalPhoneCol = document.getElementById('modalPhoneCol');
  const modalFlightSearchForm = document.getElementById('modalFlightSearchForm');

  if (modalContactPhone) {
    modalContactPhone.addEventListener('input', function (e) {
      let x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
      if (x && !e.target.value.startsWith('+')) {
        e.target.value = !x[2] ? x[1] : x[1] + '-' + x[2] + (x[3] ? '-' + x[3] : '');
      }
    });
  }

  if (modalCabinClassSelect) {
    const premiumTiers = ['premium_economy', 'business_class', 'first_class'];

    modalCabinClassSelect.addEventListener('change', function () {
      const selectedValue = this.value;

      if (selectedValue && selectedValue !== '') {
        if (modalEmailCol) {
          modalEmailCol.classList.remove('d-none');
          modalEmailCol.classList.add('animate-field-in');
        }
        if (modalPhoneCol) {
          modalPhoneCol.classList.remove('d-none');
          modalPhoneCol.classList.add('animate-field-in');
        }

        if (modalContactEmail) modalContactEmail.setAttribute('required', 'required');
        if (modalContactPhone) modalContactPhone.setAttribute('required', 'required');

        if (premiumTiers.includes(selectedValue)) {
          if (modalCabinClassBox) modalCabinClassBox.classList.add('is-active-premium');
          if (modalEmailBox) modalEmailBox.classList.add('highlight-premium');
          if (modalPhoneBox) modalPhoneBox.classList.add('highlight-premium');
        } else {
          if (modalCabinClassBox) modalCabinClassBox.classList.remove('is-active-premium');
          if (modalEmailBox) modalEmailBox.classList.remove('highlight-premium');
          if (modalPhoneBox) modalPhoneBox.classList.remove('highlight-premium');
        }
      } else {
        if (modalEmailCol) {
          modalEmailCol.classList.add('d-none');
          modalEmailCol.classList.remove('animate-field-in');
        }
        if (modalPhoneCol) {
          modalPhoneCol.classList.add('d-none');
          modalPhoneCol.classList.remove('animate-field-in');
        }

        if (modalContactEmail) modalContactEmail.removeAttribute('required');
        if (modalContactPhone) modalContactPhone.removeAttribute('required');

        if (modalCabinClassBox) modalCabinClassBox.classList.remove('is-active-premium');
        if (modalEmailBox) modalEmailBox.classList.remove('highlight-premium');
        if (modalPhoneBox) modalPhoneBox.classList.remove('highlight-premium');
      }
    });
  }

  // Modal Swap Airports
  const modalBtnSwapAirports = document.getElementById('modalBtnSwapAirports');
  const modalFromAirport = document.getElementById('modalFromAirport');
  const modalToAirport = document.getElementById('modalToAirport');

  if (modalBtnSwapAirports && modalFromAirport && modalToAirport) {
    modalBtnSwapAirports.addEventListener('click', function () {
      this.classList.toggle('rotated');
      const tempVal = modalFromAirport.value;
      modalFromAirport.value = modalToAirport.value;
      modalToAirport.value = tempVal;

      modalFromAirport.classList.add('field-swapped');
      modalToAirport.classList.add('field-swapped');
      setTimeout(function () {
        modalFromAirport.classList.remove('field-swapped');
        modalToAirport.classList.remove('field-swapped');
      }, 350);
    });
  }

  // Modal Trip Type Toggle
  const modalBtnRoundTrip = document.getElementById('modalBtnRoundTrip');
  const modalBtnOneWay = document.getElementById('modalBtnOneWay');
  const modalTripTypeInput = document.getElementById('modalTripTypeInput');
  const modalReturnDateCol = document.getElementById('modalReturnDateCol');
  const modalReturnDateInput = document.getElementById('modalReturnDate');

  if (modalBtnRoundTrip && modalBtnOneWay && modalTripTypeInput) {
    modalBtnRoundTrip.addEventListener('click', function () {
      modalBtnRoundTrip.classList.add('active');
      modalBtnOneWay.classList.remove('active');
      modalTripTypeInput.value = 'round-trip';

      if (modalReturnDateCol) {
        modalReturnDateCol.classList.remove('date-disabled');
      }
      if (modalReturnDateInput) {
        modalReturnDateInput.removeAttribute('disabled');
      }
    });

    modalBtnOneWay.addEventListener('click', function () {
      modalBtnOneWay.classList.add('active');
      modalBtnRoundTrip.classList.remove('active');
      modalTripTypeInput.value = 'one-way';

      if (modalReturnDateCol) {
        modalReturnDateCol.classList.add('date-disabled');
      }
      if (modalReturnDateInput) {
        modalReturnDateInput.setAttribute('disabled', 'disabled');
      }
    });
  }

  // Modal Form Submission with Animated Loader
  if (modalFlightSearchForm) {
    modalFlightSearchForm.addEventListener('submit', function (e) {
      e.preventDefault();

      // Dismiss modal if open
      const modalEl = document.getElementById('flightBookingModal');
      if (modalEl && typeof bootstrap !== 'undefined' && bootstrap.Modal) {
        const modalInstance = bootstrap.Modal.getInstance(modalEl);
        if (modalInstance) {
          modalInstance.hide();
        }
      }

      const fromVal = modalFromAirport ? modalFromAirport.value.trim() : 'New York (JFK)';
      const toVal = modalToAirport ? modalToAirport.value.trim() : 'London (LGW)';

      const loaderOverlay = document.getElementById('flightSearchLoaderOverlay');
      const loaderRoute = document.getElementById('loaderRouteDisplay');
      const progressFill = document.getElementById('loaderProgressFill');
      const stepText = document.getElementById('loaderStepText');

      if (loaderOverlay) {
        loaderOverlay.classList.remove('d-none');
        if (loaderRoute) {
          loaderRoute.innerHTML = `<span class="loader-origin">${fromVal || 'New York (JFK)'}</span> <i class="bi bi-arrow-right mx-2 text-danger"></i> <span class="loader-dest">${toVal || 'London (LGW)'}</span>`;
        }

        if (progressFill) progressFill.style.width = '25%';

        setTimeout(() => {
          if (progressFill) progressFill.style.width = '60%';
          if (stepText) stepText.textContent = 'Scanning 60+ partner airlines (Emirates, Qatar, BA, Virgin)...';
        }, 500);

        setTimeout(() => {
          if (progressFill) progressFill.style.width = '88%';
          if (stepText) stepText.textContent = 'Unlocking unpublished consolidator inventory...';
        }, 1000);

        setTimeout(() => {
          if (progressFill) progressFill.style.width = '100%';
          if (stepText) stepText.textContent = 'Found exclusive 31% savings! Preparing your itinerary...';
        }, 1450);

        setTimeout(() => {
          window.location.href = 'flight-results.php';
        }, 1800);

      } else {
        window.location.href = 'flight-results.php';
      }
    });
  }

  // =========================================================================
  // 7. POPULAR DESTINATIONS LOOP CAROUSEL (Auto-run, Pause on Hover, Clickable)
  // =========================================================================
  const destSwiperEl = document.querySelector('.destinations-swiper');
  if (destSwiperEl && typeof Swiper !== 'undefined') {
    const destinationsSwiper = new Swiper('.destinations-swiper', {
      slidesPerView: 1.4,
      spaceBetween: 14,
      loop: true,
      speed: 850,
      grabCursor: true,
      watchSlidesProgress: true,
      autoplay: {
        delay: 2400,
        disableOnInteraction: false,
        pauseOnMouseEnter: true, // Pauses immediately on mouse hover
      },
      breakpoints: {
        480: {
          slidesPerView: 2.2,
          spaceBetween: 16,
        },
        768: {
          slidesPerView: 3.4,
          spaceBetween: 18,
        },
        992: {
          slidesPerView: 4.8,
          spaceBetween: 20,
        },
        1200: {
          slidesPerView: 6, // 6 slides side-by-side matching the design
          spaceBetween: 20,
        },
      },
      on: {
        init: function () {
          if (typeof AOS !== 'undefined') {
            setTimeout(function () { AOS.refresh(); }, 150);
          }
        }
      }
    });

    // Explicit hover pause & resume listeners on wrapper for robust cross-browser guarantee
    const carouselWrapper = document.querySelector('.destinations-carousel-wrapper');
    if (carouselWrapper) {
      carouselWrapper.addEventListener('mouseenter', function () {
        if (destinationsSwiper.autoplay && destinationsSwiper.autoplay.running) {
          destinationsSwiper.autoplay.stop();
        }
      });

      carouselWrapper.addEventListener('mouseleave', function () {
        if (destinationsSwiper.autoplay && !destinationsSwiper.autoplay.running) {
          destinationsSwiper.autoplay.start();
        }
      });
    }

    // Clickable Destination Cards & Links: pre-fill Search TO Destination & scroll smoothly
    const destinationCards = document.querySelectorAll('.destination-card, .popular-dest-link, .popular-business-dest-link');
    const toAirportInput = document.getElementById('toAirport');
    const heroSection = document.getElementById('hero');

    destinationCards.forEach(function (card) {
      card.addEventListener('click', function (e) {
        const airport = this.getAttribute('data-airport') || this.getAttribute('data-city');
        if (toAirportInput && airport) {
          e.preventDefault();
          toAirportInput.value = airport;

          // Flash highlight the input box
          const parentBox = toAirportInput.closest('.search-input-box');
          if (parentBox) {
            parentBox.classList.add('input-highlight-flash');
            setTimeout(function () {
              parentBox.classList.remove('input-highlight-flash');
            }, 1400);
          }

          // Smooth scroll to hero search card
          if (heroSection) {
            heroSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
          }
          toAirportInput.focus();
        }
      });
    });
  }

  // =========================================================================
  // 8. FLIGHT DEALS CARDS INTERACTION
  // =========================================================================
  const flightDealCards = document.querySelectorAll('.flight-deal-card');
  const toAirportInput = document.getElementById('toAirport');
  const heroSection = document.getElementById('hero');

  flightDealCards.forEach(function (card) {
    card.addEventListener('click', function (e) {
      const destination = this.getAttribute('data-destination') || this.getAttribute('data-city');
      if (toAirportInput && destination && this.getAttribute('href') === '#hero') {
        e.preventDefault();
        toAirportInput.value = destination;

        // Flash highlight input
        const parentBox = toAirportInput.closest('.search-input-box');
        if (parentBox) {
          parentBox.classList.add('input-highlight-flash');
          setTimeout(function () {
            parentBox.classList.remove('input-highlight-flash');
          }, 1400);
        }

        if (heroSection) {
          heroSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
        toAirportInput.focus();
      }
    });
  });

  // =========================================================================
  // 9. HIGH-PERFORMANCE SCROLL REVEAL (IntersectionObserver)
  // Fixes AOS dynamic offset calculation issues on initial page loads
  // =========================================================================
  const revealCols = document.querySelectorAll('.scroll-reveal-col');
  if (revealCols.length > 0) {
    if ('IntersectionObserver' in window) {
      const revealObserver = new IntersectionObserver(function (entries, observer) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-revealed');
            observer.unobserve(entry.target);
          }
        });
      }, {
        root: null,
        rootMargin: '0px 0px -30px 0px',
        threshold: 0.08
      });

      revealCols.forEach(function (col) {
        revealObserver.observe(col);
      });
    } else {
      // Fallback for browsers without IntersectionObserver
      revealCols.forEach(function (col) {
        col.classList.add('is-revealed');
      });
    }

    // Safety Timeout: Guarantees all cards are 100% visible regardless of scroll timing
    setTimeout(function () {
      revealCols.forEach(function (col) {
        col.classList.add('is-revealed');
      });
    }, 1200);
  }

  // =========================================================================
  // 10. TESTIMONIAL VERTICAL SWIPER CAROUSEL
  // =========================================================================
  const testimonialSwiperEl = document.querySelector('.testimonial-vertical-swiper');
  if (testimonialSwiperEl && typeof Swiper !== 'undefined') {
    const testimonialSwiper = new Swiper(testimonialSwiperEl, {
      direction: 'vertical',
      loop: true,
      slidesPerView: 1,
      spaceBetween: 14,
      speed: 600,
      autoHeight: false,
      grabCursor: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true
      },
      navigation: {
        nextEl: '.testimonial-nav-next',
        prevEl: '.testimonial-nav-prev',
      },
      mousewheel: {
        forceToAxis: true,
        sensitivity: 0.8,
        releaseOnEdges: true
      },
      keyboard: {
        enabled: true,
        onlyInViewport: true
      }
    });
  }

  // =========================================================================
  // 11. BLOG / TRAVEL INSIGHTS SWIPER CAROUSEL
  // 3 blogs on large screen, 2 on tablet, 1 on mobile
  // =========================================================================
  const blogSwiperEl = document.querySelector('.blog-insights-swiper');
  if (blogSwiperEl && typeof Swiper !== 'undefined') {
    new Swiper(blogSwiperEl, {
      slidesPerView: 1,
      spaceBetween: 16,
      speed: 600,
      loop: false,
      grabCursor: true,
      navigation: {
        nextEl: '.blog-nav-next',
        prevEl: '.blog-nav-prev',
      },
      breakpoints: {
        // Mobile screen: 1 blog
        576: {
          slidesPerView: 1,
          spaceBetween: 18,
        },
        // Tablet screen: 2 blogs
        768: {
          slidesPerView: 2,
          spaceBetween: 22,
        },
        // Large screen: 3 blogs
        1024: {
          slidesPerView: 3,
          spaceBetween: 28,
        }
      }
    });
  }

  // =========================================================================
  // 12. PREMIER DESTINATIONS SWIPER CAROUSEL (Auto-run, Hover Pause, No Arrows/Dots)
  // =========================================================================
  const premierSwiperEl = document.querySelector('.premier-destinations-swiper');
  if (premierSwiperEl && typeof Swiper !== 'undefined') {
    const premierSwiper = new Swiper('.premier-destinations-swiper', {
      slidesPerView: 1.25,
      spaceBetween: 16,
      loop: true,
      speed: 800,
      grabCursor: true,
      watchSlidesProgress: true,
      autoplay: {
        delay: 2400,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },
      breakpoints: {
        480: {
          slidesPerView: 2.15,
          spaceBetween: 18,
        },
        768: {
          slidesPerView: 3.15,
          spaceBetween: 20,
        },
        992: {
          slidesPerView: 3.65,
          spaceBetween: 22,
        },
        1200: {
          slidesPerView: 4, // Exactly 4 cards visible side-by-side as shown in screenshot
          spaceBetween: 24,
        },
      },
      on: {
        init: function () {
          if (typeof AOS !== 'undefined') {
            setTimeout(function () { AOS.refresh(); }, 150);
          }
        }
      }
    });

    // Explicit hover pause & resume on carousel wrapper for bulletproof cross-browser support
    const premierCarouselWrapper = document.querySelector('.premier-destinations-carousel-wrapper');
    if (premierCarouselWrapper) {
      premierCarouselWrapper.addEventListener('mouseenter', function () {
        if (premierSwiper.autoplay && premierSwiper.autoplay.running) {
          premierSwiper.autoplay.stop();
        }
      });

      premierCarouselWrapper.addEventListener('mouseleave', function () {
        if (premierSwiper.autoplay && !premierSwiper.autoplay.running) {
          premierSwiper.autoplay.start();
        }
      });
    }
  }

  // =========================================================================
  // 12. POPULAR BUSINESS CLASS DESTINATIONS (Mobile View More / View Less Toggle)
  // =========================================================================
  const popularDestViewMoreBtn = document.getElementById('popularDestViewMoreBtn');
  const popularDestGrid = document.getElementById('popularBusinessDestGrid');

  if (popularDestViewMoreBtn && popularDestGrid) {
    popularDestViewMoreBtn.addEventListener('click', function () {
      const isExpanded = popularDestGrid.classList.toggle('show-all');
      popularDestViewMoreBtn.setAttribute('aria-expanded', isExpanded ? 'true' : 'false');

      const btnText = popularDestViewMoreBtn.querySelector('.btn-text');
      const btnIcon = popularDestViewMoreBtn.querySelector('i');

      if (isExpanded) {
        if (btnText) btnText.textContent = 'View Less';
        if (btnIcon) {
          btnIcon.classList.remove('bi-chevron-down');
          btnIcon.classList.add('bi-chevron-up');
        }
        if (typeof AOS !== 'undefined') {
          setTimeout(function () { AOS.refresh(); }, 150);
        }
      } else {
        if (btnText) btnText.textContent = 'View More Destinations';
        if (btnIcon) {
          btnIcon.classList.remove('bi-chevron-up');
          btnIcon.classList.add('bi-chevron-down');
        }
        // Smoothly scroll back to section header when collapsing on mobile
        const sectionEl = document.getElementById('popular-business-destinations');
        if (sectionEl) {
          sectionEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      }
    });
  }

  // =========================================================================
  // 13. NEWSLETTER SUBSCRIBE CTA FORM (Interactive Submission & Animation)
  // =========================================================================
  const newsletterForm = document.getElementById('newsletterCtaForm');
  const newsletterEmail = document.getElementById('newsletterCtaEmail');
  const newsletterSubmitBtn = document.getElementById('newsletterCtaSubmitBtn');
  const newsletterFeedback = document.getElementById('newsletterCtaFeedback');

  if (newsletterForm && newsletterEmail && newsletterSubmitBtn && newsletterFeedback) {
    newsletterForm.addEventListener('submit', function (e) {
      e.preventDefault();
      const emailVal = newsletterEmail.value.trim();

      // Simple email validation regex
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailVal || !emailRegex.test(emailVal)) {
        newsletterFeedback.className = 'newsletter-feedback-alert is-error';
        newsletterFeedback.innerHTML = '<i class="bi bi-exclamation-circle-fill me-2"></i> Please enter a valid email address.';
        newsletterEmail.focus();
        return;
      }

      // Button loading state
      const origBtnHtml = newsletterSubmitBtn.innerHTML;
      newsletterSubmitBtn.disabled = true;
      newsletterSubmitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Subscribing...';
      newsletterFeedback.className = 'newsletter-feedback-alert';
      newsletterFeedback.innerHTML = '';

      // Simulate network request
      setTimeout(function () {
        newsletterSubmitBtn.disabled = false;
        newsletterSubmitBtn.innerHTML = '<i class="bi bi-check-lg me-1"></i> Subscribed!';
        newsletterEmail.value = '';

        newsletterFeedback.className = 'newsletter-feedback-alert is-success';
        newsletterFeedback.innerHTML = '<i class="bi bi-patch-check-fill text-success me-2 fs-5"></i> <strong>You are subscribed!</strong> Check your email for your exclusive welcome voucher & unpublished flight deals.';

        // Revert button text after 4 seconds
        setTimeout(function () {
          newsletterSubmitBtn.innerHTML = origBtnHtml;
        }, 4000);
      }, 700);
    });
  }
});

// Refresh AOS and reveal in-viewport cards once all images & stylesheets are fully loaded
window.addEventListener('load', function () {
  if (typeof AOS !== 'undefined') {
    AOS.refreshHard();
  }

  // Check any scroll-reveal cards already in viewport
  const revealCols = document.querySelectorAll('.scroll-reveal-col:not(.is-revealed)');
  revealCols.forEach(function (col) {
    const rect = col.getBoundingClientRect();
    if (rect.top < window.innerHeight && rect.bottom >= 0) {
      col.classList.add('is-revealed');
    }
  });
});
