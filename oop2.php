<?php

// ESERCIZIO 1
//  Replicare l'esercizio del panino visto a lezione! Oggi siamo tutti paninari inside (Ma se i panini non vi piacciono potete fare torte o biscotti o qualisasi altra ricetta, l'importante è che utilizziate Dependency Injection e Object Composition)

// abstract class Bread
// {
//     abstract public function breadType();

// }

// class whiteBread extends Bread
// {
//     public function breadType()
//     {
//         echo "- Tipo di pane : Pane Bianco \n";
//     }
        
// }

// class CerealBread extends Bread
// {
//     public function breadType()
//     {
//         echo "-Tipo di pane : Pane ai Cereali \n";
//     }
    
// }

// class wholeGrainBread extends Bread
// {
//     public function breadType()
//     {
//     echo "-Tipo di pane : Pane Integrale \n";
//     }
// }

// abstract class protein
// {
//     abstract public function proteinType();
// }

// class Salami extends protein
// {   
//     public function proteinType()
//     {
//     echo "-Tipo di Proteina : Salame \n";
//     }
// }

// class Mortadella extends protein
// {
//     public function proteinType()
//     {
//     echo "-Tipo di Proteina : Mortazza \n";
//     }
// } 

// class Ham extends protein
// {
//     public function proteinType()
//     {
//     echo "-Tipo di Proteina : Prosciutto \n";
//     }
// }

// class bacon extends protein

// {
//     public function proteinType()
//     {
//     echo "-Tipo di Proteina : Pancetta \n";
//     }
// }

// abstract class salad
// {
//     abstract public function saladType();

// }

// class Russian extends salad
// {
//     public function saladType()
//     {
//         echo "-Tipo di Insalata : Russa \n";
//     }
// }

// class romaineLettuce extends salad
// {
//     public function saladType()
//     {
//         echo "-Tipo di Insalata : Lattuga Romana \n";
//     }
// }

// class tomato extends salad
// {
//     public function saladType()
//     {
//         echo "-Tipo di Insalata : Pomodori \n";
//     }
// }

// class peppers extends salad
// {
//     public function saladType()
//     {
//         echo "-Tipo di Insalata : Peperoni \n";
//     }
// }

// abstract class dressing
// {
//     abstract public function dressingType();
// }

// class mayonnaise extends dressing
// {
//     public function dressingType()
//     {
//         echo"-Tipo di Salsa : Maionese \n";
//     }
// }

// class Barbecue extends dressing
// {
//     public function dressingType()
//     {
//         echo "-Tipo di Salsa : Barbecue \n";
//     }
// }

// class Guacamole extends dressing
// {
//     public function dressingType()
//     {
//         echo "-Tipo di Salsa : Guacamole \n";
//     }
// }

// class Teriyaki extends dressing
// {
//     public function dressingType()
//     {
//         echo "-Tipo di Salsa : Teriyaki \n";
//     }
// }

// class Panino{
//     public $bread,$protein,$salad,$dressing;

//     public function __constructor(Bread $pane,Protein $proteine,Salad $insalate,Dressing $salse)
//     {
//      $this->bread=$pane;
//      $this->protein=$proteine;
//      $this->salad=$insalate;
//      $this->dressing=$salse;

//     }
    
// }

// $pane = new wholeGrainBread();
// $protein = new bacon();
// $salad = new Russian();
// $dressing = new Teriyaki();
// $paninazzo = new Panino($pane, $proteine, $insalate, $salse);
// $paninazzo2 = new Panino(new CerealBread, new Ham, new tomato, new  mayonnaise 
// )
// var_dump($paninazzo);




// ESERCIZIO 2 
// Sfruttando dependency injection e object composition costruite una Casa, che abbia come attributi tetto, mura e pavimenti. Fate in modo che questi attributi siano valorizzati necessariamente da oggetti di classe Tetto, Mura e Pavimento.

// abstract class roof
//  {
//     abstract public function rooftype();
//  }

