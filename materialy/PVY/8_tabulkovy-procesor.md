### 8 | Práce s tabulkovým procesorem

#### Charakteristika
Tabulkové procesory nám umožňují pracovat s nějakými zadanými daty, provádět s nimi výpočty, či různé operace. Nejznámnější a nejpoužívanějším programem je _Microsoft Excel_. 

Základem tohoto programu je _sešit_ _(přípona .XLS, .XLSX)_. Ten se dále skládá z listů (max 255).
Na jednom listu je k dispozici 16384 řádků a 256 sloupců.
Sloupce, v záhlaví, jsou značeny pomocí písmen (A-Z a pak pokračují kombinací písmen AA-IV). 
Řádky se označují pomocí čísel. Oblast určená pro zápis dat se nazývá buňka.
 - Do buněk zapisujeme 3 typy údajů:
	- Textové konstanty
    - Číselné konstanty
    - Vzorce

[![Buňka v Excelu](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/8_tabulkovy_procesor?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F8_tabulkovy_procesor%2F8_1_bunka.png)](https://nodesource.com/products/nsolid)
`Buňka v Excelu (ohraničená)`

#### Vkládání a opravy dat
##### Vkládaní textu a čísla
Excel automaticky rozezná, zda jde o číslo nebo text. Pokud chceme zapisovat číslo, které chceme aby bylo považováno za text (např. telefonní číslo), napíšeme před něj apostrof.

Obsah zadaný do jedné buňky je obsahem právě té jedné buňky do které jsme to zadali, i když jeho délka přesahuje šířku buňky. 
Pokud nemáme buňku předem naformátovanou, Excel se snaží číslo zobrazit. Zobrazí ho třeba zaokrouhlené nebo ve vědeckém formátu (zápis čísla 5000 ve vědeckém formátu je 5E+3).

##### Vkládání datumu
Datum patří mezi čísla, je to vlastně pořadové číslo. Datum musíme psát ve formátu jako je v nastavení systému Windows, jinak Excel nepozná že jde o datum – číslo.

##### Vkládání vzorců
Zápis vzorce začíná znakem “=”. Vzorce se skládají z číselných či textových konstant, odkazů na buňky a funkce. Prvky ve vzorcích spojujeme operátory (+, -, *, /, ^, <>, <, >, <=, >=, =). Ke spojování slouží &.

##### Příklad vzorce:
...

    =A1+A2 nebo =suma(A1;A2)
    Sečte buňky A1 a A2

>Po dopsání vzorce se objeví výsledná hodnota. Pokud je vzorec špatný buňka vypíše chybové hlášení.

##### Použití tabulkových funkcí
Excel poskytuje 10 různých typů funkcí pro tabulky: 
- matematické/trigonemetrické
- vědecké
- logické
- textové 
- statistické 
- informační a vyhledávací
- funkce pro datum a čas
- pro databáze
- finance.

>Obecný zápis funkce vypadá: název_funkce (argument1, argument2,……….argumentN). 

Co může být argumentem funkce*, záleží na konkrétní funkci. Například funkcí MAX, která hledá maximální hodnotu, mohou být konstanty, adresy buněk, nebo další funkce.

#### Tvorba a úprava tabulky
##### Filtry
Filtrem v excelu je podmínka, která si projde každý řádek na listě. Pokud řádek vyhoví, zůstane zobrazen, pokud ne tak se skryje. Filtr využijeme ve větších tabulkách. Například hledáme data které vyhovují jen určitým požadavkům. _Filtry lze kombinovat_.

#### Formátování tabulky
Je to postup, při kterém se snažíme dosáhnout co nejpřehlednější tabulky a aby se v ní dalo jednoduše orientovat.
Znamená to úpravu _šířky sloupců_, _výšek řádků_, _upravení stylu_, _velikosti a fontu písma_.

K dosažení maximálního uspokojení lze použít různých čar a rámečků.
Formátovat lze přímo zadávané údaje - nastavíme si jak chceme data zobrazovat před zadáním.
Při kopírování buňky se s obsahem kopíruje i formát.


[![Formátová tabulka](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/8_tabulkovy_procesor?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F8_tabulkovy_procesor%2F8_2_format-tabulky.png)](https://nodesource.com/products/nsolid)
`Možnost formátování tabulky`


#### Tvorba a úprava grafu
##### Grafy
V Excelu můžeme tvořit spoustu různých typů grafů od:
##### Dvojrozměrných:
   - sloupcové, pruhové, plošné, prstencové

##### Trojrozměrné:
kruhové, jehlanové, kuželové,...

Grafy jsou přímo propojeny s tabulkami, proto jakákoliv úprava tabulky změní i graf. 
Grafy jsou grafické objekty, proto jsou pro ně stejné možnosti manipulace jako s obrázky. Můžeme je proto vkládat do Wordu.
...
##### Tvorba Grafu
Nejdříve vytvoříme tabulku s daty ze které budeme čerpat.
Poté aktivujeme průvodce tvorbou grafu. Ten nás provede několika kroky, a zeptá se nás na typ _grafu_, _legendy_, _popisky_ a podobně. 
Graf může být umístěn na samostatném listu a nebo na listu, kde už data máme.


[![Příklad grafu](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/8_tabulkovy_procesor?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F8_tabulkovy_procesor%2F8_3_graf-pr.png)](https://nodesource.com/products/nsolid)
`Příklad grafu`




