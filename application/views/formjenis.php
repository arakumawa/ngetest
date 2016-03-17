<br>
<div id="wrap">  
<div class="container">  
<?php if (validation_errors()) { ?>  
<div class="alert alert-error">  
<button type="button" class="close" data-dismiss="alert">x</button>  
<h4>Terjadi Kesalahan!</h4>
<?php echo validation_errors(); ?>  
</div>  
<?php } ?>  
<?php echo form_open('crud/simpan', 'class="form-horizontal"'); ?>  
<div class="control-group">  
<legend>Data Jenis Soal</legend>  
</div>  
<div class="control-group">  
<label class="control-label" for="kd_soal">Kode Soal</label>  
<div class="controls">  
<input type="text" style="width:300px;" name="kd_soal" value="<?php echo $kode_soal; ?>"
placeholder="Kode Soal">  
</div>  
</div>  
<div class="control-group">  
<label class="control-label" for="nm_soal">Nama Soal</label>  
<div class="controls">  
<input  type="text"  style="width:300px;"  name="nm_soal"  value="<?php  echo  
$nama_jenis; ?>" placeholder="Nama Soal"/>  
</div>  
</div>  
<div class="control-group">  
<label class="control-label" for="jn_soal">Jenis Soal</label>  
<div class="controls">  
<select style="width:300px;" name="jn_soal">  
     <option>Latihan</option>  
     <option>Tryout</option>  
</select>  
</div>  
</div>  
<div class="control-group">  
<label class="control-label" for="versi">Versi Soal</label>  
<div class="controls">  
<input  type="text"  style="width:300px;"  name="versi"  value="<?php  echo  $versi_jenis  ?>"  
placeholder="Versi Soal"/>  
</div>  
</div>  
<input type="hidden" name="st" value="<?php echo $st ?>" />   
<input type="hidden" name="id" value="<?php echo $id_jenis ?>" /> 
<a class="btn" href="<?php echo site_url('crud'); ?>">Back</a>   
<button class="btn btn-primary" type="submit" value="submit" name="submit">Save</button>  
             <?php echo form_close(); ?>  
</div>  
<div id="push"></div>  
</div>  
  
