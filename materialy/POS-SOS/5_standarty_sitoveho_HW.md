### Standardy síťového hardware – Ethernet a ostatní.

#### Standarty síťového HW – úvod
V rámci výstavby a následných úprav sítí je lze různě měnit a kombinovat. To znamená, že můžeme kombinovat určité topologie, přístupové metody, použít různé typy kabelů či použít různé aktivní prvky. 
Možnost různých kombinací poté proti základnímu poslání sítí; _různě takto sestavené sítě nemusím být kompatibilní_ a nemusí _se domluvit_. Na základě vyvarování se těchto komplikací byly přijaty _normy – standarty_, které definovaly základní požadavky na výstavbu sítě.

Normalizaci (definování pravidel) provádí organizace IEEE _(Institut of Electrical and Electronics Engineers)_. Podle nich jsou tyto síťové standarty pojmenovány. 

| IEEE | Definice standardů pro:|
| ------ | ------ |
| IEEE 802.3 | Standardy sitě ethernet |
| IEEE 802.4 | Sběrnicové sítě s metodou přístupu token |
| IEEE 802.5 | Kruhové sítě s metodou přístupu token |
| IEEE 802.11 | Bezdrátové sítě |

S normou IEEE se setkáváme v rámci technických parametrů sítě často; těmi nejdůležitějšími jsou:
-	Přístupová metoda
-	Rychlost přenosu dat
-	Topologie sítě
-	Typ kabelu (jeho délka, konektor)

Samotná norma se zabývá kromě těchto vlastností dalšími, mnohem detailnějšími vlastnostmi; _např.: složení datového paketu, tvarem signálu procházející kabely_,…

#### Standarty (normy) síťového HW pro sítě LAN:
Nejrozšířenější standard LAN:
-	FastEthernet

_Další standardy:_
-	Ethernet
-	Gigabit Ethernet
-	10GB ethernet

#### Ethernet – charakteristika:
Nejrozšířenější standart LAN sítí. Vznikl a funguje už od konce 70. let, kdy jej navrhla firma Xerox. S postupem času samozřejmě nezůstalo _u jednoho typu_ a vyvinuly se _další_.


**Ethernet** v rámci ISO/OSI modelu reprezentuje fyzickou a linkovou vrstvu a používá kolizní přístupovou metodu CSMA/CD.
Co se týče topologií, ty lze použít různé, stejně tak to funguje s kabely (záleží na druhu Ethernetu)


#### Budování ethernetu: 
Při stavbě ethernetu je nutné dodržovat topologická pravidla, to znamená délku segmentů (jedné podsítě) a také celé sítě.

To souvisí právě se zmiňovanou metodou CSMA/CD; ta předpokládá, že se signál šíří _nekonečně rychle_ (začne-li vysílat jedna stanice na začátku sítě, je ji okamžitě slyšet na konci sítě) → to z fyzikálního hlediska ale není možné; proto byly pro druhy ethernetu stanoveny _maximální vzdálenosti_, při kterých tato přístupová metoda bude fungovat. 
>Pro tento rozměr se používá pojem: kolizní doména

**Kolizní doména** = maximální délka sítě (definovaná na základě přístupové metody CSMA/CD)

[![N|Solid](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/5_standarty_sitoveho_HW_Ethernet_a_ostatni?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2F5_standarty_sitoveho_HW_Ethernet_a_ostatni%2F5_7_znaceni_ethernetu.PNG)]()

#### Druhy ethernetu:
---
#### Klasický ethernet
Nejstarším _(dnes už se nepoužívá)_ ethernetem byl ten s přenosovou rychlostí 10 Mb/s; _tedy norma 10BASE_. 

Existoval v těchto formách:
- 10BASE-5:
Historicky nejstarší verze ethernetu. Jeho základem je tlustý koaxiál a sběrnicová topologie. Název „tlustý“ získal díky poměrně velké tloušťce použitého kabelu. Jak je z názvu patrné, maximální délka tohoto ethernetu může být max. 500m.

Na obrázku vidíme AUI kabel pro připojení síťovky (šedý kabel), 
koax je žlutý, černá krabička je transceiver a oranžový nástroj slouží pro tvorbu odboček na koaxu.

