<?php
include './includes/db.php';
include './includes/header.php';
?>
<?php
if(isset($_POST['submit'])){

$email = $_POST['email'];
$pass = $_POST['pwd'];


if(!empty($email) && !empty($pass)){
    $query = " INSERT INTO login (email, pass) VALUES ('$email', '$pass')";
    $fire = mysqli_query($conn, $query);
    if($fire){
       
       header("location: ./feed.php");
    }else{
    echo "Can't create  your account";
    }
}

}





?>


<div class="container">
  <h2>  Create Account</h2>
  <form action="#" method="POST">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>


    <div class="form-group">
    <br>
    
      <input type="submit" class="btn btn-warning" id="pwd"  name="submit">
    </div>

  </form>
</div>

</body>
</html>