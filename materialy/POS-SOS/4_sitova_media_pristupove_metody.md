 **Otázka číslo 4**
 # **_Síťová média, přístupové metody. Příklad._**
 
 ## Síťová média – úvod: 
Jsou to prvky, které počítačové sítě potřebují, aby se mezi nimi **přenášela data**, či směřoval jejich tok a filtraci nebo například zesiloval či opakoval.
Technicky řečeno, jsou to zařízení,**která mají co dočinění s přijímáním a vysíláním (datagramů a.k.a. paketů) z či do počítačové sítě.**

## Síťová média
### **Síťová karta**
Jedná se o jeden z nejdůležitějších **prvků sítí**. Její funkcí je vysílat nebo přijímat packety. Převedeno na laickou řeč, **slouží ke vzájemné komunikaci mezi zařízeními**.
Síťová karta nemusí být jen klasický modul, ale může se jednat také o **Wi-Fi rozhraní** či **rozhraní virtuální**. 
V PC má podobu karty, **která se zasouvá na základní desku do PC-I/PCI-E** či dnes už čím dál častěji je **motherboardu integrovaná**.
U síťovky je také důležité zmínit, že každá má svou unikátní **_48-bitovou MAC adresu_** (př.: F0-03-8C-C0-22-1F), díky které nedochází ke zmatků při komunikaci zařízení.


#### **Jaké síťové média tedy máne?**


