# _Otázka č. 10:_
# Statické a dynamické routování. Směrovací tabulka a směrovací protokoly. Příklad

## **Směrování**
V rámci poč. sítí směrování značí určování cest **packetů**.

>Směrování zajišťují **routery**, mohou to být ale i **servery** či **PC nebo tak firewally**. Jejich úkolem je doručit **packet**, **co možná nejefektivnější cestou**.
Směrování zajišťuje **třetí**, tedy **_síťová vrstva ISO/OSI_**.
Směrování je používáno jak v **LAN sítích**, tak i na _**Internetu**_.

Směrování zajišťují **směrovače**, které od sebe oddělují jednotlivé sítě. Pro samotné směrování, jako pro všechno **v síti**, jsou definované standardy ve formě **protokolů**.

## **Základní pojmy routování:**
-	**Router** – směrovač
-	**Routing table** – _směrovací tabulka_, v níž jsou **záznamy**, kam pakety **směrovat**
-	**Next hop** – _další směrovač_, přes který se dostaneme k cíli
-	**Administrative distance** – **číslo od 0 až po 255**, kt. **indikuje**, jak je _daná cesta výhodná_
-	**Autonomní systém** – je **množina sítí a routerů (se svýma IP adresama)**, kterou spravuje jeden _administrátor_. Tento systém má vůči Internetu stejný způsob routování

## Směrovací tabulka:
Směrovací tabulka označuje **soubor**, který definuje cesty, kterými je packet směrován. Právě **směrovací tabulka obsahuje informace**, které jsou nutné při rozhodování směrování
Tato tabulka může být **uložena nejčastěji v routeru, ale také v koncových zařízeních.** Tabulka je uložena v **operační paměti** _počítače nebo routeru_.

Směrovací tabulka je **vytvořena při startu počítače** _(může být i za jeho běhu)_. Pro protokoly **TCP/IP** je _vložena_ jako součást **jádra OS**. Směrovací tabulka obsahuje informace nastavené **staticky** _(nastavené adminem, uloženy na HDD)_ nebo **dynamické** _(ty si z tabulky filtruje směrovací protokol – RIP, OSPF)_.

Záznamy jsou ve směrovací tabulce uloženy _v řádcích_, kdy **každý jeden záznam představuje** jednu _směrovací informaci_. Informace v tabulce jsou **seřazeny** od těch _nejkonkrétnějších (maska sítě)_ po _obecné_. **Poslední záznam** je vždy odkaz na _nejbližší router_ (tzn. implicitní brána).

## Druhy routování: 
### Statické routování:
Statické routování (tedy statické **směrování cesty packetům**) je používáno v **_menších sítích_** či **_k přístupu k sítím vzdáleným_**, tedy nepřipojeným k síťovému routeru (směrovači).

Tento typ routování **typicky používají** _koncové stanice_ sítě či _routery v domácích sítích_. **Záznamy statických dat** jsou **_ručně_** do tabulky zadány (adminem). Ukládány jsou poté v **tzn. konfiguračním souboru**, v koncových zařízeních potom **v registrech MS Windows**.
Z názvu plyne, že router při statických adresách nemůže _vytvářet alternativní cesty_. Všechny změny v sítí poté **_vyžadují pomoc admina_**.

>**VÝHODY:** možnost permanentního nastavení (lepší možnost zabezpečení)
>**Nevýhody**  malá flexibilita, nutnost zadání každé změny ručně

### Dynamické routování:
Dynamické routování se **používá** tam, kde **existuje více cest k cíli** a potřebujeme-li mít v síti redundanci _(nadbytečnost)_. Dynamické (taktéž se můžeme setkat s pojmem _**adaptivní**_) routování tedy **reaguje na změny** (změna topologie, zátěže v nějaké části sítě) v síti a _přizpůsobuje tomu obsah_ routovací tabulky. 

Routovací tabulka se tedy mění **automatizovaně** na základě _průběžně získávaných informací_ o stavu směrovacích cest. Pro správnou výměnu těchto informací potřebujeme **tzn. směrovací (routovací) protokoly**.

