<h2>Exercice 1</h2>

<p>Modifier le code ci-dessous pour calculer la moyenne des notes.</p> 

<?php
   $note_maths = 15;
   $note_francais = 12;
   $note_histoire_geo = 9;
   $moyenne = ($note_maths+$note_francais+$note_histoire_geo)/3;
   echo 'La moyenne est de '.$moyenne.' / 20.';
?>

<h2>Exercice 2</h2>

<p>Calculer le prix TTC du produit.</p>

<?php
   $prix_ht = 50;
   $tva = 20;
   $prix_ttc = $prix_ht+($prix_ht*$tva/100);
   echo 'Le prix TTC du produit est de '.$prix_ttc.' €.';
?>

<h2>Exercice 3</h2>

<p>Déclarer une variable $test qui contient la valeur 42. En utilisant la fonction var_dump(), faire en sorte que le type de la variable $test soit string et que la valeur soit bien de 42.</p>

<!-- Votre code php est à écrire ci-dessous -->

<?php 

$test = '42';
var_dump($test);

?>



<h2>Exercice 4 </h2>

<p>Déclarer une variable $sexe qui contient une chaîne de caractère ayant la valeur homme. Créer une condition qui affiche le message 'Bonjour Monsieur' si la valeur de la variable est homme, 'Bonjour Madame' si la valeur de la condition est femme, 'Bonjour personne non identifiée ou genrée' si la valeur n'est ni femme ni homme.</p>

<!-- Votre code php est à écrire ci-dessous -->

<?php
$sexe = "homme";

if($sexe =="homme"){
    echo "Bonjour Monsieur";
}else if ($sexe=="femme"){
    echo "Bonjour Madame";
}else {
    echo "Bonjour personne non identifiée ou génrée";
};

// ou bien en utilisant le switch : https://www.php.net/manual/fr/control-structures.switch.php

    switch($sexe){
        case("homme"):
            echo "Bonjour Monsieur";
        break;
        case("femme"):
            echo "Bonjour Madame";
        break;
        default :
        echo "Bonjour personne non genrée ou identifiée";
        break;
    };

?>



<h2>Exercice 5</h2>

<p>Déclarer une variable $age qui contient la valeur de type integer de votre choix. Réaliser une condition pour afficher si la personne est mineure ou majeure.</p>

<!-- Votre code php est à écrire ci-dessous -->
<?php

$age = 17;
if($age < 18){
    echo "mineur";
} else {
    echo "majeur";
};

// autre 

if ($age >= 18) {
    echo "Vous êtes majeur";
}else {
    echo "Vous êtes mineur";
};

?>


<h2>Exercice 6</h2>

<p>Déclarer une variable $budget qui contient la somme de 1 553,89 €. Déclarer une variable $achats qui contient la somme de 1 554,76 €. 
<br>
Afficher : "Le budget (XXXX €) permet de payer tous les achats (XXXX €)" ou "Le budget (XXXX €) ne permet pas de payer tous les achats (XXXX €)". 
<br>
Le bon message s'affichera en fonction des valeurs contenues dans $budget et $achats; 
</p>

<!-- Votre code php est à écrire ci-dessous -->

<?php

$budget = 1553.89;
$achat = 1554.76;

if($budget >= $achat){
    echo "Le budget :".$budget."€ permet de payer tous les achats d'un montant de ".$achat. "€!";
}else {
    echo "Le budget :".$budget."€  ne permet pas de payer tous les achats d'un montant de ".$achat. "€!"; 
};

?>



<h2>Exercice 7</h2>
<p>Déclarer une variable $heure qui contient la valeur de type integer de votre choix comprise entre 0 et 24. Créer une condition qui affiche un message si l'heure est le matin, l'après-midi ou la nuit.</p>

<!-- Votre code php est à écrire ci-dessous -->

<?php 
$heure = 23.99;
/*
J'utilise cette fonction php settype afin de typer ma variable et donc mieux gérer sa valeur de sortie)*https://www.php.net/manual/fr/function.settype.php
settype($heure,"integer");
var_dump($heure);
*/
echo ($heure>=22 || $heure<6 ? "c'est la nuit":(($heure<14)?"c'est le matin":"c'est l'aprem"));

if ($heure < 0 || $heure > 23){
    echo "Cette heure est incorrecte";
}elseif ($heure >= 7 && $heure < 12){
    echo "Bonne matinée";
}elseif ($heure >=12 && $heure < 22) {
    echo "Bonne après-midi";
}else {
    echo "Bonne nuit";
}
?>



<h2>Exercice 8</h2>
<p>En utilisant la boucle <code>while</code>, afficher tous les entiers possibles de 77000</p>

