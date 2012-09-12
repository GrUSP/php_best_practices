<?php

class FTPFileRepository implements FileOperationsInterface {

    protected $connection_id;

    public function connect($host, $port, $timeout){
        $this->connection_id = ftp_connect($host, $port, $timeout);
    }

    public function disconnect(){
        return ftp_close($this->connection_id);
    }

    public function isConnected(){
        return (bool)$this->connection_id;
    }

    public function login($username, $password){
        return ftp_login($this->connection_id, $username, $password);
    }

    public function download($local_file, $remote_file, $mode) {
        return ftp_get($this->connection_id, $local_file, $remote_file, $mode);
    }

    public function upload($remote_file, $local_file, $mode) {
        return ftp_put($this->connection_id, $remote_file, $local_file, $mode);
    }

    public function remove($path) {
        return ftp_delete($this->connection_id, $path);
    }
}
