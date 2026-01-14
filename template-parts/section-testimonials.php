<?php
/**
 * Testimonials Section - Bay Country Guns
 * ============================================
 * Displays customer testimonials in a responsive grid.
 * Dark theme with firearm-appropriate reviews.
 */

$testimonials = [
  [
    'name' => 'Randy D.',
    'time' => '2 months ago',
    'text' => 'Found the best price of a rifle I was looking for and that alone would have been 5 stars. Then the customer service I received rubber stamped the 5 stars. The hands on instruction of cleaning the weapon along with loading and unloading was awesome. Can’t wait to purchase my next firearm from BCG.',
    'rating' => 5
  ],
  [
    'name' => 'Trey L.',
    'time' => '3 months ago',
    'text' => 'Just purchased my first rifle and didn’t really know the process. They walked me through it and were very helpful the whole way !!',
    'rating' => 5
  ],
  [
    'name' => 'Clayton R.',
    'time' => '4 months ago',
    'text' => 'I was shopping online to have a firearm shipped to Bay Country when the sale was cancelled by the seller. I had already gotten set up with Vicki, paid for the transfer...',
    'rating' => 5
  ],
  [
    'name' => 'Eric E.',
    'time' => '5 months ago',
    'text' => 'Mr. Danny, Junior, and Vicki were extremely helpful and made it a very easy experience. I would definitely recommend buying guns from Danny. Junior and Vicki are almost always there to answer the phone and any questions you have in store.',
    'rating' => 5
  ],
  [
    'name' => 'Dean A.',
    'time' => '6 months ago',
    'text' => 'Nice little spot, good location staff very nice great customer service.
It was my first time there and can see revisiting again in the future.
They are prices on handguns were pretty reasonable.',
    'rating' => 5
  ],
  [
    'name' => 'Charles R.',
    'time' => '7 months ago',
    'text' => 'Vicki, jr and Danny are all very helpful and knowledgeable. Bay country also has some really cool items that I never see anywhere else. Highly recommended.',
    'rating' => 5
  ],
];
?>
<section id="testimonials" class="py-16 lg:py-24">
  <div class="max-w-6xl mx-auto px-4">
    <!-- Section Header -->
    <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-4 lg:gap-6 mb-10 lg:mb-14">
      <div class="max-w-xl">
        <span class="inline-flex items-center mb-4 text-[13px] text-primary font-medium tracking-wide">
          <span class="w-8 h-px bg-primary/40 mr-3"></span>
          Customer Reviews
        </span>
        <h2 class="text-3xl md:text-4xl font-semibold tracking-tight text-foreground">
          What Our Customers Say
        </h2>
      </div>
      <p class="text-muted-foreground text-[15px] leading-relaxed max-w-md lg:text-right">
        Trusted by thousands of customers throughout Anne Arundel County and the greater Annapolis area.
      </p>
    </div>

    <!-- Testimonials Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-6">
      <?php foreach ($testimonials as $index => $testimonial): ?>
      <article class="testimonial-card group relative p-6 rounded-2xl bg-card border border-border hover:border-primary/30 hover:shadow-xl hover:shadow-primary/10 transition-all duration-300">
        <!-- Quote Icon -->
        <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center mb-5">
          <svg class="w-5 h-5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"/></svg>
        </div>

        <!-- Stars -->
        <div class="flex gap-0.5 mb-4">
          <?php for ($i = 0; $i < $testimonial['rating']; $i++): ?>
          <svg class="w-4 h-4 fill-amber-400 text-amber-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          <?php endfor; ?>
        </div>

        <!-- Quote -->
        <blockquote class="text-foreground/80 text-[15px] leading-relaxed mb-6">"<?php echo esc_html($testimonial['text']); ?>"</blockquote>

        <!-- Author -->
        <div class="pt-5 border-t border-border">
          <p class="font-semibold text-[15px] text-foreground"><?php echo esc_html($testimonial['name']); ?></p>
          <p class="text-[13px] text-muted-foreground"><?php echo esc_html(SITE_RATING_SOURCE); ?> Review</p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>

    <!-- Reviews Link -->
    <div class="mt-12 text-center">
      <a href="https://g.page/baycountryguns/review" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-3 px-6 py-3 rounded-xl bg-card border border-border hover:border-primary/30 hover:shadow-lg transition-all duration-200">
        <svg class="w-6 h-6" viewBox="0 0 24 24">
          <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
          <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
          <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
          <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
        </svg>
        <span class="text-[14px] font-medium text-foreground">View All Google Reviews</span>
        <svg class="w-4 h-4 text-muted-foreground" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
      </a>
    </div>
  </div>
</section>
