 <?php 
   $name = "Bro";
   $food = "Pizza";
   
   $age = 23;
   $gpa = 2.5;
   $price = 4.99;
   $tax_rate = 3.5;
   $quantity = 3;

   $total = null;

   echo "Hello $name <br>";
   echo "You like $food <br>";
   echo "You are $age years old <br>";
   echo "Your GPA is $gpa <br>";  
   echo "Your pizza is \$$price <br>";   //price ko $ nk pya chin yin backslash $ 
   echo "The tax rate is $tax_rate% <br>";  //% paw chin yin variable a nout mhr % htae
   echo "You ordered $quantity x {$food}s <br>";

   $total = $quantity * $price;
   echo "Total is \$$total <br><br><br>";

   
  
?>

