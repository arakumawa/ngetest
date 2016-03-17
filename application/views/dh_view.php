<?php  
if (!defined('BASEPATH'))  
     exit('No direct script access allowed');  
?>  
<!DOCTYPE html>  
<html lang="en">  
<head>  
<title>Simple CRUD</title>  
<meta name="viewport" content="width=device-width, initial-scale=1.0">  
<meta name="description" content="">  
<meta name="author" content="">  
  
<link href="<?php echo base_url('bootstrap/css/bootstrap.css') ?>" rel="stylesheet">    
<link href="<?php echo base_url('bootstrap/css/bootstrap-responsive.css') ?>" rel="stylesheet">  
<link href="<?php echo base_url('bootstrap/css/bootstrap-fileupload.css') ?>" rel="stylesheet">  
<link href="<?php echo base_url('bootstrap/css/docs.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('bootstrap/css/custom.css') ?>" rel="stylesheet">  
<link href="<?php echo base_url('bootstrap/css/font-awesome.css') ?>" rel="stylesheet">    
<link rel="shortcut icon" href="">  
<script src="<?php echo base_url('bootstrap/js/jquery.min.js') ?>"></script>            
<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js') ?>"></script>        
<script src="<?php echo base_url('bootstrap/js/bootstrap-scrollspy.js') ?>"></script>        
<script src="<?php echo base_url('bootstrap/js/bootstrap-fileupload.js') ?>"></script>        
</head>          
  
<body>                                          
<div class="navbar navbar-inverse navbar-fixed-top">  
<div class="navbar-inner">  
<div class="container">  
<a class="brand">  
</a>  
<ul class="nav">  
<li><a href="">Simple CRUD</a></li>                                                                                                
</ul>          
</div>  
</div>  
</div>  
<div class="container">                
<div class="row">  
<div class="well">  
<?php $this->load->view($page) ?>  
</div>  
</div>                  
<div class="navbar navbar-inverse navbar-fixed-bottom navbar-min">  
<div class="navbar-inner">  
<div class="container">  
<small>&copy; 2013 - Simple CRUD</small>  
</div>                                  
</div>                          
</div>  
</body>  
</html>      
