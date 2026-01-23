<?php
/**
 * Template Name: Live Scan Fingerprinting
 * Live Scan Fingerprinting Service Page - Bay Country Guns
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
          Our Services
          <span class="w-8 h-px bg-primary/40 ml-3"></span>
        </span>
        
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-semibold tracking-tight mb-6 leading-[1.1] text-foreground">
          Live Scan Fingerprinting
        </h1>
        
        <p class="text-lg md:text-xl text-muted-foreground leading-relaxed max-w-2xl mx-auto">
          Fast, accurate electronic fingerprinting for background checks, licensing, employment, and more. Results transmitted directly to the appropriate agencies.
        </p>
        
        <div class="mt-8 flex flex-wrap justify-center gap-4">
          <a href="#contact" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-primary text-white text-[15px] font-medium hover:bg-primary/90 transition-all duration-200 hover:shadow-lg hover:shadow-primary/25">
            Schedule Appointment
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

  <!-- What is Live Scan Section -->
  <section class="py-16 lg:py-24 bg-card border-y border-border">
    <div class="max-w-6xl mx-auto px-4">
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
        <!-- Image -->
        <div class="order-2 lg:order-1">
          <?php if (has_post_thumbnail()) : ?>
          <div class="rounded-2xl overflow-hidden border border-border">
            <?php the_post_thumbnail('large', ['class' => 'w-full aspect-[4/3] object-cover']); ?>
          </div>
          <?php else : ?>
          <div class="rounded-2xl overflow-hidden border border-border bg-muted aspect-[4/3] flex items-center justify-center">
            <svg class="w-20 h-20 text-muted-foreground/30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"/></svg>
          </div>
          <?php endif; ?>
        </div>
        
        <!-- Content -->
        <div class="order-1 lg:order-2">
          <span class="inline-flex items-center mb-4 text-[13px] text-primary font-medium tracking-wide">
            <span class="w-8 h-px bg-primary/40 mr-3"></span>
            What is Live Scan?
          </span>
          
          <h2 class="text-3xl md:text-4xl font-semibold text-foreground mb-6 leading-tight">
            Electronic Fingerprinting Technology
          </h2>
          
          <p class="text-muted-foreground leading-relaxed mb-6">
            Live Scan is an inkless, electronic fingerprinting system that captures your fingerprints digitally and transmits them directly to the FBI and state agencies for background checks. This modern technology provides faster, more accurate results than traditional ink-and-paper methods.
          </p>
          
          <div class="space-y-3">
            <div class="flex items-center gap-3">
              <svg class="w-5 h-5 text-primary flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg>
              <span class="text-foreground">No messy ink – clean, digital process</span>
            </div>
            <div class="flex items-center gap-3">
              <svg class="w-5 h-5 text-primary flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg>
              <span class="text-foreground">Instant electronic submission</span>
            </div>
            <div class="flex items-center gap-3">
              <svg class="w-5 h-5 text-primary flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg>
              <span class="text-foreground">Higher accuracy than ink cards</span>
            </div>
            <div class="flex items-center gap-3">
              <svg class="w-5 h-5 text-primary flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg>
              <span class="text-foreground">Faster background check results</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services We Support -->
  <section class="py-16 lg:py-24">
    <div class="max-w-6xl mx-auto px-4">
      <div class="text-center mb-12">
        <span class="inline-flex items-center justify-center mb-4 text-[13px] text-primary font-medium tracking-wide">
          <span class="w-8 h-px bg-primary/40 mr-3"></span>
          Who We Serve
          <span class="w-8 h-px bg-primary/40 ml-3"></span>
        </span>
        <h2 class="text-3xl md:text-4xl font-semibold text-foreground mb-4">
          Fingerprinting Services For
        </h2>
        <p class="text-muted-foreground max-w-2xl mx-auto">
          We provide Live Scan fingerprinting for a wide range of purposes. Contact us to confirm we can process your specific request.
        </p>
      </div>
      
      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card 1 -->
        <div class="p-6 rounded-2xl bg-card border border-border hover:border-primary/30 transition-colors">
          <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Employment</h3>
          <p class="text-sm text-muted-foreground">Pre-employment background checks for jobs requiring security clearance or sensitive positions.</p>
        </div>
        
        <!-- Card 2 -->
        <div class="p-6 rounded-2xl bg-card border border-border hover:border-primary/30 transition-colors">
          <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Professional Licensing</h3>
          <p class="text-sm text-muted-foreground">Healthcare workers, teachers, attorneys, real estate agents, and other licensed professionals.</p>
        </div>
        
        <!-- Card 3 -->
        <div class="p-6 rounded-2xl bg-card border border-border hover:border-primary/30 transition-colors">
          <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Security Clearances</h3>
          <p class="text-sm text-muted-foreground">Government contractors, federal employees, and positions requiring security clearance.</p>
        </div>
        
        <!-- Card 4 -->
        <div class="p-6 rounded-2xl bg-card border border-border hover:border-primary/30 transition-colors">
          <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Volunteer Work</h3>
          <p class="text-sm text-muted-foreground">Volunteers working with children, elderly, or vulnerable populations.</p>
        </div>
        
        <!-- Card 5 -->
        <div class="p-6 rounded-2xl bg-card border border-border hover:border-primary/30 transition-colors">
          <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Adoption</h3>
          <p class="text-sm text-muted-foreground">Background checks required for domestic and international adoption processes.</p>
        </div>
        
        <!-- Card 6 -->
        <div class="p-6 rounded-2xl bg-card border border-border hover:border-primary/30 transition-colors">
          <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Immigration & Visa</h3>
          <p class="text-sm text-muted-foreground">USCIS immigration applications, visa renewals, and citizenship processes.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Pricing Section -->
  <section class="py-16 lg:py-24 bg-card border-y border-border">
    <div class="max-w-6xl mx-auto px-4">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div>
          <span class="inline-flex items-center mb-4 text-[13px] text-primary font-medium tracking-wide">
            <span class="w-8 h-px bg-primary/40 mr-3"></span>
            Pricing
          </span>
          
          <h2 class="text-3xl md:text-4xl font-semibold text-foreground mb-6 leading-tight">
            Simple, Transparent Pricing
          </h2>
          
          <p class="text-muted-foreground leading-relaxed mb-6">
            Our Live Scan fingerprinting service includes electronic capture and transmission to the appropriate agencies. Additional state or federal fees may apply depending on your specific background check requirements.
          </p>
          
          <div class="flex items-center gap-4 p-6 rounded-2xl bg-background border border-border">
            <div class="flex-1">
              <p class="text-sm text-muted-foreground mb-1">Live Scan Service Fee</p>
              <p class="text-4xl font-bold text-foreground">Contact Us</p>
              <p class="text-sm text-muted-foreground mt-1">for current pricing</p>
            </div>
          </div>
          
          <p class="text-sm text-muted-foreground mt-4">
            * State and federal processing fees are additional and vary by agency. We'll provide a complete quote when you contact us.
          </p>
        </div>
        
        <div class="space-y-4">
          <h3 class="text-lg font-semibold text-foreground mb-4">What to Bring</h3>
          
          <div class="flex items-start gap-4 p-4 rounded-xl bg-background border border-border">
            <div class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center">
              <svg class="w-5 h-5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="18" height="14" x="3" y="5" rx="2"/><path d="M3 10h18"/></svg>
            </div>
            <div>
              <p class="text-[15px] font-medium text-foreground">Valid Government ID</p>
              <p class="text-[13px] text-muted-foreground">Driver's license, state ID, passport, or military ID.</p>
            </div>
          </div>
          
          <div class="flex items-start gap-4 p-4 rounded-xl bg-background border border-border">
            <div class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center">
              <svg class="w-5 h-5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" x2="8" y1="13" y2="13"/><line x1="16" x2="8" y1="17" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
            </div>
            <div>
              <p class="text-[15px] font-medium text-foreground">Agency Request Form</p>
              <p class="text-[13px] text-muted-foreground">ORI number or authorization form from your employer/agency (if applicable).</p>
            </div>
          </div>
          
          <div class="flex items-start gap-4 p-4 rounded-xl bg-background border border-border">
            <div class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center">
              <svg class="w-5 h-5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
            </div>
            <div>
              <p class="text-[15px] font-medium text-foreground">Payment</p>
              <p class="text-[13px] text-muted-foreground">We accept cash, credit cards, and debit cards.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Choose Us -->
  <section class="py-16 lg:py-24">
    <div class="max-w-6xl mx-auto px-4">
      <div class="text-center mb-12">
        <span class="inline-flex items-center justify-center mb-4 text-[13px] text-primary font-medium tracking-wide">
          <span class="w-8 h-px bg-primary/40 mr-3"></span>
          Why Choose Us
          <span class="w-8 h-px bg-primary/40 ml-3"></span>
        </span>
        <h2 class="text-3xl md:text-4xl font-semibold text-foreground mb-4">
          Professional Fingerprinting Services
        </h2>
      </div>
      
      <div class="grid md:grid-cols-3 gap-8">
        <div class="text-center">
          <div class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Quick Service</h3>
          <p class="text-sm text-muted-foreground">Most appointments take only 10-15 minutes. Walk-ins welcome when available.</p>
        </div>
        
        <div class="text-center">
          <div class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Certified Operators</h3>
          <p class="text-sm text-muted-foreground">Our trained staff ensures accurate captures that meet all agency requirements.</p>
        </div>
        
        <div class="text-center">
          <div class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Friendly Support</h3>
          <p class="text-sm text-muted-foreground">Questions about the process? We're here to help guide you through every step.</p>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/section-contact'); ?>
  <?php get_template_part('template-parts/footer-site'); ?>
</div>

<?php get_footer();
