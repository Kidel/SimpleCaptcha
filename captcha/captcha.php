<?php

	if (!isset($_SESSION)) 	
		session_start(); 
	$clock_num = rand(2, 6);

	$_SESSION['clock_num'] = $clock_num;

	$width=120;
	$height=30;
	$width2=$width*2;
	$height2=$height*2;

	$image = imagecreatetruecolor($width2, $height2);
	$image_big = imagecreatetruecolor($width2, $height2);

	$transparent = imagecolorallocatealpha($image, 200, 200, 200, 127);
	$transparent_big = imagecolorallocatealpha($image_big, 200, 200, 200, 127);

	$black = imagecolorallocate($image, 0, 0, 0);
	$color = imagecolorallocate($image, 200, 100, 90); // red
	$white = imagecolorallocate($image, 255, 255, 255);

	imagesavealpha($image, true);
	imagefill($image, 0, 0, $transparent);
	imagesavealpha($image_big, true);
	imagefill($image_big, 0, 0, $transparent_big);

	$clock = imagecreatefrompng("clock.png");
	$piece = imagecreatefrompng("piece.png");


	for ($i=0; $i<5; $i++) {
		imagecopyresampled($image, $piece, 32+(32*$i)+rand(0,3)-rand(0,3), rand(1,20), 0, 0, 16, 17, 16, 17);
	}
	for ($i=0; $i<$clock_num; $i++) {
		imagecopyresampled($image, $clock, 10+(32*$i)+rand(0,3)-rand(0,3)+(7*(6-$clock_num)), rand(1,20), 0, 0, 14, 15, 14, 15);
	}


	imagecopyresampled($image_big, $image, 0,0,0,0, $width2, $height2,  $width2, $height2);


	imagedestroy($image);
	imagedestroy($clock);
	imagedestroy($piece);

	header("Content-type: image/png");
	imagepng($image_big);

	imagedestroy($image_big);

?>