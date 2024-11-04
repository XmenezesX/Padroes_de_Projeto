<?php
include "GoogleDriveService.php";
include "DropboxService.php";

$google = new GoogleDriveService();
$dropbox = new DropboxService();
echo $google->uploadFile("Arquivo File goole\n");
echo $dropbox->uploadFile("Arquivo File dropbox\n");

?>