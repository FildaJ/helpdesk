### Návrh databází, modelování DB a jazyk SQL


#### Co je to SQL?

>= strukturovaný dotazovací jazyk, který se používá pro práci s daty v relačních DB.

Patří mezi jazyky Deklarativní, mezitím co u imperativních jazyků, kde musíme říkat PC vše krok po kroku, tak u deklarativních pouze říkáme, co má být výsledek, kde nás nezajímá, jak se k tomu PC dostane, ale důležitý je pro nás ten patřičný výsledek.
Díky tomu DB dotazy jsou zjednodušeny např. „Vrať mi tabulku s 5 městy, které mají největší turistický ruch“. Po nějaké kratší době, samozřejmě záleží na tom, kolik máme v DB položek, nám vychrlí výsledek bez jakéhokoliv postupu. 

#### Příkazy:
```sh
SELECT Name, City FROM User
Vybere z tabulky jméno a město a vypíše nám jen tyto 2 sloupce.
```
```sh
SELECT * FROM Users WHERE Group= ‘admin‘
Vybere vše z tabulky Users, kde je přiřazená Group admin.
```
```sh
SELECT * FROM Users WHERE Group= ‘admin‘ AND Group= ‘moderator‘
Ukáže řádky, kde hodnota sloupce Group = ‘admin‘. Lze zde přidat i více podmínek   pomocí (AND, OR, NOT).
```
```sh
SELECT * FROM Users WHERE Group NOT LIKE ‚H%‘
Vrací všechny řádky z dané tabulky, kde ve sloupci Group není řetězec začínající písmenem H a za ním 0-n libovolných symbolů.
```
- % - 0…n
- _ 1 libovolný symbol
- [abc] – množina symbolů
- [^abc] – všechny symboly, krom určených
... 
```sh
SELECT * FROM Char.level WHERE level > 50
Ukáže nám řádky, kde level postavy je větší jak 50.
```
```sh
SELECT * FROM Users WHERE userID IS NULL
Na NULL se musíme v podmínce odkazovat slovem IS.
Jak můžeme modifikovat data v DB?
```
```sh
INSERT INTO Users (Name, Level, ...) VALUES (‘Matej‘,‘69‘, …) 
Vloží nový řádek, kde Name = ‚Matej‘ a Level = ‚69‘
```
```sh
UPDATE Users SET level = ‘420‘ WHERE level = ‘69‘ 
Upraví řádky, kde Level = ‚69‘ a přepíše je na Level = ‚420‘
```
```sh
DELETE FROM Users WHERE level = ‘420‘
Odstraní řádek, kde Level = ‚420‘
```

#### Databázový systém:

- Je uspořádaná množina informací vložená na datové medium.
- Předchůdcem byli papírové kartotéky.
- Databázový systém (DBS).
- Umožňuje shromažďovat různé informace.
- Ukládá a udržuje v platném stavu data.

##### DBS se skládá ze tří částí:

**1. SŘBD** (Systém řízení báze dat)
- Program, jehož úkole je pracovat s ulož.
- nformace (organizuje je a udržuje platné)

**2. DBA** (Databázová Aplikace) = Program umožňující manipulaci s daty (výběry, prohlížení, aktualizace)

**3.	DB** (Báze dat) = Množina informací, o kterých chceme mít přehled

#### SŘBD (Systém řízení dat)

- Definice dat
- Údržba dat
- Manipulace dat
- Integrita Dat (chrání data před vnějšími činiteli)
- Zobrazování dat – není nutné pro vnitřní funkci databáze, ale pro uživatele ANO

#### Databázový model

- Popis fungování databáze
- Popisuje, jak jsou dat zpřístupňována uživatelů a jak programátorům
- Popisuje vztahy mezi objekty
- Využívá Abstrakci
- Zachycuje vlastnosti objektu

#### Návrh databáze
- Modelování = ERD model (entitně relační diagram)
- Třída – kategorie nebo skupina věcí, které mají podobné vlastnosti a stejné nebo podobné chování
- Objekt – určitá věc, která má specifické hodnoty vlastností
-  Kardinality 
    - 1 = Právě jeden
    - *... nula nebo více
    - 0 … 1 = 0 nebo 1
    - m … n

- Agregace – nadřízená třída se skládá z podřízených, ale podřízená třída může být agregována i jinde.

- Kompozice – nadřízená třída sama řídí životní cyklus objektů podřízeným tříd a ty jsou na nadřízené třídě závislé.

#### Selekce

>Relace A na základě podmínky vytvoří relaci se záhlavím relace A + tělem obsahujícím n-tice splňující podmínku.

#### Datové typy Databáze:

##### Celá čísla:

>TINYINT = 8bitové číslo
SMALLINT =16bitové číslo
MEDIUMINT = 24bitové číslo
INT = 32bitové číslo
BIGINT = 64bitové číslo

##### Texty:

>TINYTEXT = Max. 255 B
TEXT = Max. 64KB (opravdu dlouhý text)
MEDIUMTEXT = Max. 224 B
LONGTEXT = Max. 232 B
VARCHAR = Počet znaků, jaký si zvolíte, max. 64 KB
CHAR	= Pevný počet znaků, jaký si zvolíte, max. 255



