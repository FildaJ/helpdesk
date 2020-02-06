### 7 | Adresování v TCP/IP sítích, třídy, zápis IP adresy, masky, přepočty.


#### Adresace v TCP/IP sítích

>Síť založená na protokolu TCP/IP využívá práci s adresami.

Pravidlo adresace je takové, že každá stanice musí mít originální číslo. Z čísla musí být dále patrné umístění stanice v síti nebo síťovém segmentu.
Každá stanice má svou IP adresu, tu reprezentuje čtveřice čísel oddělených tečkami.

Výchozím formátem v informatice je binární soustava. IP adresa vyjádřená binárně je tvořena čtyřmi osmibitovými čísly. Osm bitů je jeden bajt. To znamená, že IP adresa může být tvořena i čtyřmi bajty.

Příklad celé adresy: 11000000.10101000.00000001.0000101.

Pro zápis čísel využíváme i ostatní číselné soustavy. Například hexadecimální 
(16) a decimální (10) soustava.

##### BINÁRNÍ soustava: 
Využívá pouze dvě čísla 0 a 1. Pracují s ní HW prvky počítače.

#### HEXADECIMÁLNÍ soustava: 

Základem je šestnáct znaků: 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, A, B, C, D, E, F. 
V adresaci IP adres se také občas vyskytuje. 
Převedená binární adresa by vypadala v šestnáctkovém vyjádření takto: C0.A8.01.11.

##### DECIMÁLNÍ soustava: 

V současnosti nejužívanější soustava. Příklad adresy: 192.168.1.11.

Aby mezi sebou mohli spolupracovat různé sítě, jsou jednotlivé sítě rozdělené na segmenty (části). 
PC připojené do sítě musí mít v IP adrese uvedené číslo konkrétního PC a číslo celé sítě (segmentu) ve které se PC nachází.

Číslo IP adresy pak vyjadřuje číslo sítě a adresu počítače v této síti. 
IP adresy jsou dále členěny do tříd podle toho, jakou částí obsahuje číslo PC a síť. Tyto třídy jsou uchovány v tabulce. Zaznamenává, kolik čísel ze čtveřice je vyhrazeno pro určitý typ adresy.

###### Vysvětlivka:

Čím více bajtů je věnováno adrese sítě, tím více sítí můžeme adresovat. Tím méně číslic však zbude na adresy PC v síti a naopak.

