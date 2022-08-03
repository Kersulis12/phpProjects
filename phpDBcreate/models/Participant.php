<!-- <link rel="stylesheet" href="./css/main.css"> -->
<?php
include "./models/DB.php";
class Participant {
public $id;
public $name;
public $surname;
public $country;
public $job;

public function __construct($id, $name, $surname, $country, $job) 
{
    $this->id = $id;
    $this->name = $name;
    $this->surname = $surname;
    $this->country = $country;
    $this->job = $job;
}

public static function find($id)
{
    $db = new DB();
    $sql = "SELECT * FROM `participants` where `id` =". $id;
    $result = $db->conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        $participant = new Participant($row["id"], $row["name"], $row["surname"], $row["country"], $row["job"]);
    }
    $db->conn->close();
    return $participant;

}
public static function all()//paims visus irasus is konkrecios DB
{
    $participants = [];
    $db = new DB();
    $sql = "SELECT * FROM `participants`";
    $result = $db->conn->query($sql);

    while ($row = $result->fetch_assoc()) {
       $participants[] = new Participant($row["id"], $row["name"], $row["surname"], $row["country"], $row["job"]);
    }
    $db->conn->close();
    return $participants;

}
    

public static function create(){
    $db = new DB();
    $stmt = $db->conn->prepare("INSERT INTO participants (name, surname, country, job) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $_POST['name'], $_POST['surname'], $_POST['country'], $_POST['job'],);
        $stmt->execute();
        $stmt->close();
        $db->conn->close();
    }

    public static function update() {
    $db = new DB();
    $stmt = $db->conn->prepare("UPDATE participants SET name = ?, surname = ?, country = ?, job = ? WHERE id = ?");
        $stmt->bind_param("ssssi", $_POST['name'], $_POST['surname'], $_POST['country'], $_POST['job'], $_POST['id']);

        $stmt->execute();
        $stmt->close();
        $db->conn->close();
    }

    public static function destroy() {
    $db = new DB();
    $stmt = $db->conn->prepare("DELETE FROM participants WHERE id = ?");
        $stmt->bind_param("i", $_POST['id'],);
        $stmt->execute();
        $stmt->close();
        $db->conn->close();
    }
}

?>