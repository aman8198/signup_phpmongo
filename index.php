


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>user registration|MONGO|php</title>
</head>
<body>



    <div class="center">
    <form action = "process.php" method = "post">
     <div class = "container">
      <div class = "row">
       <div class="col-sm-3">
       <h2>Register </h2>
       <p> fill the details </p>
         <hr class ="mb-3">
         <label for="firstname"><b> firstname </b> </label> 
           <input class= "form-control" type="text" id ="firstname " name ="firstname" required>
           <label for="lastname"><b> lastname </b> </label> 
           <input class= "form-control" type="text" id ="lastname " name ="lastname" required>
           <label for="phonenumber"><b> phonenumber </b> </label> 
           <input class= "form-control" type="text" id ="phonenumber " name ="phonenumber" required>
           <label for="firstname"><b> email </b> </label> 
           <input class= "form-control" type="email" id ="email " name ="email" required>
           <label for="password"><b> password </b> </label> 
           <input class= "form-control" type="password" id ="password" name ="password" required> 

           <hr class="mb-3">

           <input class="btn btn-primary" type="submit" id= "register"name="create" value="Sign Up">

       
       </div>

      </div>

    </div>

    </form>
    
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>


</body>
</html>