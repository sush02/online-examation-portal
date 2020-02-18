<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
    
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'quizdbase');

?>


<html>
    <head>
        <title> HOME PAGE</title>
        
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    
<body>
    <div class="container">
        <br><h1 class="text-center text-primary"> NETWORKS QUIZ </h1><br>
        <h2 class="text-center text-success">Welcome <?php echo $_SESSION['username']; ?></h2><br>
        
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 m-auto d-block">
        
        <div class="card">
            <h3 class="text-center card-header"><?php echo $_SESSION['username']; ?>, you have to select only one out of 4.BEST OF LUCK!!</h3>
            
        </div><br>
            
    <form action="check1.php" method="post"> 
        <?php
        for($i=1;$i<3;$i++) { 
           $q="select * from questions1 where qid=$i";
           $query=mysqli_query($con,$q);
        
           while($rows=mysqli_fetch_array($query)){
        ?>
        <div class="card">
            <h4 class="card-header"> <?php echo $rows['question']?></h4>
            
            <?php
                   
                   $q="select * from answer1 where ans_id=$i";
                   $query=mysqli_query($con,$q);
        
           while($rows=mysqli_fetch_array($query)){
               ?> 
            
            <div class="card-body">
                <input type="radio" name="quizcheck[<?php echo $rows['ans_id'];?>]" value="<?php $rows['aid'];  ?>">
                <?php echo $rows['answer'];   ?>
                
            </div>
            

    <?php               
           }
           }
           }
        ?>
            <input type="submit" name="submit" class="btn btn-success m-auto d-block">
        </form>
        </div>
        </div><br><br>
        <div class="m auto d-block">
        <a class="btn btn-primary" href="logout.php"> LOGOUT </a>
    </div><br> 
        <div>
            <h5 class="text-center"> ©2019 </h5>
        </div>
    </div>
</body>
</html>
    
    