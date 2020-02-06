### 11 | HTML & CSS
#### Charakteristika
**HTML a CSS** jsou _základní jazyky_ pro tvorbu **webových stránek**. **Stránky**, které jsou vytvořené pomocí těchto dvou jazyků nazýváme **statické**, protože mají _pevně daný_ (tj. neměnný obsah). **HTML je značkovací jazyk**, který se používá ke specifikaci _“kostry”_ webu a jeho obsahu. Naproti tomu **CSS** se používá pro _upravování stylů stránek_.


#### Historie 
V roce **1989 spolupracovali Tim Berners-Lee a Robert Cailliau** na propojeném _informačním systému pro CERN_.

Berners-Lee si **uvědomoval**, že potřebují něco **jednoduššího** a v roce 1990 byl tedy navržen jazyk **HTML a protokol HTTP** (Hypertext Transfer Protocol – protokol pro přenos hypertextu). Zároveň také Tim Berners-Lee napsal _první webový prohlížeč_, který nazval World Wide Web. 

V roce **1991** Tim Berners-Lee **vytvořil první web**, ten měl umožnit vědcům komunikaci a sdílení výsledků výzkumu po celém světě. Ne náhodou proto celý projekt vznikal v **CERNu**. Jednalo se o **výsledek dvouletého projektu**, který měl vyřešit **_problémy se sdílením informací_** ve velké instituci, jako CERN. 

Tato verze **HTML** byla popsána v **dokumentu HTML** Tags. Umožňovala text rozčlenit do několika logických úrovní, použít několik druhů zvýraznění textu a zařadit do textu odkazy a obrázky. 

Následoval _rychlý rozvoj webu_, takže bylo nutné pro **HTML definovat standardy**. 
Současně v roce **1991 organizace NCSA** (National Center for Supercomputer Applications) vybídla Marca Andreessena a Erica Binu k vytvoření prohlížeče Mosaic; ten vznikl v roce 1993 ve verzích pro počítače IBM PC a Macintosh a měl obrovský úspěch. Byl to první prohlížeč s **grafickým uživatelským rozhraním*. 


#### HTML
##### Syntax

##### Párový tag
```sh
<h1>Hlavní nadpis</h1>
```

##### Nepárový tag
```sh
<hr><!--Horizontální čára-->
```

V HTML je možné vkládat i více tagů dovnitř “hlavního tagu” (vnějšího tagu).

```sh
<div>
    <h1>Hlavní nadpis</h1>
    <p>odstavec</p>
</div>
```

#### Struktura HTML
##### Doctype 

**Na začátku** dokumentu **HTML stojí tag: „Doctype“**, který definuje, že se jedná o dokument HTML a bude tímto způsobem i psán. Jedná se o nepárový tag. 
```sh
<!DOCTYPE html>
```

##### HTML 
Další nezbytný tag **HTML dokumentu je „HTML“**, který definuje **začátek a konec kódu**. Jedná se o _párový tag_. 
```sh
<html>
<!--Obsah dokumentu-->
</html>
```

##### Head
**Hlavička HTML kódu**, na stránce _se nezobrazuje_, **obsahuje**: _informace pro prohlížeče_, _titulek stránky_, _propojené soubory_, _formátování textu_, … Jedná se o párový tag. 

```sh
<head>
<!--Obsah hlavičky-->
</head>
```

##### Body
**Tělo dokumentu**. Zde se **píše to, co vidíme na stránce**. Obsahuje: _nadpisy, styly, odstavce, obrázky, formátování textu_. 
```sh
<body>
<!--Obsah .html dokumentu-->
</body>
```

##### Základní kód pak vypadá následovně:
```sh
<!DOCTYPE html>
<html>
    <head>
        <title><!--Titulek stránky--></title>
    </head>
    <body>
        <div>
            <h1>Hlavní nadpis</h1>
            <p>odstavec</p>
        </div>
    </body>
</html>
```


#### CSS
##### Syntax
**Kaskádové styly (CSS)** se zadávají _pomocí
pravidel_. Každé pravidlo se **skládá ze 3 částí**:

##### **Selektor**

Selektory slouží **k určení**, na který prvek v _HTML souboru_ **se příkazy**, zapsané v **daném CSS pravidlu, vztahují**. 

