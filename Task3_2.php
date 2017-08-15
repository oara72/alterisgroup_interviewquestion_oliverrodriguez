<!-- Alteris Group
August 14, 2017
oliver rodriguez -->

<!-- For each multiple of 3, print "Fizz" instead of
the number without using a modulus operand -->

<!DOCTYPE html>
<html>
<head>
<title>TASK 3 - Second QUESTION</title>
</head>
<body>

  <?php


  for( $i=1; $i<=100; $i++ )
  {
    if ($i / 3 == 0) {
      echo "Fizz";
    }
    echo ("$i, ");

  }

  ?>

</body>
<html>
