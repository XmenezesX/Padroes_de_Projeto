<?php
include_once "BaseCloudStorage.php";

class Dropbox extends BaseCloudStorage{
    public function uploadFile($file)
    {
        // lógica de implementação de upload
        return "Dropbox implementado: {$file}";
    }
}

?>