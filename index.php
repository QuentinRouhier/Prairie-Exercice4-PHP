<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ex4</title>
  </head>
  <body>
    <?php
      $min=0;
      $max=100;
      echo "Fizz";
      for($i = $min; $i <= $max; $i++) {
         if ( $i % 3 ==0 ) {
       echo "\n"."$i";
         }
     }
     echo "<br/>"."Buzz";
     for($i = $min; $i <= $max; $i++) {
        if ( $i % 5 ==0 ) {
      echo "\n"."$i";
        }
    }
    echo "<br/>"."FizzBuzz";
    for($i = $min; $i <= $max; $i++) {
       if ( $i % 3 ==0 ) {
     echo "\n"."$i";
       }
       if ( $i % 5 ==0 ) {
     echo "\n"."$i";
       }
   }
     ?>
  </body>
</html>
