<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- 
      SEO Meta Tags
      ============================================
      TODO: Customize these for your project.
      Consider using an SEO plugin like Yoast or RankMath for dynamic meta tags.
    -->
    <meta name="description" content="<?php echo esc_attr(SITE_NAME . ' - ' . SITE_TAGLINE); ?>">
    <meta name="author" content="<?php echo esc_attr(SITE_NAME); ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url(home_url()); ?>">
    <meta property="og:title" content="<?php echo esc_attr(SITE_NAME); ?>">
    <meta property="og:description" content="<?php echo esc_attr(SITE_TAGLINE); ?>">
    <meta property="og:image" content="<?php echo esc_url(get_theme_file_uri('/screenshot.png')); ?>">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo esc_url(home_url()); ?>">
    <meta property="twitter:title" content="<?php echo esc_attr(SITE_NAME); ?>">
    <meta property="twitter:description" content="<?php echo esc_attr(SITE_TAGLINE); ?>">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo esc_url(home_url()); ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="https://baycountryguns.com/wp-content/uploads/2023/12/bcg-final-png.png">
    <link rel="apple-touch-icon" href="https://baycountryguns.com/wp-content/uploads/2023/12/bcg-final-png.png">
    
    <!-- 
      Structured Data (Schema.org)
      ============================================
      TODO: Customize the @type and properties for your business type.
      Common types: LocalBusiness, Organization, ProfessionalService, Restaurant, etc.
      See: https://schema.org/docs/full.html
    -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "<?php echo esc_js(SITE_NAME); ?>",
      "description": "<?php echo esc_js(SITE_TAGLINE); ?>",
      "url": "<?php echo esc_url(home_url()); ?>",
      "telephone": "<?php echo esc_js(SITE_PHONE_LINK); ?>",
      "email": "<?php echo esc_js(SITE_EMAIL); ?>"
      <?php if (SITE_OFFICE_PRIMARY_ADDRESS): ?>
      ,"address": {
        "@type": "PostalAddress",
        "streetAddress": "<?php echo esc_js(SITE_OFFICE_PRIMARY_ADDRESS); ?>"
      }
      <?php endif; ?>
    }
    </script>
    
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>