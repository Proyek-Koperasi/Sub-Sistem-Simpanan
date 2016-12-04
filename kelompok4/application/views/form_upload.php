<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

 
<?php echo form_open_multipart('upload_file/do_upload'); ?>
<input type="file" name="file_upload" />
<input type="submit" name="upload" value="upload" />
<?php echo form_close(); ?>

 
</body>
</html>
