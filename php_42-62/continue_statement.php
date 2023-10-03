<?php
  for($i = 0; $i <=50; $i++){
    if($i == 30){
        echo "<p style='background: yellow'>This is your order number</p><br>";
        continue;
    }else{
      echo "I value is not 30, but it is $i<br>";
    }
  }
?>