<!-- Votre code php est à écrire ci-dessous -->

<?php 

/*
$i = 77000;
while($i < 78000){
    echo $i++;
};
*/

$i = 77000 ;

while ($i <= 77999){
    echo $i.' ';
    $i++;
};

?>



<h2>Exercice 9</h2>
<p>En utilisant la boucle <code>for</code>, afficher la table de multiplication du chiffre 5.
La présentation du résultat attendues est la suivante : 
   <code>
      5 x 1 = 5
      <br>
      5 x 2 = 10
      <br>
      5 x 3 = 15
      <br>
      5 x 4 = 20
      <br>
      5 x 5 = 25
      <br>
      5 x 6 = 30
      <br>
      5 x 7 = 35
      <br>
      5 x 8 = 40
      <br>
      5 x 9 = 45
      <br>
      5 x 10 = 50
   </code>
</p>

<!-- Votre code php est à écrire ci-dessous -->

<?php 

for ($i=5; $i<=5; $i++){
    echo "Table de multiplication de".$i ."<br>";
    for ($j=1; $j<=10;$j++){
        echo $i ."x". $j ."=".$i*$j."<br>";
    }
};

$nombre = 5;

for ($i=1 ; $i<=10 ; $i++){
    echo $nombre .' x ' .$i. ' = '.($nombre*$i).'<br/>'; 
};


?>



<h2>Exercice 10</h2>
<p>En utilisant la boucle <code>for</code>, écrire un script qui produit le résultat ci-dessous.
   <code>
      <br>
      1
      <br>
      22
      <br>
      333
      <br>
      4444
      <br>
      55555
   </code>
</p>

<!-- Votre code php est à écrire ci-dessous -->

<?php 

for ($i=1 ; $i <= 5 ; $i++){
    echo '<br/>';
    for ($u=1 ; $u<=$i ; $u++){
        echo $i;
    };
};
echo '<br/>';
?>




<h2>Exercice 11</h2>
<p>Déclarer une variable avec le nom de votre choix et avec la valeur 0. Tant que cette variable n'atteint pas 20, il faut :
<ul>
   <li>l'afficher ;</li>
   <li>incrémenter sa valeur de 2 ;</li> 
   <li>Si la valeur de la variable est égale à 10, la mettre en valeur (en gras) avec la balise HTML appropriée. </li>
</ul>
</p>

<!-- Votre code php est à écrire ci-dessous -->

<?php

$k = 0;

while($k < 20){
    if ($k == 10){
        echo "<strong>".$k ."</strong>";
    } else {
    echo $k;
    }
    echo '<br/>';
    $k = $k+2;
}


?>

<h2>Exercice 12</h2>

<p>Déclarer une variable de type array qui stocke les informations suivantes :
<ul>
   <li>France : Paris</li>
   <li>Allemagne : Berlin</li>
   <li>Italie : Rome</li>
</ul>
Afficher les valeurs de tous les éléments du tableau en utilisant la boucle <code>foreach </code>.</p>

<!-- Votre code php est à écrire ci-dessous -->

<?php 

$tableau = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "Italie" => "Rome"
];

foreach($tableau as $ville){
    echo $ville .' ';
};


?>

<h2>Exercice bonus</h2>
<p>En utilisant la fonction <code>rand()</code>, remplir un tableau avec 10 nombres aléatoires. Puis, tester si le chiffre 42 est dans le tableau et afficher un message en conséquence comme par exemple "Le chiffre 42 est bien dans le tableau" ou "Le chiffre 42 n'est pas dans le tableau". Enfin, afficher le contenu de votre tableau avec <code>var_dump</code>.
<br>
Exemple de résultat attendu :
<br> 
Le tableau ne contient pas la valeur 42.
<br>
array(10) { [0]=> int(46) [1]=> int(7) [2]=> int(18) [3]=> int(43) [4]=> int(3) [5]=> int(22) [6]=> int(8) [7]=> int(41) [8]=> int(49) [9]=> int(44) }
</p>
<!-- Votre code php est à écrire ci-dessous -->

<?php

$table = [];
//var_dump($table);
$i = 0;

while($i < 10) {
    $table[] = rand(0, 50);
    $i++;
};


if (in_array(42, $table)){
    echo "Le chiffre 42 est bien dans le tableau";
} else {
    echo "Le chiffre 42 n'est pas dans le tableau";
};
var_dump($table);

// autre solution

foreach ($table as $nombre){
    $verif = $nombre == 42 ? true : $verif;
};
echo $verif == true ? "Le nombre est bien dans le tableau" : "Le nombre n'est pas dans le tableau";

var_dump($table);

?>