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
            <span class="section-tag">Informativa Legale</span>
            <div class="legal-header reveal delay-100">
                <i data-lucide="alert-triangle" class="warning-icon"></i>
                <h1>Esclusione di Responsabilità</h1>
            </div>

            <div class="legal-content">
                <div class="legal-block reveal delay-200">
                    <p>
                        <strong>Informazioni generali:</strong> Tutti i materiali, gli articoli e le informazioni pubblicate sul sito <strong><?= $domainTitle ?></strong> hanno scopo puramente informativo e didattico. Non costituiscono e non devono essere considerati come raccomandazioni personalizzate di investimento, consulenza professionale legale o finanziaria, offerta al pubblico o invito a compiere operazioni finanziarie di alcun tipo.
                    </p>
                </div>

                <div class="legal-block reveal delay-300">
                    <p>
                        <strong>Assenza di garanzie:</strong> Il team di <strong><?= $domainTitle ?></strong> non fornisce alcuna garanzia riguardo all'accuratezza, alla completezza o all'attualità delle informazioni presentate. Eventuali menzioni di potenziale crescita professionale, rendite passive o risultati passati dei nostri studenti non garantiscono risultati analoghi in futuro. I risultati individuali dipendono da molteplici fattori personali e possono differire significativamente dagli esempi riportati.
                    </p>
                </div>

                <div class="legal-block reveal delay-100">
                    <p>
                        <strong>Limitazione di responsabilità:</strong> L'amministrazione del sito <strong><?= $fullDomain ?></strong>, i suoi proprietari e affiliati non sono responsabili per perdite dirette o indirette, decisioni o azioni intraprese dall'utente sulla base delle informazioni contenute in questa risorsa. La responsabilità per l'uso delle metodologie e le possibili conseguenze ricade esclusivamente sull'utente. Il contenuto della piattaforma <strong><?= $domainTitle ?></strong> è raccolto da fonti ritenute affidabili e pubbliche.
                    </p>
                </div>

                <div class="legal-block risk-warning reveal">
                    <p>
                        <strong>Avvertenza sui rischi:</strong> Qualsiasi attività volta a modificare lo stato finanziario o l'investimento in nuovi progetti comporta un certo livello di rischio. Prima di prendere decisioni importanti, consigliamo vivamente di condurre una ricerca indipendente e di consultare uno specialista qualificato nel settore di competenza.
                    </p>
                </div>

                <div class="legal-block agreement reveal">
                    <p>
                        <strong>Conferma dell'utente:</strong> Continuando a utilizzare il sito <strong><?= $domainTitle ?></strong>, confermi di aver compiuto 18 anni, di agire di tua spontanea volontà e di comprendere e accettare pienamente tutti i rischi e le condizioni della presente esclusione di responsabilità.
                    </p>
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