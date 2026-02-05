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
            <span class="section-tag">Documenti Legali</span>
            <h1 class="reveal delay-100">Termini e Condizioni d'Uso</h1>

            <div class="legal-content">
                <div class="policy-hero-card terms-accent reveal delay-200">
                    <p>
                        Benvenuto su <strong><?= $domainTitle ?></strong>! I presenti Termini di Utilizzo 
                        rappresentano un accordo legalmente vincolante tra l'utente (di seguito — «Utente») e <strong><?= $domainTitle ?></strong>. 
                        Utilizzando il nostro sito, confermi la tua piena accettazione dei presenti Termini.
                    </p>
                </div>

                <div class="legal-section reveal">
                    <h2>1. Oggetto dell'Accordo</h2>
                    <p>
                        La Società fornisce all'Utente l'accesso all'utilizzo del sito 
                        <strong><?= $fullDomain ?></strong> e delle sue funzionalità, inclusi: accesso a 
                        materiali didattici innovativi, articoli del blog, consulenze di carriera e altri strumenti 
                        di sviluppo professionale. Il presente Accordo regola tutti gli aspetti dell'interazione dell'Utente con la piattaforma.
                    </p>
                </div>

                <div class="legal-section reveal">
                    <h2>2. Diritti e Doveri dell'Utente</h2>
                    <p>Durante l'utilizzo della piattaforma <strong><?= $domainTitle ?></strong> è vietato:</p>
                    <ul class="legal-list">
                        <li>Pubblicare o trasmettere informazioni illegali, dannose o diffamatorie.</li>
                        <li>Intraprendere azioni che possano interrompere il funzionamento dell'infrastruttura digitale di <strong><?= $domainTitle ?></strong>.</li>
                        <li>Utilizzare script automatizzati (bot) per raccogliere informazioni senza autorizzazione.</li>
                        <li>Fornire informazioni false durante la registrazione o la richiesta di consulenza.</li>
                    </ul>
                </div>

                <div class="legal-section reveal">
                    <h2>3. Proprietà Intellettuale</h2>
                    <div class="property-block">
                        <div class="property-block__icon">
                            <i data-lucide="copyright"></i>
                        </div>
                        <p>
                            Tutti i contenuti su <strong><?= $fullDomain ?></strong> (testi, codice, grafica, loghi) sono di proprietà della Società. 
                            Ti viene concessa una licenza limitata per uso personale allo scopo di costruire la tua carriera. La copia dei materiali senza autorizzazione è severamente vietata.
                        </p>
                    </div>
                </div>

                <div class="legal-section reveal">
                    <h2>4. Limitazione di Responsabilità</h2>
                    <div class="warning-block">
                        <p>
                            I servizi sono forniti secondo il principio <strong>«così come sono» (as is)</strong>. La Società non è responsabile per eventuali danni derivanti dall'uso o dall'impossibilità di utilizzare la piattaforma <strong><?= $domainTitle ?></strong>.
                        </p>
                    </div>
                </div>

                <div class="legal-section reveal">
                    <h2>5. Modifiche e Risoluzione delle Controversie</h2>
                    <p>
                        Ci riserviamo il diritto di modificare i Termini in qualsiasi momento. Tutte le controversie saranno risolte tramite trattative costruttive. 
                        In caso di mancato accordo, la controversia sarà soggetta alla giurisdizione del luogo di registrazione della Società in <strong>Italia</strong>.
                    </p>
                </div>

                <div class="contact-footer-policy reveal">
                    <h2>Informazioni di Contatto</h2>
                    <p>Se hai domande relative ai presenti Termini, ti preghiamo di contattarci:</p>
                    <div class="policy-contact-block">
                        <a href="mailto:hello@<?= $fullDomain ?>" class="policy-mail">hello@<?= $fullDomain ?></a>
                        <p class="policy-address">
                            Via della Conciliazione, 412, 00193 Roma (RM), Italia<br>
                            Telefono: +39 06 9763 9290
                        </p>
                    </div>
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