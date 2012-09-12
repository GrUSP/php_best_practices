<?php

class FTPFileAdapter implements FileOperationsInterface {

    protected $repository;
    protected $host = '127.0.0.1';
    protected $port = '1234';
    protected $timeout = 20;
    protected $username = 'test';
    protected $password = 'test';

    public function __construct(FTPFileRepository $repository) {
        $this->repository = $repository;
    }

    protected function initConnetion() {
        $this->repository->connect($this->host, $this->port, $this->timeout);
        $this->repository->login($this->username, $this->password);
    }

    public function getContent($remote_file) {
        $local_file = '/tmp/'.time().'.xml';
        
        $this->initConnetion();
        $this->repository->download($local_file, $remote_file, 0775);
        $content = file_get_contents($local_file);
        $this->repository->disconnect();
        unlink($local_file);
        
        return $content;
    }

    public function putContent($filename, $data) {
        $this->initConnetion();
        file_put_contents($filename, $data);
        $this->repository->upload(basename($filename), $filename, 0775);
        $this->repository->disconnect();
    }

    public function removeFile($filename){
        $this->initConnetion();
        $this->repository->remove($filename);
        $this->repository->disconnect();
    }
}
