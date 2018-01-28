<html>
<body>
<!-- // Write a form that accepts user input. Supply two text boxes, one for width and
// one for height. Write your own function that accepts two parameters (width and height) and
// calculates the area (product). The function should return a sentence “The calculated area of
// width (user inserted width) and height (user inserted height) is: (calculated area)”. This
// sentence should be printed on screen. -->


width <?php echo $_POST["width"]; ?><br>
height <?php echo $_POST["height"]; ?><br>
The calculated area of width and height is: <?php echo $_POST["width"] * $_POST["height"];?>



</body>
</html>
