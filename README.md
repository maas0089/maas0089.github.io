# Welkom op mijn portfolio website!

**Dit portfolio wordt gebruikt om te oefenen met nieuwe technieken waar ik door mijn studie heen
mee te maken krijg.**

- Security

_Authenticatie_

Dit portfolio maakt gebruik van het Laravel framework. Laravel biedt een login systeem aan
waar in dit portfolio ook gebruik van wordt gemaakt. Nieuwe gebruikers kunnen zich registreren.
Hierbij moeten ze hun naam, e-mail adres en een wachtwoord aangeven. Ook wordt gevraagd of ze een 
student, docent of familielid zijn. 

Niet-geregistreerde gebruikers zien in de navigatiebalk alleen de pagina's die publiekelijk 
toegankelijk zijn. Dit is om verwarring te voorkomen.

Geregistreerde gebruikers kunnen inloggen. Ingelogde gebruikers krijgen in de 
navigatiebalk alle pagina's te zien waar zij de inhoud van mogen zien. Ook hebben ze de mogelijkheid
om weer uit te loggen.

_Authorisatie_

Op deze applicatie worden gebruikers toegang verleend op basis van de rol die aan hun is toegekend.

Niet-ingelogde gebruikers hebben maar beperkte toegang tot de applicatie.

Ingelogde gebruikers hebben toegang tot extra pagina's die voor hun van toepassing zijn.

Alleen de administrator heeft het recht om data aan te passen. Dit omdat in de toekomst belangrijke 
informatie op de applicatie zou kunnen staan die niet zomaar aangepast mag worden.
Je kan je niet als administrator registreren. Administrator-accounts zijn vooraf bepaald.

_Toepassing_

Voor een niet ingelogde gebruiker:

 -- Alleen de home- en contactpagina zijn zichtbaar.
 
 -- Bij handmatig invoeren van de url van een andere pagina wordt gevraagd om in te loggen.
 
 -- Er zijn knoppen om in te loggen of te registreren.
 
 Voor een ingelogde gebruiker:
 
 -- De pagina's Home, Beroepsbeeld, Motivatie, Profiel, Template en Contact zijn zichtbaar.
 
 -- Bij handmatig invoeren van de url van een andere pagina wordt aangegeven dat deze pagina niet toegankelijk is.
 
 -- Er is een knop om weer uit te loggen.
 
 Voor een ingelogde student:
 
 -- Alle pagina's zijn zichtbaar.
 
 -- Er worden geen opties gegeven om data aan te passen.
 
 -- Bij handmatig invoeren van de url van een `create` of `edit` pagina wordt aangegeven dat deze pagina niet toegankelijk is.
 
 -- Er is een knop om weer uit te loggen.
 
 Voor een ingelogde administrator:
 
 -- Alle pagina's zijn zichtbaar.
 
 -- Data kan worden aangepast.
 
 -- Er is een knop om weer uit te loggen.
 
 


 

