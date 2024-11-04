<?php
include "GoogleDrive.php";
include "Dropbox.php";

$google = new GoogleDrive();
$dropbox = new Dropbox();
echo $google->uploadFile("Arquivo File goole\n");
echo $dropbox->uploadFile("Arquivo File dropbox\n");

?>