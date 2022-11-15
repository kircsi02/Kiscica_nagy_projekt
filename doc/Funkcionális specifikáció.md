# Funkcionális specifikáció

## Áttekintés

Egy olyan weblapot szeretnénk létrehozni, ami arra szolgál, hogy embereket kérdezünk, meg arról, hogy milyen kézírást látnak a képen, ez pedig összehasonlításra szolgálhat, amikor összehasonlítjuk, hogy az AI és az ember mit választ az adott képhez. Emellett segíti a kézírással nap mint nap foglalkozók munkáját azzal, hogy gyakorolhatják annak felismerését úgy, hogy az oldal ellenőrzi nekik és visszajelzést ad a felhasználónak. Ehhez pedig PHP-t, azon belül is Laravel-t és CSS-t és fogunk használni, hogy a weboldalt működésre bírjuk.

## Jelenlegi helyzet

Napjainkban elég sok gondot szokott okozni, hogy nyomtatványokban, hivatalos dokumentumokban a nyomtatott részek mellett vannak kézzel írott sorok is, mint például a dátum, aláírás stb. Annak érdekében, hogy ezeknek a feldolgozását meggyorsítsuk, létre akarunk hozni egy olyan weboldalt, ami a kézírást felismerő AI-ok működését segíti azzal, hogy egy statisztikát nyújt a véletlenszerű kézírásos képek felismerésében. Ez által kapunk egy képet, hogy az adott területen az emberek mit hogy írnak, mit hogy olvasnak, ami nagy segítséget nyújthat a későbbi kézírásfelisme

## Követelménylista

- [K01] - Könnyen üzemeltethető és karbantartható rendszer, ami egyszerő felülettel és dizájnnal rendelkezik
- [K02] - Reszponzív dizájn, ami a legtöbb platformon rendeltetésszerűen működik
- [K03] - Regisztáció (nem kötelező), hely és név megadásával, ezáltal pontosítva a felmérést
- [K04] - Felhasználó megjegyzése vagy helyileg sütikkel, vagy regisztrációval és bejelentkezéssel
- [K05] - Kézírásos képek megjelenítése sorban, egymás után, lehetőleg mindegyik különböző (20 db)
- [K06] - Tipp megadása és annak ellenőrzése, majd tippek tárolása későbbi felhasználásra
- [K07] - 20 db feladat adása után végeremény mutatása a felhasználónak, majd ennek mentése későbbi felhasználásra, de a felhasználó nem fér hozzá  előző ereményeihez

## Jelenlegi üzleti folyamatok modellje

A felhasználó fellép a weblapra és legelőször a Főoldalon találja magát, ahol tud regisztálni, ha szeretne, mindezt egy helységadat és egy név megadásával, esetleg meg tudja nézni az elérhetőségeinket és fel tudja venni velünk a kapcsolatot, ha probléma adódna vagy átléphet a Számrejtvények fülre és próbálkozhat a számok felismerésével egyaránt. A számok felismerése 20 db feladványól áll, ami nem megszakíthetó, szóval ha elhagyjuk az oldalt, elölről kell kezdenünk a megoldását. Miután megoldottuk a feladatot, a rendszer kiírja nekünk az eredményt, amit bár el is tárol, a felhasználó nem fog hozzáférni semmilyen formában az előző eredményeihez, de neki nem is olyan fontos, hiszen csak gyakorlásra használja, vagy segít nekünk ezzel a felmérésben, amiért rettentően hálásak vagyunk.

## Igényelt üzleti folyamatok modellje

A felhasználók regisztrálhatnak egy név és egy helységnév megadásával, de nem kötelező az oldal használatához, csak a statisztikai adatok gyűjtéséhez segítik elő a munkánkat, hogyha regisztrálnak. Fontosnak tartjuk azt is, hogy a weblap átlátható legyen, mindent kényelmesen meg lehessen találni, ne bántsa a dizájn a felhasználók szemét, valamint, hogy a felhasználók előszeretettel jöjjenek fel az oldalra és minél többször és minél több “feladványt” oldjanak meg, ezzel is támogatva minket és a munkánkat. Továbbá fontos még számunkra, hogy kialakítsunk egy olyan rendszert, ami ellenőrzi, hogy milyen szám található a képen, és megmondja a felhasználónak, hogy jól válaszolt-e vagy sem, lehetőleg azonnal, vagy a 20 db feladat végén összesítve és kimutatva az ereményt. Emellett törekszünk arra, hogy az eredményekhez, amiket a felhasználók elértek, hozzáférést biztosítsunk számukra, bár ez nem biztos, hogy megvalósul. Továbbá fontosnak tartjuk, hogy a feladványok ne ismétlődjenek a feladatokban, hiszen az nem lenne reális a felmérés szempontjából.

## Használati esetek

## Képernyőtervek

## Forgatókönyv

- Új felhasználó: Amikor először fellép a weboldalra, a Főoldalt látja, ahonnan kedve szerint navigálhat az Elérhetőségekhez, illetve a Számrejtvények oldalra, vagy Regisztálhat az oldalra egy helyadat és egy név megadásával, ezáltal elmentve a munkamenetet későbbi használatra. Ha az Elérhetőségek menüpontot választja, ott megtalálja a karbantartók e-mail címét és telefonszámát (persze itt nem az létező adatokat) és ezek tudatában felkeresheti őket, ha probléma adódik. Ha innen, vagy akár a Főoldalról a Számrejtvény menüpontot választja, akkor kap egy képet egy kézzel írt számmal, és egy numpadon kattintással jeleznie kell a felhasználónak, hogy szerinte melyik szám található a képen. Ebből kap 20 különböző db képet, amit a végén kiértékel a rendszer, hogy mennyi volt jó és mennyi lett rossz. Ezek után kezdhet újat, vagy foglalkozhat az eddig leírtakkal is.
- Már regisztrált felhasználó: Ugyanazokat a tevpékenységeket tudja elvégezni, mint az új felhasználó, azzal a különbséggel, hogy a Főoldalról a Bejelentkezésre lépve belépés után rögtön azonosítva van, így a munkamenete névhez és helyadathoz van kötve.

## Fogalomtár