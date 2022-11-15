#Rendszerterv

##A rendszer célja

Azt tartjuk a rendszerünk legfőbb céljának, hogy a felhasználó tudjon teljesíteni egy tesztet, amelyből kiderül, hogy a kézzel írott számokból, amik a képen láthatóak, a felhasználó mennyit ismer fel és milyen számnak látja, ami az adott képen található, majd erről a feladatok végén adjon egy visszajelzést mind a kitöltőnek, mind a rendszernek egyaránt. Később ezekből a  statisztikai adatokból az AI-ok is tanulhatnak, illetve a felhasználók is használhatják a saját eredményeiket a reflektálásra, hogy melyik számokat ismerik fel esetleg nehezebben.

Emellett bár nem lesz kötelező, a felhasználók dönthetnek úgy, hogy regisztrálnak a nevük és helyük megadásával, ezzel is segítve a munkánkat és a statisztikai adatok pontosítását. Ha úgy döntenek, mégsem szeretnének regisztrálni, az sem probléma, akkor csak a sütikkel egy session-el lesznek az eredményhez társítva, mindezt sütikkel megoldva, hogy ne legyen számukra sem zavaró a felület használata.

Ráadásképpen azt is fontosnak tartjuk, hogy a lehető legtöbb eszközről és böngészőből kitölthető legyen a teszt, illetve, pont emiatt, hogy reszponzív, felhasználóbarát és könnyen átlátható felületet alkossunk, amit könnyű kezelni és karbantartani egyaránt.

##Projektterv

##Üzleti folyamatok modellje

##Követelmények

##Követelmények

##Funkcionális terv

##Fizikai környezet

##Absztrakt domain modell

##Architekturális terv

A rendszer megfelelő működéséhez szükségünk van egy adatbázis szerverre, jelen esetben Apache-ot használunk erre a célra. A programunkat PHP és Laravel segítségével fejlesztjük, ami össze lesz kötve egy adatbázissal, amibe mentjük a felhasználók teszteredményeit, illetve ezek az eredmények lesznek egy, már előre meghatározott adatbázissal összehasonlítva. Az eredményekhez a felhasználók session adatait társítjuk, így megkülönböztetve az eredményeket, illetve ha valaki regisztrált, annak a nevét és helyét társítjuk hozzá.

##Adatbázis terv

##Implementációs terv

##Tesztterv

A teszt célja a weboldal helyességének és megfelelő módon történő működésének ellenőrzése, illetve a rendszer által megvalósított üzleti szolgáltatások verifikálása.

### Unit és Alfa teszt:

Elsődleges célja az eddig meglévő funkciók különböző böngészőkkel való kompatibilitásának tesztelése folyamatosan, még a fejlesztés időtartama alatt. Ezt a tesztet a fejlesztők végzik, és az eljárás akkor sikeres, ha a különböző funkciók megfelelően működnek a különböző böngészőkben és operációs rendszereken. A teszt időtartama kb. egy hét.

### Beta teszt:

Ennek a tesztnek elsődleges célja a tesztelő felhasználók visszajelzései alapján a probléma vagy hiba kiküszöbölése. Ha hibát találnak a tesztelő felhasználók, a fejlesztők feladata a Beta teszt időszakában a lehető leghamarabb kijavítani azt. Eredetileh kb egy hét jut erre a tesztelési formára is, de ha túl sok hiba merül fel a teszt közben, akkor elhúzódhat plusz egy héttel. A tesztet nem a fejlesztők végzik, ettől függetlenül ki kell próbálni a programot lehetőség szerint Windows-on, Linux-on és MacOS-en egyaránt, valamint ezeken belül a lehető legtöbb böngészőben is, mint például Microsoft Edge-ben, Google Chrome-ban, Mozilla Firefox-ban, Safari-ban, illetve Opera-ban.

### Tesztelendő funkciók:

- Backend:
    - Tudnia kell csatlakozni webes klienshez, mind Windows-on, Linux-on, MacOS-en és Android-on egyaránt
    - Képesnek kell lennie kiszolgálni egyszerre több klienst is
    - Tudnia kell feltölteni és lekérdezni az adatbázisból a szükséges adatokat
    - Tudnia kell feltölteni és lekérdezni az adatbázisból a szükséges adatokat

##Telepítési terv

##Karbantartási terv

##Fogalomtár