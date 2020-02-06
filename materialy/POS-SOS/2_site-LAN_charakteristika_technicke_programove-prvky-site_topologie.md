
**Otázka číslo 2**
# **_Sítě LAN – charakteristika, technické a programové prvky sítě, topologie. Příklad._**

#### Charakteristika LAN sítí
Sítě LAN obecně charakterizují všechny malé sítě, které si **uživatelé vytváří sami na své vlastní náklady**, Jedná se o sítě omezené na **nějaké lokální místo** _– nejčastěji školu, firmu, továrnu_; prostě budovu. 

V **rámci sítě LAN** si mohou zařízení **sdílet již zmiňované prostředky** (tiskárny, modemy, skenery…); **nejčastěji však sdílení diskové prostoru**. Důležitý faktem je možnost sdílet připojení k internetu (přes router).
> LAN síť často spravuje **jen jeden člověk – administrátor**. V dnešní době _čím dál větších_ LANek **bývá často adminů více**; platí však to, že _spolu spolupracují_.

**Síť se skládá a z aktivních a pasivních**. Ty **_aktivní_** (switch, router, síťová karta) se **podílejí na komunikaci**. **_Pasivní_** jsou ty které nevyžadují k fci **elektřinu** (kabely, zásuvky či patch panely).

##### **Prvky sítě LAN**

Základním prvkem LAN je router, který má tyto fce: 
-	**Připojení k intenetu** (zdířka WAN)
-	**Připojení** zařízení **do LANky** pomocí kabelů
-	**Přiděluje IP adresy** (pomocí DHCP služby)
 Ty jsou vybírány ze **speciálního rozsahu pro LAN sítě**. Tyto adresy jsou pro prostředí WAN neviditelné. 

-	Také router **šíří bezdrátový signál** pro zařízení, která jsou od něj daleko

[![N|Solid](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/2_LAN_char_tech_prvky_topologie?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2F2_LAN_char_tech_prvky_topologie%2F2_11_LAN.png)]()
`Příklad LAN sítě`

Dalším často užívaným aktivním prvek je **switch**. Jeho úkol je zkopírovat, tedy **poslat** přijatá data **na port příjemce**, ke kterému je nutné data dostat. Na rozdíl od **HUBu** _pošle data jen skutečnému (jednomu) příjemci_.
>Switch slouží k vytvoření podsítě tam, kde chceme mít více zařízení a kde by kabel z routeru  nedosáhl či bylo nevhodné vést přes hodně metrů.

**Používaná kabeláž LAN sítí**
Pro vytvoření LAN sítí se používají, jak z **kroucená dvojlinka**, tak **méně často, až vyjímečně **koaxiál**, a dnes **není výjimkou ani optický kabel**

**Na začátku historie** existovalo několik **navzájem nakompatibilních systémů**, které od půlky 80. let nahradila technologie LAN, užívaná dodnes. 
S tím jak existovalo mnoho systémů, užívalo se pro jejich fungování různých protokolů **(IPX/SPX či Apple Talk)**. S příchodem WWW a vzestupu LAN byly **nahrazeny TCP/IP**.

**Sítě LAN byly s časem doplněny o moderní prvek upravující možnost fungování:**
•	**VLAN (Virtual LAN)** – umožňuje LANku rozdělit na logické úrovni na virtuální „podsítě“ a nastavit odlišně jejich provoz.
•	**VPN (Virtual Private Network)** – umožňuje přístup k síti přes Internet (obecně nějakou nedůvěryhodnou síť) z míst mimo danou síť
•	**WLAN (Wi-Fi LAN)** – typ sítě, ve které se přístup k internetu přenáší vzduchem (uživatelé nejsou vázáni na kabel)



## Technické prvky sítě
Technickými prvky máme na mysli **druhy kabeláže a aktivní prvky sítě**
### Dělí se na: 
-	**Metalické kabely** – „klasická přenosová média; založena jsou na **měděném vodiči**, který přenáší elektrický signál 
-	**Optické kabely** – přenos dat uskutečňují vlákna, jimiž se přenášejí
-	**Vzduch** – tím se šíří signál pomocí elektromagnetického vlnění

## Důležité parametry kabelů: 
- **Šířka pásma**
Je to **prostor** mezi nejvyšší a nejnižší přenášenou frekvencí **signálu**. **Uvádí se proto v Hz**.

- **Přenosová rychlost**
Počet bitů **vysílaných za jednu sekundu**. Uvádí se **v bitech á sec** [Mb/s, také může být Mbps]

