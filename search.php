<?php
$pageTitle = "Suchergebnisse – Beispielseite";

// Kann auch ausgelagert werden in functions.php
$seiten = [
  ['title' => 'Zukunft des Euros', 'content' => 'Die Zukunft des Euros in der digitalen Wirtschaft.'],
  ['title' => 'Finanzmarktregulierung', 'content' => 'Regulierungsmaßnahmen und ihre Wirkung.'],
  ['title' => 'Wirtschaftsdaten 2025', 'content' => 'Daten und Prognosen für Deutschland.'],
  ['title' => 'Hallo', 'content' => 'Danke fürs Testen meines Codes.'],
];

$ergebnisse = [];
$query = '';

if (isset($_GET['q']) && trim($_GET['q']) !== '') {
  $query = strip_tags(trim($_GET['q']));
  foreach ($seiten as $seite) {
    if (stripos($seite['title'], $query) !== false || stripos($seite['content'], $query) !== false) {
      $ergebnisse[] = $seite;
    }
  }
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="noindex, nofollow" />
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
  <div class="page-wrapper">
    <a href="#hauptinhalt" class="skip-link">Zum Hauptinhalt</a>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/php/header.php'); ?>

    <main id="hauptinhalt" role="main">
      <h1>Suchergebnisse</h1>

      <section class="content-wrapper">
        <?php if ($query === ''): ?>
          <p>Bitte geben Sie einen Suchbegriff ein.</p>
        <?php else: ?>
          <p>Ergebnisse für „<strong><?php echo htmlspecialchars($query); ?></strong>“:</p>

          <?php if (!empty($ergebnisse)): ?>
            <ul>
              <?php foreach ($ergebnisse as $ergebnis): ?>
                <li>
                  <h2><?php echo htmlspecialchars($ergebnis['title']); ?></h2>
                  <p><?php echo htmlspecialchars($ergebnis['content']); ?></p>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php else: ?>
            <p>Keine Ergebnisse gefunden. Versuch z. B. „Euro“, „Hallo“, „Finanzmarktregulierung“.</p>
          <?php endif; ?>
        <?php endif; ?>
      </section>
    </main>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/php/footer.php'); ?>
  </div>

  <script src="/js/script.js"></script>
</body>
</html>
