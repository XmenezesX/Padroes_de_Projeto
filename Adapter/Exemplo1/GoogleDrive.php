<?php
include_once "BaseCloudStorage.php";

class GoogleDrive extends BaseCloudStorage{
    public function uploadFile($file)
    {
        // lógica de implementação de upload
        return "Google Drive implementado : {$file}";
    }
}

?>