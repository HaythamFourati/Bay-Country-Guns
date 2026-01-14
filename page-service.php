<?php
/**
 * Template Name: Service Page
 * Reusable Service Page Template - Bay Country Guns
 * 
 * Structure:
 * 1. Hero Section (uses page title + featured image)
 * 2. Service Info Section (uses excerpt + custom fields)
 * 3. Page Content Section (uses WP editor content)
 * 4. Contact Section (template part)
 */

get_header(); ?>

<div class="min-h-screen bg-background text-foreground">
  <?php get_template_part('template-parts/header-nav'); ?>
  
  <?php while (have_posts()) : the_post(); ?>
  
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
        <span class="inline-flex items-center justify-center mb-4 text-[13px] text-primary font-medium tracking-wide">
          <span class="w-8 h-px bg-primary/40 mr-3"></span>
          Our Services
          <span class="w-8 h-px bg-primary/40 ml-3"></span>
        </span>
        
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-semibold tracking-tight mb-6 leading-[1.1] text-foreground">
          <?php the_title(); ?>
        </h1>
        
        <?php if (has_excerpt()) : ?>
        <p class="text-lg md:text-xl text-muted-foreground leading-relaxed max-w-2xl mx-auto">
          <?php echo get_the_excerpt(); ?>
        </p>
        <?php endif; ?>
        
        <div class="mt-8 flex flex-wrap justify-center gap-4">
          <a href="#contact" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-primary text-white text-[15px] font-medium hover:bg-primary/90 transition-all duration-200 hover:shadow-lg hover:shadow-primary/25">
            Get Started
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

  <!-- Service Features Section -->
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
            <svg class="w-16 h-16 text-muted-foreground/30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
          </div>
          <?php endif; ?>
        </div>
        
        <!-- Content -->
        <div class="order-1 lg:order-2">
          <span class="inline-flex items-center mb-4 text-[13px] text-primary font-medium tracking-wide">
            <span class="w-8 h-px bg-primary/40 mr-3"></span>
            Why Choose Us
          </span>
          
          <h2 class="text-3xl md:text-4xl font-semibold text-foreground mb-6 leading-tight">
            Professional <?php the_title(); ?>
          </h2>
          
          <div class="space-y-4 mb-8">
            <div class="flex items-start gap-4 p-4 rounded-xl bg-background border border-border">
              <div class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center">
                <svg class="w-5 h-5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
              </div>
              <div>
                <p class="text-[15px] font-medium text-foreground">Licensed & Certified</p>
                <p class="text-[13px] text-muted-foreground">Maryland licensed FFL dealer with over 20 years of experience.</p>
              </div>
            </div>
            
            <div class="flex items-start gap-4 p-4 rounded-xl bg-background border border-border">
              <div class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center">
                <svg class="w-5 h-5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
              </div>
              <div>
                <p class="text-[15px] font-medium text-foreground">Expert Staff</p>
                <p class="text-[13px] text-muted-foreground">Knowledgeable team ready to assist with all your firearm needs.</p>
              </div>
            </div>
            
            <div class="flex items-start gap-4 p-4 rounded-xl bg-background border border-border">
              <div class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center">
                <svg class="w-5 h-5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              </div>
              <div>
                <p class="text-[15px] font-medium text-foreground">Fast Turnaround</p>
                <p class="text-[13px] text-muted-foreground">Quick and efficient service without compromising quality.</p>
              </div>
            </div>
          </div>
          
          <a href="#contact" class="inline-flex items-center gap-2 text-primary font-medium hover:gap-3 transition-all">
            Contact us today
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Page Content Section (from WP Editor) -->
  <?php 
  $content = get_the_content();
  if (!empty(trim($content))) : 
  ?>
  <section class="py-16 lg:py-24">
    <div class="max-w-6xl mx-auto px-4">
      <div class="prose prose-lg prose-invert max-w-none 
        prose-headings:text-foreground prose-headings:font-semibold
        prose-p:text-muted-foreground prose-p:leading-relaxed
        prose-a:text-primary prose-a:no-underline hover:prose-a:underline
        prose-strong:text-foreground
        prose-ul:text-muted-foreground prose-ol:text-muted-foreground
        prose-li:marker:text-primary
        prose-blockquote:border-primary prose-blockquote:text-muted-foreground
        prose-hr:border-border
        prose-img:rounded-2xl prose-img:border prose-img:border-border">
        <?php the_content(); ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <?php endwhile; ?>

  <?php get_template_part('template-parts/section-contact'); ?>
  <?php get_template_part('template-parts/footer-site'); ?>
</div>

<!-- React Enhancement Root -->
<div id="react-enhancer"></div>

<?php get_footer();
