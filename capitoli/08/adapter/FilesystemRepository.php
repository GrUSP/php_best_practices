<?php

class FilesystemRepository implements FileOperationsInterface {

    protected $base_dir;

    public function __construct($base_dir = null) {
        $this->base_dir = is_null($base_dir) ? '/tmp/' : $base_dir;
    }

    public function getContent($filename) {
        return file_get_contents($this->base_dir.$filename);
    }

    public function putContent($filename, $data) {
        return file_put_contents($this->base_dir.$filename, $data);
    }

    public function removeFile($filename) {
        return unlink($this->base_dir.$filename);
    }

}
