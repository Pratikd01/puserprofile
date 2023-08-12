<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
    <img src="img4.png" alt="Girl in a jacket" width="1000" height="60">
        <h2>Student Registeration Page</h2>
        <form action="index.php" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" >
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" >
            </div>

            <div class="form-group">
                <label for="phoneno">Phone-no</label>
                <input type="phoneno" class="form-control" id="phoneno" name="phoneno" >
            </div>
            <div class="form-group">
                <label for="PRN">PRN</label>
                <input type="text" class="form-control" id="prn" name="prn">
            </div>
            <button type="submit" name="register" class="btn btn-primary">Register</button>
            <button type="submit" formaction="login.php" class="btn btn-primary">Back</button>
           
            

            
        </form>
        
        
       
           
        
    </div>
</body>
</html>