**Obecně máme dva druhy dynamických směrovacích protokolů:**

-	**Distance-vector routing protocol (DVA)** – volně přeloženo: směrování dle délky vektoru 
    **Routery** zde **neznají** _**topologie sítě**_, znají pouze **rozhraní**. **Směrovače vysílají** obsah své tabulky pomocí **IP broadcastu**. Ta obsahuje informaci o _vektoru a.k.a vzdálenosti do dané sítě_. Tato tabulka je předávána **do sousedního routeru**, které si případně data od předchozí **aktualizují** a **posílají** tuto tabulku **dále**.

    Nejvýhodnější cesta se zde počítá na pomocí **počtu směrovačů**, přes které by **datagram (packet prošel)**; tzn. **_hopcount_** (počet hopů). _Neřeší se zde parametry sítě ani zařízení, pře které prochází_.
    
    
-	**Link state algorithms (LSA)** 
Metoda **LSP (Link State Packets)** nepracuje pouze **vzdálenosti („hopy“), ale metrika** **_(hodnota cost)_** zde počítá při výpočtu nejlepší cesty packetu taky s věcmi:
-	Technickými **(propust dat, rychlost přenosu)**
-	Politickými **(důvěryhodnost přenosové cesty)**
-	či Finanční **(cena za přenos)**

LSP jsou **vysílány z nějakého směrovače ostatním** tzn **„záplavou“**, což znamená, že šíří informace určené skupině **směrovačů**. Na základě těchto dat si **router (směrovač)** _vytvoří obraz o tom_, jak síť z topologického hlediska vypadá. Právě na základě těchto dat je počítána **nejkratší cesta**.
**Topologická DB obsahuje:**
-	**ID směrovače**
-	Seznam **přilehlých linek** k sousedním směrovačům
-	Seznam **koncových zařízení** připojených **ke switchi**


## Směrovací protokoly:
**Směrovací protokol** je používán **_routery_** ke zjištění cesty. Pomocí nich jsou **sdíleny data** s _ostatními routery_.

#### Směrovací protokoly definují:
-	Jak budou informace zprostředkovány
-	Jaké směrovací tabulce budou sdíleny
-	Kdy bude tabulky sdílena
-	Jak zjistit příjemce aktualizací

**Z hlediska dělení máme dva druhy protokolů:**
**IGP (Interior Gateway Protocol)** – starají se o směrování v rámci LAN (uvnitř autonomního systému)
-	**Např.: protokoly RIP, OSPF, EIGRP**

**EGP (Exterior Gateway Protocol)** – _směrování mezi LANkami_, **tedy v rámci Internetu**
-	**Např.: protokol BGP**

**Směrovací protokoly se dělí také dle typu algoritmu, na němž pracují:**
-	**Distance vector** – rozhoduje _o směru a vzdálenosti_ cíle **(RIP protokol)**
-	**Link state**  – počítání _nejlepší cesty v závislosti na více faktech_ (viz nahoře) **(OSFP protocol)**
-	**Balanced hybrid** – zkombinování přechozích dvou metod **(EIGRP)**

#### Důležité směrovací protokoly:
##### **INTERNÍ PROTOKOLY:**
----
##### **RIP (Routing Information Protocol)**
...
>Je směrovací protokol typu **distance vector**, který tedy _umožňuje komunikaci mezi routery_. 

...
RIP je protokol pro metriku směrování počet skoků **(hop count)**. Pro určení **nejkratší cesty** používá _Bellmanův-Fordův algoritmus_.
Aby se hopy nevracely ve smyčkách zpět, je jejich počet **omezen na 15**.

