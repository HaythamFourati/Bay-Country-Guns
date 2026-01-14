<?php
/**
 * Page Content Section - Renders Gutenberg content from the page editor
 * Used on service pages to allow custom content from WordPress admin
 */

if (have_posts()) : while (have_posts()) : the_post();
  if (get_the_content()) : ?>
    <section class="py-12 bg-muted/20">
      <div class="max-w-6xl mx-auto px-4">
        <div class="bg-white rounded-2xl p-8 lg:p-12 border border-border/50 shadow-sm">
          <div class="prose prose-lg max-w-none 
            prose-headings:font-semibold prose-headings:tracking-tight prose-headings:text-foreground
            prose-h2:text-2xl prose-h2:mt-8 prose-h2:mb-4
            prose-h3:text-xl prose-h3:mt-6 prose-h3:mb-3
            prose-p:text-muted-foreground prose-p:leading-relaxed
            prose-a:text-primary prose-a:font-medium prose-a:no-underline hover:prose-a:underline
            prose-strong:text-foreground prose-strong:font-semibold
            prose-ul:text-muted-foreground prose-ol:text-muted-foreground
            prose-li:marker:text-primary
            prose-blockquote:border-l-primary prose-blockquote:bg-primary/5 prose-blockquote:py-1 prose-blockquote:px-4 prose-blockquote:rounded-r-lg prose-blockquote:not-italic
            prose-img:rounded-xl prose-img:shadow-md
            prose-hr:border-border">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </section>
  <?php endif;
endwhile; endif;
