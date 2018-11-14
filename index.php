<?php
//echo "Salut";
// Déterminer deux nombre entiers representés par deux variables premierNombre et deuxièmeNombre
// Afficher sur la page le résultat de l'addition, la soustraction, la division, la multiplication

$premierNombre = 10;
$deuxièmeNombre = 2;

echo $premierNombre + $deuxièmeNombre;
echo "<br>"; 
echo $premierNombre - $deuxièmeNombre;
echo "<br>";  
echo $premierNombre / $deuxièmeNombre;
echo "<br>";  
echo $premierNombre * $deuxièmeNombre;
echo "<br>";  
// Afficher le deuxième prénom du tableau sur la page
$prenoms = ["Jules", "Marine", "Nais", "Bastien"];
echo $prenoms[1];// ecrit Marine sur la page
// Afficher tous les prénoms sur la page
echo "<br>";
echo $prenoms[0];//ecrit Jules sur la page
echo "<br>";
echo $prenoms[2];//ecrit Nais sur la page
echo "<br>";
echo $prenoms[3];//ecrit Bastien sur la page
echo "<br>";

// Refaire la même chose à l'aide d'une boucle "for"
for ($numero = 0; $numero < count($prenoms); $numero++)
{
   echo $prenoms[$numero] . '<br />';// Le "point" est utilisé pour faire une concaténation
}
// Rajouter un prénom au tableau (à la suite des autres)
array_push($prenoms, "Victoire");
var_dump($prenoms); // var_dump permet d'ausculter une variable


// Trouver une fonction PHP qui fera ce travail là : savoir si dans le tableau j'ai, par exemple, le prénom "Marine"

var_dump(in_array("Marine", $prenoms));

// Trouver une fonction PHP qui fera ce travail là : savoir si dans le tableau j'ai, par exemple, le prénom "Kevin"
var_dump(in_array("Kevin", $prenoms));

/*--------------------------------------------------------------------------------------------------------------
---------------------------------------------------------EXO LOTERIE--------------------------------------------
----------------------------------------------------------------------------------------------------------------*/
//générateur de nombre aléatoire fonction RAND
$min = 1;
$max = 49;
echo mt_rand($min,$max);

//tableau qui contient 6 nombres, aléatoires, uniques, triés par ordre croissant

const NUMBER_COUNT = 6; // Représenter le nombre de nombres entiers qu'on veut pour le tirage
const MIN_BOUND = 1;
const MAX_BOUND = 49;


$max=49;
$i=1;
$tableau = array();
while ($i<7)
{
    $tirage = rand(1, $max);

    if (!in_array($tirage, $tableau)) 
    {
        $tableau[] = $tirage;       
            $i++;
    }
}
// Trier le tableau, les nombres par ordre croissant
sort($tableau);
var_dump($tableau);//pour l'affichage de débeugage c'est plus complet que print_r qui est une vieille fonction


//$tableau = tirageLoterie(); // On dit que la variable tirage est le résultat de la fonction tirageLoterie
// Inclusion de la vue
include("indexloterie.phtml");
    
/*-------------------------------------------------------------------------------------------------------------
--------------------------------------------------FIN EXO LOTERIE----------------------------------------------
--------------------------------------------------------------------------------------------------------------*/ 
// PREMIERE correction LOTERIE
// Tirage de la loterie
/* Tirage de la loterie
$tirage = [];

while (count($tirage) < 6) { // Tant qu'on a pas 6 chiffres dans le tableau
    $nombreAleatoire = rand(1, 49); // On génère un nombre aléatoire entre 1 et 49
    if (!in_array($nombreAleatoire, $tirage)) { // Si le nombre n'est pas déjà dans le tableau
        array_push($tirage, $nombreAleatoire); // Alors on rajoute le nombre au tableau
    }
}

// Trier le tableau, les nombres par ordre croissant
sort($tirage);

// Affichage du tirage
for ($i = 0; $i < count($tirage); $i++) {
    echo $tirage[$i] . "<br>";
}
// Inclusion de la vue
include("index.phtml");


// DANS LE FICHIER PHTML AU TOUT DEBUT
<?php
var_dump($tirage);
?>
*-------------------------------------------------------------------------------------------------------/

// DEUXIEME correction en intégrant des constantes et une fonction

/*const NUMBER_COUNT = 6; // Représenter le nombre de nombres entiers qu'on veut pour le tirage
const MIN_BOUND = 1;
const MAX_BOUND = 49;

function tirageLoterie() {
    // Tirage de la loterie
    $tirage = [];

    while (count($tirage) < NUMBER_COUNT) { // Tant qu'on a pas 6 chiffres dans le tableau
        $nombreAleatoire = rand(MIN_BOUND, MAX_BOUND); // On génère un nombre aléatoire entre 1 et 49
        if (!in_array($nombreAleatoire, $tirage)) { // Si le nombre n'est pas déjà dans le tableau
            array_push($tirage, $nombreAleatoire); // Alors on rajoute le nombre au tableau
        }
    }

    // Trier le tableau, les nombres par ordre croissant
    sort($tirage);
    
    return $tirage;
}

$tirage = tirageLoterie(); // On dit que la variable tirage est le résultat de la fonction tirageLoterie

// Inclusion de la vue
include("index.phtml");*/

?>