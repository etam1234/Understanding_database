<h1> <center> Games-Hub <center> </h1>
<form action ="interface.php" method=POST>
  <input type ="varchar(16)" name="name" placeholder="UserName">
  <br>
  <input type ="varchar(64)" name="pass" placeholder="Password">
  <br>
  <input type ="varchar(2)" name="state" placeholder="State">
  <br>
  <input type ="varchar(64)" name="city" placeholder="City">
  <br>
  <input type ="varchar(64)" name="street" placeholder="Street">
  <br>
  <input type ="varchar(16)" name="payment" placeholder="Payment method">
  <button type="submit" name="submit">
    Sign up
  </button>
</form>
  
<form action= "interface.php" method=POST>
  <input type ="varchar(16)" name="login_name" placeholder="UserName">
  <br>
  <input type="varchar(64)" name="login_pass" placeholder="Password">
  <button type="submit" name="login_submit">
    Login
  </button>
</form>