[![N|Solid](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/5_standarty_sitoveho_HW_Ethernet_a_ostatni?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2F5_standarty_sitoveho_HW_Ethernet_a_ostatni%2F5_1_10-BASE-5.jpg)]()
Prvky sítě Ethernet 10BASE5

- 10BAE-2, tzn. tenký ethernet:
Nástupce tlustého Ethernetu, který byl ve své době hojně rozšířen. Na rozdíl od BASE-5 používal tenčí koaxiální kabel.
A na rozdíl _od předchozího standartu_ se tato síť rozšiřovala o nové prvky lehčeji _(odbočky se u koax BASE5 vyřezávaly přímo do koxu)_,
a to protože koaxiály zde měly na obou koncích BNC konektor.



[![N|Solid](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/5_standarty_sitoveho_HW_Ethernet_a_ostatni?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2F5_standarty_sitoveho_HW_Ethernet_a_ostatni%2F5_2_BNC_kabel_pro_base-5.jpg)]()

##### Koaxílní kabel s BNC koncovkou

Koaxiální kabel 10BASE-2 používala opět pro sběrnicovou topologii. Rozšíření (připojení nové stanice) se provádělo pomocí T-členů (viz Obrázek ) nebo zásuvek EAD.
Pro rozvětvení sítě se mohl použít HUB, switch či router.

[![N|Solid](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/5_standarty_sitoveho_HW_Ethernet_a_ostatni?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2F5_standarty_sitoveho_HW_Ethernet_a_ostatni%2F5_3_BNC_kabel_s_pruchozim_BNC-T.jpg)]()
`T-člen`

Jelikož se jednalo o sítě se sběrnicovou topologií, konce musely být zakončeny terminátory („zakončovacími odpory“).
[![N|Solid](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/5_standarty_sitoveho_HW_Ethernet_a_ostatni?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2F5_standarty_sitoveho_HW_Ethernet_a_ostatni%2F5_5_EAD_pripojka.jpg)]()
`EAD zásuvka`

- 10BASE-T, kabeláž kroucenou dvojlinkou:
V době vzniku taktéž oblíbená a používaná norma. Základem byla kroucená dvojlinka, tehdy HUB (později switch) a topologie hvězda.


V síti mohly být maximálně 4 rozbočovače (HUBy), maximální délka 
mezi HUB a PC mohla být 100 m. 



- 10BASE-F, kabeláž optickým kabelem
Kabeláž optickým kabelem: ethernet, který používá optické kabely. Má tři specifikace:
- Pro připojování stanic – specifikace 10BASE-FP (fiber passive)
- o	Pro páteřní rozvody mezi budovami – specifikace 10BASE-FB (fiber bacbone)
- o	Pro připojování stanic (PC) a HUBů – specifikace BASE-FL (fiber link) Tato specifikace je pro LAN nejdůležitější, délka segmentu díky optice může být _až 2km_. Nejčastěji se zde propojují dva HUBy (spojí se tím vlastně dva segmenty sítě).
----
Dodatek:
>Délku segmentu (podsítě) lze prodlužovat pomocí zesilovačů, transceivery nám zase převádí signál mezi kabely. 
U _kroucené dvojlinky_ lze zvýšit rychlost + spolehlivost pomocí zařízení switchů.


#### Fast ethernet: (a.k.a ethernet pro rychlost 100Mb/s)
Dnes nejrozšířenější norma. Jak je možnost vidět v tabulce na začátku, odpovídá ji doporučení IEEE 802.3. Tedy o normu _používající k přenosu dat přístupovou metodu CSMA/CD_. 
Ve Fast Ethernetu už nemohou být používány koaxiální kabely.

##### Druhy Fast Ethernetu:
-	100BASE-TX
Pracuje s nestíněnou kroucenou dvojlinkou _(lze použít i stíněnou)_ cat.5, využívá _pouze dva pár kroucené dvojlinky_ ze 4. Maximálně délka segmentu = 100 m.

