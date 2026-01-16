<?php
/**
 * Hero Brand Section - Logo & Site Name
 * Reusable component for page hero sections
 */
?>
<div class="flex flex-col items-center mb-6">
  <img 
    src="https://baycountryguns.com/wp-content/uploads/2023/12/bcg-final-png.png" 
    alt="<?php echo esc_attr(SITE_NAME); ?>" 
    class="w-24 sm:w-28 h-auto mb-3"
  />
  <span class="text-2xl sm:text-3xl font-bold text-foreground tracking-tight"><?php echo esc_html(SITE_NAME); ?></span>
</div>
