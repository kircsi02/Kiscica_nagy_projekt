#Követelmény specifikáció

##Áttekintés

Egy olyan weblapot szeretnénk létrehozni, ami arra szolgál, hogy embereket kérdezünk, meg arról, hogy milyen kézírást látnak a képen, ez pedig összehasonlításra szolgálhat, amikor összehasonlítjuk, hogy az AI és az ember mit választ az adott képhez. Ehez pedig PHP-t, azon belül is Laravel-t és CSS-t és fogunk használni, hogy a weboldalt működésre bírjuk.

##Jelenlegi helyzet

Napjainkban elég sok gondot szokott okozni, hogy nyomtatványokban, hivatalos dokumentumokban a nyomtatott részek mellett vannak kézzel írott sorok is, mint például a dátum, aláírás stb. Annak érdekében, hogy ezeknek a feldolgozását meggyorsítsuk, létre akarunk hozni egy olyan weboldalt, ami a kézírást felismerő AI-ok működését segíti azzal, hogy egy statisztikát nyújt a véletlenszerű kézírásos képek felismerésében. Ez által kapunk egy képet, hogy az adott területen az emberek mit hogy írnak, mit hogy olvasnak, ami nagy segítséget nyújthat a későbbi kézírásfelismerések alkalmával.

Továbbá ez a weblap abban is nagy segítségünkre lehet, hogy azok az emberek, akik olyan szakmában dolgoznak, ahol nap mint nap kézírást kell felismerniük, gyakorolják ezt különböző írások beazonosításával, ezáltal növelve a hatékonyságot.

##Vágyálom rendszer

Egy olyan weboldalt szeretnénk megalkotni, ami könnyen kezelhető, reszponzív, átlátható és egyszerű, de nagyszerű dizájnnal rendelkezik, ezáltal vonzva a felhasználókat. Mindemellett nem csak a külsőre fektetnénk nagy hangsúlyt, hanem a működésre is:

- munkamenet mentése sütikkel, ami alapján a felhasználók meg vannak  különböztetve a rendszerben
- regisztráció, de nem kötelező az oldal használatához, csak a munkánk pontosságát segíti, helyadatok és név megadásával
- valamint az oldal legfontosabb funkciója, hogy képeket mutasson rajta egy-egy számot kézirással, amiről el kell döntenie a felhasználónak, hogy szerinte melyik szám lehet a képen, az oldal pedig később megmondja, hogy helyesen választott-e vagy sem

##Funkcionális követelmények

Az oldal lefgontosabb funkciója, amit a felhasználók elérnek, az a képeken lévő kézirások felismerése és annak megadása, majd miuátn az összes kitöltendő feladvány meg van oldva, a helyes megoldások kiírása a képernyőre. Regisztrálni is lehet, de nincs nagy jelentősége, ugyanis csak egy helységnevet és egy nevet kell megadni, de sem a egisztáció, sem az adatok megadása nem kötelező. A kezelőfelület webes kialakítású, menüpontokkal léphetünk a weblap egyik oldaláról a másikra. Öt menüpont lesz elérhető a felületen:

- Főoldal
- Számrejtvény
- Regisztráció
- Bejelentkezés
- Elérhetőségek

##Rendszerre vonatkozó törvények, szabályok

Általános Információk Az Alkalmazáshoz való hozzáférést és annak használatát az alkalmazandó jogszabályok és a jelen Felhasználási Feltételek és Adatkezelési tájékoztató (a továbbiakban Felhasználási Feltételek) szabályozzák. Az Alkalmazást letöltők és használók (a továbbiakban: a Felhasználók) elfogadják a jelen Felhasználási Feltételeket. Amennyiben ezen Felhasználási Feltételeket és Adatkezelési Tájékoztatót nem fogadják el, nem jogosultak a regisztrációra és az Alkalmazás használatára. A jelen Felhasználási Feltételekre a magyar jog az irányadó, tekintet nélkül a nemzetközi magánjog előírásaira. Az Alkalmazás Felhasználói kifejezetten hozzájárulnak ahhoz, hogy a jogvitákra a magyar hatóságoknak és bíróságoknak legyen kizárólagos joghatóságuk a magyar jog alapján.

Szellemi tulajdon Az Alkalmazás és valamennyi kapcsolódó védjegy, szerzői jogi alkotás és egyéb – akár bejegyzett, akár be nem jegyzett – szellemi tulajdon (a továbbiakban együttesen: Szellemi Tulajdon) tulajdonosa az EKE és/vagy EKE Szolgáltató, valamint az alkalmazáshoz kedvezményt nyújtó partnerek. A Felhasználók az Alkalmazást a Szellemi Tulajdon maximális tiszteletben tartásával jogosultak használni. A Szellemi Tulajdon kiterjed különösen, de nem kizárólagosan valamennyi szoftverre, logóra, márkajelre, márkanévre, fényképre, szövegre, grafikára, adatbázisra. A Szellemi Tulajdonnak tilos bárminemű megsértése, bitorlása, másolása, átdolgozása és tilos azt bármilyen egyéb módon megsérteni, azt jogosulatlanul felhasználni, továbbadni, megterhelni, azzal bármilyen módon rendelkezni, visszaélni. Ezen szabályok megsértése az Alkalmazás használati lehetőségeinek azonnali hatályú megszüntetése mellett a megfelelő jogi lépések megtételét – beleértve esetleges büntetőjogi lépések megtételét is – vonja maga után a Felhasználóval, más jogsértő személlyel szemben a Tulajdonos és/vagy a Szellemi Tulajdon egyéb jogosultjai által.

