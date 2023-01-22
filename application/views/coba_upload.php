<!DOCTYPE html>
<html>
<head>
<title>Coba Upload GLB</title>
</head>
<body>
 
<?php echo $error;?>
 
<form action="<?php echo base_url(); ?>coba/do_upload" method="post" enctype="multipart/form-data">
 
<input type="file" name="userfile" size="20" />
 
<br /><br />
 
<input type="submit" value="upload" />
 
</form>
 
</body>
</html>
