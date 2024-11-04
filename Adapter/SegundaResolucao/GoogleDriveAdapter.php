<?php
include_once 'ICloudStorage2.php';
include_once 'GoogleDrive.php';

class GoogleDriveAdapter implements ICloudStorage2 {
    private $googleDrive;

    public function __construct(GoogleDrive $googleDrive) {
        $this->googleDrive = $googleDrive;
    }

    public function upload($file) {
        return $this->googleDrive->uploadFile($file);
    }
}
?>
