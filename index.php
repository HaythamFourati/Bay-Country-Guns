<?php
/**
 * Index Template - Fallback template for WordPress
 * Used when no more specific template is found
 */

get_header(); ?>

<div class="min-h-screen bg-background text-foreground">
  <?php get_template_part('template-parts/header-nav'); ?>
  
  <section class="pt-32 pb-24 lg:pt-36">
    <div class="max-w-6xl mx-auto px-4">
      <?php if (have_posts()) : ?>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <?php while (have_posts()) : the_post(); ?>
            <article class="blog-card group bg-card rounded-2xl border border-border overflow-hidden hover:border-primary/30 hover:shadow-xl hover:shadow-primary/5 transition-all duration-300">
              <a href="<?php the_permalink(); ?>" class="block aspect-[16/10] overflow-hidden">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('large', ['class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500']); ?>
                <?php else : ?>
                  <div class="w-full h-full bg-muted flex items-center justify-center">
                    <svg class="w-12 h-12 text-muted-foreground/30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                  </div>
                <?php endif; ?>
              </a>
              <div class="p-6">
                <h2 class="text-[17px] font-semibold text-foreground mb-3 leading-snug group-hover:text-primary transition-colors line-clamp-2">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <p class="text-muted-foreground text-[14px] leading-relaxed mb-4 line-clamp-2">
                  <?php echo wp_trim_words(get_the_excerpt(), 18, '...'); ?>
                </p>
                <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-[13px] text-primary font-medium">
                  Read More
                  <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
              </div>
            </article>
          <?php endwhile; ?>
        </div>
      <?php else : ?>
        <div class="text-center py-16">
          <div class="w-20 h-20 rounded-2xl bg-card border border-border flex items-center justify-center mx-auto mb-6">
            <svg class="w-10 h-10 text-muted-foreground" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
          </div>
          <h2 class="text-2xl font-semibold text-foreground mb-3">No content found</h2>
          <p class="text-muted-foreground text-[16px]">Please check back later.</p>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <?php get_template_part('template-parts/footer-site'); ?>
</div>

<!-- React Enhancement Root -->
<div id="react-enhancer"></div>

<?php get_footer();