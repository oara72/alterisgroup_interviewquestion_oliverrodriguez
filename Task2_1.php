<!-- Alteris Group
August 14, 2017
oliver rodriguez -->

<!-- Write a short program that prints a bubble sorted list of screen.
Use the following array of numbers as input -->

<!DOCTYPE html>
<html>
<head>
<title>TASK 2 - QUESTION</title>
</head>
<body>

  <?php

  function bubble_sort($arr) {
      $size = count($arr);
      for ($i=0; $i<$size; $i++) {
          for ($j=0; $j<$size-1-$i; $j++) {
              if ($arr[$j+1] < $arr[$j]) {
                  swap($arr, $j, $j+1);
              }
          }
      }
      return $arr;
  }

  function swap(&$arr, $a, $b) {
      $tmp = $arr[$a];
      $arr[$a] = $arr[$b];
      $arr[$b] = $tmp;
  }

  /* test bubble sort */

  $arr = array(13,14,25,7,8,9,10,12,13,1,2,3,8,5,8);

  print("Before sorting");
  print_r($arr);

  $arr = bubble_sort($arr);
  print("After sorting by using bubble sort");
  print_r($arr);

  ?>

</body>
<html>
