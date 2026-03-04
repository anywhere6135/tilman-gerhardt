# Aufgaben — Tilman Gerhardt

Zuletzt aktualisiert: 2026-03-04 22:50
Projektphase: Feedback-Einarbeitung → **Website live auf Vercel** ✅

---

## 🌐 Ressourcen
| | |
|---|---|
| **Live-URL** | https://tilman-gerhardt.vercel.app |
| **GitHub Repo** | https://github.com/anywhere6135/tilman-gerhardt |
| **Originale Seite** | https://hierentsteht.de/tilman-gerhardt |
| **Visual Feedback Tool** | Key: `f97c2f2422adf75cd015ed16a6a45955b45ab5bbfb6518a7` |

---

## ✅ Bereits erledigt (04.03.2026)

- ~~Website von hierentsteht.de heruntergeladen~~ ✅
- ~~GitHub Repo erstellt (public)~~ ✅
- ~~Vercel-Deployment eingerichtet~~ ✅
- ~~Alle 9 Visual-Feedback-Punkte eingearbeitet~~ ✅
- ~~Asset-Bilder heruntergeladen und committed~~ ✅
- ~~Vercel-URL bereinigt (webprinzip entfernt)~~ ✅

---

## 🛠️ Offene Aufgaben

| # | Aufgabe | Quelle | Status |
|---|---------|--------|--------|
| 1 | Profilbild enger croppen (aktuell nur CSS, ggf. Bild bearbeiten) | VFT Feedback | ⚠️ CSS-Lösung, Review nötig |
| 2 | Sektion "Wie ich arbeite" + Leistungen — Reihenfolge prüfen (body-Feedback war etwas unklar) | VFT Feedback | ⚠️ umgesetzt, Review nötig |
| 3 | Blog-Post Seite (`blog-post-01.html`) — Assets/Bilder prüfen | — | ⏳ offen |

---

## 📋 Eingearbeitete Visual-Feedback-Punkte (04.03.2026)

| # | Feedback | Commit |
|---|----------|--------|
| 1 | Impressum: "Evolvion Leadership Advisory **by Tilman Gerhardt**" + Festnetznummer | `9ec05bc` |
| 2 | "Prozess" → "Entwicklungsprozess" | `5fabd04` |
| 3 | Profilbild: object-position für engeren Gesichtsausschnitt | `8682065` |
| 4 | "mathematisch" entfernt aus Leadership SCRUM Text | `53fda4c` |
| 5 | "Die Nachfolge" — neuer Text lt. Kundenfeedback | `3605fc0` |
| 6 | Kontaktbereich — Festnetznummer +49 8177 7694922 | `79ca8fb` |
| 7 | "Nächster Beitrag"-Box entfernt | `f30f332` |
| 8 | "Lessons in Leadership" → "Leadership Insights - case by case" | `91df40a` |
| 9 | Leistungen + mood-separator nach Profil-Sektion verschoben | `ccfeb3d` |

---

## 🔷 WordPress-Infrastruktur (Lokale Entwicklung)

| | |
|---|---|
| **Docker** | Colima + docker compose (WordPress + MariaDB) |
| **Starten** | `colima start && cd webprinzip-tilman-gerhardt && docker compose up -d` |
| **Tunnel** | `cloudflared tunnel --url http://localhost:8080 > /tmp/cloudflared.log 2>&1 &` |
| **Tunnel-URL** | Aus `/tmp/cloudflared.log` lesen (ändert sich bei Neustart) |
| **WP Admin** | `[tunnel-url]/wp-admin` · User: `webprinzip` |
| **App-Password** | `hyXkFjNwjeXkHrOZYQ9frZAz` (WP REST API) |
| **Theme** | `wordpress-theme/tilman-gerhardt/` |
| **Content-Script** | `wordpress-theme/tilman-gerhardt/setup/create-page.php` |
| **Inhalt updaten** | Script mit `--update` flag aufrufen → patcht Seite per API |
| **Nächste Phase** | WPML von Florian → Mehrsprachigkeit einrichten |

---

## 🚀 Static Deployment-Infrastruktur

| | |
|---|---|
| **GitHub Repo** | https://github.com/anywhere6135/tilman-gerhardt |
| **Vercel Live-URL** | https://tilman-gerhardt.vercel.app |
| **Auto-Deploy** | push → ca. 30 Sek → live |
| **Deployment-Account** | GitHub: `claw-anywhere6135` / Vercel: `claw-anywhere6135s-projects` |
