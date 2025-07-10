<?php

declare( strict_types = 1 );


require __DIR__ . '/vendor/autoload.php';


$toaster = new \App\Toaster();

$toaster->addSlide( 'Bread' );
$toaster->addSlide( 'Bread' );

$toaster->toast();


$toasterPro = new \App\ToasterPro();

$toasterPro->addSlide( 'Bread' );
$toasterPro->addSlide( 'Bread' );
$toasterPro->addSlide( 'Bread' );
$toasterPro->addSlide( 'Bread' );

$toasterPro->toastBagel();