<?php
/**
 * Front Page Template - Homepage
 * PHP renders all content, React enhances with interactivity
 */

get_header(); ?>

<div class="min-h-screen bg-background text-foreground">
  <?php get_template_part('template-parts/header-nav'); ?>
  <?php get_template_part('template-parts/section-hero'); ?>
  <?php get_template_part('template-parts/section-practice-areas'); ?>
  <?php get_template_part('template-parts/section-about'); ?>
  <?php get_template_part('template-parts/section-testimonials'); ?>
  <?php get_template_part('template-parts/section-latest-posts'); ?>
  <?php get_template_part('template-parts/section-contact'); ?>
  <?php get_template_part('template-parts/footer-site'); ?>
</div>

<!-- React Enhancement Root -->
<div id="react-enhancer"></div>

<?php get_footer();
