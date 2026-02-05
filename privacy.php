<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> | Eccellenza nell'Innovazione IT</title>
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Cpath d='M16 2L3 9v14l13 7 13-7V9L16 2z' fill='none' stroke='%232dfaab' stroke-width='2'/%3E%3Ccircle cx='16' cy='16' r='4' fill='%232dfaab'/%3E%3C/svg%3E">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__dot"></span>
                <span class="logo__text"><?= $domainTitle ?></span>
            </a>
            
            <nav class="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Home</a></li>
                    <li><a href="./#courses" class="nav__link">Corsi</a></li>
                    <li><a href="./#method" class="nav__link">Metodo</a></li>
                    <li><a href="./#mentors" class="nav__link">Mentor</a></li>
                    <li><a href="./#career" class="nav__link">Carriera</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--outline">Contattaci</a>
            
            <button class="burger" aria-label="Menu">
                <span></span>
                <span></span>
            </button>
        </div>
    </header>
    <main class="legal-page">
    <section class="pages reveal">
        <div class="container">
            <span class="section-tag">Privacy Policy</span>
            <h1 class="reveal delay-100">Informativa sulla Privacy</h1>

            <div class="legal-content">
                <div class="policy-hero-card reveal delay-200">
                    <p>
                        L'Informativa sulla Privacy si applica ai dati personali forniti dai clienti di 
                        <strong><?= $domainTitle ?></strong>, sia per l'erogazione dei servizi di consulenza 
                        carriera sia per altre interazioni in formato elettronico.
                    </p>
                </div>

                <div class="policy-notice reveal">
                    <p>
                        <strong><?= $domainTitle ?></strong> si riserva il diritto di apportare modifiche alle disposizioni della presente Informativa. Tieni presente che i nostri servizi possono contenere link a risorse di terze parti. Fornendo i tuoi dati, presti il pieno consenso al loro trattamento secondo le modalità previste dalla presente Informativa.
                    </p>
                </div>

                <h2 class="reveal">Procedure di Raccolta, Conservazione e Cancellazione</h2>
                <div class="storage-info reveal">
                    <div class="storage-item">
                        <i data-lucide="history"></i>
                        <span>Conservazione conforme alle normative UE</span>
                    </div>
                    <div class="storage-item">
                        <i data-lucide="user-check"></i>
                        <span>Solo previo tuo esplicito consenso</span>
                    </div>
                </div>
                <p class="reveal">
                    Per prevenire la fuga di dati, utilizziamo un complesso completo di misure di sicurezza informatica. La cancellazione o il blocco dei dati viene effettuato su richiesta del cliente o al raggiungimento degli scopi della raccolta.
                </p>

                <div class="data-collection-grid reveal">
                    <div class="data-box">
                        <h3><i data-lucide="cpu"></i> Informazioni Tecniche</h3>
                        <ul>
                            <li>Indirizzo IP e orario di accesso</li>
                            <li>Sorgenti di traffico verso <strong><?= $fullDomain ?></strong></li>
                            <li>Dati del browser e interazione con i blocchi del sito</li>
                        </ul>
                    </div>
                    <div class="data-box">
                        <h3><i data-lucide="contact-2"></i> Personalizzazione</h3>
                        <ul>
                            <li>Nome dell'utente</li>
                            <li>E-mail e numero di telefono</li>
                            <li>Dati relativi a contratti e servizi acquistati</li>
                        </ul>
                    </div>
                </div>

                <h2 class="reveal">Finalità del Trattamento dei Dati</h2>
                <ul class="legal-list reveal">
                    <li>Fornire l'accesso alla piattaforma di apprendimento innovativa.</li>
                    <li>Considerare le preferenze degli utenti nello sviluppo di nuove soluzioni.</li>
                    <li>Informare su promozioni e nuovi materiali del blog.</li>
                    <li>Garantire un feedback di alta qualità e supporto costante.</li>
                </ul>

                <h2 class="reveal">Utilizzo dei Cookie</h2>
                <p class="reveal">
                    I cookie ci permettono di analizzare il traffico e salvare le tue preferenze (ad esempio, le impostazioni della regione Italia) per rendere l'uso di <strong><?= $fullDomain ?></strong> più agevole. Puoi disattivarli nelle impostazioni del tuo browser.
                </p>

                <div class="rights-block reveal">
                    <h2>I tuoi Diritti</h2>
                    <p>
                        Se desideri modificare i tuoi dati o interromperne il trattamento, contatta il team di <strong><?= $domainTitle ?></strong>:
                    </p>
                    <a href="mailto:hello@<?= $fullDomain ?>" class="contact-btn">hello@<?= $fullDomain ?></a>
                </div>
            </div>
        </div>
    </section>
</main>


    <footer class="footer">
        <div class="container">
            <div class="footer__grid">
                <div class="footer__col">
                    <div class="logo logo--footer">
                        <span class="logo__dot"></span>
                        <span class="logo__text"><?= $domainTitle ?></span>
                    </div>
                    <p class="footer__desc">
                        Tecnologie che lavorano per voi. Formiamo la prossima generazione di esperti digitali con un approccio pratico e innovativo.
                    </p>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Menu</h4>
                    <ul class="footer__links">
                        <li><a href="./#hero">Home</a></li>
                        <li><a href="./#courses">Corsi</a></li>
                        <li><a href="./#method">Metodo</a></li>
                        <li><a href="./#career">Carriera</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Legale</h4>
                    <ul class="footer__links">
                        <li><a href="./privacy.php">Privacy Policy</a></li>
                        <li><a href="./cookies.php">Cookie Policy</a></li>
                        <li><a href="./terms.php">Terms of Service</a></li>
                        <li><a href="./return.php">Return Policy</a></li>
                        <li><a href="./disclaimer.php">Disclaimer</a></li>
                        <li><a href="./contact.php">Contact Us</a></li>
                        <li><a href="./personal-data-policy.php">Data Policy</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Contatti</h4>
                    <ul class="footer__contact">
                        <li><strong>T:</strong> <a href="tel:+390697639290">+39 06 9763 9290</a></li>
                        <li><strong>E:</strong> <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></li>
                        <li><strong>A:</strong> Via della Conciliazione, 412, 00193 Roma, Italia</li>
                    </ul>
                </div>
            </div>
            
            <div class="footer__bottom">
                <p>&copy; 2026 <?= $domainTitle ?>. Tutti i diritti riservati. Programma di crescita sulla base di innovazioni.</p>
            </div>
        </div>
    </footer>
    <div id="cookie-popup" class="cookie-popup">
        <p>Questo sito utilizza cookies per migliorare l'esperienza. <a href="./cookies.php">Dettagli</a></p>
        <button id="accept-cookies" class="btn btn--primary">Accetto</button>
    </div>
    <div class="mobile-menu" id="mobile-menu">
        <button class="mobile-menu__close" id="menu-close">
            <i data-lucide="x"></i>
        </button>
        <nav class="mobile-menu__nav">
            <ul>
                <li><a href="./#hero">Home</a></li>
                <li><a href="./#courses">Corsi</a></li>
                <li><a href="./#method">Metodo</a></li>
                <li><a href="./#mentors">Mentor</a></li>
                <li><a href="./#career">Carriera</a></li>
                <li><a href="./#contact" class="btn btn--primary">Inizia ora</a></li>
            </ul>
        </nav>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="script.js"></script>
</body>
</html>