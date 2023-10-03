<?php
 if (isset($_POST['submit'])){
    echo "Form is submitted";
 }else{
    echo "Form is not submitted";
 }


?>

<form action="<?php $_PHP_SELF ?>" method="post">
  <input type="text" name="username">
  <button type="submit" name="submit">Register</button>
</form>