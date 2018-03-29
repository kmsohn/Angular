<?php
    $vanilla->description = 'Smooth, creamy frosting on white cake';
    $vanilla->price = 2.97;
	$vanilla->image = 'images/vanilla.jpg';

    $myJSON = json_encode($vanilla);
	
	$my_file = "vanilla.json"; 
	$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
	$data = $myJSON;
	fwrite($handle, $data);
    
    $chocolate->description = 'Rich, chocolate frosting on chocolate cake';
    $chocolate->price = 2.99;
	$chocolate->image = 'images/chocolate.jpg';

    $myJSON = json_encode($chocolate);
	
	$my_file = "chocolate.json";
	$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
	$data = $myJSON;
	fwrite($handle, $data);

	$redVelvet->description = 'Delicious cream cheese frosting on red velvet cake';
    $redVelvet->price = 2.98;
	$redVelvet->image = 'images/redVelvet.jpg';

    $myJSON = json_encode($redVelvet);
	
	$my_file = "redVelvet.json";
	$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
	$data = $myJSON;
	fwrite($handle, $data);


	$reeses->description = 'Peanut butter flavored candy, covered in a festive candy coating';
    $reeses->price = 1.99;
	$reeses->image = 'images/reeses.jpg';

    $myJSON = json_encode($reeses);
	
	$my_file = "reeses.json";
	$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
	$data = $myJSON;
	fwrite($handle, $data);
	
	$mms->description = 'Candy coated, melt in your mouth (not your hand) chocolate pieces';
    $mms->price = 1.59;
	$mms->image = 'images/mm.jpg';

    $myJSON = json_encode($mms);
	
	$my_file = "mms.json";
	$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
	$data = $myJSON;
	fwrite($handle, $data);
	
	$skittles->description = 'Fruit flavored, chewy candies, perfect for all ages';
    $skittles->price = 1.55;
	$skittles->image = 'images/skittles.jpg';

    $myJSON = json_encode($skittles);
	
	$my_file = "skittles.json";
	$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
	$data = $myJSON;
	fwrite($handle, $data);
?>