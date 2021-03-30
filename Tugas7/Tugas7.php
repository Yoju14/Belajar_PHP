
<?php
$angka = [1,2,3,4,5,6,7,8,9,10];
$jenis_bilangan1 = "Bilangan Ganjil";
$jenis_bilangan2 = "Bilangan Genap";

?>
<h1>Tabel Bilangan</h1>
<table border="1">
  <tr>
         <td>Bilangan</td>
         <td>Jenis</td>
  </tr>
  <tr>
        <td><?php echo "$angka[0]" ?></td>
        <td>
          <?php
          if($angka % 2 <> 0){
              echo "$jenis_bilangan1";
          }else{
              echo "$jenis_bilangan2";
          }
        ?>
        </td>
  </tr>
  <tr>
        <td><?php echo "$angka[1]" ?></td>
        <td>
          <?php
               if($angka % 2 == 0){
                echo "$jenis_bilangan1";
            }else{
                echo "$jenis_bilangan2";
            }
          ?>
        </td>
  </tr>
  <tr>
        <td><?php echo "$angka[2]" ?></td>
        <td>
          <?php
               if($angka % 2 <> 0){
                echo "$jenis_bilangan1";
            }else{
                echo "$jenis_bilangan2";
            }
          ?>
        </td>
  </tr>
  <tr>
 <td><?php echo "$angka[3]" ?></td>
 <td>
        <?php
             if($angka % 2 == 0){
                echo "$jenis_bilangan1";
            }else{
                echo "$jenis_bilangan2";
            }
        ?>
 </td>
</tr>
<tr>
 <td><?php echo "$angka[4]" ?></td>
 <td>
        <?php
            if($angka % 2 <> 0){
                echo "$jenis_bilangan1";
            }else{
                echo "$jenis_bilangan2";
            }
        ?>
 </td>
</tr>
<tr>
 <td><?php echo "$angka[5]" ?></td>
 <td>
        <?php
             if($angka % 2 == 0){
                echo "$jenis_bilangan1";
            }else{
                echo "$jenis_bilangan2";
            }
        ?>
 </td>
</tr>
<tr>
 <td><?php echo "$angka[6]" ?></td>
 <td>
        <?php
            if($angka % 2 <> 0){
                echo "$jenis_bilangan1";
            }else{
                echo "$jenis_bilangan2";
            }
        ?>
 </td>
</tr>
<tr>
 <td><?php echo "$angka[7]" ?></td>
 <td>
        <?php
             if($angka % 2 == 0){
                echo "$jenis_bilangan1";
            }else{
                echo "$jenis_bilangan2";
            }
        ?>
 </td>
</tr>
<tr>
 <td><?php echo "$angka[8]" ?></td>
 <td>
        <?php
             if($angka % 2 <> 0){
                echo "$jenis_bilangan1";
            }else{
                echo "$jenis_bilangan2";
            }
        ?>
 </td>
</tr>
<tr>
 <td><?php echo "$angka[9]" ?></td>
 <td>
        <?php
             if($angka % 2 == 0){
                echo "$jenis_bilangan1";
            }else{
                echo "$jenis_bilangan2";
            }
        ?>
 </td>
</tr>
</table>