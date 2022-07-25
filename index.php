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

    <title>Document</title>
    <!-- <link rel="stylesheet" href="./ --> ??? ar reikia linko i css?
</head>

<body> 
<!-- TaskPHP  -->
<!-- Sukurti naują projektą su index.php failu.
įsidėti bootstrap CDN 
Įsidėti lentelę
table ir lentelę gražiai apipavidalinti su bootstrap ar CSS/SCSS

susikurti GET formą kuri turėtų 4 įvesties laukus. tema  pagal jūsų fantaziją.

1. Atvaizduoti HTML duomenis kuriuos suveda vartotojas į formą.
2. Susikurti sesiją, įdėti tai ką vartotojas užpildė formoje ir su ciklu atvaizduoti ekrane
3. Atvaizduoti gražiai, bootrstapiniame table   -->
<h1>          Hello, please fill in all fields!</h1>
<?php
    session_start();
    if(!isset($_SESSION['participants'])){
        $_SESSION['participants'] = [];
    }

    if(isset($_GET["name"])  && isset($_GET["surname"]) && isset($_GET["email"]) && $_GET["name"] !="" && $_GET["surname"] !="" && $_GET["email"] !=""){
      $_SESSION['participants'][] = ['name' => $_GET['name'], 'surname' => $_GET['surname'], 'email' => $_GET['email'] ];
    }
    // print_r(array_keys($_SERVER));
    // print_r($_POST);
?>
  <div class = "container">
  <form action="" method="get">
        <input type="text" name="name">
        <input type="text" name="surname">
        <input type="text" name="email">
        <button type="submit" class ="btm btm-success">submit</button>
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
              <!-- <td> <?=$ptc['name']?> </td>  -->
              <td> <?php echo $ptc['name'];?> </td> 
              <td> <?php echo $ptc['surname'];?> </td> 
              <td> <?php echo $ptc['email'];?> </td> 
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



</body>
</html>
