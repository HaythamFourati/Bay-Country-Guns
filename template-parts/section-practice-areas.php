<?php
/**
 * Services Section - Bay Country Guns
 * ============================================
 * Displays a grid of firearm services with icons.
 * Dark theme with red accents.
 */

$services = [
  [
    'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>',
    'title' => 'Firearms Sales',
    'description' => 'Wide selection of handguns, rifles, and shotguns from trusted manufacturers. Maryland-compliant inventory with expert guidance.',
    'url' => home_url('/firearms-sales/'),
    'external' => false
  ],
  [
    'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>',
    'title' => 'Firearm Customization',
    'description' => 'Professional modifications, upgrades, and custom work. Trigger jobs, sight installations, and performance enhancements.',
    'url' => home_url('/firearm-customization/'),
    'external' => false
  ],
  [
    'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/><path d="m9 12 2 2 4-4"/></svg>',
    'title' => 'Cleaning & Maintenance',
    'description' => 'Expert cleaning, inspection, and maintenance services. Keep your firearms in optimal condition with professional care.',
    'url' => home_url('/cleaning-maintenance/'),
    'external' => false
  ],
  [
    'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>',
    'title' => 'BCG Defensive Training',
    'description' => 'Comprehensive training courses for all skill levels. Safety first approach with certified instructors.',
    'url' => SITE_LINK_TRAINING,
    'external' => true
  ],
  [
    'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>',
    'title' => 'Digital Fingerprinting',
    'description' => 'Live Scan fingerprinting for ATF, FBI, and state requirements. Fast, accurate, and compliant processing.',
    'url' => SITE_LINK_FINGERPRINTING,
    'external' => true
  ],
  [
    'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>',
    'title' => 'FFL Transfers',
    'description' => 'Licensed dealer transfers for online purchases. Smooth, compliant process with competitive fees.',
    'url' => home_url('/ffl-transfer-request/'),
    'external' => false
  ],
  [
    'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
    'title' => 'Compliance Services',
    'description' => 'Navigate Maryland firearm regulations with confidence. Expert guidance on legal requirements and documentation.',
    'url' => home_url('/compliance-services/'),
    'external' => false
  ],
  [
    'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>',
    'title' => 'Accessories & Gear',
    'description' => 'Quality accessories, ammunition, holsters, safes, and gear. Everything you need under one roof.',
    'url' => home_url('/accessories-gear/'),
    'external' => false
  ]
];
?>
<section id="services" class="py-16 lg:py-24">
  <div class="max-w-6xl mx-auto px-4">
    <!-- Section Header -->
    <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-4 lg:gap-6 mb-10 lg:mb-14">
      <div class="max-w-xl">
        <span class="inline-flex items-center mb-4 text-[13px] text-primary font-medium tracking-wide">
          <span class="w-8 h-px bg-primary/40 mr-3"></span>
          Professional Firearm Services
        </span>
        <h2 class="text-3xl md:text-4xl font-semibold tracking-tight text-foreground">
          Complete Firearm Solutions
        </h2>
      </div>
      <p class="text-muted-foreground text-[15px] leading-relaxed max-w-md lg:text-right">
        From sales to training, maintenance to compliance — your one-stop destination for professional firearm services in Maryland.
      </p>
    </div>

    <!-- Cards Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-5">
      <?php foreach ($services as $index => $service): ?>
      <article class="practice-card group relative p-6 rounded-2xl bg-card border border-border hover:border-primary/30 hover:shadow-xl hover:shadow-primary/10 transition-all duration-300">
        <div class="flex flex-col gap-4">
          <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center flex-shrink-0 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
            <?php echo $service['icon']; ?>
          </div>
          <div class="flex-1 min-w-0">
            <h3 class="text-[16px] font-semibold text-foreground mb-2 group-hover:text-primary transition-colors"><?php echo esc_html($service['title']); ?></h3>
            <p class="text-muted-foreground text-[13px] leading-relaxed"><?php echo esc_html($service['description']); ?></p>
          </div>
        </div>
        <div class="mt-5 pt-4 border-t border-border">
          <a href="<?php echo esc_url($service['url']); ?>" <?php echo !empty($service['external']) ? 'target="_blank" rel="noopener"' : ''; ?> class="inline-flex items-center text-[13px] text-primary font-medium group-hover:gap-2 transition-all">
            Learn More 
            <?php if (!empty($service['external'])) : ?>
              <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
            <?php else : ?>
              <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
            <?php endif; ?>
          </a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