- **Šum**
Vyznačuje rušení přenosu dat

## Kabeláž – _druhy kabelů_

### Metalické kabely 
#### Koaxiální
**Je** to **elektrický kabel**, složen **z vnějšího (stínění) a vnitřního vodiče (jádro)**. Jsou odděleny nevodivým materiálem (tzn. dielektrikem). Účelem tohoto materiálu je docílit správné impedance kabelu tak, aby mohla data proudit co nejpřesněji.
**Nutno podotknout, že některé koaxy** mají ještě navíc kolem dielektrika **fóliové stínění**.

##### Použití koaxiální kabelů:
- **Lze jím přenášet** _stejnosměrný proud_ (napájení anténních vysílačů)
- **Ruší (stíní)** se jimi nízkofrekvenční signály (kabelů od mikráků či sluchátek)
- **Přenos dat** (pomocí elektromagnetického vlnění) 

**Druhy koaxiálního kabelu**
-	**Tenký koax** – **tloušťka: čtvrt palce**; využívá se v ethernetové 10 Mbit-ové technologii 10Base2, ve které může spojovat místa s max. délkou okolo 200m
-	**Tlustý koax** –  **tloušťka: půl palce**; využívá se _obecně v místech_, kde má technologie ethernet své páteřní vedení
-	**Koax pro ARCNET** – _dnes stará technologie_, nepoužívá se

**Výhody koaxu**
 - **PLUSY**    
+ – vysoká odolnost proti elektromagnetickému rušení
+ – snadná instalace, dobrá cena
+ – lze je použit i přenosu hlasu a videa

 **Nevýhody**
- – náchylnost k poškození; 
- – nelze použít v technologii Fast Ethernet / Gigabit Ethernet 

[![N|Solid](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/2_LAN_char_tech_prvky_topologie?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2F2_LAN_char_tech_prvky_topologie%2F2_12_koax_kabel.png)]()
`Koaxiální kabel`

>–	Měděný vodič (1)
–	Izolační vrstva (2)
–	Měděný plášť (3)
–	Vnější plášť z umělé hmoty (4)

**Charakteristika koaxu**:  

**Měděný vodič (1)**
Vnitřní část: **většinou _měděný_**, po němž se přenáší jedničky a nuly **(signál)**.

**Izolační vrstva (2):**
Vyrobena z **dielektrika** (nevodivého materiálu), které je umístěné kolem **nosného vodiče**.

**Měděný plášť (vodivé opletení, či splétané stínění) (3)**:
Zhotoven je z **Al nebo Cu**. Může sloužit nosnému vodiči **_jako zemění_**. 
Spolu s fóliovým stíněním **_může chránít nosný vodič před ele-mag. rušením_**.

**Plášť (4)**:
_Vnější kryt kabelu_, který je buď:
-	Plenum: žáruvzdorný, vyrobený z teflonu nebo kynaru
-	Nonplenum: vyrobený z polyethylenu či PVC


#### Kroucená dvojlinka

[![N|Kroucená dvojlinka](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/2_LAN_char_tech_prvky_topologie?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2F2_LAN_char_tech_prvky_topologie%2F2_7_kroucena_dvojlinka.jpg)]()
`Kroucená dvojlinka`

**Kabel**, který je odvozen od _**klasického telefonního kabelu**_. Dnes je nejpoužívanějším tzn. **metalickým vodičem** v LAN sítích. 
Kabel je tvořen **_4 páry vodičů_**; celkem jich tedy máme **osm**. Jednotlivé páry jsou navzájem kroucené, což brání rušení přenosu signálů. 
-	Díky **tomu se minimalizují** přeslechy mezi páry vodičů a **snižuje** se tedy vyzařování elektromagnetického záření do okolí či jeho **příjem z okolí vodiče**.
	
**Jak funguje přenos po kroucené dvojlince?** 

>Přenos vychází z principu **elektromagnetické indukce**: _Kdybychom měli dva souběžné vodiče, které by vedli proud, chovaly by se jako anténa (vyzařovaly by elektromagnetické vlny do okolí)._

>**Tento efekt hodně zmírní právě zmiňované zkroucení**, _které poté umožní přenos dat bez toho_, aby museli lidé záření dostávat do svých těl. Zkroucení poté **také umožní fungování jiným zařízením**; respektive **přenosovým cestám**.

