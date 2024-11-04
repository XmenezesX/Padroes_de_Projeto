<?php
include_once 'GoogleDriveAdapter.php';
include_once 'DropboxAdapter.php';

$dropbox = new Dropbox();
$googleDrive = new GoogleDrive();

$googleDriveAdapter = new GoogleDriveAdapter($googleDrive);
$dropboxAdapter = new DropboxAdapter($dropbox);

echo $dropboxAdapter->upload("Dropbox ok!\n");
echo $googleDriveAdapter->upload("GoogleDrive ok!\n");

?>