```sh
1. Router
``` 
[![N|Solid](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2F2_routerjpeg.jpeg)](https://nodesource.com/products/nsolid)

Router je zařízení, **které slouží ke spojení dvou různých sítí a také k přenosu dat mezi nimi**.
Nazývá se také česky směrovač a je to **aktivní síťový prvek**. 
Router tzn. procesem **routování** _(vytyčení cesty datům v průchodu sítí) přepošle data směrem k cíli_.

>Routerování probíhá třetí síťové vrstvě (síťové) modelu ISO/OSI.

**Router** se liší od od **_switche_** tím, že může spojit více sítí. 
`Častý je příměr, že switche jsou silnici spojující města ve státě, zatímco routery jsou hraniční přechody mezi státy.`

Kromě spojení LAN sítí umožňuje router také připojit se k Internetu (tvoří jakési rozhraní mezi LAN a WAN sítí). **Z předchozích vět můžeme tedy vydedukovat, že router** je jeden z **nejinteligentnějších zařízení** v rámci síťových prvků. Jen to potvrzuje fakt, že **má i svou IP adresu**. V dnešní době jsou užíváné tzn. _wireless routery_, které šíří signál Wi-Fi.

- **Směrovací tabulka**
Součást routerů bývá směrovací tabulka. Je důležitá, jelikož obsahuje **informace, které jsou třeba pro samotné routování**.
Skládá se z řádků, které obsahují: **_cíl packetu, masku podsítě, bránu a síťové rozhraní (síťovou kartu)_**.

```sh
2. Switch
``` 
[![N|Solid](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2F3_switch.jpg)](https://nodesource.com/products/nsolid)

Česky přepínač, je taktéž aktivní síťový prvek, ke kterému se připojují části sítě. Na jeho porty se může připojit i několik desítek či stovek zařízení.
Switche využívající ethernetovou technologii pracují na 2. vrstvě ISO/OSI. Existují i výkonnější switche, které umí např.: analyzovat protokol IP. Právě kvůli vrstvě, ve které pracují, se nazývají L3 switche.
Jeho úkol je zkopírovat, tedy poslat přijatá data na port příjemce, ke kterému je nutné data dostat. Na rozdíl od HUBu pošle data jen skutečnému (jednomu) příjemci.
Switch právě tímto přináší větší bezpečí přenosu, jelikož data (která potřeba jen jeden uživatel) nejsou sdílena na všechna zařízení.


```sh
3. Hub
``` 
[![N|Solid](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2F4_hub.jpg)](https://nodesource.com/products/nsolid)

Hub, **česky rozbočovač**, je další z aktivních prvků sítě. Principem je hodně podobný switchi, avšak je o „hloupější“. Rozesílá totiž data všem zařízením, kt. jsou k němu připojená.

>Pracuje na první vrstvě ISO/OSI

Využívá se hlavně ve **hvězdicové topologii**. Mezi výhody HUBu řadíme jeho schopnost fungovat jako opakovač (repeater) **= umožňuje to obnovení rychlosti přijatého signálu a dalšího poslání uživatelům s dobrou rychlostí**.

```sh
4. Repeater
``` 
[![N|Solid](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2F5_repeater.jpg)](https://nodesource.com/products/nsolid)


Česky **opakovač**, je taktéž aktivní síťový prvek. Jeho činností je **zesílit buď poškozený či přerušený signál**. Taktéž dokáže vytvořit virtuální síť, kterou umí šifrovat.
Důležité je říci, že opakovač si nijak o data nezajímá; **pouze je špatný signál odešle a s větší intenzitou a opravený ho pošle.
Existují dva druhy repeaterů:** 
•	_Univerzální repeater_ – tento repeater skrývá MAC adresy za svou MAC adresou
•	_WDS repeater_ – umožňuje viditelnost MAC adres za repeaterem

```sh
5. Transceiver
``` 
Neboli česky **převodník**, je síťový prvek, který slouží jako **„redukce“ mezi dvěma typy kabelů**. Pokud tedy máme např.: _optický kabel a kroucenou dvojlinku; je nutné mezi nimi použít transceiver; který umožní jejich vzájemnou kompatibilitu._

 ## Přístupové metody:

### Přístupové metody – charakteristika

>Přístupové metody definují pravidla, podle kterých stanice v síti postupují ke **tzn. „komunikačnímu kanálu“ čili například kabelu**. Přístupové metody zabezpečují, aby v jednom okamžiku **přes komunikační kanál komunikovala jen jedna stanice**. 
Pokud by totiž došlo k narušení komunikace, nastala by **kolize**. Dojde ke vzájemné rušení a znemožní se přenos dat.
Přístupová metody je důležitým znakem **síťových standartů**.

**Kolizní doména:**
Před vykládáním o samotných **přístupových metodách** je důležité zmínit tuto část sítě.
    Kolizní doména je ta **část sítě**, ve které může dojít ke **_kolizi vysílání několika stanic_**. Ty jsou logicky napojeny na _sdílené médium_. 
V praxi tak fungují, spíše **fungovaly HUBy (rozbočovače)**, které posílají data na všechna rozhraní (samozřejmě mimo toho, odkud došel).

`Schéma kolizní domény`
[![N|Solid](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2F1_kolizni_domena_schema.jpg)](https://nodesource.com/products/nsolid)

## **Druhy přístupových metod**
```sh
CSMA/CD (Carrier-sense Multiple Access with Collision Detection)
``` 
**Česky**: _Metoda vícenásobného přístupu ke komunikačnímu kanálu s detekcí kolize._
Metodu, kterou používala především **sběrnicová topologie sítě standardu Ethernet (koaxiální kabel)**.

**Funkce CSMA/CD**
Stanice, která chce vysílat, zkontroluje, zda již nevysílá jiná stanice. Pokud tomu tak je, počká na to, až bude **komunikační kanál volný; je-li volno, začne vysílat paket**, _který se šíří všem zbývajícím stanicím připojeným k síti_. 
Stanice poté **dále pokračuje ve sledování sítě** _(to znamená, že sleduje, jestli je na síti to, co tam poslala)_. 
… pokud ve stejném okamžiku začnou vysílat **dvě stanice**; nastává kolize (**Collision Detection**) > zařízení to zjistí tak, že **v okamžiku co sledují síť** uvidí na síti jiná data (packety) než svoje. → Stanice se v tomto okamžiku odmlčí a dobu x (náhodná) se zkusí **poslat data znovu**.
**_Zmiňovaná náhodná doba_** (kterou má každá stanice nastavenou odlišně) zaručuje to, že nedojde k další kolizi.

>**Princip fungování CSMA/ CD ve zkratce:**
a)	zařízení, které chce **vysílat**, poslouchá, zda je **linka volná**
b)	pokud je **volná**, začne **vysílat rámec (packet)**
c)	_odesílatel poslouchá_, zda nedošlo ke **kolizi**
d)	pokud zjistí, že **došlo ke kolizi**, pošle _jam_ signál _(reakční signál na kolizi)_
e)	po ukončení jamu si stanice, které vysílaly, **nastaví náhodný čas** po který **_čekají_**
f)	_po uplynutí času se začne bodem 1_
```sh
CSMA/CA (Carrier-sense Multiple Access with Collision Avoidance)
``` 
**Česky** _Metoda vícenásobného přístupu ke komunikačnímu kanálu se zobrazením vzniku kolize._
Metoda, **která se používá u bezdrátových standartů Wi-Fi** pro zařízení komunikaci mezi počítači. 


