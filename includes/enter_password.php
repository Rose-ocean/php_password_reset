<?php
include 'db.php';
include 'header.php';

if(isset($_GET['id'])){

    $id = $_GET['id'];
}
if(isset($_POST['submit'])){
    $pass1 = $_POST['pwd'];
    $pass_2 = $_POST['pwd_2'];
    if(!empty($pass1) && !empty($pass_2)){
        if($pass1 == $pass_2){
            $query = "UPDATE login SET pass =  '$pass1' WHERE id = '$id' ";
            $fire = mysqli_query($conn, $query);
            if($fire){  

                 echo "<script> alert('Sorry Email is not in our database')</script>";
                sleep(1);
                header("location: ../feed.php");

              }else{
                  die("query failed _". mysqli_error($conn));
              }



        }else{
            echo "Pre-type and re-type don't Match";
        }
    }else{
        echo "Field can't be empty";
    }
}
?>


    <div class="container">
        <form action="#" method="POST">
            <div class="form-group">
            <label for="email"> Enter Your Password:</label>
            <input type="password" class="form-control" id="email" placeholder="Enter email" name="pwd">
            </div>
            <div class="form-group">
            <label for="email"> Re-enter Your Password:</label>
            <input type="password" class="form-control" id="email" placeholder="Enter email" name="pwd_2">
            </div>
            <br>
            <div class="form-group">
            <input type="submit" class="btn btn-warning" id="pwd"   value="Submit" name="submit">
            </div>
            <br>
        </form>
    </div>
  </body>
</html>