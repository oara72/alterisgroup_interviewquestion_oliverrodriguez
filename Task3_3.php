<!-- Alteris Group
August 14, 2017
oliver rodriguez -->

<!-- For each multiple of 5, print "buzz" instead of the number
whithout using a modulus operand -->

<!DOCTYPE html>
<html>
<head>
<title>TASK 3 - Third QUESTION</title>
</head>
<body>

  <?php


  for( $i=1; $i<=100; $i++ )
  {
    if ($i / 5 == 0) {
      echo "Buzz";
    }
    echo ("$i, ");

  }

  ?>

</body>
<html>
