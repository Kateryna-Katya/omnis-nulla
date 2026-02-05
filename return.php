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
            <span class="section-tag">Pagamenti & Rimborsi</span>
            <h1 class="reveal delay-100">Politica di Rimborso</h1>
            
            <div class="legal-content">
                <div class="policy-hero-card refund-accent reveal delay-200">
                    <p>
                        Puntiamo alla massima trasparenza nel rapporto con i nostri studenti. 
                        In <strong><?= $domainTitle ?></strong> è prevista una procedura di rimborso chiara, 
                        basata sulla qualità dei servizi offerti e sulla tutela dei diritti del consumatore.
                    </p>
                </div>

                <h2 class="reveal">Condizioni per la richiesta di rimborso</h2>
                <div class="refund-grid reveal">
                    <div class="refund-card">
                        <div class="refund-card__icon"><i data-lucide="file-warning"></i></div>
                        <h3>Difformità del Programma</h3>
                        <p>Se il contenuto dei materiali differisce sostanzialmente da quanto dichiarato su <strong><?= $domainTitle ?></strong>.</p>
                    </div>
                    <div class="refund-card">
                        <div class="refund-card__icon"><i data-lucide="settings-2"></i></div>
                        <h3>Problemi Tecnici</h3>
                        <p>Errori critici sulla piattaforma <strong><?= $fullDomain ?></strong> non risolti entro tempi ragionevoli.</p>
                    </div>
                    <div class="refund-card">
                        <div class="refund-card__icon"><i data-lucide="timer"></i></div>
                        <h3>Periodo di Ripensamento</h3>
                        <p>Recesso entro 14 giorni dal pagamento, a condizione di un utilizzo minimo dei materiali didattici.</p>
                    </div>
                </div>

                <div class="procedure-block reveal">
                    <h2>Procedura di richiesta rimborso</h2>
                    <p>Per avviare la procedura sulla piattaforma <strong><?= $domainTitle ?></strong>, segui questi passaggi:</p>
                    <div class="steps-mini">
                        <div class="step-mini"><span>1</span> Invia una mail a <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></div>
                        <div class="step-mini"><span>2</span> Oggetto: "Richiesta di rimborso fondi"</div>
                        <div class="step-mini"><span>3</span> Dati: Nome completo, Email, Nome del programma</div>
                        <div class="step-mini"><span>4</span> Descrizione dettagliata del motivo della richiesta</div>
                    </div>
                </div>

                <h2 class="reveal">Tempi e modalità di rimborso</h2>
                <p class="reveal">
                    Dopo l'approvazione della richiesta, il rimborso verrà effettuato entro 
                    <strong>7–14 giorni lavorativi</strong>. I fondi saranno riaccreditati tramite lo stesso 
                    metodo utilizzato per il pagamento. Nota: il tempo effettivo di accredito dipende 
                    dai regolamenti della tua banca in <strong>Italia</strong> o nel paese di residenza.
                </p>

                <div class="warning-block reveal">
                    <h2>Eccezioni e limitazioni</h2>
                    <ul class="legal-list">
                        <li>La richiesta è presentata oltre i 14 giorni solari dal pagamento.</li>
                        <li>È stato visualizzato o scaricato più del 50% dei materiali del programma.</li>
                        <li>Problemi tecnici causati dall'utente (software, connessione).</li>
                        <li>Violazione dei Termini di Servizio di <strong><?= $domainTitle ?></strong>.</li>
                    </ul>
                </div>

                <div class="contact-footer-policy reveal">
                    <h2>Contattaci</h2>
                    <p>Per tutte le domande relative ai rimborsi, contatta il nostro servizio di supporto:</p>
                    <a href="mailto:hello@<?= $fullDomain ?>" class="policy-mail">hello@<?= $fullDomain ?></a>
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