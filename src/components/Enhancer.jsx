import React, { useEffect, useState, useRef } from "react"
import gsap from "gsap"
import { ScrollTrigger } from "gsap/ScrollTrigger"

gsap.registerPlugin(ScrollTrigger)

// Check for reduced motion preference
const prefersReducedMotion = typeof window !== 'undefined' 
  ? window.matchMedia('(prefers-reduced-motion: reduce)').matches 
  : false

// Check if mobile (under 1024px)
const isMobile = typeof window !== 'undefined' 
  ? window.innerWidth < 1024 
  : false

/**
 * React Enhancer - Adds interactivity to PHP-rendered content
 * This component enhances the static HTML with:
 * - GSAP animations (desktop only, respects reduced motion)
 * - Navbar scroll effects
 * - Reviews carousel
 * - Mobile menu toggle
 * - Form handling
 */
function Enhancer() {
  const [currentReview, setCurrentReview] = useState(0)
  const [mobileMenuOpen, setMobileMenuOpen] = useState(false)
  const [navbarScrolled, setNavbarScrolled] = useState(false)

  // TODO: Update these reviews for your project
  const googleReviews = [
    { name: "Sarah J.", text: "Exceptional service from start to finish. The team was professional and delivered exactly what we needed." },
    { name: "Michael C.", text: "Highly recommend! Professional, knowledgeable, and truly cares about their clients." },
    { name: "Emily R.", text: "Outstanding experience. They made a complex process simple and stress-free." },
    { name: "David T.", text: "Exceptional service. They took the time to explain everything clearly." },
  ]

  // Reviews carousel auto-rotation
  useEffect(() => {
    const reviewInterval = setInterval(() => {
      setCurrentReview((prev) => (prev + 1) % googleReviews.length)
    }, 4000)
    return () => clearInterval(reviewInterval)
  }, [googleReviews.length])

  // Update reviews carousel in DOM
  useEffect(() => {
    const carouselRoot = document.getElementById('reviews-carousel-root')
    if (!carouselRoot) return

    const reviewContainer = carouselRoot.querySelector('.relative.h-16')
    if (!reviewContainer) return

    // Update the review text
    reviewContainer.innerHTML = `
      <p class="text-sm text-foreground leading-relaxed line-clamp-2">
        "${googleReviews[currentReview].text}"
      </p>
      <p class="text-xs text-muted-foreground mt-1 font-medium">— ${googleReviews[currentReview].name}</p>
    `
  }, [currentReview, googleReviews])

  // Navbar scroll effect - shrink on scroll
  useEffect(() => {
    const handleScroll = () => {
      const scrolled = window.scrollY > 80
      setNavbarScrolled(scrolled)

      const header = document.querySelector('#site-header')
      const navbar = document.querySelector('#navbar-root > div:first-child')
      const phoneLink = document.querySelector('#navbar-root a[href^="tel:"]')

      if (header) {
        header.style.paddingTop = scrolled ? '0.5rem' : '1rem'
      }

      if (navbar) {
        if (scrolled) {
          // Compact state - wider to fit all nav items
          navbar.style.maxWidth = '900px'
          navbar.style.padding = '0.5rem 1.5rem'
          navbar.style.borderRadius = '1rem'
          navbar.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.4)'
        } else {
          // Full state
          navbar.style.maxWidth = '72rem'
          navbar.style.padding = '0.75rem 1.5rem'
          navbar.style.borderRadius = '1rem'
          navbar.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.2)'
        }
      }

      // Fade phone link on compact
      if (phoneLink) {
        phoneLink.style.opacity = scrolled ? '0' : '1'
        phoneLink.style.width = scrolled ? '0' : 'auto'
        phoneLink.style.overflow = 'hidden'
        phoneLink.style.pointerEvents = scrolled ? 'none' : 'auto'
      }
    }

    window.addEventListener('scroll', handleScroll)
    handleScroll() // Initial check
    return () => window.removeEventListener('scroll', handleScroll)
  }, [])

  // Mobile menu toggle
  useEffect(() => {
    const toggleBtn = document.getElementById('mobile-menu-toggle')
    const menuPanel = document.getElementById('mobile-menu-panel')
    const iconOpen = document.getElementById('mobile-menu-icon-open')
    const iconClose = document.getElementById('mobile-menu-icon-close')
    const servicesToggle = document.getElementById('mobile-services-toggle')
    const servicesPanel = document.getElementById('mobile-services-panel')
    const servicesChevron = document.getElementById('mobile-services-chevron')
    const trainingToggle = document.getElementById('mobile-training-toggle')
    const trainingPanel = document.getElementById('mobile-training-panel')
    const trainingChevron = document.getElementById('mobile-training-chevron')
    
    if (!toggleBtn || !menuPanel) return

    const handleToggle = () => {
      const isOpen = !menuPanel.classList.contains('hidden')
      
      if (isOpen) {
        // Close menu
        menuPanel.classList.add('hidden')
        iconOpen?.classList.remove('hidden')
        iconClose?.classList.add('hidden')
        // Also close submenus
        servicesPanel?.classList.add('hidden')
        servicesChevron?.classList.remove('rotate-180')
        trainingPanel?.classList.add('hidden')
        trainingChevron?.classList.remove('rotate-180')
      } else {
        // Open menu
        menuPanel.classList.remove('hidden')
        iconOpen?.classList.add('hidden')
        iconClose?.classList.remove('hidden')
      }
      
      setMobileMenuOpen(!isOpen)
    }

    const handleServicesToggle = (e) => {
      e.preventDefault()
      if (!servicesPanel) return
      const isOpen = !servicesPanel.classList.contains('hidden')
      
      if (isOpen) {
        servicesPanel.classList.add('hidden')
        servicesChevron?.classList.remove('rotate-180')
      } else {
        servicesPanel.classList.remove('hidden')
        servicesChevron?.classList.add('rotate-180')
      }
    }

    const handleTrainingToggle = (e) => {
      e.preventDefault()
      if (!trainingPanel) return
      const isOpen = !trainingPanel.classList.contains('hidden')
      
      if (isOpen) {
        trainingPanel.classList.add('hidden')
        trainingChevron?.classList.remove('rotate-180')
      } else {
        trainingPanel.classList.remove('hidden')
        trainingChevron?.classList.add('rotate-180')
      }
    }

    // Close menu when clicking a link
    const handleLinkClick = () => {
      menuPanel.classList.add('hidden')
      iconOpen?.classList.remove('hidden')
      iconClose?.classList.add('hidden')
      setMobileMenuOpen(false)
    }

    const menuLinks = menuPanel.querySelectorAll('a')
    menuLinks.forEach(link => link.addEventListener('click', handleLinkClick))

    toggleBtn.addEventListener('click', handleToggle)
    servicesToggle?.addEventListener('click', handleServicesToggle)
    trainingToggle?.addEventListener('click', handleTrainingToggle)
    
    return () => {
      toggleBtn.removeEventListener('click', handleToggle)
      servicesToggle?.removeEventListener('click', handleServicesToggle)
      trainingToggle?.removeEventListener('click', handleTrainingToggle)
      menuLinks.forEach(link => link.removeEventListener('click', handleLinkClick))
    }
  }, [])


  // GSAP Animations - Desktop only, respects reduced motion
  useEffect(() => {
    // Skip all animations if user prefers reduced motion
    if (prefersReducedMotion) {
      // Just make everything visible immediately
      gsap.set([
        "#site-header", ".hero-content > *", ".hero-badge",
        ".service-hero-content > *", ".service-content > *",
        ".blog-hero-content > *", ".blog-card",
        ".single-post-header > *", ".single-post-image", ".single-post-content",
        "#practice-areas .max-w-xl", ".practice-card",
        "#testimonials .max-w-xl", ".testimonial-card",
        ".showcase-text-1 > *", ".showcase-text-2 > *",
        "#contact > div > *"
      ].join(', '), { opacity: 1, y: 0, x: 0, scale: 1 })
      
      // Hide image slices
      gsap.set([
        ".hero-image-slices > div",
        ".service-hero-image .hero-image-slices > div",
        ".showcase-image-1 .image-slices > div",
        ".showcase-image-2 .image-slices-2 > div"
      ].join(', '), { scaleX: 0, scaleY: 0 })
      
      return
    }

    const ctx = gsap.context(() => {
      // === ON-LOAD ANIMATIONS (both mobile and desktop) ===
      
      // Header slide in - simple, always runs
      gsap.fromTo("#site-header",
        { y: -50, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.6, ease: "power2.out" }
      )

      // Hero content simple fade in (mobile-friendly)
      if (isMobile) {
        // Mobile: Simple fade in, no text splitting
        gsap.fromTo(".hero-content > *", 
          { y: 20, opacity: 0 },
          { y: 0, opacity: 1, duration: 0.5, stagger: 0.08, ease: "power2.out", delay: 0.2 }
        )
        
        // Simple image reveal on mobile
        gsap.set(".hero-image-slices > div", { scaleY: 0 })
        
        // Hero badge simple fade
        gsap.fromTo(".hero-badge",
          { opacity: 0 },
          { opacity: 1, duration: 0.4, delay: 0.5 }
        )

        // Service page - simple fade on mobile
        const serviceHeroContent = document.querySelector('.service-hero-content')
        if (serviceHeroContent) {
          gsap.fromTo('.service-hero-content > *',
            { y: 20, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.5, stagger: 0.08, ease: "power2.out", delay: 0.2 }
          )
          gsap.set('.service-hero-image .hero-image-slices > div', { scaleY: 0 })
        }

        // Blog page - simple fade on mobile
        const blogHeroContent = document.querySelector('.blog-hero-content')
        if (blogHeroContent) {
          gsap.fromTo('.blog-hero-content > *',
            { y: 20, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.5, stagger: 0.08, ease: "power2.out", delay: 0.2 }
          )
        }

        // Single post - simple fade on mobile
        const singlePostHeader = document.querySelector('.single-post-header')
        if (singlePostHeader) {
          gsap.fromTo('.single-post-header > *',
            { y: 20, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.5, stagger: 0.06, ease: "power2.out", delay: 0.2 }
          )
        }

        // Brand partners strip simple fade on mobile
        gsap.fromTo(".brand-partners-strip",
          { y: 20, opacity: 0 },
          { y: 0, opacity: 1, duration: 0.5, ease: "power2.out", delay: 0.5 }
        )

        // Make all scroll-animated content visible on mobile (no scroll animations)
        gsap.set([
          ".service-content > *", ".blog-card", ".single-post-content",
          "#practice-areas .max-w-xl", "#practice-areas > div > p", ".practice-card",
          "#testimonials .max-w-xl", ".testimonial-card",
          ".showcase-text-1 > *", ".showcase-text-2 > *",
          "#contact > div > *"
        ].join(', '), { opacity: 1, y: 0, x: 0, scale: 1 })

        // Hide image slices on mobile to reveal images
        gsap.set([
          ".showcase-image-1 .image-slices > div", 
          ".showcase-image-2 .image-slices-2 > div",
          ".service-hero-image .hero-image-slices > div"
        ].join(', '), { scaleY: 0 })

        // Fix: set cards visible properly
        gsap.set([".practice-card", ".testimonial-card", ".blog-card"], { scale: 1, opacity: 1 })
        
        return // Exit early for mobile - no scroll animations
      }

      // === DESKTOP ONLY: Full animations ===

      // Split text reveal animation for hero heading
      const textElements = document.querySelectorAll('.hero-text-reveal')
      textElements.forEach((el) => {
        const text = el.innerHTML
        let chars = ''
        let inTag = false
        let currentTag = ''
        
        for (let i = 0; i < text.length; i++) {
          const char = text[i]
          if (char === '<') {
            inTag = true
            currentTag = char
          } else if (char === '>') {
            inTag = false
            currentTag += char
            chars += currentTag
            currentTag = ''
          } else if (inTag) {
            currentTag += char
          } else if (char === ' ') {
            chars += ' '
          } else {
            chars += `<span class="char" style="display:inline-block;opacity:0;transform:translateY(50px)">${char}</span>`
          }
        }
        el.innerHTML = chars
      })

      // Animate characters
      gsap.to(".hero-heading .char", {
        opacity: 1,
        y: 0,
        duration: 0.6,
        stagger: 0.02,
        ease: "power3.out",
        delay: 0.2
      })

      // Hero content fade in
      gsap.fromTo(".hero-content > *:not(.hero-heading)", 
        { y: 30, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.8, stagger: 0.12, ease: "power3.out", delay: 0.8 }
      )

      // Hero image slice reveal
      gsap.fromTo(".hero-image-slices > div",
        { scaleY: 1 },
        { scaleY: 0, transformOrigin: "top", duration: 0.7, stagger: 0.15, ease: "power3.inOut", delay: 0.5 }
      )

      // Brand partners strip slide up
      gsap.fromTo(".brand-partners-strip",
        { y: 40, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.8, ease: "power3.out", delay: 1.2 }
      )

      // Service page hero animations
      const serviceHeroContent = document.querySelector('.service-hero-content')
      if (serviceHeroContent) {
        gsap.fromTo('.service-hero-content > *',
          { y: 40, opacity: 0 },
          { y: 0, opacity: 1, duration: 0.8, stagger: 0.1, ease: "power3.out", delay: 0.2 }
        )
      }

      const serviceHeroImage = document.querySelector('.service-hero-image')
      if (serviceHeroImage) {
        gsap.fromTo('.service-hero-image .hero-image-slices > div',
          { scaleY: 1 },
          { scaleY: 0, transformOrigin: "top", duration: 0.7, stagger: 0.15, ease: "power3.inOut", delay: 0.5 }
        )
      }

      // Blog archive animations
      const blogHeroContent = document.querySelector('.blog-hero-content')
      if (blogHeroContent) {
        gsap.fromTo('.blog-hero-content > *',
          { y: 40, opacity: 0 },
          { y: 0, opacity: 1, duration: 0.8, stagger: 0.1, ease: "power3.out", delay: 0.2 }
        )
      }

      // Single post animations
      const singlePostHeader = document.querySelector('.single-post-header')
      if (singlePostHeader) {
        gsap.fromTo('.single-post-header > *',
          { y: 30, opacity: 0 },
          { y: 0, opacity: 1, duration: 0.7, stagger: 0.08, ease: "power3.out", delay: 0.2 }
        )
      }

      const singlePostImage = document.querySelector('.single-post-image')
      if (singlePostImage) {
        gsap.fromTo('.single-post-image',
          { scale: 1.1, opacity: 0 },
          { scale: 1, opacity: 1, duration: 1, ease: "power3.out", delay: 0.5 }
        )
      }

      // === DESKTOP SCROLL ANIMATIONS WITH BATCH ===

      // Batch practice cards
      ScrollTrigger.batch('.practice-card', {
        onEnter: (elements) => {
          gsap.fromTo(elements,
            { y: 60, opacity: 0, scale: 0.95 },
            { y: 0, opacity: 1, scale: 1, duration: 0.6, stagger: 0.1, ease: "power2.out" }
          )
        },
        start: 'top 85%',
        once: true
      })

      // Batch testimonial cards
      ScrollTrigger.batch('.testimonial-card', {
        onEnter: (elements) => {
          gsap.fromTo(elements,
            { y: 60, opacity: 0, scale: 0.95 },
            { y: 0, opacity: 1, scale: 1, duration: 0.6, stagger: 0.1, ease: "power2.out" }
          )
        },
        start: 'top 85%',
        once: true
      })

      // Batch blog cards
      ScrollTrigger.batch('.blog-card', {
        onEnter: (elements) => {
          gsap.fromTo(elements,
            { y: 60, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.6, stagger: 0.1, ease: "power2.out" }
          )
        },
        start: 'top 85%',
        once: true
      })

      // Service content - single trigger
      const serviceContent = document.querySelector('.service-content')
      if (serviceContent) {
        ScrollTrigger.create({
          trigger: '.service-content',
          start: 'top 80%',
          once: true,
          onEnter: () => {
            gsap.fromTo('.service-content > *',
              { y: 40, opacity: 0 },
              { y: 0, opacity: 1, duration: 0.6, stagger: 0.05, ease: "power2.out" }
            )
          }
        })
      }

      // Single post content
      const singlePostContent = document.querySelector('.single-post-content')
      if (singlePostContent) {
        ScrollTrigger.create({
          trigger: '.single-post-content',
          start: 'top 80%',
          once: true,
          onEnter: () => {
            gsap.fromTo('.single-post-content',
              { y: 40, opacity: 0 },
              { y: 0, opacity: 1, duration: 0.6, ease: "power2.out" }
            )
          }
        })
      }

      // Practice Areas section header
      const practiceSection = document.querySelector('#practice-areas')
      if (practiceSection) {
        ScrollTrigger.create({
          trigger: '#practice-areas',
          start: 'top 80%',
          once: true,
          onEnter: () => {
            gsap.fromTo('#practice-areas .max-w-xl, #practice-areas > div > p',
              { y: 40, opacity: 0 },
              { y: 0, opacity: 1, duration: 0.6, stagger: 0.1, ease: "power2.out" }
            )
          }
        })
      }

      // Testimonials section header
      const testimonialsSection = document.querySelector('#testimonials')
      if (testimonialsSection) {
        ScrollTrigger.create({
          trigger: '#testimonials',
          start: 'top 80%',
          once: true,
          onEnter: () => {
            gsap.fromTo('#testimonials .max-w-xl, #testimonials > div > div:first-child > p',
              { y: 40, opacity: 0 },
              { y: 0, opacity: 1, duration: 0.6, stagger: 0.1, ease: "power2.out" }
            )
          }
        })
      }

      // About section
      const aboutSection = document.querySelector('#about')
      if (aboutSection) {
        ScrollTrigger.create({
          trigger: '#about',
          start: 'top 70%',
          once: true,
          onEnter: () => {
            gsap.fromTo('.showcase-text-1 > *',
              { x: -60, opacity: 0 },
              { x: 0, opacity: 1, duration: 0.6, stagger: 0.05, ease: "power2.out" }
            )
            gsap.fromTo('.showcase-image-1 .image-slices > div',
              { scaleX: 1 },
              { scaleX: 0, transformOrigin: 'left', duration: 0.5, stagger: 0.1, ease: "power2.inOut" }
            )
          }
        })
      }

      // Meet Attorney section
      const attorneySection = document.querySelector('.showcase-text-2')
      if (attorneySection) {
        ScrollTrigger.create({
          trigger: '.showcase-text-2',
          start: 'top 70%',
          once: true,
          onEnter: () => {
            gsap.fromTo('.showcase-text-2 > *',
              { x: 60, opacity: 0 },
              { x: 0, opacity: 1, duration: 0.6, stagger: 0.05, ease: "power2.out" }
            )
            gsap.fromTo('.showcase-image-2 .image-slices-2 > div',
              { scaleY: 1 },
              { scaleY: 0, transformOrigin: 'bottom', duration: 0.5, stagger: 0.1, ease: "power2.inOut" }
            )
          }
        })
      }

      // Contact section
      const contactSection = document.querySelector('#contact')
      if (contactSection) {
        ScrollTrigger.create({
          trigger: '#contact',
          start: 'top 80%',
          once: true,
          onEnter: () => {
            gsap.fromTo('#contact > div > *',
              { y: 40, opacity: 0 },
              { y: 0, opacity: 1, duration: 0.6, stagger: 0.1, ease: "power2.out" }
            )
          }
        })
      }
    })

    return () => ctx.revert()
  }, [])

  // Form handling
  useEffect(() => {
    const form = document.getElementById('contact-form')
    if (!form) return

    const handleSubmit = (e) => {
      e.preventDefault()
      const formData = new FormData(form)
      const data = Object.fromEntries(formData.entries())
      console.log('Form submitted:', data)
      // Add your form submission logic here
      alert('Thank you for your message! We will contact you soon.')
      form.reset()
    }

    form.addEventListener('submit', handleSubmit)
    return () => form.removeEventListener('submit', handleSubmit)
  }, [])

  return null // This component only enhances existing DOM, doesn't render anything
}

export default Enhancer
