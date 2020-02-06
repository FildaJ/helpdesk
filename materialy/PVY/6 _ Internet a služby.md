### 6 | Internet a služby

#### Internet 
#### Historie
V únoru 1958 byla založena agentura ARPA, který měla po úspěšném vypuštění Sputniku v SSSR zajistit v období studené války obnovení vedoucího technologického postavení USA. S první myšlenkou sítě přišel v roce 1966 Bob Taylor. Dne 29.10.1969 byla zprovozněna síť ARPANET se 4 uzly, které představovaly univerzitní počítače. Do roku 1989 bylo více než 100 000 připojených počítačů. Internet, následník sítě ARPANET, neuvěřitelně _rychle narostl_ do rozměrů, které známe dnes. S postupem času se k němu totiž připojovaly i celé státy, pokud byly schopny vyhovět podmínkám přípustného využití.

#### Služby internetu
##### Hlavními službami jsou:
-	Komunikace (např. elektronická pošta, videokonference, diskuzní skupiny, …)
-	Sdílení informací (NFS, GFS, AFS)
-	Systém webových stránek (WWW)
-	Vzdálený přístup k PC (SSH, Telnet)

#### Internetové domény
IP adresy používané _pro adresaci strojů_ v síti nejsou vhodné pro _koncové uživatele_. 
Špatně se pamatují, lze je snadno zaměnit a také mohou se z technických důvodů měnit. Proto se číselná forma IP adres „překládá“ do _textové podoby_ vycházející z přirozeného jazyka a naopak.
Doménový prostor je hierarchický a naopak od IP adres zapisujeme doménové názvy s nejvýznamnější doménou vpravo.