**Původně RIP** _posílal celou routovací tabulky svým sousedům každých 30 sekund_. Vzhledem k čím dal většímu růstu sítí a zařízení v nich začaly být sítě čím dál více zahlcovány. 
Proto vznikl RIPv2, který **umožnil nastavování _časového intervalu každého routeru zvlášť_**.
**PROBLÉM** první verze _RIPu_ tkvěl v tom, že **používal routing dle tříd IPV4 adres** _(A, B nebo C)_. Tabulky neobsahovaly **informace o masce sítě**, díky kterému **musely mít všechny podsítě stejný počet** _koncových zařízení_. Subnety musely být **stejně veliké**.

**VYUŽITÍ RIPu:**
Ač je RIP nejstarším (již v ARPANETu) směr. protokolem v rámci sítí, **stále se v menší míře** používá v malých sítích, a to díky své nenáročné konfiguraci.
Nedoporučení v používání je příčinnou hlavně čas, **za který je schopný data příjmout a poslat dále**, ale také omezený počet hopů.

**ROZDÍLY RIPv2 x RIPv1:**
-	zabezpečení komunikace mezi směrovači pomocí šifrovaného hesla
-	přenos síťových masek ve zprávách mezi směrovači umožňuje používat podsítě


##### **IGRP**
...
>Protokol typu **distance vector**, který se řadí do _protokolů **vnitřních**_. Metrika je zde vypočítaná z několika položek:
-	**šířka pásma (bandwidth)**
-	**spolehlivosti (reliability)**
-	**zatížení (load)**
-	**zpoždění sítě (delay)**

Metrika může mít **širokou škálu nastavení**; například zmiňovaná spolehlivost může mít hodnotu 1-255, šířka pásma od 1,2Mb-10Gb a zpoždění hodnoty 1-224. Správce sítě má tedy **„celkem“ volnou ruku v ladění**.

Oproti RIPu byl navýšen maximální počet _hopů na 255_. **Byl nahrazen protokolem EIGRP v polovině 90. let.**

##### **EIGRP**
Je to **směrovací vnitřní protokol**, který byl navrhnut **společností CISCO**, do roku 2013 jej bylo možné používat jen na jejich zařízeních.

EIGRP tedy také používají routery. Pomocí něj se sdílí trasy s ostatními routery v rámci **stejného autonomního systému**. Na rozdíl **od RIPu** _posílá EIGRP pouze data_, která jsou přírůstková (tedy nová), čímž **snižuje zásadně zátěž zařízení a množství dat**, která musí být předána.

Kromě **směrovací tabulky využívá EIGRP** taktéž další tabulky pro ukládání vybraných dat:
-	**Tabulky sousedů** – uchovává záznamy o adresách routerů, kt. **jsou přímo fyzický spojené s daným routerem** (s dalšími už ale NE!)
-	**Tabulku topologie** – ukládá **data na základě informací z tabulky sousedů**

##### **OSPF (Open Shortest Path First)**
...
>Je to **směrovací vnitřní protokol**, který na rozdíl o předešlých funguje na **algoritmu link-state** _(výběr cesty na základě více faktů, ne jen hopů)_.

**OSPF je typickým představitelem směrovacího protokolu** **_Link State_**. Vytváří v paměti směrovače (routeru) **kompletní mapu sítě (DB topologie)**. 
**Nad touto DB** _potom pomocí algoritmu SPF_ provádí výpočty nejvýhodnější cesty do jednotlivých sítí. 

Metrika OSPF je postavena na ceně (tzn. cost). **To je číslo od 1-65 535**, které má **přiřazený každý směrovač**. Platí, že čím menší číslo, tím lepší metriku cesta má a bude více preferována.

##### **EXTERNÍ PROTOKOLY:**
----

##### **BGP protokol (Border Gateway Protocol)**
..
>Je to **dynamický externí protokol**, který je používán v rámci centrálních _uzlů Internetu_. Používají ho tedy poskytovatelé připojení k internetu a peeringové uzly.

Směrování mezi systémy má odlišné požadavky než interní směrování.
Směrovací tabulky obsahují stovky tisíc záznamů a **nejdůležitějším kritériem nebývá** _vzdálenost_, ale parametry jako cena, _spohlivosti_,…