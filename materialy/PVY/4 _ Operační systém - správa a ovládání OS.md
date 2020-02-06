### 4 | Operační systém - správa a ovládání OS

#### Definice OS
----

> Základní programové vybavení počítače neboli software. Je to program, který nám umožňuje počítač ovládat. 

Zavádí se do operační paměti hned po zapnutí počítače ze _zvláštní oblasti pevného disku, Boot Sectoru_, kde jsou fyzicky uloženy jeho soubory. Do Boot Sectoru se OS uloží jen při instalaci.

Hlavním úkolem OS je zprostředkovat vazbu mezi technickým vybavením počítače a aplikacemi. OS poskytuje aplikacím služby a aplikace voláním těchto služeb ovládají technické vybavení počítače.

#### Typy OS
----

- **Jednouživatelské jednoúlohové**
    Nemá žádné prostředky ochrany souborů a disků, neumožňuje běh více procesů (programů) najednou, -     - například: MS-DOS

- **Jednouživatelské víceúlohové**
    Má už multitasking, možnost paralelního (současného) běhu několika procesů, kooperativní multitasking, preemptivní multitasking.
    - například: Windows 9x, Me, Windows XP

- **Víceuživatelské víceúlohové**
    Možnost zpracovávat požadavky více uživatelů přihlášených do systému
        - například: Windows NT, Windows 2000, Unix, Linux, Windows XP

- **Systémy s reálným časem**
Zejména pro řízení technologických procesů.

##### Dále můžeme rozlišovat OS dle využití a to určené na:	
- Desktop (PC)
- Mobilní zařízení
- Servery

#### Funkce OS
---
##### Ovládání počítače
Při definici operačního systému se obvykle omezuje ovládání počítače na schopnost spustit program, předat mu vstupní data a umožnit výstup výsledků na výstupní zařízení. Někdy je však pojem operační systém rozšířen i na grafické uživatelské rozhraní. 
U systémů, které disponují jediným grafickým rozhraním (Microsoft Windows, Symbian OS,..) je často grafické rozhraní zahrnováno do operačního systému.


##### Abstrakce hardware
Operační systém skrývá detaily ovládání jednotlivých zařízení v počítači (tzv. hardware) a definuje standardní rozhraní pro volání systémových služeb tak, že vytváří abstraktní vrstvu s jednoduchými funkcemi (tzv. API), které využívají programátoři aplikací. Umožňuje programům pracovat i se zařízeními, které v době vzniku programu neexistovaly. 
Někdy je uvnitř operačního systému vytvářena podobná abstraktní mezivrstva, která usnadňuje programování ovladačů jednotlivých zařízení (tzv. HAL)


##### Správa prostředků
Operační systém přiděluje spuštěným procesům systémové prostředky _(operační paměť, procesor, pevný disk, vstupně-výstupní zařízení)_.
V případě potřeby může operační systém procesům přidělené prostředky násilně odebrat (preempce). Operační systém využívá schopnosti procesoru k ochraně sebe samého, ale i k oddělení pracovního prostoru jednotlivých procesů.

#### Důležité pojmy 
---
##### Multitasking
Jedná se o funkci umožňující souběžné zpracování více úloh v jednom okamžiku, _tzn. že běží několik procesů současně._ Například prohlížení internetu a pouštění hudby zároveň. 
Běh takto dvou spuštěných aplikací je však pouze zdánlivý. Ve skutečnosti procesor běžící procesy rychle střídá a uživatel dostane dojem, že běží současně. Přepínání mezi procesy se nazývá změna kontextu.

##### Driver (ovladač, ovladač zařízení)
Jedná se o software, pomocí kterého dokáže operační systém zacházet s daným hardwarem – komunikovat s ním, obsluhovat ho.

##### Bootování
Zavádění operačního systému do operační paměti RAM po zapnutí počítače. Jde o sekvenci úkonů, které se provedou, _aby došlo ke správnému spuštění počítače_.  Mezi ně patří také kontrola funkčnosti součástek počítače, aktivace připojených zařízení a poté dochází k nahrávání části operačního systému do paměti RAM.

##### Proces
Spuštěný a zpracovávaný počítačový program. Je umístěn v operační paměti počítače v podobě strojových instrukcí, které vykonává procesor v určitém sledu. Obsahuje nejen kód vykonávaného programu, ale i dynamicky měnící se data, které se zpracovávají.

##### Vlákno
Vláknem se označuje odlehčený proces, který snižuje režie operačního systému při střídání procesů na procesoru. Proces se tedy může dělit na vlákna, která pak pomocí sdílené paměti usnadňují komunikaci – vlákno vlastní paměť nemá, sdílí ji společně s ostatními vlákny běžícími ve stejném procesu. 
Vlákna tak mohou přistupovat ke stejným datům současně.

#### Ovládání OS
---
##### Průzkumník
Pomáhá při správě souborů a složek. Umožňuje procházet jednotlivé složky a vybírat _jednotlivé soubory nebo i skupiny souborů_.

##### Nabídka start
Slouží zejména k jednoduchému spouštění programů a obsahuje také tlačítka pro vyhledávání na disku počítače, nápovědu, vypnutí počítače a odhlášení z uživatelského účtu.

##### Ovládací panely
Centrum pro nastavování vlastností systému, komponent a periferií. Najdeme je jako jednu z položek na pravé straně pod tlačítkem Start.

#### Pracovní plocha
Místo, které se načte po zapnutí operačního systému nebo po přihlášení uživatele. Na ploše mohou být umístěny ikony. Na ploše mohou být umístěny okna programu. Ve spodní části obrazovky se nachází hlavní panel.
