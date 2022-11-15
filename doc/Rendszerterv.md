#Rendszerterv

##A rendszer célja

Azt tartjuk a rendszerünk legfőbb céljának, hogy a felhasználó tudjon teljesíteni egy tesztet, amelyből kiderül, hogy a kézzel írott számokból, amik a képen láthatóak, a felhasználó mennyit ismer fel és milyen számnak látja, ami az adott képen található, majd erről a feladatok végén adjon egy visszajelzést mind a kitöltőnek, mind a rendszernek egyaránt. Később ezekből a  statisztikai adatokból az AI-ok is tanulhatnak, illetve a felhasználók is használhatják a saját eredményeiket a reflektálásra, hogy melyik számokat ismerik fel esetleg nehezebben.

Emellett bár nem lesz kötelező, a felhasználók dönthetnek úgy, hogy regisztrálnak a nevük és helyük megadásával, ezzel is segítve a munkánkat és a statisztikai adatok pontosítását. Ha úgy döntenek, mégsem szeretnének regisztrálni, az sem probléma, akkor csak a sütikkel egy session-el lesznek az eredményhez társítva, mindezt sütikkel megoldva, hogy ne legyen számukra sem zavaró a felület használata.

Ráadásképpen azt is fontosnak tartjuk, hogy a lehető legtöbb eszközről és böngészőből kitölthető legyen a teszt, illetve, pont emiatt, hogy reszponzív, felhasználóbarát és könnyen átlátható felületet alkossunk, amit könnyű kezelni és karbantartani egyaránt.

##Projektterv

A felület CSS és PHP nyelveken fog készülni, a hozzá társított adatbázis pedig Laravel-ben lesz megoldva.

A weboldalt három fejlesztő együttes munkájával hozzuk működésbe:

- Jedlóczki László: adatbázis, fejlesztés, dokumentáció, tesztelés
- Sánta András Attila: fejlesztés, dokumentáció, tesztelés
- Tóth Kíra Zsófia: fejlesztés, dokumentáció, tesztelés

### Mérföldkövek

- Dokumentáció elkészítése
    - Követelmény specifikáció megírása
    - Funkcionális specifikáció megírása
    - Rendszerterv elkészítése
- Adatbázis
    - Kép és értékek hozzáadása, összekapcsolása
    - Felhasználói adatoknak tábla létrehozása
    - Eredmények tábla létrehozása
- Weboldal
    - Regisztráció/Belépés
    - MNIST implementálása
    - Sütik hozzáadása
    - Reszponzív felület léthehozása
    - Dizájn kialakítása
    - Weboldalba beépített számbillentyűzet hozzáadása
- A bemutatás megtörtént és sikeres

##Üzleti folyamatok modellje

##Követelmények

##Követelmények

Az oldal lefgontosabb funkciója, amit a felhasználók elérnek, az a képeken lévő kézirások felismerése és annak megadása, majd miuátn az összes kitöltendő feladvány meg van oldva, a helyes megoldások kiírása a képernyőre. Regisztrálni is lehet, de nincs nagy jelentősége, ugyanis csak egy helységnevet és egy nevet kell megadni, de sem a egisztáció, sem az adatok megadása nem kötelező. A kezelőfelület webes kialakítású, menüpontokkal léphetünk a weblap egyik oldaláról a másikra. Öt menüpont lesz elérhető a felületen:

- Főoldal
- Számrejtvény
- Regisztráció
- Bejelentkezés
- Elérhetőségek

Célunk még, hogy a felületet reszponzív és könnyen kezelhető, átlátható dizájnnal lássuk el, ami mind a PC-s böngészőkben, mind telefonokon rendeltetésszerűen működik és a felhasználók sem zavarodnak össze a használatától. Emellett azt is el akarjuk érni, hogy költésghatékonyan fenntartható legyen a weblap, ezt pedig a szabványos és elterjedt technológiák használata biztosítja számunkra.

### Törvényi előírások, szabványok:

Általános Információk Az Alkalmazáshoz való hozzáférést és annak használatát az alkalmazandó jogszabályok és a jelen Felhasználási Feltételek és Adatkezelési tájékoztató (a továbbiakban Felhasználási Feltételek) szabályozzák. Az Alkalmazást letöltők és használók (a továbbiakban: a Felhasználók) elfogadják a jelen Felhasználási Feltételeket. Amennyiben ezen Felhasználási Feltételeket és Adatkezelési Tájékoztatót nem fogadják el, nem jogosultak a regisztrációra és az Alkalmazás használatára. A jelen Felhasználási Feltételekre a magyar jog az irányadó, tekintet nélkül a nemzetközi magánjog előírásaira. Az Alkalmazás Felhasználói kifejezetten hozzájárulnak ahhoz, hogy a jogvitákra a magyar hatóságoknak és bíróságoknak legyen kizárólagos joghatóságuk a magyar jog alapján.

