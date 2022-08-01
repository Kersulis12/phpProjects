    <?php include './views/header.php';?>
    <a href="./views/home.php">kontaktai</a>
    
    <!-- <?php
    // print_r(array_keys($_SERVER));
    // // print_r($_SERVER['PHP_SELF']);
    // // print_r(__DIR__);
    // print_r(dirname((__FILE__), 2));
    // print_r(getcwd());
     ?>
     -->
<?php 
$names = ['Petras', 'Jonas', 'Zygis', 'Renata', 'Jonas'];   
$surnames = ['Pav1', 'Pav2', 'Pav3', 'Pav4', 'Pav5'];
for ($i=0; $i < count($names); $i++) {
    echo "<p>".$names[$i]. " " . $surnames[$i].'</p>';
}
$count = 1;
$person = new Person();
$person->name = "Inga";
$person->surname = "Ingggga";
$person->age = 100;
$person->id = $count;
$count++;
print_r($person);

$person1 = new Person();
$person1->name = Rutenis;
$person1->surname = Ruuuuteniiiis;
$person1->age = 150;
$person1->id = $count;
$count++;

print_r($person);
$person1->age = 22;

print_r($person);
print_r($person1);


$person2 = new Person("Maija", "Mmmmmmmmmm", 101);
$person2->id = $count;
$count++;

print_r($person2);
// echo "<br>"-------------------------------<br>";
echo $person2->name."<br>";
$persons = [$person, $person1, $person2];
foreach ($persons as $person) {
    if($person->id == 3){
        $person->name = "Maija";
    }
}
echo $person2->name."<br>";
$_SESSION['persons'] = $persons;
print_r($_SESSION['persons'] );

$person2->birthDate = 1996;
$person2->toString();
$person1->toString();
// echo "<br>============================<br>";
echo $person2->actualAge();
$person2->makeASound();
$person1->makeASound();


?>
    <h1>Hello!</h1>
    <?php include './views/footer.php';?>