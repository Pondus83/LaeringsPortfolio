<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>Portfolio - Morten Pontoppidan</title>
        <link rel="stylesheet" href="stylesheet.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <section id="mygrid">

            <header>
                <h1>MMD 1. Semester Portfolio<br>Morten Pontoppidan</h1>
                <p>-</p>
                <p>Kodning</p>
            </header>

            <section id="_et">
                <h2>HTML</h2>

                <h3>Beskrivelse</h3>
                <p><abbr title ="HyperText markup Language">HTML</abbr> er et sprog der bruges af udviklere til at strukturere opbygningen af en hjemmeside. Sproget fortæller browsere hvordan de skal vise en html fil, som en hjemmeside.</p>
                <p>For at der er tale om HTML skal filen være af typen xxx.html og indholdet skal være skrevet inde i et <abbr title ='<html>indhold</html>'>html element</abbr>.<br>Alt inde i dette element skal være sat op efter reglerne for html. Dette bruger browseren til at vise indholdet for brugeren, med udviklerens tiltænkte struktur.</p>

                <h3>Elementer</h3>
                <p>Et html element bliver også kaldt for tags og de fleste består af et < start tag> og et </ slut tag>. Elementerne img og br har ikke noget sluttag da de ikke har noget indhold.<br>Inde i start taget kan der være flere attribute (egenskaber) med tilhørende value (værdi). Mellem start og slut tag er content (indholdet) som skal vises på siden</p>
                <p>Der er to primære elementer på en hjemmesiden. Et <strong>head tag</strong> indeholdende meta-data om ombygningingen af hjemmesiden og hvordan den skal læses, samt et <strong>body tag</strong> hvor alt det der skal vises på siden skal skrives.</p>
                <p>Her er et <a href="https://www.w3schools.com/tags/ref_byfunc.asp" target="_blank">link</a> med alle elementer i html sat op efter funktion</p>

                <h3>Semantiske tags</h3>
                <p>Som med så meget andet i verden kan man dele elementer i html op i to forskellige typer, dem der er semantiske og dem som ikke er.</p>
                <p>De semantiske elementer fortæller noget om indholdet. Dette giver søgemaskiner, som f.eks. google, mulighed for at rangere hjemmesider i forhold til hvor relevant indholdet på hjemmesiden er i forhold til søgningen. Googles søgemaskine er en sort boks, så hvordan man bruger semaniske tags er ikke en eksakt videnskab men man må prøve sig frem.</p>
                <p<>De ikke semantiske elementer fortæller ikke noget om hvilket indhold de indeholder, og giver derfor ikke synlighed i forhold til at blive fundet ved en søgning.</p>
                <p>Hvis jeg skal ud og have oplysninger om et nedløbsrør eller andet der ligger uden for min ekspertise, så laver jeg en google søgning på det pågældende produkt. Dette gør jeg da jeg ikke i min dagligdag har behov for at kende til en god hjemmeside om det pågældende produkt.<br>Jeg udvikler min kompetence på at søge efter information i stedet for at kende information eller vide hvor jeg skal finde den.<br>Det er min påstand at langt størstedelen af webbrugere vil gøre det samme som mig, derfor er semantiske tags så vigtige når man laver en hjemmeside.</p>
            </section>

            <section id="_to">
                <h2>CSS</h2>

                <h3>Beskrivelse</h3>
                <p><abbr title ="Cascading Style Sheets">CSS</abbr> beskriver hvordan layout af en eller flere html filer skal se ud i en browser. Det adskiller altså struktur/indholdet på en hjemmeside(html delen) med layout(CSS delen). CSS kan beskrives som et vandfald af regler ”rules” der skyller ned over html delen, hvorefter den flytter, farver og forvandler indholdet til det givne layout som forfatteren havde tiltænkt.</p>
                <p>Når man har en mange html filer der skal have ens layout, er det en fordel kun at lave layout et sted, så er der også kun et sted det skal rettes.</p>

                <h3>Placering af style regler</h3>
                <p>Der er 3 forskellige steder at placere reglerne til layout for en hjemmeside.</p>
                <p>Enten placeres det i en CSS fil som der bliver refereret til fra head i html filen, dette kaldes for external StyleSheet. Dette er den bedste måde at styre layout, da det kun står et sted og det er det eneste der er i denne fil.</p>
                <p>Den kan også være embedet i head i html filen hvilket kaldes internal stylesheet. Dette kan godt bruges som nødløsning, men der bør sigtes efter at skrive alt layout i en særskilt fil.</p>
                <p>Styles kan også placeres direkte i tags, hvilket kaldes inline style. Dette adskiller dog ikke indhold med layout og man kan ikke lave regler der gælder for flere tags. Derfor bør dette aldrig bruges til den endelige hjemmeside, da det vil være meget svært at gennemskue og rette layout. Det kan dog bruges i testfasen for hurtigt at se hvordan resultatet vil være.</p>

                <h3>Selectors</h3>
                <p>Selectors er måden hvorpå CSS kan styre html til at blive vist med et design i en browser.</p>
                <p>Der er tre primære typer af selectors:</p>
                <ul>
                    <li>Almindelige tags i html såsom body, h1 og p.</li>
                    <li>Tags der er udstyret med en class. Dette grupperer tags, der skal have samme style. Måden man giver et tag en class er (Billede: class=”MyClass”).</li>
                    <li>Tags der er udstyret med et id som gør dette tag unikt, hvilket vil sige man kun må bruge dette id en gang. Id’et bruges også til at style og få elementet det rigtige sted hen i et grid. (Billede: id=”MyId”)</li>
                </ul>
                <p>Disse selectors kan kombineres så de kun rammer bestemte tags. Enten tags der er inden i andre tags eller tags der er det (n) barn af en selector.<br>Derudover kan selectors også udstyres med en pseudo-class. Her vil der ske noget hvis musen er over (:hover).</p>

                <h3>Syntaks</h3>
                <p>I eksternal og internal CSS refererer man html delen med hjælp af selectors. Disse selectors er forskellige, afhængig af hvilket tag der skal refereres til.</p>
                <ul>
                    <li>et standart tag refereres til ved at skrive tagets navn (F.eks. ”section”)</li>
                    <li>en class refereres til ved at skrive et punktum før navnet(F.eks. ”.MyClass”)</li>
                    <li>et id refereres til ved at skrive et # før navnet (F.eks. #MyId)</li>
                </ul>
                <p>Efter referencen laves declararions start og declaration end med curly brackets ”{}”. Mellem start og end skrives de forskellige regler der skal gælde for den pågældende selector. Dette gøres med en property der skal ændres, derefter en separator og derefter den value den skal have. For at markere der ikke skal ændres mere sluttes reglen af med et semikolon. Der kan stå flere regler efter hinanden, og så længe man husker semikolon giver det ingen problemer 😊 <abbr title ="Lars Løkke Rasmussen">”Laver man ingen fejl, er det højest sandsynligt fordi man ikke laver noget”</abbr></p>

                <H3>Kaskaderegler</H3>
                <p>Beskriver hvilket hierarki der gælder for ens selektore i CSS</p>
                <p>Hvis vi starter opstigningen i bunden af pyramiden, vi står nærmest stadig på jorden. Her vil de første regler være default i browseren. Der er nogle enkelte margin/padding som har en værdi, men ellers er reglerne default sat til 0 eller ingenting.</p>
                <p>Første reelle trin op af pyramiden er rækkefølgen reglerne bliver ”læst”. Her læses fra starten af html filen og nedefter. Hvis man styler på et tag i et ”stylesheet.css” i head og efterfølgende styler på det i noget der er embedet, siger rækkefølgen at det er det som står sidst, altså det embetdet, der bestemme, da det er det sidste der bliver ”læst”. Hvis der er stylet noget inline, vil det være det sidste der bliver ”læst”, og derved det der bestemmer.</p>
                <p>Andet trin er er specificity med kombinations selektors.</p>
                <p>Tredje trin er hvis der optræder regel med samme selektor længere nede i CSS.</p>
                <p>Fjerde og sidste trin er ”!important”. Den er ikke rigtig en del af pyramiden da den tilsidesætter alle andre regler. Derfor skal den også kun bruges i særlige tilfælde. Den er spidsen af pyramiden hvilket kan oversættes til at den fylder ikke særlige meget i forhold til resten af pyramiden og at den gør ondt at stå på i længere tid. Især hvis man har barre fødder.</p>

                <h3>GRID</h3>
                <p>Grid er forholdsvis nyt i CSS. Det er blevet da der manglede en nem måde at opbygge strukturen af indholdet på en hjemmeside. Før Grid var den udbredte måde at bruge fleksboks, men dette gav mange problemer og en god hjemmeside var mere resultatet af trial and error end en målrettet udvikling fra start til slut.</p>
                <p>Med grid kan man bygge en hjemmeside op i felter som et koordinatsystems med y-aksen nedad. Man bestemmer selv hvor mange kolonner og rækker grid’et skal være bygget op af. Bredden og højen af disse rækker og kolonner kan bestemmes på tre måder. Enten kan man give en fast værdi i form af pixel eller også kan man give en forholdsmæssig værdi i forhold til procent. En ny måde at give værdi til bredden eller højden er <bold>fr</bold> (fraktion), denne tager den plads der er tilbage og deler ligeligt ud på antallet af fraktions i gridet. Dette er meget naturligt at arbejde med og giver fordele når man skal bygge hjemmesiden op.</p>

                <h3>Responsiv</h3>
                <p>En responsiv hjemmeside reagerer på den bredte som den vises i. At en hjemmeside er responsiv er blevet et behov da flere tilgår nettet fra deres smartphones og designeren har derfor et behov for at at designe hjemmesiden efter hvilke muligheder den har for at blive vist. Der behøves altså ikke udvikles 2 eller flere forskellige hjemmesider med forskellige adresser som enten skal tilgås fra en computer eller en tablet. Herved spares der på udviklingsomkostninger til at udvikle to eller flere hjemmesider og vedligeholdelsesomkostninger for at opdatere indhold eller design sideløbende på to eller flere hjemmesider.</p>
                <p>Når man koder responsive hjemmesider er det en god regel, og en nødvendighed for at opgaven kan godkendes, at tage udgangspunkt i hvordan hjemmesiden ser ud på en mobil for herefter at indsætte breakponts som ændre udseendet efterhånden som bredden bliver større. Dette kaldes Mobile First modsat at kode det Mobile Last/Desktop First. Dette gøres for at holde fokus på hjemmesiden til mobilen, da statistikken viser der er flest brugere der tilgår hjemmesider herfra og der kun kommer flere i fremtiden. Derudover vil en hjemmeside til en mobil være læselig på en tablet eller pc, mens det ikke giver et godt resultat for brugeren hvis det modsatte er tilfældet.</p>
            </section>

            <section id="_tre">
                <h2>Kodeskik</h2>

                <h3>Beskrivelse</h3>
                <p>Når man arbejder med at kode en hjemmeside, giver det god mening at gøre som man gør. Men hvis andre skal læse koden, eller hvis der går et stykke tid før man skal læse koden igen, skal den være nem at overskue og forstå hvad koden handler om. Her hjælper god kodeskik til at skabe en ensartet struktur fra kode til kode og letter forståelsen </p>

                <h3>Editor</h3>
                <p>Editors hjælper brugeren med opstillingen af koden da den klare de fleste indryk selv.</p>

                <h3>Navngivning</h3>
                <p>For at finde rundt i koden, er det en god ide at give id og class navne der siger noget om hvad de er. Der kan ikke bruges mellemrum i navne. Dette kan løses ved  Dette kan gøre på mange forskellige måder. To måder er CamelCase eller underlining</p>

                <h3>Linjeskift</h3>
                <p>Der skal både være linjeskift i HTML og CSS. Dette gøres for at gøre koden mere overskuelig.</p>

                <h3>Kommentarer</h3>
                <p>Kommentarer bruges for at give overblik til læsere af koden.</p>
                <p>I html bruges kommentarer primært til at markere hvor et grid felt slutter, men også hvis en kode stump behøver for</p>
            </section>

            <section id="_fire">
                <h2>PHP</h2>

                <h3>Beskrivelse</h3>
                <p><abbr title="PHP Hypertext Preprocessor eller Personal Home Page">PHP</abbr> eller serverside scripting er som navnet antyder kode som bliver dannet på serversiden. Dette har sine fordele da udviklere så kan lave hjemmesider der bliver tilpasset brugerens indput, browseren som hjemmesiden tilgås fra eller hvad klokken er.</p>
                <p>Vi bruger PHP til at skrive en kode et sted, som skal bruges flere gange. Dette kan f.eks. være en menu der skal bruges på flere hjemmesider. Istedet for at skulle rette den på flere hjemmesider, er det en fodel at den kun skal rettes et sted.</p>
            </section>

            <section id="_kilder">
                <h2>Kilder</h2 >
                <ul>
                    <li><a href="www.w3schools.com" target="_blank">w3schools</a></li>
                    <li>Niels Østergaard</li>
                    <ul>
                        <li>PowerPoint</li>
                        <li>Undervisning</li>
                        <li>Noter</li>
                    </ul>
                </ul>
            </section>

            <?php
                include 'footer.inc';
            ?>
        </section>
        
        <?php
            include 'nav.inc';
        ?>
    </body>
</html>
