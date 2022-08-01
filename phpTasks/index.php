<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="./index.html">
  <title>Document</title>
  <!-- <style>
body {
  background-color: linen;
  margin-top: 500 pxs;
  margin-right: 500 pxs;
}

</style> -->
</head>

<body>

  <!-- Training php tasks -->
<!-- Task 1 (kint ir sal)
Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)". --> -->

<?php
$vardas = "Margarita ";
$pavarde = "Margarittttttta";
$gimmetai = 2000;
$metai = 2022;
$age = $metai - $gimmetai;

echo "<h2>Aš esu " . $vardas . $pavarde . ".<br> Man yra " . $age . " metai." . "</h2>";
echo "<p>Aš esu " . $vardas . $pavarde . ". Man yra " . $metai - $gimmetai . " metai." . "</p>";
?>

<!-- Task 2 (kint ir sal)
Naudokite funkcija Math.random(). Sukurkite du kintamuosius ir naudodamiesi funkcija Math.random() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4 (sveiki skaičiai). Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio. -->

<?php
echo(rand(0,4));
$num1 = rand(0,4);
$num2 = rand(0,4);
echo "<p>" . $num1 . "</p>";
echo "<p>" . $num2 . "</p>";
if ($num1 >= $num2 && $num1 != 0 && $num2 != 0) {
  echo '<p class="atsakymas">' . round(($num2 / $num1), 2) .  '</p>';//why does not print "atsakymas"?

}
if (($num1 <= $num2 && $num1 != 0 && $num2 != 0)) {
  echo '<p class="atsakymas">' . round(($num1 / $num2), 2) .  '</p>';
}

if ($num1 == 0 || $num2 == 0) {
  echo '<p class="atsakymas"> Nevyksta</p>';
}
?>

<!-- Task 3 (kint ir sal)
Naudokite funkcija Math.random(). Sukurkite tris kintamuosius ir naudodamiesi funkcija Math.random() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25 (sveiki skaičiai). Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę. -->

<?php
$num3 = rand(0,25);
$num4 = rand(0,25);
$num5 = rand(0,25);
echo "<p>" . $num3 . "</p>";
echo "<p>" . $num4 . "</p>";
echo "<p>" . $num5 . "</p>";
if (($num3 >= $num4 && $num4 >= $num5) ||
   ($num3 <= $num4 && $num4 <= $num5) ){
  echo '<p class="atsakymas">' . $num4 . '</p>';
}
if (($num4 >= $num5 && $num5 >= $num3) ||
   ($num4 <= $num5 && $num5 <= $num3) ){
  echo '<p class="atsakymas">' . $num5 . '</p>';
}
if (($num5 >= $num3 && $num3 >= $num4) ||
   ($num5 <= $num3 && $num3 <= $num4) ){
  echo '<p class="atsakymas">' . $num3 . '</p>';
}
?>

<!-- Task 1 (stringai)
Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą. -->

<?php
$name1 = "Jonas Jonaitis"; 
$name2 = "Petras Petraitis"; 
if ($name1 < $name2) {
  echo "<p>" . $name1 . "</p>";
}
else {
  echo "<p>" . $name2 . "</p>";
}
?>

<!-- Task 2 (stringai)
Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms. (LEONARDO dicaprio) -->

<?php
$name3 = "Dovydas "; 
$name4 = "Baronaitis"; 

echo "<p>" . strtoupper($name3) . $name4 . "</p>";

?>

<!-- Task 3 (stringai)
Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti. -->

<?php
$fullname = "<p>" . $name3[0] . $name4[0] . "</p>";
echo $fullname;
 
?>

<!-- Task 1 (ciklai)
Sugeneruokite 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti atspausdinti skliausteliuose” [ ] “. -->

<?php
$number = 0;
  $text = "";
   for ($i=0; $i < 300; $i++) { 
     $number = (rand(0, 300));// it is enough to write (0, 300), it means from 0 to 300
   if ($number > 150) {
     $number++;
   }
   if ($number > 275) {
     $text .= " [" . $number . "] ";// empty spaces " [" make empty spaces between numbers
   }
  if ($number < 275) {
     $text .= " " . $number . " ";// in php it has to be . not + 
  }
 }
 echo $number, $text;
?>

