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
  <title>Document</title>

</head>

<body>

  <!-- Training php tasks -->
<!-- Task 1 (kint ir sal)
Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)". -->
<?php
$vardas = "Margarita ";
$pavarde = "Margarittttttta";
$gimmetai = 2000;
$metai = 2022;
$age = $metai - $gimmetai;

echo "<h2>Aš esu " . $vardas . $pavarde . ". Man yra " . $age . " metai." . "</h2>";
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


<!-- Task 4 (stringai)
Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą. -->

<!-- Task 5 (stringai)
Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms. (LEONARDO dicaprio) -->

<!-- Task 6 (stringai)
Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti. -->

<!-- Task 7 (stringai)
Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą; -->

<!-- Task 8
Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją; -->

<!-- Task 9
Sugeneruokite atsitiktinį stringą iš raidžių ir skaičių. Visus skaitmenis stringe įdėkite į h1 tagą. Raides palikite. Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) Keitimui naudokite pirmo patobulintą (jeigu reikia) uždavinio funkciją. -->

<!-- Task 10
Sukurkite funkciją kuri pakeltų paduotą skaičių n laipsniu, ir gražintų reikšmę (paduodate du parametrus, skaičių ir laipsnį) -->

<!-- Task 11
Sukurkite funkciją kuri priims tris parametrus. skaičių, laipsnį ir HTML elemento id.
ši funkcija naudos antrają funkciją ir jos rezultatą gražins į HTML elementą. -->

<!-- Task 12
Sukurkite funkciją kuri priimtų vieną parametrą, HTML elemento id.
ši funkcija paims prieš tai jau minėtą HTML elementą, iš jo paims skaičių, ir išspausdins visus variantus
koks galėjo būti pirminis skaičius kurį kėlėme laipsniu. pvz jei į antrąją funkciją padavėme
2 ir kėlėme 4 laipsniu, ir gavome skaičių 16, tai ši funkcija turėtų išspausdinti, kad pradžioje
greičiausiai turėjome skaičių 2 pakeltą 4 laipsniu, arba skaičių 4 pakeltą 2 laipsniu. -->




</body>

</html>