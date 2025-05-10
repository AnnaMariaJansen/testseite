README - Barrierefreie Webanwendung im Stil von Imperia CMS

Projektbeschreibung
-------------------
Dieses Projekt ist eine barrierefreie, responsive Webanwendung, die sich an den strukturellen Prinzipien von Imperia CMS orientiert – jedoch vollständig ohne CMS oder Framework umgesetzt wurde. Ziel war es, eine modulare, semantisch saubere und wartbare PHP-Webanwendung zu erstellen, die sich für E-Government-Projekte im öffentlichen Dienst eignet.

Die Anwendung wurde mit Fokus auf Zugänglichkeit (WCAG/BITV), Responsivität und modularer Code-Struktur umgesetzt und beinhaltet unter anderem eine Suchfunktion, eine dynamische Tab-Navigation und ein responsives Menü.

Funktionen und Merkmale
------------------------
Struktur und Aufbau
- PHP-basiertes Modulsystem mit include() für Header und Footer
- Suchseite (search.php) mit GET-basierter Filterung, sicher gegen XSS
- Trennung von HTML, CSS, JavaScript und PHP-Logik
- Vollständig semantisches HTML5

Barrierefreiheit
- Verwendung von role-Attributen und aria-Labels
- Skip-Link zur Hauptnavigation
- Tastaturbedienung und sichtbare Fokus-Stile
- Geprüft mit WAVE-Tool (wave.webaim.org)

Responsives Webdesign
- Mobile-First-Ansatz mit Flexbox und Media Queries
- Umschaltbares Menü für kleinere Bildschirme
- Tab-Navigation zur Umschaltung von Inhaltsbereichen

JavaScript-Funktionalität
- Mobile-Navigation via Toggle-Button mit aria-expanded
- Dynamische Tab-Steuerung über data-Attribute
- Saubere Trennung zwischen Struktur und Verhalten

Projektstruktur
---------------
/
├── index.php              Hauptseite mit Tabs und Suchformular
├── search.php             Ergebnisanzeige bei GET-Anfrage (?q=...)
├── php/
│   ├── header.php         Navigationsbereich mit Logo und Menü
│   ├── footer.php         Footer mit Impressum und Datenschutz
├── css/
│   └── styles.css         Eigenes CSS-Layout ohne Framework
├── js/
│   └── script.js          Mobile-Menü und Tab-Funktionalität
├── img/
│   └── applebirne.png     Bild für das Logo
└── README.md              Diese Dokumentation

Beispielnutzung
---------------
1. Suchfunktion:
   - Eingabe von Begriffen wie "Euro", "Hallo" oder "Finanzmarktregulierung"
   - Serverseitige Filterung über PHP, Ausgabe als Ergebnisliste

2. Tab-Navigation:
   - Umschalten der angezeigten Inhalte über visuelle Tabs
   - Realisiert mit JavaScript, barrierefrei durch Fokus- und Tastatursteuerung

3. Responsives Layout:
   - Darstellung angepasst für Desktop und mobile Geräte
   - Menü wird unterhalb 768px über Button gesteuert

Verwendete Technologien
-----------------------
HTML5           - Strukturierung und Semantik
CSS3            - Layout, Design, responsive Verhalten
JavaScript (ES6) - Interaktive Inhalte und Steuerung
PHP 7+          - Serverlogik, Template-Struktur, Formularverarbeitung

Systemvoraussetzungen
---------------------
- PHP-Interpreter (z. B. XAMPP, MAMP oder php -S)
- Webbrowser mit aktiviertem JavaScript
- Kein Datenbankserver erforderlich

Lokales Setup
-------------
Im Projektverzeichnis folgenden Befehl ausführen:

php -S localhost:8000

Dann im Browser öffnen:

http://localhost:8000/index.php

Sicherheitsmaßnahmen
---------------------
- Keine sensiblen Informationen im Code
- Suchseite mit Meta-Tag noindex, nofollow zur Vermeidung von Indexierung

Lizenz
------
Dieses Projekt wurde im Rahmen einer Bewerbung als Demonstrations- und Übungsprojekt erstellt. Es kann zu nicht-kommerziellen Zwecken verwendet und angepasst werden. 

Autor
-----
Anna Jansen  

Kontakt
-------
annamariajansen.dev@gmail.com
