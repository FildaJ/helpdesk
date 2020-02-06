### 10 | Práce v databázovém programu 

#### Co je to databáze?


[![Databáze](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/10_databazovy-program?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F10_databazovy-program%2F10_1_datova-zakladna.PNG
)](https://nodesource.com/products/nsolid)

>„Je to strukturovaná množina dat uložená v počítači“

#### Důležitá fakta o databázi:
- předchůdcem databáze byla kartotéka

- kolem roku 1974 vzniká první dotazovací jazyk používaný v databázích – _SQL_

- díky SQL jazyku se na databáze pohlíží jako na tabulky – relační databáze

- entity (tabulky) jsou mezi sebou propojeny relacemi pomocí _primárních_ a _cizích klíčů_

#### Tvorba DB – základní fakta:

- existují tři typy relací:
    -  1:1 
    -  1:n
    -  m:n

- při vytváření databáze musí být zachována referenční integrita

- databáze by neměla obsahovat nadbytečné prvky – redundance


#### Rozložení Accessu

[![Rozložení Accessu](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/10_databazovy-program?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F10_databazovy-program%2F10_2_rozlozeni_Accessu.PNG
)]()

##### Relace v Accessu (obecně v DB)

>„Relace je vztah mezi dvěma tabulkami v relační databázi“

#### Typy relací:
- #### 1:1
    ```sh
    Jednomu záznamu v tabulce odpovídá přesně jeden záznam v druhé tabulce.
    ```
    Většinou se jedná o nevhodně navrženou databázi, protože v drtivě většině případů lze 2 entity spojené touto relací sloučit do jedné entity.
    
    Příklad: 	Jméno x Rodné číslo*
    Jeden člověk má pouze jedno rodné číslo a pod jedním rodným číslem může být zapsán pouze jeden člověk

- #### 1:n
    ```sh
   Jednomu záznamu v tabulce odpovídá několik záznamů v druhé tabulce.
    ```

    Jedná se o nejpoužívanější typ relace v rozsáhlých databázích.
    
    Příklad: 	Spisovatel x Kniha
    Jeden spisovatel může napsat více knih, avšak jedna jediná kniha může být napsána pouze od jednoho autora.
    
    
- #### m:n
    
    ```sh
    Více záznamům v jedné tabulce odpovídá více záznamů ve druhé tabulce.
    ```
    V databázi nemůžeme vytvářet přímo entity spojené touto relací. Potřebujeme vytvořit pomocnou tabulku, která bude spojovat tyto entity _vazbami 1:n_.
    
    Příklad: 	Čtenář x Kniha
    Čtenář může přečíst více knih a zároveň kniha může být přečtena více čtenáři.

#### Import a export dat

[![Rozložení Accessu](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/10_databazovy-program?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F10_databazovy-program%2F10_3_import-export-dat.PNG
)]()

#### Primární a cizí klíč

[![Primární klíč](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/10_databazovy-program?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F10_databazovy-program%2F10_4_prim-a-cizi-klic.PNG
)]()

[![Cizí klíč](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/10_databazovy-program?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F10_databazovy-program%2F10_5_cizi-klic.PNG
)]()

#### Datové typy v Accessu
#### Zde jsou vypsány nejpoužívanější datové typy v databázi

- #### Krátký tex
    Klasický typ pro text do 255 znaků. Vhodný pro jakýkoliv zápis kratšího text.

- #### Dlouhý text
    Stejný jako předchozí, avšak nemá omezení do 255 znaků. Vhodný pro popisy, nebo životopisy.

- #### Číslo

    Pokud potřebujete zapsat číselný záznam. Lze zapsat jak přirozená či celá čísla, tak i čísla desetinná.

- #### Datum a čas
        
    Lze použít několik formátů. Krátké datum bez času (20.12.2019), nebo dlouhé (pátek 20. prosince 2019), čas krátký (20:33), čas dlouhý (20:33:46).

- #### Automatické číslo
										
Používá se u primárních klíčů. Vždy k dalšímu záznamu přičte 1. To znamená že první záznam bude 1, patnáctý záznam bude 15.

#### Vlastnosti datových typů
V návrhovém zobrazení můžeme u některých datových typů také definovat, jak se záznamy budou zapisovat.

##### Titulek 
Zde píšeme název atributu s diakritikou, pro lepší přehlednost.

[![Titulek](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/10_databazovy-program?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F10_databazovy-program%2F10_6_titulek.PNG
)]()

#####	Vstupní maska
Lze také definovat masku, podle které zapisujeme data do tabulky (PSČ, telefonní číslo). Můžeme si masku také vytvořit.

[![Vstupní maska](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/10_databazovy-program?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F10_databazovy-program%2F10_7_vstupni-maska.PNG
)]()

#####	Výchozí hodnota
Výchozí hodnota se převážně používá u dat nebo časů.

[![Vstupní maska](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/10_databazovy-program?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F10_databazovy-program%2F10_8_vychozi-hodnota.PNG
)]()
Tato možnost do záznamu vypíše aktuální datum.


#### Dotazy
Dotazy umožňují zobrazovat, přidávat, odebírat, měnit nebo filtrovat data v databázi.

[![Dotazy; menu](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/10_databazovy-program?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F10_databazovy-program%2F10_9_dotazy-1.png
)]()
Jako první se naučíme vytvářet výběrový dotaz.
Dotaz vytvoříme kliknutím na ikonku Návrh dotazu _v horní liště_ na kartě vytvoření.
_Vybere všechny tabulky, které chceme přidat do dotazu._

[![Dotazy; menu](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/10_databazovy-program?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F10_databazovy-program%2F10_10_dotazy-2.PNG
)]()

Například bychom chtěli zobrazit pouze vodní živočichy, vybereme tedy tabulky Zvíře, Výběh a Typ výběhu. Do dotazu chceme napsat ID zvířete, druh, jména a typ výběhu. 
Vodní živočichové v naší zoo žijí buď v akváriu, nebo ve vodní nádrži. Do kritérií zápisu tedy napíšeme tuto podmínku s uvozovkami, jelikož se jedná o přímé pojmenování výběhu. Místo slovíčka můžete také další podmínky napsat o řádek níže do kolonky nebo.

[![Dotazy – výběr](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/10_databazovy-program?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F10_databazovy-program%2F10_11_dotazy-3.PNG
)]()

...
Pokud bycho chtěli často spouštět varianty určitého dotazu, použijeme parametrický dotaz. To znamená, _že se uživatele přímo zeptáme_, co chce vyhledat.

Například budeme vyhledávat zvířete podle světadílu, _ve kterém žijí_. Vytvoříme tedy _nový dotaz_, a _přidáme tabulky_ Zvíře a Původ. Uživatel bude vyplňovat políčko světadílu, aby se vypsala zvířata zde žijící. Do kritérií napíšeme dotaz, kterým se budeme ptát do hranatých závorek. 

[![Dotazy – výběr](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/10_databazovy-program?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F10_databazovy-program%2F10_12_dotazy-4.PNG
)]()

Dotaz bude tedy vypadat takhle:

[![Dotazy – výběr](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/10_databazovy-program?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F10_databazovy-program%2F10_13_dotazy-final.png
)]()


#### Formuláře

Formulář v databázi slouží k přidání, odebraní nebo úpravě dat. Formuláře bývají uživatelsky příjemně zpracované, aby do nich bylo jednoduché data zapisovat. Formuláře bývají přímo propojené se zdroji dat v databázi.
Formulář vytvoříme kliknutím na ikonku Průvodce formulářem v horní liště na kartě vytvoření

[![Formuláře – menu](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/10_databazovy-program?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F10_databazovy-program%2F10_14_formulare.png
)]()

V dialogovém okně vybereme tabulku, o které budeme chtít vytvořit formulář a na _pravou stranu_ přesuneme všechny atributy, které chceme ve formuláři použít a dáme dokončit.

[![Formuláře – průvodce](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/10_databazovy-program?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F10_databazovy-program%2F10_15_formulare-2.png
)]()

Otevře se nám návrh formuláře v zobrazení rozložení, lze také _přepnout_ do okna návrhové zobrazení a tam formulář _ohezkat_. Můžeme přidat obrázek na pozadí, nebo změnit fonty.

[![Formuláře – návrh](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/10_databazovy-program?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F10_databazovy-program%2F10_17_formular_navrh.png
)]()

[![Formuláře](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/10_databazovy-program?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F10_databazovy-program%2F10_16_formular-vystup.png
)]()

Šipkou dole lze přepínat mezi formuláři a kliknutím o jedno navíc vytvoříme nový prázdný formulář, do kterého můžeme zadat nové informace.

[![Formuláře – výstup](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/10_databazovy-program?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F10_databazovy-program%2F10_18_formular-dalsi.PNG
)]()

Tyto informace se po uložení formuláře zapíší do databáze jako nové zvíře.

[![Formuláře – přidání výstup](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/10_databazovy-program?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F10_databazovy-program%2F10_19_formular-novy.PNG
)]()

#### Sestavy
Sestavy slouži k vytváření seznamů a štítků. Fungují dost podobně jako formuláře, jen sestavy jsou určené _k tisku_. Sestavu vytvoříme kliknutím na ikonku Průvodce sestavou v horní liště na kartě vytvoření.

[![Formuláře – přidání výstup](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/10_databazovy-program?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F10_databazovy-program%2F10_20_sestavy-menu.png
)]()

V dialogovém okně vybereme tabulku, pro kterou budeme chtít vytvořit sestavu a na pravou stranu přesuneme všechny atributy, které chceme v sestavě použít a dáme dokončit.

[![Formuláře – průvodce sestavou](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/10_databazovy-program?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F10_databazovy-program%2F10_21_sestavy-pruvodce.png
)]()

Otevře se nám návrh sestavy v _zobrazení rozložení_, lze také přepnout do okna návrhové zobrazení, kde lze se _sestavou pracovat_.

[![Formuláře – průvodce sestavou](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/10_databazovy-program?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F10_databazovy-program%2F10_22_druhy-zobrazeni.png
)]()

[![Formuláře – průvodce sestavou](https://webadmin.endora.cz/user/filemanager/download/matura.jednoduse.cz/web/pictures/PVY_okruhy/10_databazovy-program?file=%2Fmatura.jednoduse.cz%2Fweb%2Fpictures%2FPVY_okruhy%2F10_databazovy-program%2F10_23_stitky-priklad.png
)]()
`Příklady štítků`