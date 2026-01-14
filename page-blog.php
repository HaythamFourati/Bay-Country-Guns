<?php
/**
 * Template Name: Blog
 * Blog Page Template - Enhanced Dark Theme Design
 */

get_header(); ?>

<div class="min-h-screen bg-background text-foreground">
  <?php get_template_part('template-parts/header-nav'); ?>
  
  <!-- Hero Section -->
  <section class="relative pt-32 pb-12 lg:pt-36 lg:pb-16">
    <div class="max-w-6xl mx-auto px-4">
      <div class="blog-hero-content text-center max-w-3xl mx-auto">
        <span class="inline-flex items-center justify-center mb-4 text-[13px] text-primary font-medium tracking-wide">
          <span class="w-8 h-px bg-primary/40 mr-3"></span>
          Our Blog
          <span class="w-8 h-px bg-primary/40 ml-3"></span>
        </span>
        
        <h1 class="text-4xl md:text-5xl font-semibold tracking-tight mb-6 leading-[1.1] text-foreground">
          News & Insights
        </h1>
        
        <p class="text-lg text-muted-foreground leading-relaxed">
          Stay informed with the latest news, tips, and insights on firearms, training, Maryland gun laws, and industry updates.
        </p>
      </div>
    </div>
  </section>

  <?php
  // Query blog posts
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $blog_query = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 7,
    'paged' => $paged
  ]);
  
  if ($blog_query->have_posts()) : 
    $post_count = 0;
  ?>

  <!-- Featured Post (First Post) -->
  <?php while ($blog_query->have_posts()) : $blog_query->the_post(); $post_count++; ?>
    <?php if ($post_count === 1 && $paged === 1) : ?>
      <section class="pb-12">
        <div class="max-w-6xl mx-auto px-4">
          <article class="group relative bg-card rounded-2xl border border-border overflow-hidden hover:border-primary/30 transition-all duration-300">
            <div class="grid lg:grid-cols-2 gap-0">
              <!-- Featured Image -->
              <a href="<?php the_permalink(); ?>" class="block aspect-[16/10] lg:aspect-auto lg:min-h-[400px] overflow-hidden">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('full', ['class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-700']); ?>
                <?php else : ?>
                  <div class="w-full h-full bg-muted flex items-center justify-center">
                    <svg class="w-16 h-16 text-muted-foreground/30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                  </div>
                <?php endif; ?>
              </a>
              
              <!-- Content -->
              <div class="p-8 lg:p-10 flex flex-col justify-center">
                <div class="flex items-center gap-4 mb-4">
                  <?php 
                  $categories = get_the_category();
                  if ($categories) : ?>
                    <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>" class="inline-flex items-center px-3 py-1 rounded-full bg-primary/10 text-[11px] font-semibold text-primary uppercase tracking-wider hover:bg-primary/20 transition-colors">
                      <?php echo esc_html($categories[0]->name); ?>
                    </a>
                  <?php endif; ?>
                  <span class="text-[12px] text-muted-foreground">
                    <?php echo get_the_date('M j, Y'); ?>
                  </span>
                </div>
                
                <h2 class="text-2xl lg:text-3xl font-semibold text-foreground mb-4 leading-tight group-hover:text-primary transition-colors">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                </h2>
                
                <p class="text-muted-foreground text-[15px] leading-relaxed mb-6 line-clamp-3">
                  <?php echo wp_trim_words(get_the_excerpt(), 35, '...'); ?>
                </p>
                
                <div class="flex items-center justify-between">
                  <div class="flex items-center gap-3">
                    <?php echo get_avatar(get_the_author_meta('ID'), 36, '', '', ['class' => 'w-9 h-9 rounded-full']); ?>
                    <div>
                      <p class="text-[13px] font-medium text-foreground"><?php the_author(); ?></p>
                      <p class="text-[11px] text-muted-foreground"><?php echo ceil(str_word_count(get_the_content()) / 200); ?> min read</p>
                    </div>
                  </div>
                  <a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-primary text-white text-[13px] font-medium hover:bg-primary/90 transition-colors">
                    Read Article
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                  </a>
                </div>
              </div>
            </div>
          </article>
        </div>
      </section>
    <?php endif; ?>
  <?php endwhile; ?>

  <!-- Blog Posts Grid -->
  <section class="pb-24">
    <div class="max-w-6xl mx-auto px-4">
      <?php 
      // Reset and skip first post on page 1
      $blog_query->rewind_posts();
      $post_count = 0;
      ?>
      
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php while ($blog_query->have_posts()) : $blog_query->the_post(); $post_count++; ?>
          <?php if ($post_count === 1 && $paged === 1) continue; // Skip featured post ?>
          
          <article class="blog-card group bg-card rounded-2xl border border-border overflow-hidden hover:border-primary/30 hover:shadow-xl hover:shadow-primary/5 transition-all duration-300">
            <!-- Featured Image -->
            <a href="<?php the_permalink(); ?>" class="block aspect-[16/10] overflow-hidden">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large', ['class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500']); ?>
              <?php else : ?>
                <div class="w-full h-full bg-muted flex items-center justify-center">
                  <svg class="w-12 h-12 text-muted-foreground/30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                </div>
              <?php endif; ?>
            </a>

            <!-- Content -->
            <div class="p-6">
              <!-- Category & Date -->
              <div class="flex items-center gap-3 mb-3">
                <?php 
                $categories = get_the_category();
                if ($categories) : ?>
                  <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>" class="text-[11px] font-semibold text-primary uppercase tracking-wider hover:text-primary/80 transition-colors">
                    <?php echo esc_html($categories[0]->name); ?>
                  </a>
                  <span class="w-1 h-1 rounded-full bg-muted-foreground/40"></span>
                <?php endif; ?>
                <time datetime="<?php echo get_the_date('c'); ?>" class="text-[11px] text-muted-foreground">
                  <?php echo get_the_date('M j, Y'); ?>
                </time>
              </div>

              <!-- Title -->
              <h2 class="text-[17px] font-semibold text-foreground mb-3 leading-snug group-hover:text-primary transition-colors line-clamp-2">
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </h2>

              <!-- Excerpt -->
              <p class="text-muted-foreground text-[14px] leading-relaxed mb-5 line-clamp-2">
                <?php echo wp_trim_words(get_the_excerpt(), 18, '...'); ?>
              </p>

              <!-- Author & Read More -->
              <div class="flex items-center justify-between pt-4 border-t border-border">
                <div class="flex items-center gap-2">
                  <?php echo get_avatar(get_the_author_meta('ID'), 28, '', '', ['class' => 'w-7 h-7 rounded-full']); ?>
                  <span class="text-[12px] text-muted-foreground"><?php the_author(); ?></span>
                </div>
                <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-[12px] text-primary font-medium hover:gap-2 transition-all">
                  Read
                  <svg class="w-3.5 h-3.5 ml-1 group-hover:translate-x-1 transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
              </div>
            </div>
          </article>
        <?php endwhile; ?>
      </div>

      <!-- Pagination -->
      <?php
      $pagination = paginate_links([
        'total' => $blog_query->max_num_pages,
        'current' => $paged,
        'prev_text' => '<svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m15 18-6-6 6-6"/></svg>',
        'next_text' => '<svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"/></svg>',
        'type' => 'array',
      ]);
      
      if ($pagination) : ?>
        <div class="mt-16 flex justify-center">
          <nav class="inline-flex items-center gap-1 p-1.5 rounded-xl bg-card border border-border" aria-label="Pagination">
            <?php foreach ($pagination as $page) : ?>
              <span class="[&>a]:px-4 [&>a]:py-2 [&>a]:rounded-lg [&>a]:text-[14px] [&>a]:font-medium [&>a]:text-foreground/70 [&>a]:hover:bg-primary/10 [&>a]:hover:text-primary [&>a]:transition-colors [&>a]:flex [&>a]:items-center [&>a]:justify-center [&>span]:px-4 [&>span]:py-2 [&>span]:rounded-lg [&>span]:text-[14px] [&>span]:font-medium [&>span.current]:bg-primary [&>span.current]:text-white">
                <?php echo $page; ?>
              </span>
            <?php endforeach; ?>
          </nav>
        </div>
      <?php endif; ?>

      <?php wp_reset_postdata(); ?>
    </div>
  </section>

  <?php else : ?>
    <!-- No Posts -->
    <section class="pb-24">
      <div class="max-w-6xl mx-auto px-4">
        <div class="text-center py-16">
          <div class="w-20 h-20 rounded-2xl bg-card border border-border flex items-center justify-center mx-auto mb-6">
            <svg class="w-10 h-10 text-muted-foreground" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
          </div>
          <h2 class="text-2xl font-semibold text-foreground mb-3">No posts yet</h2>
          <p class="text-muted-foreground text-[16px] mb-6">We're working on some great content. Check back soon!</p>
          <a href="<?php echo home_url(); ?>" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-primary text-white text-[14px] font-medium hover:bg-primary/90 transition-colors">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 19-7-7 7-7"/><path d="M19 12H5"/></svg>
            Back to Home
          </a>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php get_template_part('template-parts/section-contact'); ?>
  <?php get_template_part('template-parts/footer-site'); ?>
</div>

<!-- React Enhancement Root -->
<div id="react-enhancer"></div>

<?php get_footer();
