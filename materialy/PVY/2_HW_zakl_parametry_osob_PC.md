# 2 | HARDWARE – ZÁKLADNÍ PARAMETRY OSOBNÍCH POČÍTAČŮ

## Úvod
### Co je to HW?
Hardware označuje technické vybavení počítače. Mezi hardware se řadí **základní deska, procesor, paměť, uložiště, grafická karta a periferie** (zařízení, které se připojuje k PC; např.: klávesnice, tiskárny, myši,...).

### Základní deska | Motherboard
...
>Hlavním **účelem základní desky** je **propojení jednotlivých částí počítače do jednoho fungujícího celku**. Dá se tedy říct, že deska tvoří _základní kámen počítače_.

Základní deska umožňuje **_zapojení CPU (procesor), RAM (operační paměť), GPU (grafická karta), HDD/SSD**_ a dalších. Na základní desce je také uložený **BIOS**.

[![Motherboard ASUS](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/2_HW_zakl_param_PC?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F2_HW_zakl_param_PC%2F1_1_motherboard_ASUS.png)]()
`Základní deska od firmy ASUS`

#### **Čipová sada**
Čipová sada **(chipset)** se stará o komunikaci _mezi komponenty_ a také **určuje jaké komponenty je možné připojit**. Čipová sada je _směs integrovaných obvodů_, které spolu navzájem komunikuji. 

Dělí se na dvě části – **northbridge a southbridge**. Dříve byl northbridge a southbridge rozdělen na dva čipy. Nyní díky vyšší integraci jsou obě části **_většinou sdílí jeden čip_**.

#### **Rozšiřující sloty a další konektory**
Rozšiřující sloty se **používají k zapojení grafických karet, zvukových karet a dalších komponent**. Mezi rozšiřující sloty patří _například AGP, PCI a nyní používané PCIe (PCI Express)_.

Konektory pro další zařízení je možné dělit na **interní a externí**. Interní se nachází na samotné ploše základní desky a patří mezi ně například **IDE, SATA a další**. Externí se nachází na zadním panelu desky a patří mezi ně například **PS/2, COM, USB** a další.

#### **Sběrnice (bus)**
Sběrnice je **soustava vodičů**, která _umožňuje komunikaci a přenos dat mezi jednotlivými částmi počítače_. Mezi sběrnice se řadí například **USB, PCIe a další**.

#### **BIOS/UEFI**
**BIOS** a jeho vylepšená **verze UEFI** _zajišťují vazbu mezi **operačním systémem** a **hardware**_. V dnešní době se **BIOS/UEFI používá při startu počítače pro inicializaci a konfiguraci** připojeného HW. BIOS/UEFI je uložen na **základní desce**.

### Procesor
Procesor **je „mozek“ počítače**. _Vykonává a interpretuje_ instrukce programu, který je umístěný v **operační paměti**. **_Seznam všech instrukcí_** se nazývá **instrukční sada**.

| Parametr  |  Popis | Jednotka  |
|---|---|---|
| **Rychlost jádra** | Počet operací á sec.  | GHz  |
| **Šířka slova**  | Max. šířka operandů instrukcí  | Bit  |
| **Počet jader**  | Počet HW jader | Číslo  |
| **Počet instrukčních kanálů**  | Max. počet instrukcí na 1 jádro  | číslo  |
| **Šířka externí dat. sběrnice**   | Max. počet bitu, které lze přenést z (do) čipu  | Bit  |
| **Frekvence dat. sběrnice** | Max. frekvence RAM  | MHz  |
| **Interní pamět chache** | Rychlá interní vyrovnávací paměť |  MB  | 

### Paměť
Paměť slouží k **ukládání a čtení dat** a programu. Paměti můžeme rozdělit na vnitřní (ROM, RAM) a vnější (magnetické, optické).

#### **Základní charakteristiky pamětí**
- **Kapacita** určuje množství dat, které můžeme do paměti uložit. Základní jednotkou jsou násobky byte (MB, GB, TB)
- **Přístupová doba** určuje, jak dlouho trvá, než se zpřístupní informace. Přístupová doba je většinou v ns až ms.
- **Přenosová rychlost** určuje, kolik dat se přenese za jednu sekundu.

#### **Paměť ROM**
Paměť **ROM (Read Only Memory)** slouží **pouze ke _čtení informací_**, které byly vloženy do paměti během výroby. 

Je **energeticky nezávislá**. Existuje několik variant paměti **ROM: PROM, EPROM, EEPROM a FLASH**. Paměť ROM se využívá **například k uložení BIOS/UEFI**.

#### **Paměť RAM**
Pamět **RAM (Random-Access Memory)** je na rozdíl od paměti ROM **_energeticky závislá_**. To znamená, informace se **udrží** jen v případě, že je _dodávána elektrická energie_. Paměť RAM se dělí na **statickou (SRAM) a dynamickou (DRAM)**. Do paměti RAM se ukládají programy a systémové procesy. 
U _statické paměti_ **(SRAM)** se informace **uchová po celou dobu napájení**, zatímco dynamické paměti (DRAM) mají tendenci informace ztrácet, takže se musí pravidelně **obnovovat**.

