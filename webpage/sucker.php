<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>sucker</title>
	<link href="buyagrade.css" type="text/css" rel="stylesheet" />
</head>
<body>
		
		<?php 

	$name=isset($_REQUEST["Name"])?$_REQUEST["Name"]:"";
	$section=isset($_REQUEST["Section"])?$_REQUEST["Section"]:"";
	$creditCard=isset($_REQUEST["creditCard"])?$_REQUEST["creditCard"]:"";
	$cardType=isset($_REQUEST["card"])?$_REQUEST["card"]:"";
$suckerInfo=$name.";".$section.";".$creditCard.";".$cardType.";".PHP_EOL;
file_put_contents('listOfSuckers.txt',$suckerInfo,FILE_APPEND);
		 ?>
	<?php 	 	 if($name && $section && $creditCard && $cardType){
		?>
		 <h1>Thanks, sucker!</h1>
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
	 <?php 	} 
else{
	?> <p class="warning">	You didn't fill out the form completely <a href="buyagrade.html">Try again?</a></p>
	<?php 	
}
	 ?>
</body>
</html>