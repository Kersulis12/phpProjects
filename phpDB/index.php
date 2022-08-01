<?php
    // -----backendas (base)-----
    include "./models/User.php";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "myweb_29";
    $conn = new mysqli($servername, $username, $password, $db);


    // ------saving---------------

    if ($_SERVER['REQUEST_METHOD'] =="POST") {//sukurtas statinis metodas, kuris uzsiima user issaugojimu
        User::save($conn);
    }

//    --------------take from DB------------------
    $conn = new mysqli($servername, $username, $password, $db); //create connection
    // if ($conn->connect_error) { //chek connection
    //     die("Connection failed: " . $conn->connect_error);
    // }
    // echo "Connected successfuly";
    $sql = "SELECT * FROM `users`";
    $result = $conn->query($sql);
    // print_r($result);

    $users = [];
    //output data of each row
    while($row = $result->fetch_assoc()) {
        $users[] = new User( $row["id"], $row["name"], $row["surname"], $row["email"], $row["phone_number"] );
    }
    $conn->close();
    // print_r($users);
    
?>


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
   
    <!-- <style>
  body {
  border: 100px;

}
</style> -->
</head>
<body>
    <span style='font-size:80px;'>&#128562;</span>
    <h2>Data base "For learning purposes"</h2>
    <p>Please fill in and save!&#128578;</p>
    
    <form action="" method="post">
        <p>name</p>
        <input type="text" name="name">
        <p>surname</p>
        <input type="text" name="surname">
        <p>email</p>
        <input type="text" name="email">
        <p>phN</p>
        <input type="text" name="phN">
        <button type="submit">Save</button>
    </form>

    <h3>List of users:</h3>
    <?php
    echo "<table style='border: solid 1px black;'>";
    echo "<tr><th>First Name</th><th>Last Name</th><th>Email</th><th>PhoneNumber</th></tr>";

    class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myweb_29";

    try {
       $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $stmt = $conn->prepare("SELECT name, surname, email, phone_number FROM users");//phone_number?
       $stmt->execute();

    // set the resulting array to associative
       $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
          echo $v;
        }
    }
    catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    }
    $conn = null;
    echo "</table>";
    
    
    // -----------------------frontend--------------------

    // foreach ($users as $user) {
    //     echo "<p>" .$user->name."</p>";
    //     echo "<p>" .$user->surname."</p>";
    //     echo "<p>" .$user->email."</p>";
    //     echo "<p>" .$user->phoneNumber."</p>";
    // }


    // foreach ($users as $user) {
    //   echo "<p>" .$user->name. $user->surname. $user->email. $user->phoneNumber."</p>";
    // }
    
    
    ?>

    
    
</body>
</html>

