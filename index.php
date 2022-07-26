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
  <!-- TaskPHP  -->
  <!-- Sukurti naują projektą su index.php failu.
įsidėti bootstrap CDN 
Įsidėti lentelę
table ir lentelę gražiai apipavidalinti su bootstrap ar CSS/SCSS// ?????kas yra SCSS?

susikurti GET formą kuri turėtų 4 įvesties laukus. tema  pagal jūsų fantaziją.

1. Atvaizduoti HTML duomenis kuriuos suveda vartotojas į formą.
2. Susikurti sesiją, įdėti tai ką vartotojas užpildė formoje ir su ciklu atvaizduoti ekrane
3. Atvaizduoti gražiai, bootrstapiniame table   -->
  <h1>Hello, please fill in all fields!</h1>
  <?php
  session_start();
  if (!isset($_SESSION['participants'])) {
    $_SESSION['participants'] = [];
  }

  if (isset($_GET["name"])  && isset($_GET["surname"]) && isset($_GET["email"]) && $_GET["name"] != "" && $_GET["surname"] != "" && $_GET["email"] != "") {
    $_SESSION['participants'][] = ['name' => $_GET['name'], 'surname' => $_GET['surname'], 'email' => $_GET['email']];
  }
  // print_r(array_keys($_SERVER));
  // print_r($_POST);
  ?>
  <div class="container">
    <form action="" method="get">
      <input type="text" name="name">
      <input type="text" name="surname">
      <input type="text" name="email">
      <button type="submit" class="btm btm-success">submit</button>
    </form>

    <table class="table table-bordered">
      <thead class="thead-dark">
        <tr class="active">
          <th scope="col">name</th>
          <th scope="col">surname</th>
          <th scope="col">email</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($_SESSION['participants'] as $ptc) {
        ?>
          <tr>
            <!-- <td> <?= $ptc['name'] ?> </td>  -->
            <td> <?php echo $ptc['name']; ?> </td>
            <td> <?php echo $ptc['surname']; ?> </td>
            <td> <?php echo $ptc['email']; ?> </td>
          </tr>
        <?php } ?>
        <!-- <tr>
      <th scope="row">1</th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td></td>
      <td></td>
      <td></td>
    </tr> -->
      </tbody>
    </table>

  </div>

  <!-- Training php tasks -->
<!-- Task 1 (kint ir sal)
Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)". -->


<!-- Task 2 (kint ir sal)
Naudokite funkcija Math.random(). Sukurkite du kintamuosius ir naudodamiesi funkcija Math.random() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4 (sveiki skaičiai). Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio. -->

<!-- Task 3 (kint ir sal)
Naudokite funkcija Math.random(). Sukurkite tris kintamuosius ir naudodamiesi funkcija Math.random() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25 (sveiki skaičiai). Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę. -->

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