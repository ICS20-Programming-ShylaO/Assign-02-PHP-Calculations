<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Assignment #2, Calculations, Using PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Shyla Oommen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Surface Area and Volume of a Cylinder, Using PHP</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Surface Area and Volume of a Cylinder, Using PHP in PHP</h1>";
			echo "<h3>This program will calculate the surface area and volume of a cylinder.</h3>";
      echo "<h3>Formulas: V= πr<sup>2</sup>h <br> SA=2πrh+2πr<sup>2</sup>"
		?>
    <img src="./images/SA_cylinder.png" alt="Surface Area of a Cylinder" width="75%" height="auto">
    <img src="./images/V_cylinder.png" alt="Volume of a Cylinder" width="75%" height="auto">
		<!-- form to get side a, b, base, and height from the user -->
    <form action="./results.php" method="post" target="results">
      <label for="lblSideA">Side A (cm):</label>
      <input type="text" id="side_a" placeholder="Enter the side a (cm)..." name="side_a"><br><br>
      <label for="lblSideB">Side B (cm):</label>
      <input type="text" id="side_b" placeholder="Enter the side b (cm)..." name="side_b"><br><br>
      <label for=lblBase">Base (cm):</label>
      <input type="text" id="base" placeholder="Enter the base (cm)..." name="base"><br><br>
      <label for="lblHeight">Height (cm):</label>
      <input type="text" id="height" placeholder="Enter the height (cm)..." name="height"><br><br>

      <input type="submit" value="Calculate Perimeter and Area">
		</form>

			<!-- iframe for the results to show on the web page. -->
			<iframe id="results" name="results">			
				The area of the triangle is  " + $area + cm<sup>2</sup>"<br>
        The perimeter of the triangle is " + $perimeter + cm"
	    </iframe>
	</body>
</html>