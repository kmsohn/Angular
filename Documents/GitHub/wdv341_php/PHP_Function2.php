<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV341 PHP Functions</title>
</head>

<?php
	$collegeName = "DMACC"; //
	
	$name = "Kathy"
	$name2 = "Sohn"
		
		function PrintCollege ($inSchool) {
			echo $inSchool;
		}
	
	function charactercount ($inString)
	{
		return string ($inString);
	}
	
	function studentInfo ($fname; $college) {
		$str = " - $fname $lname, I attend $college";
	}
?>
	
<body>

<p>Today is  
<?php 
echo "Today is " . date("Y/m/d") . "<br>";

?></p>
 

 <?php
echo "International date is " . date("d/m/y") . "<br>";

?> 


<p>&nbsp;</p>
</body>
</html>