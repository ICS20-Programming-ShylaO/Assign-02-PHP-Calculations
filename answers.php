<?php
	// get the radius and height from the textfields
	$radius = $_POST['radius'];
	$height = $_POST['height'];

	// calculate the surface area
	$sArea = 2  * M_PI * $radius * $height + 2 * M_PI * $radius ** 2;
  $sAreaRounded = round($sArea, 2);
  // calculate the volume
  $volume = M_PI * $radius ** 2 * $height;
  $volumeRounded = round($volume, 2);
?>
<h3>Results:</h3>
The surface area of the cylinder is <?php echo "$sAreaRounded" ?>cm<sup>2</sup>, and the volume is <?php echo "$volumeRounded" ?>cm<sup>3</sup>.