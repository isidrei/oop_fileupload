<?php
include "retrieve.php";
$success = $_GET['success'] ?? null;
$error = $_GET['error'] ?? null;
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<title>PDC10 Registrations</title>
</head>
<body style="background:#FCF2CD">

<div>
    <?php if (!is_null($success)): ?>
        <div class="alert alert-success" role="alert">
            Successfully saved your registration!
        </div>
    <?php endif ?>
            
    <?php if (!is_null($error)): ?>
        <div class="alert alert-danger" role="alert">
            Failed to save your registration, please upload the appropriate file type.
        </div>
    <?php endif ?>
</div>


    <div class="container">
        
                   <center> <h2 style="color:#878787 "><b>Registrations</b></h2> </center>
                    <form method="POST" action="register.php">
                    <a href="register.php"><button type="button" class="btn btn-outline-secondary">Add Another Registration</button></a>
                    </form>
    </div>

    <div class="container">
        <table class="table table-striped table-hover">
        <thead class="thead-dark bg-dark" style="color:white">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Complete Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Registered Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $retrieve = new Retrieve;
                $retrieveData = $retrieve->retrieveData();
                foreach($retrieveData as $data){
                ?>
                    <tr>
                        <th scope="row"><?php echo $data['id']?></th>
                        <td><?php echo $data['complete_name']?></td>
                        <td><?php echo $data['email']?></td>
                        <td><?php echo "<img width=250x; height=250x; src=" . $data['picture_path'] . ">";?></td>
                        <td><?php echo $data['registered_at']?></td>
                    </tr>
                <?php } ?>				
            </tbody>
        </table>
    </div>

</body>
</html>