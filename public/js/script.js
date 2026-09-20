document.addEventListener('DOMContentLoaded', () => {
    // 1. AOS Initialization
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 50
        });
    }

    // 2. Body class for JS detection
    document.body.classList.add('js-active');

    // DOM Elements Cache
    const navbar = document.getElementById('navbar');
    const hamburger = document.getElementById('hamburger');
    const navLinksContainer = document.getElementById('navLinks');
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('section');
    const typedText = document.getElementById('typedText');
    const statNumbers = document.querySelectorAll('.stat-number[data-count]');
    const expTabs = document.querySelectorAll('.exp-tab[data-company]');
    const expPanels = document.querySelectorAll('.exp-panel');
    const projectCards = document.querySelectorAll('.project-card[data-tilt]');
    const scrollTopBtn = document.getElementById('scrollTop');
    const cursorFollower = document.getElementById('cursorFollower');
    const heroImage = document.getElementById('heroImage');
    const themeToggle = document.getElementById('themeToggle');
    const marqueeTracks = document.querySelectorAll('.marquee-track');

    // Theme Toggle Logic
    if (themeToggle) {
        // Check for saved theme preference or OS preference
        const savedTheme = localStorage.getItem('theme');
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        
        if (savedTheme === 'dark' || (!savedTheme && prefersDark)) {
            document.documentElement.setAttribute('data-theme', 'dark');
            themeToggle.innerHTML = '<i class="fas fa-sun"></i>';
        }

        themeToggle.addEventListener('click', () => {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            if (currentTheme === 'dark') {
                document.documentElement.removeAttribute('data-theme');
                localStorage.setItem('theme', 'light');
                themeToggle.innerHTML = '<i class="fas fa-moon"></i>';
            } else {
                document.documentElement.setAttribute('data-theme', 'dark');
                localStorage.setItem('theme', 'dark');
                themeToggle.innerHTML = '<i class="fas fa-sun"></i>';
            }
        });
    }

    // 3. Navbar scroll effect & 15. Navbar hide on scroll down
    let lastScrollY = window.scrollY;
    let scrollTicking = false;

    const handleScroll = () => {
        const currentScrollY = window.scrollY;

        // Scrolled class
        if (currentScrollY > 50) {
            navbar?.classList.add('scrolled');
        } else {
            navbar?.classList.remove('scrolled');
        }

        // Hide/show navbar
        if (currentScrollY > 100) {
            if (currentScrollY > lastScrollY) {
                navbar?.classList.add('navbar-hidden');
            } else {
                navbar?.classList.remove('navbar-hidden');
            }
        } else {
            navbar?.classList.remove('navbar-hidden');
        }

        // 11. Scroll to top button visibility
        if (currentScrollY > 500) {
            scrollTopBtn?.classList.add('visible');
        } else {
            scrollTopBtn?.classList.remove('visible');
        }

        // 13. Parallax effect on hero image
        const heroImageWrapper = document.querySelector('.hero-image-wrapper');
        if (heroImageWrapper) {
            const heroSection = document.getElementById('beranda') || document.querySelector('section');
            if (heroSection) {
                const rect = heroSection.getBoundingClientRect();
                if (rect.bottom > 0) { // Only animate when hero is visible
                    heroImageWrapper.style.transform = `translateY(${currentScrollY * 0.1}px)`;
                }
            }
        }

        lastScrollY = currentScrollY;
        scrollTicking = false;
    };

    window.addEventListener('scroll', () => {
        if (!scrollTicking) {
            window.requestAnimationFrame(handleScroll);
            scrollTicking = true;
        }
    });

    // Run once on init
    handleScroll();

    // 4. Active nav link (scroll spy)
    if ('IntersectionObserver' in window) {
        const sectionObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.getAttribute('id');
                    navLinks.forEach(link => {
                        link.classList.remove('active');
                        const href = link.getAttribute('href');
                        const dataSection = link.getAttribute('data-section');
                        if (href === `#${id}` || dataSection === id) {
                            link.classList.add('active');
                        }
                    });
                }
            });
        }, {
            threshold: 0.3
        });

        sections.forEach(section => {
            sectionObserver.observe(section);
        });
    }

    // 5. Smooth scroll for nav links & 6. Close mobile menu
    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            
            const href = link.getAttribute('href');
            let targetId = '';
            
            if (href && href.startsWith('#')) {
                targetId = href.substring(1);
            } else if (link.hasAttribute('data-section')) {
                targetId = link.getAttribute('data-section');
            }
            
            if (targetId) {
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    const navHeight = navbar ? navbar.offsetHeight : 0;
                    const elementPosition = targetElement.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.scrollY - navHeight;
    
                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            }

            // Close mobile menu
            if (hamburger && navLinksContainer) {
                hamburger.classList.remove('active');
                navLinksContainer.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    });

    // 6. Mobile hamburger menu
    if (hamburger && navLinksContainer) {
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navLinksContainer.classList.toggle('active');
            
            if (navLinksContainer.classList.contains('active')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        });

        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (navLinksContainer.classList.contains('active') && 
                navbar && !navbar.contains(e.target)) {
                hamburger.classList.remove('active');
                navLinksContainer.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    }

    // 7. Typing effect on hero
    if (typedText) {
        const texts = [
            'Mahasiswa Informatika Undip dengan passion di Cloud & Linux.',
            'Ex-Intern SSC ICT di PT Pertamina Patra Niaga.',
            'Red Hat Certified System Administrator & Oracle Database.'
        ];
        
        typedText.classList.add('typed-cursor');
        
        let textIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        
        const typeEffect = () => {
            const currentText = texts[textIndex];
            
            if (isDeleting) {
                typedText.textContent = currentText.substring(0, charIndex - 1);
                charIndex--;
            } else {
                typedText.textContent = currentText.substring(0, charIndex + 1);
                charIndex++;
            }
            
            let typingSpeed = isDeleting ? 30 : 50;
            
            if (!isDeleting && charIndex === currentText.length) {
                typingSpeed = 2000; // Pause at end
                isDeleting = true;
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                textIndex = (textIndex + 1) % texts.length;
                typingSpeed = 500; // Pause before next
            }
            
            setTimeout(typeEffect, typingSpeed);
        };
        
        setTimeout(typeEffect, 500);
    }

    // 8. Counter animation
    if ('IntersectionObserver' in window && statNumbers.length > 0) {
        const easeOutQuart = (t) => 1 - Math.pow(1 - t, 4);
        
        const counterObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = entry.target;
                    const finalCount = parseInt(target.getAttribute('data-count'), 10) || 0;
                    const duration = 2000;
                    let startTimestamp = null;
                    
                    const step = (timestamp) => {
                        if (!startTimestamp) startTimestamp = timestamp;
                        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                        const easedProgress = easeOutQuart(progress);
                        const currentCount = Math.floor(easedProgress * finalCount);
                        
                        target.textContent = currentCount;
                        
                        if (progress < 1) {
                            window.requestAnimationFrame(step);
                        } else {
                            target.textContent = finalCount;
                        }
                    };
                    
                    window.requestAnimationFrame(step);
                    observer.unobserve(target); // Only trigger once
                }
            });
        }, { threshold: 0.5 });
        
        statNumbers.forEach(stat => counterObserver.observe(stat));
    }

    // 9. Experience tabs
    expTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const company = tab.getAttribute('data-company');
            
            // Remove active class from all tabs and panels
            expTabs.forEach(t => t.classList.remove('active'));
            expPanels.forEach(p => p.classList.remove('active'));
            
            // Add active class to clicked tab and corresponding panel
            tab.classList.add('active');
            const targetPanel = document.getElementById(`panel-${company}`);
            if (targetPanel) {
                targetPanel.classList.add('active');
            }
        });
    });

    // 10. Project card 3D tilt effect
    projectCards.forEach(card => {
        let isHovered = false;
        let animationFrameId = null;
        let targetTiltX = 0;
        let targetTiltY = 0;
        let currentTiltX = 0;
        let currentTiltY = 0;

        card.addEventListener('mouseenter', () => {
            isHovered = true;
        });

        card.addEventListener('mousemove', (e) => {
            if (!isHovered) return;
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const percentX = (x - centerX) / centerX;
            const percentY = -((y - centerY) / centerY); // Invert Y axis
            
            const maxTilt = 10;
            targetTiltY = percentX * maxTilt;
            targetTiltX = percentY * maxTilt;
            
            if (!animationFrameId) {
                const animateTilt = () => {
                    if (isHovered) {
                        currentTiltX += (targetTiltX - currentTiltX) * 0.1; // Smoothing
                        currentTiltY += (targetTiltY - currentTiltY) * 0.1;
                        card.style.transform = `perspective(1000px) rotateX(${currentTiltX}deg) rotateY(${currentTiltY}deg)`;
                        animationFrameId = requestAnimationFrame(animateTilt);
                    }
                };
                animationFrameId = requestAnimationFrame(animateTilt);
            }
        });

        card.addEventListener('mouseleave', () => {
            isHovered = false;
            if (animationFrameId) {
                cancelAnimationFrame(animationFrameId);
                animationFrameId = null;
            }
            
            // Reset position
            card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg)';
            card.style.transition = 'transform 0.5s ease-out';
            
            // Clear inline transition after reset to not interfere with hover transitions
            setTimeout(() => {
                if (!isHovered) {
                    card.style.transform = '';
                    card.style.transition = '';
                }
            }, 500);
        });
    });

    // 11. Scroll to top button
    if (scrollTopBtn) {
        scrollTopBtn.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // 12. Custom cursor follower
    if (cursorFollower) {
        // Simple check for non-touch devices
        if (window.innerWidth > 768 && window.matchMedia("(pointer: fine)").matches) {
            let mouseX = 0;
            let mouseY = 0;
            
            document.addEventListener('mousemove', (e) => {
                mouseX = e.clientX;
                mouseY = e.clientY;
                cursorFollower.style.transform = `translate3d(${mouseX}px, ${mouseY}px, 0)`;
                if (cursorFollower.style.opacity === '0' || !cursorFollower.style.opacity) {
                    cursorFollower.style.opacity = '1';
                }
            });
            
            document.addEventListener('mouseout', () => {
                cursorFollower.style.opacity = '0';
            });
            
            // Interactive elements hover state
            const interactives = document.querySelectorAll('a, button, .project-card, .exp-tab, input, textarea');
            interactives.forEach(el => {
                el.addEventListener('mouseenter', () => {
                    cursorFollower.classList.add('hovering');
                });
                el.addEventListener('mouseleave', () => {
                    cursorFollower.classList.remove('hovering');
                });
            });
        } else {
            cursorFollower.style.display = 'none';
        }
    }

    // 14. Marquee pause on hover
    marqueeTracks.forEach(track => {
        track.addEventListener('mouseenter', () => {
            track.style.animationPlayState = 'paused';
        });
        track.addEventListener('mouseleave', () => {
            track.style.animationPlayState = 'running';
        });
    });

});
