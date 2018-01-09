<?php
if (!isset($_GET['id']))
$id = "397430";
else 
$id=$_GET['id']; 
use google\appengine\api\cloud_storage\CloudStorageTools;
$options = ['size' => 400, 'crop' => true];
$image_file = "gs://${imagenes-autos}/".$id.".jpg";
$image_url; = CloudStorageTools::getImageServingUrl($image_file, $options);
echo $image_url;
?>