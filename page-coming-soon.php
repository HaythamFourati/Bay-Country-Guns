<?php
/**
 * Template Name: Coming Soon
 * 
 * A coming soon page template.
 */

get_header(); ?>

<div class="coming-soon-page min-h-screen bg-background flex items-center justify-center px-4 py-16">
  <div class="coming-soon-container max-w-lg w-full text-center">
    <!-- Logo -->
    <img 
      src="https://baycountryguns.com/wp-content/uploads/2023/12/bcg-final-png.png" 
      alt="<?php echo esc_attr(SITE_NAME); ?>" 
      class="w-28 sm:w-36 h-auto mx-auto mb-8"
    />
    
    <!-- Brand Name -->
    <h1 class="text-3xl sm:text-4xl font-bold text-foreground mb-2 tracking-tight"><?php echo esc_html(SITE_NAME); ?></h1>
    <p class="text-lg text-muted-foreground mb-10"><?php echo esc_html(SITE_TAGLINE); ?></p>
    
    <!-- Coming Soon Badge -->
    <div class="inline-flex items-center gap-2 bg-primary text-white px-6 py-3 rounded-full text-base font-semibold mb-8">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      Coming Soon
    </div>
    
    <!-- Description -->
    <p class="text-base text-muted-foreground leading-relaxed mb-10">
      We're working hard to bring you a new and improved website experience. 
      In the meantime, feel free to visit us in store or give us a call.
    </p>
    
    <!-- Contact Info -->
    <div class="bg-card border border-border rounded-2xl p-6 sm:p-8 mb-8">
      <h3 class="text-base font-semibold text-foreground mb-4">Contact Us</h3>
      <div class="flex flex-col gap-3">
        <a href="tel:<?php echo esc_attr(SITE_PHONE_LINK); ?>" class="text-primary hover:opacity-80 transition-opacity">
          <?php echo esc_html(SITE_PHONE); ?>
        </a>
        <a href="mailto:<?php echo esc_attr(SITE_EMAIL); ?>" class="text-primary hover:opacity-80 transition-opacity">
          <?php echo esc_html(SITE_EMAIL); ?>
        </a>
        <span class="text-muted-foreground">
          <?php echo esc_html(SITE_OFFICE_PRIMARY_ADDRESS); ?>
        </span>
      </div>
      
      <div class="mt-6 pt-6 border-t border-border">
        <p class="text-sm text-muted-foreground mb-1"><strong class="text-foreground">Hours:</strong></p>
        <p class="text-sm text-muted-foreground"><?php echo esc_html(SITE_HOURS_FULL); ?></p>
      </div>
    </div>
    
    
    
    <!-- Footer -->
    <p class="text-xs text-muted-foreground">
      &copy; <?php echo date('Y'); ?> <?php echo esc_html(SITE_NAME); ?>. All rights reserved.<br>
      Licensed Firearms Dealer | FFL
    </p>
  </div>
</div>

<?php get_footer();