- 100BASE-FX
Je určena pro optické kabely. Délka segmentu (podsítě) s polovičním duplexem pro vícevidové kabely může být až okolo 400 m. Pro jednovidové kabely s duplexem (jedním směrem pouze) až 10 km.

-	100BASE-T4
Starší norma, užívající kroucené dvojlinky cat.3 a cat.4 (použita může být i cat.5). Max. délka segmentu může být až 100m.
Pro přenos se používají všechny _4 páry dvojlinky_.

#### Gigabit ethernet: (a.k.a ethernet pro rychlost 1000Mb/s)
Novější varianta ethernetu pro přenosové rychlosti až 1000Mb/s  (1Gb/s). Opět platí to stejné jako u Fast ethernetu, standardizovány jsou pro kroucenou dvojlinku a koax.

Zpočátku (cca rok. 2000) se Gigabit používal pouze pro výkonné síťové připojení (univerzitní sítě). Postupem času začaly pronikat i k běžným uživatelům. Dnes má drtivá většina PCs rozhraní Gigabitového Ethernetů, u serverů je běžný _standard 10Gbit Ethernet_.

##### Druhy Gigabit Ethernetu
-	1000BASE-X (802.3z – pro optické kabely)
Navrhnut především pro optické kabely. Standard se ještě rozděluje na dvě varianty, na základě použitého světelného zdroje (jehož světlem jsou přenášené informace kódovány):
    -   1000BASE-SX

        Používá krátkovlnný světelný zdroj o vlnové délce 850nm. Jedná se o _levnější variantu zdroje_ (pro 1310nm je mnohem dražší). Často je zdrojem LED dioda, může být také laser. 
        Přenos probíhá po vícevidových optických kabelech. Jelikož je _vlnová délka zdroje menší_, používá se ve horizontálních vedeních nebo páteřních propojení.
        
    -  1000BASE-SX
        Přenáší světla delších vln, a to 1310 nm při použití _laserového zdroje_. Je možné použít jak jednovidové, tak i mnohovidové kabely. Výhodou je větší maxim. délka _vedení, až 10 km_.

- 1000Base-T (Standard 802.3ab – pro kovové kabely)
    Umožňuje využít všechny 4 páry kroucené dvojlinky cat.5, lepší je však používat cat.5e. Již zmiňovaná možnost využití všech 4 párů vodičů (např.: oproti 10BASE-T či  100BASE-TX) je zde tou nejvýraznější změnou.
    
    ##### Nahrazení cat.5 cat.5e u 1000Base-T

    Důvod doporučení využívání cat. 5e jsou problémy v nehomogenitě (jednota, ucelenost, kompaktnost) kabeláže kvůli které docházelo k odrazům signálu (které pak utlumí i ostatní signály). I proto, že s tímto jevem měl problém _stovkový Ethernet_, byla vyvinuta cat.5e, kde se nastavily přísnější podmínky pro konektorování, navíc došlo celkově ke změnám v kabeláži _(právě zmiňované použití všech 4 vodičů, které 5 ještě neměla)_.
    
   ##### Změna fungování kolizní domény u 1000Base-T (Gigabitu)
    Původně zamýšlené použití přístupové metody CSMA/CD, pro kterou bylo důležitá _velikost_ kolizní domény (vzdálenost, ve které se data šíří nekonečně rychle), se ukázalo jako špatné.
    Při stoupající rychlostí Ethernetu se nutnost zaznamenávání kolizí mnohonásobně zvýšila.
    
    Tvůrci nechtěli velikost kolizní domény zmenšovat (zmenšila by se celk. velikost sítě), bylo nutné vymyslet alternativu. Tou se ukázaly switche (přepínače). 
    Jelikož vlastně nahrazují přístupovou metodu _(posílají data jen na dané zařízení, přičemž nedochází k setkávání dvou paketů)_, staly se switche náhradou vůči přístupové metodě. Díky tomuto „fíglu“ se uvolnila cesta k výrazně rychlejším odstraňování kolizí mezi stanicemi.
----
Poznámka: Existuje ještě standard 1000BaseCX, který definuje použití metalických kabelů (stíněné STP či koaxu), používá se však jen na _propojení do 25m_ (serveru se switchem, switchů navzájem).


