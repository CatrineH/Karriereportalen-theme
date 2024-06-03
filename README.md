# Karriereportalen Theme

Dette er et tilpasset WordPress-tema for Karriereportalen til Høyskolen Kristiania, som gir en komplett løsning for stillingsannonser, brukerregistrering, og administrasjon.

## Filstruktur

```plaintext
Karriereportalen-theme/
├── .github/workflows/
│   └── main.yml                     # GitHub Actions workflow konfigurasjon
├── assets/
│   ├── css/
│   │   ├── bootstrap.min.css        # Bootstrap CSS
│   │   └── custom.css               # Hovedstilfil for temaet
│   ├── fonts/
│   │   ├── calibri-bold-italic.ttf  # Tilpassede skrifttyper
│   │   └── flere skrifttyper
│   ├── images/
│   │   ├── animations/
│   │   │   └── ...                  # Animasjonsbilder
│   │   └── flere bilder
│   ├── js/
│   │   ├── bootstrap.js             # Bootstrap JS
│   │   └── main.js                  # Tilpassede JavaScript-funksjoner
├── includes/
│   ├── c-panel/
│   │   ├── controlpanel-cards.php   # Tilpasninger for kontrollpanel
│   │   └── controlpanel-sidebar.php # Tilpasninger for kontrollpanel
│   ├── faq/
│   │   └── faq-template.php         # FAQ mal
│   ├── job-advertising/
│   │   ├── job-finale-message.php   # Sluttmelding for jobbannonsering
│   │   └── flere filer for jobbannonsering
│   ├── login/
│   │   └── login-form.php           # Påloggingsskjema
│   ├── reg-api-form.php             # Registrering for API
│   ├── register-form-1.php          # Registreringsskjema trinn 1
│   ├── register-form-2.php          # Registreringsskjema trinn 2
│   ├── register-form-3.php          # Registreringsskjema trinn 3
│   ├── settings/
│   │   ├── profil-settings-form.php # Skjema for profilinnstillinger
│   │   └── image-upload.php         # Bildeopplasting
├── page-templates/
│   ├── controlpanel-page.php        # Kontrollpanelside
│   ├── faq-page.php                 # FAQ-side
│   ├── job-posting-page.php         # Side for jobbannonser
│   ├── job-published-page.php       # Side for publiserte jobber
│   ├── login-page.php               # Påloggingsside
│   ├── reg-api.php                  # Registrering av API
│   ├── register-1.php               # Registreringsside 1
│   ├── register-2.php               # Registreringsside 2
│   ├── register-3.php               # Registreringsside 3
│   ├── register-api.php             # API-registreringsside
│   ├── settings.php                 # Innstillingsside
│   └── user-ad-list-page.php        # Brukerannonseliste
├── .DS_Store                        # MacOS metadatafil
├── 404.php                          # 404 feilside
├── README.md                        # Dokumentasjonsfilen du leser
├── footer.php                       # Standard footer inkludert tilpasninger
├── functions.php                    # Definerer funksjonalitet, støtte for tema-funksjoner
├── header.php                       # Standard header inkludert tilpasninger
├── index.php                        # Hovedinngangspunkt for temaet
└── style.css                        # Hovedstilark, inkludert 
```






## Deployment


## Bruk av Karriereportalen Theme


```bash
  	 1.	Installere temaet:
		Last ned temaet og pakk ut zip-filen.
		Last opp mappen Karriereportalen-theme til wp-content/themes/ katalogen på din WordPress-installasjon.
		Aktiver temaet gjennom WordPress Admin > Utseende > Temaer.
```
```bash
  	2.	Tilpasse temaet:
		Naviger til Utseende > Tilpass for å justere temaets innstillinger som logo, farger, og layouter.
		Bruk tilpasningsalternativene i includes mappen for å endre spesifikke deler av temaet.
```
```bash
	3.	Legge til innhold:
		Bruk de forskjellige side-malene i page-templates mappen for å opprette sider for registrering, login, jobbannonsering, FAQ, etc.
		Last opp bilder og skrifttyper til assets mappen for å sikre at de vises korrekt på nettstedet ditt.
```
```bash
	4.	Konfigurere API-tilkoblinger:
		Fyll ut nødvendig informasjon i reg-api-form.php og register-api.php for å sette opp API-integrasjoner.

```
```bash
	5.	Administrere brukere og stillingsannonser:
		Bruk kontrollpanelsidene for å administrere brukerprofiler, jobbannonser, og andre administrative oppgaver.

```

## Demo
![Gif pres BAO203](https://github.com/CatrineH/Karriereportalen-theme/assets/70755662/855749e4-76ce-4b32-a0dc-5488d79a5785)



