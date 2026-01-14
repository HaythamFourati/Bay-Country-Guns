<?php
/**
 * Header Navigation - Bay Country Guns Dark Theme
 * React enhances with scroll animations
 */
?>
<header id="site-header" class="fixed top-0 left-0 right-0 z-50 w-full pt-4">
  <nav id="navbar-root" class="relative z-40 w-full px-4">
    <div class="relative z-[60] mx-auto hidden w-full max-w-6xl flex-row items-center justify-between rounded-2xl bg-card/95 backdrop-blur-md border border-border px-6 py-3 lg:flex transition-all duration-500 ease-out shadow-lg shadow-black/20">
      <!-- Logo -->
      <a href="<?php echo home_url(); ?>" class="relative z-20 flex items-center gap-3">
        <img 
          src="https://baycountryguns.com/wp-content/uploads/2023/12/bcg-final-png.png" 
          alt="<?php echo esc_attr(SITE_NAME); ?>" 
          class="h-10 w-auto"
        />
      </a>

      <!-- Navigation Items -->
      <div class="flex flex-row items-center gap-0.5">
        <!-- Services Dropdown (other services) -->
        <div class="relative group">
          <button class="relative px-3 py-2 text-[13px] text-foreground/70 hover:text-primary font-medium transition-colors duration-200 rounded-lg hover:bg-primary/10 flex items-center gap-1">
            Services
            <svg class="w-3.5 h-3.5 transition-transform group-hover:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg>
          </button>
          <!-- Dropdown Menu -->
          <div class="absolute top-full left-0 pt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
            <div class="w-56 bg-card/95 backdrop-blur-md border border-border rounded-xl shadow-xl shadow-black/20 py-2 overflow-hidden">
              <a href="<?php echo home_url('/firearms-sales/'); ?>" class="flex items-center gap-3 px-4 py-2.5 text-[13px] text-foreground/70 hover:text-primary hover:bg-primary/10 transition-colors">
                <svg class="w-4 h-4 text-primary/60" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
                Firearms Sales
              </a>
              <a href="<?php echo home_url('/firearm-customization/'); ?>" class="flex items-center gap-3 px-4 py-2.5 text-[13px] text-foreground/70 hover:text-primary hover:bg-primary/10 transition-colors">
                <svg class="w-4 h-4 text-primary/60" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
                Customization
              </a>
              <a href="<?php echo home_url('/cleaning-maintenance/'); ?>" class="flex items-center gap-3 px-4 py-2.5 text-[13px] text-foreground/70 hover:text-primary hover:bg-primary/10 transition-colors">
                <svg class="w-4 h-4 text-primary/60" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/><path d="m9 12 2 2 4-4"/></svg>
                Cleaning & Maintenance
              </a>
              <a href="<?php echo home_url('/compliance-services/'); ?>" class="flex items-center gap-3 px-4 py-2.5 text-[13px] text-foreground/70 hover:text-primary hover:bg-primary/10 transition-colors">
                <svg class="w-4 h-4 text-primary/60" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                Compliance Services
              </a>
              <a href="<?php echo home_url('/accessories-gear/'); ?>" class="flex items-center gap-3 px-4 py-2.5 text-[13px] text-foreground/70 hover:text-primary hover:bg-primary/10 transition-colors">
                <svg class="w-4 h-4 text-primary/60" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
                Accessories & Gear
              </a>
            </div>
          </div>
        </div>
        <a href="<?php echo esc_url(SITE_LINK_FINGERPRINTING); ?>" target="_blank" rel="noopener" class="relative px-3 py-2 text-[13px] text-foreground/70 hover:text-primary font-medium transition-colors duration-200 rounded-lg hover:bg-primary/10">Fingerprinting</a>
        <a href="<?php echo esc_url(SITE_LINK_TRAINING); ?>" target="_blank" rel="noopener" class="relative px-3 py-2 text-[13px] text-foreground/70 hover:text-primary font-medium transition-colors duration-200 rounded-lg hover:bg-primary/10">BCG Defensive Training</a>
        <a href="<?php echo home_url('/ffl-transfer-request/'); ?>" class="relative px-3 py-2 text-[13px] text-foreground/70 hover:text-primary font-medium transition-colors duration-200 rounded-lg hover:bg-primary/10">FFL Transfer</a>
        <a href="<?php echo home_url('/blog/'); ?>" class="relative px-3 py-2 text-[13px] text-foreground/70 hover:text-primary font-medium transition-colors duration-200 rounded-lg hover:bg-primary/10">Blog</a>
        <a href="#contact" class="relative px-3 py-2 text-[13px] text-foreground/70 hover:text-primary font-medium transition-colors duration-200 rounded-lg hover:bg-primary/10">Contact</a>
      </div>

      <!-- Actions -->
      <div class="relative z-20 flex items-center gap-5">
        <a href="tel:<?php echo esc_attr(SITE_PHONE_LINK); ?>" class="flex items-center gap-2 text-[13px] text-foreground/70 hover:text-primary transition-all duration-300 font-medium">
          <span class="tracking-tight"><?php echo esc_html(SITE_PHONE); ?></span>
        </a>
        <a href="#contact" class="px-5 py-2.5 rounded-xl bg-primary text-white text-[13px] font-medium hover:bg-primary/90 transition-all duration-200 hover:shadow-lg hover:shadow-primary/25">
          Visit Store
        </a>
      </div>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobile-nav-root" class="relative z-50 mx-auto flex w-full flex-col bg-card/95 backdrop-blur-md rounded-2xl border border-border px-4 py-3 lg:hidden">
      <div class="flex w-full flex-row items-center justify-between">
        <a href="<?php echo home_url(); ?>" class="flex items-center gap-2.5">
          <img 
            src="https://baycountryguns.com/wp-content/uploads/2023/12/bcg-final-png.png" 
            alt="<?php echo esc_attr(SITE_NAME); ?>" 
            class="h-8 w-auto"
          />
        </a>
        <button id="mobile-menu-toggle" class="w-9 h-9 flex items-center justify-center rounded-lg hover:bg-primary/10 transition-colors" aria-label="Toggle menu">
          <svg id="mobile-menu-icon-open" class="w-5 h-5 text-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
          <svg id="mobile-menu-icon-close" class="w-5 h-5 text-foreground hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>
      
      <!-- Mobile Menu Panel -->
      <div id="mobile-menu-panel" class="hidden w-full pt-4 pb-2">
        <div class="flex flex-col gap-1">
          <!-- Mobile Services Accordion (other services) -->
          <div class="mobile-services-accordion">
            <button id="mobile-services-toggle" class="w-full flex items-center justify-between px-3 py-2.5 text-[14px] text-foreground font-medium rounded-lg hover:bg-primary/10 transition-colors">
              Services
              <svg id="mobile-services-chevron" class="w-4 h-4 transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg>
            </button>
            <div id="mobile-services-panel" class="hidden pl-3 mt-1 space-y-1 border-l-2 border-primary/20 ml-3">
              <a href="<?php echo home_url('/firearms-sales/'); ?>" class="flex items-center gap-2 px-3 py-2 text-[13px] text-foreground/70 rounded-lg hover:bg-primary/10 hover:text-primary transition-colors">Firearms Sales</a>
              <a href="<?php echo home_url('/firearm-customization/'); ?>" class="flex items-center gap-2 px-3 py-2 text-[13px] text-foreground/70 rounded-lg hover:bg-primary/10 hover:text-primary transition-colors">Customization</a>
              <a href="<?php echo home_url('/cleaning-maintenance/'); ?>" class="flex items-center gap-2 px-3 py-2 text-[13px] text-foreground/70 rounded-lg hover:bg-primary/10 hover:text-primary transition-colors">Cleaning & Maintenance</a>
              <a href="<?php echo home_url('/compliance-services/'); ?>" class="flex items-center gap-2 px-3 py-2 text-[13px] text-foreground/70 rounded-lg hover:bg-primary/10 hover:text-primary transition-colors">Compliance Services</a>
              <a href="<?php echo home_url('/accessories-gear/'); ?>" class="flex items-center gap-2 px-3 py-2 text-[13px] text-foreground/70 rounded-lg hover:bg-primary/10 hover:text-primary transition-colors">Accessories & Gear</a>
            </div>
          </div>
          <a href="<?php echo esc_url(SITE_LINK_FINGERPRINTING); ?>" target="_blank" rel="noopener" class="px-3 py-2.5 text-[14px] text-foreground font-medium rounded-lg hover:bg-primary/10 transition-colors">Fingerprinting</a>
          <a href="<?php echo esc_url(SITE_LINK_TRAINING); ?>" target="_blank" rel="noopener" class="px-3 py-2.5 text-[14px] text-foreground font-medium rounded-lg hover:bg-primary/10 transition-colors">Training</a>
          <a href="<?php echo home_url('/ffl-transfer-request/'); ?>" class="px-3 py-2.5 text-[14px] text-foreground font-medium rounded-lg hover:bg-primary/10 transition-colors">FFL Transfer</a>
          <a href="<?php echo home_url('/blog/'); ?>" class="px-3 py-2.5 text-[14px] text-foreground font-medium rounded-lg hover:bg-primary/10 transition-colors">Blog</a>
          <a href="#contact" class="px-3 py-2.5 text-[14px] text-foreground font-medium rounded-lg hover:bg-primary/10 transition-colors">Contact</a>
        </div>
        
        <!-- Mobile CTA -->
        <div class="mt-4 pt-4 border-t border-border space-y-3">
          <a href="tel:<?php echo esc_attr(SITE_PHONE_LINK); ?>" class="flex items-center justify-center gap-2 px-4 py-2.5 text-[14px] text-foreground font-medium rounded-xl border border-border hover:bg-primary/10 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
            </svg>
            <?php echo esc_html(SITE_PHONE); ?>
          </a>
          <a href="#contact" class="flex items-center justify-center gap-2 px-4 py-3 text-[14px] text-white font-medium rounded-xl bg-primary hover:bg-primary/90 transition-colors">
            Visit Store
          </a>
        </div>
      </div>
    </div>
  </nav>
</header>
