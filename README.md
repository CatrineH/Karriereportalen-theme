
## File structure



```javascript
Stillingsportalen-Theme/
├── assets/
│   ├── css/
│   │   ├── main.css          # Hovedstilfil for temaet
│   │   └── bootstrap.min.css  # Bootstrap CSS
│   │   └── +alle bootstrap filer  # Bootstrap CSS
│   ├── js/
│   │   ├── script.js          # Tilpassede JavaScript-funksjoner
│   │   └── bootstrap.bundle.min.js # Bootstrap JS
│   │   └── +alle bootstrap filer  # Bootstrap JS
│   └── images/
│       └── ...                # Bilder brukt i temaet
├── includes/
│   ├── en eller annen fil.php       # Tilpasninger for tema-tilpasseren
│   └── extra-functions.php          # Tilpassede funksjoner og funksjonalitet
├── page-templates/
│   ├── login.php              # Tilpasset side for login
│   ├── register.php           # Tilpasset side for registrering
│   ├── control-panel.php      # Tilpasset side for kontrollpanelet
│   └── job-posting.php        # Tilpasset side for oppretting/forhåndsvisning av stillingsannonser
├── 404.php                    # Standard 404
├── header.php                 # Standard header
├── footer.php                 # Standard footer
├── index.php                  # Hovedinngangspunkt for temaet
├── functions.php              # Definerer funksjonalitet, støtte for tema-funksjoner
├── style.css                  # Hovedstilark, inkludert WordPress-temainformasjon
└── screenshot.png             # Skjermbilde av temaet (vises i tema-valg i WP-admin)
├── single.php                 # Standard single page
└── page.png                   # Standard page 
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
Vurdere om vi skal implementer en passordbeskyttelse.
eller bruke en WordPress brannmur-plugin som Sucuri. Den vil blokkere dårlig trafikk fra å nå nettsiden og forhindre uautorisert tilgang. Må undersøkes.


## Kontrollpanel / Dashboard


- #### Tilpassede Brukerroller 
Vurdere å opprette tilpassede brukerroller eller kapabiliteter for tilgangskontroll til kontrollpanelet.

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

