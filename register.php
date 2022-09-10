<!doctype html>
<html lang="en">

    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


        <title> Registration</title>
        <meta charset="UTF-8">
    </head>
<body>
   <center> <h1> Registration Form</h1>  
   
    
  <form method="POST" enctype="multipart/form-data" action="index.php">
    <div class="mb-3">
    <label for="fname"><b>Complete Name</b></label><br>
    <input type="text" id="fname" name="fname" required><br> <br>
    <label for="emailad"><b>Email Address </b></label><br>
    <input type="email" id="lname" name="lname" required><br> <br>
    <label for="pwd"><b>Password</b></label><br>
    <input type="password" id="pwd" name="pwd" required><br> <br>
    <label for="cpwd"><b>Confirm Password</b></label><br>
    <input type="password" id="pwd" name="pwd" required>  <br> <br>

      <label for="input_file" class="form-label"> <b>Upload your file <br> <br></b></label>
      <input name="input_file" class="form-control" type="file" id="input_file" required>
    </div>
   <br> <input type="submit" value="Upload the file" class="btn btn-secondary btn-lg"  required/>
  </form>

</center>

  </form>




</html>