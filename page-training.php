<?php
/**
 * Template Name: BCG Defensive Training
 * BCG Defensive Training Page - Bay Country Guns
 */

get_header(); ?>

<div class="min-h-screen bg-background text-foreground">
  <?php get_template_part('template-parts/header-nav'); ?>
  
  <!-- Hero Section -->
  <section class="relative pt-32 pb-16 lg:pt-36 lg:pb-20 overflow-hidden">
    <!-- Background Image -->
    <?php if (has_post_thumbnail()) : ?>
    <div class="absolute inset-0">
      <?php the_post_thumbnail('full', ['class' => 'w-full h-full object-cover']); ?>
      <div class="absolute inset-0 bg-background/85 backdrop-blur-sm"></div>
    </div>
    <?php endif; ?>
    
    <div class="relative max-w-6xl mx-auto px-4">
      <div class="max-w-3xl mx-auto text-center">
        <?php get_template_part('template-parts/hero-brand'); ?>
        
        <span class="inline-flex items-center justify-center mb-4 text-[13px] text-primary font-medium tracking-wide">
          <span class="w-8 h-px bg-primary/40 mr-3"></span>
          Professional Training
          <span class="w-8 h-px bg-primary/40 ml-3"></span>
        </span>
        
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-semibold tracking-tight mb-6 leading-[1.1] text-foreground">
          BCG Defensive Training
        </h1>
        
        <p class="text-lg md:text-xl text-muted-foreground leading-relaxed max-w-2xl mx-auto">
          Professional firearms training courses for Maryland residents. Get certified with our comprehensive CCW and HQL training programs.
        </p>
        
        <div class="mt-8 flex flex-wrap justify-center gap-4">
          <a href="#courses" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-primary text-white text-[15px] font-medium hover:bg-primary/90 transition-all duration-200 hover:shadow-lg hover:shadow-primary/25">
            View Courses
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
          </a>
          <a href="tel:<?php echo esc_attr(SITE_PHONE_LINK); ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl border border-border text-foreground text-[15px] font-medium hover:bg-card hover:border-primary/30 transition-all duration-200">
            <svg class="w-4 h-4 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            <?php echo esc_html(SITE_PHONE); ?>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Training Courses Section -->
  <section id="courses" class="py-16 lg:py-24">
    <div class="max-w-6xl mx-auto px-4">
      <div class="text-center mb-12">
        <span class="inline-flex items-center justify-center mb-4 text-[13px] text-primary font-medium tracking-wide">
          <span class="w-8 h-px bg-primary/40 mr-3"></span>
          Our Courses
          <span class="w-8 h-px bg-primary/40 ml-3"></span>
        </span>
        <h2 class="text-3xl md:text-4xl font-semibold text-foreground mb-4">
          Maryland Firearms Training
        </h2>
        <p class="text-muted-foreground max-w-2xl mx-auto">
          Choose the course that fits your needs. Both courses are taught by certified instructors with years of experience.
        </p>
      </div>
      
      <div class="grid lg:grid-cols-2 gap-8">
        <!-- CCW Course Card -->
        <div class="bg-card border border-border rounded-2xl overflow-hidden hover:border-primary/30 transition-all duration-300 hover:shadow-xl hover:shadow-primary/5">
          <div class="p-8">
            <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center mb-6">
              <svg class="w-7 h-7 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            </div>
            
            <h3 class="text-2xl font-semibold text-foreground mb-3">
              Maryland Wear and Carry Permit (CCW)
            </h3>
            
            <p class="text-muted-foreground mb-6 leading-relaxed">
              Complete training course required to obtain your Maryland Wear and Carry Permit. Learn safe handling, Maryland laws, and defensive tactics.
            </p>
            
            <div class="space-y-3 mb-8">
              <div class="flex items-start gap-3">
                <svg class="w-5 h-5 text-primary flex-shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg>
                <span class="text-sm text-foreground">16 hours of comprehensive instruction</span>
              </div>
              <div class="flex items-start gap-3">
                <svg class="w-5 h-5 text-primary flex-shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg>
                <span class="text-sm text-foreground">Classroom and live-fire training</span>
              </div>
              <div class="flex items-start gap-3">
                <svg class="w-5 h-5 text-primary flex-shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg>
                <span class="text-sm text-foreground">Maryland state law & use of force</span>
              </div>
              <div class="flex items-start gap-3">
                <svg class="w-5 h-5 text-primary flex-shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg>
                <span class="text-sm text-foreground">Qualification shooting test</span>
              </div>
              <div class="flex items-start gap-3">
                <svg class="w-5 h-5 text-primary flex-shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg>
                <span class="text-sm text-foreground">Certificate upon completion</span>
              </div>
            </div>
            
            <a href="<?php echo esc_url(SITE_LINK_TRAINING_CCW); ?>" target="_blank" rel="noopener" class="inline-flex items-center justify-center w-full gap-2 px-6 py-3.5 rounded-xl bg-primary text-white text-[15px] font-medium hover:bg-primary/90 transition-all duration-200 hover:shadow-lg hover:shadow-primary/25">
              Book CCW Course
              <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
            </a>
          </div>
        </div>

        <!-- HQL Course Card -->
        <div class="bg-card border border-border rounded-2xl overflow-hidden hover:border-primary/30 transition-all duration-300 hover:shadow-xl hover:shadow-primary/5">
          <div class="p-8">
            <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center mb-6">
              <svg class="w-7 h-7 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
            </div>
            
            <h3 class="text-2xl font-semibold text-foreground mb-3">
              Maryland Handgun Qualification License (HQL)
            </h3>
            
            <p class="text-muted-foreground mb-6 leading-relaxed">
              Required certification to purchase, rent, or receive a handgun in Maryland. Essential training for first-time handgun owners.
            </p>
            
            <div class="space-y-3 mb-8">
              <div class="flex items-start gap-3">
                <svg class="w-5 h-5 text-primary flex-shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg>
                <span class="text-sm text-foreground">4 hours of instruction</span>
              </div>
              <div class="flex items-start gap-3">
                <svg class="w-5 h-5 text-primary flex-shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg>
                <span class="text-sm text-foreground">Firearm safety fundamentals</span>
              </div>
              <div class="flex items-start gap-3">
                <svg class="w-5 h-5 text-primary flex-shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg>
                <span class="text-sm text-foreground">Maryland handgun laws</span>
              </div>
              <div class="flex items-start gap-3">
                <svg class="w-5 h-5 text-primary flex-shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg>
                <span class="text-sm text-foreground">Home firearm safety</span>
              </div>
              <div class="flex items-start gap-3">
                <svg class="w-5 h-5 text-primary flex-shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg>
                <span class="text-sm text-foreground">Certificate upon completion</span>
              </div>
            </div>
            
            <a href="<?php echo esc_url(SITE_LINK_TRAINING_HQL); ?>" target="_blank" rel="noopener" class="inline-flex items-center justify-center w-full gap-2 px-6 py-3.5 rounded-xl bg-primary text-white text-[15px] font-medium hover:bg-primary/90 transition-all duration-200 hover:shadow-lg hover:shadow-primary/25">
              Book HQL Course
              <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Choose BCG Training -->
  <section class="py-16 lg:py-24 bg-card border-y border-border">
    <div class="max-w-6xl mx-auto px-4">
      <div class="text-center mb-12">
        <span class="inline-flex items-center justify-center mb-4 text-[13px] text-primary font-medium tracking-wide">
          <span class="w-8 h-px bg-primary/40 mr-3"></span>
          Why Choose Us
          <span class="w-8 h-px bg-primary/40 ml-3"></span>
        </span>
        <h2 class="text-3xl md:text-4xl font-semibold text-foreground mb-4">
          Professional Firearms Training
        </h2>
      </div>
      
      <div class="grid md:grid-cols-3 gap-8">
        <div class="text-center">
          <div class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Certified Instructors</h3>
          <p class="text-sm text-muted-foreground">Our instructors are NRA certified and have years of law enforcement and military experience.</p>
        </div>
        
        <div class="text-center">
          <div class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Small Class Sizes</h3>
          <p class="text-sm text-muted-foreground">We keep our classes small to ensure personalized attention and hands-on instruction.</p>
        </div>
        
        <div class="text-center">
          <div class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Modern Facilities</h3>
          <p class="text-sm text-muted-foreground">Train in our state-of-the-art classroom and range facilities with the latest equipment.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- What to Expect -->
  <section class="py-16 lg:py-24">
    <div class="max-w-6xl mx-auto px-4">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div>
          <span class="inline-flex items-center mb-4 text-[13px] text-primary font-medium tracking-wide">
            <span class="w-8 h-px bg-primary/40 mr-3"></span>
            What to Expect
          </span>
          
          <h2 class="text-3xl md:text-4xl font-semibold text-foreground mb-6 leading-tight">
            Comprehensive Training Experience
          </h2>
          
          <p class="text-muted-foreground leading-relaxed mb-6">
            Our courses combine classroom instruction with hands-on training to ensure you're fully prepared. You'll learn from experienced instructors in a supportive environment designed for students of all skill levels.
          </p>
          
          <div class="space-y-4">
            <div class="flex items-start gap-4 p-4 rounded-xl bg-card border border-border">
              <div class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center">
                <svg class="w-5 h-5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
              </div>
              <div>
                <p class="text-[15px] font-medium text-foreground">Classroom Instruction</p>
                <p class="text-[13px] text-muted-foreground">Learn Maryland laws, safety protocols, and defensive tactics theory.</p>
              </div>
            </div>
            
            <div class="flex items-start gap-4 p-4 rounded-xl bg-card border border-border">
              <div class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center">
                <svg class="w-5 h-5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
              </div>
              <div>
                <p class="text-[15px] font-medium text-foreground">Live-Fire Training</p>
                <p class="text-[13px] text-muted-foreground">Practice proper shooting techniques under instructor supervision.</p>
              </div>
            </div>
            
            <div class="flex items-start gap-4 p-4 rounded-xl bg-card border border-border">
              <div class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center">
                <svg class="w-5 h-5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
              </div>
              <div>
                <p class="text-[15px] font-medium text-foreground">Certification</p>
                <p class="text-[13px] text-muted-foreground">Receive your official certificate upon successful completion.</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="order-first lg:order-last">
          <?php if (has_post_thumbnail()) : ?>
          <div class="rounded-2xl overflow-hidden border border-border">
            <?php the_post_thumbnail('large', ['class' => 'w-full aspect-[4/3] object-cover']); ?>
          </div>
          <?php else : ?>
          <div class="rounded-2xl overflow-hidden border border-border bg-muted aspect-[4/3] flex items-center justify-center">
            <svg class="w-20 h-20 text-muted-foreground/30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/section-contact'); ?>
  <?php get_template_part('template-parts/footer-site'); ?>
</div>

<?php get_footer();
