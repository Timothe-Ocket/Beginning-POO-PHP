<head>
  <!-- Include the Tailwind JS file -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<?php

require_once "square.php";
require_once "circle.php";
require_once "triangle.php";
require_once "ellipse.php";

$rectangle = new square(5, 4);
    echo "Largeur : ", $rectangle -> getWidth(), "<br>";
    echo "Hauteur : ", $rectangle -> getHeight(), "<br>";
    echo "Aire : ", $rectangle -> area(), "<br><br>";

$cercle = new circle(6);
    echo "Rayon : ", $cercle -> getRadius(), "<br>";
    echo "Aire : ", $cercle -> area(), "<br><br>";

$triangle = new triangle(20, 50);
    echo "Base : ", $triangle -> getBase(), "<br>";
    echo "Hauteur : ", $triangle -> getHeight(), "<br>";
    echo "Aire : ", $triangle -> area(), "<br><br>";

$shapes[] = $rectangle;
$shapes[] = $cercle;
$shapes[] = $triangle;

var_dump($shapes);
echo "<br><br>";

foreach ($shapes as $shape){
    echo $shape->area(), "<br>";
}   
echo "<br>";

$ellipse = new ellipse(8, 12);
    echo "LargeurRadius : ", $ellipse -> getWidthR(), "<br>";
    echo "HauteurRadius : ", $ellipse -> getHeightR(), "<br>";
    echo "Aire : ", $ellipse -> area(), "<br><br>";

echo '<div class="bg-sky-500">' . $cercle->getCoords() . '</div>';

?>
</body>