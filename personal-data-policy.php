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
            <span class="section-tag">Privacy & Sicurezza</span>
            <h1 class="reveal delay-100">Informativa sul Trattamento dei Dati Personali</h1>

            <div class="legal-content">
                <div class="policy-section reveal">
                    <h2>1. Disposizioni Generali</h2>
                    <p>
                        La presente informativa sulla privacy (di seguito — «Informativa») definisce le modalità e le condizioni del trattamento dei dati personali adottate dalla piattaforma <strong><?= $domainTitle ?></strong> (di seguito — «Titolare»), e stabilisce le misure per garantire la sicurezza di tali dati.
                    </p>
                    <p>
                        1.1. Il Titolare considera il rispetto dei diritti e delle libertà dell'uomo e del cittadino nel trattamento dei dati personali come condizione essenziale per l'esercizio della propria attività, inclusa la protezione del diritto alla riservatezza, alla vita privata e ai segreti familiari.
                    </p>
                    <p>
                        1.2. La presente Informativa si applica a tutte le informazioni che il Titolare può ricevere sui visitatori (di seguito — «Utenti») del sito web <strong><?= $fullDomain ?></strong>.
                    </p>
                </div>

                <div class="policy-section reveal">
                    <h2>2. Concetti Fondamentali</h2>
                    <ul class="terminology-list">
                        <li>
                            <strong>Sito Web</strong> — l'insieme di materiali grafici e informativi presenti su <strong><?= $fullDomain ?></strong>.
                        </li>
                        <li><strong>Utente</strong> — qualsiasi visitatore del sito web.</li>
                        <li>
                            <strong>Dati Personali</strong> — qualsiasi informazione relativa direttamente o indirettamente all'Utente.
                        </li>
                        <li>
                            <strong>Trattamento dei dati</strong> — qualsiasi operazione eseguita con i dati (raccolta, registrazione, conservazione).
                        </li>
                    </ul>
                </div>

                <div class="policy-section reveal">
                    <h2>3. Dati che trattiamo</h2>
                    <div class="data-grid">
                        <div class="data-item">
                            <div class="data-item__icon">
                                <i data-lucide="user-check"></i>
                            </div>
                            <div>
                                <strong>Dati Personali:</strong>
                                <span>Nome completo, Email, numero di telefono.</span>
                            </div>
                        </div>
                        <div class="data-item">
                            <div class="data-item__icon">
                                <i data-lucide="shield-check"></i>
                            </div>
                            <div>
                                <strong>Dati Tecnici:</strong>
                                <span>Cookie, indirizzo IP, dati del browser.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="policy-section reveal">
                    <h2>4. Finalità del trattamento</h2>
                    <ul class="legal-list">
                        <li>Identificazione dell'Utente per l'accesso alla piattaforma.</li>
                        <li>Stabilire contatti e gestire le richieste di supporto.</li>
                        <li>Esecuzione dei contratti per i percorsi formativi IT.</li>
                        <li>Miglioramento della qualità della scuola digitale.</li>
                    </ul>
                </div>

                <div class="policy-section reveal">
                    <h2>5. Basi Giuridiche</h2>
                    <p>Il Titolare tratta i dati personali solo in presenza di consenso volontario dell'Utente o qualora la memorizzazione dei file «cookie» sia autorizzata nelle impostazioni del browser.</p>
                </div>

                <div class="policy-section contact-footer-policy reveal">
                    <h2>6. Domande e Feedback</h2>
                    <p>Per qualsiasi domanda riguardante la privacy, puoi inviare una comunicazione a:</p>
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
                    <li><a href="./privacy.php">Informativa sulla Privacy</a></li>
<li><a href="./cookies.php">Cookie Policy</a></li>
<li><a href="./terms.php">Termini e Condizioni</a></li>
<li><a href="./return.php">Politica di Rimborso</a></li>
<li><a href="./disclaimer.php">Esclusione di Responsabilità</a></li>
<li><a href="./contact.php">Contattaci</a></li>
<li><a href="./personal-data-policy.php">Trattamento dei Dati</a></li>
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