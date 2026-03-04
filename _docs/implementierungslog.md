# Implementierungslog — Tilman Gerhardt

Dieses Dokument trackt chronologisch was umgesetzt wurde, auf welcher Basis (Feedback/Meeting/Mail) und was noch offen ist.

---

## ✅ 04.03.2026 — Initiale Übernahme + Feedback-Einarbeitung

**Basis:** Visual Feedback Tool (9 aktive Feedback-Einträge vom Kunden, 26.02.–01.03.2026)

### Umgesetzt
- Website von `hierentsteht.de/tilman-gerhardt` heruntergeladen (index.html + blog-post-01.html)
- Alle 5 Asset-Bilder gesichert (tilman-hinten.jpg, tilman-vorne.jpg, berge2.jpeg, image3.jpeg, kirche3.jpeg)
- GitHub Repo erstellt: `anywhere6135/tilman-gerhardt` (public)
- Vercel-Deployment aufgesetzt: https://tilman-gerhardt.vercel.app
- **9 Feedback-Punkte als separate Commits eingearbeitet:**
  1. Impressum: Firmenname "by Tilman Gerhardt" + Festnetznummer
  2. "Prozess" → "Entwicklungsprozess"
  3. Profilbild: CSS object-position für engeren Gesichtsausschnitt
  4. "mathematisch" aus Leadership SCRUM Text entfernt
  5. "Die Nachfolge": neuer Text lt. Kundenwunsch
  6. Kontaktbereich: Mobilnummer → Festnetznummer +49 8177 7694922
  7. "Nächster Beitrag"-Blog-Card entfernt
  8. "Lessons in Leadership" → "Leadership Insights - case by case"
  9. Leistungen-Sektion + mood-separator hinter Profil verschoben

### Noch offen (bekannt seit 04.03.)
- ⚠️ Profilbild: nur CSS-Crop, ggf. muss das Bild selbst bearbeitet werden
- ⚠️ Sektionsreihenfolge: Feedback war auf `body`-Tag, Interpretation ggf. prüfen
- ⏳ Blog-Post (`blog-post-01.html`): Assets/Styling nicht geprüft
- ⏳ Englische Version nicht vorhanden (Sprachwechsler existiert aber)
- ⏳ Custom Domain noch nicht eingerichtet

---

## ✅ 04.03.2026 — WordPress-Portierung Phase 1

**Basis:** Sprachnachricht Florian (03.03.2026) — WordPress mit Gutenberg + ACF

### Umgesetzt
- Colima + Docker installiert
- WordPress + MariaDB Container (localhost:8080) via docker-compose
- WP-CLI installiert, WordPress eingerichtet (User: webprinzip)
- ACF (Advanced Custom Fields) installiert + aktiviert
- Cloudflare-Tunnel für Online-Zugriff eingerichtet
- Leeres Custom-Theme `tilman-gerhardt` erstellt mit:
  - `style.css`, `functions.php`, `header.php`, `footer.php`, `index.php`
  - Gutenberg-Block-Content aus Original-HTML generiert (15 Blöcke)
- Alle 5 Asset-Bilder in WP-Mediathek importiert
- Startseite per WP REST API angelegt (Page ID: 4)
- Hauptnavigation mit 5 Ankerpunkten erstellt
- Setup-Script `create-page.php` → updatet Seite via WP REST API
- Theme + Setup-Scripts committed nach `wordpress-theme/`

### Noch offen
- ⏳ WPML von Florian → Mehrsprachigkeit (DE/EN)
- ⏳ Tunnel-URL ändert sich bei Neustart → WP-URL manuell updaten
- ⏳ Eigener ACF-Block für jeden Abschnitt (aktuell: core/html-Blöcke)
- ⏳ Custom Block-Editor-Unterstützung verbessern

---

## Format für zukünftige Einträge

```
## [Status] DD.MM.YYYY — [Kurzbeschreibung]

**Basis:** [Feedback-Quelle: VFT / Mail vom DD.MM. / Meeting]

### Umgesetzt
- [Was konkret wurde implementiert]

### Noch offen
- [Was noch fehlt, mit Grund]
```
