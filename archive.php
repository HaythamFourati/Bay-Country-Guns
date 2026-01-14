<?php
/**
 * Blog Archive Template - Enhanced Dark Theme Design
 * Used for category, tag, date, and author archives
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
          <?php 
          if (is_category()) {
            echo 'Category';
          } elseif (is_tag()) {
            echo 'Tag';
          } elseif (is_author()) {
            echo 'Author';
          } elseif (is_date()) {
            echo 'Archive';
          } else {
            echo 'Our Blog';
          }
          ?>
          <span class="w-8 h-px bg-primary/40 ml-3"></span>
        </span>
        
        <h1 class="text-4xl md:text-5xl font-semibold tracking-tight mb-6 leading-[1.1] text-foreground">
          <?php 
          if (is_category()) {
            single_cat_title();
          } elseif (is_tag()) {
            single_tag_title();
          } elseif (is_author()) {
            the_author();
          } elseif (is_date()) {
            if (is_day()) {
              echo get_the_date();
            } elseif (is_month()) {
              echo get_the_date('F Y');
            } elseif (is_year()) {
              echo get_the_date('Y');
            }
          } else {
            echo 'News & Insights';
          }
          ?>
        </h1>
        
        <p class="text-lg text-muted-foreground leading-relaxed">
          <?php 
          if (is_category() && category_description()) {
            echo category_description();
          } elseif (is_tag() && tag_description()) {
            echo tag_description();
          } else {
            echo 'Stay informed with the latest news, tips, and insights on firearms, training, Maryland gun laws, and industry updates.';
          }
          ?>
        </p>
      </div>
    </div>
  </section>

  <!-- Blog Posts Grid -->
  <section class="pb-24">
    <div class="max-w-6xl mx-auto px-4">
      <?php if (have_posts()) : ?>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <?php while (have_posts()) : the_post(); ?>
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

      <?php else : ?>
        <!-- No Posts -->
        <div class="text-center py-16">
          <div class="w-20 h-20 rounded-2xl bg-card border border-border flex items-center justify-center mx-auto mb-6">
            <svg class="w-10 h-10 text-muted-foreground" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
          </div>
          <h2 class="text-2xl font-semibold text-foreground mb-3">No posts found</h2>
          <p class="text-muted-foreground text-[16px] mb-6">There are no posts in this archive yet.</p>
          <a href="<?php echo home_url('/blog/'); ?>" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-primary text-white text-[14px] font-medium hover:bg-primary/90 transition-colors">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 19-7-7 7-7"/><path d="M19 12H5"/></svg>
            View All Posts
          </a>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <?php get_template_part('template-parts/section-contact'); ?>
  <?php get_template_part('template-parts/footer-site'); ?>
</div>

<!-- React Enhancement Root -->
<div id="react-enhancer"></div>

<?php get_footer();
