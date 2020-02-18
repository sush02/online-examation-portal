<html>
    <head>
        <title>
            

        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="bootstrap.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>


        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <br><h1 class="text-center">WELCOME TO TESTIFY</h1><br>
             <div class="row">
             <div class="col-lg-6">
                 <div class="card">
                 <h2 class="text-center card-header">LOGIN</h2>
            <form action="validation.php" method="post">
                <div class="form-group">
                    <label> USERNAME</label>
                    <input type="text" name="user" class="form-control" required>
                </div>
                <div class="form-group">
                    <label> PASSWORD </label>
                    <input type="Password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary"> LOGIN </button>
            </form>
                 </div>
                </div>
                 
                 
                 <div class="col-lg-6">
                     <div class="card">
                     <h2 class="text-center card-header">Sign Up</h2>
            <form action="registration.php" method="post">
                <div class="form-group">
                    <label> USERNAME</label>
                    <input type="text" name="user" class="form-control" required>
                </div>
                <div class="form-group">
                    <label> PASSWORD </label>
                    <input type="Password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary"> SUBMIT </button>  
                 
            </form> 
                     </div>
                 </div>
        </div>
        </div>
    </body>
</html>