**Funkce CSMA/CA** 
Chce-li klientská stanice vysílat, poslouchá, **_je-li na komunikačním_ kanálu** (kabel,…) **nějaká aktivita**. → Pokud ano, počká náhodně dlouhou dobu a poté se pokusí ke kanálu _připojit znovu_.  Uvolní-li se mezitím kanál, klientská stanice **(PC) požádá  přístupový bod (AP) o vysílání**. 
Stanice vyšle tzn. _signál RTS_ (Request To Send; neboli požadavek na přenos) a čeká o povolení přístupu k vysílání. **Od AP** poté v případě kladného vyřízení dostává **_signál CTS (Clear To Send)_**.
Ostatní stanice připojené k AP během tohoto procesu mají povel _nevysílat_.

```sh
Duplexy
``` 

**Half duplex**
– aktivní komunikace může probíhat pouze v jednom směru.
Obě strany mohou **přijímat, avšak nemohou vysílat ve stejný okamžik**. Při této komunikaci jsou již dvě **frekvence (existuje simplex, který vysílá jen na jedné; např.: vysílání rozhlasu, TV či domovní zvonek). **
Na jedné _vysílá_, na druhé frekvenci se _přijímá_. Příkladem takové komunikace jsou vysílačky. 

**Full-duplex** 
– zde může komunikace **probíhat současně**. Příkladem takové komunikace je _telefonický rozhovor_. 

Plný duplex v rámci PC síti užívá **standart Ethernet** a **používá se u sítí hvězdicové topologie**. Pro duplexní spojení využívá síť klasickou **kroucenou dvojlinku** _(ta se skládá ze 4 párů vodičů) → jeden z nich je určen pro jeden směr, druhý pro směr opačný_. (zbylé dva páry jsou nevyužity).

Ke správné komunikace má zařízení **vyčleněné své páry**, které při přenosu používá. _Díky tomu zde nemusí být implementována přístupová metoda CSMA/CD_. Nedochází totiž ke kolizím a nemusím být tedy ani detekovány.


```sh
Token ring
``` 
_Méně častá metoda_, využívaná především u **kruhové topologie**. Packet se zde nazývá speciálně – **_token_**. 
Token si stanice _postupně předávají_. Vysílat poté může je ta stanice, která **token vlastní**. Z toho vyplývá, že v této přístupové metodě může vysílat **jen jedna stanice**.  
Od technologie Ethernet se liší tím, že zde odpadává starost rušení přenosu (a tím pádem nutnosti použít CSMA/CD).



```sh
Token bus
``` 

Je založen na **Token ring**, ale není zde nutné použít **_kruhovou topologii_**. Místo toho každá stanice **obdrží logickou adresu** (a v síti např.: hvězdicové se vytvoří **_logický kruh_**), po kterém poté putuje tokeny **od adresy k adrese**.