**Druhy kroucené dvojlinky**
- UTP – z angličtiny: *unshielded twisted pair* – je to **nestíněný kabel** z **nestíněných kroucených párů**
>	_Kabely jen vloženy do plastického izolace (viz obr.); jedná se o nejpoužívanější kabeláž v rámci LAN_


[![N|Kroucená dvojlinka](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/2_LAN_char_tech_prvky_topologie?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2F2_LAN_char_tech_prvky_topologie%2FS_UTP.png)]()
`Kroucená dvojlinka; konkrétně UTP`

- **STP – z angličtiny:** _shielded twisted pair_ – stíněná kroucená dvojlinka
>**Každý pár** kabelů je **_stíněn kovovým_** opletením zvlášť (před vnějším rušením)

[![N|Kroucená dvojlinka](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/2_LAN_char_tech_prvky_topologie?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2F2_LAN_char_tech_prvky_topologie%2FSTP.PNG)]()
`Kroucená dvojlinka; konkrétně STP`

- **SSTP – stíněná kroucená dvojlinka**
> kde má **každý pár** kabelů **dvojité stínění** (kolem každého páru (Al materiálem)+ opletem kolem všech párů)

[![N|Kroucená dvojlinka](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/2_LAN_char_tech_prvky_topologie?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2F2_LAN_char_tech_prvky_topologie%2FS_STP.png
)]()
`Kroucená dvojlinka; konkrétně S/STP`

- **FTP – z angličtiny: foiled twisted pair** – stíněná kroucená dvojlinka
Také _známá jako_ **S/UTP (Screened Unshielded Twisted Pair)**
>	Obsahuje stínění jen okolo všech párů vodičů


[![N|Kroucená dvojlinka](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/2_LAN_char_tech_prvky_topologie?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2F2_LAN_char_tech_prvky_topologie%2FS_UTP.png
)]()
`Kroucená dvojlinka; konkrétně S/UTP, známá také jako FTP`

**Kategorie kroucené dvojlinky**

Mezi **nejrozšířenější kategorii kroucené dvojlinky** patří kateg. s **označením _Cat5 a Cat5e_**, ta se rozšířila mezi Fast Etherenet (100 BASE-TX). Dnes je postupně _nahrazována **Cat6**, který funguje i pro _Gigabit Ethernet_ (Cat5e taky lze použít, avšak na hranicích možností kabeláže).

Kromě toho dnes existují **i novější** _(Cat6, Cat6a i dokonce Cat7)_, ty se však ještě neujaly. _Předchozí kategorie (Cat3-Cat5) se dnes nedoporučuje používat._

#### Optický kabel
**Optický kabel** pracuje na **_úplně jiném způsobu přenosu dat_**. Data **nejsou přenášena** v kovových vodičích, ale **světelnými impulsy ve vláknech**, které jsou citlivé na světlo a umožňují tedy přenos dat. 

Vlákno může být buď **skleněné či plastové**. 
Používá se pro stavbu _telekomunikačních sítí_; jelikož vlákna jsou _ohebná_ a mohou být _svázána jako kabely_. Existují však i druhy pro **venkovní prostředí** (zesílená konstrukce s tahovými prvky).

Optika **elektricky nevede*; proto se může **použít na místa**, kde je pravděpodobnost **úderu blesku; či místech, kde jsou přítomné výbušné výpary či kde je nebezpečí.**
Optika je vhodná zejména na přenos na **_dlouhé vzdálenosti_** (není zde tak velký útlum), což umožňuje **mnohonásobně vyšší přenosové rychlosti (až Tb per sec)**.

[![N|Kroucená dvojlinka](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/2_LAN_char_tech_prvky_topologie?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2F2_LAN_char_tech_prvky_topologie%2F2_13_optika.PNG
)]()
`Průřez optickým kabelem`

**Optický kabel** se skládá ze _samotného vlákna_, který je vložen vrstvy _sekundární ochrany (buffer coating)_. Vlákna jsou vždy **min. dvě**; pro _každý směr jedno_. **Běžně však bývá několik párů světelných vláken.**
**... rozlišujeme dva druhy kabelu: **
-	**Jednovidové** 
-	**Mnohovidové**

**Jednovidové kabely**
Jednovidové kabely mají lepší **optické vlastnosti** a i **vyšší přenosovou kapacitu**; dokáží přenést signál na delší vzdálenost než mnohovidové. Zdrojem světla je **laser**, což zvyšuje jejich cenu.
Používají se tedy **pro vysokorychlostní přenosu v internetu** _(obecně na větší vzdálenosti)_.

