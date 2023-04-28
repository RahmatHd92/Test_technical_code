
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="POST">
        <input type="text" placeholder="masukkan angka" name = "angka">
        <br>
        <br>
        <br>
        <input type="submit" name ="submit1"value="Generate Segitiga">
        <input type="submit" name ="submit2"value="Generate Bilangan Ganjil">
        <input type="submit" name ="submit3"value="Generate Bilangan Prima">
        </form>


        <?php
          if (isset($_POST['submit1'])){
            $nilai = "10";
            for($i=1;$i<$nilai;$i++){
                for ($j=1;$j<=$i;$j++){
                    echo $i;
                }
                echo "<br/>";
            }
          }
        
        ?>

<?php
   if(isset($_POST['submit2'])){
     for($a=1; $a<=20; $a++){
        if($a % 2==1)
        echo "Ini Bilangan Ganjil: ". $a ."<br>";
        }
         }
    ?>


<?php
if(isset($_POST['submit3'])){
    $angka = 17;
   $hasil = true;
   for ($i = 2; $i < $angka; $i++){
      if ($angka % $i == 0)
      $hasil = false;
   }
   echo 'Agka <br>' .$angka. '</b><br/>';
   echo $hasil ? 'Adalah Bilangan Prima' : 'Bukan Bilanagn Prima';
}
    ?>



    
    
</body>
</html>




