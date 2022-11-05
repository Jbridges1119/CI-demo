<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1><?php echo 'bye_world'; ?></h1>
<?php
//segment 3 is the url segment after bye_world - 2 would be bye_world
	$data = $this->uri->segment(3);
 echo $data
?>

<?php 
//localhost/foler
echo base_url();
//localhost/folder/index.php;
echo site_url();

?>
	</body>
</html>
