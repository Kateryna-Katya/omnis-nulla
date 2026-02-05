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
            <h1 class="reveal delay-100">Informativa sui Cookie</h1>

            <div class="legal-content">
                <p class="lead-text reveal delay-200">
                    Benvenuto su <strong><?= $domainTitle ?></strong>! Per migliorare la tua esperienza 
                    di navigazione, garantire il corretto funzionamento del sito e 
                    analizzare l'attività degli utenti, utilizziamo i cookie e 
                    tecnologie simili.
                </p>

                <div class="reveal delay-300">
                    <h2>Cosa sono i cookie?</h2>
                    <p>
                        Un cookie è un piccolo frammento di dati (file di testo) 
                        che un sito web salva sul tuo dispositivo (computer, tablet 
                        o smartphone) quando lo visiti. Questo permette alla piattaforma 
                        <strong><?= $domainTitle ?></strong> di "ricordare" le tue azioni e preferenze 
                        (come login, lingua, impostazioni regionali per l'Italia e altri parametri) 
                        per un determinato periodo di tempo.
                    </p>
                </div>

                <div class="reveal delay-100">
                    <h2>Quali tipi di cookie utilizziamo?</h2>
                    <p>
                        Classifichiamo i cookie utilizzati su <strong><?= $fullDomain ?></strong> nelle 
                        seguenti categorie:
                    </p>
                    <ul class="legal-list">
                        <li>
                            <strong>Strettamente necessari:</strong> Fondamentali per il funzionamento. Ti permettono di navigare tra le pagine di <strong><?= $domainTitle ?></strong>.
                        </li>
                        <li>
                            <strong>Analitici:</strong> Raccolta di informazioni anonime su come i visitatori utilizzano il nostro sito.
                        </li>
                        <li>
                            <strong>Funzionali:</strong> Ci permettono di ricordare le tue scelte per un'esperienza personalizzata nell'ambito della formazione IT.
                        </li>
                        <li>
                            <strong>Marketing:</strong> Utilizzati per fornire annunci pertinenti ai tuoi interessi professionali.
                        </li>
                    </ul>
                </div>

                <div class="reveal delay-200">
                    <h2>Perché utilizziamo i cookie?</h2>
                    <ul class="legal-list">
                        <li>Garantire un funzionamento stabile e sicuro della piattaforma.</li>
                        <li>Analizzare il comportamento degli utenti per ottimizzare i nostri corsi.</li>
                        <li>Personalizzare i contenuti per gli utenti in Italia ed Europa.</li>
                        <li>Fornire materiali di marketing pertinenti.</li>
                    </ul>
                </div>

                <div class="reveal delay-300">
                    <h2>Gestione e preferenze</h2>
                    <p>
                        Hai il pieno controllo sui cookie. Puoi modificare le tue impostazioni 
                        nel browser in qualsiasi momento. Tuttavia, tieni presente che la 
                        disattivazione dei cookie strettamente necessari potrebbe compromettere 
                        alcune funzioni del sito.
                    </p>
                </div>

                <div class="contact-info-block reveal">
                    <h2>Informazioni di Contatto</h2>
                    <p>
                        Se hai domande riguardo alla nostra policy su <strong><?= $domainTitle ?></strong>, non esitare a contattarci:
                    </p>
                    <ul class="contact-data">
                        <li><strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></li>
                        <li><strong>Telefono:</strong> <a href="tel:+390697639290">+39 06 9763 9290</a></li>
                        <li><strong>Indirizzo:</strong> Via della Conciliazione, 412, 00193 Roma (RM), Italia</li>
                    </ul>
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