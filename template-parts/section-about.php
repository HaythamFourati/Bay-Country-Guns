<?php
/**
 * About Section - Bay Country Guns
 * ============================================
 * Two-part about section with GSAP scroll animations.
 * Dark theme emphasizing trust, experience, and compliance.
 */
?>
<section id="about" class="py-16 lg:py-24">
  <div class="max-w-6xl mx-auto px-4">
    <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">
      <!-- Text Content -->
      <div class="showcase-text-1">
        <span class="inline-flex items-center mb-4 text-[13px] text-primary font-medium tracking-wide">
          <span class="w-8 h-px bg-primary/40 mr-3"></span>
          Why Choose Bay Country Guns
        </span>
        <h2 class="text-3xl md:text-4xl font-semibold tracking-tight text-foreground mb-6">
          Your Trusted Source for Professional Firearm Services
        </h2>
        <p class="text-muted-foreground text-[15px] leading-relaxed mb-5">
          For over two decades, Bay Country Guns has been the trusted choice for firearm enthusiasts and professionals throughout Anne Arundel County. We're not just a gun store — we're your partners in responsible firearm ownership.
        </p>
        <p class="text-muted-foreground text-[15px] leading-relaxed mb-8">
          Our commitment to safety, compliance, and customer education sets us apart. Whether you're a first-time buyer or a seasoned collector, our experienced team provides the guidance and services you need with professionalism you can trust.
        </p>
        <a href="#contact" class="inline-flex items-center justify-center px-6 py-3.5 rounded-xl border border-border text-foreground/80 text-[15px] font-medium hover:bg-muted hover:border-primary/20 transition-all duration-200 group">
          Visit Our Store
          <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
        </a>
      </div>

      <!-- Image -->
      <div class="showcase-image-1 relative">
        <div class="relative rounded-3xl overflow-hidden aspect-[4/3] border border-border">
          <div class="image-slices absolute inset-0 z-10 flex">
            <div class="slice-1 w-1/3 h-full bg-background"></div>
            <div class="slice-2 w-1/3 h-full bg-background"></div>
            <div class="slice-3 w-1/3 h-full bg-background"></div>
          </div>
          <img 
            src="https://baycountryguns.com/wp-content/uploads/2023/12/shop1_orig-1024x517.jpg" 
            alt="Professional firearm services at Bay Country Guns" 
            class="w-full h-full object-cover"
            loading="lazy"
          />
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Training Section -->
<section id="training" class="py-16 lg:py-24 bg-card">
  <div class="max-w-6xl mx-auto px-4">
    <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">
      <!-- Image -->
      <div class="showcase-image-2 relative order-1 lg:order-1">
        <div class="relative rounded-3xl overflow-hidden aspect-[3/4] max-w-md mx-auto lg:mx-0 border border-border">
          <div class="image-slices-2 absolute inset-0 z-10 flex">
            <div class="slice-1 w-1/3 h-full bg-card"></div>
            <div class="slice-2 w-1/3 h-full bg-card"></div>
            <div class="slice-3 w-1/3 h-full bg-card"></div>
          </div>
          <img 
            src="https://baycountryguns.com/wp-content/uploads/2026/01/firearme-training-scaled.jpg" 
            alt="Firearm training at Bay Country Guns" 
            class="w-full h-full object-cover object-center"
            loading="lazy"
          />
        </div>
      </div>

      <!-- Text Content -->
      <div class="showcase-text-2 lg:order-2">
        <span class="inline-flex items-center mb-4 text-[13px] text-primary font-medium tracking-wide">
          <span class="w-8 h-px bg-primary/40 mr-3"></span>
          Training & Safety First
        </span>
        <h2 class="text-3xl md:text-4xl font-semibold tracking-tight text-foreground mb-4">
          Professional BCG Training
        </h2>
        <p class="text-5xl md:text-6xl font-semibold text-primary/15 mb-6">Since 2000</p>
        
        <div class="bg-background rounded-2xl p-6 border border-border">
          <p class="text-muted-foreground text-[15px] leading-relaxed mb-6">
            Our certified instructors provide comprehensive training for all skill levels. From basic safety courses to advanced tactical training, we emphasize responsible firearm ownership and proper handling techniques. Safety isn't just a priority — it's our foundation.
          </p>
          <div class="flex flex-wrap gap-3">
            <span class="inline-flex items-center px-3 py-1.5 rounded-lg bg-primary/10 text-primary text-[13px] font-medium">
              Certified Instructors
            </span>
            <span class="inline-flex items-center px-3 py-1.5 rounded-lg bg-primary/10 text-primary text-[13px] font-medium">
              <?php echo esc_html(SITE_YEARS_EXPERIENCE); ?> Years Experience
            </span>
            <span class="inline-flex items-center px-3 py-1.5 rounded-lg bg-primary/10 text-primary text-[13px] font-medium">
              All Skill Levels
            </span>
            <span class="inline-flex items-center px-3 py-1.5 rounded-lg bg-primary/10 text-primary text-[13px] font-medium">
              Maryland Compliant
            </span>
          </div>
        </div>

        <a href="<?php echo esc_url(SITE_LINK_TRAINING); ?>" target="_blank" rel="noopener" class="inline-flex items-center mt-6 text-[14px] text-primary font-medium group">
          Schedule Training
          <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
        </a>
      </div>
    </div>
  </div>
</section>
