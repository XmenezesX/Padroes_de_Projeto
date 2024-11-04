<?php
include_once "BaseCloudStorage.php";

class GoogleDriveService extends BaseCloudStorage{
    public function uploadFile($file)
    {
        // lógica de implementação de upload
        return "Google Drive implementado : {$file}";
    }
}

?>