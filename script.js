/**
 * OMNIS NULLA - Vanilla JS Core
 * Gestisce: UI, Animazioni, Form, Cookies e 3D Background
 */

document.addEventListener('DOMContentLoaded', () => {
    
    // --- 1. INIZIALIZZAZIONE ICONE (LUCIDE) ---
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // --- 2. THREE.JS: SFONDO HERO ---
    const initHeroScene = () => {
        const container = document.getElementById('hero-canvas');
        if (!container || typeof THREE === 'undefined') return;

        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
        
        renderer.setSize(window.innerWidth, window.innerHeight);
        container.appendChild(renderer.domElement);

        // Creazione particelle (Neteork)
        const geometry = new THREE.BufferGeometry();
        const vertices = [];
        for (let i = 0; i < 220; i++) {
            vertices.push(
                Math.random() * 2000 - 1000,
                Math.random() * 2000 - 1000,
                Math.random() * 2000 - 1000
            );
        }
        geometry.setAttribute('position', new THREE.Float32BufferAttribute(vertices, 3));

        const material = new THREE.PointsMaterial({
            color: 0x2dfaab,
            size: 2.5,
            transparent: true,
            opacity: 0.7
        });

        const points = new THREE.Points(geometry, material);
        scene.add(points);
        camera.position.z = 500;

        function animate() {
            requestAnimationFrame(animate);
            points.rotation.y += 0.0006;
            points.rotation.x += 0.0003;
            renderer.render(scene, camera);
        }
        animate();

        window.addEventListener('resize', () => {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        });
    };
    initHeroScene();

    // --- 3. MENU MOBILE & BURGER ---
    const burger = document.querySelector('.burger');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuClose = document.getElementById('menu-close');
    const menuLinks = document.querySelectorAll('.mobile-menu__nav a');

    const toggleMenu = () => {
        mobileMenu.classList.toggle('active');
        document.body.classList.toggle('no-scroll'); // Opzionale: blocca scroll body
    };

    if (burger) burger.addEventListener('click', toggleMenu);
    if (menuClose) menuClose.addEventListener('click', toggleMenu);
    
    menuLinks.forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            document.body.classList.remove('no-scroll');
        });
    });

    // --- 4. SISTEMA REVEAL (INTERSECTION OBSERVER) ---
    // Risolve il problema dei titoli e sezioni invisibili
    const initReveal = () => {
        const observerOptions = {
            threshold: 0.05, // Attiva appena il 5% è visibile
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    observer.unobserve(entry.target); // Ferma l'osservazione dopo l'attivazione
                }
            });
        }, observerOptions);

        // Seleziona tutti gli elementi che devono apparire (inclusi titoli e sezioni intere)
        const targets = document.querySelectorAll('.section__header, .course-card, .method__item, .mentor-card, .career__content, .career__image, .contact__info, .contact__form-wrapper, .section, .reveal');

        targets.forEach(el => {
            // Aggiunge la classe reveal se non presente
            if (!el.classList.contains('reveal')) {
                el.classList.add('reveal');
            }
            // Controllo immediato se l'elemento è già visibile (es. Hero al caricamento)
            const rect = el.getBoundingClientRect();
            if (rect.top < window.innerHeight && rect.bottom > 0) {
                el.classList.add('active');
            } else {
                observer.observe(el);
            }
        });
    };
    initReveal();

    // --- 5. CONTACT FORM: CAPTCHA & AJAX SIMULATION ---
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        const captchaLabel = document.getElementById('captcha-label');
        const num1 = Math.floor(Math.random() * 10);
        const num2 = Math.floor(Math.random() * 10);
        const total = num1 + num2;

        if (captchaLabel) {
            captchaLabel.textContent = `Sicurezza: ${num1} + ${num2} = ?`;
        }

        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const status = document.getElementById('form-status');
            const inputAns = document.getElementById('captcha-input').value;
            const btn = this.querySelector('button');

            if (parseInt(inputAns) !== total) {
                status.textContent = "Risultato captcha errato.";
                status.className = "form__status error";
                return;
            }

            // Simulazione invio
            btn.disabled = true;
            btn.textContent = "Invio in corso...";

            setTimeout(() => {
                status.textContent = "Grazie! La tua richiesta è stata inviata.";
                status.className = "form__status success";
                btn.disabled = false;
                btn.textContent = "Invia Richiesta";
                contactForm.reset();
            }, 1500);
        });
    }

    // --- 6. COOKIE CONSENT ---
    const cookiePop = document.getElementById('cookie-popup');
    const cookieBtn = document.getElementById('accept-cookies');

    if (cookiePop && !localStorage.getItem('cookies-accepted')) {
        setTimeout(() => {
            cookiePop.classList.add('active');
        }, 3000);
    }

    if (cookieBtn) {
        cookieBtn.addEventListener('click', () => {
            localStorage.setItem('cookies-accepted', 'true');
            cookiePop.classList.remove('active');
        });
    }

    // --- 7. SMOOTH SCROLL & HEADER EFFECT ---
    const header = document.querySelector('.header');
    
    window.addEventListener('scroll', () => {
        // Effetto Header Scrolled
        if (window.scrollY > 60) {
            header.classList.add('header--scrolled');
        } else {
            header.classList.remove('header--scrolled');
        }
    });

    // Navigazione fluida per tutti i link interni
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const targetEl = document.querySelector(targetId);
            if (targetEl) {
                const offset = 90;
                const bodyRect = document.body.getBoundingClientRect().top;
                const elementRect = targetEl.getBoundingClientRect().top;
                const elementPosition = elementRect - bodyRect;
                const offsetPosition = elementPosition - offset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
});