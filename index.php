<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Assignment #2, Calculations, Using PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Shyla Oommen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon[1].png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32[1].png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16[1].png">
    <link rel="manifest" href="./favicon/site[1].webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Surface Area and Volume of a Cylinder, Using PHP</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Surface Area and Volume of a Cylinder, Using PHP</h1>";
			echo "<h3>This program will calculate the surface area and volume of a cylinder.</h3>";
      echo "<h3>Formulas: <br> SA=2πrh+2πr<sup>2<br>V= πr<sup>2</sup>h</h3>";
		?>
    <center>
    <img src="./images/SA_cylinder.png" alt="Surface Area of a Cylinder" width="25%" height="25%">
    <img src="./images/V_cylinder.png" alt="Volume of a Cylinder" width="25%" height="25%">
    </center>
		<!-- form to get radius and height from the user -->
    <form action="./answers.php" method="post" target="results">
      <label for="lblRadius">Radius (cm):</label>
      <input type="text" id="radius" placeholder="Enter the radius (cm)..." name="radius"><br><br>
      <label for="lblHeight">Height (cm):</label>
      <input type="text" id="height" placeholder="Enter the height (cm)..." name="height"><br><br>

      <input type="submit" value="Calculate Surface Area and Volume">
		</form>

			<!-- iframe for the results to show on the web page. -->
      <center>
			<iframe id="results" name="results">	
				<p>The surface area of the cylinder is  " + $sAreaRounded + cm<sup>2</sup>" and the volume is " + $volumeRounded + cm<sup>3</sup></p>"
	    </iframe>
      </center>
	</body>
</html>