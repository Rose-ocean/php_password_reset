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
      <input type="submit" class="btn btn-warning" id="pwd"  name="submit">
    </div>

    <br><br><br>
 

<div class="form-group">
  <input type="submit" class="btn btn-warning" id="pwd"  name="submit">
</div> <div class="form-group">
  <input type="submit" class="btn btn-warning" id="pwd"  name="submit">
</div>

  </form>
</div>

</body>
</html>