Existuje **několik druhů selektorů**: 
- **Základními selektory** lze zaměřit různé
HTML tagy, to znamená, že pokaždé, když se v kódu vyskytne daný HTML tag, tyto pravidla se na něj aplikují.

- Dále existují **třídní selektory**. 
    Třídní selektory se aplikují na
    **každý prvek**, který má **v HTML struktuře přidělenou danou třídou**. 

- **Posledním druhem**
    základních selektorů jsou **ID selektory**. V HTML kód lze **elementům přidělit ID**,
    pomocí tohoto ID pak lze v CSS _nastylovat daný prvek_. Rozdíl mezi **ID a třídou je**, že
    _třída se dá používat opakovaně, zatímco ID se můžou použít pouze na jediný prvek_.


#### Struktura CSS
CSS lze zapisovat **třemi různými způsoby** podle toho, kam je zapisujeme.

- ##### Přímý styl

    Přímý styl **(angl. Inline styling)** je _způsob zápisů CSS atribut přímo do HTML tagu_ za
    pomoci HTML atributy **„style“ (viz ukázka)**. Tento způsob je **ojediněle používaný**,
    protože značně _zhoršuje přehlednost HTML dokumentu_ pro člověka, při prohlížení kódu.
    Navíc jakékoli pravidlo zapsané do daného tagu se aplikuje **pouze pro tu určitou
    instanci daného tagu**. 
    
    >To znamená, že pokud budeme chtít, aby všechny nadpisy první
    úrovně měli stejné vlastnosti, tak budeme muset u všech „h1“ tagů v dokumentu zapsat
    i atribut „style“ s požadovanými vlastnostmi. 
    
    **„Inline“ stylování má v CSS hierarchii
    nejvyšší prioritu**. To znamená, že v případě že pomocí přímého stylu a jiného způsobu
    zápisu CSS bude upravována stejná vlastnost, akorát s jinými hodnotami, tak prohlížeč
    použije hodnotu, kterou udává přímý styl.


```sh
<h1 style="font-family:Helvetica, sans-serif; fontsize: 24px; color:blue;">Hlavní nadpis
</h1>
```

- ##### Stylování v záhlaví
    Dalším způsobem pro zapisování CSS je **zapsání stylů do hlavičky HTML dokumentu**,
    tedy do tagu **_„style“_**, který se musí zapsat do **tagu „head“**. 
    
    CSS pravidla zapsána **tímto způsobem se budou uplatňovat pouze na HTML dokument**, _ve kterém jsou použita_.
    V následující ukázce je zápis stejného HTML pravidla, jako 
    v předchozí ukázce, avšak
    tentokrát se toto pravidlo aplikuje na všechny elementy „H1“ 
    v dokumentu namísto jednoho konkrétního. Pro zaměření jednoho konkrétního elementu se používají identifikátory „ID“ (viz odstavec o selektorech).

```sh
<head>
 <style>
 h1 {
 font-family: Helvetica, sans-serif;
 font-size: 24px;
 color: blue;
 }
 </style>
</head>
```

- ##### Externí soubor
**Nejčastějším způsobem pro zápis CSS je zapisování CSS pravidel do externího souboru**.

Tento druh zápisu má dvě hlavní výhody:
- Tou první je **zvýšená čitelnost dokumentů**. To
znamená, že :v HTML souborech jsou pouze věci_, co se týče struktury dokumentů a v **CSS souborech** jsou pouze věci, které se týkají **stylování dokumentů**. Tato skutečnost
často **zjednoduší orientaci ve zdrojových souborech** pro člověka a tím pádem zrychlí vývoj stránky. 

- Další nespornou výhodou je, že **jeden CSS soubor** může využívat
neomezené **množství CSS stránek**, jediné, co je potřeba je importovat CSS dokument do
HTML souboru pomocí **tagu „Link“** _v záhlaví stránky_<!--HTML soubor-->

```sh
<head>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
/*Soubor style.css*/
h1 {
 font-family: Helvetica, sans-serif;
 font-size: 24px;
 color: blue;
} a požadovaných parametrů. (viz
ukázka). Poté už stačí akorát zapsat pravidla do externího souboru.

<!--HTML soubor-->
<head>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>

/*Soubor style.css*/
h1 {
 font-family: Helvetica, sans-serif;
 font-size: 24px;
 color: blue;
}
```