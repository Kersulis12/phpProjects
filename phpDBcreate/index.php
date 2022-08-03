<?php
    // -----backendas (base)-----
include "./controllers/ParticipantController.php";
    

    // $db = new DB();//$db yra objektas, kurio konstruktorius DB.php prisijungia prie db
    // ------saving---------------

if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST['save'])) {
            // echo "successfully saved";
            $hasErrors = ParticipantController::store();
            if (!$hasErrors) {
                header("Location:".$_SERVER['REQUEST_URI']);
            }
        }

        if (isset($_POST['edit'])) {
            $participant = ParticipantController::show();
     
        }

        if (isset($_POST['update'])) {
            ParticipantController::update();
            header("Location:".$_SERVER['REQUEST_URI']);
        }

        if (isset($_POST['destroy'])) {
            ParticipantController::destroy();
            header("Location:".$_SERVER['REQUEST_URI']);
        }
}
   
$participants = ParticipantController::index();
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
<link rel="stylesheet" href="./images/desktop background images hd Collection 71.jpg">
    <title>Document</title>
    <style>
        h1 {
            color: gray;
            font-size: 500%;
        }
        p{
            color: gray;
            font-size: 250%;
        }
        label {
            color: gray;
            font-size: 100%;
            font-weight: bolder;

        }
        ::placeholder {
            color: gray;
            font-size: 100%;
            font-weight:lighter;

        }
        /* input {
            color: transparent;
        } */
        form {
            margin-top: 20px;
            /* color: transparent; */
        }
        button {
            color: brown;
        }
        /* table {
            width:50%;
        } */
        tr {
          color: rgb(41, 21, 8);
          /* color:rgb(red, green, blue);   */
          font-size: 100%;
          font-weight: bolder;
        
        }
    
    </style>  
</head>
<body>
    <div class="header container">
    <!-- <header class="w3-container w3-teal"> -->


    <h1><strong>
        <!-- <img src="./images/desktop background images hd Collection 71.jpg" style="float:left;width:42px;height:42px;"> -->
        Sustai(e)nable&World
    </strong></h1>
    <p> Participant list</p>
    
    <!-- </header> -->
    </div>

    <div class="form container">
        
        <?php
        
        if(isset($_SESSION) && isset($_SESSION['errors'])) {
            foreach ($_SESSION['errors'] as $error) { ?>
            <div class="alert alert-danger" role="alert">
                <?= $error ?>
            </div>
        <?php }
            unset($_SESSION['errors']);
        } ?>

    <form action="" method="post">

        <div class="row">
            <div class="form-group col-md-2">
                <label >Name</label>
                <input type="text" class="form-control" name="name" placeholder="Vardas"
                  <?=isset($_POST['edit']) ? 'value="' . $participant->name.'"' : "" ?>
                >
            </div>
            <div class="form-group col-md-2">
                <label >Surname</label>
                <input type="text" class="form-control" name="surname" placeholder="Pavardė"
                  <?=isset($_POST['edit']) ? 'value="' . $participant->surname.'"' : "" ?>
                >
            </div>
        </div>
        
        <div class="row">
            <div class="form-group col-md-2">
                <label >Country</label>
                <input type="text" class="form-control" name="country" placeholder="Šalis"
                  <?=isset($_POST['edit']) ? 'value="' . $participant->country.'"' : "" ?>
                >
            </div>
            <div class="form-group col-md-2">
                <label >Job</label>
                <input type="text" class="form-control" name="job" placeholder="Darbas"
                  <?=isset($_POST['edit']) ? 'value="' . $participant->job.'"' : "" ?>
                >
            </div>
        </div>  
        <br>
        <div class="button container">
        <?= isset($_POST['edit']) ? '<input type="hidden" name="id" value="'.$participant->id.'">' : "" ?>
        <button type="submit" class="btn btn-primary" name=
           <?=isset($_POST['edit']) ? '"update" >Atnaujinti' :'"save" >Išsaugoti'?>
        </button> 
        </div>      
    </form>
    </div>
    <br>
    <div class="table container">
    <table class="table table-bordered" style="width:40%">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Country</th>
                <th>Job</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        
    <?php foreach ($participants as $participant) {?>
        <!-- php foreach paleidžiame ir uždarome php tagą. žemiau esantis html įvyks tiek kartų kiek kartų ciklas prasisuks -->
                   <tr>
                         <td><?=$participant->name?></td> <!-- taip atvizduojame kintamuosius -->
                         <td><?=$participant->surname?></td>
                         <td><?=$participant->country?></td>
                         <td><?=$participant->job?></td>
                         <td>
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?=$participant->id?>">
                                <button type="submit" class="btn btn-success" name="edit" value=" <?=$participant->id?> " >edit</button>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?=$participant->id?>">
                                <button type="submit" class="btn btn-danger" name="destroy" >delete</button>
                            </form>
                        </td>                  
                   </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>

    <!-- <footer class="w3-container w3-teal">
    <h5>Footer</h5>
    <p>Footer information goes here</p>
    </footer> -->

</body>
</html>

<!-- form action yra kreipimosi veiksmas -->