<h4> RKSP     : Data Kependudukan</h4>
<h4>PROVINSI  : Jawa Timur</h4>
<h4>KAB/KOTA  : Banyuwangi</h4>
<h4>TAHUN     : 2019
<center>
  <table border="1">
  <tr>
    <td>no</td>
  <td>Dusun</td>
<td>luas area</td>
<td>kopi arabika</td>
<td>tr</td>
<td>luas area</td>
<td>kopi robusta</td>
<td>tr</td>
<td>total keseluruhan </td>
</tr>
      <?php
      $no = 1;
      foreach ($data as $i) {
        ?>
    <tr>
      
      <td><?php echo $no; ?></td>
      <td><?php echo $i['kecamatan'];?></td>
      <td><?php echo $i['luas_area1'];?></td>
      <td><?php echo $i['kopi_arabika'];?></td>
      <td><?php echo $i['tr1'];?></td>
      <td><?php echo $i['luas_area2'] ;?></td>
      <td><?php echo $i['kopi_robusta'] ;?></td>
      <td><?php echo $i['tr2'];?></td>
      <td><?php echo $i['total'] ;?></td>
    </tr>
</center>
<?php } ?>
</table>
<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Export-Data-Kopi.xls");
        ?>