[![Zjednošený obr. DNS služby](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/6_internet-a-sluzby?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F6_internet-a-sluzby%2F6_1_simple-princip-DNS.png)](https://nodesource.com/products/nsolid)
`Princip DNS služby`

#### Způsoby připojení k internetu
Způsobů připojení k internetu je několik, daly by se rozdělit na drátové a bezdrátové. 

- K bezdrátovým patří _telefonní linka_ – připojení je pak řešeno buď:
    -  pomocí DSL nebo...
    -  ... může být celá linka vyhrazena pouze pro připojení do sítě internetu. 

- Další možností jesamostatná přípojka pro _kroucenou dvoulinku_ nebo _optický kabel_ od providera(poskytovatele trvalého připojení k netu za určité cenové tarify) . 

- Za zmínku stojí i méně využívané připojení _přes elektrickou síť_. 

- Mezi bezdrátové možnosti připojení patří satelitní, Wi-Fi nebo mobilní síť.

#### Služby internetu
Internet nabízí několik standartních služeb, jejichž prostřednictvím fungují jednotlivé uživatelské aplikace. K používání jednotlivých služeb musí mít uživatel na svém počítači nainstalován program _(klienta)_, který dokáže prostřednictvím připojení k internetu komunikovat se servery poskytující konkrétní typ služby (www prohlížeč, ftp klienta, poštovní program, …).

#### Jednotlivé služby:

##### WWW
[![Služba WWW služby](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/6_internet-a-sluzby?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F6_internet-a-sluzby%2F6_2_www.jpg)](https://nodesource.com/products/nsolid)

Zkratka WWW (World Wide Web) je označení pro _systém pracující s webovými stránkami_. Každá stránka je uložena na webovém serveru, můžeme ji najít a zobrazit pomocí _prohlížeče_. Autorem je Tim Berners-Lee, v roce 1994 založil W3C vyvíjející standardy pro WWW. Využívá protokol HTTP a jeho šifrovanou formu HTTPS. Jednotlivé stránky mají _přiřazené IP adresy_. 
Pro usnadnění práce uživatelům existuje protokol DNS, který překládá IP adresy na domény.

- WWW klient (prohlížeč, browser) je program, který umožňuje procházet hypertextovou sítí dokumentů a zobrazovat je (Internet Explorer, Netscape Navigator, …)

- HTML – jazyk pro popis hypertextových dokumentů (HyperText Markup Language)


##### E-mail
Již od raných dob internetu je k dispozici zasílání textových zpráv mezi jednotlivými uživateli, dodnes je zajišťován pomocí protokolu SMTP, který byl vyvinut v _70. letech_. Emailové zprávy si mezi sebou SMTP servery _předávají na základě MX záznamů_ doménových jmen, uživatelé je používají pro stahování došlé pošty a odesílání odchozí pošty. Alternativou ke stahování pošty je využití některého z webmailů, což jsou _webové aplikace umožňující vzdálenou manipulaci_ s emailovou schránkou. Je nutné brát ohled na to, že SMTP protokol byl navržen pro krátké textové zprávy a většina poskytovatelů proto omezuje velikost zprávy, kterou je možné odeslat či přijmout.

##### Ebanking
Internetové bankovnictví umožňuje provádět pomocí síťové infrastruktury finanční transakce. Jedná se v jádru o zprostředkování zabezpečené komunikace mezi uživatelem a jeho bankou, při které je _ověřena uživatelova identita_ a _přijat příkaz k provedení dané operace_. 
K zajištění většího zabezpečení se kromě obvyklého https spojení a uživatelského jména a hesla užívá i tzv. vícestupňového ověření např. zaslání potvrzujícího kódu _pomocí SMS_. Zvyšuje se tak obtížnost _zneužití_ ukradených přístupových údajů případným útočníkem. Dále tu jsou také tzv. zprostředkovatelské služby, které nejsou bankovní instituce (v klasickém slova smyslu), ale zjednodušují provádění online transakcí a zvyšují bezpečnost (obchodník nepřijde do styku s číslem platební karty atd.).  
[![Prostředí internet. bankovnictví](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/6_internet-a-sluzby?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F6_internet-a-sluzby%2F6_4_bankovnictvi-prostredi.png)](https://nodesource.com/products/nsolid)
`Prostředí internet. bankovnictví`

##### Cloudové služby
Jsou služby využívající tzv. cloud computing, tedy model, v němž jsou servery, úložiště, služby a aplikace, které služba nabízí, dostupné uživateli vzdáleně na síti a nezatěžují hardware ani software zařízení, s nímž do služby vstupuje.
V podstatě jde o návrat k principu poskytování software jako služby, který se objevil již v 60. letech ve formě tzv. mainframů. Webové maily jsou dobrým příkladem cloudové služby — zajišťují odeslání, příjem a ukládání mailu a uživateli jsou přístupné pomocí webového rozhraní. 
Na rozdíl od klasického software, který je licencován a placen jednorázově, jsou cloudové služby nabízeny formou pravidelného předplatného. Příklad nabízených služeb: mail (Gmail), výpočetní zdroje (Amazon EC2), uložiště (Dropbox), kancelářské balíky (Office 365), atd.

[![Prostředí internet. bankovnictví](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/5_bezpecnost_zalohovani?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F5_bezpecnost_zalohovani%2F1_3_druhy-cloudu.jpg)](https://nodesource.com/products/nsolid)
`Druhy cloudů (Dropbox, Gmail a OneDrive`

##### FTP
> Klasickým protokolem pro přenos souborů po síti je File Transfer Protokol: FTP.

Využívá protokol TCP z rodiny TCP/IP a může být používán nezávisle na použitém operačním systému.
Umožňuje navázat spojení se vzdáleným počítačem, procházet danou adresářovou strukturu a přenášet soubory oběma směry. Kromě zřídka používané anonymní varianty bývá zpravidla chráněn uživatelským jménem a heslem. 

Provoz po FTP není nijak šifrován, proto pokud je to možné je vhodné používat zabezpečenou variantuFTPS (obdoba HTTPS). V dnešní době se s tímto protokolem uživatel setká nejčastěji při přístupu na webhostingové disková uložiště, případně na vnitřní firemní sdílená datová úložiště.