<!-- echo $number $text; -->
<!-- echo "<p>" . $number . $text . "</p>"; -->

<!-- Task 2 (ciklai)
Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki 3000, kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. -->

<?php
$number1 = 0;
  $text1 = "";
   for ($i=77; $i < 3000; $i+= 77) { 
    if ($i < 3000 - 77) {
      $text1 .= ($i . ", ");
       } else {
          $text1 .= ($i . "");
       }

  }
  echo ($text1);
?>

<!-- Task 3 (ciklai)
Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. -->
<!-- <?php
for ($i=0; $i < 10; $i++) { 
  $text2 = "<p>";
  for ($a=0; $a < 10; $a++) { 
    $text2 .= "*";
  }
  echo ($text2. "</p>");// why not square?
}
?> -->

<!-- <?php
for ($i=0; $i < 10; $i++) { 
  $text2 = "";
  for ($a=0; $a < 10; $a++) { 
    $text2 .= "*";
  }
  echo ($text2. "<br>");
}
?> -->


<?php
for ($i=0; $i < 10; $i++) { 
  $text2 = '<p class= "square">';
  for ($a=0; $a < 10; $a++) { 
    $text2 .= "*";
  }
  echo ($text2. "</p>");
}
?>

<!-- <?php
for ($i=0; $i < 10; $i++) { 
  $text2 = "";
  for ($a=0; $a < 10; $a++) { 
    $text2 .= "*";
  }
  echo wordwrap($text2. "<br\n");
}
?> -->

<!-- <?php
$strSquare= rand(1,100);
for ($i=0; $i < 100; $i++) { 
  $sText = "*";
}
echo wordwrap($sText,10,"<br>\n"); //Why?
?> -->

<!-- Task 1 (funkcijos)
Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą; -->

<?php
function tagText($text) {
  echo "<h1>" . $text . "</h1>";
}
tagText ("labas");
tagText ("kada pietus?");
tagText ("isalkau :)");


?>

<!-- Task 2 (funkcijos)
Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją; -->

 <?php
function tagTextnum($text, $numN) {
  echo "<h".$numN.">" . $text . "</h".$numN.">";
}
tagTextnum ("labas", rand(1,6));
?> 


<!-- Task 3 (funkcijos)
Sugeneruokite atsitiktinį stringą iš raidžių ir skaičių. Visus skaitmenis stringe įdėkite į h1 tagą. Raides palikite. Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) Keitimui naudokite pirmo patobulintą (jeigu reikia) uždavinio funkciją. -->
<?php
function randStrLetNum() {
  $rndStr = generateRandomString((10));
  echo $rndStr ."<br>";
  for ($i = 0; $i < strlen($rndStr); $i++) { 
    if ( is_numeric($rndStr[$i]) ) {
      echo "<h1>" . $rndStr[$i] . "</h1>";// sort()? dfgsg4f5dgs54fg1df561  [0]
    }else {
        echo "<p>" .$rndStr[$i] . "</p>";
      }
    //jeigu $i-tasis simbolis skaicius - dekime ne i p taga, o i h1. is_numeric()
    // echo "<p>".$rndStr[$i]."</p>";
  }
}

randStrLetNum();
?> 

 <?php
function generateRandomString($length = 25) {// pvz   vistiek nesuprantu..
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
// echo generateRandomString(6);
?>

<!-- Task 1.1 (funkcijos)
Sukurkite funkciją kuri pakeltų paduotą skaičių n laipsniu, ir gražintų reikšmę (paduodate du parametrus, skaičių ir laipsnį) -->
<!-- <?php
function numNum($numNum1, $n1) {
  $result =pow($numNum1, $n1);
  return ($result);
  echo $result;
}
numNum(5, 2);// why nothing?????
?> -->

<!-- Task 2.2 (funkcijos)
Sukurkite funkciją kuri priims tris parametrus. skaičių, laipsnį ir HTML elemento id.
ši funkcija naudos antrają funkciją ir jos rezultatą gražins į HTML elementą. -->
<!-- <?php
// function paramThree($numNum1, $n1, $text7) {
// $elSomething = document.getElementById("elSomething");
// elSomething.innerHTML = "<p" . text7 . "</p>";
// echo (elSomething.innerHTML);
// }
// paramThree ($numNum2, $n2, "Look");//???????????
?> -->



</body>

</html>