[adresace siti](https://cldup.com/dTxpPi9lDf.thumb.png)](https://nodesource.com/products/nsolid)

V internetu byly IP adresy použity poprvé. Až později se začaly používat v lokálních sítích. Aby se předešlo konfliktům adres (lokálních sítích a internetových), vymezily se v každé třídě IP adres rozsahy pro lokální adresy.

#### Rozsahy:

>Třída A: 10.0.0.0 – 10.255.255.255
Třída B: 172.16.0.0 – 172.31.255.25
Třída C: 192.168.0.0 – 192.168.255.255

[tridy siti](https://cldup.com/dTxpPi9lDf.thumb.png)](https://nodesource.com/products/nsolid)

IP adresa je navržena variabilně. Adrese sítě je možné vyhradit 1 až 3 číslice (bajty). 

Síťová maska je nedílnou součástí IP adresy. Pomáhá rozpoznat, která část adresy je síťová. Maska je čtyřbajtové číslo (vychází z binární soustavy). Na místě adresy jsou v masce vždy zapsány jedničky (vyjadřují se binárně).

Pro IP adresy vyhrazené lokálním sítím se používají standardní síťové masky:

**Pro třídu A:**
- Adrese je určen první bajt (první číslo).
- Binární tvar masky je 11111111.00000000.00000000.00000000.
- Hexadecimální FF.00.00.00 a dekadický 255.0.0.0.


**Pro třídu B:**
- Adrese jsou určeny první dva bajty (první dvě čísla).
- Binární tvar masky je 11111111.11111111.00000000.00000000.
- Hexadecimální FF.FF.00.00 a dekadický 255.255.0.0.

**Pro třídu C:**
- Adrese sítě jsou určeny první tři bajty (první tři čísla)
- Binární tvar masky je 11111111.11111111.1111111.00000000.
- Hexadecimální FF.FF.FF.00 a dekadický 255.255.255.0.
...
#### FYZICKÁ ADRESA (MAC)

Logické IP adresy používá paket IP.

Linková vrstva používá fyzické adresy – MAC adresy.

Je to unikátní adresa síťové karty, která je zadána již výrobcem.

Adresa je šestibajtová, první tři bajty identifikují výrobce (každý výrobce má přiděleno své číslo) a druhé tři bajty přiděluje svým výrobkům sám výrobce. 

Tím zabezpečíme to, že nevzniknou dvě stejné MAC adresy. 
Hodnotu MAC adresy vaší síťové karty zjistíme příkazem ipconfig/ all (na řádku fyzická adresa)

**Druhy IP adres:**
- VEŘEJNÁ = celosvětově jedinečná (77.75.76.3 nebo 193.179.60.10)
- VNITŘNÍ = jedinečná pouze v rámci lokální sítě (10.1.1.1 nebo 192.168.1.1)

**Verze IP adres:**
- IPv4 = 32 bitové adresy, začíná jich být nedostatek
- IPv6 = 128 bitové adresy, pomalu se na ně přechází

#### IP adresa

Jednoznačně určuje zařízení, které komunikuje přes internet. Ve verzi 4 se skládá ze čtyř osmibitových čísel (0-255 decimálně). Celá adresa je dlouhá 32 bitů.
Informace jsou rozděleny do tzv. paketů a zaslány z jedné IP adresy na druhou. Paket obsahuje hlavičku, ve které je uvedeno, které PC mezi sebou komunikují a vlastní data.
V současné době znatelný nedostatek IP adres, určitá část je rezervována pro vnitřní potřeby protokolu a nemohou být přiděleny. V roce 2012 nastala situace, kdy byly všechny adresy vyčerpány (přiděleny) Adresy je nutno přidělovat HIEARCHICKY, celý adresní prostor není možno využít beze zbytku.

**Nedostatek volných adres se řeší:**
> Dynamickým přidělováním (dočasné adresy, po odpojení uživatele1 může stejnou adresu dostat uživatel2. Po opětovném přihlášení uživatele1 získá úplně jinou adresu a naopak)

>Překlad adres – NAT

>Použitím IP adres verze 6 (potřeba podpory HW či SW této verze protokolu)

Počítače (rozhraní) v internetu mají svoji IP adresu. V domácí či firemní síti stačí, aby jeden PC zprostředkovával přístup na internet. Výhodou je, že nepotřebujeme další IP adresy. Síť je v tuto chvíli za tzv. NATem.

IP adresa se volí na základě síťové masky. Podle umístění nulových bajtů v masce poznáme, ve kterých bajtech se IP adresa může měnit.

**Př:**
>Síťová maska: 255.255.255.0 
IP adresa: 192.168.0.1 (1-254)
= v dané síti může být připojeno 254 PC

Kdyby byla maska podsítě 255.255.0.0, může být v síti 65534 PC.

192.168.0.1 – 192.168.1.254
Čím větší rozsah nastavíte, tím náročnější bude udržovat tabulky s IP čísly ve směrovačích.

**ROZDĚLENÍ IP ADRES**
IP adresa má dvě části, podle poměru těchto částí rozlišujeme tři hlavní třídy (A, B, C).
1.	Třída A
2.	Třída B
3.	Třída C
4.	Třída D
5.	Třída E

První část IP adresy je **adresa sítě** (net-ID) a druhá část **adresa počítače** (host-ID)
>10.0.0.0 
00001010.00000000.000000000	.00000000
8bit.8bit.8bit.8bit
Net-ID.host-ID.host-ID.host-ID
Maska: 255.0.0.0


První: **Třída A**
>Net-ID.host-ID.host-ID.host-ID
0.0.0.0 - 127.255.255.255
V ČR tuto adresu nikdo nemá
Ve vlastnictví nadnárodních společností, vládní organizace v USA
(Obsahuje teoretickou možnost adresovat 126 sítí + 16 777 214 PC v každé z těchto sítí)

Druhá:	**Třída B**

>Net-ID.net-ID.host-ID.host-ID
128.0.0.0 – 191.255.255.255
U nás je vlastní významné organizace
(Teoretická možnost adresovat 16 384 sítí + 65 534 PC v každé síti)

Třetí: **Třída C**

>Net-ID.net-ID.net-ID.host-ID
192.0.0.0 – 223.255.255.255
Nejpoužívanější forma. Dostatečný rozsah pro domácí sítě i menší firmy
(Umožňuje adresovat 2 097 152 sítí + 254 PC v každé síti)

**SPECIÁLNÍ ADRESY:**

Čtvrtá: **Třída D** 

>Rozsah od 224.0.0.0 do 239.255.255.255
Pro multitasking (hromadné vysílání videa nebo audia)

Pátá: **Třída E**

>Rozsah od 240.0.0.0 do 247.255.255.255 
Pro další použití a experimentální účely.

- BROADCAST adresa: 255.255.255.255 (pro hromadné rozesílání paketů)
- 000.000.000.000 pro směrování paketů mezi sítěmi
- 127.0.0.1 =“localhost“ (Umožňuje posílat pakety sám sobě. Zjišťuje, jestli fungují síťové aplikace bez funkčního připojení k síti)


**IP adresy rezervované pro vnitřní sítě:**
- Třída A: 10.0.0.0 až 10.255.255.255 (použitelných 16 777 214)
- Třída B: 172.16.0.0 až 172.31.0.0 (použitelných 1 048 574)
- Třída C: 192.168.0.0 až 192.168.255.255 (použitelných 65 534)

Funkce NAT (překlad síťových adres)
V internetu má každý PC svoji jedinečnou IP adresu.
- Pokud PC ve vnitřní síti odešle požadavek, musí projít bránou do internetu
- Brána změní zdrojovou IP adresu na svoji a poznamená si vaši IP adresu včetně vašeho požadavku.
- Po přijetí odpovědi brána zkontroluje, komu požadavek patřil, změní cílovou adresu a odešle do vnitřní sítě.
Začala se používat kvůli omezenému počtu adres.

#### IPv6
Adresy IPv6 jsou 128 bitů dlouhé. Má dostatek prostoru pro 3.4×1038 unikátních adres. 
Skládají se ze dvou logických částí: 64bitového (pod)síťového prefixu a 64bitové části hosta.

Vytvářené na základě MAC adresy nebo přiřazené následně.

Zapisuje se jako osm skupin čtyř hexadecimálních čísel. 
**Př:** 2001:0db8:85a3:08d3:1319:8a2e:0370:7334

Libovolný počet po sobě následujících skupin 0000 můžou být nahrazeny dvěma dvojtečkami, pokud se v adrese toto nahrazení vyskytuje pouze jednou. 

**Př:** 2001:0db8:0000:0000:0000:0000:1428:57ab na adresu 2001:0db8::1428:57ab

**Druhy IPv6 adres**
>Unicast adresa reprezentuje jednotlivé síťové rozhraní. Paket zaslaný na unicast adresu je doručen konkrétnímu počítači. 

Typy adres IPv6 unicast: 

- globální unicast adresy
- adresy místní linky
- adresy místní stránky
- unikátní lokální IPv6 unicast adresy
- speciální adresy

Multicast adresy jsou používány k definování množiny rozhraní, která patří různým uzlům, nikoli pouze jednomu. Paket zaslaný na multicast adresu je protokolem doručen všem rozhraním určeným touto adresou. 

**Multicast adresy** mají prefix FF00::/8 a jejich druhý oktet určuje dosah adresy. Tedy rozsah v jakém je multicast adresa zviditelněna. Běžně využívány jsou rozsahy místní linky (0x2), místní stránky (0x5) a globální stránky (0xE). 

**Anycast adresy** jsou také přiřazeny více než jednomu rozhraní, patřící rozdílným uzlům. Nicméně paket vyslaný na anycast adresu je obvykle doručen pouze jednomu z členských rozhraní, typicky „nejbližšímu“ vzhledem k představě směrovacího protokolu o vzdálenosti.
Anycast adresy nemohou být snadno identifikovány, mají strukturu běžné unicast adresy a liší se pouze zaváděním do směrovacího protokolu na více místech v síti. 



