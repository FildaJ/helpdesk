 **Otázka číslo 3**

# **_Model ISO/OSI, architektura TCP/IP, aktivní prvky kabeláže versus model TCP/IP._** **Příklad.**
[![N|Solid](http://matura.jednoduse.cz/pictures/3_1_iso_osi_tcp_ip.PNG)](https://nodesource.com/products/nsolid)

# Srovnání ISO/OSI a TCP/IP, aneb v čem se liší

- Hlavní rozdíl je ve **výchozích předpokladech** + postojech tvůrců těchto modelů

## ISO/OSI
Tvůrci ISO/OSI modelu dbali na spolehlivost služeb, které jsou v rámci vrstev. Jinak řečeno ISO/OSI model počítá více funkcemi, chce zajistit **spolehlivý přenos**. Fungování této vrstvy je tedy složitější, o to lehčí je potom připojení **hostitelských PC’s.** 
S časem se ukázalo, že tento návrh modelu není z nejšťastnějších, jelikož **vyšší vrstvy ISO/OSI** modelu nemohou spoléhat na nižší (jelikož vlastně každá z vrstev, včetně těch nižších se do určité míry zabývá zajištěním **spolehlivosti**).

## TCP/IP:
Tvůrci TCP/IP vycházeli z předpokladu, že **zajištění spolehlivosti komunikace** je problém koncových uživatelů. **Zajištění komunikace by mělo být řešeno až** na úrovni transportní vrstvy. Při komunikaci poté nemusí docházet k ztrátě přenosové kapacity na zajištění spolehlivosti (potvrzování, opětovné vysílání poškozených paketů). 
V koncepci modelu **TCP/IP** tedy nemusí být úplně spolehlivá (ztráta paketů beze snahy o znovu poslání). Pakety by však měly být přenášeny co nejspolehlivěji (v angličtině tomu říkají _best effort_) → pakety by měly být zahozeny např.: až když se poškodí během přenosu.
TCP/IP tedy předpokládá, že se k síti připojují **inteligentní zařízení** a může tedy tvořit jednoduchou, za to rychlou komunikační podsíť.

## ISO/OSI model – charakteristika a _vrstvy_
> V minulosti bylo na trhu vývoje **sítí** více firem; ty byly navzájem nekompatibilní. Byla tedy potřeba stanovit pravidla tak, aby se tyto systémy spojily a SW a HW různých firem spolu byl schopen komunikovat.
Mezinárodní ústav pro normalizaci **ISO** (International Standart Organization) vypracoval referenční model **OSI (Open Systems Interconnection)**. Tím vznikl známý model se sedmi vrstvami, které vzájemně spolupracují.
**ISO/OSI model rozděluje síťovou práci na vrstvy.** _Vyšší vrstva přebírá práci od nižší (podřízené)._ Při komunikaci dochází k **zapouzdření dat** na straně odesílatele a na **rozbalování** na straně příjemce. Začíná se vrstvou 7, ta se zabalí do šesté atd…
**Vertikální spolupráci** mezi vrstvami (nadřízená s podřízenou) má na starost výrobce sítě. Spolupráce **mezi vrstvami jednotlivých sítí – horizontální** je starostí právě **ISO/OSI modelu.** ISO/OSI model v praxi je nevyužit. Zajímá snad jen výrobce síťových komponent. Umožňuje však pochopit principy toho jak síťové prvky v síti pracují a je zkrátka ji dobré znát, jakožto základní terminologii síťaře. 

### Vrstvy ISOI/OSI
```sh
Fyzická vrstva (physical layer)
```
Popisuje **elektrické/optické** (zaleží na kabelu), dále mechanické a funkční vlastnosti:
•	**Jakým signálem je reprezentována logická jednička**, jak stanice rozezná začátek bitu, tvar a druh konektoru; respektive jaký kabel byl užit
Fyzická vrstva se také **stará o to**, aby každý bit byl přenesen **korektně (otázka kódování, časování, modulace)**…
Také **navazuje** a ukončuje spojení s **komunikačním médiem**.


```sh 
 Linková vrstva (taktéž spojová | data link layer)
 ```
Uskutečňuje přenos (odesílání a příjem) **datových rámců** po fyzickém médiu (kabeláž).
_Kromě odesílání a příjmu rámců_ také **kontroluje cílové adresy** každého přijatého rámce a určuje, zda **bude rámec odevzdán vyšší vrstvě**. 
Poté také pracuje s fyzickými **adresami síťovek** (MAC adresy).
>PROTOKOLY/VĚCI linkové vrstvy: pracují na ni všechny mosty (bridge mezi 2 sítěmi) a přepínače.


```sh 
Síťová vrstva
 ```
**Je zodpovědná za spojení a směrování mezi 2 PC’s či sítěmi (uzly)**, mezi kterými neexistuje spojení. Zajišťuje také to, **kudy** bude paket směrován **(jakou trasou; bývá více cest)**. Tuto volbu trasy nazýváme **_routingem_**.

Síťová vrstva **data přenáší po blocích, tzn. packetech (linková pod ní v tzn. rámcích)**. Představa fungování je taková, že síťová vrstva v uzlu x rozhodne, kam by měl být paket směřován → packet je předán linkové vrstvě _(vloží packet do svého rámce a přenese k danému uzlu)_. Zde je partnerská linková vrstva **vybalí** a předá packet své síťové vrstvě. Ta opět rozhodne, _zda a případně kam packet poputuje dále._

>PROTOKOLY/VĚCI síťové vrstvy: IP protokol


```sh
Transportní vrstva (transport layer)
```
Činností této vrstvy je **dělení přenášené zprávy na pakety** a následné **opětovné skládání přijatých paketů do zpráv** _(při přenosu se mohou pakety ztratit či pomíchat)_. Jde o přizpůsobení třech nejnižších vrstev třem nejvyšším. **Slouží tedy jako taková "mezistupní vrstva".**

>PROTOKOLY/VĚCI transportní vrstvy: 
- **TCP** protokol – zajišťuje přenos dat se _zárukami_ (přenos mailu, www stránek)
 - **UDP** protokol – přenos **bez záruk**; využíváno appkami, u kterých není potřeba kvalita, ale rychlost (hry, streamované videa, internetová rádia)
 

```sh
Relační vrstva (transport layer)
```
**Nejkritizovanější vrstva ISO/OSI**. Není u ní zcela jasné, co má na **starosti**. Obecně však může **_provádět ověřování uživatelů a zabezpečování přístupu_** k zařízením.

 ---
 _`Přirovnat ji lze k hovoru po telefonu. Když během telefonování spadne linka, vytočíme telefonní číslo a znovu a poté pokračujeme. Relace tedy trvá nadále, ale může být realizována pomocí více transportních spojení (znovu vytáčení hovorů`)._

>>PROTOKOLY/VĚCI relační vrstvy: 
**SSL** – zabezpečení komunikace obou stran (šifrováním a autentizací – př.: HTTPS) 


```sh
Prezenční vrstva (transport layer)
```
Má na starosti **konverzi (převod informace do kódu)**. Přenášená data mohou totiž být v různých sítích **kódována jinými způsoby**. **Proto vznikla** prezenční vrstva. Zajišťuje sjednocení různých druhů kódovaných informací. _Dále také umožňuje data komprimovat._

Prezenční vrstvě jde o to, aby měla data pro příjemce **stejný význam** jako pro odesílatele. Kromě kódování textu také pracuje proto, aby správně **znázorňovala datové struktury**.

>>PROTOKOLY/VĚCI prezenční vrstvy: 
**SSL** – SMB (Server Message Block) – slouží k sdílenému přístupu k souborům, tiskárnám či sériovým portům
 


```sh
Aplikační vrstva 
```
-	Je to určitá aplikace, jež **zpřístupňuje** uživatelům **síťové služby**. Nabízí a poté zajišťuje přístup _k souborům na jiných PC’s nebo například přístup k tiskárnám, elektronické zprávy (e-mail)_, atd.

-	Původní představa byla taková, že v ní budou umístěny **všechny aplikace** v prostředí sítě – to se ukázalo jako **_nemožné_**
-	Kvůli tomu, že všechny vrstvy musí být _standardizované_; to není u aplikací žádoucí (autoři chtějí mít svobodnou ruku při tvorbě rozhraní a celkově komfortu pro uživatelské užívání)
-	V apl. vrstvě zůstaly jen **část aplikací**, které potřebovaly být _standardizovány_; zbytek se přenusul mimo ISO/OSI vrstvu

`Příkladem je e-pošta: v aplikační vrstvě zůstaly poštovní servery – je bylo nutné standardizovat (aby spolu mohly komunikovat); zatímco klientské programy el. pošty jsou už mimo. `
>>PROTOKOLY/VĚCI této vrstvy: 
**HTTP** – přenos hypertextových dokumentů _(port 80, HTTPS 443)_
**FTP** – přenos souborů mezi PC’s pomocí poč. sítě _(port 20 a 21)_
**DNS** – překlad IP číselných adres na textové, nám známé _(port TCP/53 i UDP/53)_ 
**DHCP** – dynamické udělování IP adresy, masky sítě, default gateway a DNS _(port klienta 68, naslouchání serveru port 67)_
**POP3** – pro stahování e-mailových zpráv ze serveru na klienta
**SSH** – zabezpečené šifrování a přenos dat např.: přes internet
**Telnet** – nezabezpečené šifrování


###Co dělají jednotlivé vrstvy | ve zkratce
```sh
-	7. vrstva aplikační poskytuje aplikacím přístup ke komunikačnímu systému prostřednictvím protokolů síťových služeb (elektronická pošta, přenos souborů....), které zahrnuje. 
-	6. vrstva prezentační bývá zpravidla součástí operačního systému a zajišťuje konverzi příchozích a odcházejících dat do určeného formátu. 
-	5. vrstva relační řídí a koordinuje relaci mezi koncovými aplikacemi 
-	4. vrstva transportní organizuje a spravuje přesun dat mezi koncovými 
-	3. vrstva síťová zajišťuje směrování paketů, určuje optimální cestu pro jejich přenos od zdrojového uzlu po uzel cílový (na určení optimální cesty se může podílet více mezilehlých uzlů, přes které paket prochází). 
-	2. vrstva vrstva datových spojů zajišťuje provoz na datových spojích, tj. vytváří datové rámce, synchronizuje jejich přenos a zajišťuje bezchybnost přenosu. 
-	1. vrstva fyzická realizuje vysílání a přijímání signálu na fyzickém spoji. 
```

### **Zásadní protokoly TCP/IP**
#### _IP protokol:_
Protokol síťové vrstvy, zároveň jediný **přenosový protokol v rámci TCP/IP**. Protokol je **_nespolehlivý_** (dochází často ke ztrátě paketů, jejich poškození či doručení v špatném pořadí. A pokud síťová vrstva obdrží poškozený packet, nestará se nápravu a packet zahodí)) a nespojovaný (není předem určená cesta přenosu dat; packet putuje dle aktuálního stavu **přenosových cest → packety jsou poté posílány po různých cestách a nemusí přijít v pořadí, jak byly odeslány)**. 

