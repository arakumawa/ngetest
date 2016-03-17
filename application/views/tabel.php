<br>
<a class="btn btn-success" href="<?php echo site_url('crud/tambah_jenis') ?>">  
<i class="icon-pencil"></i> Tambah Soal</a>  
<br /> <br />  
<section>  
<table class="table table-condensed table-hover">  
<thead>  
<tr>  
<th></th>  
<th>No.</th>  
<th>Kode Soal</th>  
<th>Nama Soal</th>
<th>Jenis Soal</th>  
<th>Versi Soal</th>  
<th>Aksi</th>  
</tr>  
</thead>  
<tbody>  
<?php  
     $no = 1;  
     if ($data_get == NULL) {  
        ?>  
  <div class="alert alert-error">  
  <button type="button" class="close" data-dismiss="alert">x</button>  
  <h4>Peringatan !</h4>  
  <p>Data Soal yang anda cari tidak ada atau masih kosong </p>  
  </div>  
  <?php  
  } else {  
    foreach ($data_get as $dg) {  
   ?>  
   <tr>  
   <td></td>  
   <td><?php echo $no++; ?></td>  
   <td><?php echo $dg->kode_jenis; ?></td>  
    <td><?php echo $dg->nama_jenis; ?></td>  
   <td><?php echo $dg->jenis_soal; ?></td>  
    <td><?php echo $dg->versi_jenis; ?></td>  
   <td><a href="<?php echo site_url('crud/edit/'.$dg->id_jenis); ?>" title="Edit">  
       <i class="icon-edit"></i></a>&nbsp;&nbsp;  
        <a  href="<?php  echo  site_url('crud/hapus/'.$dg->id_jenis);  ?>"  title="delete" onclick="return confirm('Anda yakin ?');">  
        <i class="icon-remove-sign"></i>  
        </a>  
     </td>  
     </tr>  
     <?php  
             }  
         }  
         ?>  
</tbody>  
</table>  
</section>        
