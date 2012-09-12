<?php

class FTPFileRepositoryAdapter extends FTPFileRepository implements FileOperationsInterface {

    protected function initConnetion() {
        $this->connect($host, $port, $timeout);
        $this->login($username, $password);
    }

    public function getContent($filename) {
        $this->initConnetion();
        $this->download($local_file, $remote_file, $mode);
        $content = file_get_contents($local_file);
        $this->disconnect();

        return $content;
    }

    public function putContent($local_file, $data) {
        $this->initConnetion();
        file_put_contents($local_file, $data);
        $this->upload($remote_file, $local_file, $mode);
        $this->disconnect();
    }

    public function removeFile($filename) {
        $this->initConnetion();
        $this->remove($filename);
        $this->disconnect();
    }

}
