<!-- Alteris Group
August 14, 2017
oliver rodriguez -->

<!-- For numbers which are multiples of booth 3 and 5,
print "FizzBuzz" instead of the number. -->

<!DOCTYPE html>
<html>
<head>
<title>TASK 1 - Fourth QUESTION</title>
</head>
<body>

  <?php


  for( $i=1; $i<=100; $i++ )
  {
    if ($i % 3 == 0 || $i % 5 == 0) {
      echo "FizzBuzz";
    }

    echo ("$i, ");

  }

  ?>

</body>
<html>
