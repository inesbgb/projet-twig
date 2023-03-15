<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';


$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];

echo $products->render('products.html.twig', ['products' => $products]);



?>



