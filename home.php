<?php
include './includes/db.php';
include './includes/header.php';
?>
<?php
if(isset($_POST['submit'])){

$email = $_POST['email'];
$pass = $_POST['pwd'];


  if(!empty($email) && !empty($pass)){
    $query = "SELECT * FROM login WHERE email = '$email' AND pass = '$pass' ";
    $fire = mysqli_query($conn, $query);
    if(mysqli_num_rows($fire) == 1){
     header("location: ./feed.php");
    }else{
     header("location: ./home.php");
     echo "<script>alert(' Password Donot Match')</script>";
    }
  }else{
    echo "Field cant be empty";
   header("location: ./home.php");
  }
}

?>
<div class="container">
  <h2>  login</h2>
  <form action="#" method="POST">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <br>
    <div class="form-group">
      <input type="submit" class="btn btn-warning" id="pwd"   value="Login" name="submit">
    </div>
    <br><br><br>
<div class="form-group">
<button type="submit" name="foret_password" class="btn btn-danger"><a href="./includes/forget_pass.php">Forget Password ?</a></button>
</div> <div class="form-group">
<button type="submit" class="btn btn-info"><a href=" ./create.php   "> Do not have and acocunt ?</a></button>
</div>

  </form>
</div>

</body>
</html>