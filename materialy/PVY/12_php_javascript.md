### PHP – Dynamické stránky


#### Vlastnosti PHP

>Datový typ proměnné je vázán na HODNOTU (nikoliv na proměnnou) 
>= Dynamicky typovaný 

Řetězce v PHP lze zapsat dvěma různými způsoby:
  - Uzavírat do uvozovek (při vyhodnocení se provede nahrazení proměnných uvnitř)
  - Uzavírat do apostrofů (nahrazuje se jen ESCAPE sekvence \‘).

Pole jsou asociativní (jeho prvky mají podobu KLÍČE a HODNOTY)

Příkazy PHP zapisujeme mezi znaky: 
```sh	
<?php 

?> 
```

Spolupráce s databázemi. Skripty mohou pomocí jazyka SQL (Structured Query Language) provádět s údaji v databázích libovolné operace.

Práce s PHP je velice jednoduchá a intuitivní. Na místo psaní programů, které ve výsledku vygenerují HTML, používá PHP opačný přístup. Do HTML stránky můžeme zapsat příkazy PHP, jejichž výsledek se po interpretaci skombinuje s okolním HTML kódem.
Syntaxe PHP je převážně odvozena z jazyka C. Některé rysy jsou převzaty z Perlu a z Javy -- např. asociativní pole a třídy. Kromě jednoduchého a mocného jazyka, je velikou devizou PHP obrovské množství zabudovaných funkcí. 

Důležitý příkaz pro vykonání funkcí se nazývá SWITCH. Často potřebujeme opakovaně vyhodnocovat stejný výraz a podle jeho hodnoty provést odpovídající akci ve skriptu. K tomu může sloužit příkaz IF, nebo má PHP příkaz SWITCH (přepínač).

>Další příkazy: while, do, for.

#### Výhody PHP

  - Rozsáhlý soubor funkcí
  - Podpora mnoha databázových systémů
  - Podpora na hostingových službách
  - Spousta kódů a projektů, které lze zdarma využít (phpBB, WordPress atd.)
  - Svobodná licence

#### Nevýhody PHP

  - Nekonzistentní pojmenování funkcí (strpos(), strchr(), ale str_replace(), str_pad().)
  - Jazyk podporuje výjimky, ale knihovna je používá jen zřídka
  - Slabší podpora Unicode
  - Ve standardní edici chybí ladící nástroj

#### Instalace Apache, MySQL a PHP

Webové aplikace často používají linuxový operační systém, webserver Apache, databázi MySQL a programovací jazyk PHP. Tato čtveřice je často označována zkratkou LAMP. Všechny zmíněné technologie jsou zadarmo. Pokud následující technologie provozujeme pod Windows, používá se někdy zkratka WAMP.

Jednotlivé části balíčku XAMPP:

  - Apache – Webserver, který zajišťuje komunikaci s klientem. Jedná se o povinnou součást.
  - MySQL – Hojně používaná databáze. Je s ní propojený phpMyAdmin, který je přiložený v instalaci. Existují i další databáze, například SQLite, která je přímo v PHP.
  - FileZilla FTP Server – Umožňuje vytvořit si vlastní FTP server a pak se k němu vzdáleně připojovat. Je třeba mít veřejnou IP adresu.
  - Mercury Mail Server – Lokální SMTP server pro posílání emailů.
  - Tomcat – Servrlet pro Javu, pokud tvoříte stránky v tomto jazyce.

#### Základy syntaxe

Celý kód musí být označen dvojící otazníku a menšítka.
```sh
<?php [PHP kód] ?>
```

Jednotlivé příkazy jsou odděleny středníkem.
```sh
<?
echo „První řádek“;
echo „Druhý řádek“;
?>
```

#### Proměnné

Narozdíl od mnoha jiných jazyků se proměnné v PHP určují při přiřazení, což velice zkracuje a zjednodušuje kód, zároveň ale může být takový kód pro začátečníky matoucí a nepřehledný.

V průběhu kódu může proměnná měnit svůj typ (tzv. přetypování). Často se tak děje například výsledkem nějakého výpočtu.

Každá proměnná musí mít jednoznačný název. Ten v PHP začíná znakem dolaru($) a následuje (bez mezery) nějakým pojmenováním. První znak toho pojmenování musí být buď písmeno a-z nebo podtržítko. Nesmí to být číslo ani nic jiného. Názvy proměnných v PHP rozlišují mezi malými a velkými písmeny, takže pozor na to. Praxe bývá většinou taková, že se proměnné píší malými písmeny. V názvech proměnných můžete používat české znaky včetně diakritiky, běžně se to ale moc nedělá. Desetinná čísla se zadávají s tečkou, ne s čárkou. Řetězce se uzavírají do uvozovek nebo do apostrofů.

```sh
<?php
//logický typ
$mam_malo_penez = TRUE;
//celočíselný typ
$plat = 10000;
//desetinné číslo
$disketa = 3.5;
//řetězec
$prohlaseni = „Právě se vracím z pražského hradu! …“;
echo $mam_malo_penez.“<BR>“;
echo $plat.“<BR>“;
echo $disketa.“<BR>“;
echo $prohlaseni.“<BR>“;
?> 
```
...

| TYP | Název v PHP  | Popis |
|---|---|---|
| Logický typ  | Boolean | uchovává hodnotu "pravda" (TRUE) nebo "nepravda" (FALSE)  |
| Celočíselný typ   | Integer   | uchovává celá kladná i záporna čísla (NULU taktéž)  |
| Desetinné číslo   | Float/ Real  | uchovává desetinná čísla, s přesností obyčejně na 14 des. míst   |
| Řetězec   | String   | uchovává texty neboli řetězce, ZNAKY nebo sada znaků, v php prakticky neomezené délky   |

... 
#### Komentáře

Komentáře mohou být v PHP jednořádkové nebo víceřádkové a používají se na ně znaky „//“ (dvě dopředná lomítka), „#“ (mřížka) a dvojice „/*“ a „*/.

```sh
<?
//komentář
?>
nebo
<?
#komentář
?>
nebo
<?
/*
komentář
komentář
komentář
*/
?>
```

# Javascript

Základní vlastnosti:
- interpretovaný – jazyk JavaScript se nemusí kompilovat.
- objektový – využívá objektů prohlížeče a zabudovaných objektů.
- závislý na prohlížeči – funguje však ve většině užívaných prohlížečích.
- case sensitivní – tzn., že záleží na velikosti písem v zápisu.
- syntaxí je blízký jazykům C, Java a jim podobným.

>JavaScript je klientský skript. To znamená, že se program odesílá se stránkou na klienta (do prohlížeče) a teprve tam je vykonáván. (Protikladem klientských skriptů jsou skripty serverové, které jsou vykonávány na serveru a na klienta jdou už jen výsledky).

#### Kde umístit skripty?

Skripty můžete umístit na následujících místech:

- Do hlavičky HTML dokumentu (tj. mezi tagy <head> a </head>).
- Do těla HTML dokumentu (tj. mezi tagy <body> a </body>).
- Do externího souboru (V HTML dokumentu bude odkazováno na tento soubor).

#### Příklad
```sh
<body>
Toto je normální text stránky.<br>
<script>

document.write("A toto napsal JavaScript");

</script>
</body>
```

