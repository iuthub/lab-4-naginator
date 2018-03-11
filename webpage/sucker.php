<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>sucker</title>
	<link href="buyagrade.css" type="text/css" rel="stylesheet" />
</head>
<body>
		<h1>Thanks, sucker!</h1>
		<?php 

	$name=$_REQUEST["Name"];
	$section=$_REQUEST["Section"];
	$creditCard=$_REQUEST["creditCard"];
	$cardType=$_REQUEST["card"];
$suckerInfo=$name.";".$section.";".$creditCard.";".$cardType.";".PHP_EOL;
file_put_contents('listOfSuckers.txt',$suckerInfo,FILE_APPEND);
		 ?>
<p>Your information has been recorded.</p>
<dl>
	<dt>
		Name: <dd> <?php echo $name ?></dd>
	</dt>
<dt> Section:<dd> <?php echo $section ?></dd></dt>
<dt>Credit Card:  <dd> <?php echo $creditCard ?> (<?php echo $cardType ?>)</dd></dt>
</dl>
	<p>Here are all the suckers who submited here:</p> <br>
	<pre>	
	<?php 
echo file_get_contents('listOfSuckers.txt');
	 ?>
	 </pre>
</body>
</html>