#### 10Gigabit Ethernet: (a.k.a ethernet pro rychlost 10000Mb/s)
Norma nejrychlejšího ethernetu _provedeného optikou se využívá nejen pro LAN_, ale _také pro MAN či WAN_. Umožněno je to přenosovou vzdáleností, která může být, pokud použijeme jednovidový optický kabel až 40 km. 
Použití 10Gb Ethernet má sice budoucnost, _v dohledné době je patrné, že využití najde zatím jen serverů_.
Opět, jako u předchozích norem existuje několik podstandartů, které se liší:
-	Vlnovou délkou světelných paprsků zdroje
-	Kabely
-	Šířkou přenosového pásma


-----
Poznámka: standardizační komise pracují na vývoji metalické formy _10 GB internetu_.

##### Druhy 10Gigabitového Ethernetu:

-	10GBASE-SR

Určen pro krátké vzdálenosti (26-82 m), signál je zde veden mnohovidovým paprskem

-	10GBASE-LX4
Používán pro větší vzdálenosti (stovky metrů) pomocí mnohovidového kabelu, s jednovidovým lze přenášet až na 10 km.
- 10GBASE-LR a -ER

Pracují s jednovidovými kabely, přenosová vzdálenost je 10-40 km. 

## Bezdrátové sítě LAN: (a.k.a Wireless LAN)
Bezdrátové sítě jsou další možností přenosu dat. Signál se zde přenáší elektromagnetickým vlněním _(které nahrazuje metalické kabely)_. 
Ele-mag. vlny se liší vlnovou délkou a frekvencí. Jsou velmi často a hlavně široce využívaným přenosovým médiem _(TV, rozhlasové, telekomunikační signály, …)_. Se širokou oblastí využití nastává problém, a to s volnými frekvencemi, které by zabraňovaly rušení jednotlivých přenosových linek. 

> Na úvod je dobré říci, že řešení bezdrátových sítí má přirozeně také kromě výhod i nevýhody: bezdrátové prvky jsou:

- stále ještě mírně dražší, než tomu je u _sítí klasických_
- nedaří se dosáhnout vyšších přenosových rychlostí
- zajištění bezpečnosti dat je také podstatně náročnější.

## Wi-Fi
Z důvodu nedostatku frekvencí se Wi-Fi pohybuje v rámci nelicencovaného 2,4 GHz _či 5 GHz pásma_.
V pásmu 2,4 GHz můžeme WiFi bez obav provozovat. Nastává zde však problém: _pásmo užívají další zařízení (mikrovlnky, Bluetooth či počítačové periferie)_. Tento fakt způsobuje rušení přenosu.
V pásmu 5 GHz je přenos regulován Českým telekomunikačním úřadem (respektive jeho pravidly).

### Standardy Wi-Fi:

Stejně jako metalických vodičů bylo nutné vytvoření norem pro kompatibilitu sítí. Hlavní výrobci bezdrátové technologie založili alianci WECA (Wireless Ethernet Compatibility Aliance), která stanovila požadavky na zařízení a zajistila tak jejich vzájemnou kompatibilitu.
Od té doby obdrží výrobek poskytující možnost připojení se k Wi-Fi certifikát, který kompatibilitu potvrdí. 

Samotná norma byla odvozena z ethernetu, proto s ním má _podobné znaky_:
-	přístupovou metodu CSMA/CD
-	složení paketu
----
-	standard 802.11 a
Pracuje na f 5 GHz. Není, z důvodu nedostatku HW pro tento standart, tolik zahlceno

-	standard 802.11 b
Pracuje na f = 2,4 GHz. Jedná se o nejpoužívanější a nejvíce zarušené pásmo; _hlavně ve městech_.

**Maximální přenosová rychlost = 11 Mb/s**


-	Standard 802.11 g
Taktéž pracuje na 2,4 GHz; _zpětně kompatibilní s 802.11 b_, odvozena _z další normy (802.11 i)_, která používá lepší šifrování.

**Maximální přenosová rychlost = 54 Mb/s**


