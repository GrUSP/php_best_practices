<?php

class AdapterFactory {
    public static function create($order_type) {
        switch ($order_type) {
            case 'ordine_prodotti_fisici':
                //return new FTPFileRepositoryAdapter();
                return new FTPFileAdapter(new FTPFileRepository());
            case 'ordine_prodotti_virtuali':
                return new FilesystemRepository('/my/special/folder/');
        }
    }
}

