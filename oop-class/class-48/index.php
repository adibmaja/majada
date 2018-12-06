<?php
 
 require 'vendor/autoload.php';
 use Intervention\Image\ImageManagerStatic as Image;
 
 $image = Image::make('image/a.jpeg')->resize(100,100)->save('image /a5.jpeg',100);

?>