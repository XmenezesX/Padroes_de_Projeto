<?php
include_once 'ICloudStorage2.php';
include_once 'Dropbox.php';

class DropboxAdapter implements ICloudStorage2 {
    private $dropbox;

    public function __construct(Dropbox $dropbox) {
        $this->dropbox = $dropbox;
    }

    public function upload($file) {
        return $this->dropbox->uploadToDropbox($file);
    }
}
?>
