<?php
/**
 * Contact Form Section - Bay Country Guns
 * ============================================
 * Includes Contact Form 7 integration with fallback form.
 * Dark theme with business hours and location info.
 */
?>
<section id="contact" class="py-16 lg:py-24 bg-card">
  <div class="max-w-6xl mx-auto px-4">
    <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-start">
      <!-- Left Column - Info -->
      <div class="contact-info">
        <span class="inline-flex items-center mb-4 text-[13px] text-primary font-medium tracking-wide">
          <span class="w-8 h-px bg-primary/40 mr-3"></span>
          Visit Our Store
        </span>
        <h2 class="text-3xl md:text-4xl font-semibold tracking-tight text-foreground mb-6">
          Stop By or Get In Touch
        </h2>
        <p class="text-muted-foreground text-[15px] leading-relaxed mb-8">
          Located just south of Annapolis in Edgewater, Maryland. Stop by during business hours or send us a message. We're here to help with all your firearm needs.
        </p>

        <!-- Contact Details -->
        <div class="space-y-5 mb-8">
          
        <?php if (SITE_OFFICE_PRIMARY_ADDRESS): ?>
          <a href="https://maps.google.com/?q=75+Mayo+Road+Edgewater+MD+21037" target="_blank" rel="noopener noreferrer" class="flex items-start gap-4 group">
            <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0 group-hover:bg-primary transition-colors">
              <svg class="w-5 h-5 text-primary group-hover:text-white transition-colors" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <div>
              <p class="text-[13px] text-muted-foreground mb-1">Location</p>
              <p class="text-[14px] font-medium text-foreground group-hover:text-primary transition-colors"><?php echo esc_html(SITE_OFFICE_PRIMARY_ADDRESS); ?></p>
              <p class="text-[12px] text-muted-foreground mt-1">Just south of Annapolis</p>
            </div>
          </a>
          <?php endif; ?>
        
        <a href="tel:<?php echo esc_attr(SITE_PHONE_LINK); ?>" class="flex items-center gap-4 group">
            <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center group-hover:bg-primary transition-colors">
              <svg class="w-5 h-5 text-primary group-hover:text-white transition-colors" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            </div>
            <div>
              <p class="text-[13px] text-muted-foreground">Call Us</p>
              <p class="text-[15px] font-medium text-foreground group-hover:text-primary transition-colors"><?php echo esc_html(SITE_PHONE); ?></p>
            </div>
          </a>

          <!-- Business Hours -->
          <div class="flex items-start gap-4">
            <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0">
              <svg class="w-5 h-5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            </div>
            <div>
              <p class="text-[13px] text-muted-foreground mb-2">Business Hours</p>
              <div class="space-y-1">
                <p class="text-[14px] font-medium text-foreground">Tuesday – Saturday</p>
                <p class="text-[13px] text-muted-foreground">10:00 AM – 6:00 PM</p>
                <p class="text-[14px] font-medium text-foreground mt-2">Sunday – Monday</p>
                <p class="text-[13px] text-muted-foreground">Closed</p>
              </div>
            </div>
          </div>

          
        </div>

        <!-- Trust Badge -->
        <div class="flex items-center gap-3 p-4 rounded-xl bg-background border border-border">
          <div class="w-10 h-10 rounded-lg bg-amber-400/10 flex items-center justify-center">
            <svg class="w-5 h-5 fill-amber-400 text-amber-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          </div>
          <div>
            <p class="text-[14px] font-semibold text-foreground"><?php echo esc_html(SITE_RATING); ?> Rating on <?php echo esc_html(SITE_RATING_SOURCE); ?></p>
            <p class="text-[12px] text-muted-foreground">Trusted by <?php echo esc_html(SITE_CLIENTS_HELPED); ?> customers</p>
          </div>
        </div>
      </div>

      <!-- Right Column - Form -->
      <div id="contact-form-root" class="bg-background rounded-2xl p-8 border border-border">
        <h3 class="text-xl font-semibold text-foreground mb-6">Send Us a Message</h3>
        
        <?php 
        if (shortcode_exists('contact-form-7')) {
          echo do_shortcode('[contact-form-7 id="58fe911" title="Contact Us Footer"]');
        } else {
        ?>
        <form id="contact-form" class="cf7-custom-form" method="post" action="">
          <?php wp_nonce_field('contact_form_submit', 'contact_nonce'); ?>
          
          <div class="cf7-row cf7-two-col">
            <div class="cf7-field">
              <label class="cf7-label">Full Name</label>
              <input type="text" name="name" placeholder="John Smith" class="cf7-input" required />
            </div>
            <div class="cf7-field">
              <label class="cf7-label">Phone Number</label>
              <input type="tel" name="phone" placeholder="(410) 555-1234" class="cf7-input" required />
            </div>
          </div>

          <div class="cf7-field">
            <label class="cf7-label">Email Address</label>
            <input type="email" name="email" placeholder="john@example.com" class="cf7-input" required />
          </div>

          <div class="cf7-field">
            <label class="cf7-label">Service Needed</label>
            <select name="service" class="cf7-select">
              <option value="">Select a service...</option>
              <option value="firearms-sales">Firearms Sales</option>
              <option value="customization">Firearm Customization</option>
              <option value="cleaning-maintenance">Cleaning & Maintenance</option>
              <option value="training">Firearm Training</option>
              <option value="fingerprinting">Digital Fingerprinting</option>
              <option value="ffl-transfer">FFL Transfer</option>
              <option value="compliance">Compliance Services</option>
              <option value="accessories">Accessories & Gear</option>
              <option value="other">Other</option>
            </select>
          </div>

          <div class="cf7-field">
            <label class="cf7-label">How Can We Help?</label>
            <textarea name="message" placeholder="Tell us about your firearm needs..." rows="4" class="cf7-textarea" required></textarea>
          </div>

          <div class="cf7-submit-wrap">
            <button type="submit" class="cf7-submit">Send Message</button>
          </div>

          <p class="cf7-disclaimer">By submitting, you agree to our privacy policy. We'll never share your information.</p>
        </form>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