##### Rozdělení DRAM
- **SIPP** – nejstarší provedení používané u počítačů třídy 286.
- **SIMM** – (Single In Line Memory Module) - dvě verze (30 pin a 72 pin)
- **DIMM** – (Dual In Line Memory Module) – oproti SIMM je DIMM oboustranný
- **DDR SDRAM** – (double-data-rate synchronous dynamic random access memory), varianty DDR, DDR2, DDR3, DDR4


[![DRAM moduly](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/2_HW_zakl_param_PC?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F2_HW_zakl_param_PC%2F1_2_rozdeleni_DRAM.png)]()
` DRAM paměti; odshora: DIP, SIPP, SIMM-30, SIMM-72, DIMM, DDR DIMM`

### Pevný disk
Pevný disk se **používá k _trvalému uložení_ většího množství dat** pomocí magnetické indukce. Pevný disk se skládá z:
- ploten pro záznam
- čtecích a záznamových hlav
- motorků 
- řadiče. 

K **zapojení se používá** rozhraní **SATA III (dříve SATA II, SATA I a ATA).**

#### **Parametry pevných disků**
- **Kapacita** je množství dat, které lze na _pevný disk **uložit**_. Kapacity se nyní pohybuje v **řádech TB**.

- **Přístupová doba** je doba, která je **nutné k přesunu čtecích a záznamových hlav**. Doba je většinou v řádech **ms**.

- **Přenosová rychlost** určuje, kolik **informací je možné přenést za jednu sekundu**. Přenosová rychlost se většinou pohybuje v řádu MB/s.

- **Počet otáček** je počet **otáček kotouče** pevného **disku za jednu minutu** (5400, 7200). 

### SSD

[![Příklad SSD](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/2_HW_zakl_param_PC?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F2_HW_zakl_param_PC%2F1_3_SSD.png
)]()
`Příklad SSD`

**Solid-state drive** je datové médium **_ukládající na flash paměť_**. Neobsahuje **mechanické součástky** a má **menší spotřebu elektrické energie**. Používá stejné rozhraní _jako HDD_, aby je mohl časem nahradit. Mezi hlavní **rozhraní** SSD disků patří **SATA, ATA a M.2** (menší velikost).

#### Druhy technologií ukládání dat v rámci SSD:
##### **SLC**
**Single Level Cel** buňky, které uchovají**pouze 1 bit** na **buňku**. Jedná se o **nejdražší, ale také nejvýkonnější** typ paměťových buněk. Vydrží vysoký počet cyklů – **až _100 000_**. Je také **_nejpřesnější a nejrychlejší_**. Hlavní nevýhodou je **malá kapacita disků**. Hodí se hlavně pro _průmyslové využití závislé na spolehlivosti a výdrži_.

##### **MLC**
**Multiple Level Cell buňky**, které **uchovají 2 bity** na buňku. Jsou levnější než SLC, vydrží ale **méně cyklů – kolem 10 000**. **Výhodou oproti SLC je větší kapacita**. Nevýhodou na druhou stranu **nižší rychlost** a **přesnost zápisu**. Díky své nižší ceně, vyšší kapacitě a dostatečnému poštu cyklů se hodí **pro běžné uživatele**.

##### **TLC**
**Triple Level Cell** buňky, které **uchovají 3 bity** na buňku. Jedná se o jednu **z nejlevnějších variant SSD**, s cenou se ale **_snižuje i rychlost a spolehlivost_**. Tento typ buněk již **není vhodný pro průmyslové využití**. Má relativně malý počet cyklů – **od 3 000 do 5 000**. Jeho výhodou je **vysoká kapacita vzhledem k velikosti**. Používají se do **_mobilních zařízení, notebooků_**, atd.

##### **QLC**
**Quad Level Cell buňky**, které uchovají **4 bity na buňku**. Aktuálně **nejlevnější varianta SSD**, která ale **_není vhodná pro normální využití_**. Je nejméně přesná, nejpomalejší a má nejmenší počet cyklů – do 1 000. _Je vhodný na uchovávání dat, která nepřepisujeme tak často_.

##### **TRIM**
TRIM je **označení příkazu** umožňujícího **operačnímu systému informovat SSD** o datových blocích s již nepoužívanými informacemi. **Zajišťuje rovnoměrné opotřebení paměťových buněk**. 


### Grafické karty

[![Grafická karta ](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/2_HW_zakl_param_PC?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F2_HW_zakl_param_PC%2F1_6_graficka-karta.jpg
)]()
`Grafická karta MSI GeForce 970`

