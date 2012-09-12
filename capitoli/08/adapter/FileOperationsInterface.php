<?php

interface FileOperationsInterface {
    public function getContent($filename);

    public function putContent($filename, $data);

    public function removeFile($filename);
}
