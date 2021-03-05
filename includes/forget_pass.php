<?php
include 'db.php';
include 'header.php';
?>
<div class="container">
  <h2>   Forget Password</h2>
  <form action="#" method="POST">
    <div class="form-group">
      <label for="email"> Enter Your Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <br>
    <div class="form-group">
      <input type="submit" class="btn btn-warning" id="pwd"   value="Submit" name="submit">
    </div>
    <br>
  </form>
  <br>
</div>
</body>
</html>


<?php
 if(isset($_POST['submit'])){
 $email = $_POST['email'];

   if(!empty($email)){
     $query = "SELECT * FROM login WHERE email = '$email'  ";
     $fire = mysqli_query($conn, $query);
     if(mysqli_num_rows($fire) == 1){
              $row = mysqli_fetch_assoc($fire);
              $id = $row['id'];
              if($row){
              header("location: ./enter_password.php?id=$id");
            }else{
              die("Query Failed_" . mysqli_error($conn));
            }
        }else{
          echo "<script> alert('Sorry Email is not in our database')</script>";
        }
     } else{
      
       header("location: ./forget_pass.php");
    }
  }
?>