Grafické karty **slouží k zobrazení obrazu zobrazovacím zařízení** a ke **grafickým výpočtům**. Většinou používají rozhraní **PCI-Expres**. Pracují ve **dvou režimech** 
- **textovém** (pracuje pouze s předem definovanými znaky, většinou čísla, písmena a běžné speciální znaky 
- **grafickém** (zobrazuje obraz po pixelech, běžný režim)

#### Části GPU
##### **GPU**
Graphic processing Unit je specializovaný procesor zajišťující vykreslení dat na zobrazovacím zařízením.

##### **Paměť**
Paměť grafické karty slouží **k ukládání informací pro výpočty**. U **samostatné karty se jedná o vlastní paměť** karty, v **_případě integrované karty o paměť počítač_**.

##### **Firmware**
**Základní programové vybavení** karty uložené na **samostatném čipu**. Jsou zde všechny _informace o grafické kartě_.

#### Vstupy grafiky:
##### **VGA**
Analogový výstup využívaný hlavně staršími zobrazovacími zařízeními (CRT).

##### **DVI**
Digitální výstup využívaný LCD panely a projektory, dnes postupně ustupuje a je nahrazován výstupem HDMI.

##### **HDMI**
Digitální výstup nahrazující DVI. Je schopný přenést kvalitnější obraz o vyšší frekvenci.

##### **Display port**
**Nejmodernější** používaný digitální výstup. Je schopný přenášet obraz **nejvyšší kvality s velkou frekvencí**.

[![Display port](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/2_HW_zakl_param_PC?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F2_HW_zakl_param_PC%2F1_5_display-port.jpg
)]()
`Display port`


### Optická mechanika

[![Optická mechanika](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/2_HW_zakl_param_PC?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F2_HW_zakl_param_PC%2F1_7_opticka_mechanika.png)]()
`Optická mechanika pro DVD a Blu-ray`

Optické mechaniky jsou **čtečky optických disků**. Jedná se o _přenosová média_, která již **zastarávají a jsou vytlačována**. Využívají odrazu světla z **nosiče (CD, DVD)** pomocí _laseru_.


### Monitory
### CRT (Cathod Ray Tube)
**Starý typ** monitoru pracující na **_principu katodové trubice_**. Dnes se již nepoužívá pro své **velké rozměry a nízkou kvalitu**.

[![CRT monitor](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/2_HW_zakl_param_PC?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F2_HW_zakl_param_PC%2F1_8_CRT.png)]()
`CRT monitor`

### Plasmové monitory
K zobrazení obrazu využívá **elektrický výboj v plynu**. Je **náročný na energii** a pracuje s _nízkým rozlišením_. Využívá se pro velké panely ve **veřejných budovách**.

#### Druhy plasmových monitorů:
##### **LED**
K zobrazení obrazu používá LED (Light Emitting Diode). Využívá kombinaci RGB k zobrazení libovolné barvy. Hodí se i k venkovnímu použití, dobře fungují i na přímém slunci a mají vysokou obnovovací frekvenci.

##### **OLED**
OLED je typ LED displeje používající **organické materiály místo klasických diod**. Využívají se hlavně _pro mobilní zařízení_. 

### I/O zařízení
I/O zařízení výstupu informací z počítače, jejich vstupu nebo obojímu najednou.

- **Čistě vstupní zařízení** – myš, klávesnice, …
- **Čistě výstupní zařízení** – tiskárna (samostatná, bez skeneru), monitory,…
- **Kombinované** – USB disk, tiskárna se skenerem, externí disky,…

[![USB flash disc](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/2_HW_zakl_param_PC?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F2_HW_zakl_param_PC%2F1_10_USB-flashka.png)]()
`USB flash disc`


### Case (skříně)
Slouží k **mechanickému upevnění všech komponentů počítače**. Pro skládání PC je **nutné zvolit správnou skříň s dostatkem místa a dostatečným průchodem vzduchu**.

#### Druhy skříní:
##### **Desktop**
Mají tvar **klasické krabice** a pokládá se _na stůl_. Nevýhodou je **málo místa pro přidání komponentů**, kvůli čemuž se moc **nepoužívají**.

##### **Minitower**
Podobně jako **desktop nemá moc volného místa**. Je **vyšší** a **užší než desktop** a umisťuje se **_na zem_**. Hodí se pro **_počítače s menším výkonem_**, které nechceme modernizovat nebo pokud potřebujeme **_stolní počítač přenášet_**.

##### **Miditower**
Podobá se **minitoweru**, ale je **_rozměrnější a prostornější_**. Staví se na zem (většinou). Používá se pro **běžné počítače** jak ve firmách, tak v domácnosti.

##### **Bigtower**
Obsahuje **mnoho volného místa** pro _rozšiřování počítače_. Většinou je používán **na servery**.

### Napájecí zdroj

[![Nápejecí zdroj](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/2_HW_zakl_param_PC?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F2_HW_zakl_param_PC%2F1_10_USB-flashka.png)]()
`Nápejecí zdroj Thermaltake Smart RGB 600 `

Slouží ke **zpracování střídavého napětí** ze sítě na **napětí**, které potřebují _komponenty_. Většinou zapadají do formátu **ATX**. Obvykle se používají zdroje s výkonem **500-750 W**. Vyrábí se ale **i vetší** po náročnější sestavy a pro **servery**. **Je lepší zvolit výkonnější zdroj, než je aktuálně potřeba, pro případný upgrade komponentů**. Je také třeba si dát pozor na **počet konektorů** potřebných typů a **jejich voltáž**.
