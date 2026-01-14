<?php
/**
 * Single Blog Post Template - Clean 2025 Modern Design
 */

get_header(); ?>

<div class="min-h-screen bg-background text-foreground">
  <?php get_template_part('template-parts/header-nav'); ?>
  
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
  <!-- Article Header -->
  <article class="single-post">
    <header class="pt-28 pb-12 lg:pt-32 lg:pb-16">
      <div class="max-w-3xl mx-auto px-4">
        <div class="single-post-header">
          <!-- Back Link & Category -->
          <div class="flex items-center gap-6 mb-6">
            <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="inline-flex items-center gap-2 text-[13px] text-primary font-medium hover:text-primary/80 transition-colors">
              <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 19-7-7 7-7"/><path d="M19 12H5"/></svg>
              Back to Blog
            </a>
            <?php 
            $categories = get_the_category();
            if ($categories) : ?>
              <span class="inline-flex items-center text-[13px] text-primary font-medium tracking-wide">
                <span class="w-8 h-px bg-primary/40 mr-3"></span>
                <?php echo esc_html($categories[0]->name); ?>
              </span>
            <?php endif; ?>
          </div>

          <!-- Title -->
          <h1 class="text-3xl md:text-4xl lg:text-[44px] font-semibold tracking-tight text-foreground leading-[1.15] mb-6">
            <?php the_title(); ?>
          </h1>

          <!-- Meta -->
          <div class="flex flex-wrap items-center gap-4 text-[14px] text-muted-foreground">
            <!-- Author -->
            <div class="flex items-center gap-2">
              <?php echo get_avatar(get_the_author_meta('ID'), 32, '', '', ['class' => 'w-8 h-8 rounded-full']); ?>
              <span class="font-medium text-foreground"><?php the_author(); ?></span>
            </div>
            
            <span class="w-1 h-1 rounded-full bg-muted-foreground/50"></span>
            
            <!-- Date -->
            <time datetime="<?php echo get_the_date('c'); ?>">
              <?php echo get_the_date('F j, Y'); ?>
            </time>
            
            <span class="w-1 h-1 rounded-full bg-muted-foreground/50"></span>
            
            <!-- Reading Time -->
            <span><?php echo ceil(str_word_count(get_the_content()) / 200); ?> min read</span>
          </div>
        </div>
      </div>
    </header>

    <!-- Featured Image -->
    <?php if (has_post_thumbnail()) : ?>
      <div class="max-w-4xl mx-auto px-4 mb-12">
        <div class="single-post-image rounded-2xl overflow-hidden">
          <?php the_post_thumbnail('full', ['class' => 'w-full h-auto']); ?>
        </div>
      </div>
    <?php endif; ?>

    <!-- Content -->
    <div class="max-w-3xl mx-auto px-4 pb-16">
      <?php 
      // Trigger content filter to extract headings
      $content = apply_filters('the_content', get_the_content());
      
      // Render Table of Contents if headings exist
      echo render_table_of_contents();
      ?>
      
      <div class="single-post-content prose prose-lg max-w-none
        prose-headings:font-semibold prose-headings:tracking-tight prose-headings:text-foreground
        prose-h2:text-2xl prose-h2:mt-12 prose-h2:mb-4
        prose-h3:text-xl prose-h3:mt-8 prose-h3:mb-3
        prose-p:text-muted-foreground prose-p:leading-relaxed prose-p:mb-6
        prose-a:text-primary prose-a:no-underline hover:prose-a:underline
        prose-strong:text-foreground prose-strong:font-semibold
        prose-ul:text-muted-foreground prose-ol:text-muted-foreground
        prose-li:mb-2
        prose-blockquote:border-l-4 prose-blockquote:border-primary prose-blockquote:pl-6 prose-blockquote:italic prose-blockquote:text-foreground/80
        prose-img:rounded-xl
        prose-code:text-primary prose-code:bg-primary/10 prose-code:px-1.5 prose-code:py-0.5 prose-code:rounded prose-code:text-[14px]
        prose-pre:bg-foreground prose-pre:text-white prose-pre:rounded-xl
      ">
        <?php echo $content; ?>
      </div>

      <!-- Tags -->
      <?php 
      $tags = get_the_tags();
      if ($tags) : 
        $tags = array_slice($tags, 0, 10); // Limit to 10 tags max
      ?>
        <div class="mt-12 pt-8 border-t border-border">
          <div class="flex flex-wrap items-center gap-2">
            <span class="text-[13px] text-muted-foreground mr-2">Tags:</span>
            <?php foreach ($tags as $tag) : ?>
              <a href="<?php echo get_tag_link($tag->term_id); ?>" class="px-3 py-1.5 rounded-lg bg-muted/50 text-[12px] font-medium text-foreground/70 hover:bg-primary/10 hover:text-primary transition-colors">
                <?php echo esc_html($tag->name); ?>
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endif; ?>

      <!-- Author Box -->
      <div class="mt-12 p-6 rounded-2xl bg-muted/30 border border-border/50">
        <div class="flex items-start gap-4">
          <?php echo get_avatar(get_the_author_meta('ID'), 64, '', '', ['class' => 'w-16 h-16 rounded-xl']); ?>
          <div>
            <p class="text-[12px] text-muted-foreground uppercase tracking-wider mb-1">Written by</p>
            <h3 class="text-[17px] font-semibold text-foreground mb-2"><?php the_author(); ?></h3>
            <p class="text-[14px] text-muted-foreground leading-relaxed">
              <?php echo get_the_author_meta('description') ?: "Maryland's Trusted
Firearm Professionals"; ?>
            </p>
          </div>
        </div>
      </div>

      <!-- Post Navigation -->
      <nav class="mt-12 pt-8 border-t border-border">
        <div class="grid md:grid-cols-2 gap-6">
          <?php
          $prev_post = get_previous_post();
          $next_post = get_next_post();
          ?>
          
          <?php if ($prev_post) : ?>
            <a href="<?php echo get_permalink($prev_post); ?>" class="group p-4 rounded-xl border border-border/50 hover:border-primary/20 hover:bg-primary/5 transition-all">
              <span class="text-[12px] text-muted-foreground uppercase tracking-wider flex items-center gap-1 mb-2">
                <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m15 18-6-6 6-6"/></svg>
                Previous
              </span>
              <p class="text-[15px] font-medium text-foreground group-hover:text-primary transition-colors line-clamp-2">
                <?php echo get_the_title($prev_post); ?>
              </p>
            </a>
          <?php else : ?>
            <div></div>
          <?php endif; ?>
          
          <?php if ($next_post) : ?>
            <a href="<?php echo get_permalink($next_post); ?>" class="group p-4 rounded-xl border border-border/50 hover:border-primary/20 hover:bg-primary/5 transition-all text-right">
              <span class="text-[12px] text-muted-foreground uppercase tracking-wider flex items-center justify-end gap-1 mb-2">
                Next
                <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"/></svg>
              </span>
              <p class="text-[15px] font-medium text-foreground group-hover:text-primary transition-colors line-clamp-2">
                <?php echo get_the_title($next_post); ?>
              </p>
            </a>
          <?php endif; ?>
        </div>
      </nav>
    </div>
  </article>

  <?php endwhile; endif; ?>

  <?php get_template_part('template-parts/section-contact'); ?>
  <?php get_template_part('template-parts/footer-site'); ?>
</div>

<!-- React Enhancement Root -->
<div id="react-enhancer"></div>

<?php get_footer();