**Mnohovidové (MMF – Multi Mode Fiber)**
Optické vlastnosti **jsou zde horší**, ale za to optické linky jsou z nich levnější. Zdrojem světla je **zde LED dioda**. **I když má tedy horší vlastnosti**, tak _pro přenos signálu v rámci LAN postačuje_. Tudíž se v LAN sítích používají.

##### Koncovky optického vlákna
I optická vlákna mají **normovanou koncovku***. Převážně se používají tyto dva typy zakončení: 
-	**Kulatý konektor ST**
-	**Hranatý konektor SC**

#### Práce s optickými konektory
Při práci s optikou jsou **tyto pravidla:** 
-	**Nešpinit FERULI**

	>Ferule je kritický bod **(výběžek, který zapadá do protilehlého konektoru)**. Právě **ní prochází světelné impulsy** a proto, kdybychom ho **zašpinili**, dojde k **útlumu světelného signálu**. Pro předcházení tohoto se používá na ochranu ferule _krytka (záslepka)_.
	
- **Zabránit mikroohybům a makroohybům**
_Mikroohyby_ – jsou způsobeny ohnutím vlákna v úhlu blížící se 90°
_Makroohyb_ – stlačení (zmáčknutí) vlákna

[![N|Kroucená dvojlinka](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/2_LAN_char_tech_prvky_topologie?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2F2_LAN_char_tech_prvky_topologie%2F2_14_ferule_optickeho_kabelu.PNG
)]()	
	
#### Bezdrátový přenos
Je to dnes **hojně používaná technologie**; které _místo kabelů_ využívají k přenosu **elektromagnetické vlny**. Ty stejné jako například využívají **_vlny rádiové_**.

##### Druhy bezdrátového přenosu:
-	**Bluetooth**
Bezdrátová technologie pracující 2.4 GHz; umožňuje **spojit dvě a i více zařízení** (telefony či handsfree,….). Její dosah je teoreticky až 100m, v praxi je to **_kolem 10-20m_**.

- **IrDA z anglického:(Infrared Data Association)**
Technologie **bezdrátové komunikace** pomocí **infračervených paprsků**. Pro komunikaci musí být zařízení _na přímý dosah_; typicky ovladače od TV, rádií, …

- **WLAN**
Využívá zmiňované **radiofrekvenční vlny a _standart 802.11_**. Právě sem patří **Wi-Fi**, která umožňuje šířit signál z routeru do prostoru.
Vzhledem k tomu, že se nešíří **signál přes kabel**, byly potřeba vytvořit _metody zabezpečeného provozu sítí_. Dnes jsou **nejpoužívanější WPA a WPA2.** (starší WEP)


#### Topologie
**V sítích rozlišujeme tyto topologie:**