// class woodRoof extends roof 
// {
//     public function rooftype()
//     {
//         echo "Questo tetto è stile rustico \n";
//     }
// }

// class cementRoof extends roof
// {
//     public function rooftype()
//     {
//         echo "Questo tetto è in cemento \n";
//     }
// }

// class pvcRoof extends roof
// {
//     public function rooftype()
//     {
//         echo "Questo tetto è in PVC ed è più economico \n";
//     }
// }

// abstract class walls
// {
//     abstract public function wallstype();
// }

// class cementWalls extends walls
// {
//     public function wallstype()
//     {
//         echo "Queste mura sono fatte con il cemento \n";
//     }

// }

// class woodWalls extends walls
// {
//     public function wallstype()
//     {
//         echo "Queste mura sono fatte con il legno e sono stile rustico";
//     }
// }

// class dryWalls extends walls
// {
//     public function wallstype()
//     {
//         echo "Queste mura sono fatte con il cartngesso ed è la soluzione più economica \n";
//     }

// }

// abstract class floor
// {
//     abstract public function floortype();
// }

// class woodFloor extends floor
// {
//     public function floortype()
//     {
//         echo "questo pavimento in legno richiama lo stile rustico \n";
//     }
// }

// class marbleofCarraraFloor extends floor
// {
//     public function floortype()
//     {
//         echo "questo pavimento è in marmo di Carrara ed è la scelta più costosa oltre che pregiata \n";
//     }
// }

// class ceramicFloor extends floor
// {
//     public function floortype()
//     {
//         echo "questo pavimento in mattonelle è la scelta meno cara \n";
//     }
// }


// Class House {

// public $roof,$walls,$floor;

// public function ___constructor(roof $tetto, walls $muri,floor $pavimento)


// {
//     $this-> roof = $tetto;
//     $this-> walls = $muri;
//     $this-> floor = $pavimento;
    
// }



// }

// $roof = new woodRoof;
// $walls = new woodWalls;
// $floor = new marbleofCarraraFloor; 
// $casa = new House (1,2,3);

// var_dump($House);

//FINE ESERCIZIO 2


// //ESERCIZIO 3
// Creare un Esercito (Army) con Dependency Injection e object composition, che sia composta da: una Attack, che si occupi dell'attacco una Defense, che si occupi della difesa Attack e Defense saranno delle classi che si estenderanno in tutte le classi figlie che volte. Fate in modo che i parametri accettati siano PER FORZA oggetti di classe Attack e Defense (Date spazio alla fantasia! Se volete può essere un esercito fantasy o un esercito medievale o uno futuristico! Potete divertirvi, l'importante è ripetere i meccanismi)



abstract class attack
{
    abstract public function attacktype();
    
}

class Vegeta extends attack
{
    public function attacktype()
    {
        echo "BIG BANG ATTAAAAACK!!!!!!!!";
    }
}

class Goku extends attack
{
    public function attacktype()
    {
        echo "ON-DA ENER-GE-TI-CAAAAAAAA!!!!!!";
    }
}

Class Gohan extends attack
{
    public function attacktype()
    {
        echo "LAMPO DISTRUTTOREEEEEEEEEE!!!!!!";
    }
}

abstract class defense
{
    abstract public function defensetype();
}

class Junior extends defense
{
    public function defense()
    {
        echo "CANNONE SPECIALEEEEEEE!!!!";
    }
}

class Crilin extends defense
{
    public function defensetype()
    {
        echo"COLPO DEL SOLEEEEEE!!!!";
    }
}

Class Ginew extends defense
{
    public function defensetype()
    {
        echo"SQUADRA GINEW IN AZIONEEE!!!";
    }
}


// class Army {
//     public ($attack,$defense)

//     public function ___constructor($attaco,$difesa)
//     {
//         $this->attack=$attacco;
//         $this->difesa=$defense;
//     }
// }

// $Esercito = new Army ();