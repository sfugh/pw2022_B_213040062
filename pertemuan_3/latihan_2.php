<?php
//control flow

//Pengulangan (for, while, do...while, foreach/array)
//Pengkondisian (if..else, if..else if..else, ternary, switch)

//latihan 2
for( $i = 0; $i < 5; $i++ ) {
  echo " Hello World! <br>" ;
}

$i = 0;
while( $i < 5) {
  echo "hElo <br>";
$i++;
}

$i = 0;
do {
  echo "HEElo";
$i++;
} while( $i < 5 );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <tittle>Belajar PHP</tittle>
</head>
<body>
    <table border="1" cellpading="10" cellspacing="0">
      <?php
      for( $i = 1; $i <= 3; $i++)  {
          echo "<tr>";
          for( $j = 1; $j <= 5; $j++)  {
              echo "<td>$i,$j</td>";
          }
          echo "</tr>";
      }
      ?>
    </table>
</body>
</html>


<?php
//Pengkondisian

$x = 20;
 if ( $x < 20){
     echo "benar";
 } 
else if( $x == 20) {
    echo "bingo!";
}

 else{
    echo "salah";
}
 

?>