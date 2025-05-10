<?php
$pageTitle = "Barrierefreie Beispielseite";
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Barrierefreie Webseite mit responsivem Design und PHP-Struktur.">
  <meta name="robots" content="index, follow">
  <title><?php echo $pageTitle; ?></title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div class="page-wrapper">

    <!-- Skip-Link -->
    <a href="#hauptinhalt" class="skip-link">Zum Hauptinhalt</a>

    <!-- Header -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/php/header.php'); ?>

    <!-- Hauptinhalt -->
    <main id="hauptinhalt" role="main">
      <section class="hero">
        <h1>Willkommen auf meiner barrierefreien Webseite</h1>
        <p>
          Hallo liebes Landratsamt für Digitalisierung, ich möchte mich herzlich für das Vorstellungsgespräch bedanken.
        </p>
      </section>

      <section>
        <h2>Entwicklung der Webseite nach Impera CMS und BITV/WCAG</h2>
        <p>
          Bei der Entwicklung dieser Webseite habe ich mich eng an den typischen Aufbau und die Strukturen des Impera CMS orientiert.
          Dabei lag ein besonderes Augenmerk auf der Einhaltung der BITV/WCAG-Richtlinien für Barrierefreiheit.
        </p>

        <!-- Tabs -->
        <div class="tab-navigation" role="navigation" aria-label="Codeabschnitt-Navigation">
          <div class="tab-wrapper">
            <button class="tab-item active" data-tab="html">HTML-Struktur</button>
            <button class="tab-item" data-tab="css">CSS-Struktur</button>
            <button class="tab-item" data-tab="php">PHP-Struktur</button>
            <button class="tab-item" data-tab="responsive">Responsive Design</button>
            <button class="tab-item" data-tab="pen">Test</button>
          </div>

          <div class="tab-content" id="tab-html">
            <h3>HTML-Struktur</h3>
            <ul>
              <li>Aufbau gemäß den typischen Merkmalen: <code>&lt;header&gt;</code>, <code>&lt;main&gt;</code>, <code>&lt;section&gt;</code>, <code>&lt;footer&gt;</code>.</li>
              <li>Berücksichtigung von ARIA: <code>aria-expanded</code>, <code>aria-controls</code>, <code>role="navigation"</code>.</li>
              <li>Modularität durch PHP-Includes: <code>header.php</code>, <code>footer.php</code>.</li>
            </ul>
          </div>

          <div class="tab-content" id="tab-css" hidden>
            <h3>CSS-Struktur</h3>
            <ul>
              <li>Teilweise modulare Ansätze, Einführung von Utility-Klassen.</li>
              <li>Verzicht auf SCSS – Fokus auf einfache Struktur und Lesbarkeit.</li>
            </ul>
          </div>

          <div class="tab-content" id="tab-php" hidden>
            <h3>PHP-Struktur</h3>
            <ul>
              <li>Modularer Aufbau durch <code>include()</code>.</li>
            </ul>
          </div>

          <div class="tab-content" id="tab-responsive" hidden>
            <h3>Responsive Design</h3>
            <ul>
              <li>Flexbox + Media Queries.</li>
              <li>Bitte gerne testen.</li>
            </ul>
          </div>

          <div class="tab-content" id="tab-pen" hidden>
            <h3>Test</h3>
            <ul>
              <li>BITV getestet mit WAVE</li>
              <li>Der Pen-Test hat sich schwer gestaltet mit meinem Rechner/ Update 🍻</li>
            </ul>
          </div>
        </div>
      </section>

      <section>
        <h2>Suche</h2>
        <form action="/search.php" method="get" role="search">
         <label for="suche">Suchbegriff:</label>
        <input type="search" id="suche" name="q" aria-label="Suchbegriff eingeben">
        <button type="submit">Suchen</button>
        </form>
      </section>
    </main>

    <!-- Footer -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/php/footer.php'); ?>

  </div>

<!-- Scripts -->
<script src="js/script.js"></script>
</body>
</html>