-	Standard 802.11n MIMO (Multiple Input Multiple Output)
Může pracovat na _2,4 GHz i 5 GHz_, dokonce s přenosovou rychlostí až 600 Mb/s!
Nejnovější norma 802.11n MIMO pracuje na bázi vysílání několika
signálů různými cestami, prostřednictvím více antén u vysílače a přijímače. Propustnost se pak úměrně _zvyšuje s počtem antén_. 
Teoreticky je tak možné přidáváním antén stále propustnost zvyšovat, _prakticky se ale pro vnitřní prostředí a menší dosah používají 2 až 4 antény_. 

-	Standard 802.11 ac
Pracuje na vyšší z frekvencí (5 GHz), taktéž užívá technologii MIMO.

**teoreticky může dosáhnout až 1 Gb/s přenosové rychlosti**


#### Další informace o bezdrátové technologii
##### Možnosti komunikace:
- Ad hoc
- Infrastrukturní mód

##### Ad hoc
Přímé propojení pro 2-5 PCs. Tato síť nezávisí na předem existující infrastruktuře, jako jsou _routery_ v kabelových sítích nebo _přístupové body_ v bezdrátových sítích.
Počítače jsou si rovny, komunikují spolu na stejné úrovni. Je zde tedy určitá spojitost se sítí peer-to-peer.

Vždy je potřeba si uvědomit, že kvalita spojení je ovlivněna zdroji uzlu (výkon PC, paměť, tak stejně i vlastnostmi – rozsah a ztráta signálu, rušení).
> Výhodou je snadná a rychlá instalace, nízká cena (kromě síťových adaptérů nepotřebujeme dál žádný HW)
+ Sdílení souborů (souborů, Internetu, tisk,… jako u LAN klasických)

> Nevýhoda je v tom, že zařízení musí být v dosahu, obtížné zabezpečení (díky opravdu lehkému vytvoření)


##### Přístupový bod (AP, Access Point)
Je základem _bezdrátové sítě_. Pro domácí řešení se _místo AP_ používá Wi-Fi router, který je jak přístupem k internetu, tak zároveň AP (šíří signál). 
… AP je prostředníkem mezi bezdrátovými koncovými body a serverem, který je většinou veden, lépe řečeno pojen s LAN metalickým kabelem. AP tedy obsahuje jak část _rádiovou_ (na vysílání a přijímání bezdrátových dat), tak i část _kabelovou_ – pro připojení RJ-45.
AP jsou v podstatě AP HUBy, z nichž se rozvádí signál. Vlastní provedení se liší výrobce od výrobce.

##### Umístění Access Pointu:
AP bývají umístění vždy v horních částech místností. Musíme totiž brát v potaz, že stále nejčastěji _pracujeme na 2,4 GHz_, na které pracují i další zařízení (rušení signálu). Problémem bývají taky kovové výstuhy ve zdech,…

##### Klientský adaptér
Je to jednotka (připojena pomocí USB či PCI do ntb), pomocí níž se PC připojí k AP. Je to tedy taková síťovka s anténkou. Do notebooku lze také použít _wireless kartu_, dnes už kartu mají ntb integrovanou na motherboardu. Samotná instalace klientského adaptér je totožná jako instalce klasické síťové karty.


### Provozní vlastnosti u bezdrátové technologie:
Porovnáme-li je s metalickými, tak jsou o dost pomalejší.Problémem „bezdrátu“ je samotné šíření. To oproti kabelům naráží na překážky jako: _kovové výstuže zdí, či samotné zdi_, což způsobí okamžitý pokles rychlosti (často až o polovinu).

Problém nastává také, když máme více uživatelů připojených na AP. Jsou-li zařízení v jednom segmentu (podsíti, v případě domácnosti máme typicky jen jednu), musí se o kapacitu dělit (dochází ke kolizím, zpomalení rychlosti připojení).
Dalším problém jsou často protokoly vyšších vrstev. Jednoduše
řečeno, když posíláte dopisy, i obálka něco váží. Skutečná šíře pásma určená pro čistá data tak opět povážlivě klesá.


V praxi můžeme za super podmínek počítat u 802.11 s Mb/s, u „g“ 
max. 25 Mb/s


