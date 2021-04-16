<?php
require '../vendor/autoload.php';

$objet = new App\wcs\Hello();

echo $objet->talk();

$objet2 = new HelloWorld\SayHello();
echo SayHello::world();