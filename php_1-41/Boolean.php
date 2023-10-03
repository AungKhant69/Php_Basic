  <?php

  // blank string "" is false
  // zero string "0" is false
  // signed integer is true
  // array without element is false
    $boolean = 5 > 4;
    var_dump($boolean);
    echo $boolean;

    $bol = array();
    echo $bol ? "True" : "False";
  ?>