#### Bezpečnost:
Oproti metalickým sítím je u bezdrátových sítích bezpečnost horší. Úplně základním problémem je, že Wi-Fi router či AP šíří signál do všech stran. Kdokoliv nás tedy může odposlouchávat či se do sítě napojit.
Bezpečnostní opatření máme v rámci „bezdrátu“ dvě:
-	Autentizace = _kontrola, zda se zařízení, které chce být připojen, může připojit. Zda má na to povolení (práva)_.
-	Kódování = _šifrování přenášených dat_ (znemožnit i po úspěšném pokusu odposlechu na síti data přečíst)

##### Prvky bezpečnosti:


SSID: (Service Set ID)

Je názvem AP, pod nímž ho vidí všechni klienti, kteří se dostanou do jeho dosahu. 
SSID je tedy identifikátorem, určen je pro _bezdrátové podsítě_

Může být nastaven:
-	Manuálně na stanici
-	Nebo informací o SSID vysílá AP
-	Také může být SSID vypnuto a klient se na něj sám dotáže


Filtrování MAC adres:

Umožní přístup pouze ok MAC adresám. Filtrování MAC adres používá většina AP. Kvůli absenci šifrování přenášených MAC _adres může kdokoliv MAC adresu naklonovat a zneužít ji_.



#### WEP:

zkratka z angličtiny (WEP (Wired Equivalent Privacy, tj. soukromí ekvivalentní drátovým sítím)
Je zabezpečení bezdrátových sítí. Je zastaralé, roku 2001 bylo prolomeno, a tudíž muselo být nahrazeno tehdy vy _WPA2_. 
Do Wi-Fi byl začleněn již od 802.11b, v době používání ho však mnoho sítí nepoužívalo.

Princip fungování WEPu:
Jeho princip spočívá v tom, že se zpráva, která se odesílá se na vysílači zašifruje (klíčem). Zařízení, které vysílání přijímá, zašifrovanou zprávu pomocí stejného šifrování odšifruje. Patrné je, že se jedná o symetrické šifrování (stejný 40bitový klíč).

Špatnou věcí na WEPu je fakt, že kontroluje pouze adresu síťové karty (a.k.a MAC adresu), tudíž není bezpečnost 100% zařízena.
S postupem času byla 40bitová šifra rozšířena o 24bitů náhodně se generující kód. Vznikla tedy 64 bitová verze WEPu, s níž se zpráva šifrovala. 
Tento kód (myšleno ten 24bitový) se poté pošle přijímači (s tou nevýhodou, že je možné přenos odhalit – což je nevýhoda WEPu); přijímač ho přidá ke svému tajnému (40bitovému) klíči a ten použije pro dešifrování. 
Pokud je WEP používaný, tak jsou do zařízení (AP,  vloženy (implementovány)) _128 bitové klíče_ (104bitový sdílení klíč + 24 náhodný sled znaků, tzn. inicializační vektor).

> Nevýhoda 
-	Klíč zůstává neměnný do dobu, než ho sami změníme
-	Klíč se poté mění na obou stranách
-	Nemožnost automatického měnění kombinací kódů (poměrně je tedy lehké prolomit šifrování; máme čas)


##### WPA:


Pro zvýšení bezpečnosti bylo nutné vytvořit robustnější, výkonnější druh _šifrování_. Základ tomu položil protokol WPA (Wi-Fi Protected Access), který oproti WEPu změnil:
-	Průběžná automatická změna klíčů (zrušilo možnost přístupu k velkému množství stejně šifrovaných dat)

WPA existují dva druhy:
-	WPA Enterprise podporuje autentizaci pomocí RADIUS serveru, který má databázi povolených klientů, kterým přístup umožní.
-	WPA Personal používá k zajištění bezpečnosti tzn. _pre-shared key (přesdílené tajemství)_, který je buď 8-63 znaků dlouhý či se zapisuje jako 64 bitový hexadecimální řetězec.


##### WPA2:

Předchůdce WPA přišel na trh v roce 2004. Začal užívat šifru AES (Advaced Encryption Standard).