Szellemi tulajdon Az Alkalmazás és valamennyi kapcsolódó védjegy, szerzői jogi alkotás és egyéb – akár bejegyzett, akár be nem jegyzett – szellemi tulajdon (a továbbiakban együttesen: Szellemi Tulajdon) tulajdonosa az EKE és/vagy EKE Szolgáltató, valamint az alkalmazáshoz kedvezményt nyújtó partnerek. A Felhasználók az Alkalmazást a Szellemi Tulajdon maximális tiszteletben tartásával jogosultak használni. A Szellemi Tulajdon kiterjed különösen, de nem kizárólagosan valamennyi szoftverre, logóra, márkajelre, márkanévre, fényképre, szövegre, grafikára, adatbázisra. A Szellemi Tulajdonnak tilos bárminemű megsértése, bitorlása, másolása, átdolgozása és tilos azt bármilyen egyéb módon megsérteni, azt jogosulatlanul felhasználni, továbbadni, megterhelni, azzal bármilyen módon rendelkezni, visszaélni. Ezen szabályok megsértése az Alkalmazás használati lehetőségeinek azonnali hatályú megszüntetése mellett a megfelelő jogi lépések megtételét – beleértve esetleges büntetőjogi lépések megtételét is – vonja maga után a Felhasználóval, más jogsértő személlyel szemben a Tulajdonos és/vagy a Szellemi Tulajdon egyéb jogosultjai által.

Használat Az Alkalmazás Felhasználói 7 éven felüli természetes személyek lehetnek. Az Alkalmazás díjmentesen vehető igénybe, kizárólag privát, azaz nem üzletszerű módon és célra, kizárólag a jelen Felhasználási Feltételek szerint. Az Alkalmazás letöltéséért és használatáért az adatforgalmat biztosító szolgáltató külön díjat számíthat fel. Az ezzel kapcsolatos esetlegesen felmerülő költségek a Felhasználót terhelik. A Felhasználási Feltételek és az Alkalmazás működésének a módosítására, az Alkalmazás működésének a megszüntetésére a Tulajdonos bármikor jogosult, a Felhasználó előzetes értesítése nélkül. Az Alkalmazáshoz való hozzáférést a Tulajdonos bármikor visszavonhatja akár az adott Felhasználóra nézve, akár szélesebb körben vagy teljes körűen előzetes értesítés, figyelmeztetés nélkül.

Felelősségi szabályok A Tulajdonos fenntartja magának a jogot arra, hogy amennyiben valamely Felhasználó részéről bármilyen manipulációt, tömegesen generált letöltést, illetve az Alkalmazás szellemével bármilyen módon összeférhetetlen vagy azt sértő magatartást tapasztal, vagy ennek megalapozott gyanúja felmerül, úgy a Felhasználót azonnali hatállyal kizárja az Alkalmazás felhasználói köréből. Az Alkalmazáshoz kapcsolódó adatbázis módosítása kizárólag az Üzemeltető által, illetve az Alkalmazást üzemeltető webkiszolgálón keresztül lehetséges. Bármilyen külső, nem az Alkalmazás részeként elérhető eszközzel történő beavatkozás a Felhasználó azonnali kizárását eredményezi. Ha a Felhasználó az Alkalmazást használat közben bezárja, vagy ha a kapcsolat (bármely okból) megszakad a kiszolgáló webhelyével, abban az esetben az adatok elvesztéséért a Tulajdonos semmilyen felelősséget nem vállal. A Tulajdonos és az Üzemeltető a rendelkezésére álló eszközökkel biztosítja, hogy az Alkalmazás használata technikai szempontból biztonságosnak minősüljön. Az Alkalmazáshoz való csatlakozás miatt bekövetkező károkért, az internetes hálózat esetleges üzemkimaradásából, az elérési út hibájából, bármely nem várt technikai hibából eredő adatvesztésért, vírusból, vagy más károkért a Tulajdonos nem felelős. A Felhasználóknak minden esetben fel kell mérniük, hogy rendelkeznek-e az Alkalmazás használatához szükséges ismeretekkel, technikai követelményekkel és teljesítményekkel.

##Funkcionális terv



##Fizikai környezet

Az alkalmazás Android és webes platformra készül, de elsősorban böngészőben lehet majd megnyitni, Mozilla, Safari, Google Chrome és Opera böngészőkben rendeltetésszerűen működik. Nincsenek sem megvásárolt komponenseink, sem alkalmazáson belüli mikrotranzakciók.

Eszközök, amiket a fejlesztéshez használunk:

- Visual Studio Code
- Geany
- Notion
- Notepad
- GitKraken
- GitHub
- Trello
- Apache

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