- **Topologie sběrnice**
Dnes zcela **výjimečně používaná topologie** (nahrazena hvězdou). 
Všechny komponenty jsou v této topologii připojeny **na jedno médium – sběrnici**. 
**Každé zařízení** je poté přímo _připojeno ke sběrnici_ (pomocí koaxiálního kabelu a BNC konektorů. **Připojení stanice* je realizováno **pomocí odboček**(umožňuje snadné odpojování a připojování). Konce sítě se zakončují **terminátory (proti opakovanému vracení se signálu)**.

- **Výhody +**
– výpadek stanice neohrozí funkci sítě, jednoduchá – bez aktivních prvků (router, switch), levná

- **Nevýhody -**
 – nespolehlivá, nutnost řešení toho, kdo bude vysílat (máme jeden spol. kabel)

[![N|Kroucená dvojlinka](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/1_historie_vyhody_rozdelni?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2F1_historie_vyhody_rozdelni%2F1_6_topologie_sbernice.PNG
)]()
`Topologie sběrnice`

[![N|Kroucená dvojlinka](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/2_LAN_char_tech_prvky_topologie?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2F2_LAN_char_tech_prvky_topologie%2F2_8_BNC_konektor.jpg
)]()
`BNC konektor`

- **Topologie kruh**

Také **málo užívaná topologie**, _používá se převážně v průmyslových sítích_.
Každý počítač je spojen **přímo s následujícím + předchozím**. 
V kruhové topologii se **pro přenos** mezi zařízeními používají **dva kabely**; _jeden pro příjem, druhý pro odesílání_. 

**Data zde putují v kruhu** (od odesílatele, přes následníky až k příjemce); právo vysílat má to zařízení, které vlastní tzn. token (pešek) = speciální paket.
**Některé kruhové topologie mají** (můžeme o nich už mluvit spíš minulém čase) _záložní kruh_ (tedy celkově dva) pro případ narušení komunikace vnějšími vlivy. **(např.: technologie FDDI)**.
- **Výhody +**
 – nevznikají kolize, menší množství kabelů, přenos dat je lehký (putují je jedním směrem)

- **Nevýhody -**
 – data prochází přes všechny zařízení (poruchovost), přidání new zařízení = přerušení sítě, výpadek jednoho zařízení = síť k.o.

[![N|Kroucená dvojlinka](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/1_historie_vyhody_rozdelni?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2F1_historie_vyhody_rozdelni%2F1_7_topologie_kruh.PNG
)]()
`Topologie kruh`

- **Topologie hvězda**
Jedná se o jednu z **prvních používaných topologií pro ethernet**. Hraje v ní důležitou roli **jedna ze stanic (switch či hub, která je středem topologie; dříve to byl server či terminálový server)**, jelikož **veškerá komunikace** poté tedy **probíhá přes tento centrální** uzel.  _Pro připojení se používá kabel UTP či STP_.

Je-li použit jako **centrála HUB**, signál se **šíří po celé síti**, je-li to switch, signál jde jen do konkrétního zařízení.
Máme-li tuto topologii, je **dobré chránit tuto síť před zkolabováním**. Pro zabezpečení se používá tzn. **_UPS neboli záložní zdroj energie_**.

- **Výhody +**
 – výpadek stanice = nic se neděje, snadná rozšiřitelnost, snadné nalezení závady na síti

- **Nevýhody -**
– množství kabelů (zvláště při větších sítí), selhání switche/HUBU = síť k.o.

[![N|Kroucená dvojlinka](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/1_historie_vyhody_rozdelni?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2F1_historie_vyhody_rozdelni%2F1_8_topologie_hvezda.PNG
)]()
`Topologie hvězda`

- **Topologie mesh (úplná topologie)**
Speciální případ topologie. Všechna **zařízení jsou zde spojena s více než jedním dalším zařízením** (nemusí být nutně se všema). Tato topologie tedy poskytuje redundanci, **takže je možná komunikace i výpadku z některé z cest*.
Tato topologie se tedy používá **tehdy, má-li mít síť odolnost proti výpadkům**.
Příkladem mesh **topologie je internet**, telekomunikační sítě či **elektrická soustava**.

- **Výhody +**
 – selhání uzlů = stále možná komunikace jinými cestami, absence centrálního prvku = nemůže tedy selhat centrální prvek, spolehlivá

- **Nevýhody -**
– nutná ochrana pro cyklení v sít; nutné je určit směrování provozu

[![N|Kroucená dvojlinka](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/2_LAN_char_tech_prvky_topologie?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2F2_LAN_char_tech_prvky_topologie%2F2_9_topologie_mesh.PNG
)]()
`Topologie mesh`

- **Topologie strom**
Rozvinutá topologie **sběrnicové topologie** (říká se jí odborně **_distribuovaná sběrnice_**), která stejně jako **hvězdicová technologie používá**. Jejím středem je řídící počítač označovaný jako **kořen**. 
Veškerá komunikace vedená **přes stromy probíhá přes kořen**. Stromová topologie se často používá _ve velkých firmách_. Zde jednotlivé stromy představují jednotlivá oddělení firmy, patra či budovy.

- **Výhody +**
 – selhání zařízení odstaví jen daný strom, snížení kabelů

- **Nevýhody -**
– selhání centrálního prvku odstaví fungování celé sítě
[![N|Kroucená dvojlinka](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/2_LAN_char_tech_prvky_topologie?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2F2_LAN_char_tech_prvky_topologie%2F2_15_topologie_strom.PNG
)]()
`Topologie strom`

- **Topologie páteřní**
Anglicky backbone, **je to topologie**, která **slouží jako páteřní (nosný) systém s vysokou rychlostí přenosu**; na níž jsou _napojeny další LAN_. Používá se tedy **pro sítě WAN**
[![N|Kroucená dvojlinka](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/2_LAN_char_tech_prvky_topologie?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2F2_LAN_char_tech_prvky_topologie%2F2_10_backbone.PNG
)]()
`Páteřní topologie`