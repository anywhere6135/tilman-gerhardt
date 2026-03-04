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

## Format für zukünftige Einträge

```
## [Status] DD.MM.YYYY — [Kurzbeschreibung]

**Basis:** [Feedback-Quelle: VFT / Mail vom DD.MM. / Meeting]

### Umgesetzt
- [Was konkret wurde implementiert]

### Noch offen
- [Was noch fehlt, mit Grund]
```
