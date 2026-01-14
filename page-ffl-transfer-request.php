<?php
/**
 * Template Name: FFL Transfer Request
 * FFL Transfer Request Page - Bay Country Guns
 */

get_header(); ?>

<div class="min-h-screen bg-background text-foreground">
  <?php get_template_part('template-parts/header-nav'); ?>
  
  <!-- Hero Section -->
  <section class="relative pt-32 pb-12 lg:pt-36 lg:pb-16">
    <div class="max-w-6xl mx-auto px-4">
      <div class="text-center max-w-3xl mx-auto">
        <span class="inline-flex items-center justify-center mb-4 text-[13px] text-primary font-medium tracking-wide">
          <span class="w-8 h-px bg-primary/40 mr-3"></span>
          FFL Services
          <span class="w-8 h-px bg-primary/40 ml-3"></span>
        </span>
        
        <h1 class="text-4xl md:text-5xl font-semibold tracking-tight mb-6 leading-[1.1] text-foreground">
          FFL Transfer Request
        </h1>
        
        <p class="text-lg text-muted-foreground leading-relaxed">
          To streamline the process of transferring firearms, we require the following information. Please fill out the form below and we'll handle the rest.
        </p>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <section class="pb-24">
    <div class="max-w-6xl mx-auto px-4">
      <div class="grid lg:grid-cols-5 gap-12">
        
        <!-- Left Column - Form -->
        <div class="lg:col-span-3">
          <!-- Contact Form 7 Shortcode -->
          <!-- Replace FORM_ID with your actual Contact Form 7 form ID -->
          <!-- See cf7-ffl-transfer-form.txt for the form code to paste into CF7 -->
          <?php echo do_shortcode('[contact-form-7 id="fb1e695" title="FFL TRANSFER REQUEST"]'); ?>
        </div>

        <!-- Right Column - Info & Fees -->
        <div class="lg:col-span-2 space-y-6">
          
          <!-- Transfer Fees -->
          <div class="bg-card rounded-2xl border border-border p-6 lg:p-8 sticky top-28">
            <h3 class="text-lg font-semibold text-foreground mb-6 flex items-center gap-2">
              <svg class="w-5 h-5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
              Transfer Fees
            </h3>
            
            <div class="space-y-4">
              <div class="flex items-center justify-between p-4 rounded-xl bg-background border border-border">
                <div>
                  <p class="text-[15px] font-medium text-foreground">Pistols</p>
                  <p class="text-[12px] text-muted-foreground">Handguns & revolvers</p>
                </div>
                <span class="text-xl font-bold text-primary">$75</span>
              </div>
              
              <div class="flex items-center justify-between p-4 rounded-xl bg-background border border-border">
                <div>
                  <p class="text-[15px] font-medium text-foreground">Rifles</p>
                  <p class="text-[12px] text-muted-foreground">Long guns & shotguns</p>
                </div>
                <span class="text-xl font-bold text-primary">$60</span>
              </div>
              
              <div class="flex items-center justify-between p-4 rounded-xl bg-muted/30 border border-border">
                <div>
                  <p class="text-[15px] font-medium text-foreground">Without Form</p>
                  <p class="text-[12px] text-muted-foreground">No pre-submitted transfer form</p>
                </div>
                <span class="text-xl font-bold text-amber-400">$100</span>
              </div>
            </div>
            
            <p class="mt-6 text-[12px] text-muted-foreground leading-relaxed">
              * Fees are per firearm. Additional fees may apply for multiple transfers or special circumstances.
            </p>
          </div>

          <!-- Contact Info -->
          <div class="bg-card rounded-2xl border border-border p-6 lg:p-8">
            <h3 class="text-lg font-semibold text-foreground mb-4">Questions?</h3>
            <p class="text-[14px] text-muted-foreground mb-4">
              Need help with your FFL transfer? Contact us directly.
            </p>
            <div class="space-y-3">
              <a href="tel:<?php echo esc_attr(SITE_PHONE_LINK); ?>" class="flex items-center gap-3 text-[14px] text-foreground hover:text-primary transition-colors">
                <svg class="w-4 h-4 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                <?php echo esc_html(SITE_PHONE); ?>
              </a>
              <a href="mailto:baycountryguns@gmail.com" class="flex items-center gap-3 text-[14px] text-foreground hover:text-primary transition-colors">
                <svg class="w-4 h-4 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                baycountryguns@gmail.com
              </a>
            </div>
          </div>

          <!-- Store Images -->
          <div class="rounded-2xl overflow-hidden border border-border">
            <img 
              src="https://images.unsplash.com/photo-1595590424283-b8f17842773f?w=600&q=80" 
              alt="Gun Store Interior" 
              class="w-full h-48 object-cover"
            />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Transfer Procedure Section -->
  <section class="relative py-20 lg:py-28 overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
      <img 
        src="https://baycountryguns.com/wp-content/uploads/2023/12/AdobeStock_314669981-768x512.jpg" 
        alt="Firearm Transfer" 
        class="w-full h-full object-cover"
      />
      <div class="absolute inset-0 bg-background/90 backdrop-blur-sm"></div>
    </div>
    
    <div class="relative max-w-6xl mx-auto px-4">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <!-- Content -->
        <div>
          <h2 class="text-3xl md:text-4xl font-semibold text-foreground mb-6 leading-tight">
            Firearms Transfer Procedure
          </h2>
          
          <div class="mb-6 p-4 rounded-xl bg-primary/10 border border-primary/20">
            <p class="text-[14px] text-foreground leading-relaxed">
              <strong>Important:</strong> If you are transferring a <strong>handgun</strong>, first verify that it is on the <a href="https://mdsp.maryland.gov/Organization/Pages/CriminalInvestigationBureau/LicensingDivision/HandgunRoster.aspx" target="_blank" rel="noopener" class="text-primary hover:underline">Maryland Handgun Roster</a>.
            </p>
          </div>
          
          <p class="text-muted-foreground mb-6">Follow these steps to complete your firearm transfer:</p>
          
          <ol class="space-y-4">
            <li class="flex gap-4">
              <span class="flex-shrink-0 w-7 h-7 rounded-full bg-primary/20 text-primary text-[13px] font-bold flex items-center justify-center">1</span>
              <div>
                <strong class="text-foreground">Verify Handgun Legality:</strong>
                <span class="text-muted-foreground"> Confirm that the firearm is legal in Maryland.</span>
              </div>
            </li>
            <li class="flex gap-4">
              <span class="flex-shrink-0 w-7 h-7 rounded-full bg-primary/20 text-primary text-[13px] font-bold flex items-center justify-center">2</span>
              <div>
                <strong class="text-foreground">Contact Us:</strong>
                <span class="text-muted-foreground"> Give us a call to inquire about pricing and availability.</span>
              </div>
            </li>
            <li class="flex gap-4">
              <span class="flex-shrink-0 w-7 h-7 rounded-full bg-primary/20 text-primary text-[13px] font-bold flex items-center justify-center">3</span>
              <div>
                <strong class="text-foreground">Fill Out the Transfer Form:</strong>
                <span class="text-muted-foreground"> Use the form provided on this page.</span>
              </div>
            </li>
            <li class="flex gap-4">
              <span class="flex-shrink-0 w-7 h-7 rounded-full bg-primary/20 text-primary text-[13px] font-bold flex items-center justify-center">4</span>
              <div>
                <strong class="text-foreground">FFL Request:</strong>
                <span class="text-muted-foreground"> If the seller does not already have our FFL, have them email us to request it.</span>
              </div>
            </li>
            <li class="flex gap-4">
              <span class="flex-shrink-0 w-7 h-7 rounded-full bg-primary/20 text-primary text-[13px] font-bold flex items-center justify-center">5</span>
              <div>
                <strong class="text-foreground">Shipping & Processing:</strong>
                <span class="text-muted-foreground"> Wait for your new firearm to arrive.</span>
              </div>
            </li>
            <li class="flex gap-4">
              <span class="flex-shrink-0 w-7 h-7 rounded-full bg-primary/20 text-primary text-[13px] font-bold flex items-center justify-center">6</span>
              <div>
                <strong class="text-foreground">Processing Time:</strong>
                <span class="text-muted-foreground"> Allow 24-48 hours for us to enter your firearm into our system.</span>
              </div>
            </li>
            <li class="flex gap-4">
              <span class="flex-shrink-0 w-7 h-7 rounded-full bg-primary/20 text-primary text-[13px] font-bold flex items-center justify-center">7</span>
              <div>
                <strong class="text-foreground">Notification:</strong>
                <span class="text-muted-foreground"> Once we process your firearm, we will call you to complete the required paperwork.</span>
              </div>
            </li>
            <li class="flex gap-4">
              <span class="flex-shrink-0 w-7 h-7 rounded-full bg-primary/20 text-primary text-[13px] font-bold flex items-center justify-center">8</span>
              <div>
                <strong class="text-foreground">MSP Form 77R:</strong>
                <span class="text-muted-foreground"> For regulated firearms (e.g., handguns), you can save time by completing the Maryland State Police Form 77R prior to visiting our store.</span>
              </div>
            </li>
          </ol>
        </div>
        
        <!-- Images -->
        <div class="grid grid-cols-2 gap-4">
          <div class="space-y-4">
            <div class="rounded-2xl overflow-hidden border border-border aspect-[4/5]">
              <img 
                src="https://baycountryguns.com/wp-content/uploads/2023/12/miami-guns_2.jpg" 
                alt="Handgun Close-up" 
                class="w-full h-full object-cover"
              />
            </div>
            <div class="rounded-2xl overflow-hidden border border-border aspect-square">
              <img 
                src="https://baycountryguns.com/wp-content/uploads/2023/12/AdobeStock_314669981-768x512.jpg" 
                alt="Ammunition Display" 
                class="w-full h-full object-cover"
              />
            </div>
          </div>
          <div class="pt-8">
            <div class="rounded-2xl overflow-hidden border border-border aspect-[3/4]">
              <img 
                src="https://baycountryguns.com/wp-content/uploads/2023/12/shop1_orig-1024x517.jpg" 
                alt="Bay Country Guns Store Interior" 
                class="w-full h-full object-cover"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Handgun Requirements Section -->
  <section class="py-20 lg:py-28 bg-card border-y border-border">
    <div class="max-w-6xl mx-auto px-4">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <!-- Image -->
        <div class="order-2 lg:order-1">
          <div class="relative">
            <div class="rounded-2xl overflow-hidden border border-border">
              <img 
                src="https://baycountryguns.com/wp-content/uploads/2023/12/shop1_orig-1024x517.jpg" 
                alt="Store Interior" 
                class="w-full aspect-[4/3] object-cover"
              />
            </div>
            <!-- Floating Badge -->
            <div class="absolute -bottom-4 -right-4 bg-primary text-white px-5 py-3 rounded-xl shadow-lg shadow-primary/25">
              <p class="text-[13px] font-semibold">Maryland Licensed FFL</p>
            </div>
          </div>
        </div>
        
        <!-- Content -->
        <div class="order-1 lg:order-2">
          <span class="inline-flex items-center mb-4 text-[13px] text-primary font-medium tracking-wide">
            <span class="w-8 h-px bg-primary/40 mr-3"></span>
            Important Notice
          </span>
          
          <h2 class="text-3xl md:text-4xl font-semibold text-foreground mb-6 leading-tight">
            Additional Requirements for Handgun Purchases
          </h2>
          
          <p class="text-muted-foreground mb-8 text-[15px] leading-relaxed">
            If you are purchasing a handgun online and using Bay Country Guns as a transfer location, ensure that:
          </p>
          
          <div class="space-y-4 mb-8">
            <div class="flex items-start gap-4 p-4 rounded-xl bg-background border border-border">
              <div class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center">
                <svg class="w-5 h-5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
              </div>
              <div>
                <p class="text-[15px] font-medium text-foreground">You are a <strong>Maryland resident</strong>.</p>
              </div>
            </div>
            
            <div class="flex items-start gap-4 p-4 rounded-xl bg-background border border-border">
              <div class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center">
                <svg class="w-5 h-5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/><line x1="7" y1="8" x2="17" y2="8"/><line x1="7" y1="12" x2="17" y2="12"/><line x1="7" y1="16" x2="13" y2="16"/></svg>
              </div>
              <div>
                <p class="text-[15px] font-medium text-foreground">You possess a valid <strong>Maryland driver's license</strong>.</p>
              </div>
            </div>
            
            <div class="flex items-start gap-4 p-4 rounded-xl bg-background border border-border">
              <div class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center">
                <svg class="w-5 h-5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
              </div>
              <div>
                <p class="text-[15px] font-medium text-foreground">You have a <strong>Maryland Handgun Qualification License (HQL)</strong>.</p>
              </div>
            </div>
          </div>
          
          <div class="p-5 rounded-xl bg-amber-500/10 border border-amber-500/20">
            <p class="text-[14px] text-muted-foreground leading-relaxed">
              <strong class="text-amber-400">⚠️ Notice:</strong> Failure to meet these requirements may result in delays. Please contact us if you need assistance verifying your eligibility.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/section-contact'); ?>
  <?php get_template_part('template-parts/footer-site'); ?>
</div>

<!-- React Enhancement Root -->
<div id="react-enhancer"></div>

<?php get_footer();