Használat Az Alkalmazás Felhasználói 7 éven felüli természetes személyek lehetnek. Az Alkalmazás díjmentesen vehető igénybe, kizárólag privát, azaz nem üzletszerű módon és célra, kizárólag a jelen Felhasználási Feltételek szerint. Az Alkalmazás letöltéséért és használatáért az adatforgalmat biztosító szolgáltató külön díjat számíthat fel. Az ezzel kapcsolatos esetlegesen felmerülő költségek a Felhasználót terhelik. A Felhasználási Feltételek és az Alkalmazás működésének a módosítására, az Alkalmazás működésének a megszüntetésére a Tulajdonos bármikor jogosult, a Felhasználó előzetes értesítése nélkül. Az Alkalmazáshoz való hozzáférést a Tulajdonos bármikor visszavonhatja akár az adott Felhasználóra nézve, akár szélesebb körben vagy teljes körűen előzetes értesítés, figyelmeztetés nélkül.

Felelősségi szabályok A Tulajdonos fenntartja magának a jogot arra, hogy amennyiben valamely Felhasználó részéről bármilyen manipulációt, tömegesen generált letöltést, illetve az Alkalmazás szellemével bármilyen módon összeférhetetlen vagy azt sértő magatartást tapasztal, vagy ennek megalapozott gyanúja felmerül, úgy a Felhasználót azonnali hatállyal kizárja az Alkalmazás felhasználói köréből. Az Alkalmazáshoz kapcsolódó adatbázis módosítása kizárólag az Üzemeltető által, illetve az Alkalmazást üzemeltető webkiszolgálón keresztül lehetséges. Bármilyen külső, nem az Alkalmazás részeként elérhető eszközzel történő beavatkozás a Felhasználó azonnali kizárását eredményezi. Ha a Felhasználó az Alkalmazást használat közben bezárja, vagy ha a kapcsolat (bármely okból) megszakad a kiszolgáló webhelyével, abban az esetben az adatok elvesztéséért a Tulajdonos semmilyen felelősséget nem vállal. A Tulajdonos és az Üzemeltető a rendelkezésére álló eszközökkel biztosítja, hogy az Alkalmazás használata technikai szempontból biztonságosnak minősüljön. Az Alkalmazáshoz való csatlakozás miatt bekövetkező károkért, az internetes hálózat esetleges üzemkimaradásából, az elérési út hibájából, bármely nem várt technikai hibából eredő adatvesztésért, vírusból, vagy más károkért a Tulajdonos nem felelős. A Felhasználóknak minden esetben fel kell mérniük, hogy rendelkeznek-e az Alkalmazás használatához szükséges ismeretekkel, technikai követelményekkel és teljesítményekkel.

##Jelenlegi üzleti folyamatok modellje

A felhasználó fellép a weblapra és legelőször a Főoldalon találja magát, ahol tud regisztálni, ha szeretne, esetleg fel tudja venni velünk a kapcsolatot, ha probléma adódna vagy átléphet a Számrejtvények fülre és próbálkozhat a számok felismerésével egyaránt.

##Igényelt üzleti folyamatok modellje

A felhasználók regisztrálhatnak egy név és egy helységnév megadásával, de nem kötelező az oldal használatához, csak a statisztikai adatok gyűjtéséhez segítik elő a munkánkat, hogyha regisztrálnak. Fontosnak tartjuk azt is, hogy a weblap átlátható legyen, mindent kényelmesen meg lehessen találni, valamint, hogy a felhasználók előszeretettel jöjjenek fel az oldalra és minél többször és minél több “feladványt” oldjanak meg, ezzel is támogatva minket és a munkánkat. Továbbá fontos még számunkra, hogy kialakítsunk egy olyan rendszert, ami ellenőrzi, hogy milyen szám található a képen, és megmondja a felhasználónak, hogy jól válaszolt-e vagy sem, lehetőleg azonnal, vagy a 20 db feladat végén összesítve.

##Követelménylista

- [K01] - Könnyen üzemeltethető és karbantartható rendszer
- [K02] - Reszponzív dizájn
- [K03] - Regisztáció (nem kötelező)
- [K04] - Felhasználó megjegyzése vagy helyileg, vagy regisztrációval
- [K05] - Kézírásos képek megjelenítése (20 db)
- [K06] - Tipp megadása és annak ellenőrzése
- [K07] - 20 db feladat adása után végeremény mutatása

##Riportok

- Kivitelező: Mi az oldal ötlete? Milyen koncepciójú és főbb funkciókkal rendelkező oldalt szeretne?
- Megrendelő: Egy olyan oldalt szeretnénk, ahol a felhasználó véletlenszerűen kap egy képet valamelyik szám kézírásáról 0-tól 9-ig, ebből egymás után kb olyan 20 db-ot, majd a tippeket ellenőrizve megmondja, hogy melyik volt jó és melyik volt rossz, majd ezt jelzi is a felhasználónak.

- Kivitelező: Milyen felületet szeretne a weboldalnak? Milyen legyen az oldal dizájnja? Legyen regisztráció, bejelentkezés?
- Megrendelő: Egy könnyen kezelhető és átlátható, nem túl sok menüvel és összezavaró gombbal rendelkező felületet szeretnénk, ami egyszerű, sikkes és nem túldekorált vagy zavaró dizájnnal rendelkezik. A regisztráció és a bejelentkezés nem fontos, de mivel jó, ha van, csak hely és névmegadáshoz kötnénk

##Fogalomtár