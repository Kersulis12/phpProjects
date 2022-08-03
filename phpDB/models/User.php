<link rel="stylesheet" href="./css/main.css">
<?php
class User {
public $Id;
public $Name;
public $Surname;
public $Email;
public $PhoneNumber;

public function __construct($Id, $Name, $Surname, $Email, $PhoneNumber) {
    $this->id = $Id;
    $this->name = $Name;
    $this->surname = $Surname;
    $this->email = $Email;
    $this->phoneNumber = $PhoneNumber;
}

// public function toString()
// {
    #code
// }


public static function save ($conn) {
    print_r($conn);
    $stmt = $conn->prepare("INSERT INTO users (name, surname, email, phone_number) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $_POST['name'], $_POST['surname'], $_POST['email'], $_POST['phN'],);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }

}

?>