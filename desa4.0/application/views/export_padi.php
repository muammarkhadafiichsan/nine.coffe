<h4> RKSP     : Data Usaha dan Produk</h4>
<h4>PROVINSI  : Jawa Timur</h4>
<h4>KAB/KOTA  : Banyuwangi</h4>
<h4>TAHUN     : 2019
<h5>
  <table border="1">
  <tr>
    <td>no</td>
  <td>Dusun</td>
<td>jumlah data</td>
<td>padi hibrida</td>
<td>jumlah data</td>
<td>padi inbrida</td>
<td>total Data Keseluruhan</td>
<td>total kerusakan</td>

</tr>
      <?php
      $no = 1;
      foreach ($data as $i) {
        ?>
    <tr>
     <td><?php echo $no; ?></td>
      <td><?php echo $i['kecamatan'];?></td>
      <td><?php echo $i['jumlah_tanam1'];?></td>
      <td><?php echo $i['padi_hibrida'] ;?></td>
      <td><?php echo $i['jumlah_tanam2'];?></td>
      <td><?php echo $i['padi_inbrida'] ;?></td>
      <td><?php echo $i['total'] ;?></td>
      <td><?php echo $i['kerusakan'];?></td>
    </tr></h5>
</center>
<?php } ?>
</table>
<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Export-Data-Padi.xls");
        ?>