Tyto zmiňované vlastnosti umožňují přenášet data maximální rychlostí. Objem nepřenesených dat k přeneseným je hodně malý a proto se IP protokol používá. Pokud bychom chtěli **spolehlivý přenos**, využijí se protokoly vyšších vrstev.
Protokol je začleněn v koncových uzlech sítě nebo i ve směřovačích (routerech). Přenášená data jsou nazývány _IP datagram a.k.a packety._ → Každý packet musí nést řídící informace a v druhé části vlastní přenášená data _(tzn. payload)_.

`Hlavička IP datagramu (packetu)`
[![N|Solid](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2F3_2_hlavicka_IP_datagramu.PNG)](https://nodesource.com/products/nsolid)
Skládá se z hlavičky a vlastních dat. Hlavička zabírá 0. až 23. Byte, od 24. Bytu začíná datová část packetu.

 Packet se skládá z:
-	4 bity – označuje verzi IP – IPv4, nebo IPv6
-	4 bity – délka hlavička (údaj složen ze čtveřic bitů)
-	8 bitů – typ služby – dnes Type of Service (ToS) nahrazen QoS 
    --	Vyhrazuje a ovládá přenosový tok na síti; tedy zda-li může paket projít dále
-	16 bitů – délka paketu (v bitech)
-	16 bitů – ID tag (když je packet rozstříštěn na více) fragmentů
-	3 bity (složeny z nul) – identifikace, zda-li lze packet fragmentovat
-	13 bitů – označují offset (indikátor) fragmentu
-	8 bitů – hodnota TTL (Time To Live) – označuje, přes kolik routerů může paket projít, než bude zničen (hodnota 1 nebo 0 = zničen)
-	8 bitů – označení protokolu (ICMP, UDP, TCP)
-	16 bitů – kontrolní součet, tzn. CRC
-	32 bitů – obsahující IP adresu odesílatele
-	32 bitů – obsahující IP adresu příjemce

Protokol IP funguje na principu maximální snahy **(best effort)**, pro přenos paketů tedy užívá all prostředky, která jsou k dispozici. Při přeplnění přenosové kapacity však může **protokol IP některé pakety zahodit**.

##### Adresování a směrování u IP protokolu:
Každý uzel (síťové rozhraní) využívající protokol **IP**; má přiřazenou **_IP adresu_** _(jednoznačný identifikátor v síti)_. A právě v packetu je obsažena cílová IP adresa. Na základě cílové IPiny provádí routery (směrovače) rozhodnutí o další směru odeslání packet **(tzn. routing)**.

##### Fragmentace:
IP protokol přenáší data **různými přenosovými cestami**. V různých sítích závisí max. velikost datového rámce na MTU (Maximum Transfer Unit). Při přeplnění MTU se musí packet **fragmentovat (rozdělit)** na menší části, které poté možné přenést. 
Fragmentace packetu probíhá na router pokud se tedy zjistí, že není schopen packet přenést. Fragmentace poté může také **být: opakovaná (fragmentace fragmentu)**. Zpětná defragmentace probíhá u příjemce. 
Pro určení pořadí fragmentů slouží část **hlavičky packet → offset a příznaky (značí zda (ne)může být fragmentován). Packet, kt. nesmí být fragmentován má min. velikost 576B.**
Poslední věci, která se u fragmentace řeší je _timeout_; čas, do kterého když nedorazí fragment pakety, dochází k zahození celé zprávy.
---

#### _ARP:_
Slouží k překladu IP adres na MAC adresy. Funguje metodou **dotaz-odpoveď**. Dotazy jsou vkládány **do linkových rámců a rozeslány jsou broadcastem (v adrese mají samé jedničky)**. Je použitelný jen tam, kde je užit broadcast (všesměrové vysílání). Odpověď je už cílená (ne broadcastová); odpoví jedno zařízení.

Funguje tak, že pošle dotaz **všem zařízením** (kdo odpoví, toho se dotaz týká – rozezná svou IP adresu). 
ARP dotazy jsou cachovány (uchovává si části dotazů pro příští rychlejší práci) po cca 20 minut. Při dotazu na IP se ARP prvně podívá do cache a až poté vysílá broadcast.
---
**ARP zpráva se skládá:**
-	HW address – specifikuje systémový protokolový typ – př.: Ethernet je 1 
-	Protokolový typ – specifikuje vnitřní systémový protokol, na který je žádost ARP zaměřena. Např.: pro IPv4 má hodnotu 0x0800
-	Hardwarová délka – délka HW adresy v oktetech
-	Protokolová délka – délka IP adresy
-	Operation – specifikace operace; 1 = žádost; 2 = odpověď
-	Odesílatel protokolové/hw adresy = adresy odesílatele dotazu/odpovědi
-	Cílová protokolová/hw adresa – v žádosti nese samé nuly, v odpovědi je už ta správná

>Fce ARP zprávy:
>Uzel, kt. příjme broadcast vysílání se žádostí o >identifikaci adresy uloží /aktualizuje do své cache mezi >HW a protokolovou adresu (IP) odesílatele
>→ poté se podívá, zda jde o dotaz či odpověď
- Je-li to dotaz, zjistí, zda-li se ho to týká a poté >sestaví ARP odpověď:
>  -	Vyplní protokol adresy odesílatele a příjemce a >také hw cílovou adresu (MAC adresa)
-	Pole operation nastaví na 2 a pošle tazateli
-	Vyplní protokol adresy odesílatele a příjemce a také hw cílovou adresu (MAC adresa)
-	Pole operation nastaví na 2 a pošle tazateli
•	Jde-li o odpověď, odpověď použije 
`ZAJÍMAVOST: pro překlad MAC adres na IP adresu se používá protokol RARP.`
---
#### _TCP_ (Transmission Control Protocol)
Základní protokol transportní vrstvy. Umožňuje appkám **vytvořit spojení a přenášet spolehlivě a spojovaně data**. _Protokol také zaručuje spolehlivé doručení dat ve správném pořadí!_
A to i přes to, že pro posílání dat používá nespolehlivý protokol IP; **spolehlivost zajišťuje kontrolou doručení paketu (pomocí potvrzování)**. Pakety **dále také přeuspořádává na straně příjemce (aby dorazily ve správném pořadí)**.
>Protokol také umí rozlišovat různé appky běžící na jednom PC (webový server, emailový server,…) 

**Hlavička TCP protokolu:**
Zdrojový port 	Cílový port 	Číslo sekvence 	Potvrzovací bajt 
příznaky 	okénko 	Kontrolní součet 
Urgent pointer 	volby 	výplň 
[![N|Solid](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2F3_4_hlavicka_TCP_protokolu.PNG)](https://nodesource.com/products/nsolid)
 
**Potvrzování u TCP:**
Jelikož je pro spolehlivost přenosu potřeba něco co rozezná chybu v posílání a vynutí znovu odeslání dat. 
Pro toto existuje několik různých metod potvrzování (acknowledgment):
-	Kontinuální pozitivní potvrzování; potvrzuje správně přijatá data, na chybná nereaguje
-	Když do nějakého času (timeout) nedojde potvrzení dat, jsou odeslány automaticky znovu
-	Metoda okénka
-	Odesílatel odešle data dřív než obdrží potvrzení o přijetí dat předchozích

---
#### _UDP_ (User Datagram Protocol)
Na rozdíl od TCP **UDP upřednostňuje rychlost** doručení packetů před spolehlivostí. Proto se tento protokol hodí tam, kde není nutná **100% doručitelnost packetů** _(typicky videa, streamy, internetová rádia, real-time hry)_.
O nějaké zajištění spolehlivosti se poté stará samotná aplikace využívající UDP.
**UDP také využívá DNS či DHCP anebo RIP.**

**Hlavička UDP protokolu**
[![N|Solid](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2F3_5_hlavicka_UDP_protokolu.PNG)](https://nodesource.com/products/nsolid)

---

#### _DNS_ (Domain Name System)
Protokol **aplikační vrstvy**. Už víme, že každý PC (v síti) musí mít jednoznačnou adresu; tzn. **IP adresu**. Ta se používá k ID PC’s i na internetu. K tomu abych si je nemuseli pamatovat (jelikož jsou samá čísla) se místo IP adresy **používá doménové jméno**. **Doménové jméno se tedy užívá všude kromě IP adresy samotného name serveru** (který s těmito adresami a čísly pracuje).
_Umožňuje tedy ve zkratce překlad IP adres na doménové jména a i naopak!_
**IP adresy se také užívají u elektronické pošty** → jana.novotna@seznam.cz
Vazba mezi IP adresou a doménovým jménem je uložena v celosvětové databázi v ***DNS (Domain Name System)**. Tudíž jedna webová adresa je platná po celém světě.

`Princip fungování DNS:`
[![N|Solid](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2F3_6_fungovani_DNS.PNG)](https://nodesource.com/products/nsolid)
[![N|Solid](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2F3_7_domenove_jmeno.PNG)](https://nodesource.com/products/nsolid)

**DNS může mít:**
- _Rekurzivní postup_: provádí hiearchicky nejnižší DNS → ten hledá adresu, dokud nedostane odpověď.
- _Nerekurzivní postup_: provádí ho vyšší servery DNS → pokud neznají odpověď


----
#### _DHCP_ (Dynamic Host Control Protocol)
Protokol **aplikační vrstvy**. **Používání se pro automatické přidělování IP adres, masky sítě, default gateway a DNS1 + DN2** stanicím v síti. **_Funguje na UDP portu 68, server naslouchá na UDP portu 67_**.

Současně s těmito údaji posílá DCHP server klientům **další nastavení pro jejich fungování (adresa nejbližšího směrovače (routeru)).**
DHCP nahradil RARP, který mohl fungovat pouze na linkové vrstvě a také potřeboval na každou podsíť server a předává IP adresu klienta (nikoliv IP směrovače, DNS serveru,…).

**DHCP nahradil RARP**, který mohl fungovat pouze na linkové vrstvě a také potřeboval na každou podsíť server a předává IP adresu klienta (nikoliv IP směrovače, DNS serveru,…).

##### Bezpečnost DHCP
-	DHCP **nemá žádné bezpečnostní mechanismy** _→ útočník tedy může v síti nainstalovat svůj vlastní DHCP server či směrovat údaje na vlastní router_
-	Útočníkům PC může následně vystupovat jako více počítačů a vyčerpat tak počet přidělitelných IP adres
>Řešením je doporučení RFC 3118, které ke každé zprávě připojí autentizační kód (tzn. haš řetezce vytvořený z klíče a DHCP zprávy)
Moc to však nepoužívá, spíše se spoléhá na fyzickou bezpečnost sítě a dobré analyzování provozu.
