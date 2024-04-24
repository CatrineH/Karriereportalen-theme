
## File structure



```javascript
Stillingsportalen-Theme/
├── assets/
│   ├── css/
│   │   ├── custom.css         # Hovedstilfil for temaet
│   │   └── bootstrap.min.css  # Bootstrap CSS
│   ├── js/
│   │   ├── script.js          # Tilpassede JavaScript-funksjoner
│   │   └── bootstrap.bundle.min.js # Bootstrap JS
│   └── img/
│       └── ...                # Bilder brukt i temaet
├── includes/
│   ├── controlpanel-cards.php # Tilpasninger for tema-tilpasseren
│   ├── controlpanel-sidebar.php # Tilpasninger for tema-tilpasseren
│   ├── job-posting-form.php   # Tilpasninger for tema-tilpasseren
│   ├── login-form.php         # Tilpasninger for tema-tilpasseren
│   ├── faq-template.php       # Tilpasninger for tema-tilpasseren
│   ├── reg-api-form.php       # Tilpasninger for tema-tilpasseren
│   ├── register-form-1.php    # Tilpasninger for tema-tilpasseren
│   ├── register-form-2.php    # Tilpasninger for tema-tilpasseren
│   ├── register-form-3.php    # Tilpasninger for tema-tilpasseren
│   ├── modal-popup.php        # Tilpasninger for tema-tilpasseren
│   ├── step-navigation.php    # Tilpasninger for tema-tilpasseren ikke i bruk foreløpig
│   └── functions.php          # Tilpassede funksjoner og funksjonalitet
├── page-templates/
│   ├── login-page.php         # Tilpasset side for login
│   ├── reg-api.php            # Tilpasset side for registrering av API
│   ├── register.php           # Tilpasset side for registrering
│   ├── register-1.php         # Tilpasset side for registrering
│   ├── register-2.php         # Tilpasset side for registrering
│   ├── register-3.php         # Tilpasset side for registrering
│   ├── faq-page.php           # Tilpasset side for FAQ
│   ├── controlpanel-page.php  # Tilpasset side for kontrollpanelet
│   └── job-posting-page.php   # Tilpasset side for oppretting/forhåndsvisning av stillingsannonser
├── header.php                 # Standard header fil inc tilpasninger
├── footer.php                 # Standard footer inc tilpasninger
├── index.php                  # Hovedinngangspunkt for temaet
├── functions.php              # Definerer funksjonalitet, støtte for tema-funksjoner
├── style.css                  # Hovedstilark, inkludert WordPress-temainformasjon
└── screenshot.png             # Skjermbilde av temaet (vises i tema-valg i WP-admin)
```






## Rammeverk for vårt bruk oppsummert
- PHP og HTML for å lage strukturen og backend logikk for sidene.
- CSS/Bootstrap for å sørge for at sidene er stilfulle og responsive.
- JavaScript for å legge til dynamiske elementer, som formvalidering, tabs i kontrollpanelet, og forhåndsvisningsfunksjonalitet for stillingsannonser.


##  Hva trenger vi å implementere av funksjoner for alle "Pages"




## Login og reg med API 

- #### Opprette Tilpassede Endepunkter
 Bruke WordPress REST API for å opprette egne endepunkter for login og registrering.

- #### Frontend-skjemaer
Lage HTML-skjemaer for brukerregistrering og login. Disse skjemaene samler brukerdata og sender dem til de tilpassede API-endepunkter via AJAX.

- #### Håndtere API-kall
 På server-siden, behandle dataene mottatt fra skjemaene, og utfør nødvendige handlinger (som brukerregistrering eller autentisering).

- #### Tilbakemelding til Bruker
Gi tilbakemelding til brukeren basert på resultatet av API-kallet (for eksempel en vellykket innlogging, feilmeldinger ved feil i dataene, osv.)

- #### reCAPTCHA login
Vurdere om vi skal Implementer en passordbeskyttelse.
eller bruke en WordPress brannmur-plugin som Sucuri. Den vil blokkere dårlig trafikk fra å nå nettsiden og forhindre uautorisert tilgang. Må undersøkes.


## Kontrollpanel / Dashboard


- #### UI-komponenter
 Utvikle en serie med UI-komponenter (som knapper, inndatafelt, navigasjonselementer) som brukere vil interagere med.

- #### Server-side Logikk
 Skrive server-side logikk for å håndtere forespørsler fra kontrollpanelet, som kan inkludere oppdatering av innstillinger, håndtering av brukerdata, eller andre administrative oppgaver.

- #### Sikkerhet
Implementer sikkerhetstiltak for å beskytte sensitiv informasjon og funksjonalitet i kontrollpanelet.


## Annonsering opprettelse og forhåndsvisning


- #### Annonse Skjema
 Opprett et detaljert input skjema der brukere kan fylle inn informasjon om stillingsannonsen, som jobbtittel, beskrivelse, krav, osv. Hent informasjon fra prototype.

- #### Forhåndsvisning
 Implementer en funksjon som tillater brukere å se en forhåndsvisning av annonsen basert på input data.
 Dette kan oppnås ved å dynamisk generere en forhåndsvisning ved hjelp av JavaScript eller ved en server-side prosess. Må undersøkes.

- #### Lagring og Publisering
 Skriv logikk for å lagre annonseutkast, og å publisere dem. Vurdere å bruke tilpassede plugins i WordPress for å håndtere stillingsannonser.

## Design
#### Color scheeme

| Color             | Hex                                                                |
| ----------------- | ------------------------------------------------------------------ |
| Red | ![#C61932](https://via.placeholder.com/10/C61932?text=+) #C61932 |
| Dark-Red| ![#9E182F](https://via.placeholder.com/10/9E182F?text=+) #9E182F |
| Darker-Red| ![#4E0000](https://via.placeholder.com/10/4E0000?text=+) #4E0000 |
| Black| ![#000000](https://via.placeholder.com/10/000000?text=+) #000000 |
| White| ![#FFFFFF](https://via.placeholder.com/10/FFFFFF?text=+) #FFFFFF |
| Secondary | ![#cac5dd](https://via.placeholder.com/10/FFFFFF?text=+) ##cac5dd |

