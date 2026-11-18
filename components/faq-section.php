<?php
/**
 * FAQ Section Component
 * 
 * Features:
 * - Clean accordion-style FAQ layout using Bootstrap 5 Accordion
 * - Styled to match the luxury travel brand (Navy headings, dark-red accents)
 * - Relevant questions about business/first class travel bookings
 * - Fully responsive across all devices
 */
?>
<!-- ===== FAQ SECTION ===== -->
<section class="faq-section py-5" id="faqs">
  <div class="container-xl px-3 px-lg-4">

    <!-- Section Header -->
    <div class="text-center mb-5" data-aos="fade-up">
      <span class="faq-section-badge d-inline-flex align-items-center gap-2 mb-3">
        <i class="bi bi-question-circle-fill"></i>
        <span>Got Questions?</span>
      </span>
      <h2 class="faq-section-title">Frequently Asked Questions</h2>
      <p class="faq-section-subtitle mx-auto">Everything you need to know about booking premium flights with Business Class Air Travel.</p>
    </div>

    <!-- FAQ Accordion -->
    <div class="row justify-content-center">
      <div class="col-lg-9 col-xl-8" data-aos="fade-up" data-aos-delay="100">
        <div class="accordion faq-accordion" id="faqAccordion">

          <!-- FAQ 1 -->
          <div class="accordion-item faq-item">
            <h2 class="accordion-header">
              <button class="accordion-button faq-question" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                <i class="bi bi-airplane-engines faq-icon me-3"></i>
                How do you offer such low prices on business and first class flights?
              </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
              <div class="accordion-body faq-answer">
                We leverage long-standing relationships with major airlines, consolidator fares, and bulk purchasing power built over 16+ years in the industry. Our expert travel consultants negotiate exclusive unpublished fares that aren't available on public booking sites, allowing us to pass savings of up to 70% directly to our customers.
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="accordion-item faq-item">
            <h2 class="accordion-header">
              <button class="accordion-button faq-question collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                <i class="bi bi-shield-check faq-icon me-3"></i>
                Is it safe to book through Business Class Air Travel?
              </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body faq-answer">
                Absolutely. We are an ASTA (American Society of Travel Advisors) certified partner and fully IATA accredited. Your booking is made directly with the airline — we simply secure a better rate. All transactions are protected with industry-standard encryption and secure payment processing.
              </div>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="accordion-item faq-item">
            <h2 class="accordion-header">
              <button class="accordion-button faq-question collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                <i class="bi bi-telephone-outbound faq-icon me-3"></i>
                Why should I call instead of booking online?
              </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body faq-answer">
                Many of our best business and first class deals are phone-exclusive and cannot be displayed online due to airline agreements. When you call <strong>1-833-743-1225</strong>, our travel experts can access unpublished fares, customize your itinerary, arrange special requests like seat preferences or meal choices, and often find better routing options that automated systems miss.
              </div>
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="accordion-item faq-item">
            <h2 class="accordion-header">
              <button class="accordion-button faq-question collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                <i class="bi bi-arrow-repeat faq-icon me-3"></i>
                Can I change or cancel my booking?
              </button>
            </h2>
            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body faq-answer">
                Yes. Changes and cancellations are subject to the fare rules of the specific ticket purchased and the airline's own policies. Our team will walk you through all the terms before you confirm your booking, so there are no surprises. Many of our fares include flexible change options. Contact us at <strong>1-833-743-1225</strong> for assistance with any modifications.
              </div>
            </div>
          </div>

          <!-- FAQ 5 -->
          <div class="accordion-item faq-item">
            <h2 class="accordion-header">
              <button class="accordion-button faq-question collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                <i class="bi bi-credit-card faq-icon me-3"></i>
                What payment methods do you accept?
              </button>
            </h2>
            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body faq-answer">
                We accept all major credit cards (Visa, MasterCard, American Express, Discover), debit cards, and bank wire transfers. All payments are processed through secure, PCI-compliant payment gateways to ensure your financial information is fully protected.
              </div>
            </div>
          </div>

          <!-- FAQ 6 -->
          <div class="accordion-item faq-item">
            <h2 class="accordion-header">
              <button class="accordion-button faq-question collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                <i class="bi bi-clock-history faq-icon me-3"></i>
                How far in advance should I book for the best deals?
              </button>
            </h2>
            <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body faq-answer">
                For business and first class, we generally recommend booking 2–8 weeks in advance for the best combination of price and availability. However, we also specialize in last-minute premium cabin deals. The earlier you call, the more options we can offer — but don't hesitate to reach out even for travel within the next few days.
              </div>
            </div>
          </div>

          <!-- FAQ 7 -->
          <div class="accordion-item faq-item">
            <h2 class="accordion-header">
              <button class="accordion-button faq-question collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7" aria-expanded="false" aria-controls="faq7">
                <i class="bi bi-headset faq-icon me-3"></i>
                What if I need help during my trip?
              </button>
            </h2>
            <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body faq-answer">
                Our 24/7 live travel desk is always available. Whether you need to rebook due to a flight delay, upgrade your cabin, or handle any travel emergency, simply call <strong>1-833-743-1225</strong> and one of our dedicated travel consultants will assist you immediately — day or night.
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Bottom CTA -->
    <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="200">
      <p class="faq-cta-text mb-3">Still have questions? Our travel experts are just a call away.</p>
      <a href="tel:+18337431225" class="btn btn-faq-call d-inline-flex align-items-center gap-2">
        <i class="bi bi-telephone-fill"></i>
        <span>Call 1-833-743-1225</span>
      </a>
    </div>

  </div>
</section>
<!-- ===== END FAQ SECTION ===== -->
