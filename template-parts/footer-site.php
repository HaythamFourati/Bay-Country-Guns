<?php
/**
 * Site Footer - Bay Country Guns
 * ============================================
 * Dark theme footer with business info, hours, and compliance messaging.
 */
?>
<footer class="bg-black text-white/80">
  <!-- Main Footer -->
  <div class="max-w-6xl mx-auto px-4 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 lg:gap-8">
      <!-- Brand Column -->
      <div class="lg:col-span-4">
        <a href="<?php echo home_url(); ?>" class="flex items-center gap-3 mb-5">
          <img 
            src="https://baycountryguns.com/wp-content/uploads/2023/12/bcg-final-png.png" 
            alt="<?php echo esc_attr(SITE_NAME); ?>" 
            class="h-12 w-auto"
          />
        </a>
        <p class="text-[14px] text-white/60 leading-relaxed mb-6 max-w-xs">
          Maryland's trusted source for professional firearm services. Over two decades of experience serving Anne Arundel County and the greater Annapolis area.
        </p>
        <!-- Social Links -->
        <?php if (SITE_SOCIAL_FACEBOOK || SITE_SOCIAL_LINKEDIN || SITE_SOCIAL_TWITTER || SITE_SOCIAL_INSTAGRAM): ?>
        <div class="flex items-center gap-3">
          <?php if (SITE_SOCIAL_FACEBOOK): ?>
          <a href="<?php echo esc_url(SITE_SOCIAL_FACEBOOK); ?>" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-lg bg-white/10 hover:bg-primary flex items-center justify-center transition-colors" aria-label="Facebook">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          </a>
          <?php endif; ?>
          <?php if (SITE_SOCIAL_INSTAGRAM): ?>
          <a href="<?php echo esc_url(SITE_SOCIAL_INSTAGRAM); ?>" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-lg bg-white/10 hover:bg-primary flex items-center justify-center transition-colors" aria-label="Instagram">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
          </a>
          <?php endif; ?>
        </div>
        <?php endif; ?>
      </div>

      <!-- Services -->
      <nav aria-label="Services" class="lg:col-span-2">
        <h4 class="font-semibold text-[14px] text-white mb-5">Services</h4>
        <ul class="space-y-3">
          <li><a href="<?php echo home_url('/firearms-sales/'); ?>" class="text-[13px] text-white/60 hover:text-primary transition-colors">Firearms Sales</a></li>
          <li><a href="<?php echo home_url('/firearm-customization/'); ?>" class="text-[13px] text-white/60 hover:text-primary transition-colors">Customization</a></li>
          <li><a href="<?php echo home_url('/cleaning-maintenance/'); ?>" class="text-[13px] text-white/60 hover:text-primary transition-colors">Cleaning & Maintenance</a></li>
          <li><a href="<?php echo esc_url(SITE_LINK_TRAINING); ?>" target="_blank" rel="noopener" class="text-[13px] text-white/60 hover:text-primary transition-colors">Training</a></li>
          <li><a href="<?php echo esc_url(SITE_LINK_FINGERPRINTING); ?>" target="_blank" rel="noopener" class="text-[13px] text-white/60 hover:text-primary transition-colors">Fingerprinting</a></li>
          <li><a href="<?php echo home_url('/ffl-transfer-request/'); ?>" class="text-[13px] text-white/60 hover:text-primary transition-colors">FFL Transfers</a></li>
        </ul>
      </nav>

      <!-- Quick Links -->
      <nav aria-label="Quick Links" class="lg:col-span-2">
        <h4 class="font-semibold text-[14px] text-white mb-5">Quick Links</h4>
        <ul class="space-y-3">
          <li><a href="<?php echo home_url('/#about'); ?>" class="text-[13px] text-white/60 hover:text-primary transition-colors">About Us</a></li>
          <li><a href="<?php echo home_url('/#testimonials'); ?>" class="text-[13px] text-white/60 hover:text-primary transition-colors">Reviews</a></li>
          <li><a href="<?php echo home_url('/#contact'); ?>" class="text-[13px] text-white/60 hover:text-primary transition-colors">Contact</a></li>
          <li><a href="#" class="text-[13px] text-white/60 hover:text-primary transition-colors">Privacy Policy</a></li>
        </ul>
      </nav>

      <!-- Contact Info -->
      <div class="lg:col-span-4">
        <h4 class="font-semibold text-[14px] text-white mb-5">Contact & Hours</h4>
        <address class="space-y-4 not-italic">
          <a href="tel:<?php echo esc_attr(SITE_PHONE_LINK); ?>" class="flex items-center gap-3 text-[13px] text-white/60 hover:text-primary transition-colors">
            <div class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center flex-shrink-0">
              <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            </div>
            <?php echo esc_html(SITE_PHONE); ?>
          </a>
          
          <!-- Hours -->
          <div class="flex items-start gap-3 text-[13px] text-white/60">
            <div class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center flex-shrink-0 mt-0.5">
              <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            </div>
            <div class="space-y-1">
              <p class="text-white/80 font-medium">Tue – Sat: 10AM – 6PM</p>
              <p>Sun – Mon: Closed</p>
            </div>
          </div>

          <?php if (SITE_OFFICE_PRIMARY_ADDRESS): ?>
          <a href="https://maps.google.com/?q=75+Mayo+Road+Edgewater+MD+21037" target="_blank" rel="noopener noreferrer" class="flex items-start gap-3 text-[13px] text-white/60 hover:text-primary transition-colors">
            <div class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center flex-shrink-0 mt-0.5">
              <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <div class="space-y-1">
              <p><?php echo esc_html(SITE_OFFICE_PRIMARY_ADDRESS); ?></p>
              <p class="text-[12px]">Just south of Annapolis</p>
            </div>
          </a>
          <?php endif; ?>
        </address>
      </div>
    </div>
  </div>

  <!-- Bottom Bar -->
  <div class="border-t border-white/10">
    <div class="max-w-6xl mx-auto px-4 py-6">
      <div class="flex flex-col md:flex-row justify-between items-center gap-4">
        <p class="text-[13px] text-white/50">
          © <?php echo date('Y'); ?> <?php echo esc_html(SITE_NAME); ?>. All rights reserved.
        </p>
        <div class="flex flex-col md:flex-row items-center gap-3 md:gap-6">
          <p class="text-[11px] text-white/40 text-center md:text-right max-w-xl leading-relaxed">
            Licensed FFL Dealer · Maryland Compliant · All federal, state, and local laws apply to firearm purchases.
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>
