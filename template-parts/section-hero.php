<?php
/**
 * Hero Section - Bay Country Guns
 * ============================================
 * Full-width video hero with text overlay.
 * Dark theme with firearms-appropriate imagery.
 */
?>
<section id="hero-section" class="relative overflow-hidden min-h-[75vh] flex items-center">
  <!-- Background Video -->
  <div class="hero-image absolute inset-0 z-0">
    <div class="hero-image-slices absolute inset-0 z-10 flex">
      <div class="w-1/3 h-full bg-background"></div>
      <div class="w-1/3 h-full bg-background"></div>
      <div class="w-1/3 h-full bg-background"></div>
    </div>
    <video 
      src="https://baycountryguns.com/wp-content/uploads/2023/12/Royalty-Free-Stock-Footage-Artgrid.io_2.mp4" 
      class="w-full h-full object-cover"
      autoplay
      loop
      muted
      playsinline
    ></video>
    <!-- Dark overlay for text readability -->
    <div class="absolute inset-0 bg-background/60 z-[11]"></div>
  </div>

  <!-- Content -->
  <div class="max-w-4xl mx-auto px-4 relative z-20 py-16 lg:py-20 pt-28 lg:pt-32 pb-24 lg:pb-28 text-center">
    <div class="hero-content">
      <!-- Logo & Brand Name -->
      <div class="flex flex-col items-center mb-8">
        <img 
          src="https://baycountryguns.com/wp-content/uploads/2023/12/bcg-final-png.png" 
          alt="<?php echo esc_attr(SITE_NAME); ?>" 
          class="w-32 sm:w-36 h-auto mb-4"
        />
        <span class="text-3xl sm:text-4xl font-bold text-foreground tracking-tight"><?php echo esc_html(SITE_NAME); ?></span>
      </div>
      
      <!-- Subtle tag -->
      <span class="inline-flex items-center justify-center mb-4 text-[13px] text-primary font-medium tracking-wide">
        <span class="w-8 h-px bg-primary/40 mr-3"></span>
        Annapolis Area's Trusted Firearm Experts
        <span class="w-8 h-px bg-primary/40 ml-3"></span>
      </span>
      
      <h1 class="hero-heading text-4xl md:text-5xl lg:text-6xl font-semibold tracking-tight mb-6 leading-[1.15] text-foreground">
        <span class="hero-text-reveal">Maryland's Trusted</span><br>
        <span class="hero-text-reveal">Firearm <span class="text-primary">Professionals</span></span>
      </h1>
      
      <p class="text-lg text-muted-foreground mb-10 leading-relaxed max-w-2xl mx-auto">
        Over two decades of experience in firearms sales, training, maintenance, and compliance services. Your trusted source for professional firearm services in Anne Arundel County.
      </p>
      
      <div class="flex flex-col sm:flex-row gap-4 mb-12 justify-center">
        <a href="#services" class="inline-flex items-center justify-center px-6 py-3.5 rounded-xl bg-primary text-white text-[15px] font-medium hover:bg-primary/90 transition-all duration-200 hover:shadow-lg hover:shadow-primary/20">
          Explore Services
          <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
        </a>
        <a href="tel:<?php echo esc_attr(SITE_PHONE_LINK); ?>" class="inline-flex items-center justify-center px-6 py-3.5 rounded-xl border border-border bg-card/50 backdrop-blur-sm text-foreground/80 text-[15px] font-medium hover:bg-card hover:border-primary/20 transition-all duration-200">
          <svg class="w-4 h-4 mr-2 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          <?php echo esc_html(SITE_PHONE); ?>
        </a>
      </div>
      
      
    </div>
  </div>
</section>

<!-- Brand Partners Strip -->
<div class="brand-partners-strip max-w-4xl mx-auto px-4 -mt-6 relative z-30">
  <div class="bg-card/95 backdrop-blur-md rounded-xl border border-border shadow-xl shadow-black/20 overflow-hidden">
    <div class="flex flex-col md:flex-row items-stretch">
      <!-- Left side - Red accent with text -->
      <div class="w-full md:w-auto bg-primary px-4 py-2.5 flex items-center justify-center md:justify-start">
        <p class="text-[12px] font-bold text-white leading-tight text-center md:text-left">Partnering with Premier Weapon<br>Brands for Over Two Decades</p>
      </div>
      <!-- Right side - Logos and tagline -->
      <div class="flex-1 px-4 py-2.5 flex items-center justify-between gap-2">
        <p class="text-[11px] text-muted-foreground text-left leading-snug max-w-[360px] hidden lg:block">Your Trusted Ally in Excellence: Partnering with Premier Weapon Brands for Over Two Decades – Committed to Quality, Innovation, and Expertise</p>
        <div class="flex items-center gap-4 md:gap-5 mx-auto md:mx-0">
          <img src="https://baycountryguns.com/wp-content/uploads/2023/12/SIG.svg" alt="SIG Sauer" class="h-6 md:h-7 w-auto opacity-70 hover:opacity-100 transition-opacity" />
          <img src="https://baycountryguns.com/wp-content/uploads/2023/12/Glock.svg" alt="Glock" class="h-6 md:h-7 w-auto opacity-70 hover:opacity-100 transition-opacity" />
          <img src="https://baycountryguns.com/wp-content/uploads/2023/12/SmithWesson.svg" alt="Smith & Wesson" class="h-6 md:h-7 w-auto opacity-70 hover:opacity-100 transition-opacity" />
        </div>
      </div>
    </div>
  </div>
</div>
