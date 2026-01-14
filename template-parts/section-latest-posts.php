<?php
/**
 * Latest Blog Posts Section - Bay Country Guns
 * Displays 3 most recent blog posts on homepage
 */

$latest_posts = new WP_Query([
  'post_type' => 'post',
  'posts_per_page' => 3,
  'post_status' => 'publish'
]);
?>

<section id="blog" class="py-20 lg:py-28 bg-background">
  <div class="max-w-6xl mx-auto px-4">
    <!-- Section Header -->
    <div class="text-center mb-14">
      <span class="inline-flex items-center justify-center mb-4 text-[13px] text-primary font-medium tracking-wide">
        <span class="w-8 h-px bg-primary/40 mr-3"></span>
        Latest News
        <span class="w-8 h-px bg-primary/40 ml-3"></span>
      </span>
      <h2 class="text-3xl md:text-4xl font-semibold tracking-tight text-foreground mb-4">
        From Our Blog
      </h2>
      <p class="text-muted-foreground text-lg max-w-2xl mx-auto">
        Stay informed with the latest news, tips, and insights on firearms, training, and Maryland gun laws.
      </p>
    </div>

    <?php if ($latest_posts->have_posts()) : ?>
      <!-- Posts Grid -->
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
          <article class="blog-card group bg-card rounded-2xl border border-border overflow-hidden hover:border-primary/30 hover:shadow-xl hover:shadow-primary/5 transition-all duration-300">
            <!-- Featured Image -->
            <?php if (has_post_thumbnail()) : ?>
              <a href="<?php the_permalink(); ?>" class="block aspect-[16/10] overflow-hidden">
                <?php the_post_thumbnail('large', ['class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500']); ?>
              </a>
            <?php else : ?>
              <a href="<?php the_permalink(); ?>" class="block aspect-[16/10] bg-muted flex items-center justify-center">
                <svg class="w-12 h-12 text-muted-foreground/30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
              </a>
            <?php endif; ?>

            <!-- Content -->
            <div class="p-6">
              <!-- Category -->
              <?php 
              $categories = get_the_category();
              if ($categories) : ?>
                <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>" class="inline-block text-[11px] font-medium text-primary uppercase tracking-wider mb-3 hover:text-primary/80 transition-colors">
                  <?php echo esc_html($categories[0]->name); ?>
                </a>
              <?php endif; ?>

              <!-- Title -->
              <h3 class="text-[17px] font-semibold text-foreground mb-3 leading-snug group-hover:text-primary transition-colors">
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </h3>

              <!-- Excerpt -->
              <p class="text-muted-foreground text-[14px] leading-relaxed mb-4 line-clamp-2">
                <?php echo wp_trim_words(get_the_excerpt(), 18, '...'); ?>
              </p>

              <!-- Meta -->
              <div class="flex items-center justify-between pt-4 border-t border-border">
                <time datetime="<?php echo get_the_date('c'); ?>" class="text-[12px] text-muted-foreground">
                  <?php echo get_the_date('M j, Y'); ?>
                </time>
                <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-[13px] text-primary font-medium group-hover:gap-2 transition-all">
                  Read More
                  <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
              </div>
            </div>
          </article>
        <?php endwhile; ?>
      </div>

      <!-- View All Link -->
      <div class="text-center mt-12">
        <a href="<?php echo get_permalink(get_page_by_path('blog')); ?>" class="inline-flex items-center justify-center px-6 py-3.5 rounded-xl border border-border bg-card text-foreground text-[15px] font-medium hover:bg-primary hover:text-white hover:border-primary transition-all duration-200">
          View All Articles
          <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
        </a>
      </div>

      <?php wp_reset_postdata(); ?>

    <?php else : ?>
      <!-- No Posts -->
      <div class="text-center py-12">
        <div class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mx-auto mb-6">
          <svg class="w-8 h-8 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
        </div>
        <h3 class="text-xl font-semibold text-foreground mb-2">No posts yet</h3>
        <p class="text-muted-foreground text-[15px]">Check back soon for new content.</p>
      </div>
    <?php endif; ?>
  </div>
</section>
